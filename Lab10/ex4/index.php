<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Books Information</title>
</head>
<body>
    <?php
        $ids = ["9781740597494" , "9781596435032", "9780545002929", "9781877003165", "9781740595780"];


        foreach($ids as $id) {
            $url = "http://openlibrary.org/api/books?bibkeys=ISBN:" . $id . "&format=json";
            $client = curl_init($url);
            curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
            $response = curl_exec($client);
            $result = json_decode($response);

            $id = "ISBN:" . $id;
            $result = $result->$id;

            ?>
                <p>
                    <img src=<?php echo $result->thumbnail_url ?> /><br>
                    <a href=<?php echo $result->info_url ?>>Info</a> <a href=<?php echo $result->preview_url ?>>Preview</a>
                </p>
            <?php
        }
    ?>
</body>
</html>