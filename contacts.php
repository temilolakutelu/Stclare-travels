<?php include('header.php') ?>
<title>Contact Us</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">


<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC_omHoueziaVgUpW-ZRNBRYkKJ84ZPjWo&callback=initMap"
  async defer></script>
<script src="js/googlemap.js"></script>

<script src="js/script.js"></script>

</head>

<div class="not-front page-contacts">

  <div id="main">


    <div id="google_map_wrapper">
      <div id="google_map"></div>
    </div>

    <div class="breadcrumbs1_wrapper">
      <div class="container">
        <div class="breadcrumbs1"><a href="index.php">Home</a><span>/</span>Contact Us</div>
      </div>
    </div>


    <div id="content">
      <div class="container">

        <div class="row">
          <div class="col-sm-6">

            <h3>CONTACT INFO</h3>

            <p>
              We take our responsibility of being your travel agent for your pilgrimage very seriously. Our
              relationship with you starts at the moment you decide to choose us to be your travel agent and we will do
              our best to assist you with every procedure at every step of the way. We will provide you with a list of
              packages and work with you in determining what would work out best for you according to your
              requirements.
            </p>

            <br>

            <h4>OUR ADDRESS</h4>
            <p>
              <strong>St Clare Travels</strong> <br>
              Suite 104 Regency Suites<br>
              17 Ahmed Onibudo Street,<br>
              Victoria Island,
              Lagos
              Nigeria<br>
              <a href="#">info@stclaretravels-ng.com</a>
            </p>

            <h4>PHONE</h4>
            <p>
              01 791 8640<br>
              08023702712
            </p>

            <div class="social3_wrapper">
              <ul class="social3 clearfix">
                <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              </ul>
            </div>


          </div>
          <div class="col-sm-6">

            <h3>CONTACT FORM</h3>

            <div id="note"></div>
            <div id="fields">
              <form id="ajax-contact-form" class="form-horizontal" action="javascript:alert('success!');">

                <div class="form-group">
                  <label for="inputName">Your Name</label>
                  <input type="text" class="form-control" id="inputName" name="name" value="Full Name" onBlur="if(this.value=='') this.value='Full Name'"
                    onFocus="if(this.value =='Full Name' ) this.value=''">
                </div>

                <div class="form-group">
                  <label for="inputEmail">Email</label>
                  <input type="text" class="form-control" id="inputEmail" name="email" value="E-mail address" onBlur="if(this.value=='') this.value='E-mail address'"
                    onFocus="if(this.value =='E-mail address' ) this.value=''">
                </div>


                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label for="inputMessage">Your Message</label>
                      <textarea class="form-control" rows="7" id="inputMessage" name="content" onBlur="if(this.value=='') this.value='Message'"
                        onFocus="if(this.value =='Message' ) this.value=''">Message</textarea>
                    </div>
                  </div>
                </div>
                <div class="g-recaptcha" data-sitekey="6LfqfH4UAAAAAILg_Sghz_QGeWkMN9lMliQD4hDw"></div>
                <button type="submit" class="btn-default btn-cf-submit">send message</button>
              </form>
            </div>


          </div>
        </div>

      </div>
    </div>

  </div>
  <script src="imagesjs/bootstrap.min.js"></script>

</div>
<?php include('footer.php') ?>