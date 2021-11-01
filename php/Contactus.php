<?php 

$conn = mysqli_connect("localhost", "root", "", "bookopedia");
$insert = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['name'])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $msg = $_POST["message"];
    
      $sql = "INSERT INTO `contact` (`name`, `email`, `subject`, `message`) VALUES ('$name', '$email', '$subject', '$msg');";
       
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $insert = true;

        } else {
            echo "record does not insert" . mysqli_error($conn);
        }
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/Contactus.css">
    <link rel="shortcut icon" href="../assets/open-book.png" type="image/x-icon">

    <title>Contact Us</title>
</head>
<body background="https://utemplates.net/wp-content/uploads/2017/07/White-Textured-Background.jpg">
    <header id="header" class="d-flex flex-column justify-content-center">
      <img src="../assets/Bookopedia-logo.png" height="110px" width="110px" style="top: 5px;bottom: 30px; right: 10px; position: relative;">

      <nav id="navbar" class="navbar nav-menu" style="top: 10pc; position:fixed; ">
        <ul>
          <li><a href="http://localhost/Bookopedia/index.html" class="nav-link scrollto"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="http://localhost/Bookopedia/aboutus.html" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="http://localhost/Bookopedia/Books.html" class="nav-link scrollto"><i class="bx bx-book"></i> <span>Books</span></a></li>
          <li><a href="http://localhost/Bookopedia/paidbooks.html" class="nav-link scrollto"><i class="bx bxl-paypal"></i> <span>Paid Books</span></a></li>
          <li><a href="http://localhost/Bookopedia/php/Contactus.php" class="nav-link scrollto active"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
          <li><a href="http://localhost/Bookopedia/LogReg.php" class="nav-link scrollto"><i class="bx bx-log-in"></i> <span>Login</span></a></li>
        </ul>
      </nav>
      <section id="contact" class="contact"  style="left:3pc;position:relative">

        <div class="container" data-aos="fade-up">
  
          <header class="section-header" style="bottom:30px;position:relative">
            <h2 style="text-align: center;color:#012970;font-weight: 1000;"><u>CONTACT US</u></h2>
          </header>
  
          <div class="row gy-4">
  
            <div class="col-lg-6">
  
              <div class="row gy-4">
                <div class="col-md-6">
                  <div class="info-box">
                    <i class="bx bx-map"></i>
                    <h3>Address</h3>
                    <p>Indus University<br>Ahmedabad,382115</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="info-box">
                    <i class="bx bx-phone"></i>
                    <h3>Call Us</h3>
                    <p>+91 7284941558<br>+91 9924039434</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="info-box">
                    <i class="bx bx-envelope"></i>
                    <h3>Email Us</h3>
                    <p>dhamechapratham@gmail.com<br>kashishmotwani.ce@gmail.com</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="info-box">
                    <i class="bx bx-time"></i>
                    <h3>Open Hours</h3>
                    <p>Monday - Friday<br>9:00AM - 05:00PM</p>
                  </div>
                </div>
              </div>
  
            </div>
  
            <div class="col-lg-6">
              <form action="Contactus.php" method="POST" class="php-email-form">
                <div class="row gy-4">
  
                  <div class="col-md-6">
                    <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                  </div>
  
                  <div class="col-md-6 ">
                    <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                  </div>
  
                  <div class="col-md-12">
                    <input type="text" name="subject"  class="form-control" placeholder="Subject" required>
                  </div>
  
                  <div class="col-md-12">
                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                  </div>
  
                  <div class="col-md-12 text-center">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
  
                    <button type="submit">Send Message</button>
                    <?php
                      if($insert){
                        echo '<div>
                          <p style="text-align: center; top : 30px; position:relative;  ">
                          <!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
                          <html>
                          <img src="../assets/check-circle.gif" height = 50px width = 50px/>
                          
                          </html> Your message has been sent. Thank you!
                          </p>
                        </div>';
                      }
                    ?>
                  </div>
  
                </div>
              </form>
  
            </div>
  
          </div>
  
        </div>
  
      </section><!-- End Contact Section -->
   <br><br><br>
  
    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
  
            <div class="footer-top">
              <div class="container">
                <div class="row gy-4">
                  <div class="col-lg-7 col-md-12 footer-info">
                    <a href="index.html" class="logo d-flex align-items-center">
                      <img src="./assets/Bookopedia-logo.png" alt="">
                      <span>Bookopedia</span>
                    </a><br>
                    <p>It is a online platform created to help Engineering students to find all the engineering books at one stop.We have both paid and free books so students don't have to waste their money and time on buying if offline.And as India is growing digitally so this website will be beneficial as from this anyone can learn,read anywhere,anytime.</p>
                    <div class="social-links mt-3">
                      <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                      <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                      <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                      <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                    </div>
                  </div>
        
                  <div class="col-lg-2 col-6 footer-links">
                    <h4 >Useful Links</h4>
                    <ul>
                      <li><i class="bx bx-chevron-right"></i> <a href="http://localhost/Bookopedia/index.html" style="text-decoration: none;">Home</a></li>
                      <li><i class="bx bx-chevron-right"></i> <a href="http://localhost/Bookopedia/aboutus.html" style="text-decoration: none;">About us</a></li>
                      <li><i class="bx bx-chevron-right"></i> <a href="http://localhost/Bookopedia/LogReg.html" style="text-decoration: none;">Login</a></li>
                    </ul>
                  </div>
        
                  <div class="col-lg-2 col-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                      <li><i class="bx bx-chevron-right"></i> <a href="http://localhost/Bookopedia/Books.html" style="text-decoration: none;">Books</a></li>
                      <li><i class="bx bx-chevron-right"></i> <a href="http://localhost/Bookopedia/paidbooks.html" style="text-decoration: none;">Paid Books</a></li>
                     
                    </ul>
                  </div>
        
                  <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                    <h4>Contact Us</h4>
                    <p>
                      Indus University<br>Ahmedabad,382115<br><br>
                      <strong>Phone:</strong> +91 7284941558<br>
                      <strong>Email:</strong> info-bookopedia@gmail.com<br>
                    </p>
        
                  </div>
        
                </div>
              </div>
            </div>
            <div class="container">
              <div class="copyright">
                &copy; Copyright <strong><span>Indus university</span></strong>. All Rights Reserved
              </div>
              <div class="credits">
                Designed by <a href="aboutus.html">Kashish Motwani & Pratham Dhamecha</a>
              </div>
            </div>
          </footer><!-- End Footer -->


        <button type="button" class="btn btn-primary P" onclick="window.scrollTo(0, 0)">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                class="bi bi-arrow-up-square-fill X" viewBox="0 0 16 16">
                <path
                    d="M2 16a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2zm6.5-4.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 1 0z" />
            </svg>
        </button>
</header>
</body>
</html>