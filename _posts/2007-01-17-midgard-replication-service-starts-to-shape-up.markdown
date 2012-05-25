---
  title: "Midgard replication service starts to shape up"
  categories: 
    - "midgard"
  layout: "post"

---
[Midgard][9] has had replication capability since late 1999. First replication was handled with the [Repligard][7] command-line tool. Then in 2005 we got the Java-based [Exorcist][8] tool that was able to do cross-CMS replication. But both of them suffered from being slightly external of the normal Midgard environment.

With Midgard 1.8.1 there is now an integrated Midgard Replicator system that provides replication API on both [C][2] and [PHP levels][1].

To support that we've now been working on a midcom.helper.replicator library that handles the issues of solving what to replicate, where and how. The library has been made with a modular toolbox philosophy where each replication pipeline is stored as a "subscription" that defines what exporter, transporter and importer should be used.

Some example cases here:

* __Staging/live:__ the subscription is configured to use an exporter that checks for object approval before exporting, and a transporter that directly sends the data to the live server via HTTP

* __Automatic backups:__ you can create a replication subscription that will send all database changes as XML packages to your Gmail account for free off-site backup

* __Collaboration on specific items:__ we could define a "wiki collaboration" exporter that you could use to exchange wiki pages between other project parters

Now the export and transport ends are mostly done and we're today focusing on integrating the importers with the [MidCOM DBA][10] layer to get the benefit of watchers, ACLs and other checks in the import end.

I'll update this post with more details as we go.

## Random thought: Midgard vs. Drupal communities

Looking at [Ohloh][6] statistics, [Midgard has had 38 contributors][3] since 2001 when we switched repositories, while [Drupal has had 589 contributors][4]. With this huge disparity of numbers it is a bit difficult to understand how Midgard has 207 person years behind it, while Drupal only has had 113. Midgard also has a lot more code. I guess Midgard contributors just are more productive. Maybe this has something to do with the power that [the framework gives us][5]?

[1]: http://www.midgard-project.org/documentation/php-midgard_replicator/
[2]: http://www.midgard-project.org/api-docs/midgard/core/1.8/modules.html
[3]: http://ohloh.net/projects/3309
[4]: http://ohloh.net/projects/3502
[5]: http://www.nemein.com/people/piotras/midgard2---flexibility-rocks.html
[6]: http://ohloh.net/
[7]: http://www.midgard-project.org/documentation/concepts-repligard/
[8]: http://www.midgard-project.org/documentation/exorcist/
[9]: http://www.midgard-project.org/
[10]: http://www.midgard-project.org/documentation/midcom-dba/