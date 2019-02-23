{{--<form action="{{route('payment.donationPay')}}" method="post" id="donateForm" class="donate-form">--}}
    {{--{{csrf_field()}}--}}
<div id="donateForm">
    <h4 class="title-styled">Make a donation</h4>

    <div class="row">
        <div class="col-sm-4">
            <div class="form-group required">
                <label for="country">COUNTRY</label>
                <select name="country" id="country" class="select2" data-placeholder="- select a country -">
                    <option value="">&nbsp;</option>
                    <option value="US">U.S.</option>
                    <option value="BD">Bangladesh</option>
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
                <input class="form-control" type="text" id="firstName" name="firstName" placeholder="first name" required />
            </div>
        </div>

        <div class="col-sm-4">
            <div class="form-group required">
                <label for="last-name">Last Name</label>
                <input class="form-control" type="text" id="lastName" name="lastName" placeholder="last name" required />
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
                <input class="form-control" type="text" id="addr1" name="addr1" placeholder="Enter your address" required />
                <input class="form-control" type="text" id="addr2" name="addr2" placeholder="Second address line" />
            </div>

            {{--<div class="form-group required">--}}
                {{--<label for="payment">pAYMENT mETHOD</label>--}}

                {{--<ul class="payment-method clearfix">--}}
                    {{--<li class="active">--}}
                        {{--<div class="payment-logo"><img src="{{asset('public/images/payment-1.png')}}" alt=""/></div>--}}
                        {{--<input type="radio" name="payment" id="payment" value="1" checked />--}}
                    {{--</li>--}}

                    {{--<li>--}}
                        {{--<div class="payment-logo"><img src="{{asset('public/images/payment-2.png')}}" alt=""/></div>--}}
                        {{--<input type="radio" name="payment" value="2" />--}}
                    {{--</li>--}}

                    {{--<li>--}}
                        {{--<div class="payment-logo"><img src="{{asset('public/images/payment-3.png')}}" alt=""/></div>--}}
                        {{--<input type="radio" name="payment" value="3" />--}}
                    {{--</li>--}}

                    {{--<li>--}}
                        {{--<div class="payment-logo"><span>Direct Bank Transfer</span></div>--}}
                        {{--<input type="radio" name="payment" value="4" />--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</div>--}}
        </div>
    </div>

    <div class="row">


        <div class="col-sm-4">
            <div class="form-group">
                <label for="message">Zip</label>
                <input class="form-control" type="text" id="zip" name="zip" placeholder="zipe" />
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="message">Project</label>
                <select class="select2" name="projectName" id="projectName">
                    <option value="36">Bdesh</option>
                    <option value="34">Zakat</option>
                    <option value="35">Sadaqa</option>
                    @foreach($rogingaprojectname as $roginga)

                        <option  value="{{$roginga->rohingyaprojectId}}">{{strtoupper($roginga->title)}}</option>

                    @endforeach
                    <!--<option value="Clean Water & Sanitation">Clean Water & Sanitation</option>-->
                    <!--<option value="Chidren Care Programn">Chidren Care Program</option>-->
                    <!--<option value="Eye Care">Eye Care</option>-->
                    <!--<option value="Serve A Meal">Serve A Meal</option>-->
                    <!--<option value="Ramadan Food Basket">Ramadan Food Basket</option>-->
                  
                    @foreach($projectName as $name)
                 
                    <option @if( strtoupper(basename(Request::url()))  == strtoupper($name->slug) ) selected @endif value="{{$name->projectId}}">{{strtoupper($name->pName)}}</option>
                  
                    @endforeach

                </select>
            </div>
        </div>

        <div class="col-sm-12"><hr></div>



        <div class="col-sm-4">
            <div class="form-group">
                <label for="message">Card Number</label>
                <input class="form-control" type="text" id="cardNumber" name="cardNumber" placeholder="card number" />
            </div>
        </div>

        <div class="form-group col-sm-8">


            <div class="form-group col-sm-4">
                <label for="">Card Expire</label>
                <select class="select2" name="cardExpireMonth" id="cardExpireMonth">
                    <option value="">Month</option>
                    @for($i=1;$i<=12;$i++)
                        <option value="{{$i}}">{{$i}}</option>
                    @endfor
                </select>
            </div>

            <div class="form-group col-sm-4">
                <label for="">&nbsp;</label>
                <?php $curYear= date("Y"); ?>

                <select class="select2" name="cardExpireYear" id="cardExpireYear">
                    <option value="">Year</option>
                    <?php for ($i=$curYear;($i<($curYear+15));$i++){?>
                    <option value="<?php echo substr( $i, -2);?>"><?php echo $i?></option>
                    <?php } ?>

                </select>

            </div>


        </div>

        <div class="form-group required">



            <div class="col-sm-4">
                <div class="form-group required">
                    <label for="amount">amount</label>
                    <input class="form-control" type="text" id="amount" name="amount" placeholder="$ 100" required />
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <label for="message">CVV2</label>
                    <input class="form-control" type="text" id="cvv2" name="cvv2" placeholder="cvv2" />
                </div>
            </div>



        </div>


        <div class="col-sm-12">
            <div class="form-submit">
                <button type="submit" onclick="makeDonation()" class="btn btn-medium js-wave">Submit</button>
            </div>
        </div>
    </div>
</div>
{{--</form>--}}

<script>
    function alertMsg(msg) {
        $.alert({
            title: 'Error',
            type: 'red',
            content: msg,
            buttons: {
                tryAgain: {
                    text: 'Ok',
                    btnClass: 'btn-green',
                    action: function () {

                    }
                }
            }
        });

    }
    function makeDonation() {

        $("#wait").css("display", "block");
        var firstName=$('#firstName').val();
        var lastName=$('#lastName').val();
        var addr1=$('#addr1').val();
        var addr2=$('#addr2').val();
        var city=$('#city').val();
        var state=$('#state').val();
        var zip=$('#zip').val();
        var country=$('#country').val();
        var phone=$('#phone').val();
        var email=$('#email').val();
        var cardNumber=$('#cardNumber').val();
        var cardExpireMonth=$('#cardExpireMonth').val();
        var cardExpireYear=$('#cardExpireYear').val();
        var cvv2=$('#cvv2').val();
        var amount=$('#amount').val();
        var company=$('#company').val();
        var projectId = $('#projectId').val();

        if(firstName ==""){
            alertMsg("First Name is required");
            return false;
        }
        if(addr1 ==""){
            alertMsg("Address is required");
            return false;
        }
        if(city ==""){
            alertMsg("City is required");
            return false;
        }
        if(phone ==""){
            alertMsg("Phone is required");
            return false;
        }
        if(email ==""){
            alertMsg("Email is required");
            return false;
        }

        if(cardNumber ==""){
            alertMsg("Card Number is required");
            return false;
        }
        if(cardExpireMonth =="" || cardExpireYear =="" ){
            alertMsg("Card Expire is required");
            return false;
        }
        if(cvv2 ==""){
            alertMsg("Cvv2 Number is required");
            return false;
        }

        if(amount ==""){
            alertMsg("Amount Number is required");
            return false;
        }
        $.ajax({
            type: 'POST',
            url: "{{route('payment.donationPay')}}",
            cache: false,
            data: {_token: "{{csrf_token()}}",
                'firstName': firstName,
                'lastName': lastName,
                'addr1': addr1,
                'addr2': addr2,
                'city': city,
                'state': state,
                'zip': zip,
                'country': country,
                'phone': phone,
                'email': email,
                'cardNumber': cardNumber,
                'cardExpireMonth': cardExpireMonth,
                'cardExpireYear': cardExpireYear,
                'cvv2': cvv2,
                'amount': amount,
                'company': company,
                'projectId':projectId,
            },
            success: function (data) {

                $("#wait").css("display", "none");

                console.log(data);

                if (data.donateStatus==0){

                    $.alert({
                        title: 'Error',
                        type: 'red',
                        content: data.donateErrMsg,
                        buttons: {
                            tryAgain: {
                                text: 'Ok',
                                btnClass: 'btn-green',
                                action: function () {

//                                    location.reload();

                                }
                            }
                        }
                    });

                }else if(data.donateStatus==1) {

                    $.alert({
                        title: 'Success',
                        type: 'red',
                        content: data.donateSuccMsg,
                        buttons: {
                            tryAgain: {
                                text: 'Ok',
                                btnClass: 'btn-green',
                                action: function () {
                                    location.reload();
                                }
                            }
                        }
                    });

                }

            }
        });

    }
</script>