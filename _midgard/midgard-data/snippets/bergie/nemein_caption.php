<?php
if (!function_exists('nemein_caption')) {
   function nemein_caption($data, $getCnt) {
            if (strlen($data)==0) { return FALSE; }

            $data=preg_replace('/<\/?(p|br)([^>]*)>/', ' ', $data);
            $data=strip_tags($data,'<a>');

            if (strlen($data)<=$getCnt) { return $data; }

            $ret=''; $cnt=0; $inTag=FALSE;
            $chars=preg_split('//',$data);
            while (list ($k, $char) = each ($chars)) {
                  if ($char=="<") { $inTag=TRUE; }
                  if ($char==">" && $inTag) { $inTag=FALSE; }
                  if (!$inTag) { $cnt++; }
                  if (!$inTag && ($cnt>=$getCnt) && preg_match("/\s/", $char)) {
                     $ret.='...';
                     break;
                  } else {
                     $ret.=$char;
                  }
            }
     return $ret;
   }
}

?>