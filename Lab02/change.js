function changeSrc() {
  let image1 = document.getElementById('image1');
  let image2 = document.getElementById('image2');
  temp = image1.src;
  image1.src = image2.src;
  image2.src = temp;
}
