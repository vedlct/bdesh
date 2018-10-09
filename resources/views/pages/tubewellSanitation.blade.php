@extends('layout.mainLayout')
@section('content')

    <!-- Header Image or Video -->
    <section class="fly-header parallax overlay" style="background-image: url({{asset('public/images/temp/slide-12.jpg')}});">
        <div class="fly-header-content">
            <h1 id="projectTitle1" class="page-title" itemprop="title">Tube Well & Sanitation</h1>
        </div>
    </section>
    <!--/ Header Image or Video -->

    <!-- Page -->
    <div class="page-wrapper page-sidebar"><!-- TODO: additional classes are: .page-sidebar, .page-sidebar-left, .page-narrow -->
        <div class="container">
            <div class="row">
                <!-- Content -->
                <main itemprop="mainContentOfPage" itemscope itemtype="http://schema.org/WebPageElement" class="content">
                    <!-- Project Details -->
                    <article class="fly-article-details" itemscope itemtype="http://schema.org/DonateAction" itemref="projectTitle1">
                        <div class="post-media">
                            <!-- Thumbnail Slider -->
                            <div class="thumbnail-slider clearfix" data-height="500">
                                <div class="slider-images-wrap">
                                    <ul class="slider-images">
                                        <li>
                                            <img src="{{asset('public/images/current/thumb_img_1.png')}}" alt="" itemprop="image"/>

                                            <a class="swipebox" data-rel="gallery1" href="{{asset('public/images/current/thumb_img_1.png')}}" title="Image Title"></a>

                                            <div class="description">
                                                <h4 class="title"><span>Image Title</span></h4>
                                                <div class="subtitle"><span>Write here Your image description</span></div>
                                                <a href="#" class="description-close material-icons">close</a>
                                            </div>
                                        </li>

                                        <li>
                                            <img src="{{asset('public/images/current/thumb_img_1.png')}}" alt="" itemprop="image"/>

                                            <a class="swipebox" data-rel="gallery1" href="{{asset('public/images/current/thumb_img_1.png')}}" title="Image Title"></a>

                                            <div class="description bottom">
                                                <h4 class="title"><span>Image Title</span></h4>
                                                <div class="subtitle"><span>Write here Your image description</span></div>
                                                <a href="#" class="description-close material-icons">close</a>
                                            </div>
                                        </li>

                                        <li>
                                            <img src="{{asset('public/images/temp/project-3.jpg')}}" alt="" itemprop="image"/>

                                            <a class="swipebox" data-rel="gallery1" href="{{asset('public/images/temp/project-3.jpg')}}" title="Image Title"></a>

                                            <div class="description top-right">
                                                <h4 class="title"><span>Image Title</span></h4>
                                                <div class="subtitle"><span>Write here Your image description</span></div>
                                                <a href="#" class="description-close material-icons">close</a>
                                            </div>
                                        </li>

                                        <li>
                                            <img src="{{asset('public/images/temp/project-4.jpg')}}" alt="" itemprop="image"/>

                                            <a class="swipebox" data-rel="gallery1" href="{{asset('public/images/temp/project-4.jpg')}}" title="Image Title"></a>

                                            <div class="description bottom-right">
                                                <h4 class="title"><span>Image Title</span></h4>
                                                <div class="subtitle"><span>Write here Your image description</span></div>
                                                <a href="#" class="description-close material-icons">close</a>
                                            </div>
                                        </li>
                                    </ul>

                                    <a href="#" class="prev material-icons js-wave">keyboard_arrow_left</a>
                                    <a href="#" class="next material-icons js-wave">keyboard_arrow_right</a>
                                </div>

                                <div class="slider-thumbs-wrap">
                                    <ul class="slider-thumbs">
                                        <li style="background-image: url({{asset('public/images/current/thumb_img_1.png')}})"></li>
                                        <li style="background-image: url({{asset('public/images/temp/project-2.jpg')}})"></li>
                                        <li style="background-image: url({{asset('public/images/temp/project-3.jpg')}})"></li>
                                        <li style="background-image: url({{asset('public/images/temp/project-4.jpg')}})"></li>
                                    </ul>
                                    <a href="#" class="prev material-icons js-wave">keyboard_arrow_up</a>
                                    <a href="#" class="next material-icons js-wave">keyboard_arrow_down</a>
                                </div>

                                <a class="description-open material-icons active" href="#">info_outline</a>
                            </div>
                            <!--/ Thumbnail Slider -->
                        </div>

                        <!-- Project Stats -->
                        <div class="fly-card fly-project fly-flip-effect vertical">
                            <div class="boxed flip-front">
                                <div class="project-content">
                                    <h4 class="project-title">Tube Well & Sanitation</h4>

                                    <div class="project-location">
                                        <div class="label">Location:</div>

                                        <a href="#" class="flip-button" itemprop="location"><i class="material-icons">location_on</i>Mombasa, Kenya</a>
                                    </div>

                                    <div class="project-description" itemprop="description">
                                        <p>
                                            Our primary objective is to have a healthy and wealthy society. Our health care program is more focus on the proactive measurement. Hundreds of families suffer diarrhea and cholera from not having clean drinkable water and from poor sanitation.
                                        </p>
                                    </div>

                                    <div class="project-footer">
                                        <ul class="project-stats">
                                            <li>
                                                <div class="label">raised</div>
                                                <div class="value" data-raised="12731"><sup>$</sup>12,731</div>
                                            </li>
                                            <li>
                                                <div class="label">goal</div>
                                                <div class="value" data-goal="22500" itemprop="target"><sup>$</sup>22,500</div>
                                            </li>
                                        </ul>

                                        <div class="progress">
                                            <span class="progress-label">0%</span>
                                            <span class="progress-bar"></span>
                                        </div>

                                        <div class="project-buttons">
                                            <a href="#donateForm" class="btn btn-yellow js-wave anchor" itemprop="potentialAction">Donate</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="boxed flip-back">
                                <div class="card-map" data-placeholder="waiting for map">
                                    <div class="google-map"
                                         data-map-zoom="14"
                                         data-map-type="roadmap"
                                         data-map-style="onehope"
                                         data-map-address="1998 Hulman Blvd, Speedway, IN, 46222"
                                         data-map-marker="{{asset('public/images/marker.png')}}"
                                         data-map-marker-size="[31,46]"
                                         data-map-marker-anchor="[16,46]">
                                        <!-- May use data-map-coords="39.795180;-86.234819" instead of data-map-address -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Project Stats -->

                        <!-- Post Content -->
                        <div class="post-content">
                            <p class="first-letter">
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
                                sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
                                dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                aliquyam  erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus
                                est Lorem ipsum  dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod temport.
                            </p>

                            <blockquote>
                                Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                                Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat.
                                <span>John Doe</span>
                            </blockquote>

                            <p>
                                Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Lorem ipsum dolor
                                sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                                minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                            </p>

                            <ul>
                                <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy</li>
                                <li>At vero eos et accusam et justo duo dolores et ea rebum</li>
                                <li>Deirmod tempor invidunt ut labore et dolore magna aliquyam</li>
                                <li>Nonummy nibh euismod tincidunt ut laoreet dolore magna</li>
                            </ul>

                            <ol>
                                <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy</li>
                                <li>At vero eos et accusam et justo duo dolores et ea rebum</li>
                                <li>Deirmod tempor invidunt ut labore et dolore magna aliquyam</li>
                                <li>Nonummy nibh euismod tincidunt ut laoreet dolore magna</li>
                            </ol>

                            <dl>
                                <dt>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy</dt>
                                <dd>At vero eos et accusam et justo duo dolores et ea rebum</dd>
                                <dt>Deirmod tempor invidunt ut labore et dolore magna aliquyam</dt>
                                <dd>Nonummy nibh euismod tincidunt ut laoreet dolore magna</dd>
                            </dl>

                            <p>
                                At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
                                sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
                                dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, At accusam aliquyam diam diam dolore dolores duo eirmod eos erat, et
                                nonumy sed tempor et et invidunt justo labore Stet clita ea et gubergren, kasd magna no rebum. sanctus sea sed takimata ut vero voluptua.
                                est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
                                dolore magna aliquyam erat.
                            </p>

                            <img src="{{asset('public/images/temp/slide-5.jpg')}}" alt="" />
                            <p class="wp-caption-text">This is an image description.</p>

                            <p>
                                Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Lorem ipsum dolor
                                sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                                minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                            </p>

                            <p>
                                Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.
                            </p>
                        </div>
                        <!--/ Post Content -->

                        <!-- Post Social Buttons -->
                        <ul class="post-social clearfix">
                            <li><a href="#" class="fa fa-facebook js-wave"></a></li>
                            <li><a href="#" class="fa fa-twitter js-wave"></a></li>
                            <li><a href="#" class="fa fa-instagram js-wave"></a></li>
                            <li><a href="#" class="fa fa-google js-wave"></a></li>
                        </ul>
                        <!--/ Post Social Buttons -->
                    </article>
                    <!--/ Project Details -->

                    <!-- Donation Form -->
                    <form action="#" method="post" id="donateForm" class="donate-form">
                        <h4 class="title-styled">Make a donation</h4>

                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group required">
                                    <label for="country">COUNTRY</label>

                                    <select name="country" id="country" class="select2" data-placeholder="- select a country -">
                                        <option value="">&nbsp;</option>
                                        <option value="AF">Afghanistan</option>
                                        <option value="AL">Albania</option>
                                        <option value="AU">Australia</option>
                                        <option value="DZ">Algeria</option>
                                        <option value="AD">Andorra</option>
                                        <option value="AO">Angola</option>
                                        <option value="AI">Anguilla</option>
                                        <option value="AQ">Antarctica</option>
                                        <option value="AR">Argentina</option>
                                        <option value="AM">Armenia</option>
                                        <option value="AW">Aruba</option>
                                        <option value="AT">Austria</option>
                                        <option value="AZ">Azerbaijan</option>
                                        <option value="BS">Bahamas</option>
                                        <option value="BH">Bahrain</option>
                                        <option value="BD">Bangladesh</option>
                                        <option value="BB">Barbados</option>
                                        <option value="BY">Belarus</option>
                                        <option value="BE">Belgium</option>
                                        <option value="BZ">Belize</option>
                                        <option value="BJ">Benin</option>
                                        <option value="BM">Bermuda</option>
                                        <option value="BT">Bhutan</option>
                                        <option value="BO">Bolivia</option>
                                        <option value="BA">Bosnia</option>
                                        <option value="BW">Botswana</option>
                                        <option value="BV">Bouvet Isl.</option>
                                        <option value="BR">Brazil</option>
                                        <option value="BN">Brunei</option>
                                        <option value="BG">Bulgaria</option>
                                        <option value="BI">Burundi</option>
                                        <option value="KH">Cambodia</option>
                                        <option value="CA">Canada</option>
                                        <option value="CM">Cameroon</option>
                                        <option value="CV">Cape Verde</option>
                                        <option value="KY">Cayman Islands</option>
                                        <option value="CF">Central African</option>
                                        <option value="TD">Chad</option>
                                        <option value="CL">Chile</option>
                                        <option value="CN">China</option>
                                        <option value="CX">Christmas Isl.</option>
                                        <option value="CC">Cocos Islands</option>
                                        <option value="CO">Colombia</option>
                                        <option value="KM">Comoros</option>
                                        <option value="CG">Congo</option>
                                        <option value="CK">Cook Islands</option>
                                        <option value="CR">Costa Rica</option>
                                        <option value="CI">Cote D'Ivoire</option>
                                        <option value="HR">Croatia</option>
                                        <option value="CU">Cuba</option>
                                        <option value="CY">Cyprus</option>
                                        <option value="CZ">Czech Republic</option>
                                        <option value="DE">Germany</option>
                                        <option value="DK">Denmark</option>
                                        <option value="DJ">Djibouti</option>
                                        <option value="DM">Dominica</option>
                                        <option value="DO">Dominican Rep.</option>
                                        <option value="TP">East Timor</option>
                                        <option value="EC">Ecuador</option>
                                        <option value="EG">Egypt</option>
                                        <option value="SV">El Salvador</option>
                                        <option value="GQ">Eq. Guinea</option>
                                        <option value="ER">Eritrea</option>
                                        <option value="EE">Estonia</option>
                                        <option value="ET">Ethiopia</option>
                                        <option value="FK">Falkland Isl.</option>
                                        <option value="FO">Faroe Isl.</option>
                                        <option value="FJ">Fiji</option>
                                        <option value="FI">Finland</option>
                                        <option value="FR">France</option>
                                        <option value="GF">French Guiana</option>
                                        <option value="GA">Gabon</option>
                                        <option value="GM">Gambia</option>
                                        <option value="GE">Georgia</option>
                                        <option value="GH">Ghana</option>
                                        <option value="GI">Gibraltar</option>
                                        <option value="GR">Greece</option>
                                        <option value="GL">Greenland</option>
                                        <option value="GD">Grenada</option>
                                        <option value="GP">Guadeloupe</option>
                                        <option value="GU">Guam</option>
                                        <option value="GT">Guatemala</option>
                                        <option value="GN">Guinea</option>
                                        <option value="GW">Guinea-Bissau</option>
                                        <option value="GY">Guyana</option>
                                        <option value="HT">Haiti</option>
                                        <option value="HN">Honduras</option>
                                        <option value="HK">Hong Kong</option>
                                        <option value="HU">Hungary</option>
                                        <option value="IS">Iceland</option>
                                        <option value="ID">Indonesia</option>
                                        <option value="IR">Iran</option>
                                        <option value="IQ">Iraq</option>
                                        <option value="IE">Ireland</option>
                                        <option value="IL">Israel</option>
                                        <option value="IN">India</option>
                                        <option value="IT">Italy</option>
                                        <option value="JM">Jamaica</option>
                                        <option value="JP">Japan</option>
                                        <option value="JO">Jordan</option>
                                        <option value="KZ">Kazakhstan</option>
                                        <option value="KE">Kenya</option>
                                        <option value="KI">Kiribati</option>
                                        <option value="KP">Korea, South</option>
                                        <option value="KR">Korea, North</option>
                                        <option value="KW">Kuwait</option>
                                        <option value="KG">Kyrgyzstan</option>
                                        <option value="LA">Lao Republic</option>
                                        <option value="LV">Latvia</option>
                                        <option value="LB">Lebanon</option>
                                        <option value="LS">Lesotho</option>
                                        <option value="LR">Liberia</option>
                                        <option value="LY">Libyan Arab</option>
                                        <option value="LI">Liechtenstein</option>
                                        <option value="LT">Lithuania</option>
                                        <option value="LU">Luxembourg</option>
                                        <option value="MO">Macau</option>
                                        <option value="MK">Macedonia</option>
                                        <option value="MG">Madagascar</option>
                                        <option value="MW">Malawi</option>
                                        <option value="MY">Malaysia</option>
                                        <option value="MV">Maldives</option>
                                        <option value="ML">Mali</option>
                                        <option value="MT">Malta</option>
                                        <option value="MH">Marshall Isl.</option>
                                        <option value="MQ">Martinique</option>
                                        <option value="MR">Mauritania</option>
                                        <option value="MU">Mauritius</option>
                                        <option value="YT">Mayotte</option>
                                        <option value="MX">Mexico</option>
                                        <option value="FM">Micronesia</option>
                                        <option value="MD">Moldova</option>
                                        <option value="MC">Monaco</option>
                                        <option value="MN">Mongolia</option>
                                        <option value="MS">Montserrat</option>
                                        <option value="MA">Morocco</option>
                                        <option value="MZ">Mozambique</option>
                                        <option value="MM">Myanmar</option>
                                        <option value="NA">Namibia</option>
                                        <option value="NR">Nauru</option>
                                        <option value="NP">Nepal</option>
                                        <option value="NL">Netherlands</option>
                                        <option value="NC">New Caledonia</option>
                                        <option value="NZ">New Zealand</option>
                                        <option value="NI">Nicaragua</option>
                                        <option value="NE">Niger</option>
                                        <option value="NG">Nigeria</option>
                                        <option value="NU">Niue</option>
                                        <option value="NF">Norfolk Isl.</option>
                                        <option value="NO">Norway</option>
                                        <option value="OM">Oman</option>
                                        <option value="PK">Pakistan</option>
                                        <option value="PW">Palau</option>
                                        <option value="PA">Panama</option>
                                        <option value="PY">Paraguay</option>
                                        <option value="PE">Peru</option>
                                        <option value="PH">Philippines</option>
                                        <option value="PN">Pitcairn</option>
                                        <option value="PL">Poland</option>
                                        <option value="PT">Portugal</option>
                                        <option value="PR">Puerto Rico</option>
                                        <option value="QA">Qatar</option>
                                        <option value="RE">Reunion</option>
                                        <option value="RO">Romania</option>
                                        <option value="RU">Russian Federation</option>
                                        <option value="RW">Rwanda</option>
                                        <option value="LC">Saint Lucia</option>
                                        <option value="VC">St. Vincent</option>
                                        <option value="WS">Samoa</option>
                                        <option value="SM">San Marino</option>
                                        <option value="SA">Saudi Arabia</option>
                                        <option value="SN">Senegal</option>
                                        <option value="SC">Seychelles</option>
                                        <option value="SL">Sierra Leone</option>
                                        <option value="SG">Singapore</option>
                                        <option value="SK">Slovakia </option>
                                        <option value="SI">Slovenia</option>
                                        <option value="SB">Solomon Isl.</option>
                                        <option value="SO">Somalia</option>
                                        <option value="ZA">South Africa</option>
                                        <option value="ES">Spain</option>
                                        <option value="LK">Sri Lanka</option>
                                        <option value="SH">St. Helena</option>
                                        <option value="SD">Sudan</option>
                                        <option value="SR">Suriname</option>
                                        <option value="SZ">Swaziland</option>
                                        <option value="SE">Sweden</option>
                                        <option value="CH">Switzerland</option>
                                        <option value="SY">Syrian Arab Rep.</option>
                                        <option value="TW">Taiwan</option>
                                        <option value="TJ">Tajikistan</option>
                                        <option value="TH">Thailand</option>
                                        <option value="TG">Togo</option>
                                        <option value="TK">Tokelau</option>
                                        <option value="TO">Tonga</option>
                                        <option value="TN">Tunisia</option>
                                        <option value="TR">Turkey</option>
                                        <option value="TM">Turkmenistan</option>
                                        <option value="TV">Tuvalu</option>
                                        <option value="UG">Uganda</option>
                                        <option value="UA">Ukraine</option>
                                        <option value="AE">U.A.E.</option>
                                        <option value="UK">U.K.</option>
                                        <option value="US">U.S.</option>
                                        <option value="UY">Uruguay</option>
                                        <option value="UZ">Uzbekistan</option>
                                        <option value="VU">Vanuatu</option>
                                        <option value="VA">Vatican</option>
                                        <option value="VE">Venezuela</option>
                                        <option value="VN">Vietnam</option>
                                        <option value="VG">B.V.I</option>
                                        <option value="YE">Yemen</option>
                                        <option value="YU">Yugoslavia</option>
                                        <option value="ZR">Zaire</option>
                                        <option value="ZM">Zambia</option>
                                        <option value="ZW">Zimbabwe</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group required">
                                    <label for="city">TOWN / CITY</label>
                                    <input class="form-control" type="text" id="city" name="city" placeholder="Town or City" required />
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group required">
                                    <label for="state">STATE / PROVINCE</label>
                                    <input class="form-control" type="text" id="state" name="state" placeholder="State" required />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group required">
                                    <label for="first-name">First Name</label>
                                    <input class="form-control" type="text" id="first-name" name="first-name" placeholder="" required />
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group required">
                                    <label for="last-name">Last Name</label>
                                    <input class="form-control" type="text" id="last-name" name="last-name" placeholder="" required />
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="email">e-mail address</label>
                                    <input class="form-control" type="email" id="email" name="email" placeholder="Email" />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label for="company">company name</label>
                                    <input class="form-control" type="text" id="company" name="company" placeholder="" />
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group required">
                                    <label for="phone">phone number</label>
                                    <input class="form-control" type="tel" id="phone" name="phone" placeholder="Phone Number" data-inputmask="'mask': '+1 (999) 999-99-99'" required />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-8">
                                <div class="form-group required">
                                    <label for="address1">address</label>
                                    <input class="form-control" type="text" id="address1" name="address1" placeholder="Enter your address" required />
                                    <input class="form-control" type="text" id="address2" name="address2" placeholder="Second address line" />
                                </div>

                                <div class="form-group required">
                                    <label for="payment">pAYMENT mETHOD</label>

                                    <ul class="payment-method clearfix">
                                        <li class="active">
                                            <div class="payment-logo"><img src="{{asset('public/images/payment-1.png')}}" alt=""/></div>
                                            <input type="radio" name="payment" id="payment" value="1" checked />
                                        </li>

                                        <li>
                                            <div class="payment-logo"><img src="{{asset('public/images/payment-2.png')}}" alt=""/></div>
                                            <input type="radio" name="payment" value="2" />
                                        </li>

                                        <li>
                                            <div class="payment-logo"><img src="{{asset('public/images/payment-3.png')}}" alt=""/></div>
                                            <input type="radio" name="payment" value="3" />
                                        </li>

                                        <li>
                                            <div class="payment-logo"><span>Direct Bank Transfer</span></div>
                                            <input type="radio" name="payment" value="4" />
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group required">
                                    <label for="amount">amount</label>
                                    <input class="form-control" type="text" id="amount" name="amount" placeholder="$ 100" required />
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="message">ADDITIONAL TEXT</label>
                                    <input class="form-control" type="text" id="message" name="message" placeholder="Write a message" />
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-submit">
                                    <button type="submit" class="btn btn-medium js-wave">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!--/ Donation Form -->
                </main>
                <!--/ Content -->

                <!-- SideBar -->
                <aside class="sidebar sidebar-sticky" itemscope itemtype="http://schema.org/WPSideBar">
                    <!-- Widget Text -->
                    <div class="widget-sidebar widget_text">
                        <h4 class="widget-title">Cause information</h4>

                        <div class="textwidget">
                            <p><strong>Where:</strong> South Africa, Capetown</p>
                            <p><strong>How to spend:</strong> Online Payments, Credit Card</p>
                            <p><strong>Category:</strong> Spending Water</p>
                            <p><strong>Donations:</strong> money only</p>
                        </div>
                    </div>
                    <!--/ Widget Text -->

                    <!-- Widget Recent Posts -->
                    <div class="widget-sidebar widget-posts">
                        <h4 class="widget-title">Recent posts</h4>

                        <!-- Post -->
                        <article class="fly-article clearfix" itemscope itemtype="http://schema.org/Article">
                            <a class="post-media js-wave" href="blog-details.html"><img src="{{asset('public/images/temp/post-4.jpg')}}" alt="" itemprop="image" /></a>

                            <div class="post-content" itemprop="articleBody">
                                <h3 class="post-title"><a href="#" itemprop="name">Ut wisi enim ad minim venia quis nostrud exerci tation lorem ipsum dolor...</a></h3>

                                <div class="post-meta">
                                    <time class="post-date" datetime="2016-03-31T20:04:09" itemprop="dateCreated">Dec 31, 2016</time>
                                </div>
                            </div>
                        </article>
                        <!--/ Post -->

                        <!-- Post -->
                        <article class="fly-article clearfix" itemscope itemtype="http://schema.org/Article">
                            <a class="post-media js-wave" href="blog-details.html"><img src="{{asset('public/images/temp/post-5.jpg')}}" alt="" itemprop="image" /></a>

                            <div class="post-content" itemprop="articleBody">
                                <h3 class="post-title"><a href="#" itemprop="name">Ut wisi enim ad minim venia quis nostrud exerci tation lorem ipsum dolor...</a></h3>

                                <div class="post-meta">
                                    <time class="post-date" datetime="2016-03-31T20:04:09" itemprop="dateCreated">Dec 31, 2016</time>
                                </div>
                            </div>
                        </article>
                        <!--/ Post -->

                        <!-- Post -->
                        <article class="fly-article clearfix" itemscope itemtype="http://schema.org/Article">
                            <a class="post-media js-wave" href="blog-details.html"><img src="{{asset('public/images/temp/post-6.jpg')}}" alt="" itemprop="image" /></a>

                            <div class="post-content" itemprop="articleBody">
                                <h3 class="post-title"><a href="#" itemprop="name">Ut wisi enim ad minim venia quis nostrud exerci tation lorem ipsum dolor...</a></h3>

                                <div class="post-meta">
                                    <time class="post-date" datetime="2016-03-31T20:04:09" itemprop="dateCreated">Dec 31, 2016</time>
                                </div>
                            </div>
                        </article>
                        <!--/ Post -->
                    </div>
                    <!--/ Widget Recent Posts -->

                    <!-- Widget Gallery -->
                    <div class="widget-sidebar widget-gallery">
                        <h4 class="widget-title">Gallery</h4>
images/temp/gallery-1.jpg
                        <ul>
                            <li><a href="#" class="js-wave"><img src="{{asset('public/images/temp/gallery-1.jpg')}}" alt=""/></a></li>
                            <li><a href="#" class="js-wave"><img src="{{asset('public/images/temp/gallery-2.jpg')}}" alt=""/></a></li>
                            <li><a href="#" class="js-wave"><img src="{{asset('public/images/temp/gallery-3.jpg')}}" alt=""/></a></li>
                            <li><a href="#" class="js-wave"><img src="{{asset('public/images/temp/gallery-4.jpg')}}" alt=""/></a></li>
                            <li><a href="#" class="js-wave"><img src="{{asset('public/images/temp/gallery-5.jpg')}}" alt=""/></a></li>
                            <li><a href="#" class="js-wave"><img src="{{asset('public/images/temp/gallery-6.jpg')}}" alt=""/></a></li>

                        </ul>
                    </div>
                    <!--/ Widget Gallery -->

                    <!-- Widget Facebook -->
                    <div class="widget-sidebar widget-facebook">
                        <h4 class="widget-title">Facebook</h4>

                        <img src="{{asset('public/images/temp/facebook-dummy.jpg')}}" alt=""/>
                    </div>
                    <!--/ Widget Facebook -->
                </aside>
                <!--/ SideBar -->
            </div>
        </div>
    </div>
    <!--/ Page -->
    @endsection