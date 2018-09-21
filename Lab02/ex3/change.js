function change() {
  let image1 = document.getElementById('image1');
  let image2 = document.getElementById('image2');
  let image3 = document.getElementById('image3');
  let image4 = document.getElementById('image4');

  temp = image1.src;
  image1.src = image3.src;
  image3.src = image4.src;
  image4.src = image2.src;
  image2.src = temp;
}
