@extends('layout.mainLayout')
@section('content')

    <!-- Header Image or Video -->
<section class="fly-header parallax overlay" style="background-image: url({{asset('public/images/current/Multimedia-small-Banner.jpg')}});">
        <div class="fly-header-content">
            <h1 class="page-title">Zakat Calculator</h1>
        </div>
    </section>
    <!--/ Header Image or Video -->



    <!-- Our Mission -->
    <section class="section padding-top-70">





        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p style="font-weight: 600; font-size: 25px;">What is zakat?</p>
                    
                    <p style="text-align: left">Offering zakat is a religious obligation for Muslims, and is the third of the five pillars of Islam (right after prayer). In Arabic, zakat means purification, growth and blessing. Paying zakat is meant to remind Muslims to be appreciative of the blessings that Allah (Subhana Wa Ta’ala) has bestowed upon them, and to help empower those who have less. </p>
                    
                    <p style="font-weight: 600; font-size: 25px;">Who is eligible for zakat?</p>
                    <p style="text-align: left">Bdesh foundation collects and distributes zakat to those who are most in need, in accordance with Islamic guidelines. Giving your Zakat through Bdesh means you can provide Food, Job Training, Clean Water, Eye Care, Orphan/Children Welfare, Health Care and so much more.</p>
                    <p style="text-align: left">According to the Holy Qur’an (9:60), there are eight categories of people who qualify to be beneficiaries of zakat:</p>
                    
                    
                    <p>
                    <ol>
                        <li>1. The poor</li> <br>
                        <li>2. The needy</li> <br>
                        <li>3. The collectors of zakat (Bdesh foundation USA is an example)</li> <br>
                        <li>4. Those who hearts are to be won over</li> <br>
                        <li>5. Captives</li> <br>
                        <li>6. Debtors</li> <br>
                        <li>7. A mediator or someone who pays from personal monies to fix <br> <span style="margin-left: 16px; line-height: 1px;">or mediate problems among the people</span> </li> <br>
                        <li>8. In the cause of Allah (swt)</li> <br>
                        <li>9. Travelers</li> <br>
                    </ol>
                    </p>
                    
                <p style="text-align: left">Most scholars agree that the poor and needy are the most important categories of people to receive zakat. Given that, it is acceptable to give your entire zakat allotment to individuals who are in those groups.</p>
                <p style="text-align: left">Bdesh foundation USA consults with a council of imams who follow the Fiqh Council of North America for information about religious donations. It is advised that you consult with your local imam or scholar for more detailed inquiries.</p>
                   
                <p style="font-weight: 600; font-size: 25px;">Zakat on gold</p>
                <p style="text-align: left">Zakat is payable at 2.5% of the wealth one possesses above the nisab. Nisab, which is equal to 3 ounces of gold, is the minimum amount of wealth one must have before they are liable to pay zakat. *As of April 28, 2017, nisab is estimated to be $3,587.79. Zakat is liable on gold, silver, cash, savings, investments, rent income, business merchandise and profits, shares, securities and bonds. Zakat is not paid on wealth used for debt repayment of living expenses such as clothing, food, housing, transportation, education, etc.</p>
                    
                </div>
                
            <div class="col-md-6">
                <div class="zakat-input">
                    <h2></h2>
                    <div id="zform">
                        <form role="form" method="post" action="" class="form-horizontal">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <h4 class="col-sm-8"><strong>Assets and Liabilities</strong></h4>
                                        <div class="col-sm-4">
                                            <h4><strong>Value in U.S. Dollars</strong></h4>
                                        </div>
                                    </div>
                                    <!---- Zakat Title --->
                                    <div class="form-group">
                                        <label for="amount_home" class="col-sm-8 control-label">Cash at Home</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control decimal" id="amount_home" name="amount_home">
                                        </div>
                                    </div>
                                    <!--- end cash and home ---->
                                    <div class="form-group">
                                        <label for="amount_bank" class="col-sm-8 control-label">Balance Held in Bank Accounts</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control decimal" id="amount_bank" name="amount_bank">
                                        </div>
                                    </div>
                                    <!--- end Balance Held in Bank Accounts ---->
                                    <div class="form-group">
                                        <label for="amount_shares" class="col-sm-8 control-label">Resale Value of Shares</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control decimal" id="amount_shares" name="amount_shares">
                                        </div>
                                    </div>
                                    <!--- end Resale Value of Shares ---->
                                    <div class="form-group">
                                        <label for="amount_merchandise" class="col-sm-8 control-label">Merchandise &amp; Profits</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control decimal" id="amount_merchandise" name="amount_merchandise">
                                        </div>
                                    </div>
                                    <!--- end Resale Value of Shares ---->
                                    <div class="form-group">
                                        <label for="amount_gold" class="col-sm-8 control-label">Gold &amp; Silver (at current value)</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control decimal" id="amount_gold" name="amount_gold">
                                        </div>
                                    </div>
                                    <!--- end Gold &amp; Silver ---->
                                    <div class="form-group">
                                        <label for="amount_property" class="col-sm-8 control-label">Property Held as Investment</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control decimal" id="amount_property" name="amount_property">
                                        </div>
                                    </div>
                                    <!--- end Property Held as Investment ---->
                                    <div class="form-group">
                                        <label for="amount_other" class="col-sm-8 control-label">Other Income</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control decimal" id="amount_other" name="amount_other">
                                        </div>
                                    </div>
                                    <!--- end Other Income ---->
                                    <div class="form-group">
                                        <label for="amount_zakah1" class="col-sm-8 control-label"><strong>Total of Assets Liable for Zakat</strong></label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control decimal" id="amount_zakah1" name="amount_zakah1" readonly>
                                        </div>
                                    </div>
                                    <!--- end Total of Assets Liable for Zakat ---->
                                    <div class="form-group">
                                        <label for="amount_debts" class="col-sm-8 control-label">Deduct Debts</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control decimal" id="amount_debts" name="amount_debts">
                                        </div>
                                    </div>
                                    <!--- end Deduct Debts ---->
                                    <div class="form-group">
                                        <label for="amount_expenses" class="col-sm-8 control-label">Deduct Expenses</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control decimal" id="amount_expenses" name="amount_expenses">
                                        </div>
                                    </div>
                                    <!--- end Deduct Expenses ---->
                                    <div class="form-group">
                                        <label for="amount_zakah2" class="col-sm-8 control-label">Zakat-Eligible Total</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control decimal" id="amount_zakah2" name="amount_zakah2" readonly>
                                        </div>
                                    </div>
                                    <!--- end Zakat-Eligible Total ---->
                                    <div class="form-group">
                                        <label for="amount_nisab" class="col-sm-8 control-label">Ensure that Zakat-Eligible Total Exceeds Nisab</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control decimal" id="amount_nisab" name="amount_nisab" value="3587.79" readonly>
                                        </div>
                                    </div>
                                    <!--- end ZEnsure that Zakat-Eligible Total Exceeds Nisab ---->
                                    <div class="form-group">
                                        <label for="amount" class="col-sm-8 control-label"> Your Zakat (0.025 x Zakat-Eligible Total)</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control decimal" id="amount" name="amount" readonly>
                                        </div>
                                    </div>
                                    <!--- end Your Zakat Zakat-Eligible Total) ---->
                                    <!--<button type="submit" class="btn btn-success" id="submit" name="submit">PAY YOUR ZAKAT NOW</button>-->
                                    <div class="btn btn-success"><a style="color: #fff;" title="Donate" href="{{route('creditcard')}}" target="blank">PAY YOUR ZAKAT NOW</a></div>
                                    



                                    
                                </div>
                            </div>
                        </form>
                    </div>


            </div>
                <h4 style="margin-top: 10px;">Using credit card to pay for zakat</h4>

                <p>Please consider adding 2% when using Visa and Mastercard, and 2.5% when using American Express to your total zakat donation—this will compensate for any transaction fees deducted from your donation by the credit card companies, and will ensure that your intended zakat amount is paid in full.</p>
        </div>
        





    </div>
        </div>
    </section>
    <script
            src="https://code.jquery.com/jquery-2.2.4.min.js"
            integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
            crossorigin="anonymous"></script>

    <script type="text/javascript">
        var calculateZakat = function(){

            var amount_home = parseFloat($('#amount_home').val()) || 0;
            var amount_bank = parseFloat($('#amount_bank').val()) || 0;
            var amount_shares = parseFloat($('#amount_shares').val()) || 0;
            var amount_merchandise = parseFloat($('#amount_merchandise').val()) || 0;
            var amount_gold = parseFloat($('#amount_gold').val()) || 0;
            var amount_property = parseFloat($('#amount_property').val()) || 0;
            var amount_other = parseFloat($('#amount_other').val()) || 0;
            var totalAmount = (amount_home + amount_bank + amount_shares + amount_merchandise + amount_gold + amount_property + amount_other).toFixed(2);

            $('#amount_zakah1').val(totalAmount);

            var amount_debts = parseFloat($('#amount_debts').val()) || 0;
            var amount_expenses = parseFloat($('#amount_expenses').val()) || 0;
            var totalExpenses = (amount_debts + amount_expenses).toFixed(2);

            var amount_zakah2 = (totalAmount - totalExpenses).toFixed(2);
            if(amount_zakah2 < 0) {
                amount_zakah2 = 0.00;
            }
            $('#amount_zakah2').val(amount_zakah2);

            var amount_nisab = parseFloat($('#amount_nisab').val()) || 0;

            var zakatAmount = 0.00;
            if(amount_zakah2 > amount_nisab) {
                zakatAmount = (amount_zakah2 * 0.025).toFixed(2);
            }
            $('#amount').val(zakatAmount);
        };

        $(function() {
            $('.decimal').keyup(function(){
                var val = $(this).val();
                if(isNaN(val)){
                    val = val.replace(/[^0-9\.]/g,'');
                    if(val.split('.').length>2)
                        val =val.replace(/\.+$/,"");
                }
                $(this).val(val);
            });

            $('#amount_home').on('change', calculateZakat);
            $('#amount_bank').on('change', calculateZakat);
            $('#amount_shares').on('change', calculateZakat);
            $('#amount_merchandise').on('change', calculateZakat);
            $('#amount_gold').on('change', calculateZakat);
            $('#amount_property').on('change', calculateZakat);
            $('#amount_other').on('change', calculateZakat);
            $('#amount_debts').on('change', calculateZakat);
            $('#amount_expenses').on('change', calculateZakat);
        });
    </script>

    <!--/ Our Mission -->
@section('foot-js')
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>--}}





    <script type="text/javascript">
        $(document).ready(function () {
            $('.search_icon').click(function () {
                $('.nav-justified').toggleClass('search_opened');
                $('.navbar_search').fadeToggle();
            });
            $('.navbar_search .overlay').click(function () {
                $('.nav-justified').toggleClass('search_opened');
                $('.navbar_search').fadeToggle();
            })

            $(window).scroll(function () {
                var top_bar_height = $('.top_bar').height();
                var header_height = $('.header').height();
                var total_scroll = $(window).scrollTop();
                if (total_scroll > top_bar_height + header_height) {
                    $('.navbar-default').addClass('navbar-fixed-top');
                } else {
                    $('.navbar-default').removeClass('navbar-fixed-top');
                }
            })

            $("html").niceScroll({
                cursorcolor: "#51a83f",
                cursorwidth: "10px",
                cursorborder: "0px solid transparent",
                cursorborderradius: "0px",
                mousescrollstep: 60,
                autohidemode: false,
                background: "gray",
                horizrailenabled: false
            });

            $('.srj').waypoint(function () {
                var anim = $(this).attr('data-animate'),
                    del = $(this).attr('data-animation-delay');
                var window_width = $(window).width();
                if (window_width > 767) {
                    $(this).addClass('animated ' + anim).css({animationDelay: del + 'ms'});
                } else {
                    $(this).addClass('animated ' + anim).css({animationDelay: 200 + 'ms'});
                }
            }, {offset: '100%', triggerOnce: true});

            /*==============Code for Back to Top==============*/
            if ((jQuery(window).height() + 100) < jQuery(document).height()) {
                jQuery('#top-link-block').removeClass('hidden').affix({
                    offset: {top: 100}
                });
            }

            jQuery('.carousel').carousel({
                interval: 5000
            })

        });
    </script>

    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });
        }
    </script>

        @endsection
        @endsection