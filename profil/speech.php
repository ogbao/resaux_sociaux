<?php
/*
* Copyright (c) @ ShareFBScripts.BlogSpot.Com
* Author: AnCMS
* Date: 2/8/2016
*/
if(array_key_exists('t',$_GET)){
header("Content-type: audio/mpeg");
header("Content-Transfer-Encoding: binary");
header('Pragma: no-cache');
header('Expires: 0');
define('_STR_', trim($_GET['t']));
// print _STR_;
readfile(sprintf('http://translate.google.com/translate_tts?%s',http_build_query(array(
'ie' => 'UTF-8',
'total' => '1',
'idx' => '0',
'textlen' => strlen(_STR_),
'client' => 'tw-ob',
'q' => _STR_,
'tl' => 'fr'
))));
}
else{
//header("HTTP/1.0 404 Not Found");
}
?>