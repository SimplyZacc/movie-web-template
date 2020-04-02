<!DOCTYPE html>
<head>
  <link rel="stylesheet" href="home.css" >
    
</head>
<html>
<body>
  <!-- Container for the image gallery -->
<div class="container">

  <!-- Full-width images with number text -->
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
      <img src="poster11-683x1024.jpg" style="width:100%" height="400px">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
      <img src="poster16-683x1024.jpg" style="width:100%" height="400px">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
      <img src="poster17-683x1024.jpg" style="width:100%" height="400px">
  </div>

  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
      <img src="poster19-683x1024.jpg" style="width:100%" height="400px">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
      <img src="poster20-683x1024.jpg" style="width:100%" height="400px">
  </div>

  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
      <img src="poster23-683x1024.jpg" style="width:100%" height="400px">
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

  <!-- Image text -->
  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <!-- Thumbnail images -->
  <div class="row">
    <div class="column">
      <img class="demo cursor" src="poster11-683x1024.jpg" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
    </div>
    <div class="column">
      <img class="demo cursor" src="poster16-683x1024.jpg" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
    </div>
    <div class="column">
      <img class="demo cursor" src="poster17-683x1024.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
    </div>
    <div class="column">
      <img class="demo cursor" src="poster19-683x1024.jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
    </div>
    <div class="column">
      <img class="demo cursor" src="poster20-683x1024.jpg" style="width:100%" onclick="currentSlide(5)" alt="Nature and sunrise">
    </div>
    <div class="column">
      <img class="demo cursor" src="poster23-683x1024.jpg" style="width:100%" onclick="currentSlide(6)" alt="Snowy Mountains">
    </div>
  </div>
    </div>

    <div class="row2">
  <div class="column2">
    <div class="card">
      <img src="poster19-683x1024.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Jane Doe</h2>
        <p class="title">CEO &amp; Founder</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
        <p><button class="button2">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column2">
    <div class="card">
      <img src="poster11-683x1024.jpg" alt="Mike" style="width:100%">
      <div class="container2">
        <h2>Mike Ross</h2>
        <p class="title">Art Director</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
        <p><button class="button2">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column2">
    <div class="card">
      <img src="poster16-683x1024.jpg" alt="John" style="width:100%">
      <div class="container2">
        <h2>John Doe</h2>
        <p class="title">Designer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
        <p><button class="button2">Contact</button></p>
      </div>
    </div>
  </div>
</div>
    
<script  src="home.js"></script>
</body>
</html>
