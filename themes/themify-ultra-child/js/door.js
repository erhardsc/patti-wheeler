/*** Makes a sick door animation: inspired from https://codepen.io/pawelqcm/pen/LWzpjZ  ***/

var enter = function() {
  var door = document.querySelector('#jamb');
  var newdoor = door.cloneNode(true);
  document.querySelector('#door').classList.add('open');
  document.querySelector('#jamb').classList.add('spread');
  setTimeout(function() {
    door.remove();
    // $('#text-6-0-0-0').appendChild(newdoor);
  }, 500)
}