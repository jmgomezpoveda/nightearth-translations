<?php

// -----------------
// Language: Chinese
// -----------------
$lang = array();
$lang['ISOCODE'] = 'zh';

// Main menu
$lang['MAINMENU_MAP']       = '地图';
$lang['MAINMENU_LEGACY']    = '2D';
$lang['MAINMENU_TOP']       = '顶部';
$lang['MAINMENU_NEWS']      = '新闻';
$lang['MAINMENU_SITEMAP']   = '网站地图';
$lang['MAINMENU_GUESTBOOK'] = '给我留言';
$lang['MAINMENU_LINKS']     = '链接';
$lang['MAINMENU_SUBMIT']    = '上传';
$lang['MAINMENU_REGISTER']  = '注册';

// Headers
$lang['SEARCH'] = '搜索';

$lang['FROM'] = '从';
$lang['DATE'] = '日期';

// index.php
$lang['INDEX_TITLE']       = 'Night Earth - 从太空看地球夜景';
$lang['INDEX_DESCRIPTION'] = 'Night Earth，看到地球是怎样看的空间在夜间进行。晚上浏览图片或上传自己的。';
$lang['INDEX_KEYWORDS']    = 'nightearth,夜晚,大地,月光,地图,google,google maps,nasa,defense,meteorological,scientific,satellites,dmsp,ols,光污染,地球在夜间照片,世界地图,谷歌地球,从太空地球夜景,地球从太空到了晚上,地球在夜间灯光的卫星图片,地球在夜间图像,地球在夜晚,城市地图';
$lang['INDEX_BODY']        = '<p>夜晚的地球地图显示了夜间可视对地球表面的灯光。</p>
    <p>地球上最亮的区域是城市化程度最高的，但不一定是人口最多的（比较欧洲与中国和印度西部）。城市往往沿着海岸线和交通网络的发展。美国州际公路系统显示为网格连接城市中心的明亮点。在俄罗斯，西伯利亚大铁路是一条细线从莫斯科在亚洲的中心，符拉迪沃斯托克伸展。尼罗河从阿斯旺大坝到地中海，是通过其他方式暗部区域的又一大主题。</p>
    <p>一些地区依然人烟稀少而熄灭。南极洲是完全黑暗的。非洲和南美洲的丛林内大多是黑暗的。在非洲，阿拉伯，澳大利亚，蒙古和美国沙漠是光线不足，以及（除沿海岸和河流），以及加拿大和俄罗斯的北方针叶林，以及喜马拉雅山的大山。</p>
	<p>有两种版本的图像:</p>
	<ul><li>地球在夜间的主图像（2012年）被抓获 <a href="http://earthobservatory.nasa.gov/?eocn=topnav&amp;eoci=logo" target="_blank">NASA</a> 使用 Suomi National Polar-orbiting Partnership (Suomi NPP) 卫星. 花了九天之上2012年4月十三日2012年10月，在312轨道在824公里，捕捉到整个地球。该卫星使用的“天夜乐队” Visible Infrared Imaging Radiometer Suite (VIIRS), 检测光从绿色波长范围内的近红外线，并使用过滤技术来观察昏暗的信号，如气体耀斑，极光，森林火灾，城市的灯光，反射月光。</li>
	<li><a href="showitem.php?item=night_map_earth" target="_blank">从2000年的原始图像</a> 被创造 <a href="http://www.nasa.gov" target="_blank">NASA</a> 使用从所述数据 <a href="http://www.ngdc.noaa.gov/dmsp/" target="_blank">Defense Meteorological Satellite Program (DMSP)</a>\'s <a href="http://thunder.msfc.nasa.gov/ols/" target="_blank">Operational Linescan System (OLS)</a>, 最初设计在月光下，查看云。</li></ul>
	<p>通过谷歌地图（地图和卫星视图）提供的日光图像，也可供参考。该 <a href="https://developers.google.com/maps/" target="_blank">Google Maps API</a> 用于创建此可视化。</p>
    <p>3D地图已经通过<a href="http://cesiumjs.org/" target="_blank">Cesium</a>使用<a href="http://openlayers.org/" target="_blank">OpenLayers</a>和<a href="https://github.com/openlayers/ol3-cesium/" target="_blank">ol3-cesium</a>创建。这使用图像从<a href="http://www.openstreetmap.org/" target="_blank">OpenStreetMap</a>, <a href="http://www.thunderforest.com/" target="_blank">Thunderforest</a>, <a href="http://www.bing.com/maps/" target="_blank">Bing Maps</a>, 和 <a href="https://www.mapquest.com/" target="_blank">Mapquest</a>.</p>
    <p>Google和<a href="https://nominatim.openstreetmap.org/">Nominatim</a>通过<a href="https://github.com/jonataswalker/ol3-geocoder">ol3-geocoder</a>提供地理编码.</p>
	<p>正如美国航天局提供的地图是在一个不同的投影通过谷歌地图所需要的之一， <a href="http://www.gdal.org/" target="_blank">GDAL - Geospatial Data Abstraction Library</a> 库被用于转化。</p>
	<p>当原始图像包括了87.970的图像，从2012年的地图包括349.525图像，因此增加一个总计437.495图像这张地图。</p>
    <p>采取由宇航员登上国际空间站的城市的详细图像。这些已被从所获得的 <a href="http://eol.jsc.nasa.gov/" target="_blank">Image Science and Analysis Laboratory, NASA-Johnson Space Center. "The Gateway to Astronaut Photography of Earth"</a>.</p>
    <p>进一步的信息可从地球观测文章 <a href="http://earthobservatory.nasa.gov/Study/Lights/" target="_blank">明亮的灯光，大市</a>，并 <a href="http://visibleearth.nasa.gov/view_rec.php?id=1438" target="_blank">NASA\'s Visible Earth</a> 网站。</p>
    <p>从北极光和南极光（北极光和南部灯）数据的提供 <a href="http://www.noaa.gov/" target="_blank">NOAA - National Oceanic and Atmospheric Administration</a>.</p>
    <p>日/夜叠加使用 <a href="https://github.com/marmat/google-maps-api-addons" target="_blank">Google Maps API Addons</a>.</p>
    <p>云层由提供 <a href="http://openweathermap.org" target="_blank">OpenWeatherMap</a>.</p>
    <p>与上面的图片印制海报可供购买的，在 <a href="http://www.freemaninstitute.com/nightearth.htm" target="_blank">The Freeman Institute</a>.</p>';
$lang['LOADINGMAP'] = '加载地图';
$lang['CONTACT']    = '联系';

// showitem
$lang['SHOWITEM_MOSTRECENT']       = '最新条目';
$lang['SHOWITEM_CLICKTOZOOM']      = '点击图像放大';
$lang['UPLOADEDBY']                = '上传';
$lang['VIEWS']                     = '点击';
$lang['COMMENTS']                  = '评论';
$lang['SHOWITEM_PREVIOUSCOMMENTS'] = '查看以前的评论';
$lang['SCORE']                     = '分数';
$lang['SHOWITEM_YOURVOTE']         = '您的投票';
$lang['SHOWITEM_VOTE']             = '投票';
$lang['SHOWITEM_PUBLISHCOMMENT']   = '发表评论';
$lang['LOADING'] 				   = '加载';
$lang['SHOWITEM_INTERACTIVEBROWSING'] = '交互式浏览启用';

// top
$lang['TOP_HIGHESTSCORE']          = '大多数评分最高的图片';
$lang['TOP_MOSTRECENT']            = '最近的照片';
$lang['TOP_MOSTVIEWED']            = '观看人数最多';
$lang['TOP_MOSTCOMMENTED']         = '评论照片';
$lang['TOP_TIMESVIEWED']           = '次浏览';
$lang['TOP_TIMESCOMMENTED']        = '评论数';
$lang['TOP_TITLE']                 = '标题';

// whatsnew
$lang['WHATSNEW_PREVIOUSCHANGES']  = '上一篇新闻';

// manageitem
$lang['MANAGEITEM_H1']             = '上传一个新的夜间画面';  // 'Night pictures management';
$lang['MANAGEITEM_ONLYREGISTERED'] = '只对注册用户可用。';
$lang['MANAGEITEM_BODY1']          = '在这里你可以上传和共享来自世界各地的您自己的夜景照片。它是免费的！';
$lang['MANAGEITEM_BODY2']          = '点击在图像拍摄地点的地图。';
$lang['MANAGEITEM_BODY3']          = '您可以放大和使用左侧或鼠标滚轮变焦栏。';
$lang['MANAGEITEM_UPLOAD']         = '上传你的照片';
$lang['MANAGEITEM_SELECTLOCATION'] = '请，选择的图片在上面的地图中的位置。';
$lang['MANAGEITEM_TITLE']          = '标题';
$lang['MANAGEITEM_CATEGORY']       = '分类';
$lang['MANAGEITEM_IMGFILE']        = '图像文件 (jpg)';
$lang['MANAGEITEM_MAXSIZE']        = '最大尺寸';
$lang['MANAGEITEM_DESCRIPTION']    = '说明';
$lang['MANAGEITEM_MAXIMUM']        = '最高';
$lang['MANAGEITEM_CHARACTERS']     = '字符';
$lang['MANAGEITEM_PREVIEW']        = '预览';
$lang['MANAGEITEM_POST']           = '后';
$lang['MANAGEITEM_SUBMITOK']       = '图片提交正确。';
$lang['MANAGEITEM_PERMADDR']       = '永久地址';
$lang['MANAGEITEM_CLICK']          = '点击';
$lang['MANAGEITEM_HERE']           = '这里';
$lang['MANAGEITEM_SUBMITANOTHER']  = '提交另一幅图像';

// manageuser
$lang['MANAGEUSER_H1'] = '注册';    // 'User management';

// links
$lang['LINKS_LIGHTPOLLUTION'] = '光污染';
$lang['LINKS_EARTH']          = '土';
$lang['LINKS_HOSTING']        = '托管';
$lang['LINKS_ASSOCIATED']     = '相关网站';
$lang['LINKS_WEBDEV']         = 'Web开发';

// Login
$lang['LOGIN_ERR_IMG_VERIFY']     = '错误：文本不匹配的图像。';
$lang['LOGIN_ERR_MISSING_FIELDS'] = '错误：登录信息丢失等领域。';
$lang['LOGIN_ERR_DATABASE']       = '创建数据库中的用户错误。';
$lang['LOGIN_IDENTIFY']           = '确定';
$lang['LOGIN_LOGIN']              = '登录';
$lang['LOGIN_PASSWORD']           = '密码';
$lang['LOGIN_OR']                 = '或';
$lang['LOGIN_REGISTER']           = '注册';
$lang['LOGIN_NOT_REGISTERED']     = '没有注册？';
$lang['LOGIN_SIGNED_IN_AS']       = '作为签名';
$lang['LOGIN_GUEST']              = '参加作为嘉宾';
$lang['LOGIN_AS_GUEST']           = '作为嘉宾';
$lang['LOGIN_NICK']               = '缺口';
$lang['LOGIN_CONFIRM_HUMAN']      = '确认你是人类复制的图像文本';
$lang['LOGIN_INTHEBOX']           = '包装盒中';
$lang['LOGIN_IDENTIFIED_AS']      = '您作为签署';
$lang['LOGIN_NOT_X']              = '不';
$lang['LOGIN_LOGOUT']             = '登出';

// Facebook
$lang['FACEBOOK_LANG'] = 'zh_CN';   // http://forum.developers.facebook.net/viewtopic.php?pid=223994#p223994

?>
