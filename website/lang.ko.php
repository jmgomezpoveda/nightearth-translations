<?php

// -----------------
// Language: Korean
// -----------------
$lang = array();
$lang['ISOCODE'] = 'ko';

// Main menu
$lang['MAINMENU_MAP']       = '지도';
$lang['MAINMENU_3D']        = '3D';
$lang['MAINMENU_TOP']       = '상위';
$lang['MAINMENU_NEWS']      = '뉴스';
$lang['MAINMENU_SITEMAP']   = '사이트 맵';
$lang['MAINMENU_GUESTBOOK'] = '방명록';
$lang['MAINMENU_LINKS']     = '링크';
$lang['MAINMENU_SUBMIT']    = '업로드';
$lang['MAINMENU_REGISTER']  = '등록';

// Headers
$lang['SEARCH'] = '검색';

$lang['FROM'] = '보낸 사람';
$lang['DATE'] = '일';

// index.php
$lang['INDEX_TITLE']       = 'Night Earth - 우주에서 밤에 지구를 참조하십시오';
$lang['INDEX_DESCRIPTION'] = 'Night Earth, 지구가 밤에 우주에서 보이는 방법을 참조하십시오. 밤 사진을 검색하거나 직접 업로드 할 수 있습니다.';
$lang['INDEX_KEYWORDS']    = 'nightearth,밤,지구,달빛,지도,google,google maps,nasa,defense,meteorological,scientific,satellites,dmsp,ols,google earth,빛 공해,밤에 지구 사진,세계지도,구글 어스,우주에서 지구 야경,밤에 우주에서 지구,조명,밤 지구,위성 영상,밤에 땅의 이미지,밤 지구,도시지도';
$lang['INDEX_BODY']        = '<p>밤 지구지도는 지구 표면에 밤에 볼 수 있습니다 빛을 보여줍니다.</p>
	<p>지구의 가장 밝은 부분이 가장 도시화지만, 반드시 가장 인구가 (중국과 인도와 서유럽을 비교). 도시는 해안선과 교통 네트워크를 따라 성장하는 경향이 있습니다. 미국 주간 고속도로 시스템은 도시 센터의 밝은 점들을 연결하는 격자로 나타납니다. 러시아에서 횡단 시베리아 철도는 블라디 보스 토크 아시아의 중심으로 모스크바에서 펼쳐지 얇은 라인입니다.나일강은 아스완 댐에서 지중해로, 그렇지 않으면 어두운 영역을 통해 또 다른 밝은 스레드입니다.</p>
    <p>일부 지역은 얇게 채워 그리고 unlit 남아 있습니다. 남극은 전적으로 어둠이다. 아프리카 및 남미의 내부 정글은 대부분 어두운입니다. 아프리카, 아라비아, 호주, 몽골, 미국의 사막은 저조한 캐나다와 러시아의 아한대의 숲, 그리고 히말라야의 위대한 산들과 함께, (해안과 하천을 따라 제외)으로 잘 조명하고 있습니다.</p>
	<p>이미지의 두 가지 버전을 사용할 수 있습니다 :</p>
	<ul><li>밤에 지구의 메인 이미지 (2012)가 붙 잡혔다 <a href="http://earthobservatory.nasa.gov/?eocn=topnav&amp;eoci=logo" target="_blank">NASA</a> 사용 Suomi National Polar-orbiting Partnership (Suomi NPP) 위성. 그것은 지구 전체를 캡처 824km 에서 312 궤도 동안 10 월 2012 년 2012년 4월 및 십삼일에 구일 인수했다. 이 위성의 "일 밤 밴드"를 사용 Visible Infrared Imaging Radiometer Suite (VIIRS), 이는 근적외선이 녹색에서 파장 범위에서 빛을 감지하고 가스 불, 오로라, 산불, 도시의 불빛과 같은 희미한 신호를 관찰하는 필터링 기술을 사용하고, 달빛을 반영합니다.</li>
	<li><a href="showitem.php?item=night_map_earth" target="_blank">2000 원 화상</a> 에 의해 만들어진 <a href="http://www.nasa.gov" target="_blank">NASA</a> 데이터를 사용 <a href="http://www.ngdc.noaa.gov/dmsp/" target="_blank">Defense Meteorological Satellite Program (DMSP)</a>\'s <a href="http://thunder.msfc.nasa.gov/ols/" target="_blank">Operational Linescan System (OLS)</a>, 원래 달빛 구름을 볼 수 있도록 설계.</li></ul>
	<p>구글 맵 (지도와 위성보기)에서 제공하는 일광 화상은 참고를 위해 유효하다. <a href="https://developers.google.com/maps/" target="_blank">Google Maps API</a> 이 시각화를 만들기 위해 사용되었다.</p>
    <p>3D 차원지도는 <a href="http://cesiumjs.org/" target="_blank">Cesium</a>를 통해<a href="http://openlayers.org/" target="_blank">OpenLayers</a>및<a href="https://github.com/openlayers/ol3-cesium/" target="_blank">ol3-cesium</a>를 사용하여 만들었습니다. 이<a href="http://www.openstreetmap.org/" target="_blank">OpenStreetMap</a>, <a href="http://www.thunderforest.com/" target="_blank">Thunderforest</a>, <a href="https://www.mapbox.com/" target="_blank">Mapbox</a>, 및 <a href="https://www.mapquest.com/" target="_blank">Mapquest</a>에서 이미지를 사용합니다.</p>
	<p>NASA에서 제공하는지도는 구글 맵에 의해 요구 된 것과 다른 투사에 있었던 것처럼, <a href="http://www.gdal.org/" target="_blank">GDAL - Geospatial Data Abstraction Library</a> 라이브러리는 변환을 위해 사용되었다.</p>
	<p>원본 이미지가 87.970 이미지로 구성되어 있지만, 2012 년지도 따라서이지도에 437.495 이미지의 총계를 추가, 349.525 이미지를 포함한다.</p>
    <p>도시의 상세 이미지는 국제 우주 정거장 탑승 우주인에 의해 촬영되었다. 이들은에서 얻은되었습니다 <a href="http://eol.jsc.nasa.gov/" target="_blank">Image Science and Analysis Laboratory, NASA-Johnson Space Center. "지구의 애스트로넛 사진에 대한 게이트웨이"</a>.</p>
    <p>자세한 정보는 지구 전망대 문서에서 구할 수 있습니다 <a href="http://earthobservatory.nasa.gov/Study/Lights/" target="_blank">밝은 조명, 대도시</a>, 과 <a href="http://visibleearth.nasa.gov/view_rec.php?id=1438" target="_blank">NASA의 지구 표시</a> 웹사이트.</p>
    <p>오로라와 오로라 오스트 (오로라와 남부 등)의 데이터가에 의해 제공됩니다 <a href="http://www.noaa.gov/" target="_blank">NOAA - National Oceanic and Atmospheric Administration</a>.</p>
    <p>주간 / 야간 오버레이를 사용하는 <a href="https://github.com/marmat/google-maps-api-addons" target="_blank">Google Maps API Addons</a>.</p>
    <p>구름 층에 의해 제공됩니다 <a href="http://openweathermap.org" target="_blank">OpenWeatherMap</a>.</p>
    <p>위의 이미지와 함께 인쇄된 포스터에서 구입할 수 있습니다 <a href="http://www.freemaninstitute.com/nightearth.htm" target="_blank">The Freeman Institute</a>.</p>';
$lang['LOADINGMAP'] = '로드 맵';
$lang['CONTACT']    = '연락처 정보';

// showitem
$lang['SHOWITEM_MOSTRECENT']       = '가장 최근의 항목을';
$lang['SHOWITEM_CLICKTOZOOM']      = '확대 이미지를 클릭';
$lang['UPLOADEDBY']                = '에 의해 업로드됨';
$lang['VIEWS']                     = '보기';
$lang['COMMENTS']                  = '덧글';
$lang['SHOWITEM_PREVIOUSCOMMENTS'] = '이전 댓글보기';
$lang['SCORE']                     = '점수';
$lang['SHOWITEM_YOURVOTE']         = '투표';
$lang['SHOWITEM_VOTE']             = '투표';
$lang['SHOWITEM_PUBLISHCOMMENT']   = '코멘트를 게시';
$lang['LOADING']                   = '로드';
$lang['SHOWITEM_INTERACTIVEBROWSING'] = '대화 형 검색 활성화';

// top
$lang['TOP_HIGHESTSCORE']          = '가장 추천 사진';
$lang['TOP_MOSTRECENT']            = '가장 최근의 사진';
$lang['TOP_MOSTVIEWED']            = '최다 조회 사진';
$lang['TOP_MOSTCOMMENTED']         = '는 대부분의 사진을 주석';
$lang['TOP_TIMESVIEWED']           = '시간은 많이';
$lang['TOP_TIMESCOMMENTED']        = '코멘트의 수';
$lang['TOP_TITLE']                 = '제목';

// whatsnew
$lang['WHATSNEW_PREVIOUSCHANGES']  = '이전 뉴스보기';

// manageitem
$lang['MANAGEITEM_H1']             = '새로운 야간 사진 업로드';  // 'Night pictures management';
$lang['MANAGEITEM_ONLYREGISTERED'] = '등록된 사용자에게만 가능합니다.';
$lang['MANAGEITEM_BODY1']          = '여기는 세계 각국에서 자신의 야간 이미지를 업로드하고 공유할 수 있습니다. 그것은 무료입니다!';
$lang['MANAGEITEM_BODY2']          = '이미지가 찍은 위치에지도를 클릭하십시오.';
$lang['MANAGEITEM_BODY3']          = '당신은 왼쪽 또는 마우스 스크롤 휠을에 줌 막대를 사용하고 축소할 수 있습니다.';
$lang['MANAGEITEM_UPLOAD']         = '당신의 사진을 업로드';
$lang['MANAGEITEM_SELECTLOCATION'] = '위의지도에서 그림의 위치를 ​​선택하십시오.';
$lang['MANAGEITEM_TITLE']          = '제목';
$lang['MANAGEITEM_CATEGORY']       = '범주';
$lang['MANAGEITEM_IMGFILE']        = '이미지 파일 (jpg)';
$lang['MANAGEITEM_MAXSIZE']        = '최대 크기';
$lang['MANAGEITEM_DESCRIPTION']    = '설명';
$lang['MANAGEITEM_MAXIMUM']        = '최대';
$lang['MANAGEITEM_CHARACTERS']     = '문자';
$lang['MANAGEITEM_PREVIEW']        = '미리보기';
$lang['MANAGEITEM_POST']           = '게시물';
$lang['MANAGEITEM_SUBMITOK']       = '이미지가 제대로 제출되었습니다.';
$lang['MANAGEITEM_PERMADDR']       = '영구 주소';
$lang['MANAGEITEM_CLICK']          = '를 클릭하십시오';
$lang['MANAGEITEM_HERE']           = '여기';
$lang['MANAGEITEM_SUBMITANOTHER']  = '다른 이미지를 제출';

// manageuser
$lang['MANAGEUSER_H1'] = '등록';    // 'User management';

// links
$lang['LINKS_LIGHTPOLLUTION'] = '빛 공해';
$lang['LINKS_EARTH']          = '대지';
$lang['LINKS_HOSTING']        = '호스팅';
$lang['LINKS_ASSOCIATED']     = '관련 웹사이트';
$lang['LINKS_WEBDEV']         = '웹 개발';

// Login
$lang['LOGIN_ERR_IMG_VERIFY']     = '오류 :. 텍스트 이미지를 일치 나던.';
$lang['LOGIN_ERR_MISSING_FIELDS'] = '오류 :. 로그인 정보의 누락 필드.';
$lang['LOGIN_ERR_DATABASE']       = '데이터베이스에서 사용자를 만드는 중 오류가 발생했습니다.';
$lang['LOGIN_IDENTIFY']           = '확인';
$lang['LOGIN_LOGIN']              = '로그인';
$lang['LOGIN_PASSWORD']           = '비밀 번호';
$lang['LOGIN_OR']                 = '또는';
$lang['LOGIN_REGISTER']           = '등록';
$lang['LOGIN_NOT_REGISTERED']     = '등록하지 않았습니까?';
$lang['LOGIN_SIGNED_IN_AS']       = '(으)로 로그인';
$lang['LOGIN_GUEST']              = '게스트로 참가';
$lang['LOGIN_AS_GUEST']           = '게스트';
$lang['LOGIN_NICK']               = '닉';
$lang['LOGIN_CONFIRM_HUMAN']      = '당신은 이미지의 텍스트를 복사하여 인간 확인';
$lang['LOGIN_INTHEBOX']           = '상자에';
$lang['LOGIN_IDENTIFIED_AS']      = '당신이로 로그인되어 있습니다';
$lang['LOGIN_NOT_X']              = '없음';
$lang['LOGIN_LOGOUT']             = '로그아웃';

// Facebook
$lang['FACEBOOK_LANG'] = 'ko_KR';   // http://forum.developers.facebook.net/viewtopic.php?pid=223994#p223994

?>
