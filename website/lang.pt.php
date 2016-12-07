<?php

// -----------------
// Language: Portuguese
// -----------------
$lang = array();
$lang['ISOCODE'] = 'pt';

// Main menu
$lang['MAINMENU_MAP']       = 'Mapa';
$lang['MAINMENU_LEGACY']    = '2D';
$lang['MAINMENU_TOP']       = 'Destaque';
$lang['MAINMENU_NEWS']      = 'Novidades';
$lang['MAINMENU_SITEMAP']   = 'Lista de fotos';
$lang['MAINMENU_GUESTBOOK'] = 'Livro de visitas';
$lang['MAINMENU_LINKS']     = 'Ligações';
$lang['MAINMENU_SUBMIT']    = 'Upload de fotos';
$lang['MAINMENU_REGISTER']  = 'Registrar';

// Headers
$lang['SEARCH'] = 'Pesquisa';

$lang['FROM'] = 'De';
$lang['DATE'] = 'Data';

// index.php
$lang['INDEX_TITLE']       = 'Night Earth - veja a Terra na noite do espaç';
$lang['INDEX_DESCRIPTION'] = 'Night Earth, veja como a Terra parece do espaço à noite. Navegue noite fotos ou carregue a sua própria.';
$lang['INDEX_KEYWORDS']    = 'nightearth,noite,terra,lua,mapa,mapas,google,google maps,nasa,defense,meteorological,scientific,satellites,dmsp,ols,poluição luminosa,imagens de terra durante a noite,mapa do mundo,Google Earth,vista terra noite do espaço,terra do espaço,terra na noite de luzes,imagens de satélite,imagens da Terra à noite,terra à noite,mapas da cidade';
$lang['INDEX_BODY']        = '<p>O mapa noite Terra mostra as luzes que são visíveis à noite na superfície da Terra.</p>
    <p>Áreas mais brilhantes da Terra são as mais urbanizadas, mas não necessariamente as mais populosas (compare Europa Ocidental com a China e Índia). Cidades tendem a crescer ao longo das costas e das redes de transporte. O sistema de rodovias interestaduais aparece como uma rede dos EUA que liga os pontos brilhantes dos centros da cidade. Na Rússia, a ferrovia Trans-Siberian é uma linha fina que se estende a partir de Moscovo através do centro da Ásia para Vladivostok. Rio Nilo Barragem de Assuão para o Mar Mediterrâneo, é outro segmento brilhante através de uma região escura.</p>
    <p>Algumas regiões permanecem pouco povoadas e apagada. Antarctica é totalmente escuro. As selvas interior da África e da América do Sul são em sua maioria escuro. Desertos da África, Arábia, Austrália, Mongólia e os Estados Unidos têm pouca ou nenhuma luz (exceto ao longo das costas e rios), juntamente com as florestas boreais do Canadá e da Rússia, e as grandes montanhas do Himalaia.</p>
    <p>Duas versões das imagens estão disponíveis:</p>
	<ul><li>A principal imagem da Terra à noite (2012) foi capturado por <a href="http://earthobservatory.nasa.gov/?eocn=topnav&amp;eoci=logo" target="_blank">NASA</a> usando o Suomi National Polar-orbiting Partnership (Suomi NPP) satélite. Levou mais de nove dias em abril de 2012 e 13 dias em outubro de 2012, durante 312 órbitas em 824 km para capturar toda a Terra. Este satélite usa o "dia-noite band" do Visible Infrared Imaging Radiometer Suite (VIIRS), que detecta a luz numa gama de comprimentos de onda de verde para infravermelho próximo e usa técnicas de filtragem para observar sinais escuros como chamas de gás, as auroras, incêndios florestais, luzes da cidade, e refletia o luar.</li>
	<li>A <a href="showitem.php?item=night_map_earth" target="_blank">imagem original de 2000</a> foi criado pela <a href="http://www.nasa.gov" target="_blank">NASA</a> utilizando dados do <a href="http://www.ngdc.noaa.gov/dmsp/" target="_blank">Defense Meteorological Satellite Program (DMSP)</a>\'s <a href="http://thunder.msfc.nasa.gov/ols/" target="_blank">Operational Linescan System (OLS)</a>, originalmente concebido para ver nuvens pelo luar.</li></ul>
	<p>As imagens diurnas fornecidas pelo Google Maps (mapas e imagens de satélite) também estão disponíveis para referência. A <a href="https://developers.google.com/maps/" target="_blank">Google Maps API</a> foi utilizado para a criação deste visualização.</p>
    <p>O 3D mapa foi criado usando <a href="http://cesiumjs.org/" target="_blank">Cesium</a> via <a href="http://openlayers.org/" target="_blank">OpenLayers</a> e <a href="https://github.com/openlayers/ol3-cesium/" target="_blank">ol3-cesium</a>. Este usa a aparência da <a href="http://www.openstreetmap.org/" target="_blank">OpenStreetMap</a>, <a href="http://www.thunderforest.com/" target="_blank">Thunderforest</a>, <a href="http://www.bing.com/maps/" target="_blank">Bing Maps</a>, e <a href="https://www.mapquest.com/" target="_blank">Mapquest</a>.</p>
    <p>A geocodificação é fornecida pelo Google e <a href="https://nominatim.openstreetmap.org/">Nominatim</a> via <a href="https://github.com/jonataswalker/ol3-geocoder">ol3-geocoder</a>.</p>
	<p>Como os mapas fornecidos pela NASA estavam em uma projeção diferente como o solicitado através do Google Maps, o <a href="http://www.gdal.org/" target="_blank">GDAL - Geospatial Data Abstraction Library</a> biblioteca foi utilizada para a conversão.</p>
	<p>Enquanto a imagem original consistia de 87,970 imagens, o mapa a partir de 2012 compreende 349,525 imagens, portanto, a adição de um total de 437,495 imagens para este mapa.</p>
    <p>As imagens detalhadas das cidades foram tiradas por astronautas a bordo da Estação Espacial Internacional. Estes foram obtidos a partir <a href="http://eol.jsc.nasa.gov/" target="_blank">Image Science and Analysis Laboratory, NASA-Johnson Space Center. "The Gateway to Astronaut Photography of Earth."</a>.</p>
    <p>Você pode obter informações adicionais a partir do artigo do Observatório da Terra <a href="http://earthobservatory.nasa.gov/Study/Lights/" target="_blank">Bright Lights, Big City</a> e o site <a href="http://visibleearth.nasa.gov/view_rec.php?id=1438" target="_blank">NASA\'s Visible Earth</a>.</p>
    <p>Dados da Aurora Boreal e Aurora Australis (boreal e luzes do sul) são fornecidos pelo <a href="http://www.noaa.gov/" target="_blank">NOAA - National Oceanic and Atmospheric Administration</a>.</p>
    <p>A sobreposição de dia / noite usa o <a href="https://github.com/marmat/google-maps-api-addons" target="_blank">Google Maps API Addons</a>.</p>
    <p>A camada de nuvens é fornecido pela <a href="http://openweathermap.org" target="_blank">OpenWeatherMap</a>.</p>
    <p>Um sinal impresso com a imagem acima está disponível para compra no <a href="http://www.freemaninstitute.com/nightearth.htm" target="_blank">El Instituto Freeman</a>.</p>';
$lang['LOADINGMAP'] = 'Carregando mapa';
$lang['CONTACT']    = 'Contato';

// showitem
$lang['SHOWITEM_MOSTRECENT']       = 'entrada mais recente';
$lang['SHOWITEM_CLICKTOZOOM']      = 'clique na imagem para ampliar';
$lang['UPLOADEDBY']                = 'Submetido por';
$lang['VIEWS']                     = 'Visto';
$lang['COMMENTS']                  = 'Comentários';
$lang['SHOWITEM_PREVIOUSCOMMENTS'] = 'Veja os comentários anteriores';
$lang['SCORE']                     = 'Pontuação';
$lang['SHOWITEM_YOURVOTE']         = 'O seu voto';
$lang['SHOWITEM_VOTE']             = 'voto';
$lang['SHOWITEM_PUBLISHCOMMENT']   = 'Escreva o seu comentário';
$lang['LOADING']                   = 'Carregando';
$lang['SHOWITEM_INTERACTIVEBROWSING'] = 'Navegação interativa habilitado';

// top
$lang['TOP_HIGHESTSCORE']          = 'Fotos mais alto rating';
$lang['TOP_MOSTRECENT']            = 'Última adicionado';
$lang['TOP_MOSTVIEWED']            = 'Mais visualizadas';
$lang['TOP_MOSTCOMMENTED']         = 'Mais falado fotos';
$lang['TOP_TIMESVIEWED']           = 'Vezes visto';
$lang['TOP_TIMESCOMMENTED']        = 'Comentários';
$lang['TOP_TITLE']                 = 'Título';

// whatsnew
$lang['WHATSNEW_PREVIOUSCHANGES']  = 'Ver notícias mais antigas';

// manageitem
$lang['MANAGEITEM_H1']             = 'Carregar uma nova noite imagem';  // 'Gestión de imágenes';
$lang['MANAGEITEM_ONLYREGISTERED'] = 'Disponível apenas para usuários registrados.';
$lang['MANAGEITEM_BODY1']          = 'Você pode enviar e compartilhar suas imagens durante a noite em qualquer lugar do mundo. É grátis!';
$lang['MANAGEITEM_BODY2']          = 'Clique no mapa no local onde a imagem foi tirada.';
$lang['MANAGEITEM_BODY3']          = 'Você pode zoom in e out usando a barra de zoom para a esquerda do mapa, ou a roda do mouse.';
$lang['MANAGEITEM_UPLOAD']         = 'Carregar sua imagem';
$lang['MANAGEITEM_SELECTLOCATION'] = 'Por favor, selecione o local da foto no mapa.';
$lang['MANAGEITEM_TITLE']          = 'Título';
$lang['MANAGEITEM_CATEGORY']       = 'Categoria';
$lang['MANAGEITEM_IMGFILE']        = 'Arquivo contendo a imagem (jpg)';
$lang['MANAGEITEM_MAXSIZE']        = 'tamanho máximo';
$lang['MANAGEITEM_DESCRIPTION']    = 'Descrição';
$lang['MANAGEITEM_MAXIMUM']        = 'máximo';
$lang['MANAGEITEM_CHARACTERS']     = 'caracteres';
$lang['MANAGEITEM_PREVIEW']        = 'visualização';
$lang['MANAGEITEM_POST']           = 'publicar';
$lang['MANAGEITEM_SUBMITOK']       = 'Imagem descarregada corretamente.';
$lang['MANAGEITEM_PERMADDR']       = 'Endereço permanente';
$lang['MANAGEITEM_CLICK']          = 'Haz click';
$lang['MANAGEITEM_HERE']           = 'aqui';
$lang['MANAGEITEM_SUBMITANOTHER']  = 'para enviar uma nova imagem';

// manageuser
$lang['MANAGEUSER_H1'] = 'Registrar';  // 'Gestión de usuarios';

// links
$lang['LINKS_LIGHTPOLLUTION'] = 'Poluição Luminosa';
$lang['LINKS_EARTH']          = 'Terra';
$lang['LINKS_HOSTING']        = 'Acomodação';
$lang['LINKS_ASSOCIATED']     = 'Websites associados';
$lang['LINKS_WEBDEV']         = 'Desenvolvimento Web';

// Login
$lang['LOGIN_ERR_IMG_VERIFY']     = 'Erro: o texto não corresponde à imagem.';
$lang['LOGIN_ERR_MISSING_FIELDS'] = 'Erro: campos faltando para preencher o formulário de login.';
$lang['LOGIN_ERR_DATABASE']       = 'Erro ao criar usuário no banco de dados.';
$lang['LOGIN_IDENTIFY']           = 'Entrar';
$lang['LOGIN_LOGIN']              = 'Usuário';
$lang['LOGIN_PASSWORD']           = 'Senha';
$lang['LOGIN_OR']                 = 'o';
$lang['LOGIN_REGISTER']           = 'Registrar';
$lang['LOGIN_NOT_REGISTERED']     = 'Não é cadastrado?';
$lang['LOGIN_SIGNED_IN_AS']       = 'Logado como';
$lang['LOGIN_GUEST']              = 'Participa como convidado';
$lang['LOGIN_AS_GUEST']           = 'como convidado';
$lang['LOGIN_NICK']               = 'Nick';
$lang['LOGIN_CONFIRM_HUMAN']      = 'Confirme que você é humano, copiando o texto da imagem';
$lang['LOGIN_INTHEBOX']           = 'no quadro';
$lang['LOGIN_IDENTIFIED_AS']      = 'Está identificado como';
$lang['LOGIN_NOT_X']              = 'Você não está';
$lang['LOGIN_LOGOUT']             = 'as alterações do usuário';

// Facebook
$lang['FACEBOOK_LANG'] = 'pt_PT';   // http://forum.developers.facebook.net/viewtopic.php?pid=223994#p223994

?>
