<?php 
include ('header.html');
?>

    <section class="site-hero overlay page-inside" style="background-image: url(img/hero_2.jpg)">
      <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
          <div class="col-md-10 text-center">
            <h1 class="heading" data-aos="fade-up">Contact</h1>
            <p class="sub-heading mb-5" data-aos="fade-up" data-aos-delay="100">Get in touch with us.</p>
          </div>
        </div>
        <!-- <a href="#" class="scroll-down">Scroll Down</a> -->
      </div>
    </section>
    <!-- END section -->

    
    <section class="section bg-primary contact-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            
            <form action="contact.php" method="post" class="bg-white p-md-5 p-4 mb-5" style="margin-top: -150px;">
              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="name">Name</label>
                  <input type="text" name="name" id="name" class="form-control ">
                </div>
                <div class="col-md-6 form-group">
                  <label for="phone">Phone</label>
                  <input type="text" name="phone" id="phone" class="form-control ">
                </div>
              </div>
          
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="email">Email</label>
                  <input type="email" name="email" id="email" class="form-control ">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="message">Write Message</label>
                  <textarea name="message"  id="message" class="form-control " cols="30" rows="8"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="submit" value="Send Message" class="btn btn-primary">
                </div>
              </div>
            </form>

          </div>
          <div class="col-md-5">
            <div class="row">
              <div class="col-md-10 ml-auto contact-info">
                <p><span class="d-block">Address:</span> <span> 98 West 21th Street, Suite 721 New York NY 10016</span></p>
                <p><span class="d-block">Phone:</span> <span> (+1) 435 3533</span></p>
                <p><span class="d-block">Email:</span> <span> info@yourdomain.com</span></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    


    <?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 // Minimal form validation:
	if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message']) ) 
	{

	// Create the body:
	$name = $_POST['name'];
  $email= $_POST['email'];
  $phone= $_POST['phone'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	// Make it no longer than 70 characters long:
	$body  .= "Name: ".$name."\n";
  $body  .= "Email: ".$email."\n";
  $body .= "Phone: ".$phone."\n";
	$body  .= "Subject: ".$subject."\n";
	$body  .= "Message: ".$message."\n";

	// Send the email:
	mail('info@loyalthyhotelandsuites.com',
	'Contact Form Submission',
	$body, "From: {$_POST['email']}");
	// Print a message:
	echo '<p><em>Thank you for
	contacting us. We will reply soon.</em></p>';
	// Clear $_POST (so that the form's not sticky):
	$_POST = array( );
	}
	}

?>

    <?php 
    include ('footer.html');
    ?>