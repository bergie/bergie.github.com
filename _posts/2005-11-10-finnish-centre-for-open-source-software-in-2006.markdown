---
  title: "Finnish Centre for Open Source Software in 2006"
  categories: 
    - "business"
  layout: "post"

---
<img src="http://bergie.iki.fi/midcom-serveattachmentguid-9c75f932f018d862aa8105300cee66e9/coss-logo.gif" border="0" height="91" width="176" alt="COSS" style="margin-left: 10px;" title="Centre for Open Source Software" align="right" />
The yearly meeting for [COSS][1] members was held in connection with the [OpenMind][19] conference in the auditorium of [Werstas][23], the [proletariat's central museum][21] of Tampere. As [Nemein][6] participates actively in several COSS projects like the [Digital Business Ecosystem][21], I left the [Espoo office][22] early to take the bullet train north.

In addition to the official agenda, the meeting contained several presentations about current Finnish Open Source initiatives.

## COSS in 2006

The Centre for Open Source Software has been performing accordingly to the targets set for 2005, and will continue to operate from within the [Hermia Technology Center][5]. The complete operating budget for 2006 will be estimated at 300k&euro;, compiled from member organizations and Finnish public funding.

The focus areas for COSS in 2006 will be lobbying Open Source and Open Standards in the Finnish public sector, helping member companies in their business development, and acting as a central international contact point for the Finnish Open Source industry.

## Open Source business research

OSSI is a research project funded by Tekes and run by HUT, Kauppakorkeakoulu, and other research organizations. Its 800k&euro; budget makes it one of the largest OSS research projects in European public sector. The project is now in early stage, with its website and blog expected to open soon.

OSSI's sister project ServOSS is a development project for building internationalized Open Source professional services business. The project is mainly funded by Tekes, and is still looking for corporate partners operating in the OSS services industry. Participation fee for companies is 2500&euro;.

## Localization issues

Finnish OSS localization project, _"Kotoistaminen"_, got organized in summer 2005. Keeps "volunteer" localization work of OSS projects open, but tries to fund the trouble spots. Currently normal desktop environments and major applications like OpenOffice.org and Firefox are localized, but the quality differs. 

The localization project aims to build a bounty system to allow end-user organizations to fund translation work. In addition to actual user interfaces, help texts and documentation should be translated, but this process is still severely lagging.

One idea for boosting localization efforts would be to utilize the Rosetta web-based translation tool from Ubuntu's Launchpad project. Rosetta allows different translations for a string to be submitted, and then project owner can choose the best option. Rosetta would be an excellent tool for Midgard's localization as well, but this would require the proposed transition to Gettext.

Finnish Ministry of Justice will be piloting usage of OpenOffice.org 2.x in 2006, and for them the quality of localizations will be important. Spell checking is also imperative. Currently Finnish spell checking can be handled through the Soikko application, but it doesn't run on Windows.

[Hunspell-fi][2] aims to create a spell and grammar checker that supports difficult languages like Finnish and Hungarian on multiple platforms, and could be a Soikko replacement.

## OpenSynchro

[OpenSynchro][4] is a GPLd integration tool developed by [SmileHouse][3], a proprietary web store vendor  for connecting web stores with warehouse management, procurement systems, ePayment systems, etc. The idea with OpenSynchro has been to make eBusiness system integration easier with it than with regular EAI tools.

OpenSynchro can be used for transferring product, order or customer information across different systems. It can also be used for ad-hoc data migration needs, placing it to similar usage area as the [Exorcist][14] migration tool for Content Management Systems.

OpenSynchro was developed with public funding, and its Open Sourcing decision was partly based on desire to give something back to the community. SmileHouse also sees it as a better marketing method than making it another proprietary product.

The target users of OpenSynchro are in the SME sector, as there eBusiness integration is most severely lacking. Being based on Java, MySQL and Tomcat makes it quite platform agnostic. It includes several component plugins like XSLT, SMTP and others. The base architecture is familiar from Exorcist, providing source (exporter), converter (transformer) and target (importer) parts. The system can be configured over the web.

## Nokia 770

[N770][12] is the Linux and Open Source usage pilot for Nokia. It is also Nokia's entry to the broadband device business. It is sold directly from Nokia.com, bypassing the traditional reseller channel. The target market is portal companies and broadband network providers.

Boot time is about 38 seconds. After that, online access can be handled either via WLAN, or using bluetooth connection to a mobile phone. The device can be controlled by some buttons, and a stylus stored inside the hard case. For typing the options are a virtual on-screen keyboard, or a [bluetooth keyboard][7]. For easier reading, the whole screen of N770 supports zooming.

The left-hand bar provides the access buttons to the main use cases; web bookmarks, email and other applications. The idea is that the device is a web browser, not a full computer or a smart phone. However, other applications can be installed as .deb packages, and they will appear in the "Others" menu. 

[Maemo][13] is the Open Source community kicked up by Nokia to support third-party developers building applications for the N770. The next product for the series will be a software package adding VoIP support. The [Hildon][16] user interface is based on the [GNOME][17] libraries. Nokia tries to work actively together with the Open Source communities their tools are based on.

N770 could prove to be an interesting tool for keeping meeting notes and handling [OpenPsa][18] tasks on the road. With a [Bluetooth twiddler][8], text entry could be quite fast. N770 [ships for 369&euro;][10], compared to the [745&euro; Communicator][11].

[Laika][15] is an [Eclipse][24] development environment built by Helsinki University of Technology for N770 application development.

__In the evening__ we will be meeting [Bob Sutor][9], the IBM Vice President of Standards and Open Source.

[1]: http://www.coss.fi/
[2]: http://www.hunspell-fi.org/
[3]: http://www.smilehouse.fi/
[4]: http://www.opensynchro.org/
[5]: http://www.hermia.fi/
[6]: http://www.nemein.com/
[7]: http://europe.nokia.com/nokia/0,,58982,00.html
[8]: http://bender.c0rtex.com/~will/projects/bttwid/
[9]: http://www-128.ibm.com/developerworks/blogs/dw_blog.jspa?blog=384
[10]: http://direct.nokia.com/Product.aspx?model=770
[11]: http://europe.nokia.com/nokia/0,1522,,00.html?orig=/9500
[12]: http://europe.nokia.com/nokia/0,1522,,00.html?orig=/770
[13]: http://www.maemo.org/
[14]: http://sourceforge.net/projects/exorcist
[15]: http://www.cs.tut.fi/~laika/
[16]: http://www.maemo.org/community/hildon_ui.html
[17]: http://www.gnome.org/
[18]: http://www.openpsa.org/
[19]: http://www.coss.fi/openmind/
[20]: http://www.tkm.fi/
[21]: http://www.digitalecosystem.org/
[22]: http://beta.plazes.com/plaze/8703e6abbdf27e13fd548fc1c8c79275/
[23]: http://beta.plazes.com/plaze/b7db83469d7623ef8f2131581d8a5d56/
[24]: http://www.eclipse.org/