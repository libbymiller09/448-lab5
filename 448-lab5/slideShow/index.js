const images = ['images/IMG_4142.JPG', 'images/IMG_4143.jpg', 'images/IMG_4506.JPG', 'images/IMG_4884.jpg', 'images/IMG_4990.jpg'];
let index = 0;

function slideShow(index) {
  let image = document.getElementsByClassName('images');
  
}

function nextImg() {
  if (index == 4) {
    index = 0;
  }
  else {
    index++;
  }
  var image = document.getElementById('currentSlide');
  image.src = images[index];
}

function prevImg() {
  if (index == 0){
    index = 4;
  }
  else {
    index--;
  }
  var image = document.getElementById('currentSlide');
  image.src = images[index];
}
