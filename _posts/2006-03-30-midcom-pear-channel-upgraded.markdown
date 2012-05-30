---
  title: "MidCOM PEAR channel upgraded"
  categories: 
    - "midgard"
  layout: "post"

---
The [MidCOM PEAR channel][1] has now been upgraded to the [Chiara\_PEAR\_Server][2] version of PEAR channel serving. The upgrade went mostly painlessly following [Greg Beaver's instructions][3].

The main change with the upgrade is that now the server uses PEAR's [REST API][4] which should make things faster and more stable. It also means that you need to upgrade the package definition on any server where you want to install [MidCOM][5] packages:

    # pear channel-update pear.midcom-project.org

The other change is that we now have a nice [web frontend][1] for browsing packages powered by the [Crtx\_PEAR\_Channel\_Frontend][6].

Please report if you encounter any issues after this upgrade.

__Updated 18:05Z:__ [Planet Midgard][7] is now subscribed to the PEAR channel releases feed.

[1]: http://pear.midcom-project.org/
[2]: http://pear.chiaraquartet.net/index.php?package=Chiara_PEAR_Server
[3]: http://greg.chiaraquartet.net/archives/123-Setting-up-your-own-PEAR-channel-the-official-way.html
[4]: http://greg.chiaraquartet.net/archives/49-PEAR-1.4.0,-meet-REST-1.0.html
[5]: http://www.midgard-project.org/documentation/midcom/
[6]: http://www.pixelated-dreams.com/archives/114-Crtx_PEAR_Channel_Frontend-Released!.html
[7]: http://www.midgard-project.org/planet/