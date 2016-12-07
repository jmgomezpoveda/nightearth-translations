<?php

// -----------------
// Language: English
// -----------------
$lang = array();
$lang['ISOCODE'] = 'es';

// Main menu
$lang['MAINMENU_MAP']       = 'Mapa';
$lang['MAINMENU_LEGACY']    = '2D';
$lang['MAINMENU_TOP']       = 'Destacados';
$lang['MAINMENU_NEWS']      = 'Novedades';
$lang['MAINMENU_SITEMAP']   = 'Listado de fotos';
$lang['MAINMENU_GUESTBOOK'] = 'Libro de visitas';
$lang['MAINMENU_LINKS']     = 'Enlaces';
$lang['MAINMENU_SUBMIT']    = 'Subir fotos';
$lang['MAINMENU_REGISTER']  = 'Regístrate';

// Headers
$lang['SEARCH'] = 'Buscar';

$lang['FROM'] = 'De';
$lang['DATE'] = 'Fecha';

// index.php
$lang['INDEX_TITLE']       = 'Night Earth - Observa la Tierra de Noche desde el Espacio';
$lang['INDEX_DESCRIPTION'] = 'Night Earth, mira el aspecto de la Tierra de noche desde el espacio. Navega entre fotografías nocturnas, y comparte las tuyas propias.';
$lang['INDEX_KEYWORDS']    = 'nightearth,tierra,noche,luz de luna,mapa,mapas,google,google maps,nasa,defense,meteorological,scientific,satellites,DMSP,ols,contaminación lumínica,imágenes de la tierra de noche,mapa mundi,mapa del mundo,google earth,la tierra vista de noche desde el espacio,la tierra desde el espacio por la noche,las luces de la tierra de noche,imágenes de satélite,imágenes de la tierra de noche,la tierra de noche,mapas de ciudades';
$lang['INDEX_BODY']        = '<p>Este mapa nocturno de la Tierra muestra las luces visibles en la superficie de la Tierra.</p>
    <p>Las áreas más brillantes de la Tierra son las más urbanizadas, pero no necesariamente las más pobladas (compárese Europa occidental con China e India). Las ciudades tienden a crecer a lo largo de las costas y las redes de transporte. El sistema de autopistas interestatales de Estados Unidos aparece como una red que conecta los puntos brillantes de los centros de las ciudades. En Rusia, el ferrocarril transiberiano es una delgada línea que va desde Moscú a través del centro de Asia hasta Vladivostok. El río Nilo, desde la presa de Aswan al mar Mediterráneo, es otro hilo brillante a través de una región por lo demás oscura.</p>
    <p>Algunas regiones permanecen poco pobladas y sin luz. La Antártida está completamente oscura. Las selvas del interior de África y América del Sur están en su mayoría oscuras. Desiertos de África, Arabia, Australia, Mongolia y Estados Unidos no tienen apenas luz (excepto a lo largo de las costas y los ríos), junto con los bosques boreales de Canadá y Rusia, y las grandes montañas del Himalaya.</p>
    <p>Dos versiones de las imágenes están disponibles:</p>
	<ul><li>La imagen principal de la Tierra de noche (2012) fue capturada por la <a href="http://earthobservatory.nasa.gov/?eocn=topnav&amp;eoci=logo" target="_blank">NASA</a> usando el satélite Suomi National Polar-orbiting Partnership (Suomi NPP). Llevó nueve días en abril de 2012 y trece días en octubre de 2012, durante 312 órbitas a 824 kilometros para capturar toda la Tierra. Este satélite utiliza la "banda de día-noche" del Visible Infrared Imaging Radiometer Suite (VIIRS), que detecta la luz en una gama de longitudes de onda del verde al infrarrojo cercano y utiliza técnicas de filtrado para observar señales tenues como llamaradas de gas, auroras, incendios, luces ciudades, así como luz de Luna reflejada.</li>
	<li>La <a href="showitem.php?item=night_map_earth" target="_blank">imagen original de 2000</a> fue creada por la <a href="http://www.nasa.gov" target="_blank">NASA</a> usando datos del programa <a href="http://www.ngdc.noaa.gov/dmsp/" target="_blank">Defense Meteorological Satellite Program (DMSP)</a> del <a href="http://thunder.msfc.nasa.gov/ols/" target="_blank">Operational Linescan System (OLS)</a>, originalmente diseñado para ver nubes bajo la luz de la Luna.</li></ul>
	<p>Las imágenes diurnas proporcionadas por Google Maps (vistas de mapas y satélite) también están disponibles como referencia. El <a href="https://developers.google.com/maps/" target="_blank">Google Maps API</a> fue utilizado para crear la visualización original.</p>
    <p>El mapa en 3D ha sido creado usando <a href="http://cesiumjs.org/" target="_blank">Cesium</a> por medio de <a href="http://openlayers.org/" target="_blank">OpenLayers</a> y <a href="https://github.com/openlayers/ol3-cesium/" target="_blank">ol3-cesium</a>. Usa mapas de <a href="http://www.openstreetmap.org/" target="_blank">OpenStreetMap</a>, <a href="http://www.thunderforest.com/" target="_blank">Thunderforest</a>, <a href="http://www.bing.com/maps/" target="_blank">Bing Maps</a>, y <a href="https://www.mapquest.com/" target="_blank">Mapquest</a>.</p>
    <p>La geocodificación ha sido proporcionada por Google y <a href="https://nominatim.openstreetmap.org/">Nominatim</a> via <a href="https://github.com/jonataswalker/ol3-geocoder">ol3-geocoder</a>.</p>
	<p>Como los mapas proporcionados por la NASA estaban en una proyección diferente de la requerida por Google Maps, la librería <a href="http://www.gdal.org/" target="_blank">GDAL - Geospatial Data Abstraction Library</a> ha sido utilizada para la conversión.</p>
	<p>Mientras que el mapa original constaba de 87.970 imágenes, el mapa de 2012 comprende 349.525 imágenes, suponiendo un total de 437.495 imágenes de este mapa.</p>
    <p>Las imágenes detalladas de las ciudades fueron tomadas por astronautas a bordo de la Estación Espacial Internacional. Éstas se han obtenido de <a href="http://eol.jsc.nasa.gov/" target="_blank">Image Science and Analysis Laboratory, NASA-Johnson Space Center. "The Gateway to Astronaut Photography of Earth."</a>.</p>
    <p>Se puede obtener información adicional del artículo de Earth Observatory <a href="http://earthobservatory.nasa.gov/Study/Lights/" target="_blank">Bright Lights, Big City</a> y el sitio web <a href="http://visibleearth.nasa.gov/view_rec.php?id=1438" target="_blank">NASA\'s Visible Earth</a>.</p>
    <p>Los datos de la Aurora Borealis y Aurora Australis (Northern Lights y Southern Lights) son proporcionados por el <a href="http://www.noaa.gov/" target="_blank">NOAA - National Oceanic and Atmospheric Administration</a>.</p>
    <p>La superposición dia/noche utiliza los <a href="https://github.com/marmat/google-maps-api-addons" target="_blank">Google Maps API Addons</a>.</p>
    <p>La capa de nubes ha sido proporcionada por <a href="http://openweathermap.org" target="_blank">OpenWeatherMap</a>.</p>
    <p>Un cartel impreso con la imagen de arriba está disponible para su compra en <a href="http://www.freemaninstitute.com/nightearth.htm" target="_blank">El Instituto Freeman</a>.</p>';
$lang['LOADINGMAP'] = 'Cargando mapa';
$lang['CONTACT']    = 'Contacto';

// showitem
$lang['SHOWITEM_MOSTRECENT']       = 'entrada más reciente';
$lang['SHOWITEM_CLICKTOZOOM']      = 'pincha en la imagen para ampliar';
$lang['UPLOADEDBY']                = 'Subido por';
$lang['VIEWS']                     = 'Visto';
$lang['COMMENTS']                  = 'Comentarios';
$lang['SHOWITEM_PREVIOUSCOMMENTS'] = 'Ver comentarios previos';
$lang['SCORE']                     = 'Puntuación';
$lang['SHOWITEM_YOURVOTE']         = 'Tu voto';
$lang['SHOWITEM_VOTE']             = 'voto';
$lang['SHOWITEM_PUBLISHCOMMENT']   = 'Escribe tu comentario';
$lang['LOADING']                   = 'Cargando';
$lang['SHOWITEM_INTERACTIVEBROWSING'] = 'Navigación interactiva activada';

// top
$lang['TOP_HIGHESTSCORE']          = 'Fotos mejor puntuadas';
$lang['TOP_MOSTRECENT']            = 'Últimas fotos añadidas';
$lang['TOP_MOSTVIEWED']            = 'Fotos más vistas';
$lang['TOP_MOSTCOMMENTED']         = 'Fotos más comentadas';
$lang['TOP_TIMESVIEWED']           = 'Veces vista';
$lang['TOP_TIMESCOMMENTED']        = 'Comentarios';
$lang['TOP_TITLE']                 = 'Título';

// whatsnew
$lang['WHATSNEW_PREVIOUSCHANGES']  = 'Ver novedades más antiguas';

// manageitem
$lang['MANAGEITEM_H1']             = 'Sube una nueva imagen nocturna';  // 'Gestión de imágenes';
$lang['MANAGEITEM_ONLYREGISTERED'] = 'Sólo disponible para usuarios registrados.';
$lang['MANAGEITEM_BODY1']          = 'Puedes enviar y compartir tus imágenes nocturnas de cualquier parte del mundo. ¡Es gratis!';
$lang['MANAGEITEM_BODY2']          = 'Pincha en el mapa en la ubicación donde la imagen fue tomada.';
$lang['MANAGEITEM_BODY3']          = 'Puedes acercarte y alejarte usando la barra de zoom que hay a la izquierda del mapa, o la rueda del ratón.';
$lang['MANAGEITEM_UPLOAD']         = 'Sube tu imagen';
$lang['MANAGEITEM_SELECTLOCATION'] = 'Por favor, selecciona la ubicación de la foto en el mapa.';
$lang['MANAGEITEM_TITLE']          = 'Título';
$lang['MANAGEITEM_CATEGORY']       = 'Categoría';
$lang['MANAGEITEM_IMGFILE']        = 'Fichero que contiene la imagen (jpg)';
$lang['MANAGEITEM_MAXSIZE']        = 'tamaño máximo';
$lang['MANAGEITEM_DESCRIPTION']    = 'Descripción';
$lang['MANAGEITEM_MAXIMUM']        = 'máximo';
$lang['MANAGEITEM_CHARACTERS']     = 'caracteres';
$lang['MANAGEITEM_PREVIEW']        = 'previsualizar';
$lang['MANAGEITEM_POST']           = 'publicar';
$lang['MANAGEITEM_SUBMITOK']       = 'Imagen dada de alta correctamente.';
$lang['MANAGEITEM_PERMADDR']       = 'Dirección permanente';
$lang['MANAGEITEM_CLICK']          = 'Haz click';
$lang['MANAGEITEM_HERE']           = 'aquí';
$lang['MANAGEITEM_SUBMITANOTHER']  = 'para enviar una nueva imagen';

// manageuser
$lang['MANAGEUSER_H1'] = 'Regístrate';  // 'Gestión de usuarios';

// links
$lang['LINKS_LIGHTPOLLUTION'] = 'Contaminación lumínica';
$lang['LINKS_EARTH']          = 'Tierra';
$lang['LINKS_HOSTING']        = 'Alojamiento';
$lang['LINKS_ASSOCIATED']     = 'Páginas web asociadas';
$lang['LINKS_WEBDEV']         = 'Desarrollo Web';

// Login
$lang['LOGIN_ERR_IMG_VERIFY']     = 'Error: el texto no coincide con la imagen.';
$lang['LOGIN_ERR_MISSING_FIELDS'] = 'Error: faltan campos por rellenar en el formulario de login.';
$lang['LOGIN_ERR_DATABASE']       = 'Error al crear el usuario en la base de datos.';
$lang['LOGIN_IDENTIFY']           = 'Identifícate';
$lang['LOGIN_LOGIN']              = 'Usuario';
$lang['LOGIN_PASSWORD']           = 'Contraseña';
$lang['LOGIN_OR']                 = 'o';
$lang['LOGIN_REGISTER']           = 'Regístrate';
$lang['LOGIN_NOT_REGISTERED']     = '¿No estás registrado?';
$lang['LOGIN_SIGNED_IN_AS']       = 'Identificado como';
$lang['LOGIN_GUEST']              = 'Participa como invitado';
$lang['LOGIN_AS_GUEST']           = 'como invitado';
$lang['LOGIN_NICK']               = 'Nick';
$lang['LOGIN_CONFIRM_HUMAN']      = 'Confirma que eres humano copiando el texto de la imagen';
$lang['LOGIN_INTHEBOX']           = 'en el cuadro';
$lang['LOGIN_IDENTIFIED_AS']      = 'Estás identificado como';
$lang['LOGIN_NOT_X']              = '¿No eres';
$lang['LOGIN_LOGOUT']             = 'cambia de usuario';

// Facebook
$lang['FACEBOOK_LANG'] = 'es_ES';   // http://forum.developers.facebook.net/viewtopic.php?pid=223994#p223994

?>
