<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
.gallery{
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  width: 90%;
  margin: 0 auto;
}
.gallery a{
  height: 200px;
  width: 300px;
  margin: 20px;
  border-radius: 5px; 
  overflow: hidden;
  box-shadow: 0 3px 5px #C29A5C;
}
.gallery a img {
  height: 100%;
  width: 100%;
  object-fit: cover;;
}

    </style>
</head>
<body>
    <!-- Exclusive Gallery starts -->
  <section style="padding:80px;">
    <header>
        <div class="container h-100" >
          <div class="row h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-10 align-self-center mb-4" style="background: #fff;">
              <div class="text">
                <h1 class="text-uppercase  font-weight-bold text-center">
                  <ul>
                    <li>EXCLUSIVE</li>
                    <li>GALLERY</li>
                  </ul>
                </h1>
              </div>
              <p>Welcome to Royal hotel. Discover the essence of luxury and comfort through a collection of images showcasing our beautifully designed rooms, serene spa, and exquisite dining options. Whether you're planning a romantic escape or a productive business stay, our gallery offers a glimpse into the exceptional experience that awaits you here.</p>
            </div>

          </div>
        </div>
      </header>
          
      <div class="gallery"  >
        <a href="images/g4.jpg">
          <img src="images/g4.jpg"  alt="Beautifual image">
        </a>
        <a href="images/g10.jpg">
          <img src="images/g10.jpg" alt="">
        </a>
        <a href="images/r1.jpg">
          <img src="images/r1.jpg" alt="">
        </a>
        <a href="images/r4.jpg">
          <img src="images/r4.jpg" alt="">
        </a>
        <a href="images/g8.jpg">
          <img src="images/g8.jpg" alt="">
        </a>
        <a href="images/g6.jpg">
          <img src="images/g6.jpg" alt="">
        </a>
      </div>
  </section>

 
  <!-- Exclusive Gallery ends -->
</body>
</html>