var header = document.getElementById("nav-wrap");
var sticky = header.offsetTop;

function stickTotop() {
    if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
    } else {
        header.classList.remove("sticky");
    }
}
window.onscroll = function() {stickTotop(); };

  /* When the user clicks on the button,
  toggle between hiding and showing the dropdown content */

var showdropdown = document.querySelector("#myDropdown");
function dropMenu() {
    showdropdown.classList.toggle("show");
}

// change image when showing dropdown menu

var image = document.getElementById("BTNimg");
function changeImage() {
            if (showdropdown.classList.contains("show")) {
                image.src = "images/icons/menu btn open midnight blue.png";
            } else {
                image.src = "images/icons/menu btn midnight blue.png";
            }
}
        // Event Listener
showdropdown.addEventListener("click", dropMenu, false);
showdropdown.addEventListener("click", changeImage, false);

  // Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
    if (!event.target.matches("#myDropdown")) {
        var dropdowns = document.querySelector("#myDropdown");
        var i;
          for (i = 0; i < dropdowns.length; i++) {
              var openDropdown = dropdowns[i];
              if (openDropdown.classList.contains("show")) {
                  openDropdown.classList.remove("show");
              }
          }
    }
};
document.getElementById("myDropdown").addEventListener("click",function(event){
    event.stopPropagation();
});
// BandsInTown Widget
