<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /*  Testimonals-starts  */
  .text ul {

list-style: none;
display: flex;
justify-content: center;
align-items: center;
}

.text ul li:nth-child(1) {
color: #C29A5C;
}

.text ul li:nth-child(2) {
color: black;
}

.wrapper {
max-width: 1200px;
margin: auto;
padding: 0 20px;
display: flex;
flex-wrap: wrap;
align-items: center;
justify-content: space-between;
}

.wrapper .box {
background: #fff;
width: calc(33% - 10px);
padding: 25px;
border-radius: 3px;
box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.15);
}

.wrapper .box i.quote {
font-size: 20px;
color: #17a2b8;
}

.wrapper .box .content {
display: flex;
flex-wrap: wrap;
align-items: center;
justify-content: space-between;
padding-top: 10px;
}

.box .info .name {
font-weight: 600;
font-size: 17px;
}

.box .info .job {
font-size: 16px;
font-weight: 500;
color: #17a2b8;
}

.box .info .stars {
margin-top: 2px;
}

.box .info .stars i {
color: #17a2b8;
}

.box .content .image {
height: 75px;
width: 75px;
padding: 3px;
background: #17a2b8;
border-radius: 50%;
}

.content .image img {
height: 100%;
width: 100%;
object-fit: cover;
border-radius: 50%;
border: 2px solid #fff;
}

.box:hover .content .image img {
border-color: #fff;
}

@media (max-width: 1045px) {
.wrapper .box {
  width: calc(50% - 10px);
  margin: 10px 0;
}
}

@media (max-width: 702px) {
.wrapper .box {
  width: 100%;
}
}
/*  Testimonals-ends  */
    </style>
</head>
<body>
    <!-- Testimonals starts-->
<section style="margin-bottom:60px">
    <header>
      <div class="container h-100 mt-4">
        <div class="row h-100 align-items-center justify-content-center text-center">
          <div class="col-lg-10 align-self-center mb-4" style="background: #fff;">
            <div class="text">
              <h1 class="text-uppercase  font-weight-bold text-center">
                <ul>
                  <li>TESTIM</li>
                  <li>ONALS</li>
                </ul>
              </h1>
            </div>
            <p>At Royal Hotel, we pride ourselves on providing exceptional service and unforgettable experiences for our guests. Don't just take our word for it—hear directly from those who have stayed with us! Our visitors consistently praise our luxurious accommodations, friendly staff, and top-notch amenities. Read on to discover why so many travelers choose Royal Hotel as their home away from home and why they can't wait to return.</p>
          </div>

        </div>
      </div>
    </header>

    <div class="wrapper mt-1 mb-4">
      <div class="box">
        <i class="fas fa-quote-left quote"></i>
        <p>Staying at Royal Hotel was an absolute delight. From the moment I walked into the grand lobby, I was greeted with warm smiles and impeccable service. The room was spacious, elegantly decorated, and offered a stunning view of the city. The amenities, especially the spa and gourmet restaurant, were top-notch. I felt pampered and well-taken care of throughout my stay. I highly recommend Royal Hotel to anyone seeking a luxurious and memorable experience.</p>
        <div class="content">
          <div class="info">
            <div class="name">Arun Shukla</div>
            <div class="job">Designer | Developer</div>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
            </div>
          </div>
          <div class="image">
            <img src="images/teams1.jpg" alt="">
          </div>
        </div>
      </div>
      <div class="box">
        <i class="fas fa-quote-left quote"></i>
        <p>My recent stay at Royal Hotel exceeded all my expectations. The staff went above and beyond to ensure my comfort and satisfaction. The room was not only beautifully furnished but also meticulously clean and equipped with every convenience I could ask for. The hotel's central location made it easy to explore the city's attractions. After a long day of sightseeing, returning to the cozy ambiance of Royal Hotel was a treat. I'll definitely be back on my next trip.</p>
        <div class="content">
          <div class="info">
            <div class="name">Steven Chris</div>
            <div class="job">YouTuber | Blogger</div>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
            </div>
          </div>
          <div class="image">
            <img src="images/teams2.jpg" alt="">
          </div>
        </div>
      </div>
      <div class="box">
        <i class="fas fa-quote-left  quote"></i>
        <p>I chose Royal Hotel for a weekend getaway, and it was the best decision I could have made. The attention to detail in every aspect of the hotel is evident, from the beautifully maintained grounds to the exquisite decor. The staff was incredibly attentive and always ready to assist with a smile. The breakfast buffet was a highlight, offering a wide variety of delicious options. My stay was relaxing, luxurious, and truly enjoyable. Royal Hotel is now my go-to place for any future visits.</p>
        <div class="content">
          <div class="info">
            <div class="name">Aditya Bellis</div>
            <div class="job">Freelancer | Advertiser</div>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
          </div>
          <div class="image">
            <img src="images/teams3.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Testimonals ends-->>

</body>
</html> 