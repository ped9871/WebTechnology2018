function init() {
  let xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      let DOM = this.responseXML;
      let each = DOM.getElementsByTagName('employee');

      for (let i = 0; i < each.length; i++) {
        let country = document.createElement('country');
        country.appendChild(document.createTextNode('USA'));
        each[i].appendChild(country);
      }

      let txt = '';

      for (let i = 0; i < each.length; i++) {
        txt = each[i].id + '. ';
        console.log(each[i]);
        txt += each[i].childNodes[1].innerHTML + ' ';
        txt += each[i].childNodes[3].innerHTML + ' ';
        txt += each[i].childNodes[5].innerHTML + ' ( ';
        txt += each[i].childNodes[7].innerHTML + ' ), ';
        txt += each[i].childNodes[9].innerHTML + ', ';
        txt += each[i].childNodes[11].innerHTML;

        textbox = document.createElement('p');
        text = document.createTextNode(txt);
        textbox.appendChild(text);
        document.getElementById('ex3').appendChild(textbox);
      }
    }
  };
  xhttp.open('GET', 'index.xml', true);
  xhttp.send();
}
