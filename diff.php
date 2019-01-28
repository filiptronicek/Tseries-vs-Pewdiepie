<?php

$pew_id = "UC-lHJZR3Gqxm24_Vd_AJ5Yw";
$tser_id = "UCq-Fj5jknLsUf-MWSy4_brA";

$api_key = "AIzaSyCagE4v2NKU9NNd4W692_gZ3CWpdWJ05rc";
$api_response_pew = file_get_contents('https://www.googleapis.com/youtube/v3/channels?part=statistics&id='.$pew_id.'&fields=items/statistics/subscriberCount&key='.$api_key);
$api_response_decoded_pew = json_decode($api_response_pew, true);
$pew_subs = $api_response_decoded_pew['items'][0]['statistics']['subscriberCount'];

$api_response_tser = file_get_contents('https://www.googleapis.com/youtube/v3/channels?part=statistics&id='.$tser_id.'&fields=items/statistics/subscriberCount&key='.$api_key);
$api_response_decoded_tser = json_decode($api_response_tser, true);
$tser_subs = $api_response_decoded_tser['items'][0]['statistics']['subscriberCount'];
$diff = $pew_subs - $tser_subs;
echo"<div id='diffdiv'> ". number_format($diff). " </div> </div> <br />";   