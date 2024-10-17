<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<style>
  .main{
    /* background-color: #ADBADA; */
    background-color: lightgray;
    border-left: 5px solid gray;
    border-right: 5px solid gray;
  box-shadow: 2px lightgreen;
    border-radius: 7px;
    /* opacity: 0.7; */
  }
  input[type=text],input[type=email],input[type=tel]{
    background-color: #E8E8E8;
  }
  .main > input{
    
    opacity: none;
  }
  .form-control{
    background-color: #E8E8E8;
  }
  .mapping {
    display: flex;
    justify-content: center;
    /* align-items: ; */
  }

  iframe {
    width: 100%;
    height: 450px;
    border: 5px solid lightblue;
    border-radius: 5px;
    margin-top: 0px;
  }

  .btn-sb {
    background-color: lawngreen;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    /* color: ; */
  }

  .btn-sb:hover {
    background-color: lightcoral;
    color: white
  }
  #successMessage{
      text-align: center;
      font-weight: bolder;
      color: green;
  }
</style>
<header class="masthead">
  <div class="container h-100">
    <div class="row h-100 align-items-center justify-content-center text-center">
      <div class="col-lg-10 align-self-center mb-4" style="background: #0000002e;">
        <h1 class="text-uppercase text-white font-weight-bold">CONTACT US</h1>
        <hr class="divider my-4" />
      </div>

    </div>
  </div>
</header>

<div id="successMessage" style="display: none;" class="alert alert-success mt-3" role="alert">
  Your form has been submitted successfully.
</div>

  
<div class="mx-auto p-2 mt-3 mb-2 main" style="max-width: 65%;">
    <form action="process_form.php" method="post" id="contactForm">
        <div class="mb-3">
            <label for="name" class="form-label">Your Name:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
        </div>  
        <div class="mb-3">
            <label for="email" class="form-label">Email Address:</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone No:</label>
            <input type="tel" maxlength="10" class="form-control" id="phone" name="phone" placeholder="xxx-xxx-xxxx" required>
        </div>

        <label for="rating">Rate Us:</label>
        <div class="form-check"> 
            <input class="form-check-input" type="radio" name="rating" id="flexRadioDefault1" value="4" checked> 
            <label class="form-check-label" for="flexRadioDefault1">
                4★ & above
            </label>
        </div>
        <div class="form-check"> 
            <input class="form-check-input" type="radio" name="rating" id="flexRadioDefault1" value="4" checked> 
            <label class="form-check-label" for="flexRadioDefault1">
                3★ & above
            </label>
        </div>
        <div class="form-check"> 
            <input class="form-check-input" type="radio" name="rating" id="flexRadioDefault1" value="4" checked> 
            <label class="form-check-label" for="flexRadioDefault1">
                2★ & above
            </label>
        </div>
        <div class="form-check"> 
            <input class="form-check-input" type="radio" name="rating" id="flexRadioDefault1" value="4" checked> 
            <label class="form-check-label" for="flexRadioDefault1">
                1★ & above
            </label>
        </div>
        <!-- Include other rating options similarly -->

        <div class="mb-3">
            <label for="feedback" class="form-label">Feedback:</label>
            <textarea class="form-control" id="feedback" name="feedback" rows="3" required></textarea>
        </div>

        <div class="mb-3">
            <button type="submit" class="btn-sb">Submit</button>
        </div>
    </form>
</div>



<section>
  <div class="mapping">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3720.998555334364!2d72.85953667510866!3d21.152455780528012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be05028befafc5b%3A0xfc02836b24084792!2sMansi%20Residency%2C%20CR%20Patil%20Rd%2C%20C%20R%20Colony%2C%20Dindoli%2C%20Surat%2C%20Gujarat%20394210!5e0!3m2!1sen!2sin!4v1718188136035!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
  document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form submission

    // Prepare form data for submission
    let formData = new FormData(document.getElementById('contactForm'));

    // Submit form data to server-side script
    fetch('process_form.php', {
        method: 'POST',
        body: formData
    })
    .then(response => {
        if (response.ok) {
            document.getElementById('successMessage').style.display = 'block';
            document.getElementById('contactForm').reset(); // Optional: Reset form after submission
        } else {
            throw new Error('Network response was not ok.');
        }
    })
    .catch(error => {
        console.error('Error during form submission:', error);
        // Optionally display an error message
        // document.getElementById('errorMessage').style.display = 'block';
    });
});

</script>