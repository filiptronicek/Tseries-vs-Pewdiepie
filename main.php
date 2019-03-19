<style>

#diffdiv {
    font-size: 80px;
    font-family: Helvetica;
    text-align: center;
}


</style>



<?php

$pew_id = "UC-lHJZR3Gqxm24_Vd_AJ5Yw";
$tser_id = "UCq-Fj5jknLsUf-MWSy4_brA";

$api_key = "YOUR_API_KEY";
$api_response_pew = file_get_contents('https://www.googleapis.com/youtube/v3/channels?part=statistics&id='.$pew_id.'&fields=items/statistics/subscriberCount&key='.$api_key);
$api_response_decoded_pew = json_decode($api_response_pew, true);
$pew_subs = $api_response_decoded_pew['items'][0]['statistics']['subscriberCount'];

$api_response_tser = file_get_contents('https://www.googleapis.com/youtube/v3/channels?part=statistics&id='.$tser_id.'&fields=items/statistics/subscriberCount&key='.$api_key);
$api_response_decoded_tser = json_decode($api_response_tser, true);
$tser_subs = $api_response_decoded_tser['items'][0]['statistics']['subscriberCount'];
    
echo "Pewdiepie has ".number_format($pew_subs). " subscribers <br /> T-Series has ".number_format($tser_subs)." subscribers";

$diff = $pew_subs - $tser_subs;
echo"<div id='diffdiv'> ". number_format($diff). " </div>";

	//echo "<p id='substxt'>Pewdiepie's channel has ".$pew_subs - $tser_subs." subscibers</p>";
	