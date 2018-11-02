<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Result</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Result</h1>
    <table>
    <?php
    $data = array();
    $keys = array(
        "nationalId" => "หมายเลขบัตรประชาชน",
        "firstName" => "ชื่อ",
        "lastName" => "นามสกุล",
        "address" => "ที่อยู่",
        "amphoe" => "อำเภอ/เขต",
        "district" => "จังหวัด",
        "postalCode" => "รหัสไปรษณีย์",
        "telephone" => "เบอร์โทรศัพท์"
    );

    foreach($_POST as $key => $value) {
        $data[$key] = $value;
    }

    foreach($data as $key => $value) { ?>
            <tr>
                <td><?php echo $keys[$key]; ?></td>
                <td><?php echo $value; ?></td>
            </tr>
    <?php } ?>
    </table>
</body>
</html>