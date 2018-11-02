<?php
    if(isset($_POST['id'])) {
        $id = $_POST['id'];
        $url = "http://boss-wt-api.000webhostapp.com/api/messages/?id=" . $id;
        $client = curl_init($url);
        curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
        $response = curl_exec($client);
        $message = json_decode($response);
    }
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
    <p>
        <b>Message ID : </b><?php echo $message->id?><br/>
        <b>Author : </b><?php echo $message->author?><br/>
        <b>Text : </b><?php echo $message->text?><br/>
        <b>Timestamp : </b><?php echo $message->timestamp?><br/>
    </p>

</body>
</html>