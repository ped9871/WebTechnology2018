<?php
    if(isset($_POST['origin']) && isset($_POST['dest']) && isset($_POST['value'])) {
        $query = $_POST['origin'] . "_" . $_POST['dest'];
        $url = "http://free.currencyconverterapi.com/api/v6/convert?q=" . $query . "&compact=y";
        $client = curl_init($url);
        curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
        $response = curl_exec($client);
        $result = json_decode($response);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Currency Exchange Rate</title>
</head>
<body>
    <?php
        $result = $result->$query->val * $_POST['value'];
    ?>

    Exchange Rate from <?php echo $_POST['value'] . " " . $_POST['origin'] ?> to <?php echo $_POST['dest'] ?> is <?php echo $result . " " . $_POST['dest'] ?>
</body>
</html>