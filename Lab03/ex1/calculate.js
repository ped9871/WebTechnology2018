function calculate() {
  let value1 = document.getElementById('value1').value;
  let value2 = document.getElementById('value2').value;
  let result = parseFloat(value1) + parseFloat(value2);

  if (!value1 || !value2) return false;

  document.getElementById('result').innerText = 'Result : ' + result;
}
