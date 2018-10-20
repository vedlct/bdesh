@extends('layout.mainLayout')
@section('content')

    <!-- Header Image or Video -->
    <section class="fly-header parallax overlay" style="background-image: url(images/temp/slide-25.jpg);">
        <div class="fly-header-content">
            <h1 class="page-title">Zakat Calculator</h1>
        </div>
    </section>
    <!--/ Header Image or Video -->



    <!-- Our Mission -->
    <section class="section padding-top-70">
        <div class="section-heading">
            <div class="container">
                <h2 class="section-title">Who we are?</h2>
            </div>
        </div>




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
                                    <div class="btn btn-success"><a style="color: #fff;" title="Donate" href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=Z3MUXEEMWPBCU" target="blank">PAY YOUR ZAKAT NOW</a></div>
                                    



                                    
                                </div>
                            </div>
                        </form>
                    </div>


            </div>
                <h4 style="margin-top: 5px;">Using credit card to pay for zakat</h4>

                <p>Please consider adding 2% when using Visa and Mastercard, and 2.5% when using American Express to your total zakat donation—this will compensate for any transaction fees deducted from your donation by the credit card companies, and will ensure that your intended zakat amount is paid in full.</p>
        </div>
        






    </section>
    <!--/ Our Mission -->

        @endsection