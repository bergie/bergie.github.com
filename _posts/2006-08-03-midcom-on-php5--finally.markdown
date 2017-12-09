---
  title: "MidCOM on PHP5, finally"
  categories: 
    - "midgard"
  layout: "post"
  cover: 'https://d2vqpl3tx84ay5.cloudfront.net/midcom-php5-initial.jpg'

---
Thanks to [the efforts][1] by [Solt][2] and [Piotras][3], we finally have the [MidCOM][4], the _Midgard Component Framework_ running on top of [PHP 5.1][5].

![Simple MidCOM site running on PHP5](https://d2vqpl3tx84ay5.cloudfront.net/midcom-php5-initial.jpg)

While we got [PHP5 support into Midgard][6] already in August 2004, the big issue has been the tens of thousands of lines of code in the MidCOM framework that had several PHP4 constructions.

Now it is possible to run [CVS version][10] of Midgard together with [Subversion checkout][7] of MidCOM with PHP 5.1. There are still quite a few _PHP Notices_ around, but I'm feeling optimistic that the final releases of [Midgard 1.8][8] and MidCOM 2.6 will support PHP5. And if that happens we can then drop PHP4 support with clear conscience in the [1.9 series][9].

[1]: http://www.midgard-project.org/discussion/developer-forum/midcom-2-5-on-php5/
[2]: http://www.midgard-project.org/community/whoswho/solt.html
[3]: http://www.midgard-project.org/community/whoswho/pp.html
[4]: http://www.midgard-project.org/documentation/midcom/
[5]: http://www.sitepoint.com/blogs/2005/06/13/whats-new-in-php-51/
[6]: http://marc.theaimsgroup.com/?l=midgard-dev&m=109344181129283&w=2
[7]: http://www.midgard-project.org/documentation/running-latest-midcom-from-subversion/
[8]: http://www.midgard-project.org/development/roadmap/1-8/
[9]: http://www.midgard-project.org/development/roadmap/1-9/
[10]: http://www.midgard-project.org/development/cvs.html
