<?php

// -----------------
// Language: German
// -----------------
$lang = array();
$lang['ISOCODE'] = 'de';

// Main menu
$lang['MAINMENU_MAP']       = 'Karte';
$lang['MAINMENU_LEGACY']    = '2D';
$lang['MAINMENU_TOP']       = 'Höhepunkte';
$lang['MAINMENU_NEWS']      = 'Nachrichten';
$lang['MAINMENU_SITEMAP']   = 'Site map';
$lang['MAINMENU_GUESTBOOK'] = 'Gästebuch';
$lang['MAINMENU_LINKS']     = 'Links';
$lang['MAINMENU_SUBMIT']    = 'Hochladen';
$lang['MAINMENU_REGISTER']  = 'Register';

// Headers
$lang['SEARCH'] = 'Suche';

$lang['FROM'] = 'From';
$lang['DATE'] = 'Datum';

// index.php
$lang['INDEX_TITLE']       = 'Night Earth - Sehen Sie die Erde bei Nacht aus dem All';
$lang['INDEX_DESCRIPTION'] = 'Night Earth, sehen wie die Erde aussieht aus dem Weltraum in der Nacht. Stöbern Nacht Bilder oder laden Sie Ihre eigenen.';
$lang['INDEX_KEYWORDS']    = 'nightearth,Mondschein,Karte,Karten,google,google maps,nasa,defense,meteorological,scientific,satellites,dmsp,ols,Lichtverschmutzung,Bilder von der Erde bei Nacht,Bilder von der Erde in der Nacht,Weltkarte,google earth,erde Nacht Blick aus dem Weltraum,Erde aus dem Weltraum in der Nacht,die Erde in der Nacht in den Lichtern,Satellitenbilder,Bilder der Erde bei Nacht,Erde in der Nacht,Stadtpläne';
$lang['INDEX_BODY']        = '<p>Die Nacht der Erde Karte zeigt die Lichter, die in der Nacht auf der Erdoberfläche sichtbar sind.</p>
    <p>Die hellsten Bereiche der Erde sind die am meisten verstädterten, aber nicht unbedingt die bevölkerungsreichste (vergleiche Westeuropa mit China und Indien). Städte sind in der Regel an Küsten und Verkehrsnetze wachsen. Die Vereinigten Staaten Interstate Highway System erscheint als Gitter Anschluss der heller Punkte der Stadtzentren. In Russland ist die Transsibirische Eisenbahn eine dünne Linie, die sich von Moskau durch das Zentrum von Asien bis nach Wladiwostok. Der Nil, aus dem Assuan-Staudamm bis zum Mittelmeer, ist ein weiterer roter Faden durch einem ansonsten dunklen Raum.</p>
    <p>Einige Regionen bleiben dünn besiedelten und unbeleuchtet. Die Antarktis ist völlig dunkel. Die Innen Dschungel von Afrika und Südamerika sind meist dunkel. Wüsten in Afrika, Arabien, Australien, der Mongolei und den USA sind schlecht als gut beleuchtet (außer an der Küste und Flüsse), zusammen mit den borealen Wälder von Kanada und Russland, und die großen Berge des Himalaya.</p>
	<p>Zwei Versionen der Bilder zur Verfügung:</p>
	<ul><li>Der Haupt Bild der Erde in der Nacht (2012) wurde von gefangenen <a href="http://earthobservatory.nasa.gov/?eocn=topnav&amp;eoci=logo" target="_blank">NASA</a> mit hilfe der Suomi National Polar-orbiting Partnership (Suomi NPP) satellit. Es über neun Tage in Anspruch nahm im April 2012 und 13 Tage im Oktober 2012, während 312 Umlaufbahnen in 824 Kilometer, um die ganze Erde zu erfassen. Dieser Satellit nutzt die "Tag-Nacht-Band" von der Visible Infrared Imaging Radiometer Suite (VIIRS), die Licht in einem Wellenlängenbereich von grün erkennt bis nahen Infrarot-und Filtertechniken verwendet, um trübe Signale wie Gasfackeln, Polarlichter, Waldbrände, die Lichter der Stadt zu beobachten, und reflektierten Mondlicht.</li>
	<li>Das <a href="showitem.php?item=night_map_earth" target="_blank">originalbild von 2000</a> wurde erstellt von <a href="http://www.nasa.gov" target="_blank">NASA</a> verwendung von daten aus der <a href="http://www.ngdc.noaa.gov/dmsp/" target="_blank">Defense Meteorological Satellite Program (DMSP)</a>\'s <a href="http://thunder.msfc.nasa.gov/ols/" target="_blank">Operational Linescan System (OLS)</a>, ursprünglich entworfen, um Wolken durch das Mondlicht zu sehen.</li></ul>
	<p>Die Tageslichtbilder von Google Maps (Karten und Satellitenansichten) vorgesehen sind auch für Referenz verfügbar. Die <a href="https://developers.google.com/maps/" target="_blank">Google Maps API</a> wurde für die Erstellung dieser Visualisierung.</p>
    <p>Die 3D-Karte wurde mit <a href="http://cesiumjs.org/" target="_blank">Cesium</a> über <a href="http://openlayers.org/" target="_blank">OpenLayers</a> und <a href="https://github.com/openlayers/ol-cesium/" target="_blank">ol-cesium</a> erstellt. Dies nutzt bilder aus <a href="http://www.openstreetmap.org/" target="_blank">OpenStreetMap</a>, <a href="http://www.thunderforest.com/" target="_blank">Thunderforest</a>, <a href="http://www.bing.com/maps/" target="_blank">Bing Maps</a>, und <a href="https://www.mapquest.com/" target="_blank">Mapquest</a>.</p>
    <p>Geocoding wird von Google und <a href="https://nominatim.openstreetmap.org/">Nominatim</a> via <a href="https://github.com/jonataswalker/ol3-geocoder">ol3-geocoder</a> zur Verfügung gestellt.</p>
	<p>Da die Karten von der NASA waren in einer anderen Projektion wie die von Google Maps erforderlich, die <a href="http://www.gdal.org/" target="_blank">GDAL - Geospatial Data Abstraction Library</a> bibliothek wurde für die umsetzung verwendet.</p>
	<p>Während das originalbild bestand aus 87,970 bilder umfasst die karte ab 2012 349,525 bilder, daher das hinzufügen einer gesamtsumme von 437,495 bilder für diese Karte.</p>
    <p>Die detailgetreuen Abbildungen der Städte wurden von den Astronauten an Bord der Internationalen Raumstation gebracht. Diese wurden aus den erhaltenen worden <a href="http://eol.jsc.nasa.gov/" target="_blank">Image Science and Analysis Laboratory, NASA-Johnson Space Center. "The Gateway to Astronaut Photography of Earth"</a>.</p>
    <p>Weitere informationen können dem Earth Observatory Artikel erhältlich <a href="http://earthobservatory.nasa.gov/Study/Lights/" target="_blank">Bright Lights, Big City</a>, and <a href="http://visibleearth.nasa.gov/view_rec.php?id=1438" target="_blank">NASA\'s Visible Earth</a> website.</p>
    <p>Die Aurora Borealis und Aurora Australis (Northern Lights und Southern Lights) daten werden bereitgestellt durch <a href="http://www.noaa.gov/" target="_blank">NOAA - National Oceanic and Atmospheric Administration</a>.</p>
    <p>Die tag/nacht überzug verwendet das <a href="https://github.com/marmat/google-maps-api-addons" target="_blank">Google Maps API Addons</a>.</p>
    <p>Die wolken schicht wird durch bereitgestellt <a href="http://openweathermap.org" target="_blank">OpenWeatherMap</a>.</p>
    <p>Eine gedruckte plakat mit dem bild oben ist für Kauf verfügbar <a href="http://www.freemaninstitute.com/nightearth.htm" target="_blank">The Freeman Institute</a>.</p>';
$lang['LOADINGMAP'] = 'Karte wird geladen';
$lang['CONTACT']    = 'Kontakt';

// showitem
$lang['SHOWITEM_MOSTRECENT']       = 'jüngste Eintrag';
$lang['SHOWITEM_CLICKTOZOOM']      = 'klicke auf das Bild zu vergrößern';
$lang['UPLOADEDBY']                = 'Hochgeladen von';
$lang['VIEWS']                     = 'Views';
$lang['COMMENTS']                  = 'Kommentare';
$lang['SHOWITEM_PREVIOUSCOMMENTS'] = 'Zeige vorherige Kommentare';
$lang['SCORE']                     = 'Ergebnis';
$lang['SHOWITEM_YOURVOTE']         = 'Deine Stimme';
$lang['SHOWITEM_VOTE']             = 'Stimme';
$lang['SHOWITEM_PUBLISHCOMMENT']   = 'Post your comment';
$lang['LOADING']                   = 'Laden';
$lang['SHOWITEM_INTERACTIVEBROWSING'] = 'Interaktive browsing aktiviert';

// top
$lang['TOP_HIGHESTSCORE']          = 'Die meisten bewerteten bilder';
$lang['TOP_MOSTRECENT']            = 'Die neueste bilder';
$lang['TOP_MOSTVIEWED']            = 'Meist gesehene bilder';
$lang['TOP_MOSTCOMMENTED']         = 'Mit den meisten kommentaren Fotos';
$lang['TOP_TIMESVIEWED']           = 'Times angesehen';
$lang['TOP_TIMESCOMMENTED']        = 'Kommentare';
$lang['TOP_TITLE']                 = 'Titel';

// whatsnew
$lang['WHATSNEW_PREVIOUSCHANGES']  = 'Vorheriges news';

// manageitem
$lang['MANAGEITEM_H1']             = 'Upload eine neue Nacht picture';  // 'Night pictures management';
$lang['MANAGEITEM_ONLYREGISTERED'] = 'Nur für registrierte Benutzer.';
$lang['MANAGEITEM_BODY1']          = 'Können sie hochladen und teilen sie ihre eigenen bilder nacht aus der ganzen welt. Es ist kostenlos!';
$lang['MANAGEITEM_BODY2']          = 'Auf der karte in den ort, wo das bild aufgenommen wurde klicken.';
$lang['MANAGEITEM_BODY3']          = 'Sie können in und aus über die Zoom-Leiste auf der linken oder mit der Maus Scrollrad zoomen.';
$lang['MANAGEITEM_UPLOAD']         = 'Laden Sie Ihr Bild';
$lang['MANAGEITEM_SELECTLOCATION'] = 'Bitte wählen Sie den Speicherort des Bildes in der Karte oben.';
$lang['MANAGEITEM_TITLE']          = 'Titel';
$lang['MANAGEITEM_CATEGORY']       = 'Kategorie';
$lang['MANAGEITEM_IMGFILE']        = 'Bild-Datei (jpg)';
$lang['MANAGEITEM_MAXSIZE']        = 'maximale größe';
$lang['MANAGEITEM_DESCRIPTION']    = 'Beschreibung';
$lang['MANAGEITEM_MAXIMUM']        = 'maximum';
$lang['MANAGEITEM_CHARACTERS']     = 'zeichen';
$lang['MANAGEITEM_PREVIEW']        = 'vorschau';
$lang['MANAGEITEM_POST']           = 'post';
$lang['MANAGEITEM_SUBMITOK']       = 'Bild eingereicht richtig.';
$lang['MANAGEITEM_PERMADDR']       = 'Permament adresse';
$lang['MANAGEITEM_CLICK']          = 'Click';
$lang['MANAGEITEM_HERE']           = 'hier';
$lang['MANAGEITEM_SUBMITANOTHER']  = 'zu einem anderen Bild submit';

// manageuser
$lang['MANAGEUSER_H1'] = 'Register';    // 'User management';

// links
$lang['LINKS_LIGHTPOLLUTION'] = 'Lichtverschmutzung';
$lang['LINKS_EARTH']          = 'Erde';
$lang['LINKS_HOSTING']        = 'Hosting';
$lang['LINKS_ASSOCIATED']     = 'Assoziierte Websites';
$lang['LINKS_WEBDEV']         = 'Web-Entwicklung';

// Login
$lang['LOGIN_ERR_IMG_VERIFY']     = 'Fehler: Der text entspricht nicht dem bild.';
$lang['LOGIN_ERR_MISSING_FIELDS'] = 'Fehler: Fehlenden Felder in der Login-Daten.';
$lang['LOGIN_ERR_DATABASE']       = 'Fehler beim erstellen der benutzer in der datenbank.';
$lang['LOGIN_IDENTIFY']           = 'Identifizieren';
$lang['LOGIN_LOGIN']              = 'Login';
$lang['LOGIN_PASSWORD']           = 'Passwort';
$lang['LOGIN_OR']                 = 'or';
$lang['LOGIN_REGISTER']           = 'Register';
$lang['LOGIN_NOT_REGISTERED']     = 'Noch nicht registriert?';
$lang['LOGIN_SIGNED_IN_AS']       = 'Angemeldet als';
$lang['LOGIN_GUEST']              = 'Als gast teilnehmen';
$lang['LOGIN_AS_GUEST']           = 'als gast';
$lang['LOGIN_NICK']               = 'Nick';
$lang['LOGIN_CONFIRM_HUMAN']      = 'Bestätigen sie sind menschen durch das kopieren des textes des bildes';
$lang['LOGIN_INTHEBOX']           = 'in the box';
$lang['LOGIN_IDENTIFIED_AS']      = 'Sie sind angemeldet als';
$lang['LOGIN_NOT_X']              = 'Not';
$lang['LOGIN_LOGOUT']             = 'logout';

// Facebook
$lang['FACEBOOK_LANG'] = 'de_DE';   // http://forum.developers.facebook.net/viewtopic.php?pid=223994#p223994

?>
