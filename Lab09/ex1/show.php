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

    foreach($_POST as $key => $value) { ?>
        <tr>
            <td><?php echo $keys[$key];?></td>
        <?php if (strlen($value) < 5) { ?>
            <td style="color: #f00;"><?php echo $value; ?></td>
        <?php } else { ?>
            <td><?php echo $value; ?></td>
        <?php } ?>
        </tr>
    <?php } ?>
    </table>
</body>
</html>