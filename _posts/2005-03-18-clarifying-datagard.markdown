---
  title: "Clarifying datagard"
  categories: 
    - "midgard"
  layout: "post"

---
I helped [Tigert][1] to [install Midgard][2] yesterday, and the project was
quite non-trivial. The main issues were:

1. "repligard" binary was missing in the repligard debian package (fixed now in 1.6.3-1)

2. Datagard didn't change the host names of Aegir, Midgard welcome page etc. to the name of the [virtualhost][4] we created

3. MidgardPageCache didn't work at all, causing 404s. This was caused by having both Apache2 and Apache1 Midgard modules installed simultaneously. The DEBs should prevent this from happening

1 and 3 were clearly packaging problems, and 2 was a datagard bug. Having seen Jarkko's [Fedora packages][3], I know the Midgard binaries
can be made to work "out of the box". Now we just need to push
the DEBs into the same standards.

Besides the host naming bug, the questions in Datagard appeared quite
confusing.

Some ideas regarding that:

* Datagard could start with a "simple mode" where the system would
  simply set up the database as "midgard" on localhost. Then there
  would be an option for switching to "expert mode" where different
  DB hosts and DB names would be possible

* Datagard could also query whether the user can [manage databases][5]
  without supplying a password. On some distros root can do that
  with MySQL, and in those cases asking the MySQL root username/password
  shouldn't be necessary

* The wording of the different questions in Datagard should be fixed
  to be more explanatory. Here are two mockups done by Tigert:

Installation mode selection:

> [x] Easy installation - your Apache and
   MySQL run on the same computer and
   you just want to get things up and
   running with good default settings.
   Recommended for most users.

> [ ] Custom installation - For people
    familiar with Midgard. This lets
   you customize the installation
   parameters. Also you need to choose
   this if your database is on a
   separate server host.

>    [ Cancel ] [ Continue > ]

Midgard DB host selection:

>    Midgard Database Host

>    Midgard needs a MySQL database to work.
    This can  be either  on the  same server
    host as Midgard itself,  or it  could be
    a separate computer.

>    If you have  both on the  same computer,
    you  can just  leave  the  field  empty,
    otherwise  enter  the  hostname  or  IP
    address  of your MySQL database server.

>    Database host: [________________________]

>    [ Cancel ] [ Continue > ]

Another big point would be clarifying the different usernames and passwords used with Midgard. There are three separate:

1. MySQL root account used for creating the databases
2. Midgard's MySQL account used by Midgard-Apache and Repligard when connecting to 
   the database
3. Midgard's administrator account used for logging into Aegir and SpiderAdmin

Both better wording and some automation could help with all of these three. Datagard can probe whether MySQL root password is needed, the Midgard MySQL account can default to "midgard" and a generated password, and the administrator account is by default admin/password.

I know Jarkko has been reordering datagard lately, so we could possibly fit these improvements into that work?

[1]: http://www.tigert.com/
[2]: http://www.midgard-project.org/documentation/installation/distros/debian.html
[3]: http://www.midgard-project.org/documentation/installation/distros/fedora.html
[4]: http://www.midgard-project.org/documentation/installation/vhost.html
[5]: http://www.midgard-project.org/documentation/installation/database.html