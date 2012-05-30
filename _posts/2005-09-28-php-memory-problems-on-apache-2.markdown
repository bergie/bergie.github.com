---
  title: "PHP memory problems on Apache 2"
  categories: 
    - "midgard"
  layout: "post"

---
We've gotten several problems of memory leaking with [MidCOM][1] used with PHP4 and Apache2 on both Fedora and Debian platforms. At first memory leaks on [Midgard 1.7][2] were suspected, but after extensive testing this theory was discarded.

Then we received reports of similar problems on [Moodle][3] running on Apache 2, which seems to point at some specific PHP function utilized by both leaking.

Good ideas about which function this is would be appreciated, but before that it is possible to work around the issue by setting `MaxRequestsPerChild` in `<IfModule prefork.c>` to about RAM/10. For example:

    MaxRequestsPerChild 67

Thanks to [Jarkko][5] for seeking out the issue on non-Midgard systems! I'll be sure to post details as soon as we find out what function causes this.

Written in the pleasant WiFI-equipped [Cafe Sans Souci][4] in Tbilisi Old Town.

__Updated 2005-10-12:__ Some additional memory leaks were found and fixed in [Midgard 1.7.2][6]. This should improve the situation.

[1]: http://www.midgard-project.org/midcom-permalink-fc278b300819f654e0e561c6e233c67f
[2]: http://www.midgard-project.org/midgard/1.7/
[3]: http://moodle.org/
[4]: http://beta.plazes.com/plaze/5912eb6d50c4d88cba0e43568c7fe54e/
[5]: http://www.midgard-project.org/midcom-permalink-d5354566de6e9c644d244982a4239bfe
[6]: http://www.midgard-project.org/midcom-permalink-429af8550443ddb941225d2bd3873555