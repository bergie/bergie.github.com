---
  title: "Changing schemas on the fly"
  categories: 
    - "midgard"
  layout: "post"

---
[MidCOM datamanager][1] allows you to have multiple page types, or schemas used in a folder. The schemas can provide different editable fields and different styling. 

However, by default datamanager doesn't allow you to change a page's schema after it has been initially set. If you want to enable this, here is a quick hack.

- Customize the net.nehmer.static component's template `admin-edit` for your site

- Add the following below `$data['controller']->display_form();`

        // Load schema
        eval('$schemadb = Array( ' . midcom_get_snippet_content_graceful($data['config']->get('schemadb')) . " \n);");
        
        // Save selected schema
        if (   array_key_exists('net_nemein_customschema_change', $_POST)
            && array_key_exists($_POST['net_nemein_customschema_change'], $schemadb))
        {
            $data['article']->parameter('midcom.helper.datamanager2', 'schema_name', $_POST['net_nemein_customschema_change']);
            // Refresh page to get the new schema's editor
            echo '<script language=\"javascript\">location.replace(window.location + "#");</script>';
        }
            
        // Show selection form
        $current_schema = $data['article']->parameter('midcom.helper.datamanager2', 'schema_name');
        echo "<form method=\"post\">\n";
        echo "<label>Page type\n";
        echo "<select name=\"net_nemein_customschema_change\">\n";
        foreach ($schemadb as $schema_name => $schema)
        {
            $selected = '';
            if ($schema_name == $current_schema
                || (   $schema_name == 'default' 
                    && $current_schema == ''))
            {
                $selected = ' selected="selected"';
            }
            echo "    <option value=\"{$schema_name}\"{$selected}>{$schema['description']}</option>\n";
        }
        echo "</select>\n";
        echo "</label>\n";
        echo "<input type=\"submit\" value=\"Change type\" />\n";
        echo "</form>\n";

* Now the page schema should be easy to change:

![Changing a page schema](/files/midcom-edit-page-change-schema.jpg)

__Note:__ This quick tutorial applies only to components utilizing [Datamanager 2][2] but should be easy to adapt to also old-style components.

[1]: http://www.midgard-project.org/documentation/midcom-helper-datamanager/
[2]: http://www.midgard-project.org/documentation/midcom-2-5-datamanger-rewrite/