<section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p> vous souhaitez obtenir plus d'informations ou demander un devis ? écrivez-nous</p>
        </div>


        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">


              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p><a href="mailto:contact@saley.ma">contact@saley.ma</a></p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Appelez Nous Sur:</h4>
                <p><a href="tel:+212694437764">+212 694 437 764</a></p>
              </div>

              <div class="email">
                <i class="bi bi-facebook"></i>
                <h4>Facebook:</h4>
                <a href="https://www.facebook.com/Saley.Inc"><p>Saley.Inc</p></a>
              </div>

              <div class="email">
                <i class="bi bi-instagram"></i>
                <h4>Instagram:</h4>
                <a href="https://instagram.com/saley.inc"><p>Saley.Inc</p></a>
              </div>
          </div>

        </div>


          <?php
          /*
            //include_once('config.php');
            $db_con= mysqli_connect ('localhost', 'saleyma_usr', ';LKmW7S5HRX0', 'saleyma_db');
            if(($_POST["send"])) {
              $name = $_POST["name"];
              $email = $_POST["email"];
              $phone = $_POST["phone"];
              $message = $_POST["message"];

              // Recipient email
              $toMail = "contact@saley.ma";

              // Build email header
              $header = "From: " . $name . "<". $email .">\r\n";
              $send_mail = mail($toMail, $message, $header);
              // Send email
              if($send_mail) {

                  $querry = "INSERT INTO mailing (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";
                  $sql = mysqli_query($db_con, $querry);

                  if(!$sql) {
                    die("MySQL query failed.");
                  } else {
                    $response = array(
                      "status" => "alert-success",
                      "message" => "We have received your query and stored your information. We will contact you shortly."
                    );
                  }
              } else {
                  $response = array(
                      "status" => "alert-danger",
                      "message" => "Message couldn't be sent, try again"
                  );
              }
            }*/
          ?>



          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form  name="contactForm" action="#contact"  method="post" class="php-form">
              <div class="row g-3">

                <div style="color:red;">
                    <strong>
                      <?php
                      include_once("Dashboard/src/user.class.php");
                      $cntct = new Contact();
                      $cntct->display_error();

                      ?>
                    </strong>

                </div>
                <div style="color: green;">
                    <strong>
                      <?php

                      $cntct->displaySucess();

                      ?>
                    </strong>

                </div>

                  <div class="form-floating col-md-6">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Idriss El mansouri" required>
                    <label for="name">Nom complet</label>
                  </div>
                  <div class="form-floating col-md-6">
                    <input type="email" class="form-control" name="email" id="email" placeholder="example@saley.ma" required>
                    <label for="email">Adress email</label>
                  </div>
                <div class="form-floating">
                  <input type="text" class="form-control" name="phone" id="phone" placeholder="0600000000" required>
                  <label for="name">Votre Telephone</label>
                </div>
                <div class="form-floating">

                  <textarea class="form-control" name="message" id="message" placeholder="Veuillez tapper votre message par là" rows="4"></textarea>
                  <label for="name">Votre Message</label>
                </div>
                <div class="d-grid gap-2">
                 <button type="submit" class="btn btn-primary" name="send" id="send" >Envoyer</button>
                </div>
              </div>
            </form>
          </div>
      </div>



  </div>

</section>
