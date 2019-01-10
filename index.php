<?php include('header.php') ?>
<?php
$bg = array('images/banner1.png','images/banner3.jpg'); // array of filenames

$i = rand(0, count($bg) - 1); // generate random number size of the array
$selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
?>

<style>
  #slider_wrapper {
    background: url(<?php echo $selectedBg; ?>) center center no-repeat;
    background-size: cover;
}
</style>


<div id="slider_wrapper">
  <div class="container">
    <div id="slider_inner">
      <div class="">
        <div id="slider">

          <div class="">
            <div class="carousel-box">
              <div class="inner">
                <div class="carousel main">
                  <ul>
                    <li>
                      <div class="slider">
                        <div class="slider_inner">
                          <div class="txt1"><span>Welcome to </span></div>
                          <div class="txt2"><span>ST. CLARE TRAVELS</span></div>
                          <div class="txt3"><span>We offer a complete range of superior world class travel
                              services..</span></div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="slider">
                        <div class="slider_inner">
                          <div class="txt1"><span>Flights</span></div>
                          <div class="txt2"><span>Tour Packages - Leisure & Business</span></div>
                          <div class="txt3"><span>we provide you with an escape from the routine.</span></div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="slider">
                        <div class="slider_inner">
                          <div class="txt1"><span>Hotel</span></div>
                          <div class="txt2"><span>Vacations and Meetings - Leisure & Business</span></div>
                          <div class="txt3"><span>Prompt response to reservation request and messages.</span></div>
                        </div>
                      </div>
                    </li>


                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="slider_pagination"></div>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="front_tabs">
  <div class="container">
    <div class="tabs_wrapper tabs1_wrapper">
      <div class="tabs tabs1">
        <div class="tabs_tabs tabs1_tabs">

          <ul>
            <li class="active flights"><a href="#tabs-1"><i class="fa fa-plane"></i> Flights</a></li>
            <li class="hotels"><a href="#tabs-2"><i class="fa fa-building-o"></i>Hotels</a></li>
          </ul>

        </div>
        <div class="tabs_content tabs1_content">

          <div id="tabs-1">
            <form action="javascript:;" class="form1">
              <div class="row">
                <div class="col-sm-4 col-md-2">
                  <div class="select1_wrapper">
                    <label>Flying from:</label>
                    <div class="select1_inner">
                      <select class="select2 select" style="width: 100%">
                        <option value="1">City or Airport</option>
                        <option value="2">Alaska</option>
                        <option value="3">Bahamas</option>
                        <option value="4">Bermuda</option>
                        <option value="5">Canada</option>
                        <option value="6">Caribbean</option>
                        <option value="7">Europe</option>
                        <option value="8">Hawaii</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 col-md-2">
                  <div class="select1_wrapper">
                    <label>To:</label>
                    <div class="select1_inner">
                      <select class="select2 select" style="width: 100%">
                        <option value="1">City or Airport</option>
                        <option value="2">Alaska</option>
                        <option value="3">Bahamas</option>
                        <option value="4">Bermuda</option>
                        <option value="5">Canada</option>
                        <option value="6">Caribbean</option>
                        <option value="7">Europe</option>
                        <option value="8">Hawaii</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 col-md-2">
                  <div class="input1_wrapper">
                    <label>Departing:</label>
                    <div class="input1_inner">
                      <input type="text" class="input datepicker" value="Mm/Dd/Yy">
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 col-md-2">
                  <div class="input1_wrapper">
                    <label>Returning:</label>
                    <div class="input1_inner">
                      <input type="text" class="input datepicker" value="Mm/Dd/Yy">
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 col-md-1">
                  <div class="select1_wrapper">
                    <label>Adult:</label>
                    <div class="select1_inner">
                      <select class="select2 select select3" style="width: 100%">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 col-md-1">
                  <div class="select1_wrapper">
                    <label>Child:</label>
                    <div class="select1_inner">
                      <select class="select2 select select3" style="width: 100%">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 col-md-2">
                  <div class="button1_wrapper">
                    <button type="submit" class="btn-default btn-form1-submit">Search</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div id="tabs-2">
            <form action="javascript:;" class="form1">
              <div class="row">
                <div class="col-sm-4 col-md-4">
                  <div class="select1_wrapper">
                    <label>City or Hotel Name:</label>
                    <div class="select1_inner">
                      <select class="select2 select" style="width: 100%">
                        <option value="1">Enter a destination or hotel name</option>
                        <option value="2">Lorem ipsum dolor sit amet</option>
                        <option value="3">Duis autem vel eum</option>
                        <option value="4">Ut wisi enim ad minim veniam</option>
                        <option value="5">Nam liber tempor cum</option>
                        <option value="6">At vero eos et accusam et</option>
                        <option value="7">Consetetur sadipscing elitr</option>
                        <option value="8">Sed diam nonumy</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 col-md-2">
                  <div class="input1_wrapper">
                    <label>Check-In:</label>
                    <div class="input1_inner">
                      <input type="text" class="input datepicker" value="Mm/Dd/Yy">
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 col-md-2">
                  <div class="input1_wrapper">
                    <label>Check-Out:</label>
                    <div class="input1_inner">
                      <input type="text" class="input datepicker" value="Mm/Dd/Yy">
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 col-md-2">
                  <div class="select1_wrapper">
                    <label>Adult:</label>
                    <div class="select1_inner">
                      <select class="select2 select" style="width: 100%">
                        <option value="1">Room for 1 adult</option>
                        <option value="2">Room for 2 adult</option>
                        <option value="3">Room for 3 adult</option>
                        <option value="4">Room for 4 adult</option>
                        <option value="5">Room for 5 adult</option>
                        <option value="6">Room for 6 adult</option>
                        <option value="7">Room for 7 adult</option>
                        <option value="8">Room for 8 adult</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 col-md-2">
                  <div class="button1_wrapper">
                    <button type="submit" class="btn-default btn-form1-submit">Search</button>
                  </div>
                </div>
              </div>
            </form>
          </div>


        </div>
      </div>
    </div>
  </div>
</div>

<!-- hot deals -->
<div id="hot_deals">
  <div class="container">

    <h2 class="animated" data-animation="fadeInUp" data-animation-delay="100"><span>HOT DEALS</span></h2>

    <div class="title1 animated" data-animation="fadeInUp" data-animation-delay="200">Get flights from the top
      airlines. Book with us and we will help you pick the best flight deals</div>

    <br><br>
    <div id="hot" class="container">
      <ul id="c" class="row">
        <li class="col-md-3 col-sm-12 col-xs-12">
          <div class="popular">
            <div class="popular_inner">
              <figure>
                <img src="images/flights/emirates.jpg" alt="" class="img-responsive">
                <div class="over">
                  <div class="v1">Emirates Airline <span></span></div>
                  <div class="v2">₦218,980</div>
                </div>
              </figure>
              <div class="caption">
                <div class="txt1"><span>Lagos - Bahamas</span> <br> Availability</div>
                <div class="txt2">
                  <p>₦218,980</p>Mon, 1 Oct. 2018 - Sat, 15 Dec. 2018
                </div>
                <div class="txt3 clearfix">

                  <div class="right_side"><a href="flights.php" class="btn-default btn1">See All</a></div>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li class="col-md-3 col-sm-12 col-xs-12">
          <div class="popular">
            <div class="popular_inner">
              <figure>
                <img src="images/flights/qatar.jpg" alt="" class="img-responsive">
                <div class="over">
                  <div class="v1">Qatar Airways<span></span></div>
                  <div class="v2">₦265,980</div>
                </div>
              </figure>
              <div class="caption">
                <div class="txt1"><span>Lagos - London</span> <br> Availability</div>
                <div class="txt2">
                  <p>₦265,980</p>Mon, 1 Oct. 2018 - Sat, 15 Dec. 2018
                </div>
                <div class="txt3 clearfix">

                  <div class="right_side"><a href="flights.php" class="btn-default btn1">See All</a></div>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li class="col-md-3 col-sm-12 col-xs-12">
          <div class="popular">
            <div class="popular_inner">
              <figure>
                <img src="images/hotel/Sheraton.jpg" alt="" class="img-responsive">
                <div class="over">
                  <div class="v1">Sheraton Hotel<span></span></div>
                  <div class="v2">₦100,000 <i style="font-size:8px">(per night)</i></div>
                </div>
              </figure>
              <div class="caption">
                <div class="txt1"><span>Abuja</span> <br> Availability</div>
                <div class="txt2">
                  <p>₦100,000</p>Mon, 1 Oct. 2018 - Sat, 15 Dec. 2018
                </div>
                <div class="txt3 clearfix">

                  <div class="right_side"><a href="flights.php" class="btn-default btn1">See All</a></div>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li class="col-md-3 col-sm-12 col-xs-12">
          <div class="popular">
            <div class="popular_inner">
              <figure>
                <img src="images/hotel/grittal.jpg" alt="" class="img-responsive">
                <div class="over">
                  <div class="v1">Giritale Hotel<span></span></div>
                  <div class="v2">₦102,680 <i style="font-size:8px">(per night)</i></div>
                </div>
              </figure>
              <div class="caption">
                <div class="txt1"><span>Polonnaruwa</span> <br> Availability</div>
                <div class="txt2">
                  <p>₦102,680</p> Wed, 24 Oct. 2018 - Sat, 15 Dec. 2018
                </div>
                <div class="txt3 clearfix">

                  <div class="right_side"><a href="flights.php" class="btn-default btn1">See All</a></div>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li class="col-md-3 col-sm-12 col-xs-12">
          <div class="popular">
            <div class="popular_inner">
              <figure>
                <img src="images/flights/eqyptia.jpg" alt="" class="img-responsive">
                <div class="over">
                  <div class="v1">Egyptair<span></span></div>
                  <div class="v2">₦130,000</div>
                </div>
              </figure>
              <div class="caption">
                <div class="txt1"><span>Lagos - Egypt</span> <br> Availability</div>
                <div class="txt2">
                  <p>₦130,000</p>Mon, 1 Oct. 2018 - Sat, 15 Dec. 2018
                </div>
                <div class="txt3 clearfix">

                  <div class="right_side"><a href="flights.php" class="btn-default btn1">See All</a></div>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li class="col-md-3 col-sm-12 col-xs-12">
          <div class="popular">
            <div class="popular_inner">
              <figure>
                <img src="images/hotel/hilton.jpg" alt="" class="img-responsive">
                <div class="over">
                  <div class="v1">Hilton Hotel<span></span></div>
                  <div class="v2">₦200,000<i style="font-size:8px">(per night)</i></div>
                </div>
              </figure>
              <div class="caption">
                <div class="txt1"><span> Dublin</span> <br> Availability</div>
                <div class="txt2">
                  <p>₦200,000</p> Tue, 25 Nov. 2018 - Sat, 15 Dec. 2018
                </div>
                <div class="txt3 clearfix">

                  <div class="right_side"><a href="flights.php" class="btn-default btn1">See All</a></div>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li class="col-md-3 col-sm-12 col-xs-12">
          <div class="popular">
            <div class="popular_inner">
              <figure>
                <img src="images/hotel/lagos avenida.jpg" alt="" class="img-responsive">
                <div class="over">
                  <div class="v1">Lagos Avenida<span></span></div>
                  <div class="v2">₦118,000<i style="font-size:8px">(per night)</i></div>
                </div>
              </figure>
              <div class="caption">
                <div class="txt1"><span>Lagos</span> <br> Availability</div>
                <div class="txt2">
                  <p>₦118,000</p> Mon, 25 Nov. 2018 - Sat, 15 Dec. 2018
                </div>
                <div class="txt3 clearfix">

                  <div class="right_side"><a href="flights.php" class="btn-default btn1">See All</a></div>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li class="col-md-3 col-sm-12 col-xs-12">
          <div class="popular">
            <div class="popular_inner">
              <figure>
                <img src="images/flights/turkish.jpg" alt="" class="img-responsive">
                <div class="over">
                  <div class="v1">Turkish Airlines<span></span></div>
                  <div class="v2">₦218,000</div>
                </div>
              </figure>
              <div class="caption">
                <div class="txt1"><span>Lagos - UK</span> <br> Availability</div>
                <div class="txt2">
                  <p>₦218,000</p> Wed, 24 Oct. 2018 - Sat, 15 Dec. 2018
                </div>
                <div class="txt3 clearfix">

                  <div class="right_side"><a href="flights.php" class="btn-default btn1">See All</a></div>
                </div>
              </div>
            </div>
          </div>
        </li>

      </ul>
    </div>
  </div>
</div>
<div id="why1">
  <div class="container">

    <h2 id='why' class="animated" data-animation="fadeInUp" data-animation-delay="100"><span>WHY WE ARE THE BEST</span></h2>

    <div class="title1 animated" data-animation="fadeInUp" data-animation-delay="200">St Clare Travels has a
      comprehensive understanding of Corporate Travel Management, with significant cost saving programs, the
      latest
      technologies, personal attention and high business ethics.</div>

    <br><br>

    <div class="row">
      <div class="col-sm-3">
        <div class="thumb2 animated" data-animation="flipInY" data-animation-delay="200">
          <div class="thumbnail clearfix">
            <a href="about.php">
              <figure class="">
                <img src="images/why1_hover.png" alt="" class="img1 img-responsive">
                <img src="images/why1.png" alt="" class="img2 img-responsive">
              </figure>
              <div class="caption">
                <div class="txt1">Amazing Travel</div>
                <div class="txt2">We offer a complete range of superior world class travel services..</div>
                <div class="txt3">Read More</div>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="thumb2 animated" data-animation="flipInY" data-animation-delay="300">
          <div class="thumbnail clearfix">
            <a href="about.php">
              <figure class="">
                <img src="images/why2_hover (1).png" alt="" class="img1 img-responsive">
                <img src="images/why2.png" alt="" class="img2 img-responsive">
              </figure>
              <div class="caption">
                <div class="txt1">Get a Customized plan</div>
                <div class="txt2">Our expert will map out your entire trip, with insider recommendations about
                  where to go, what to do, how to get around and where to stay.</div>
                <div class="txt3">Read More</div>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="thumb2 animated" data-animation="flipInY" data-animation-delay="400">
          <div class="thumbnail clearfix">
            <a href="flights.php">
              <figure class="">
                <img src="images/why3_hover.png" alt="" class="img1 img-responsive">
                <img src="images/why3.png" alt="" class="img2 img-responsive">
              </figure>
              <div class="caption">
                <div class="txt1">Book Your Trip</div>
                <div class="txt2"> We also assure you that our
                  fares are competitive so that you get the cheapest rate for the tickets you purchase.</div>
                <div class="txt3">Book Now</div>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="thumb2 animated" data-animation="flipInY" data-animation-delay="500">
          <div class="thumbnail clearfix">
            <a href="#">
              <figure class="">
                <img src="images/why4_hover.png" alt="" class="img1 img-responsive">
                <img src="images/why4.png" alt="" class="img2 img-responsive">
              </figure>
              <div class="caption">
                <div class="txt1">Chat with us</div>
                <div class="txt2">We are confident that you will be
                  satisfied with our superior, friendly and reliable customer service. </div>
                <div class="txt3">Start Chatting</div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div id="happy1">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-6 col-md-push-6">
        <div class="content">
          <div class="txt1 animated" data-animation="fadeIn" data-animation-delay="100">CUSTOMERS' TESTIMONIAL</div>
          <div class="txt2 animated" data-animation="fadeIn" data-animation-delay="150">Our customers are
            happy... </div>
          <div class="txt3 animated" data-animation="fadeIn" data-animation-delay="200">

            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

              <!-- Wrapper for slides -->
              <div class="carousel-inner">

                <div class="item active">
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="thumbnail adjust1">
                        <div class="col-md-10 col-sm-10 col-xs-12">
                          <div class="caption">
                            <p>St. clare provides the best travel service. I don't regret being their customer</p>
                            <blockquote class="adjust2">
                              <p>Alex Ekubo</p>
                            </blockquote>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="thumbnail adjust1">
                        <div class="col-md-10 col-sm-10 col-xs-12">
                          <div class="caption">
                            <p>Quick response</p>
                            <blockquote class="adjust2">
                              <p>Enitan Adams</p>
                            </blockquote>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Controls -->
              <!-- <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span>
              </a> -->
            </div>

          </div>

          <div class="distance1 animated" data-animation="fadeInUp" data-animation-delay="0">
            <div class="txt">Flight Bookings</div>
            <div class="bg">
              <div class="animated-distance" data-num="94" data-duration="1300" data-animation-delay="0"><span></span></div>
            </div>
          </div>

          <div class="distance1 animated" data-animation="fadeInUp" data-animation-delay="100">
            <div class="txt">Hotel Bookings</div>
            <div class="bg">
              <div class="animated-distance" data-num="70" data-duration="1300" data-animation-delay="100"><span></span></div>
            </div>
          </div>
          <div class="distance1 animated" data-animation="fadeInUp" data-animation-delay="100">
            <div class="txt">Ticketing & Reservations</div>
            <div class="bg">
              <div class="animated-distance" data-num="67" data-duration="1300" data-animation-delay="100"><span></span></div>
            </div>
          </div>
          <div class="distance1 animated" data-animation="fadeInUp" data-animation-delay="100">
            <div class="txt">Packaged Tours</div>
            <div class="bg">
              <div class="animated-distance" data-num="87" data-duration="1300" data-animation-delay="100"><span></span></div>
            </div>
          </div>

        </div>
      </div>
      <div class="col-sm-12 col-md-6 col-md-pull-6 animated" data-animation="fadeInLeft" data-animation-delay="200">
        <img src="images/happy.png" alt="" class="img1 img-responsive">
      </div>
    </div>
  </div>
</div>

<div id="partners">
  <div class="container">
    <h2><span>Our Partners</span></h2>
    <section class="customer-logos slider">
      <div class="slide"><img class="img-fluid img-responsive" src="images/partners/iata.jpg"></div>
      <div class="slide"><img class="img-fluid img-responsive" src="images/partners/NANTA.png"></div>
      <div class="slide"><img class="img-fluid img-responsive" src="images/partners/aero.gif"></div>
      <div class="slide"><img class="img-fluid img-responsive" src="images/partners/airpeace.jpg"></div>
      <div class="slide"><img class="img-fluid img-responsive" src="images/partners/arik.png"></div>
      <div class="slide"><img class="img-fluid img-responsive" src="images/partners/dana.png"></div>
      <div class="slide"><img class="img-fluid img-responsive" src="images/partners/med-view.png"></div>
      <div class="slide"><img class="img-fluid img-responsive" src="images/partners/overland.jpg"></div>
    </section>
  </div>
</div>



<script>
  var timer = 10000;

  var i = 0;
  var max = $('#c > li').length;

  $("#c > li").eq(i).addClass('active').css('left', '0');
  $("#c > li").eq(i + 1).addClass('active').css('left', '25%');
  $("#c > li").eq(i + 2).addClass('active').css('left', '50%');
  $("#c > li").eq(i + 3).addClass('active').css('left', '75%');


  setInterval(function () {

    $("#c > li").removeClass('active');

    $("#c > li").eq(i).css('transition-delay', '0.25s');
    $("#c > li").eq(i + 1).css('transition-delay', '0.5s');
    $("#c > li").eq(i + 2).css('transition-delay', '0.75s');
    $("#c > li").eq(i + 3).css('transition-delay', '1s');

    if (i < max - 4) {
      i = i + 4;
    }

    else {
      i = 0;
    }

    $("#c > li").eq(i).css('left', '0').addClass('active').css('transition-delay', '1.25s');
    $("#c > li").eq(i + 1).css('left', '25%').addClass('active').css('transition-delay', '1.5s');
    $("#c > li").eq(i + 2).css('left', '50%').addClass('active').css('transition-delay', '1.75s');
    $("#c > li").eq(i + 3).css('left', '75%').addClass('active').css('transition-delay', '2s');

  }, timer);

</script>
<script>
  $(document).ready(function () {
    $('.customer-logos').slick({
      slidesToShow: 6,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 1500,
      arrows: false,
      dots: false,
      pauseOnHover: false,
      responsive: [{
        breakpoint: 768,
        settings: {
          slidesToShow: 4
        }
      }, {
        breakpoint: 520,
        settings: {
          slidesToShow: 3
        }
      }]
    });
  });
</script>
<script src="js/bootstrap.min.js"></script>
<?php include('footer.php') ?>