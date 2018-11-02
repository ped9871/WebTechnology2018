<?php

        $url = "http://boss-wt-api.000webhostapp.com/api/maps/";
        $client = curl_init($url);
        curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
        $response = curl_exec($client);
        $result = json_decode($response);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Map</title>
    <style>
        body {
            padding: 0;
            margin: 0;
        }
        #map {
            width: 100%;
            height: 80vh;
        }
        .form {
            margin-left: 1em;
        }
        h3 {
            margin-left: 1em;
        }
    </style>
</head>
<body>
    <h3>Map</h3>
    <iframe src="https://maps.google.com/maps?q=<?php echo $result->lat ?>,<?php echo $result->long ?>&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
        id="map"></iframe>

</body>
</html>