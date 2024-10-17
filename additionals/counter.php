<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .counters {
      padding: 3em 2em;
      background-color: black;
      /* opacity: 0.3; */
      background-image: url(images/blur.jpg);
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center center;
      transition: all .2s linear;
      color: #fff;
      text-align: center;
      /* filter: brightness(50%); */
    }
    .counters > div {
      max-width: 900px;
      margin: 0 auto;
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 4em 2em;
    }
    .counter {
      position: relative;
      /* background-color: black; */
    }
    .counter h1, .counter h4 {
      display: inline-block;
      padding: 0.2em 0.4em;
      /* background-color: rgba(0, 0, 0, 0.5); */
      border-radius: 0.2em;
    }
    .counter h1 {
      font-size: 3em;
      margin-bottom: 0.5em;
    }
    .counter:not(:last-child)::before {
      content: '';
      background: #fff;
      position: absolute;
      width: 2px;
      height: 3em;
      top: 50%;
      transform: translateY(-50%);
      right: -1em;
    }
    .num,h1,h4 {
      color: #fff; /* Optional: Makes the number stand out more */
    }

@media screen and 
  (max-width: 900px) and (min-width:501px)
  {
    .counters > div{
      grid-template-columns: 1fr 1fr;
    }
    .counter:nth-child(2)::before{
      display: none;
    }
  }
  @media screen and (max-width:500px) 
  {
    .counters > div{
      grid-template-columns: 1fr;
      row-gap: 5em;
    }
    .counter:not(:last-child)::before{
      width: 90%;
      height: 2px;
      top: initial;
      right: initial;
      bottom: -3em;
      left: 50%;
      transform: translate(50%)
    }
  }
    </style>
</head>
<body>
<script>
document.addEventListener("DOMContentLoaded", () => {
  const counters = document.querySelectorAll(".num");
  const container = document.querySelector(".counters");
  let activated = false;

  window.addEventListener("scroll", () => {
    const containerOffsetTop = container.offsetTop;
    const containerHeight = container.offsetHeight;
    const pageOffset = window.pageYOffset;
    const windowHeight = window.innerHeight;

    console.log(`Page Offset: ${pageOffset}`);
    console.log(`Container Offset Top: ${containerOffsetTop}`);
    console.log(`Window Height: ${windowHeight}`);
    console.log(`Condition for activation: ${pageOffset > containerOffsetTop - windowHeight + 200}`);
    console.log(`Condition for deactivation: ${pageOffset < containerOffsetTop - containerHeight - 500 || pageOffset === 0}`);

    if (
      pageOffset > containerOffsetTop - windowHeight + 200 &&
      !activated
    ) {
      counters.forEach((counter) => {
        counter.innerText = 0;
        let count = 0;
        const target = parseInt(counter.getAttribute("data-count"));

        function updateCount() {
          if (count < target) {
            count++;
            counter.innerText = count;
            setTimeout(updateCount, 10);
          } else {
            counter.innerText = target;
          }
        }
        updateCount();
      });
      activated = true;
    } else if (
      (pageOffset < containerOffsetTop - containerHeight - 500 ||
        pageOffset === 0) &&
      activated
    ) {
      counters.forEach((counter) => {
        counter.innerText = 0;
      });
      activated = false;
    }
  });
});
</script>
    <!-- counter.php -->
    <section>
  <div class="counters">
    <div>
      <div class="counter">
        <h1><span class="num" data-count="300">0</span>+</h1>
        <h4>Visitors Daily</h4>
      </div>
      <div class="counter">
        <h1><span class="num" data-count="27">0</span>+</h1>
        <h4>Awards & Honors</h4>
      </div> 
      <div class="counter">
        <h1><span class="num" data-count="91">0</span>%</h1>
        <h4>Positive Feedback</h4>
      </div>
      <div class="counter">
        <h1><span class="num" data-count="2">0</span>+</h1>
        <h4>Years Experience</h4>
      </div>
    </div>
  </div>
  <!-- <div style="min-height:20em;"></div> -->
</section>
</body>
</html>
