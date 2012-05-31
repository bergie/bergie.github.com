---
title: NTLMSSP support added to Midgard
source: "http://midgard-project.org/updates/2003-04-09-001.html"
categories:
  - midgard
layout: post
---
SaM Solutions and Nemein added NTLM Single Sign-on support to mod_midgard
I've finally added NTLMSSP over HTTP support to mod_midgard (preparser) in CVS. It is pretty isolated from other code but you need to recompile libmidgard/mod_midgard/php module as server config struct in apache.h was changed to include NTLMSSP-related configuration. You need to do it only if you will use libmidgard/mod-preparser from current CVS (or nightly builds tomorrow).

MMP now has additional option in configure: `--with-ntlm-auth` which performs all needed checks (EAPI in Apache and appropriate support in libmidgard). The switch is OFF by default resulting in disactivated
NTLMSSP support.

In order to get it working you need latest Samba 3.0 alpha builds (a23) or CVS snapshot (don't be confused by 'alpha' status, Samba Team is known for good quality of code and this mark is just their way to say that code isn't yet ready to be used in mission-critical task, though stability of it sometimes is much better than stable releases of other projects).

This work is sponsored by Nemein and SaM-Solutions. I'll need to port changes over to non-MMP too and later to Apache2 `mod_midgard`. This will probably be done after SambaXP conference where I'll be talking about integration of CMS intranet solutions with existing corporate CIFS networks.

Additional features (support for Domain Groups in policy checking code, etc) will be added later as it needs coordination in ntlm_auth utility behaviour changes between Samba, Squid, and Midgard which are now primary consumers of the `ntlm_auth`. 
