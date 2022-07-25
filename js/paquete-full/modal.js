// Get the modal
var modal = document.getElementById("modal");

// Get the button that opens the modal
var img1 = document.getElementById("img1");
var img2 = document.getElementById("img2");
var img3 = document.getElementById("img3");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
img1.onclick = function() {
  modal.style.display = "block";
  $('.modal-content').append('<img class="img-modal" src="Imagenes/pack-full/web 1440px (6).png" alt="" id="img1-modal">');
}
img2.onclick = function() {
  modal.style.display = "block";
  $('.modal-content').append('<img class="img-modal" src="Imagenes/pack-full/web 1440px (7).png" alt="" id="img2-modal">');
}
img3.onclick = function() {
  modal.style.display = "block";
  $('.modal-content').append('<img class="img-modal" src="Imagenes/pack-full/web 1440px (8).png" alt="" id="img3-modal">');
}


// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
  $('#img1-modal').remove();
  $('#img2-modal').remove();
  $('#img3-modal').remove();
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
    $('#img1-modal').remove();
    $('#img2-modal').remove();
    $('#img3-modal').remove();
  }
}