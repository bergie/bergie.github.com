---
  title: "Optimizing the latest MidCOM"
  categories: 
    - "midgard"
  layout: "post"
  cover: 'https://d2vqpl3tx84ay5.cloudfront.net/midcom-2.6-metadata-pl-small.jpg'

---
I drove from [Turku][1] to [Helsinki][2] early in the morning with a Land Rover that didn't have headlights. Since then have been hunting performance issues in [latest beta][5] of [MidCOM][3] - the component architecture used by [Midgard CMS][4].

MidCOM is a powerful PHP framework providing functionalities like data abstraction, access control lists, templating and revision control. Unfortunately with such power also comes the risk of developers losing track of how much data is getting queried and used in their application.

In this case I was working with a customer that has over two hundred thousand articles in their Midgard installation - the same one [Piotras talked about earlier][6]. Midgard generally is considered as a _mid-range CMS_, and so most sites have a lot less data than this one, but still higher-end performance is also important.

So after turning off caches and turned all the debugging output up to maximum, Piotras and I started going over the logs and finding places where queries were being duplicated needlessly. Attention quickly shifted to the usual suspects, ACL and navigational abstraction, with quite impressive results:

<table>
    <thead>
        <tr>
            <th></th>
            <th colspan="3">Sep 25th</th>
            <th>Sep 26th</th>
        </tr>
        <tr>
            <th></th>
            <th>2pm</th>
            <th>5pm</th>
            <th>9pm</th>
            <th>4pm</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>Log lines</th>
            <td>12,501</td>
            <td> 1,377</td>
            <td>   738</td>
            <td>   387</td>
        </tr>
        <tr>
            <th>SELECTs</th>
            <td>~5,000</td>
            <td> 1,385</td>
            <td>   642</td>
            <td>   542</td>
        </tr>
        <tr>
            <th>Time</th>
            <td>32s</td>
            <td> 3s</td>
            <td> 2s</td>
            <td> &lt;1s</td>
        </tr>
    </tbody>
</table>
        
Now, the end result of 640 queries per page view may sound like a lot, but I have to note that the particular page we're viewing includes some 150-200 content objects, each with metadata, ACLs and parameters.

In a regular situation on a site of this scale we would obviously turn down the logging level, deploy [memcached][7] for ACL caching, and possibly run a [Squid reverse proxy][8]. With those set up, Midgard really flies.

Now memcached is only being used for ACL and parent hierarchy caching, but in near future we may implement also things like [NAP][10] caching with it.

## In the other news

Polish translation of MidCOM 2.6 is just off the press, courtesy of [Solt][9]:

![MidCOM 2.6 metadata editor in polish](https://d2vqpl3tx84ay5.cloudfront.net/midcom-2.6-metadata-pl-small.jpg)

In addition to user interface localization, I've been working on [multilingual content in MidCOM][11]. At the moment the situation looks [really promising][12]...

[1]: http://en.wikipedia.org/wiki/Turku
[2]: http://en.wikipedia.org/wiki/Helsinki
[3]: http://www.midgard-project.org/documentation/midcom/
[4]: http://www.midgard-project.org/
[5]: http://pear.midcom-project.org/index.php?package=midcom&release=2.6.0beta5&downloads
[6]: http://www.nemein.com/people/piotras/midgard-database-indexes.html
[7]: http://www.danga.com/memcached/
[8]: http://www.squid-cache.org/
[9]: http://www.midgard-project.org/community/whoswho/solt.html
[10]: http://www.midgard-project.org/documentation/concepts-midcom-specs-subsystems-nap/
[11]: http://www.midgard-project.org/development/mrfc/0032.html
[12]: http://www.nehmer.net/lurker/gforge/message/20060924.112739.dc351a3b.en.html
