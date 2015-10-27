---
  title: "Solving logistics of Mamona"
  categories: 
    - "business"
    - "midgard"
    - "mobility"
    - "geo"
  layout: "post"

---
I was discussing this IT problem at [ESEEI][2] today:

_Mamona_, or [Castor oil plant][1] is an oil-producing plant that can be grown in relatively dry areas. Farmers of dry areas in the state of [Paraná][3], Brazil are generally relatively poor. [Petrobras][4] has [a process][6] where Mamona seeds can be used to produce [biodiesel][5] fuel.

The IT problem related to this is that the farmers in poor areas that plant Mamona are not very well connected, and so it is difficult for Petrobras to know how many crops have been planted, and the farmers to know when and where to deliver their produce.

![A farm in Paraná, Brazil](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/Farm_in_Parana.jpg)

__A quick solution__ would be something like the following:

Petrobras could build a simple web-based database of Mamona producers, collection points and logistical companies using a [Geospatial Content Management System][7] like [Midgard][8]. Here farmers would be guided through a process of registering their farm, positioning it on a Google Map, and reporting the number of their planted crops.

Since the farmers do not have IT infrastructure available, Petrobras could distribute a set of [Nokia 770][9] Internet Tablets and GPRS-enabled cell phones for them. Compared to a regular PC, the 770 has advantages of relatively low cost, low power consumption, support for using cell phone network for connectivity and support for any regular Nokia phone charger, including [solar][14] and [hand cranked chargers][10]. Since the 770 platform is open the software setup could also be tailored for the specific needs of the Mamona program.

![Map browsing on Nokia 770, photo by Tuomas Kuosmanen](https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/nokia-770-maemo-mapper-small.jpg)

When a Mamona harvest happens the farmers would again log into the website and report the number of crops produced. This information would be produced as a [GeoRSS][11] feed to the logistical companies whose 770s could automatically find loads to pick up from their vicinity. The feed would contain the farmer's contact information so that they could contact the farmer, and since it is geotagged would also automatically appear as a [Point of Interest][12] in the [770 map application][13]. Farmers could similarly get a feed of nearby logistical companies.

Clicking on a POI the logistics company would be directed to the website where they could make the agreement on where to deliver the stock.

This way Petrobras would constantly know how much is being produced and where, farmers would know who can carry their goods to the refineries, and logistics companies could monitor new available loads.

The setup would have several advantages:

* Software required for this solution would not be complex to make
* Fully open, and [free][16] software environment could be used, including [Maemo][17] and [GeoClue][18]
* Reliance on open standards like HTTP and GeoRSS make future integration easy
* HTTP makes the system also easy to secure via regular SSL encryption
* There is good knowledge of the Nokia 770 platform [in Brazil already][15]
* Only cell phone network would be needed, and the system would work also in areas where electricity is not easily available
* Most or all of the deployment could be handled using local IT resources
* Equipment needed is relatively inexpensive. At retail prices the whole stack per farm costs about 500 USD, but Petrobras could most likely get a lot better deal

__Disclaimer:__ I'm not sure if this would really work in the Brazilian reality, but the thought play was definitely interesting.

__Updated 2007-01-10:__ A [bicycle-powered charger][19], as shown by Motorola could help this kind of deployments in rural areas.

[1]: http://en.wikipedia.org/wiki/Castor_oil_plant
[2]: http://www.eseei.edu.br/
[3]: http://en.wikipedia.org/wiki/Paran%C3%A1_%28state%29
[4]: http://en.wikipedia.org/wiki/Petrobras
[5]: http://en.wikipedia.org/wiki/Biodiesel
[6]: http://www.tierramerica.net/2003/0526/ianalisis.shtml
[7]: http://en.wikipedia.org/wiki/GeoCMS
[8]: http://www.midgard-project.org/
[9]: http://europe.nokia.com/770
[10]: http://www.amazon.com/Campo-Crank-Flashlight-Phone-Charger/dp/B000FRZ8XM
[11]: http://www.georss.org/
[12]: http://eko.one.pl/index.php?page=Nokia770_software#Screenshot
[13]: http://gnuite.com:8080/nokia770/maemo-mapper/
[14]: http://store.sundancesolar.com/mi3sochforce.html
[15]: http://www.indt.org.br/
[16]: http://www.fsfeurope.org/documents/freesoftware.en.html
[17]: http://www.maemo.org/
[18]: http://live.gnome.org/GeoClue
[19]: http://www.treehugger.com/files/2007/01/motorolas_bike.php
