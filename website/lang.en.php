<?php

// -----------------
// Language: English
// -----------------
$lang = array();
$lang['ISOCODE'] = 'en';

// Main menu
$lang['MAINMENU_MAP']       = 'Map';
$lang['MAINMENU_3D']        = '3D';
$lang['MAINMENU_TOP']       = 'Top';
$lang['MAINMENU_NEWS']      = 'News';
$lang['MAINMENU_SITEMAP']   = 'Site map';
$lang['MAINMENU_GUESTBOOK'] = 'Guestbook';
$lang['MAINMENU_LINKS']     = 'Links';
$lang['MAINMENU_SUBMIT']    = 'Upload';
$lang['MAINMENU_REGISTER']  = 'Register';

// Headers
$lang['SEARCH'] = 'Search';

$lang['FROM'] = 'From';
$lang['DATE'] = 'Date';

// index.php
$lang['INDEX_TITLE']       = 'Night Earth - See the Earth at Night from Space';
$lang['INDEX_DESCRIPTION'] = 'Night Earth, see how the Earth looks from space at Night. Browse night pictures or upload your own.';
$lang['INDEX_KEYWORDS']    = 'nightearth,night,earth,moonlight,map,maps,google,google maps,nasa,defense,meteorological,scientific,satellites,dmsp,ols,light pollution,pictures of earth at night,world map,google earth,earth night view from space,earth from space at night,earth at night in lights,satellite images,images of earth at night,earth at night,city maps';
$lang['INDEX_BODY']        = '<p>The Night Earth map shows the lights that are visible at night on the Earth\'s surface.</p>
    <p>The brightest areas of the Earth are the most urbanized, but not necessarily the most populated (compare western Europe with China and India). Cities tend to grow along coastlines and transportation networks. The United States interstate highway system appears as a lattice connecting the brighter dots of city centers. In Russia, the Trans-Siberian railroad is a thin line stretching from Moscow through the center of Asia to Vladivostok. The Nile River, from the Aswan Dam to the Mediterranean Sea, is another bright thread through an otherwise dark region.</p>
    <p>Some regions remain thinly populated and unlit. Antarctica is entirely dark. The interior jungles of Africa and South America are mostly dark. Deserts in Africa, Arabia, Australia, Mongolia, and the United States are poorly lit as well (except along the coast and rivers), along with the boreal forests of Canada and Russia, and the great mountains of the Himalaya.</p>
	<p>Two versions of the images are available:</p>
	<ul><li>The main image of the Earth at night (2012) was captured by <a href="http://earthobservatory.nasa.gov/?eocn=topnav&amp;eoci=logo">NASA</a> using the Suomi National Polar-orbiting Partnership (Suomi NPP) satellite. It took over nine days in April 2012 and thirteen days in October 2012, during 312 orbits at 824 kilometers (512 miles) to capture the whole Earth. This satellite uses the “day-night band” of the Visible Infrared Imaging Radiometer Suite (VIIRS), which detects light in a range of wavelengths from green to near-infrared and uses filtering techniques to observe dim signals such as gas flares, auroras, wildfires, city lights, and reflected moonlight.</li>
	<li>The <a href="showitem.php?item=night_map_earth">original image from 2000</a> was created by <a href="http://www.nasa.gov" target="_blank">NASA</a> using data from the <a href="http://www.ngdc.noaa.gov/dmsp/" target="_blank">Defense Meteorological Satellite Program (DMSP)</a>\'s <a href="http://thunder.msfc.nasa.gov/ols/" target="_blank">Operational Linescan System (OLS)</a>, originally designed to view clouds by moonlight.</li></ul>
	<p>The daylight images provided by Google Maps (maps and satellite views) are also available for reference. The <a href="https://developers.google.com/maps/">Google Maps API</a> was used for creating this visualisation.</p>
	<p>As the maps provided by NASA were in a different projection as the one required by Google Maps, the <a href="http://www.gdal.org/">GDAL - Geospatial Data Abstraction Library</a> library was used for the conversion.</p>
	<p>While the original image consisted of 87.970 images, the map from 2012 comprises 349.525 images, therefore adding a grand total of 437.495 images for this map.</p>
    <p>The detailed images of the cities were taken by astronauts aboard the International Space Station. These have been obtained from the <a href="http://eol.jsc.nasa.gov/" target="_blank">Image Science and Analysis Laboratory, NASA-Johnson Space Center. "The Gateway to Astronaut Photography of Earth"</a>.</p>
    <p>Further information can be obtained from the Earth Observatory article <a href="http://earthobservatory.nasa.gov/Study/Lights/" target="_blank">Bright Lights, Big City</a>, and <a href="http://visibleearth.nasa.gov/view_rec.php?id=1438" target="_blank">NASA\'s Visible Earth</a> website.</p>
    <p>The Aurora Borealis and Aurora Australis (Northern Lights and Southern Lights) data is provided by <a href="http://www.noaa.gov/" target="_blank">NOAA - National Oceanic and Atmospheric Administration</a>.</p>
    <p>The day/night overlay uses the <a href="https://github.com/marmat/google-maps-api-addons" target="_blank">Google Maps API Addons</a>.</p>
    <p>The clouds layer is provided by <a href="http://openweathermap.org" target="_blank">OpenWeatherMap</a>.</p>
    <p>A printed poster with the image above is available for purchase at <a href="http://www.freemaninstitute.com/nightearth.htm" target="_blank">The Freeman Institute</a>.</p>';
$lang['LOADINGMAP'] = 'Loading map';
$lang['CONTACT']    = 'Contact Info';

// Google Earth
$lang['GOOGLEEARTH_H1']    = 'Google Earth: World Map in 3D';
$lang['GOOGLEEARTH_BODY1'] = 'You can now see the images of <cite>Night Earth</cite> inside <cite>Google Earth</cite>.';
$lang['GOOGLEEARTH_BODY2'] = 'In order to view <cite>Night Earth</cite> images placed inside <cite>Google Earth</cite>:';
$lang['GOOGLEEARTH_BODY3'] = 'click here to add night images to Google Earth';
$lang['GOOGLEEARTH_BODY4'] = 'If you don\'t have <cite>Google Earth</cite> installed, you can download it <b>for free</b>.';

// showitem
$lang['SHOWITEM_MOSTRECENT']       = 'most recent entry';
$lang['SHOWITEM_CLICKTOZOOM']      = 'click on the image to enlarge';
$lang['UPLOADEDBY']                = 'Uploaded by';
$lang['VIEWS']                     = 'Views';
$lang['COMMENTS']                  = 'Comments';
$lang['SHOWITEM_PREVIOUSCOMMENTS'] = 'View previous comments';
$lang['SCORE']                     = 'Score';
$lang['SHOWITEM_YOURVOTE']         = 'Your vote';
$lang['SHOWITEM_VOTE']             = 'vote';
$lang['SHOWITEM_PUBLISHCOMMENT']   = 'Post your comment';
$lang['LOADING']                   = 'Loading';
$lang['SHOWITEM_INTERACTIVEBROWSING'] = 'Interactive browsing enabled';

// top
$lang['TOP_HIGHESTSCORE']          = 'Most rated photos';
$lang['TOP_MOSTRECENT']            = 'Most recent photos';
$lang['TOP_MOSTVIEWED']            = 'Most viewed photos';
$lang['TOP_MOSTCOMMENTED']         = 'Most commented photos';
$lang['TOP_TIMESVIEWED']           = 'Times viewed';
$lang['TOP_TIMESCOMMENTED']        = 'Comments';
$lang['TOP_TITLE']                 = 'Title';

// whatsnew
$lang['WHATSNEW_PREVIOUSCHANGES']  = 'View previous news';

// manageitem
$lang['MANAGEITEM_H1']             = 'Upload a new night picture';  // 'Night pictures management';
$lang['MANAGEITEM_ONLYREGISTERED'] = 'Only available for registered users.';
$lang['MANAGEITEM_BODY1']          = 'You can upload and share your own night images from all over the world. It\'s free!';
$lang['MANAGEITEM_BODY2']          = 'Click on the map in the location where the image was taken.';
$lang['MANAGEITEM_BODY3']          = 'You can zoom in and out using the zoom bar on the left or the mouse scrollwheel.';
$lang['MANAGEITEM_UPLOAD']         = 'Upload your picture';
$lang['MANAGEITEM_SELECTLOCATION'] = 'Please, select the location of the picture in the map above.';
$lang['MANAGEITEM_TITLE']          = 'Title';
$lang['MANAGEITEM_CATEGORY']       = 'Category';
$lang['MANAGEITEM_IMGFILE']        = 'Image file (jpg)';
$lang['MANAGEITEM_MAXSIZE']        = 'maximum size';
$lang['MANAGEITEM_DESCRIPTION']    = 'Description';
$lang['MANAGEITEM_MAXIMUM']        = 'maximum';
$lang['MANAGEITEM_CHARACTERS']     = 'characters';
$lang['MANAGEITEM_PREVIEW']        = 'preview';
$lang['MANAGEITEM_POST']           = 'submit';
$lang['MANAGEITEM_SUBMITOK']       = 'Image submitted correctly.';
$lang['MANAGEITEM_PERMADDR']       = 'Permanent address';
$lang['MANAGEITEM_CLICK']          = 'Click';
$lang['MANAGEITEM_HERE']           = 'here';
$lang['MANAGEITEM_SUBMITANOTHER']  = 'to submit another image';

// manageuser
$lang['MANAGEUSER_H1'] = 'Register';    // 'User management';

// links
$lang['LINKS_LIGHTPOLLUTION'] = 'Light Pollution';
$lang['LINKS_EARTH']          = 'Earth';
$lang['LINKS_HOSTING']        = 'Hosting';
$lang['LINKS_ASSOCIATED']     = 'Associated Websites';
$lang['LINKS_WEBDEV']         = 'Web Development';

// Login
$lang['LOGIN_ERR_IMG_VERIFY']     = 'Error: the text doesnt match the image.';
$lang['LOGIN_ERR_MISSING_FIELDS'] = 'Error: missing fields in the login information.';
$lang['LOGIN_ERR_DATABASE']       = 'Error creating the user in the database.';
$lang['LOGIN_IDENTIFY']           = 'Identify';
$lang['LOGIN_LOGIN']              = 'Login';
$lang['LOGIN_PASSWORD']           = 'Password';
$lang['LOGIN_OR']                 = 'or';
$lang['LOGIN_REGISTER']           = 'Register';
$lang['LOGIN_NOT_REGISTERED']     = 'Not registered?';
$lang['LOGIN_SIGNED_IN_AS']       = 'Signed in as';
$lang['LOGIN_GUEST']              = 'Participate as a guest';
$lang['LOGIN_AS_GUEST']           = 'as guest';
$lang['LOGIN_NICK']               = 'Nick';
$lang['LOGIN_CONFIRM_HUMAN']      = 'Confirm you are human by copying the text of the image';
$lang['LOGIN_INTHEBOX']           = 'in the box';
$lang['LOGIN_IDENTIFIED_AS']      = 'You are signed in as';
$lang['LOGIN_NOT_X']              = 'Not';
$lang['LOGIN_LOGOUT']             = 'logout';

// Facebook
$lang['FACEBOOK_LANG'] = 'en_US';   // http://forum.developers.facebook.net/viewtopic.php?pid=223994#p223994

?>
