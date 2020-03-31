<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>RRDN Trucking Service</title>
  <?php include("header.php") ?>
  <?php include("receiveForm.php") ?>
</head>

<body>
  <div class="container-fluid">
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark unique-color text-center">
      <a class="navbar-brand" href="#home">RRDN Trucking Service</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#aboutUs">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#service">Service</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#ourTrucks">Our Trucks</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contactUs">Contact Us</a>
          </li>
        </ul>
         <ul class="navbar-nav ml-auto nav-flex-icons">
          <li class="nav-item mt-1">
            <a class="nav-link waves-effect waves-light">
              <i class="fab fa-facebook fa-2x"></i>
            </a>
          </li>
          <li class="nav-item mt-1">
            <a class="nav-link waves-effect waves-light">
              <i class="fab fa-instagram fa-2x"></i>
            </a>
          </li>
          <li class="nav-item mt-1">
            <a class="nav-link waves-effect waves-light">
              <i class="fab fa-youtube fa-2x"></i>
            </a>
          </li>
        </ul>
        
      </div>
    </nav>
  </div>

  <?php include("modals/request_quote_modal.php") ?>

  <main class="mt-5" id="home">
    <div class="jumbotron card card-image vh-100 text-center m-0 d-flex flex-column justify-content-center" style="background-image: url(img/cropped/14.jpg); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-position: center center; background-color: #464646;">
      <div class="text-white text-center py-5 px-4">
        <div>
          <h2 class="card-title h1-responsive pt-3 mb-5 font-weight-bold">You Pick the Location and We Will Take Care of the Rest <br> Thank you for choosing RRDN Trucking!</h2>
          <p class="mx-5 mb-5">We accepted a trip to Metro Manila, Luzon, Visayas and Mindanao
          </p>
          <button data-toggle="modal" data-target="#modalRequestQuote" class="btn btn-primary btn-lg">Request A Quote</button>
        </div>
      </div>
    </div>
  </main>

  <section id="aboutUs">
    <div class="jumbotron card pb-5">
      <div class="text-center">
        <h1 class="h1-responsive mb-5">About Us</h1>
        <div class="container text-justify text-center">
          <p class="card-title">
          RRDN Trucking Services is located at Valenzuela City, Metro Manila. Our main objective is to deliver your valuable products to your intended destinators at the right time without causing any harm, giving you satisfaction with our services. We provide trucking services with open and closed trucks rentals.
          </p>
          <p>
            We transport freight throughtout the Philippines, most notably in Metro Manila, Bulacan, Laguna, Cavite and other areas. We are a trucking company team that offers complete distribution of goods to drive you to your respective locations. 
          </p>
          <p class="font-weight-bold">RRDN Trucking Services is a service company engaged in Lipat Bahay, Office and Warehouse transfer, Door to Door and Trucking Services, operating and gained exceptional experience since 2009.</p>
        </div>
        <div class="justify-content-center pt-5">
          <div class="row">

            <div class="col-lg-3 col-md-12 col-sm-12 mb-3">
              <div class="card">

                <div class="card-header view overlay flex flex-center mt-3">
                  <img src="img/icon/truck.png" style="width: 250px; height: 250px;" class="img-fluid z-depth-1 rounded-circle"
                  alt="Responsive image">
                </div>

                <div class="card-body">

                  <div class="container">
                    <h4 class="card-title mb-4">The Trucks that you need</h4>
                    <h6 class="h6-responsive text-justify text-center">We have a selection of trucks to rent available. We've got small, medium, and big trucks you can count on. Rent the right truck at the right time and ask about our full fleet today. </h6>
                    <br><br>
                  </div>

                </div>
              </div>
            </div>

            <div class="col-lg-1"></div>

            <div class="col-lg-3 col-md-12 col-sm-12 mb-3">
              <div class="card">

                <div class="card-header view overlay flex flex-center mt-3">
                  <img src="img/icon/professional.png" style="width: 250px; height: 250px;" class="img-fluid z-depth-1 rounded-circle"
                  alt="Responsive image">
                </div>

                <div class="card-body mb-2">

                  <div class="container">
                    <h4 class="card-title mb-3">Professionalism</h4>
                    <h6 class="h6-responsive text-justify text-center">We attach importance to our customers because we keep our vehicles in good shpae and provide our drivers with intensive training  and monitoring to ensure protection as we push them along the route. We also carry out personality tests, background checking and strict screening procedures for all of our stuff.</h6>
                  </div>

                </div>
              </div>
            </div>

            <div class="col-lg-1"></div>

            <div class="col-lg-3 col-md-12 col-sm-12 mb-3">
              <div class="card">

                <div class="card-header view overlay flex flex-center mt-3">
                  <img src="img/icon/money.jpg" style="width: 250px; height: 250px;" class="img-fluid z-depth-1 rounded-circle"
                  alt="Responsive image">
                </div>

                <div class="card-body">

                  <div class="container">

                    <h4 class="card-title mb-3">Save Time, Energy and your Money</h4>
                    <h6 class="h6-responsive text-justify text-center">With our fair trucking service rate, we will help you save money, instead of buying your own delivery truck. Get a quote today for the right truck you need, and get the right price.</h6>
                    <br><br>

                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>

      </div>
    </div>
  </section>

  <section id="service">
    <div class="jumbotron card">
      <div class="container text-center mt-5 ">
        <h1 class="display-1">Service</h1>

        <p class="lead mt-5">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
          ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
          aliquip ex ea commodo consequat. Duis aute irure dolor in
          reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
          pariatur. Lorem ipsum dolor sit amet, consectetur adipiscing elit,
          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
          nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
          reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
          pariatur.Lorem ipsum dolor sit amet, consectetur adipiscing elit,
          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
          nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
          reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
          pariatur.Lorem ipsum dolor sit amet, consectetur adipiscing elit,
          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
          nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
          reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
          pariatur.
        </p>
      </div>
    </div>
  </section>

  <section id="ourTrucks">
    <div class="jumbotron card">
      <div class="container text-center mt-5 ">
        <h1 class="display-1">Our Trucks</h1>

        <p class="lead mt-5">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
          ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
          aliquip ex ea commodo consequat. Duis aute irure dolor in
          reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
          pariatur. Lorem ipsum dolor sit amet, consectetur adipiscing elit,
          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
          nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
          reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
          pariatur.Lorem ipsum dolor sit amet, consectetur adipiscing elit,
          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
          nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
          reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
          pariatur.Lorem ipsum dolor sit amet, consectetur adipiscing elit,
          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
          nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
          reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
          pariatur.
        </p>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class=" font-small unique-color-dark pt-3" id="contactUs">

    <div class="container-fluid">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-md-6 mb-3">
          <div class="card">
            <div class="card-header text-center">
              <h1 class="h1-responsive font-weight-bold my-4">Map Location</h1>
            </div>
            <div class="card-body mt-3">
              <div class="z-depth-1-half map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3859.317139180944!2d121.01741531484134!3d14.694648989742578!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b131a40c0fcf%3A0x1bae9b75d3e41698!2s5217%20Sulok%2C%20Valenzuela%2C%201448%20Metro%20Manila!5e0!3m2!1sen!2sph!4v1584772757669!5m2!1sen!2sph" width="325" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
              </div>
            </div>
          </div>
        </div>
        <!--Grid column-->

        <div class="col-md-6 mb-4">
          <div class="card">
            <div class="card-header">
              <h2 class="h1-responsive font-weight-bold text-center my-4">
                Contact us
              </h2>
            </div>
            <section class="m-5">
              <!--Section description-->
              <p class="text-center w-responsive mx-auto mb-5">
                Do you have any questions? Please do not hesitate to contact us
                directly. Our team will come back to you within a matter of
                hours to help you.
              </p>

              <div class="row">
                <!--Grid column-->
                <div class="col-md-9 mb-md-0 mb-5">
                  <form action="" method="POST">
                    <!--Grid row-->
                    <div class="row">
                      <!--Grid column-->
                      <div class="col-md-6">
                        <div class="md-form mb-0">
                          <input type="text" id="name" name="name" class="form-control" />
                          <label for="name" class="">Your name</label>
                        </div>
                      </div>
                      <!--Grid column-->

                      <!--Grid column-->
                      <div class="col-md-6">
                        <div class="md-form mb-0">
                          <input type="text" id="email" name="email" class="form-control" />
                          <label for="email" class="">Your email</label>
                        </div>
                      </div>
                      <!--Grid column-->
                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row">
                      <div class="col-md-12">
                        <div class="md-form mb-0">
                          <input type="text" id="subject" name="subject" class="form-control" />
                          <label for="subject" class="">Subject</label>
                        </div>
                      </div>
                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row">
                      <!--Grid column-->
                      <div class="col-md-12">
                        <div class="md-form">
                          <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                          <label for="message">Your message</label>
                        </div>
                      </div>
                    </div>
                    <!--Grid row-->
                  

                    <div class="text-center">
                      <button type="submit" name="sendMessage" class="btn btn-primary">Send</button>
                    </div>
                  </div>
                </form>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-3 text-center">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <i class="fas fa-map-marker-alt fa-2x"></i>
                      <p>5217 Sulok, Valenzuela, 1448 Metro Manila</p>
                    </li>

                    <li>
                      <i class="fas fa-phone mt-4 fa-2x"></i>
                      <p>+63 0955 470 5644</p>
                    </li>

                    <li>
                      <i class="fas fa-envelope mt-4 fa-2x"></i>
                      <p>carreonborong@gmail.com</p>
                    </li>
                  </ul>
                </div>
                <!--Grid column-->
              </div>
            </section>
          </div>
        </div>
      </div>
      <!--Grid row-->
    </div>

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3 text-white">© 2020 Copyright:
      <a href="index.php"> RRDN-Trucking-Service.com</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->

  <?php include("scripts.php") ?>
  <script>
    $(".nav-link, .navbar-brand, .new-button").click(function() {
      var sectionTo = $(this).attr("href");
      $("html, body").animate({
          scrollTop: $(sectionTo).offset().top
        },
        1500
      );
    });
  </script>

<script>
    
$('#phone').keyup(function(){
    $(this).val($(this).val().replace(/(\d{4})\-?(\d{3})\-?(\d{4})/,'$1-$2-$3'))
});

$('.my-select').selectpicker();
</script>
</body>

</html>