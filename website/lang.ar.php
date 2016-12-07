<?php

// -----------------
// Language: Arabic
// -----------------
$lang = array();
$lang['ISOCODE'] = 'ar';

// Main menu
$lang['MAINMENU_MAP']       = 'خريطة';
$lang['MAINMENU_LEGACY']    = '2D';
$lang['MAINMENU_TOP']       = 'الأعلى';
$lang['MAINMENU_NEWS']      = 'أخبار';
$lang['MAINMENU_SITEMAP']   = 'خريطة الموقع';
$lang['MAINMENU_GUESTBOOK'] = 'سجل الزوار';
$lang['MAINMENU_LINKS']     = 'الروابط';
$lang['MAINMENU_SUBMIT']    = 'z';
$lang['MAINMENU_REGISTER']  = 'سجل';

// Headers
$lang['SEARCH'] = 'بحث';

$lang['FROM'] = 'من';
$lang['DATE'] = 'تاريخ';

// index.php
$lang['INDEX_TITLE']       = 'Night Earth - رؤية الأرض ليلا من الفضاء';
$lang['INDEX_DESCRIPTION'] = 'Night Earth, ترى كيف تبدو الأرض من الفضاء ليلا. استعراض الصور يلا أو تحميل بنفسك.';
$lang['INDEX_KEYWORDS']    = 'nightearth,ليل,أرض,ضوء القمر,خريطة,خرائط,google,google maps,nasa,defense,meteorological,scientific,satellites,dmsp,ols,التلوث الضوئي,صور الأرض في الليل,خريطة العالم,google earth,منظر الأرض من الفضاء,الأرض من الفضاء ليلا,الأرض ليلا في أضواء,صور الأقمار الصناعية,صور الأرض في الليل,الأرض ليلا,خرائط مدينة';
$lang['INDEX_BODY']        = '<p>خريطة يلة الأرض تظهر الأضواء التي تكون مرئية في الليل على سطح الأرض.</p>
    <p>ألمع مناطق من الأرض هي الأكثر تحضرا، ولكن ليس بالضرورة الأكثر سكانا (قارن غرب أوروبا مع الصين والهند). المدن تميل إلى النمو على طول السواحل وشبكات النقل. يظهر نظام الطريق السريع بين الولايات المتحدة الأمريكية وشعرية الربط بين النقاط إشراقا من مراكز المدن. في روسيا، والسكك الحديدية عبر سيبيريا هو خيط رفيع يمتد من موسكو عبر وسط اسيا الى فلاديفوستوك. نهر النيل، من سد أسوان إلى البحر الأبيض المتوسط​​، هو موضوع مشرق آخر من خلال منطقة مظلمة على خلاف ذلك.</p>
    <p>لا تزال بعض المناطق قليلة السكان ومظلمة. القارة القطبية الجنوبية هي مظلمة تماما. الادغال الداخلية من أفريقيا وأمريكا الجنوبية هي في معظمها مظلمة. تضاء الصحارى في أفريقيا، السعودية، أستراليا، ومنغوليا، والولايات المتحدة ليست كذلك (باستثناء طول الساحل والأنهار)، جنبا إلى جنب مع الغابات الشمالية في كندا وروسيا، والجبال العظيمة للهيمالايا.</p>
	<p>تتوفر نسختين من الصور:</p>
	<ul><li>تم التقاط الصورة الرئيسية من الأرض في الليل (2012) من قبل <a href="http://earthobservatory.nasa.gov/?eocn=topnav&amp;eoci=logo" target="_blank">NASA</a> باستخدام Suomi National Polar-orbiting Partnership (Suomi NPP) satellite. استغرق الأمر أكثر من تسعة أيام في شهر أبريل عام 2012، وثلاثة عشر يوما في أكتوبر 2012، وخلال 312 مدارات على 824 كيلومترا للقبض على الأرض كلها. يستخدم هذا القمر الصناعي في "الفرقة الليل والنهار" لل Visible Infrared Imaging Radiometer Suite (VIIRS), الذي يكتشف في ضوء مجموعة من الأطوال الموجية من الأخضر إلى بالقرب من الأشعة تحت الحمراء ويستخدم تقنيات الترشيح لمراقبة إشارات خافتة مثل مشاعل الغاز، الشفق، وحرائق الغابات، أضواء المدينة، وينعكس ضوء القمر.</li>
	<li><a href="showitem.php?item=night_map_earth" target="_blank">الصورة الأصلية من عام 2000</a> تم إنشاؤه من قبل <a href="http://www.nasa.gov" target="_blank">NASA</a> باستخدام بيانات من <a href="http://www.ngdc.noaa.gov/dmsp/" target="_blank">Defense Meteorological Satellite Program (DMSP)</a>\'s <a href="http://thunder.msfc.nasa.gov/ols/" target="_blank">Operational Linescan System (OLS)</a>, مصممة أصلا لعرض السحب على ضوء القمر.</li></ul>
	<p>الصور ضوء النهار التي تقدمها خرائط جوجل (الخرائط ومشاهدة الأقمار الصناعية) متاحة للإشارة أيضا. و <a href="https://developers.google.com/maps/" target="_blank">Google Maps API</a> كانت تستخدم لخلق هذا التصور.</p>
    <p>تم إنشاء خريطة 3D باستخدام<a href="http://cesiumjs.org/" target="_blank">Cesium</a> عبر <a href="http://openlayers.org/" target="_blank">OpenLayers</a> و <a href="https://github.com/openlayers/ol3-cesium/" target="_blank">ol3-cesium</a>. هذا يستخدم الصور من <a href="http://www.openstreetmap.org/" target="_blank">OpenStreetMap</a>, <a href="http://www.thunderforest.com/" target="_blank">Thunderforest</a>, <a href="http://www.bing.com/maps/" target="_blank">Bing Maps</a>, و <a href="https://www.mapquest.com/" target="_blank">Mapquest</a>.</p>
    <p>يتم توفير الترميز الجغرافي من قبل جوجل و<a href="https://nominatim.openstreetmap.org/">Nominatim</a> عبر <a href="https://github.com/jonataswalker/ol3-geocoder">ol3-geocoder</a>.</p>.
	<p>كانت ليالي الخرائط التي تقدمها وكالة ناسا في إسقاط مختلفة مثل واحد التي تتطلبها خرائط جوجل، <a href="http://www.gdal.org/" target="_blank">GDAL - Geospatial Data Abstraction Library</a> كان يستخدم مكتبة للتحويل.</p>
	<p>بينما تكونت الصورة الأصلية من 87،970 الصور، خريطة من عام 2012 تضم 349،525 الصور، لذلك بإضافة المجموع الكلي من 437،495 صور لهذه الخريطة.</p>
    <p>وقد أخذت صور تفصيلية للمدن من قبل رواد الفضاء على متن محطة الفضاء الدولية. وقد تم الحصول على هذه من <a href="http://eol.jsc.nasa.gov/" target="_blank">Image Science and Analysis Laboratory, NASA-Johnson Space Center. "The Gateway to Astronaut Photography of Earth"</a>.</p>
    <p>يمكن الحصول على المزيد من المعلومات من المادة مرصد الأرض <a href="http://earthobservatory.nasa.gov/Study/Lights/" target="_blank">Bright Lights, Big City</a>, و <a href="http://visibleearth.nasa.gov/view_rec.php?id=1438" target="_blank">NASA\'s Visible Earth</a> الموقع.</p>
    <p>يتم توفير البيانات من الشفق القطبي (الشفق القطبي الشمالي والجنوبي الأنوار) من قبل <a href="http://www.noaa.gov/" target="_blank">NOAA - National Oceanic and Atmospheric Administration</a>.</p>
    <p>يستخدم تراكب يوم / ليلة <a href="https://github.com/marmat/google-maps-api-addons" target="_blank">Google Maps API Addons</a>.</p>    
    <p>يتم توفير طبقة الغيوم التي كتبها <a href="http://openweathermap.org" target="_blank">OpenWeatherMap</a>.</p>
    <p>ملصق المطبوعة مع الصورة أعلاه هو متاح للشراء في <a href="http://www.freemaninstitute.com/nightearth.htm" target="_blank">The Freeman Institute</a>.</p>';
$lang['LOADINGMAP'] = 'تحميل الخريطة';
$lang['CONTACT']    = 'معلومات الاتصال';

// showitem
$lang['SHOWITEM_MOSTRECENT']       = 'دخول الأخير';
$lang['SHOWITEM_CLICKTOZOOM']      = 'اضغط على الصورة لتكبيرها';
$lang['UPLOADEDBY']                = 'تم التحميل بواسطة';
$lang['VIEWS']                     = 'عدد';
$lang['COMMENTS']                  = 'تعليقات';
$lang['SHOWITEM_PREVIOUSCOMMENTS'] = 'عرض التعليقات السابقة';
$lang['SCORE']                     = 'نقاط';
$lang['SHOWITEM_YOURVOTE']         = 'تقيمك';
$lang['SHOWITEM_VOTE']             = 'التصويت';
$lang['SHOWITEM_PUBLISHCOMMENT']   = 'آخر تعليقك';
$lang['LOADING']                   = 'تحميل';
$lang['SHOWITEM_INTERACTIVEBROWSING'] = 'مكن التصفح التفاعلية';

// top
$lang['TOP_HIGHESTSCORE']          = 'الصور الأكثر تقييما';
$lang['TOP_MOSTRECENT']            = 'أحدث الصور';
$lang['TOP_MOSTVIEWED']            = 'الأكثر مشاهدة الصور';
$lang['TOP_MOSTCOMMENTED']         = 'وعلقت معظم الصور';
$lang['TOP_TIMESVIEWED']           = 'تايمز ينظر';
$lang['TOP_TIMESCOMMENTED']        = 'تعليقات';
$lang['TOP_TITLE']                 = 'لقب';

// whatsnew
$lang['WHATSNEW_PREVIOUSCHANGES']  = 'عرض الأخبار السابقة';

// manageitem
$lang['MANAGEITEM_H1']             = 'رفع صورة ليلة جديدة';  // 'Night pictures management';
$lang['MANAGEITEM_ONLYREGISTERED'] = 'متاحة فقط للمستخدمين المسجلين.';
$lang['MANAGEITEM_BODY1']          = 'هنا يمكنك تحميل وتبادل الصور الخاصة بك ليلة خاصة من جميع أنحاء العالم. أنه مجاني!';
$lang['MANAGEITEM_BODY2']          = 'انقر على الخريطة في الموقع حيث تم التقاط الصورة.';
$lang['MANAGEITEM_BODY3']          = 'يمكنك التكبير والتصغير باستخدام شريط التكبير على اليسار أو الماوس عجلة التمرير.';
$lang['MANAGEITEM_UPLOAD']         = 'تحميل صورتك';
$lang['MANAGEITEM_SELECTLOCATION'] = 'من فضلك ، حدد الموقع من شريط في الخريطة أعلاه.';
$lang['MANAGEITEM_TITLE']          = 'لقب';
$lang['MANAGEITEM_CATEGORY']       = 'فئة';
$lang['MANAGEITEM_IMGFILE']        = 'ملف صورة (JPG)';
$lang['MANAGEITEM_MAXSIZE']        = 'الأقصى';
$lang['MANAGEITEM_DESCRIPTION']    = 'وصف';
$lang['MANAGEITEM_MAXIMUM']        = 'أقصى';
$lang['MANAGEITEM_CHARACTERS']     = 'الأحرف';
$lang['MANAGEITEM_PREVIEW']        = 'معاينة';
$lang['MANAGEITEM_POST']           = 'بعد';
$lang['MANAGEITEM_SUBMITOK']       = 'قدمت الصورة بشكل صحيح.';
$lang['MANAGEITEM_PERMADDR']       = 'العنوان الدائم';
$lang['MANAGEITEM_CLICK']          = 'فوق';
$lang['MANAGEITEM_HERE']           = 'هنا';
$lang['MANAGEITEM_SUBMITANOTHER']  = 'أن يقدم صورة أخرى';

// manageuser
$lang['MANAGEUSER_H1'] = 'سجل';    // 'User management';

// links
$lang['LINKS_LIGHTPOLLUTION'] = 'ضوء التلوث';
$lang['LINKS_EARTH']          = 'أرض';
$lang['LINKS_HOSTING']        = 'استضافة';
$lang['LINKS_ASSOCIATED']     = 'المواقع المرتبطة';
$lang['LINKS_WEBDEV']         = 'الشبكة العالمية للتنمية';

// Login
$lang['LOGIN_ERR_IMG_VERIFY']     = 'خطأ : النص دويسنت تطابق صورة';
$lang['LOGIN_ERR_MISSING_FIELDS'] = 'خطأ : مفقود في حقول معلومات الدخول';
$lang['LOGIN_ERR_DATABASE']       = 'خطأ في إنشاء المستخدم في قاعدة البيانات.';
$lang['LOGIN_IDENTIFY']           = 'تحديد';
$lang['LOGIN_LOGIN']              = 'دخول';
$lang['LOGIN_PASSWORD']           = 'كلمة السر';
$lang['LOGIN_OR']                 = 'أو';
$lang['LOGIN_REGISTER']           = 'سجل';
$lang['LOGIN_NOT_REGISTERED']     = 'غير مسجل؟';
$lang['LOGIN_SIGNED_IN_AS']       = 'توقيع باسم';
$lang['LOGIN_GUEST']              = 'شارك كضيف';
$lang['LOGIN_AS_GUEST']           = 'ضيف';
$lang['LOGIN_NICK']               = 'نيك';
$lang['LOGIN_CONFIRM_HUMAN']      = 'تأكيد كنت البشرية عن طريق نسخ النص من الصورة';
$lang['LOGIN_INTHEBOX']           = 'في مربع';
$lang['LOGIN_IDENTIFIED_AS']      = 'لقد قمت بتسجيل الدخول باسم';
$lang['LOGIN_NOT_X']              = 'لا';
$lang['LOGIN_LOGOUT']             = 'خروج';

// Facebook
$lang['FACEBOOK_LANG'] = 'ar_AR';   // http://forum.developers.facebook.net/viewtopic.php?pid=223994#p223994

?>
