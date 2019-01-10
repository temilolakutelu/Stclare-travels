<?php include('header.php')?>

<div class="not-front page-flight">
  <div class="page_banner"></div>

  <div class="breadcrumbs1_wrapper">
    <div class="container">
      <div class="breadcrumbs1"><a href="index.php">Home</a><span>/</span>Flights</div>
    </div>
  </div>


  <div id="content">
    <div class="container">

      <div class="tabs_wrapper tabs1_wrapper">
        <div class="tabs tabs2">
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
              <div class="row">
                <div class="col-sm-3">

                  <form action="javascript:;" class="form2 form2_flights">
                    <div class="select1_wrapper clearfix">
                      <label>Passenger:</label>
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
                  </form>

                  <ul class="ul3">
                    <li><a href="#">Price Range</a></li>
                  </ul>
                  <div class="star_rating_wrapper">
                    <div class="half">

                      <div class="acc">

                        <input id="acc-one" type="checkbox" name="tabs">
                        <label id="accord" for="acc-one">Flight stops</label>
                        <div class="acc-content">
                          <form>
                            <div>
                              <input id="checkbox-1" class="checkbox1-custom" name="checkbox-1" type="checkbox" checked>
                              <label for="checkbox-1" class="checkbox1-custom-label"><span>nonstop</span></label>
                            </div>
                            <div>
                              <input id="checkbox-2" class="checkbox1-custom" name="checkbox-2" type="checkbox">
                              <label for="checkbox-2" class="checkbox1-custom-label"><span>1 Stop</span></label>
                            </div>
                            <div>
                              <input id="checkbox-3" class="checkbox1-custom" name="checkbox-3" type="checkbox">
                              <label for="checkbox-3" class="checkbox1-custom-label"><span>2+ Stops</span></label>
                            </div>
                          </form>
                        </div>
                      </div>

                    </div>
                  </div>
                  <div class="sm_slider sm_slider1">
                    <a class="sm_slider_prev" href="#"></a>
                    <a class="sm_slider_next" href="#"></a>
                    <div class="">
                      <div class="carousel-box">
                        <div class="inner">
                          <div class="carousel main">
                            <ul>
                              <li>
                                <div class="sm_slider_inner">
                                  <div class="txt1">Quick response.</div>
                                  <div class="txt2">Enitsan Philip</div>
                                </div>
                              </li>
                              <li>
                                <div class="sm_slider_inner">
                                  <div class="txt1">Highly effective and reliable services.</div>
                                  <div class="txt2">Tayo Faleti</div>
                                </div>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>


                </div>
                <div class="col-sm-9">

                  <form action="javascript:;" class="form3 clearfix">
                    <div class="select1_wrapper txt">
                      <label>Sort by:</label>
                    </div>
                    <div class="select1_wrapper sel">
                      <div class="select1_inner">
                        <select class="select2 select" style="width: 100%">
                          <option value="1">Name</option>
                          <option value="2">Emirates</option>
                          <option value="2">Turkish Airline</option>
                        </select>
                      </div>
                    </div>
                    <div class="select1_wrapper sel">
                      <div class="select1_inner">
                        <select class="select2 select" style="width: 100%">
                          <option value="1">Price</option>
                          <option value="2">N200,000</option>
                          <option value="2">N1,000,000</option>
                        </select>
                      </div>
                    </div>
                  </form>

                  <div class="row">
                    <div class="col-sm-4">
                      <div class="thumb4">
                        <div class="thumbnail clearfix">
                          <figure>
                            <img src="images/flights/flights04.jpg" alt="" class="img-responsive">
                          </figure>
                          <div class="caption">
                            <div class="txt1">Lagos - Zurich</div>
                            <div class="txt3 clearfix">
                              <div class="left_side">
                                <div class="price">₦250,000</div>
                                <div class="nums">avg/person</div>
                              </div>
                              <div class="right_side"><a href="search-flights.php" class="btn-default btn1">Book Now</a></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="thumb4">
                        <div class="thumbnail clearfix">
                          <figure>
                            <img src="images/flights/flights05.jpg" alt="" class="img-responsive">
                          </figure>
                          <div class="caption">
                            <div class="txt1">Lagos-Ibadan</div>
                            <div class="txt3 clearfix">
                              <div class="left_side">
                                <div class="price">₦10,000</div>
                                <div class="nums">avg/person</div>
                              </div>
                              <div class="right_side"><a href="search-flights.php" class="btn-default btn1">Book Now</a></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="thumb4">
                        <div class="thumbnail clearfix">
                          <figure>
                            <img src="images/flights/flights06.jpg" alt="" class="img-responsive">
                          </figure>
                          <div class="caption">
                            <div class="txt1">Lagos - Port-Harcourt</div>
                            <div class="txt3 clearfix">
                              <div class="left_side">
                                <div class="price">₦30,000</div>
                                <div class="nums">avg/person</div>
                              </div>
                              <div class="right_side"><a href="search-flights.php" class="btn-default btn1">Book Now</a></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="hl1"></div>

                  <div class="row">
                    <div class="col-sm-4">
                      <div class="thumb4">
                        <div class="thumbnail clearfix">
                          <figure>
                            <img src="images/flights/flights01.jpg" alt="" class="img-responsive">
                          </figure>
                          <div class="caption">
                            <div class="txt1">Lagos- Moscow</div>
                            <div class="txt3 clearfix">
                              <div class="left_side">
                                <div class="price">₦120,000</div>
                                <div class="nums">avg/person</div>
                              </div>
                              <div class="right_side"><a href="search-flights.php" class="btn-default btn1">Book Now</a></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="thumb4">
                        <div class="thumbnail clearfix">
                          <figure>
                            <img src="images/flights/flights02.jpg" alt="" class="img-responsive">
                          </figure>
                          <div class="caption">
                            <div class="txt1">Abuja- Port-Harcourt</div>
                            <div class="txt3 clearfix">
                              <div class="left_side">
                                <div class="price">₦20,000</div>
                                <div class="nums">avg/person</div>
                              </div>
                              <div class="right_side"><a href="search-flights.php" class="btn-default btn1">Book Now</a></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="thumb4">
                        <div class="thumbnail clearfix">
                          <figure>
                            <img src="images/flights/flights08.jpg" alt="" class="img-responsive">
                          </figure>
                          <div class="caption">
                            <div class="txt1">Lagos-Ghana</div>
                            <div class="txt3 clearfix">
                              <div class="left_side">
                                <div class="price">₦50,000</div>
                                <div class="nums">avg/person</div>
                              </div>
                              <div class="right_side"><a href="search-flights.php" class="btn-default btn1">Book Now</a></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="hl1"></div>

                  <div class="pager_wrapper">
                    <ul class="pager clearfix">
                      <li class="prev"><a href="#">Previous</a></li>
                      <li class="li"><a href="#">1</a></li>
                      <li class="active"><a href="#">2</a></li>
                      <li class="li"><a href="#">3</a></li>
                      <li class="li"><a href="#">4</a></li>
                      <li class="next"><a href="#">Next</a></li>
                    </ul>
                  </div>


                </div>
              </div>
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
                          <option value="2">Lagos Island</option>
                          <option value="3">Ibadan</option>
                          <option value="4">Sheraton Hotel</option>
                          <option value="8">Oriental Hotel</option>
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
              <div class="row">
                <div class="col-sm-3">

                  <form action="javascript:;" class="form2 form2_hotels">
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="select1_wrapper clearfix">
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
                      <div class="col-sm-6">
                        <div class="select1_wrapper clearfix">
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
                    </div>
                  </form>

                  <ul class="ul3">
                    <li><a href="#">Star Rating</a></li>
                    <li><a href="#">Price Range</a></li>
                    <li><a href="#">Trip Duration</a></li>
                  </ul>

                  <div class="star_rating_wrapper">
                    <div class="title">Star Rating</div>
                    <div class="content">
                      <div class="star_rating">
                        <form>
                          <div>
                            <input id="checkbox-1" class="checkbox1-custom" name="checkbox-1" type="checkbox" checked>
                            <label for="checkbox-1" class="checkbox1-custom-label"><img src="images/star1.png" alt=""><img
                                src="images/star1.png" alt=""><img src="images/star1.png" alt=""><img src="images/star1.png"
                                alt=""><img src="images/star1.png" alt=""><span>5
                                Stars</span></label>
                          </div>
                          <div>
                            <input id="checkbox-2" class="checkbox1-custom" name="checkbox-2" type="checkbox">
                            <label for="checkbox-2" class="checkbox1-custom-label"><img src="images/star1.png" alt=""><img
                                src="images/star1.png" alt=""><img src="images/star1.png" alt=""><img src="images/star1.png"
                                alt=""><img src="images/star2.png" alt=""><span>4
                                Stars</span></label>
                          </div>
                          <div>
                            <input id="checkbox-3" class="checkbox1-custom" name="checkbox-3" type="checkbox" checked>
                            <label for="checkbox-3" class="checkbox1-custom-label"><img src="images/star1.png" alt=""><img
                                src="images/star1.png" alt=""><img src="images/star1.png" alt=""><img src="images/star2.png"
                                alt=""><img src="images/star2.png" alt=""><span>3
                                Stars</span></label>
                          </div>
                          <div>
                            <input id="checkbox-4" class="checkbox1-custom" name="checkbox-4" type="checkbox">
                            <label for="checkbox-4" class="checkbox1-custom-label"><img src="images/star1.png" alt=""><img
                                src="images/star1.png" alt=""><img src="images/star2.png" alt=""><img src="images/star2.png"
                                alt=""><img src="images/star2.png" alt=""><span>2
                                Stars</span></label>
                          </div>
                          <div>
                            <input id="checkbox-5" class="checkbox1-custom" name="checkbox-5" type="checkbox">
                            <label for="checkbox-5" class="checkbox1-custom-label"><img src="images/star1.png" alt=""><img
                                src="images/star2.png" alt=""><img src="images/star2.png" alt=""><img src="images/star2.png"
                                alt=""><img src="images/star2.png" alt=""><span>1
                                Stars</span></label>
                          </div>

                        </form>
                      </div>
                    </div>
                  </div>

                  <div class="sm_slider sm_slider2">
                    <a class="sm_slider_prev" href="#"></a>
                    <a class="sm_slider_next" href="#"></a>
                    <div class="">
                      <div class="carousel-box">
                        <div class="inner">
                          <div class="carousel main">
                            <ul>
                              <li>
                                <div class="sm_slider_inner">
                                  <div class="txt1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                    nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut
                                    wisi
                                    enim ad minim veniam.</div>
                                  <div class="txt2">Adams Oshiomole</div>
                                </div>
                              </li>
                              <li>
                                <div class="sm_slider_inner">
                                  <div class="txt1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                    nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut
                                    wisi
                                    enim ad minim veniam.</div>
                                  <div class="txt2">Mercy Aligbe</div>
                                </div>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-9">

                  <form action="javascript:;" class="form3 clearfix">
                    <div class="select1_wrapper txt">
                      <label>Sort by:</label>
                    </div>
                    <div class="select1_wrapper sel">
                      <div class="select1_inner">
                        <select class="select2 select" style="width: 100%">
                          <option value="1">Name</option>
                          <option value="2">Sheraton Hotel</option>
                          <option value="2">Oriental Hotel</option>
                        </select>
                      </div>
                    </div>
                    <div class="select1_wrapper sel">
                      <div class="select1_inner">
                        <select class="select2 select" style="width: 100%">
                          <option value="1">Price</option>
                          <option value="2">₦7,000</option>
                          <option value="2">₦10,000</option>
                        </select>
                      </div>
                    </div>
                    <div class="select1_wrapper sel">
                      <div class="select1_inner">
                        <select class="select2 select" style="width: 100%">
                          <option value="1">Rating</option>
                          <option value="2">Rating2</option>
                          <option value="2">Rating3</option>
                        </select>
                      </div>
                    </div>
                  </form>

                  <div class="row">
                    <div class="col-sm-4">
                      <div class="thumb5">
                        <div class="thumbnail clearfix">
                          <figure>
                            <img src="images/hotel/grittal.jpg" alt="" class="img-responsive">
                            <div class="over">
                              <div class="v1">Grittale Hotel <span>6.9 Review score</span></div>
                              <div class="v2">Twin / Double Room</div>
                            </div>
                          </figure>
                          <div class="caption">
                            <div class="txt1">Grittale Hotel</div>
                            <div class="txt2">Twin / Double Room</div>
                            <div class="txt3 clearfix">
                              <div class="left_side">
                                <div class="price">₦25,000</div>
                                <div class="stars2">
                                  <img src="images/star1.png" alt="">
                                  <img src="images/star1.png" alt="">
                                  <img src="images/star1.png" alt="">
                                  <img src="images/star1.png" alt="">
                                  <img src="images/star3.png" alt="">
                                </div>
                              </div>
                              <div class="right_side"><a href="search-hotel.php" class="btn-default btn1">Book Now</a></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="thumb5">
                        <div class="thumbnail clearfix">
                          <figure>
                            <img src="images/hotel/hardcore.jpg" alt="" class="img-responsive">
                            <div class="over">
                              <div class="v1">Hardcore Hotel <span>6.9 Review score</span></div>
                              <div class="v2">Exotic Room</div>
                            </div>
                          </figure>
                          <div class="caption">
                            <div class="txt1">Hardcore Hotel</div>
                            <div class="txt2">Exotic Room</div>
                            <div class="txt3 clearfix">
                              <div class="left_side">
                                <div class="price">₦34,900</div>
                                <div class="stars2">
                                  <img src="images/star1.png" alt="">
                                  <img src="images/star1.png" alt="">
                                  <img src="images/star1.png" alt="">
                                  <img src="images/star1.png" alt="">
                                  <img src="images/star3.png" alt="">
                                </div>
                              </div>
                              <div class="right_side"><a href="search-hotel.php" class="btn-default btn1">Book Now</a></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="thumb5">
                        <div class="thumbnail clearfix">
                          <figure>
                            <img src="images/hotel/hilton.jpg" alt="" class="img-responsive">
                            <div class="over">
                              <div class="v1">Hilton Hotel <span>6.9 Review score</span></div>
                              <div class="v2">Single Room</div>
                            </div>
                          </figure>
                          <div class="caption">
                            <div class="txt1">Chambiges Elysees</div>
                            <div class="txt2">Single Room</div>
                            <div class="txt3 clearfix">
                              <div class="left_side">
                                <div class="price">₦36,000</div>
                                <div class="stars2">
                                  <img src="images/star1.png" alt="">
                                  <img src="images/star1.png" alt="">
                                  <img src="images/star1.png" alt="">
                                  <img src="images/star1.png" alt="">
                                  <img src="images/star3.png" alt="">
                                </div>
                              </div>
                              <div class="right_side"><a href="search-hotel.php" class="btn-default btn1">Book Now</a></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="hl1"></div>

                  <div class="row">
                    <div class="col-sm-4">
                      <div class="thumb5">
                        <div class="thumbnail clearfix">
                          <figure>
                            <img src="images/hotel/lagos avenida.jpg" alt="" class="img-responsive">
                            <div class="over">
                              <div class="v1">Lagos Avenida Hotel <span>6.9 Review score</span></div>
                              <div class="v2">Honeymoon Suite</div>
                            </div>
                          </figure>
                          <div class="caption">
                            <div class="txt1">Lagos Avenida Hotel</div>
                            <div class="txt2">Honeymoon Suite</div>
                            <div class="txt3 clearfix">
                              <div class="left_side">
                                <div class="price">₦75,000</div>
                                <div class="stars2">
                                  <img src="images/star1.png" alt="">
                                  <img src="images/star1.png" alt="">
                                  <img src="images/star1.png" alt="">
                                  <img src="images/star1.png" alt="">
                                  <img src="images/star3.png" alt="">
                                </div>
                              </div>
                              <div class="right_side"><a href="search-hotel.php" class="btn-default btn1">Book Now</a></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="thumb5">
                        <div class="thumbnail clearfix">
                          <figure>
                            <img src="images/hotel/piladephia.jpg" alt="" class="img-responsive">
                            <div class="over">
                              <div class="v1">Piladephia Hotel <span>6.9 Review score</span></div>
                              <div class="v2">Twin / Double Room</div>
                            </div>
                          </figure>
                          <div class="caption">
                            <div class="txt1">Piladephia Hotel</div>
                            <div class="txt2">Twin / Double Room</div>
                            <div class="txt3 clearfix">
                              <div class="left_side">
                                <div class="price">₦6,500</div>
                                <div class="stars2">
                                  <img src="images/star1.png" alt="">
                                  <img src="images/star1.png" alt="">
                                  <img src="images/star1.png" alt="">
                                  <img src="images/star1.png" alt="">
                                  <img src="images/star3.png" alt="">
                                </div>
                              </div>
                              <div class="right_side"><a href="search-hotel.php" class="btn-default btn1">Book Now</a></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="hl1"></div>


                  <div class="pager_wrapper">
                    <ul class="pager clearfix">
                      <li class="prev"><a href="#">Previous</a></li>
                      <li class="li"><a href="#">1</a></li>
                      <li class="active"><a href="#">2</a></li>
                      <li class="li"><a href="#">3</a></li>
                      <li class="next"><a href="#">Next</a></li>
                    </ul>
                  </div>


                </div>
              </div>
            </div>


          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<?php include('footer.php')?>