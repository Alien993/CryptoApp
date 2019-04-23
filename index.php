<!DOCTYPE html>
<html>
<head>
	<title>CryptoTrack App</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="cryptostil.css">
	<link rel="icon" type="image/png" href="dolaricon.png">
	<meta name="description" content="CryptoTrack App">
	<meta name="keywords" content="Crypto, Track, App">
	<meta name="author" content="Đorđe Simović">
</head>
<body>
	<h1>CRYPTO TRACK APP</h1>
<?php

# This example requires curl is enabled in php.ini
$url = 'https://pro-api.coinmarketcap.com/v1/cryptocurrency/listings/latest';
$parameters = [
    'start' => '1',
    'limit' => '50',
    'convert'=> 'USD',
];

$headers = [
    'Accepts: application/json',
    'X-CMC_PRO_API_KEY: 3c9df1e5-138f-4793-8028-98bd77aec669'
];
$qs = http_build_query($parameters);
$request = "{$url}?{$qs}"; // create the request URL


$curl = curl_init(); // Get cURL resource
// Set cURL options
curl_setopt_array($curl, array(
    CURLOPT_URL => $request,            // set the request URL
    CURLOPT_HTTPHEADER => $headers,     // set the headers 
    CURLOPT_RETURNTRANSFER => 1         // ask for raw response instead of bool
));

$response = curl_exec($curl); // Send the request, save the response
print_r(json_decode($response)); // print json decoded response
curl_close($curl); // Close request

if (empty($response)){
echo "<p>Jeste</p>";
}
echo $response;

	?>
	
	
	
</body>
</html>