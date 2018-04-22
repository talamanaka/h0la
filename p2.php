<?php
set_time_limit(0);// to infinity for example
error_reporting(E_ALL);
ini_set('display_errors', '1');
// Check if $_POST is set
if ( empty ( $_POST['name'] ) ) {
  echo "Yo! Something ain't legit!";
  
  exit;
}
$p=$_POST['name'];
//echo $p;

$curl = curl_init();
curl_setopt($curl, CURLOPT_HEADER, "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; .NET CLR 1.1.4322)");
curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 0); 
curl_setopt($curl, CURLOPT_TIMEOUT, 400);
 curl_setopt_array($curl, array(
    CURLOPT_HTTPHEADER => array('Authentication: Token <your token>' ),
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'https://discardcreditcardgenerator.000webhostapp.com/api.php',
    CURLOPT_POST => 1,
    // URL
    CURLOPT_POSTFIELDS => array('data' => $p,)
   ));
$resp = curl_exec($curl);
usleep(3000);

print $resp;
//curl_exec($curl);
curl_close($curl);

//curl_exec($curl);
//$resp = curl_exec($curl);
//curl_close($curl);


//$dies[]='';
//$lives[]='';
//$unks[]='';

//$array1 = array('5464795423223265|06|2022|473','5464795423223265|06|2022|472','5522893014360735|01|2021|740
//','5522896123407503|05|2021|482','5522894525737148|04|2024|432','5522897763470744|04|2022|498');
//foreach ($array1 as $item) {
    // code goes here
//echo $item;
//var_dump(function_exists('curl_version'));
  // Get cURL resource
//  $curl = curl_init();
  // Set some options
 // curl_setopt_array($curl, array(
  //  CURLOPT_HTTPHEADER => array(
//      'Authentication: Token <your token>' // Don't forget to change the token!!!
  //  ),
    //CURLOPT_RETURNTRANSFER => 1,
    //CURLOPT_URL => 'http://www.zone-max.com/chekvm/api.php',
    //CURLOPT_POST => 1,
    // URL
    //CURLOPT_POSTFIELDS => array(
      //'data' => $item,
    //)
  //));

  // Send the request & save response to $resp
 // $resp = curl_exec($curl);
 // $rows[] = $resp;

  //Save file
  //file_put_contents('o.pdf', $resp);
 // printf  $resp;

  // Close request to clear up some resources
  //curl_close($curl);
  //echo  $resp;
 // var_dump(json_decode($resp));


//$json_a = json_decode($resp, true);
  //echo $json_a['error'];
  //if ( strcasecmp( $json_a['error'], '1' ) == 0 ){
     
    //  $lives[] = $json_a['msg'];
    //}
  //if ( strcasecmp( $json_a['error'], '3' ) == 0 ){
     
    //  $unks[] = $json_a['msg'];
    //}
     // if ( strcasecmp( $json_a['error'], '2' ) == 0 ){
     
      //$dies[] = $json_a['msg'];
    //}

//}
?>

