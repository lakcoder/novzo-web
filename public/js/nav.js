window.onscroll = function() {stickyHeader()};

var header = document.getElementById("sticky_nav");
var sticky = header.offsetTop;

function stickyHeader() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}

function openNav() {
    document.getElementById("mobnav").style.width = "70%";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mobnav").style.width = "0";
    document.body.style.backgroundColor = "rgba(0,0,0,0)";
}
