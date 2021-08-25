<?php
  // require __DIR__ . '/app/src/app.php';

    //if (empty($error_message)) {//jei nera klaidos zinutes ,ira6o cookies,ir perkrauna puslapi
     //   if(isset($_POST['submit'])) { 
      //      setcookie("contact_form_success", 1, time() + (86400), "/");
      //      header("Refresh:0");
     //       die();
     //   }

     //   $contact_form_success = false;//i6trina cookie
     //   if(isset($_COOKIE['contact_form_success'])) {
     //       $contact_form_success = true;
     //       setcookie("contact_form_success", 1, time() - (86400), "/");
       // }
  //  }
?>
<section class="small-hero">
    <div class="container">
        <h1>Contact</h1>
        <p>Home / Contact</p>
    </div>
</section>
<section class="container contact-form">
        <div class="form-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62623.57025981118!2d22.873539094525057!3d56.320148643292946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46ef638e5745ffd7%3A0xa00d18ec9ba72b0!2sNaujoji%20Akmen%C4%97!5e0!3m2!1slt!2slt!4v1629270460538!5m2!1slt!2slt" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="contact-info">
            <h5>Contact Info</h5>
            <div class="contact-info-row flex-container">
               <a href="https://goo.gl/maps/hnLKFDETpUnYTbQv8" target="_blank"><i class="contact-info-icon fas fa-map"></i></a>  
               <span>Naujoji Akmenė</span> 
            </div>
            <div  class="contact-info-row">
               <a href="mailto:info@yoursite.com"><i class="contact-info-icon far fa-envelope"></i></a> 
               info@yoursite.com
            </div>
            <div  class="contact-info-row">
                <a href="tel:+370600123456"><i class="contact-info-icon fas fa-phone-alt"></i></a> 
                 (+370) 600-123456
            </div>
        </div>
        <div  class="right-orange-box">
            <ul>
                <li><i class="orange-box-icon fas fa-bullhorn"></i></li>
                <li><h6>Become a Volunteer</h6></li>
                <li>We need you now for world</li>
                <li>Teritatis et quasi architecto. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.</li>
                <li><a href="page.php">JOIN US NOW</a></li>
            </ul>
        </div>
        <div class="form-heading">
            <h1>Send a <span class="text-orange">Message</span> </h1>
            <p>Suveskite duomenis.</p> 
        </div>
        <form action="contact.php" method="post" class="form-box">
            <div class="col-1">
                Name*
                <input type="text" name="vardas" placeholder="Your name" value="" required autofocus>
            </div> 
            <div class="col-2">   
                Email*
                <input type="email" name="email" placeholder="Your email" required>
            </div>
            <div class="col-3">
                Subject
                <input type="text" name="subject"  placeholder="Your subject" required>
            </div>
            <div class="col-4">
                Phone number
                <input type="text" name="phone_number"  placeholder="Your phone number" required> 
           </div>
           <div class="col-5">
               Your Message
               <textarea placeholder="Your message..." name="message" required></textarea>
               <button name="submit" type="submit" id="contact-submit">SEND MESSAGE</button>
               <br>
              <span> Note: Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
            </div>
        </form>
</section>