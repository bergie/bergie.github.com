---
  title: "Quick and dirty MidCOM caching with Cache_Lite"
  categories: 
    - "midgard"
  layout: "post"

---
If you want to cache your [MidCOM][2] site, but are on a chrooted environment and so can't run Squid, one option is to use the [Cache_Lite][1] PEAR package. To do this, you must have access to the page elements used on your site.

Place something like the following to the `<(code-init-before-midcom)>` element:

        <?php
        // QuickNDirty output caching
        $GLOBALS['cache_enable'] = true;
        if (   array_key_exists('PHPSESSID', $_COOKIE)
            || $_MIDGARD['user']
            || count($_POST) > 0)
        {
            // Don't cache requests where a POST is made or where we have an authenticated used
            $GLOBALS['cache_enable'] = false;
        }
        if (in_array('api', $_MIDGARD['argv']))
        {
            // Don't cache net.nehmer.blog remote API calls
            $GLOBALS['cache_enable'] = false;
        }
        if (   $_MIDGARD['argc'] > 0
            && substr($_MIDGARD['argv'][0], 0, 7) == 'midcom-')
        {
            // Don't cache the midcom-some-action URLs
            $GLOBALS['cache_enable'] = false;
        }
        
        if ($GLOBALS['cache_enable'])
        {
            // Include the package
            require_once('Cache/Lite.php');
        
            // Set a few options
            $options = array
            (
                'cacheDir' => '/var/cache/midgard/www.example.net/',
                'lifeTime' => 1800
            );
        
            // Generate the unique cache ID
            $cache_id = md5($_MIDGARD['uri'] . ':' . serialize($_GET));
        
            // Create a Cache_Lite object
            $GLOBALS['cache'] = new Cache_Lite($options);
        
            // Test if thereis a valide cache for this id
            if ($data = $GLOBALS['cache']->get($cache_id)) 
            {
                echo $data;
                exit();
            }
        
            ob_start();
        }
        ?>

And edit the `<(code-finish)>` element to contain the following:

        <?php 
        $_MIDCOM->finish(); 
        
        if ($GLOBALS['cache_enable'])
        {
            $data = ob_get_contents();
            $GLOBALS['cache']->save($data);
            ob_end_flush();
        }
        ?>

Cache_Lite can be used for caching all regular content pages, but not attachments due to the way [attachment serving][3] is implemented in MidCOM.

[1]: http://pear.php.net/package/Cache_Lite
[2]: http://www.midgard-project.org/documentation/midcom/
[3]: http://www.midgard-project.org/api-docs/midcom/2.6/midcom/midcom_application.html#serve_attachment
