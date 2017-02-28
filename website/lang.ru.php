<?php

// -----------------
// Language: Russian
// -----------------
$lang = array();
$lang['ISOCODE'] = 'ru';

// Main menu
$lang['MAINMENU_MAP']       = 'Карта';
$lang['MAINMENU_LEGACY']    = '2D';
$lang['MAINMENU_TOP']       = 'топ';
$lang['MAINMENU_NEWS']      = 'Новости';
$lang['MAINMENU_SITEMAP']   = 'Карта сайта';
$lang['MAINMENU_GUESTBOOK'] = 'Гостевая книга';
$lang['MAINMENU_LINKS']     = 'Ссылки';
$lang['MAINMENU_SUBMIT']    = 'Загрузить';
$lang['MAINMENU_REGISTER']  = 'Регистрация';

// Headers
$lang['SEARCH'] = 'Поиск';

$lang['FROM'] = 'С';
$lang['DATE'] = 'Дата';

// index.php
$lang['INDEX_TITLE']       = 'Night Earth - См Землю ночью из космоса';
$lang['INDEX_DESCRIPTION'] = 'Night Earth, Посмотреть, как выглядит Земля из космоса в ночное время. Просмотр ночные фотографии или загружайте свои собственные.';
$lang['INDEX_KEYWORDS']    = 'nightearth,ночь,земля,лунный свет,карта,карты,google,google maps,nasa,defense,meteorological,scientific,satellites,dmsp,ols,световое загрязнение,фотографии Земли в ночное время,карта мира,Google Earth,Земля ночью вид из космоса,Земля из космоса в ночное время,земля ночью в огнях,спутниковые изображения,образы земли в ночное время,земля по ночам,карты города';
$lang['INDEX_BODY']        = '<p>Карта ночь Земля показывает огни, которые видны ночью на поверхности Земли.</p>
	<p>ярких областей Земли наиболее урбанизированных, но не обязательно самый густонаселенный (сравните Западную Европу с Китаем и Индией). Города, как правило, растут вдоль береговых линий и транспортных сетей. Межгосударственных США дорожная сеть выглядит как решетка подключения яркие точки городских центров. В России, Транссибирской железной дороги тонкой линией, простирающейся от Москвы через центр Азии до Владивостока. Нила, от Асуанской плотины до Средиземного моря, является еще одной яркой нитью через иначе темные области.</p>
    <p>некоторых регионах остается малонаселенной и горит. Антарктиды полностью темная. Интерьер джунгли Африки и Южной Америки, в основном темно. Пустыни в Африке, Аравии, Австралии, Монголии и Соединенных Штатах, плохо освещенных, а также (за исключением вдоль побережья и реки), а также бореальных лесах Канады и России, а большой горы Гималаи.</p>
	<p>Две версии изображений доступны:</p>
	<ul><li>Основное изображение Земли в ночное время (2012) был захвачен <a href="http://earthobservatory.nasa.gov/?eocn=topnav&amp;eoci=logo" target="_blank">NASA</a> с помощью Suomi National Polar-orbiting Partnership (Suomi NPP) спутниковое. Прошло более девяти дней в апреле 2012 года и тринадцать дней в октябре 2012 года, во время 312 орбит на 824 километров, чтобы захватить всю Землю. Этот спутник использует «день-ночь группа" из Visible Infrared Imaging Radiometer Suite (VIIRS), который обнаруживает свет в диапазоне длин волн от зеленого до ближней инфракрасной и использует методы фильтрации наблюдать тусклые сигналов, таких как факелах, полярных сияний, пожары, городских огней, и отражается лунный свет.</li>
	<li><a href="showitem.php?item=night_map_earth" target="_blank">оригинальный образ от 2000</a> был создан <a href="http://www.nasa.gov" target="_blank">NASA</a> с использованием данных <a href="http://www.ngdc.noaa.gov/dmsp/" target="_blank">Defense Meteorological Satellite Program (DMSP)</a>\'s <a href="http://thunder.msfc.nasa.gov/ols/" target="_blank">Operational Linescan System (OLS)</a>, изначально предназначена для просмотра облака в лунном свете.</li></ul>
	<p>Дневной свет изображения, предоставляемые Google Maps (Карты и виды спутниковые), также доступны для справки. <a href="https://developers.google.com/maps/" target="_blank">Google Maps API</a> был использован для создания этой визуализации.</p>
    <p>3D Карта была создана с использованием <a href="http://cesiumjs.org/" target="_blank">Cesium</a> через <a href="http://openlayers.org/" target="_blank">OpenLayers</a> и <a href="https://github.com/openlayers/ol-cesium/" target="_blank">ol-cesium</a>. Это использует образы из <a href="http://www.openstreetmap.org/" target="_blank">OpenStreetMap</a>, <a href="http://www.thunderforest.com/" target="_blank">Thunderforest</a>, <a href="http://www.bing.com/maps/" target="_blank">Bing Maps</a>, и <a href="https://www.mapquest.com/" target="_blank">Mapquest</a>.</p>
    <p>Геокодирование обеспечивается Google и <a href="https://nominatim.openstreetmap.org/">Nominatim</a> через <a href="https://github.com/jonataswalker/ol3-geocoder">ol3-geocoder</a>.</p>
	<p>Как карты, предоставляемые НАСА были в другой проекции как одно требовали Google Maps, <a href="http://www.gdal.org/" target="_blank">GDAL - Geospatial Data Abstraction Library</a> Библиотека была использована для преобразования.</p>
	<p>В то время как исходное изображение состояло из 87,970 снимков, отображение 2012 году состоит из 349,525 изображений, поэтому добавление в общей сложности 437,495 изображений для этой карты.</p>
	<p>детальные снимки городов были сделаны астронавтами на борту Международной космической станции. Они были получены из <a href="http://eol.jsc.nasa.gov/" target="_blank">Image Science and Analysis Laboratory, NASA-Johnson Space Center. "Ворота в Астронавт фотографии Земли"</a>.</p>
    <p>Дополнительная информация может быть получена из Earth Observatory статье <a href="http://earthobservatory.nasa.gov/Study/Lights/" target="_blank">Bright Lights, Big City</a>, и <a href="http://visibleearth.nasa.gov/view_rec.php?id=1438" target="_blank">NASA Видимые Земли</a> веб-сайт.</p>
    <p>Данные из Aurora Borealis и Aurora Australis (Northern Lights и южное сияние) предоставляются <a href="http://www.noaa.gov/" target="_blank">NOAA - National Oceanic and Atmospheric Administration</a>.</p>
    <p>День / ночь наложения использует <a href="https://github.com/marmat/google-maps-api-addons" target="_blank">Google Maps API Addons</a>.</p>
    <p>Облака слой обеспечивается <a href="http://openweathermap.org" target="_blank">OpenWeatherMap</a>.</p>
    <p>печатный плакат с изображением выше можно приобрести по адресу <a href="http://www.freemaninstitute.com/nightearth.htm" target="_blank">The Freeman Institute</a>.</p>';
$lang['LOADINGMAP'] = 'Загрузка карты';
$lang['CONTACT']    = 'Связь';

// showitem
$lang['SHOWITEM_MOSTRECENT']       = 'Последняя запись';
$lang['SHOWITEM_CLICKTOZOOM']      = 'кликните на картинку, чтобы увеличить';
$lang['UPLOADEDBY']                = 'Автор';
$lang['VIEWS']                     = 'Просмотров';
$lang['COMMENTS']                  = 'Комментарии';
$lang['SHOWITEM_PREVIOUSCOMMENTS'] = 'Посмотреть предыдущие комментарии';
$lang['SCORE']                     = 'Оценка';
$lang['SHOWITEM_YOURVOTE']         = 'Ваш голос';
$lang['SHOWITEM_VOTE']             = 'голоса';
$lang['SHOWITEM_PUBLISHCOMMENT']   = 'Ваш комментарий';
$lang['LOADING'] 			       = 'Загрузка';
$lang['SHOWITEM_INTERACTIVEBROWSING'] = 'включен интерактивный просмотр';

// top
$lang['TOP_HIGHESTSCORE']          = 'рейтингу фотографии';
$lang['TOP_MOSTRECENT']            = 'Последние фотографии';
$lang['TOP_MOSTVIEWED']            = 'наибольшее количество голосов';
$lang['TOP_MOSTCOMMENTED']         = 'Самые обсуждаемые фото';
$lang['TOP_TIMESVIEWED']           = 'Количество просмотров';
$lang['TOP_TIMESCOMMENTED']        = 'Комментарии';
$lang['TOP_TITLE']                 = 'Название';

// whatsnew
$lang['WHATSNEW_PREVIOUSCHANGES']  = 'Предыдущая новость';

// manageitem
$lang['MANAGEITEM_H1']             = 'Загрузить новую фотографию ночь';  // 'Night pictures management';
$lang['MANAGEITEM_ONLYREGISTERED'] = 'Только для зарегистрированных пользователей.';
$lang['MANAGEITEM_BODY1']          = 'Здесь вы сможете загружать и делиться собственными изображениями ночь со всего мира. Это бесплатно!';
$lang['MANAGEITEM_BODY2']          = 'Нажмите на карте в том месте, где была сделана фотография.';
$lang['MANAGEITEM_BODY3']          = 'Вы можете увеличивать и уменьшать масштаб с помощью шкалы масштабирования слева или колесо прокрутки мыши.';
$lang['MANAGEITEM_UPLOAD']         = 'Загрузить свою фотографию';
$lang['MANAGEITEM_SELECTLOCATION'] = 'Пожалуйста, выберите расположение картинки в карте выше.';
$lang['MANAGEITEM_TITLE']          = 'Название';
$lang['MANAGEITEM_CATEGORY']       = 'Категория';
$lang['MANAGEITEM_IMGFILE']        = 'файлов изображений (jpg)';
$lang['MANAGEITEM_MAXSIZE']        = 'Максимальный размер';
$lang['MANAGEITEM_DESCRIPTION']    = 'Описание';
$lang['MANAGEITEM_MAXIMUM']        = 'максимальной';
$lang['MANAGEITEM_CHARACTERS']     = 'символы';
$lang['MANAGEITEM_PREVIEW']        = 'предварительный просмотр';
$lang['MANAGEITEM_POST']           = 'сообщение';
$lang['MANAGEITEM_SUBMITOK']       = 'Изображение представленных правильно.';
$lang['MANAGEITEM_PERMADDR']       = 'Постоянный адрес';
$lang['MANAGEITEM_CLICK']          = 'Нажмите';
$lang['MANAGEITEM_HERE']           = 'здесь';
$lang['MANAGEITEM_SUBMITANOTHER']  = 'представить другой образ';

// manageuser
$lang['MANAGEUSER_H1'] = 'реестр';    // 'User management';

// links
$lang['LINKS_LIGHTPOLLUTION'] = 'светового загрязнения';
$lang['LINKS_EARTH']          = 'земля';
$lang['LINKS_HOSTING']        = 'Хостинг';
$lang['LINKS_ASSOCIATED']     = 'Связанные Сайты';
$lang['LINKS_WEBDEV']         = 'Веб-программирование';

// Login
$lang['LOGIN_ERR_IMG_VERIFY']     = 'Ошибка:. текстом оленья кожа матча образ.';
$lang['LOGIN_ERR_MISSING_FIELDS'] = 'Ошибка:. отсутствующие поля в Войти информации.';
$lang['LOGIN_ERR_DATABASE']       = 'Ошибка при создании пользователя в базе данных.';
$lang['LOGIN_IDENTIFY']           = 'Определить';
$lang['LOGIN_LOGIN']              = 'Логин';
$lang['LOGIN_PASSWORD']           = 'пароль';
$lang['LOGIN_OR']                 = 'или';
$lang['LOGIN_REGISTER']           = 'Регистрация';
$lang['LOGIN_NOT_REGISTERED']     = 'Вы не зарегистрированы?';
$lang['LOGIN_SIGNED_IN_AS']       = 'Подписано в качестве';
$lang['LOGIN_AS_GUEST']           = 'в качестве гостя';
$lang['LOGIN_GUEST']              = 'Участие в качестве гостя';
$lang['LOGIN_NICK']               = 'Ника';
$lang['LOGIN_CONFIRM_HUMAN']      = 'подтверждать вы человек, скопировав текст образ';
$lang['LOGIN_INTHEBOX']           = 'в поле';
$lang['LOGIN_IDENTIFIED_AS']      = 'Вы вошли как';
$lang['LOGIN_NOT_X']              = 'Не';
$lang['LOGIN_LOGOUT']             = 'Выход';

// Facebook
$lang['FACEBOOK_LANG'] = 'ru_RU';   // http://forum.developers.facebook.net/viewtopic.php?pid=223994#p223994

?>
