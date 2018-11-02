<?php
    $url = "http://boss-wt-api.000webhostapp.com/api/messages/";
    $client = curl_init($url);
    curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
    $response = curl_exec($client);
    $result = json_decode($response, false);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Messages List</title>
</head>
<body>
    <?php
        $result = $result->messages;
        foreach((array) $result as $message) {
            ?>
                <p>
                    <b>Message ID : </b><?php echo $message->id?><br/>
                    <b>Author : </b><?php echo $message->author?><br/>
                    <b>Text : </b><?php echo $message->text?><br/>
                    <b>Timestamp : </b><?php echo $message->timestamp?><br/>
                </p>
            <?php
        }
    ?>
</body>
</html>