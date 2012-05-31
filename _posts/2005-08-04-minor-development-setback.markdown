---
  title: "Minor development setback"
  categories: 
    - "midgard"
  layout: "post"

---
[Our][1] development server just died today. This will mean all [OpenPsa][2] development is stalled until [Rambo][3] gets the new hard drive and [Debian][4] installed.

This will mean some delays in Campaigns component development, as we have to rebuild the testing environment. Luckily all relevant code was [in CVS][5]. Lesson from this is: "_Commit early, commit often_".

![Rambo installing the new disks](/files/rambo-devel-server.jpg)

__Updated 11:20:__ It seems the problem is actually with the motherboard, so we're off to get a new box. From [#midgard][6]:

> _rambo_ is just about ready to burn the devel box in a big thermite fire

(Ed. note: [Rambo][3] is a licensed pyrotechnician, and really does things like thermite fires as a hobby.)

__Updated 2005-08-05 12:35:__ All systems are finally go, and the full development and testing environment is operational. Balance is that we lost slightly over a working day in the crash.

[1]: http://www.nemein.com/
[2]: http://www.openpsa.org/
[3]: http://www.nemein.com/people/rambo/
[4]: http://www.debian.org/
[5]: http://openpsa.tigris.org/source/browse/openpsa/src/fs-midcom/openpsa/
[6]: http://www.midgard-project.org/midcom-permalink-5d84fbbc1f981f45809279982e624190