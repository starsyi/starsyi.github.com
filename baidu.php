<?php
$urls = array(
    'http://starsyi.github.io/baidusitemap.xml',
    'http://starsyi.github.io/',
);
$api = 'http://data.zz.baidu.com/urls?site=starsyi.github.io&token=dUokMP2jf5l66B8o';
$ch = curl_init();
$options =  array(
    CURLOPT_URL => $api,
    CURLOPT_POST => true,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POSTFIELDS => implode("\n", $urls),
    CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
);
curl_setopt_array($ch, $options);
$result = curl_exec($ch);
echo $result;
 ?>