<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Registration Form</h1>
    <form action="show.php" method="post">
        <div class="form-group">
            <label for="nationalId">หมายเลขบัตรประชาชน</label>
            <input type="text" name="nationalId" id="nationalId" >
        </div>
        <div class="form-group">
            <label for="firstName">ชื่อ</label>
            <input type="text" name="firstName" id="firstName" >
        </div>
        <div class="form-group">
            <label for="lastName">นามสกุล</label>
            <input type="text" name="lastName" id="lastName" >
        </div>
        <div class="form-group">
            <label for="address">ที่อยู่</label>
            <input type="text" name="address" id="address" >
        </div>
        <div class="form-group">
            <label for="amphoe">อำเภอ/เขต</label>
            <input type="text" name="amphoe" id="amphoe" >
        </div>
        <div class="form-group">
            <label for="district">จังหวัด</label>
            <input type="text" name="district" id="district" >
        </div>
        <div class="form-group">
            <label for="postalCode">รหัสไปรศนีย์</label>
            <input type="text" name="postalCode" id="postalCode" >
        </div>
        <div class="form-group">
            <label for="telephone">เบอร์โทรศัพท์</label>
            <input type="text" name="telephone" id="telephone" >
        </div>
        <div class="form-group">
            <input type="submit" value="Submit">
        </div>
    </form>
</body>
</html>