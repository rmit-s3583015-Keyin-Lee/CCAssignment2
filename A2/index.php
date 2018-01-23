<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to A2 Cinema</title>
    <h1>A2 Cinema Test</h1>
</head>

<body>
    <div class = "slide_container">
        <div class = "myslides fade">
            <div class = "numtext"> 1 </div>
            <img src = "/static/images/1.jpeg" style = "width:100%">
        
        </div>

    
        <div class = "myslides fade">
            <div class = "numtext"> 2 </div>
            <img src = "/static/images/2.jpeg" style = "width:100%">

        </div>

    <a class = "pre" onclick = "plusSlide(-1)">&#10094;</a>
    <a class = "next" onclick = "plusSlide(1)">&#10095;</a>
</div>
<br>
    <div style = "text-align:center">
        <span class = "dot" onclick = "currentSlide(1)"></span>
        <span class = "dot" onclick = "currentSlide(2)"></span>
       
    </div>
<script>
    var slideIndex = 1;
    showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("myslides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1} 
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>


    <nav>
        <div class="nav">
            <a href="#home">What's Hot</a>
            <a href="#news">Now Showing</a>
            <a href="#contact">Coming Soon</a>
            <a href="#about">Book Now</a>
            <div class="search">
                <form action="/action_page.php">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="fa fa-search"></i>Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="top10movies">
        <h3>Top 10 Movies</h3>
    </div>
    <div class="promos">
        <h3>Promos</h3>
    </div>
    <div class="cinema choice">
        <h3>Cinema Choice</h3>
    </div>
    <div class="genres">
        <h3>Genres to choose from</h3>
    </div>
</body>

<footer>
    <hr>
    <div class="sitemap">
            <a href="#home">About Us</a>
            <a href="#news">Privacy Policy</a>
            <a href="#contact">Forms and Conditions</a>
            <div>All Rights Reserved, Copyright 2018</div>
    </div>
</footer>

</html>
