function changecolors() {
  var paragraph = document.getElementsByTagName('p');
  var redborder = document.getElementById('redInpBorder').value;
  var greenborder = document.getElementById('greenInpBorder').value;
  var blueborder = document.getElementById('blueInpBorder').value;
  var widthborder = document.getElementById('widthInpBorder').value;
  var redbg = document.getElementById('redInpBg').value;
  var greenbg = document.getElementById('greenInpBg').value;
  var bluebg = document.getElementById('blueInpBg').value;

  paragraph.style.borderColor = 'rgb('+redborder+', '+greenborder+', '+blueborder+')';
  paragraph.style.borderWidth = widthborder;
  paragraph.style.backgroundColor = 'rgb('+redbg+', '+greenbg+', '+bluebg+')';
}
