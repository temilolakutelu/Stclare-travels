<?php include('header.php')?>

<div class="breadcrumbs1_wrapper">
    <div class="container">
        <div class="breadcrumbs1"><a href="index.php">Home</a><span>/</span>Booking</div>
    </div>
</div>



<div id="content" class="booking">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="bs-wizard" style="border-bottom:0;">
                    <div class="col-xs-4 bs-wizard-step active">
                        <div class="progress">
                            <div class="progress-bar"></div>
                        </div>
                        <a href="#" class="bs-wizard-dot" id="dot1"></a>
                        <div class="bs-wizard-info text-center">Additional Info.</div>
                    </div>
                    <div class="col-xs-4 bs-wizard-step disabled">
                        <!-- complete -->
                        <div class="progress">
                            <div class="progress-bar"></div>
                        </div>
                        <a href="#" class="bs-wizard-dot"></a>
                        <div class="bs-wizard-info text-center">Payment Methods</div>
                    </div>
                    <div class="col-xs-4 bs-wizard-step disabled">
                        <!-- active -->
                        <div class="progress">
                            <div class="progress-bar"></div>
                        </div>
                        <a href="#" class="bs-wizard-dot"></a>
                        <div class="bs-wizard-info text-center">Booking Confirmation</div>
                    </div>
                </div>
            </div>
            <div class="sidebar col-md-3 hidden-xs hidden-sm">
                <article class="detailed-logo">
                    <figure>
                        <img src="images/flights/flights01.jpg" alt="">
                    </figure>
                    <div class="details">
                        <h2 class="box-title">Lagos to Johannesburg
                            <small>ROUND TRIP FLIGHT</small>

                        </h2>
                        <span class="price clearfix">
                            <small class="pull-left">Adult X 1</small>
                            <span class="pull-right">107,978</span>
                        </span>
                        <span class="price clearfix">
                            <small class="pull-left">Adult Taxes and Fees</small>
                            <span class="pull-right">139,572</span>
                        </span>
                        <span class="price clearfix">
                            <small class="pull-left" style="font-size: 0.7em; font-weight: bold">Total Price</small>
                            <span class="pull-right">247,550</span>
                        </span>
                    </div>
                </article>
                <div class="travelo-box contact-box hidden-xs hidden-sm">
                    <h4>Need Our Help?</h4>
                    <p>We would be more than happy to help you. Our team advisor are always at your service to help
                        you.</p>
                    <address class="contact-details">
                        <span class="contact-phone"><i class="soap-icon-phone"></i>08023702712</span>
                        <br>
                        <a class="contact-email" href="#">info@stclaretravels-ng.com</a>
                    </address>
                </div>
            </div>
            <style>
                .toggle-container .panel.style1 .panel-title > a::before {
                    display: none;
                }
            </style>
            <div class="col-sm-12 col-xs-12 col-md-9">
                <div class="toggle-container box" id="accordion1">

                    <div class="panel style1">
                        <h4 class="panel-title">
                            <a class="collapsed " id="travellerInfoAccordionRef" href="#travellerInfoAccordion"
                                data-toggle="collapse" data-parent="#accordion1">
                                <strong>TRAVELLER'S INFORMATION</strong></a>
                        </h4>
                        <div class="panel-collapse collapse in accordionRef" id="travellerInfoAccordion">
                            <div class="panel-content" style="padding-left: 20px">
                                <div class="booking-section travelo-box" style="padding-bottom:15px;padding-top: 0">
                                    <div id="errorDiv" class="alert text-left alert-error hide">
                                        <span id="errorText"></span>
                                        <span class="close"></span>
                                    </div>
                                    <form id="travellerDetailForm" class="booking-form" method="post" action="">
                                        <input type="hidden" name="bookingSequenceId" value="2387UeyqbyZc">
                                        <div class="card-information">
                                            <h2>
                                                <strong>First Adult
                                                    <span style="color: red">(Primary Contact)</span>
                                                </strong>
                                            </h2>
                                            <div class="row form-group">
                                                <div class="col-sms-6 col-xs-12 col-sm-12 col-md-4">
                                                    <label class="required-r">First Name</label>
                                                    <input type="text" value="" name="adult1firstName" id="adult1firstName"
                                                        class="form-control" placeholder="First Name" required=""
                                                        onclick="hideInformationMessage('personalDetailInfoDiv')">
                                                </div>
                                                <div class="col-md-4 hidden-sm hidden-xs">
                                                    <label class="">Middle/Other name</label>
                                                    <input type="text" value="" name="adult1middleName" id="adult1middleName"
                                                        class="form-control" placeholder="Other name" onclick="hideInformationMessage('personalDetailInfoDiv')">
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-4">
                                                    <label class="required-r">Surname</label>
                                                    <input type="text" value="" name="adult1lastName" id="adult1lastName"
                                                        class="form-control" placeholder="Last Name" required=""
                                                        onclick="hideInformationMessage('personalDetailInfoDiv')">
                                                </div>

                                            </div>
                                            <div class="row form-group">
                                                <div class="col-sms-6 col-sm-6">
                                                    <label class="required-r">Title</label>

                                                    <select class="form-control" required="" name="adult1title" id="adult1title"
                                                        onclick="hideInformationMessage('contactDetailInfoDiv')">

                                                        <option value="MR">MR</option>
                                                        <option value="MRS">MRS</option>
                                                        <option value="MISS">MISS</option>
                                                    </select>

                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-md-6">
                                                    <label class="required-r">Date Of Birth</label>
                                                    <div class="input-group date adultDate">
                                                        <input type="text" autocomplete="off" class="form-control adultDate"
                                                            value="" placeholder="DD/MM/YYYY" required="" name="adult1DOB"
                                                            fieldid="adult1:18:80" id="adult1">
                                                        <span class="input-group-addon adult-calendar-button">
                                                            <span class="glyphicon glyphicon-calendar"></span>
                                                        </span>
                                                    </div>
                                                    <span id="adult1Error" class="hide" style="color:red"><strong>Invalid
                                                            date of birth for an adult.</strong></span>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-sms-6 col-xs-12 col-sm-6 col-md-6">
                                                    <label class="required-r">Email Address</label>
                                                    <input type="text" name="emailAddress" id="contact_emailAddress"
                                                        class="form-control" placeholder="Email Address" required=""
                                                        value="" onclick="hideInformationMessage('personalDetailInfoDiv')">
                                                </div>
                                                <label class="col-xs-4 col-sm-4 col-md-3 required-r" style="margin-bottom:3px;">Phone
                                                    Code </label>
                                                <label class="col-xs-4 col-sm-4 col-md-3 required-r" style="margin-bottom:3px;">Phone
                                                    Number </label>
                                                <div class="col-xs-4 col-sm-4 col-md-3">
                                                    <select class="form-control" name="countryCode" id="countryCode"
                                                        required="" placeholder="country-code">
                                                        <option value="" disabled="" selected=""></option>
                                                        <option value=""></option>
                                                        <option value="AF">Afghanistan (93)</option>
                                                        <option value="AX">Aland Islands (+358-18)</option>
                                                        <option value="AL">Albania (355)</option>
                                                        <option value="DZ">Algeria (213)</option>
                                                        <option value="AS">American Samoa (+1-684)</option>
                                                        <option value="AD">Andorra (376)</option>
                                                        <option value="AO">Angola (244)</option>
                                                        <option value="AI">Anguilla (+1-264)</option>
                                                        <option value="AQ">Antarctica ()</option>
                                                        <option value="AG">Antigua and Barbuda (+1-268)</option>
                                                        <option value="AR">Argentina (54)</option>
                                                        <option value="AM">Armenia (374)</option>
                                                        <option value="AW">Aruba (297)</option>
                                                        <option value="AU">Australia (61)</option>
                                                        <option value="AT">Austria (43)</option>
                                                        <option value="AZ">Azerbaijan (994)</option>
                                                        <option value="BS">Bahamas (+1-242)</option>
                                                        <option value="BH">Bahrain (973)</option>
                                                        <option value="BD">Bangladesh (880)</option>
                                                        <option value="BB">Barbados (+1-246)</option>
                                                        <option value="BY">Belarus (375)</option>
                                                        <option value="BE">Belgium (32)</option>
                                                        <option value="BZ">Belize (501)</option>
                                                        <option value="BJ">Benin (229)</option>
                                                        <option value="BM">Bermuda (+1-441)</option>
                                                        <option value="BT">Bhutan (975)</option>
                                                        <option value="BO">Bolivia (591)</option>
                                                        <option value="BQ">Bonaire, Saint Eustatius and Saba (599)</option>
                                                        <option value="BA">Bosnia and Herzegovina (387)</option>
                                                        <option value="BW">Botswana (267)</option>
                                                        <option value="BV">Bouvet Island ()</option>
                                                        <option value="BR">Brazil (55)</option>
                                                        <option value="IO">British Indian Ocean Territory (246)</option>
                                                        <option value="VG">British Virgin Islands (+1-284)</option>
                                                        <option value="BN">Brunei (673)</option>
                                                        <option value="BG">Bulgaria (359)</option>
                                                        <option value="BF">Burkina Faso (226)</option>
                                                        <option value="BI">Burundi (257)</option>
                                                        <option value="KH">Cambodia (855)</option>
                                                        <option value="CM">Cameroon (237)</option>
                                                        <option value="CA">Canada (1)</option>
                                                        <option value="CV">Cape Verde (238)</option>
                                                        <option value="KY">Cayman Islands (+1-345)</option>
                                                        <option value="CF">Central African Republic (236)</option>
                                                        <option value="TD">Chad (235)</option>
                                                        <option value="CL">Chile (56)</option>
                                                        <option value="CN">China (86)</option>
                                                        <option value="CX">Christmas Island (61)</option>
                                                        <option value="CC">Cocos Islands (61)</option>
                                                        <option value="CO">Colombia (57)</option>
                                                        <option value="KM">Comoros (269)</option>
                                                        <option value="CK">Cook Islands (682)</option>
                                                        <option value="CR">Costa Rica (506)</option>
                                                        <option value="HR">Croatia (385)</option>
                                                        <option value="CU">Cuba (53)</option>
                                                        <option value="CW">CuraÃ§ao (599)</option>
                                                        <option value="CY">Cyprus (357)</option>
                                                        <option value="CZ">Czech Republic (420)</option>
                                                        <option value="CD">Democratic Republic of the Congo (243)</option>
                                                        <option value="DK">Denmark (45)</option>
                                                        <option value="DJ">Djibouti (253)</option>
                                                        <option value="DM">Dominica (+1-767)</option>
                                                        <option value="DO">Dominican Republic (+1-809 and 1-829)</option>
                                                        <option value="TL">East Timor (670)</option>
                                                        <option value="EC">Ecuador (593)</option>
                                                        <option value="EG">Egypt (20)</option>
                                                        <option value="SV">El Salvador (503)</option>
                                                        <option value="GQ">Equatorial Guinea (240)</option>
                                                        <option value="ER">Eritrea (291)</option>
                                                        <option value="EE">Estonia (372)</option>
                                                        <option value="ET">Ethiopia (251)</option>
                                                        <option value="FK">Falkland Islands (500)</option>
                                                        <option value="FO">Faroe Islands (298)</option>
                                                        <option value="FJ">Fiji (679)</option>
                                                        <option value="FI">Finland (358)</option>
                                                        <option value="FR">France (33)</option>
                                                        <option value="GF">French Guiana (594)</option>
                                                        <option value="PF">French Polynesia (689)</option>
                                                        <option value="TF">French Southern Territories ()</option>
                                                        <option value="GA">Gabon (241)</option>
                                                        <option value="GM">Gambia (220)</option>
                                                        <option value="GE">Georgia (995)</option>
                                                        <option value="DE">Germany (49)</option>
                                                        <option value="GH">Ghana (233)</option>
                                                        <option value="GI">Gibraltar (350)</option>
                                                        <option value="GR">Greece (30)</option>
                                                        <option value="GL">Greenland (299)</option>
                                                        <option value="GD">Grenada (+1-473)</option>
                                                        <option value="GP">Guadeloupe (590)</option>
                                                        <option value="GU">Guam (+1-671)</option>
                                                        <option value="GT">Guatemala (502)</option>
                                                        <option value="GG">Guernsey (+44-1481)</option>
                                                        <option value="GN">Guinea (224)</option>
                                                        <option value="GW">Guinea-Bissau (245)</option>
                                                        <option value="GY">Guyana (592)</option>
                                                        <option value="HT">Haiti (509)</option>
                                                        <option value="HM">Heard Island and McDonald Islands ( )</option>
                                                        <option value="HN">Honduras (504)</option>
                                                        <option value="HK">Hong Kong (852)</option>
                                                        <option value="HU">Hungary (36)</option>
                                                        <option value="IS">Iceland (354)</option>
                                                        <option value="IN">India (91)</option>
                                                        <option value="ID">Indonesia (62)</option>
                                                        <option value="IR">Iran (98)</option>
                                                        <option value="IQ">Iraq (964)</option>
                                                        <option value="IE">Ireland (353)</option>
                                                        <option value="IM">Isle of Man (+44-1624)</option>
                                                        <option value="IL">Israel (972)</option>
                                                        <option value="IT">Italy (39)</option>
                                                        <option value="CI">Ivory Coast (225)</option>
                                                        <option value="JM">Jamaica (+1-876)</option>
                                                        <option value="JP">Japan (81)</option>
                                                        <option value="JE">Jersey (+44-1534)</option>
                                                        <option value="JO">Jordan (962)</option>
                                                        <option value="KZ">Kazakhstan (7)</option>
                                                        <option value="KE">Kenya (254)</option>
                                                        <option value="KI">Kiribati (686)</option>
                                                        <option value="XK">Kosovo ()</option>
                                                        <option value="KW">Kuwait (965)</option>
                                                        <option value="KG">Kyrgyzstan (996)</option>
                                                        <option value="LA">Laos (856)</option>
                                                        <option value="LV">Latvia (371)</option>
                                                        <option value="LB">Lebanon (961)</option>
                                                        <option value="LS">Lesotho (266)</option>
                                                        <option value="LR">Liberia (231)</option>
                                                        <option value="LY">Libya (218)</option>
                                                        <option value="LI">Liechtenstein (423)</option>
                                                        <option value="LT">Lithuania (370)</option>
                                                        <option value="LU">Luxembourg (352)</option>
                                                        <option value="MO">Macao (853)</option>
                                                        <option value="MK">Macedonia (389)</option>
                                                        <option value="MG">Madagascar (261)</option>
                                                        <option value="MW">Malawi (265)</option>
                                                        <option value="MY">Malaysia (60)</option>
                                                        <option value="MV">Maldives (960)</option>
                                                        <option value="ML">Mali (223)</option>
                                                        <option value="MT">Malta (356)</option>
                                                        <option value="MH">Marshall Islands (692)</option>
                                                        <option value="MQ">Martinique (596)</option>
                                                        <option value="MR">Mauritania (222)</option>
                                                        <option value="MU">Mauritius (230)</option>
                                                        <option value="YT">Mayotte (262)</option>
                                                        <option value="MX">Mexico (52)</option>
                                                        <option value="FM">Micronesia (691)</option>
                                                        <option value="MD">Moldova (373)</option>
                                                        <option value="MC">Monaco (377)</option>
                                                        <option value="MN">Mongolia (976)</option>
                                                        <option value="ME">Montenegro (382)</option>
                                                        <option value="MS">Montserrat (+1-664)</option>
                                                        <option value="MA">Morocco (212)</option>
                                                        <option value="MZ">Mozambique (258)</option>
                                                        <option value="MM">Myanmar (95)</option>
                                                        <option value="NA">Namibia (264)</option>
                                                        <option value="NR">Nauru (674)</option>
                                                        <option value="NP">Nepal (977)</option>
                                                        <option value="NL">Netherlands (31)</option>
                                                        <option value="AN">Netherlands Antilles (599)</option>
                                                        <option value="NC">New Caledonia (687)</option>
                                                        <option value="NZ">New Zealand (64)</option>
                                                        <option value="NI">Nicaragua (505)</option>
                                                        <option value="NE">Niger (227)</option>
                                                        <option selected="" value="NG">NIGERIA (234)</option>
                                                        <option value="NU">Niue (683)</option>
                                                        <option value="NF">Norfolk Island (672)</option>
                                                        <option value="MP">Northern Mariana Islands (+1-670)</option>
                                                        <option value="KP">North Korea (850)</option>
                                                        <option value="NO">Norway (47)</option>
                                                        <option value="OM">Oman (968)</option>
                                                        <option value="PK">Pakistan (92)</option>
                                                        <option value="PW">Palau (680)</option>
                                                        <option value="PS">Palestinian Territory (970)</option>
                                                        <option value="PA">Panama (507)</option>
                                                        <option value="PG">Papua New Guinea (675)</option>
                                                        <option value="PY">Paraguay (595)</option>
                                                        <option value="PE">Peru (51)</option>
                                                        <option value="PH">Philippines (63)</option>
                                                        <option value="PN">Pitcairn (870)</option>
                                                        <option value="PL">Poland (48)</option>
                                                        <option value="PT">Portugal (351)</option>
                                                        <option value="PR">Puerto Rico (+1-787 and 1-939)</option>
                                                        <option value="QA">Qatar (974)</option>
                                                        <option value="CG">Republic of the Congo (242)</option>
                                                        <option value="RE">Reunion (262)</option>
                                                        <option value="RO">Romania (40)</option>
                                                        <option value="RU">Russia (7)</option>
                                                        <option value="RW">Rwanda (250)</option>
                                                        <option value="BL">Saint BarthÃ©lemy (590)</option>
                                                        <option value="SH">Saint Helena (290)</option>
                                                        <option value="KN">Saint Kitts and Nevis (+1-869)</option>
                                                        <option value="LC">Saint Lucia (+1-758)</option>
                                                        <option value="MF">Saint Martin (590)</option>
                                                        <option value="PM">Saint Pierre and Miquelon (508)</option>
                                                        <option value="VC">Saint Vincent and the Grenadines (+1-784)</option>
                                                        <option value="WS">Samoa (685)</option>
                                                        <option value="SM">San Marino (378)</option>
                                                        <option value="ST">Sao Tome and Principe (239)</option>
                                                        <option value="SA">Saudi Arabia (966)</option>
                                                        <option value="SN">Senegal (221)</option>
                                                        <option value="RS">Serbia (381)</option>
                                                        <option value="CS">Serbia and Montenegro (381)</option>
                                                        <option value="SC">Seychelles (248)</option>
                                                        <option value="SL">Sierra Leone (232)</option>
                                                        <option value="SG">Singapore (65)</option>
                                                        <option value="SX">Sint Maarten (599)</option>
                                                        <option value="SK">Slovakia (421)</option>
                                                        <option value="SI">Slovenia (386)</option>
                                                        <option value="SB">Solomon Islands (677)</option>
                                                        <option value="SO">Somalia (252)</option>
                                                        <option value="ZA">South Africa (27)</option>
                                                        <option value="GS">South Georgia and the South Sandwich Islands
                                                            ()</option>
                                                        <option value="KR">South Korea (82)</option>
                                                        <option value="SS">South Sudan (211)</option>
                                                        <option value="ES">Spain (34)</option>
                                                        <option value="LK">Sri Lanka (94)</option>
                                                        <option value="SD">Sudan (249)</option>
                                                        <option value="SR">Suriname (597)</option>
                                                        <option value="SJ">Svalbard and Jan Mayen (47)</option>
                                                        <option value="SZ">Swaziland (268)</option>
                                                        <option value="SE">Sweden (46)</option>
                                                        <option value="CH">Switzerland (41)</option>
                                                        <option value="SY">Syria (963)</option>
                                                        <option value="TW">Taiwan (886)</option>
                                                        <option value="TJ">Tajikistan (992)</option>
                                                        <option value="TZ">Tanzania (255)</option>
                                                        <option value="TH">Thailand (66)</option>
                                                        <option value="TG">Togo (228)</option>
                                                        <option value="TK">Tokelau (690)</option>
                                                        <option value="TO">Tonga (676)</option>
                                                        <option value="TT">Trinidad and Tobago (+1-868)</option>
                                                        <option value="TN">Tunisia (216)</option>
                                                        <option value="TR">Turkey (90)</option>
                                                        <option value="TM">Turkmenistan (993)</option>
                                                        <option value="TC">Turks and Caicos Islands (+1-649)</option>
                                                        <option value="TV">Tuvalu (688)</option>
                                                        <option value="UG">Uganda (256)</option>
                                                        <option value="UA">Ukraine (380)</option>
                                                        <option value="AE">United Arab Emirates (971)</option>
                                                        <option value="GB">United Kingdom (44)</option>
                                                        <option value="UM">United States Minor Outlying Islands (1)</option>
                                                        <option value="US">United States of America (1)</option>
                                                        <option value="UY">Uruguay (598)</option>
                                                        <option value="VI">U.S. Virgin Islands (+1-340)</option>
                                                        <option value="UZ">Uzbekistan (998)</option>
                                                        <option value="VU">Vanuatu (678)</option>
                                                        <option value="VA">Vatican (379)</option>
                                                        <option value="VE">Venezuela (58)</option>
                                                        <option value="VN">Vietnam (84)</option>
                                                        <option value="WF">Wallis and Futuna (681)</option>
                                                        <option value="EH">Western Sahara (212)</option>
                                                        <option value="YE">Yemen (967)</option>
                                                        <option value="ZM">Zambia (260)</option>
                                                        <option value="ZW">Zimbabwe (263)</option>
                                                    </select>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 col-md-3">
                                                    <input type="text" value="" required="" name="phoneNumber" id="phoneNumber"
                                                        class="form-control" placeholder="Enter phone number" onclick="hideInformationMessage('personalDetailInfoDiv')">
                                                </div>

                                            </div>
                                        </div>

                                        <hr>
                                        <div class="form-group">
                                            <div class="col-xs-12 col-sms-6 col-sm-8">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" id="termsAgreed" onclick="checkBoxClicked()">
                                                        By continuing, you agree to the <a href="" target="_blank"><span
                                                                class="skin-color">Terms and Conditions</span></a>.
                                                        <div id="termsNotCheckInfo" class="tb-red tb-bold hide" style="color:red">Please
                                                            kindly agree to our
                                                            terms of service to proceed to payment.
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sms-6 col-sm-4 ">
                                                <button type="submit" class="btn-medium pull-right" id="travellerDetailFormButton">
                                                    <span id="travellerInfoButtonText">CONTINUE </span> &nbsp;<i class="fa fa-arrow-right"
                                                        id="travellerInfoButtonIcon"></i></button>
                                            </div>
                                        </div>

                                    </form>
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