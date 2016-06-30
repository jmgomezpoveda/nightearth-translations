<?php

// -----------------
// Language: English
// -----------------
$lang = array();
$lang['ISOCODE'] = 'fr';

// Main menu
$lang['MAINMENU_MAP']       = 'Carte';
$lang['MAINMENU_3D']        = '3D';
$lang['MAINMENU_TOP']       = 'Saillants';
$lang['MAINMENU_NEWS']      = 'Nouvelles';
$lang['MAINMENU_SITEMAP']   = 'Liste de photos';
$lang['MAINMENU_GUESTBOOK'] = 'Livre d\'or';
$lang['MAINMENU_LINKS']     = 'Liens';
$lang['MAINMENU_SUBMIT']    = 'Envoyer des photos';
$lang['MAINMENU_REGISTER']  = 'Enregistrer';

// Headers
$lang['SEARCH'] = 'Recherche';

$lang['FROM'] = 'De';
$lang['DATE'] = 'Jour';

// index.php
$lang['INDEX_TITLE']       = 'Night Earth - Voi la Terre de nuit depuis l\'espace';
$lang['INDEX_DESCRIPTION'] = 'Night Earth, voi comment la Terre depuis l\'espace ressemble à la nuit. Parcourir les photos de nuit ou téléchargez le vôtre.';
$lang['INDEX_KEYWORDS']    = 'nightearth,nuit,la terre,la lune,carte,cartes,google,google maps,nasa,defense,meteorological,scientific,satellites,dmsp,ols,la pollution lumineuse,les images de la terre la nuit,carte du monde,Google Earth,vue de nuit de la terre depuis l\'espace, la terre de l\'espace dans la nuit,la terre la nuit dans des lumières,des images satellite,des images de la terre la nuit,la terre,la nuit,cartes de la ville';
$lang['INDEX_BODY']        = '<p>La carte nuit de la Terre montre les lumières qui sont visibles la nuit à la surface de la Terre.</p>
   	<p>Les zones les plus brillantes de la Terre sont les plus urbanisés, mais pas nécessairement les plus peuplés (comparer l\'Europe occidentale avec la Chine et l\'Inde). Les villes tendent à se développer le long des côtes et des réseaux de transport. Le réseau d\'autoroutes apparaît comme un réseau américain qui relie les points lumineux des centres ville. En Russie, le Transsibérien est une fine ligne s\'étendant de Moscou par le centre de l\'Asie à Vladivostok. Le Nil à partir du barrage d\'Assouan à la mer Méditerranée, est un autre thread brillante à travers une région par ailleurs sombre.</p>
    <p>Certaines régions restent peu peuplées et éteint. L\'Antarctique est entièrement sombre. Les jungles intérieures de l\'Afrique et l\'Amérique du Sud sont très sombre. Des déserts de l\'Afrique, l\'Arabie, l\'Australie, la Mongolie et les Etats-Unis ont peu ou pas de lumière (sauf le long des côtes et des rivières), avec les forêts boréales du Canada et la Russie, et les grandes montagnes de l\'Himalaya.</p>
	<p>Deux versions des images sont disponibles:</p>
	<ul><li>L\'image principale de la Terre dans la nuit (2012) a été capturé par <a href="http://earthobservatory.nasa.gov/?eocn=topnav&amp;eoci=logo" target="_blank">NASA</a> utilisant le Suomi National Polar-orbiting Partnership (Suomi NPP) satellite. Il a fallu pendant neuf jours en Avril 2012 et treize jours en Octobre 2012, au cours de 312 orbites à 824 km pour capturer la Terre entière. Ce satellite utilise la "bande jour-nuit" de la Visible Infrared Imaging Radiometer Suite (VIIRS), qui détecte la lumière dans une gamme de longueurs d\'onde du vert au proche infrarouge et utilise des techniques de filtrage pour observer des signaux sombres tels que les éruptions de gaz, les aurores boréales, les incendies, les lumières de la ville, et reflète le clair de lune.</li>
	<li>L\'<a href="showitem.php?item=night_map_earth" target="_blank">image d\'origine à partir de 2000</a> a été créé par <a href="http://www.nasa.gov" target="_blank">NASA</a> en utilisant les données de l\'<a href="http://www.ngdc.noaa.gov/dmsp/" target="_blank">Defense Meteorological Satellite Program (DMSP)</a>\'s <a href="http://thunder.msfc.nasa.gov/ols/" target="_blank">Operational Linescan System (OLS)</a>, conçu à l\'origine pour afficher des nuages ​​au clair de lune.</li></ul>
	<p>Les images de jour fournies par Google Maps (cartes et vues satellites) sont également disponibles à titre de référence. le <a href="https://developers.google.com/maps/" target="_blank">Google Maps API</a> a été utilisé pour créer cette visualisation.</p>
    <p>La carte 3D a été créée en utilisant <a href="http://cesiumjs.org/" target="_blank">Cesium</a> par <a href="http://openlayers.org/" target="_blank">OpenLayers</a> et <a href="https://github.com/openlayers/ol3-cesium/" target="_blank">ol3-cesium</a>. Celui-ci utilise des images de <a href="http://www.openstreetmap.org/" target="_blank">OpenStreetMap</a>, <a href="http://www.thunderforest.com/" target="_blank">Thunderforest</a>, <a href="https://www.mapbox.com/" target="_blank">Mapbox</a>, et <a href="https://www.mapquest.com/" target="_blank">Mapquest</a>.</p>
	<p>Comme les cartes fournies par la NASA étaient dans une projection différente que celle requise par Google Maps, le <a href="http://www.gdal.org/" target="_blank">GDAL - Geospatial Data Abstraction Library</a> bibliothèque a été utilisé pour la conversion.</p>
	<p>Bien que l\'image d\'origine se composait de 87,970 images, la carte à partir de 2012 comprend 349,525 images, et ajoutant donc un grand total de 437,495 images pour cette carte.</p>
    <p>Les images détaillées des villes ont été prises par les astronautes à bord de la Station spatiale internationale. Ils ont été obtenus à partir de <a href="http://eol.jsc.nasa.gov/" target="_blank">Image Science et analyse en laboratoire, la NASA Johnson Space Center. "La passerelle de la photographie astronaute de la Terre"</a>.</p>
    <p>Vous pouvez obtenir des renseignements supplémentaires de l\'article Earth Observatory <a href="http://earthobservatory.nasa.gov/Study/Lights/" target="_blank">Bright Lights, Big City</a> et le site web <a href="http://visibleearth.nasa.gov/view_rec.php?id=1438" target="_blank">Visible Earth de la NASA</a>.</p>
    <p>Les données de l\'Aurore Boréale et Aurora Australis (Northern Lights et Southern Lights) sont fournis par le <a href="http://www.noaa.gov/" target="_blank">NOAA - National Oceanic and Atmospheric Administration</a>.</p>
    <p>La superposition jour / nuit utilise le <a href="https://github.com/marmat/google-maps-api-addons" target="_blank">Google Maps API Addons</a>.</p>
    <p>La couche de nuages est fourni par <a href="http://openweathermap.org" target="_blank">OpenWeatherMap</a>.</p>
    <p>Un signe imprimé avec l\'image ci-dessus est disponible à l\'achat <a href="http://www.freemaninstitute.com/nightearth.htm" target="_blank">El Instituto Freeman</a>.</p>';
$lang['LOADINGMAP'] = 'Chargement de la carte';
$lang['CONTACT']    = 'Contact';

// showitem
$lang['SHOWITEM_MOSTRECENT']       = 'dernière entrée';
$lang['SHOWITEM_CLICKTOZOOM']      = 'Cliquez sur l\'image pour l\'agrandir';
$lang['UPLOADEDBY']                = 'En ligne par';
$lang['VIEWS']                     = 'Vues';
$lang['COMMENTS']                  = 'Commentaires';
$lang['SHOWITEM_PREVIOUSCOMMENTS'] = 'Voir les commentaires précédents';
$lang['SCORE']                     = 'Note';
$lang['SHOWITEM_YOURVOTE']         = 'Votre vote';
$lang['SHOWITEM_VOTE']             = 'vote';
$lang['SHOWITEM_PUBLISHCOMMENT']   = 'Ecrivez votre commentaire';
$lang['LOADING']                   = 'Chargement';
$lang['SHOWITEM_INTERACTIVEBROWSING'] = 'Navigation interactive activé';

// top
$lang['TOP_HIGHESTSCORE']          = 'Les plus votées';
$lang['TOP_MOSTRECENT']            = 'Dernière ajoutée';
$lang['TOP_MOSTVIEWED']            = 'Les plus populaires';
$lang['TOP_MOSTCOMMENTED']         = 'Plus parlé photos';
$lang['TOP_TIMESVIEWED']           = 'Afficher temps';
$lang['TOP_TIMESCOMMENTED']        = 'Commentaires';
$lang['TOP_TITLE']                 = 'Titre';

// whatsnew
$lang['WHATSNEW_PREVIOUSCHANGES']  = 'Afficher anciennes nouvelles';

// manageitem
$lang['MANAGEITEM_H1']             = 'Envoyer un nouveau image nocturne';  // 'Gestión de imágenes';
$lang['MANAGEITEM_ONLYREGISTERED'] = 'Seulement disponible aux utilisateurs enregistrés.';
$lang['MANAGEITEM_BODY1']          = 'Vous pouvez envoyer et partager vos images dans la nuit de partout dans le monde. C\'est gratuit!';
$lang['MANAGEITEM_BODY2']          = 'Cliquez sur la carte à l\'endroit où l\'image a été prise.';
$lang['MANAGEITEM_BODY3']          = 'Vous pouvez zoomer et dézoomer en utilisant la barre de zoom vers la gauche de la carte, ou la molette de la souris.';
$lang['MANAGEITEM_UPLOAD']         = 'Envoyer votre image';
$lang['MANAGEITEM_SELECTLOCATION'] = 'S\'il vous plaît sélectionnez l\'emplacement de la photo sur la carte.';
$lang['MANAGEITEM_TITLE']          = 'Titre';
$lang['MANAGEITEM_CATEGORY']       = 'Catégorie';
$lang['MANAGEITEM_IMGFILE']        = 'Fichier contenant l\'image (jpg)';
$lang['MANAGEITEM_MAXSIZE']        = 'taille maximale';
$lang['MANAGEITEM_DESCRIPTION']    = 'Description';
$lang['MANAGEITEM_MAXIMUM']        = 'maximale';
$lang['MANAGEITEM_CHARACTERS']     = 'caractères';
$lang['MANAGEITEM_PREVIEW']        = 'preview';
$lang['MANAGEITEM_POST']           = 'publier';
$lang['MANAGEITEM_SUBMITOK']       = 'Image décharge correctement.';
$lang['MANAGEITEM_PERMADDR']       = 'Adresse permanente';
$lang['MANAGEITEM_CLICK']          = 'Cliquez sur';
$lang['MANAGEITEM_HERE']           = 'ici';
$lang['MANAGEITEM_SUBMITANOTHER']  = 'pour envoyer une image nouvelle';

// manageuser
$lang['MANAGEUSER_H1'] = 'Enregistrer';  // 'Gestión de usuarios';

// links
$lang['LINKS_LIGHTPOLLUTION'] = 'La pollution lumineuse';
$lang['LINKS_EARTH']          = 'Terre';
$lang['LINKS_HOSTING']        = 'Logement';
$lang['LINKS_ASSOCIATED']     = 'Sites Web connexes';
$lang['LINKS_WEBDEV']         = 'Développement Web';

// Login
$lang['LOGIN_ERR_IMG_VERIFY']     = 'Erreur: Le texte ne correspond pas à l\'image.';
$lang['LOGIN_ERR_MISSING_FIELDS'] = 'Erreur: Champs manquants pour remplir le formulaire de login.';
$lang['LOGIN_ERR_DATABASE']       = 'Erreur de création de l\'utilisateur dans la base de données.';
$lang['LOGIN_IDENTIFY']           = 'Connexion';
$lang['LOGIN_LOGIN']              = 'Utilisateur';
$lang['LOGIN_PASSWORD']           = 'Mot de passe';
$lang['LOGIN_OR']                 = 'o';
$lang['LOGIN_REGISTER']           = 'Enregistrer';
$lang['LOGIN_NOT_REGISTERED']     = 'Etes-vous pas enregistrés?';
$lang['LOGIN_SIGNED_IN_AS']       = 'Identifié comme';
$lang['LOGIN_GUEST']              = 'Participe en tant qu\'invité';
$lang['LOGIN_AS_GUEST']           = 'en tant qu\'invité';
$lang['LOGIN_NICK']               = 'Nick';
$lang['LOGIN_CONFIRM_HUMAN']      = 'Confirmer que vous êtes humain en recopiant le texte de l\'image';
$lang['LOGIN_INTHEBOX']           = 'boîte';
$lang['LOGIN_IDENTIFIED_AS']      = 'Vous êtes identifié comme';
$lang['LOGIN_NOT_X']              = 'Etes-vous pas';
$lang['LOGIN_LOGOUT']             = 'changer d\'utilisateur';

// Facebook
$lang['FACEBOOK_LANG'] = 'fr_FR';   // http://forum.developers.facebook.net/viewtopic.php?pid=223994#p223994

?>
