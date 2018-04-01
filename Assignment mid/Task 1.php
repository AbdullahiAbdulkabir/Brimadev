<!-- 
// $APIkey='xxxxxxxxxxxxxx';
// $from = '2017-02-13';
// $to = '2017-02-13';

// $curl_options = array(
//   CURLOPT_URL => "https://apifootball.com/api/?action=get_H2H&firstTeam=$firstTeam&secondTeam=$secondTeam&APIkey=$APIkey",
//   CURLOPT_RETURNTRANSFER => true,
//   CURLOPT_HEADER => false,
//   CURLOPT_TIMEOUT => 30,
//   CURLOPT_CONNECTTIMEOUT => 5
// );                              
 
// $curl = curl_init();
// curl_setopt_array( $curl, $curl_options );
// $result = curl_exec( $curl );

// $result = (array) json_decode($result);
    
// var_dump($result); -->
<?php
$ar1 = array ("10", 100, 100, "a");
$ar2 = array (1, 3, "2", 1);
$ar3= array_multisort ($ar1, $ar2);

echo $ar2; 
?>
