---
  title: "Looking at the PHP workflow options"
  categories: 
    - "midgard"
    - "openpsa"
  layout: "post"

---
[We][1] have recently been contracted to develop a new [workflow][2] engine on top of [OpenPsa][3] to support different [pharmacovigilance][4] and [drug regulatory][5] processes from the viewpoint of a drug manufacturer.

The specification process is still ongoing, but for now the main requirements seem to be:

- Definition of workflows through an UI (or possibly via an [XML import][6])
- Handling roles through [Midgard Groups][7]
- Connecting alarms and escalations to schedules of some processes (_"this step must be completed in 10 days"_)
- Making the actual activity handling easy and [GTD-ish][8] (complete with filtering based on [contexts][9])
- Supporting _deliverables_ that may be objects or actions in other [MidCOM components][10] (_"Write a new Word document with this template"_)

Since workflow is a big topic, it would be great to be able to share some of the development efforts with other PHP-based applications. [Galaxia][11] is a PHP workflow system that is shared between projects like [TikiWiki][12] and [Xaraya][13].

The problem with Galaxia is however that it uses direct SQL for its data storage, whereas we would like to use [MgdSchema][14] and [Query Builder][15]. We'll have to see whether it will be easier to write our own, or adapt the Galaxia system to our framework. Also, the UI would probably require quite much tuning to fit our concept.

Another issue of consideration is how to fit the workflows into our _Social Network of Projects_ model of using OpenPsa within a network of contractors connected via DBE.

[1]: http://www.nemein.com/
[2]: http://en.wikipedia.org/wiki/Workflow
[3]: http://www.openpsa.org/
[4]: http://en.wikipedia.org/wiki/Pharmacovigilance
[5]: http://en.wikipedia.org/wiki/Regulation_of_therapeutic_goods
[6]: http://xml.coverpages.org/wf-xml.html
[7]: http://www.midgard-project.org/midcom-permalink-09d07d968f19b368c6a100f29af829c5
[8]: http://www.43folders.com/a2004/09/08/getting-started-with-getting-things-done/
[9]: http://minezamac.com/wiki/index.php/GTD-Context
[10]: http://www.midgard-project.org/midcom-permalink-c78920f970ecb340698182bca2ad7be1
[11]: http://tikiwiki.org/tiki-index.php?page=GalaxiaWorkflow
[12]: http://tikiwiki.org/
[13]: http://www.xaraya.org/
[14]: http://www.midgard-project.org/midcom-permalink-30060725e11ec9472825fd8bce02725c
[15]: http://www.midgard-project.org/midcom-permalink-7a86842cc2906de5ac0f347d8b6c734d
