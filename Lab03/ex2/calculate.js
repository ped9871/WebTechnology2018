function calculate() {
  let value1 = document.getElementById('value1').value;
  let value2 = document.getElementById('value2').value;
  let result = parseFloat(value1) + parseFloat(value2);

  if (!value1 || !value2) return false;

  let historyBox = document.getElementById('history');
  let history = document.createElement('p');
  let text = document.createTextNode(value1 + ' + ' + value2 + ' = ' + result);
  history.appendChild(text);

  historyBox.appendChild(history);

  document.getElementById('result').innerText = 'Result : ' + result;
}
