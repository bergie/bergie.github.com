<?php

  // Log article object
  $moblog_log = false;

  // Name of the sender
  $moblog_sender = false;

  $moblog_entry = mgd_get_article();
  $moblog_entry->topic = $moblog_topic->id;
  $moblog_entry->author = $midgard->user;
  $moblog_entry->title = $mail->subject;
  $moblog_entry->name = date("Y-m-d",$moblog_time)."-".$moblog_time;
  $status = $moblog_entry->create();
  if ($status) {

    echo "DEBUG: Created new moblog entry #".$status."\n";
    $moblog_entry = mgd_get_article($status);

    // Update revision control information
    //rcs_update($moblog_entry);

    //print_r($mail);
    // moblog_log();

    // Fetch the image
    if (is_array($mail->attachments) && count ($mail->attachments)>0) {
      echo "DEBUG: Mail has attachments\n";
      reset ($mail->attachments);

      $moblog_succeeded = false;
      $moblog_content_switched = false;

      while (list ($k, $att) = each ($mail->attachments)) {

        $attachment=tempnam("/tmp", "ts_email_import_");
        $attachment_name=$att['name'];
        echo "DEBUG: processing attachment $attachment_name\n";
        $attachment_size=strlen($att['content']);
        $attachment_type=$att['mimetype'];

        // Get the article title from attachment
        if ($attachment_type == "text/plain" && !$moblog_content_switched) {

          // Handle possible category
          $content_parts = explode('/', $att['content']);
          $content_parts_processed = 0;
          $keywords = '';

          foreach ($content_parts as $part)
          {
              $content_parts_processed++;

              if ($content_parts_processed == count($content_parts))
              {
                  $moblog_entry->content = $part;
              }
              else
              {
                  $keywords .= strtolower($part);
                  if ($content_parts_processed < count($content_parts)-1)
                  {
                      $keywords .= ', ';
                  }
              }
          }
          $moblog_entry->extra3 = $keywords;

          echo "DEBUG: Switching content to \"{$moblog_entry->content}\"\n";
          $moblog_entry->update();
          $moblog_content_switched = true;
        }

        // Process only images for now
        if ($attachment_type == "image/jpeg") {

          $fp=fopen($attachment, "w");
          if ($fp) {
            fwrite($fp, $att['content'], $attachment_size);
            fclose($fp);
          }

          // Create the full-scale image


          // Create the view-scale image
          $stat = $moblog_entry->createattachment($attachment_name.".jpg",$attachment_name,$attachment_type);
          if ($stat) {

            $moblog_convert_view_string = $moblog_convert." -geometry ".$GLOBALS["midcom_site"]["image_max_width"]."x".$GLOBALS["midcom_site"]["image_max_width"]." -gamma 1.2 -quality 85 +profile \"*\" -colorspace rgb ".escapeshellarg($attachment)." ".escapeshellarg($moblog_tmp_dir."view_".$attachment_name);
            echo "DEBUG: Executing command: ".$moblog_convert_view_string."\n";

            // Make the view-scale image
            exec($moblog_convert_view_string);

            // If view image generation succeeded
            if (@getimagesize($moblog_tmp_dir."view_".$attachment_name)) {

              $view_image = mgd_open_attachment($stat,"w");
              if ($view_image) {

                $source_image = fopen($moblog_tmp_dir."view_".$attachment_name,"r");
                while (! feof($source_image)) {
                  fwrite($view_image, fread($source_image, 100000));
                }
                fclose($view_image);
                fclose($source_image);

                $size = getimagesize($moblog_tmp_dir."view_".$attachment_name);
                if ($size) {
                  $view_x=$size[0];
                  $view_y=$size[1];
                }
                unlink($moblog_tmp_dir."view_".$attachment_name);

                // Create the full-scale image
                $stat_full = $moblog_entry->createattachment("orig_".$attachment_name.".jpg","thumb_".$attachment_name,$attachment_type);
                if ($stat_full) {

                  $full_image = mgd_open_attachment($stat_full,"w");
                  if ($full_image) {

                    $source_image = fopen($attachment,"r");
                    while (! feof($source_image)) {
                      fwrite($full_image, fread($source_image, 100000));
                    }
                    fclose($full_image);
                    fclose($source_image);

                  }
                }

                $moblog_convert_string = $moblog_convert." -geometry 130x130 -gamma 1.2 -quality 85 +profile \"*\" -colorspace rgb ".escapeshellarg($attachment)." ".escapeshellarg($moblog_tmp_dir."thumb_".$attachment_name);
                echo "DEBUG: Executing command: ".$moblog_convert_string."\n";

                // Make the thumbnail
                exec($moblog_convert_string);

                // If thumbnail generation succeeded
                if (@getimagesize($moblog_tmp_dir."thumb_".$attachment_name)) {
  
                  // Create the thumbnail image
                  $stat2 = $moblog_entry->createattachment("thumb_".$attachment_name.".jpg","thumb_".$attachment_name,$attachment_type);
                  if ($stat2) {

                    $thumb_image = mgd_open_attachment($stat2,"w");

                    $source_image = fopen($moblog_tmp_dir."thumb_".$attachment_name,"r");
                    while (! feof($source_image)) {
                      fwrite($thumb_image, fread($source_image, 100000));
                    }
                    fclose($thumb_image);
                    fclose($source_image);

                    $size = getimagesize($moblog_tmp_dir."thumb_".$attachment_name);
                    if ($size) {
                      $thumb_x = $size[0];
                      $thumb_y = $size[1];
                    }
                    unlink($moblog_tmp_dir."thumb_".$attachment_name);

                    $view_obj = mgd_get_attachment($stat);
                    $full_obj = mgd_get_attachment($stat_full);
                    $thumb_obj = mgd_get_attachment($stat2);

                    $moblog_entry->extra2 = $full_obj->guid().'|'.$view_obj->guid().'|'.$thumb_obj->guid();
                    $user = mgd_get_person($midgard->user);
                    $moblog_entry->extra1 = $user->name;
                    $moblog_entry->url = $moblog_time;
                    $stat = $moblog_entry->update();
                    if (!$stat)
                    {
                        echo "ERROR: Failed to update moblog entry, abort. Reason ".mgd_errstr()."\n";
                        $view_obj->delete();
                        $full_obj->delete();
                        $thumb_obj->delete();
                        $moblog_entry->delete();
                    }

                    //$view_obj->parameter("midcom.helper.datamanager.datatype.blob","fieldname",$moblog_datamanager_field);
                    //$view_obj->parameter("midcom.helper.datamanager.datatype.image","thumbguid",$thumb_obj->guid());
                    //$view_obj->parameter("midcom.helper.datamanager.datatype.image","origguid",$full_obj->guid());
                    //$view_obj->parameter("midcom.helper.datamanager.datatype.blob","size_x",$view_x);
                    //$view_obj->parameter("midcom.helper.datamanager.datatype.blob","size_y",$view_y);
                    //$view_obj->parameter("midcom.helper.datamanager.datatype.blob","size_line","width=\"$view_x\" height=\"$view_y\"");
                    $view_obj->parameter('size', 'x', $view_x);
                    $view_obj->parameter('size', 'y', $view_y);

                    //$thumb_obj->parameter("midcom.helper.datamanager.datatype.image","parent_guid",$view_obj->guid());
                    //$thumb_obj->parameter("midcom.helper.datamanager.datatype.blob","size_x",$thumb_x);
                    //$thumb_obj->parameter("midcom.helper.datamanager.datatype.blob","size_y",$thumb_y);
                    //$thumb_obj->parameter("midcom.helper.datamanager.datatype.blob","size_line","width=\"$thumb_x\" height=\"$thumb_y\"");
                    $thumb_obj->parameter('size', 'x', $thumb_x);
                    $thumb_obj->parameter('size', 'y', $thumb_y);

                    //$full_obj->parameter("midcom.helper.datamanager.datatype.image","parent_guid",$view_obj->guid());
                    $moblog_succeeded = true;
                  }
                } else {
                  echo "ERROR: Thumbnail generation failed, abort\n";
                  $full_obj = mgd_get_attachment($stat);
                  $full_obj->delete();
                  $moblog_entry->delete();
                } 
              }
            } else {
              echo "ERROR: View-scale image generation failed, abort\n";
              $moblog_entry->delete();
            }

          }
          unlink($attachment);
        }
      }


      if ($moblog_succeeded) {

        // Update weather data
        bergie_iki_fi_store_metar();

        echo "OK\n";
      }
    }
  } else {
    echo "ERROR: Failed to create moblog article, reason ".mgd_errstr()."\n";
  }
?>