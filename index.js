/* Set the width of the side navigation to 250px and the left margin of the page content to 250px and add a black background color to body */
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
    document.body.style.backgroundColor = "white";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
	slideIndex = slideIndex + 1;
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("fade");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1} 
  if (n < 1) {slideIndex = slides.length} ;
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none"; 
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].classList.remove("active");
  }
  slides[slideIndex-1].style.display = "block"; 
  dots[slideIndex-1].classList.add("active");
}

// Validating Empty Field
function check_empty() {
if (document.getElementById('username').value == "" || document.getElementById('password').value == "") {
alert("Fill All Fields !");
} else {
document.getElementById('form').submit();
alert("Form Submitted Successfully...");
}
}
//Function To Display Popup
function div_show() {
document.getElementById('abc').style.display = "block";
}

function div_show2(){
	document.getElementById('abc2').style.display = "block";
}

//Function to Hide Popup
function div_hide(){
document.getElementById('abc').style.display = "none";
}

//Function to Hide Popup
function div_hide2(){
document.getElementById('abc2').style.display = "none";
}

function div_show3() {
document.getElementById('abc3').style.display = "block";
}

function div_show4() {
document.getElementById('abc4').style.display = "block";
}

function div_show5() {
document.getElementById('abc5').style.display = "block";
}

function div_show6() {
document.getElementById('abc6').style.display = "block";
}

function div_hide3(){
document.getElementById('abc3').style.display = "none";
}

function div_hide4(){
document.getElementById('abc4').style.display = "none";
}

function div_hide5(){
document.getElementById('abc5').style.display = "none";
}

function div_hide6(){
document.getElementById('abc6').style.display = "none";
}

function div_show7() {
document.getElementById('abc7').style.display = "block";
}

function div_hide7(){
document.getElementById('abc7').style.display = "none";
}