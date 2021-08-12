<footer id="footer">

<div class="footer-newsletter">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <h4>Join Our Newsletter</h4>
        <p>Join Our Broadcast List To Receive New Offers. </p>
        <form method="post">
              
                <?php 

          global $errors;

          $errors = array ();


          if (isset($_POST['submit'])) {

            $email = $_POST["email"];

            $db_con = mysqli_connect('localhost', 'saleyma_usr', ';LKmW7S5HRX0', 'saleyma_db');
            $query= "INSERT INTO newsletter (email) VALUES ('$email')";
            $sql = mysqli_query($db_con, $query);

            if (!sql){
              array_push($errors, "Something Went Wrong Please try Again ...") ;
              
            } else {
              array_push($errors, "You Have Been Subscribed Successfully, Welcome To Saley Inc News Letter") ;
          
            }
          }


          ?>

          <input type="email" name="email" placeholder="name@example.com"><input type="submit" value="submit" name="submit" >
        </form>
      </div>
    </div>
  </div>
</div>

<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6 footer-contact">
        <h3>Saley Inc.</h3>
        <p>
         Web Agency <strong>Saley </strong> Empowering Your Web Identity In  World Empowered By The Web.
         <br> 
          <strong>Phone:</strong> <a href="tel:+212694437764">+212 694 437 764</a><br>
          <strong>Email:</strong> <a href="mailto:contact@saley.ma">contact@saley.ma</a><br>
        </p>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><i class="bi bi-caret-right-fill"></i> <a href="#hero">Home</a></li>
          <li><i class="bi bi-caret-right-fill"></i> <a href="#about">About Us</a></li>
          <li><i class="bi bi-caret-right-fill"></i> <a href="#services">Services</a></li>
          <li><i class="bi bi-caret-right-fill"></i> <a href="#pricing">Packs</a></li>
          <li><i class="bi bi-caret-right-fill"></i> <a href="#">Contact</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
       <h4>Our Services</h4>
        <ul>
          <li><i class="bi bi-caret-right-fill"></i> <a href="#services">Web Design</a></li>
          <li><i class="bi bi-caret-right-fill"></i> <a href="#services">Web Development</a></li>
          <li><i class="bi bi-caret-right-fill"></i> <a href="#services">Branding & Consulting</a></li>
          <li><i class="bi bi-caret-right-fill"></i> <a href="#services">E-Marketing</a></li>
          <li><i class="bi bi-caret-right-fill"></i> <a href="#services">Graphic Design</a></li>
          <li><i class="bi bi-caret-right-fill"></i> <a href="#services">Computer Engineering</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
      <h4>Our Social Media</h4>
            <p>Follow us on our social meida and stay informed.<br><span class="bold text-center "> Saley &trade;</span> YOUR GATEWAY TO DIGITIZATION </p>
        <div class="social-links mt-3">
          <a href="https://twitter.com/Saley_Inc" class="twitter"><i class="bi bi-twitter"></i></a>
          <a href="https://www.facebook.com/Saley.Inc" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="https://www.instagram.com/saley.inc/" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="https://github.com/saley-inc" class="github"><i class="bi bi-github"></i></a>
          <a href="https://linkedin.com/company/saley-inc" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>

    </div>
  </div>
</div>

<div class="container footer-bottom clearfix">
  <div class="copyright">
    &copy; Copyright <strong><span> Saley.Inc </span></strong> All Rights Reserved
  </div>
  <div class="credits">
 
    Designed by <a href="https://saley.ma/">Saley Team</a>
  </div>
</div>
</footer>
