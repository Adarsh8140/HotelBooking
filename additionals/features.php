<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         /* features-section starts*/
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    transition: all 0.2s ease-in;
    font-family: 'Raleway', sans-serif;
  }

  #features {
    background-color: #fafbfc;
    padding: 5rem 0;
  }

  .container_features {
    width: 100%;
    max-width: 1100px;
    margin: 0 auto;
  }

  .features__top,
  .feature__container {
    padding: 0 1.5rem;
  }

  .features__top {
    text-align: center;
  }

  .features__top h1 {
    font-size: 2rem;
    margin-bottom: 0.5rem;
    line-height: 1.2;
    color: #071e55;
  }

  .features__top p {
    color: #7c8595;
    font-size: 1.1rem;
    line-height: 2rem;
    margin-bottom: 1 rem;
    padding: 0.5 rem;
    font-weight: 300;
  }

  .feature__container {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
  }

  .feature__item {
    padding: 1rem;
    margin-top: 2rem;
    text-align: center;
  }

  .feature__item span {
    font-size: 3.5rem;
    margin-bottom: 0.5rem;
    color: #C29A5C;
  }

  .featureItem__info h4 {
    font-size: 1.3rem;
    color: #071e55;
    margin-bottom: 0.5rem;
  }

  .featureItem__info p {
    font-size: 1.05rem;
    color: #7c8595;
    line-height: 2rem;
    font-weight: 300;
  }

  @media (max-width:768px) {
    .features__top p {
      padding: 0;
    }

    .feature__container {
      grid-template-columns: 1fr;
    }
  }
  /* features-section ends*/
    </style>
</head>
<body>
    <!--Features Section  starts-->
  <section id="features" style="margin-top:40px; " >
    <div class="container_features">
      <div class="features__top">
        <div class="text">
          <h1 class="text-uppercase  font-weight-bold text-center">
            <ul>
              <li>OUR</li>
              <li>FACILITIES</li>
            </ul>
          </h1>
        </div>
        <p>
        Our hotels offer convenient features like In-Room Wi-Fi, alongside relaxing amenities you need, from refreshing pools to helpful front desk staff.</p>
      </div>
      <div class="feature__container">
        <div class="feature__item">
        <span class="material-icons">wifi</span>
          <div class="featureItem_info">
            <h4>Powerful Dashboard</h4>
            <p>Stay connected throughout your stay with our complimentary Wi-Fi.</p>

          </div>
        </div>
        <div class="feature__item">
        <span class="material-icons">local_parking</span>
          <div class="featureItem_info">
            <h4>User Friendly</h4>
            <p>Book your stay and secure your parking spot - all in one place.</p>

          </div>
        </div>
        <div class="feature__item">
        <span class="material-icons">local_bar</span>
          <div class="featureItem_info">
            <h4>Smart Notifiactions</h4>
            <p>Enjoy handcrafted cocktails in a stylish atmosphere at our on-site bar</p>

          </div>
        </div>
        <div class="feature__item">
        <span class="material-icons">pedal_bike </span>
          <div class="featureItem_info">
            <h4>Cost Effective</h4>
            <p>Explore the city at your own pace - rent a bike directly from the hotel.</p>

          </div>
        </div>
        <div class="feature__item">
        <span class="material-icons">schedule</span>
          <div class="featureItem_info">
            <h4>Unique Features</h4>
            <p>Seamless check-in, 24/7 support, and more - all at our front desk.</p>

          </div>
        </div>
        <div class="feature__item">
        <span class="material-icons">fitness_center</span>
          <div class="featureItem_info">
            <h4>Support 24/7</h4>
            <p>Maintain your workout routine even while traveling with a well-equipped fitness center.</p>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Features Section ends--> 
</body>
</html>