function validateForm() {
  let nationalId = document.forms['myForm']['NationalID'].value;
  if (nationalId.length !== 13) {
    alert('หมายเลขบัตรประชาชนต้องยาว 13 ตัวอักษร');
    return false;
  }
  if (isNaN(nationalId)) {
    alert('หมายเลขบัตรประชาชนต้องเป็นตัวเลข');
    return false;
  }

  let prefix = document.forms['myForm']['Prefix'].value;
  if (!['นาย', 'นาง', 'นางสาว', 'เด็กชาย', 'เด็กหญิง'].includes(prefix)) {
    alert('คำนำหน้าไม่ถูกต้อง');
    return false;
  }

  let fname = document.forms['myForm']['FirstName'].value;
  if (fname.length < 2) {
    alert('กรุณากรอกชื่อจริง');
    return false;
  }
  if (fname.length > 20) {
    alert('ชื่อต้องยาวไม่เกิน 20 ตัวอักษร');
    return false;
  }

  let lname = document.forms['myForm']['LastName'].value;
  if (lname.length < 2) {
    alert('กรุณากรอกนามสกุล');
    return false;
  }

  let address = document.forms['myForm']['Address'].value;
  if (address.length < 5) {
    alert('กรุณากรอกที่อยู่');
    return false;
  }

  let tambon = document.forms['myForm']['Tambon'].value;
  if (tambon.length < 2) {
    alert('กรุณากรอกตำบล');
    return false;
  }

  let amphoe = document.forms['myForm']['Amphoe'].value;
  if (amphoe.length == 0) {
    alert('กรุณากรอกอำเภอ');
    return false;
  }

  let province = document.forms['myForm']['Provice'].value;
  if (province == '000') {
    alert('Provice must be selected');
    return false;
  }

  let postCode = document.forms['myForm']['Postcode'].value;
  if (postCode.length !== 5) {
    alert('รหัสไปรษณีย์ต้องยาว 5 ตัว');
    return false;
  }
  if (isNaN(postCode)) {
    alert('รหัสไปรษณีย์ต้องเป็นตัวเลข');
    return false;
  }

  let phoneNumber = document.forms['myForm']['PhoneNumber'].value;
  if (phoneNumber.length < 9 || phoneNumber.length > 10) {
    alert('เบอร์โทรศัพท์ต้องมีความยาว 9 - 10 ตัวอักษร');
    return false;
  }
  if (isNaN(phoneNumber)) {
    alert('เบอร์โทรศัพท์ต้องเป็นตัวเลข');
    return false;
  }
}
