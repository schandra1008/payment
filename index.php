<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Payment</title>
        <link rel="stylesheet" href="files/css/bootstrap.css">
        <link rel="stylesheet" href="files/css/bootstrap.min.css">
        <script type="text/javascript" src="files/js/bootstrap.js"></script>
        <script type="text/javascript" src="files/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="files/js/jquery.js"></script>
        <style>
            @media(max-width:760px){
                #heading{
                    display: none;
                }
            }
            @media(min-width:420px){
                #headingopen{
                    display: none;
                }
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-sm-12" style="margin-top: 50px;">
                    <span>
                        <a style="padding: 25px; text-decoration: none; font-size: 20px; color: #D68533;">Sig in</a>
                        <a style="text-decoration: none; font-size: 20px; color: #D68533;" class="active">Delivery & Payment</a>
                        <a style="padding: 25px; text-decoration: none; font-size: 20px; color: #DADADA">Place Order</a>;
                        <a style="text-decoration: none; font-size: 20px; color: #DADADA;">Complete Payment</a>
                    </span>
                </div>
            </div>
            <div>
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-sm-12">
                        <h3>Select a payment method</h3>
                        <h5>Pay faster for all your shopping needs <span style="color: #B22222;">with Amazon Pay Balance</span></h5>
                        <h5>Get instant refund on cancellations | Zero payment failure</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-sm-12" style="border: 1px solid black; border-radius: 10px;">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <h4><b>Your saved credit & debit cards</b></h4>
                            </div>
                            <div class="col-lg-3 col-sm-3" id="heading">
                                <h4 class="text-muted">Name on Card</h4>
                            </div>
                            <div class="col-lg-3 col-sm-3" id="heading">
                                <h4 class="text-muted">Expires on</h4>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-5 col-lg-offset-1 col-sm-5 col-sm-offset-1 radio">
                                <input type="radio" name="payment" value="payment"><b>State Bank of India</b> Debit Card ending in 0054
                            </div>
                            <div class="col-lg-3 col-sm-3">
                                <h5>SAURABH CHANDRA</h5>
                            </div>
                            <div class="col-lg-3 col-sm-3">
                                <h5><span id="headingopen">Expires </span>06/34</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-5 col-lg-offset-1 col-sm-5 col-sm-offset-1 radio">
                                <input type="radio" name="payment" value="payment"><b>State Bank of India</b> Debit Card ending in 0054
                            </div>
                            <div class="col-lg-3 col-sm-3">
                                <h5>SAURABH CHANDRA</h5>
                            </div>
                            <div class="col-lg-3 col-sm-3">
                                <h5>06/34</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-sm-12" style="border: 1px solid black; border-radius: 10px;">
                        <h4><b>Another payment method</b></h4><hr>
                        <div class="row" style="background-color: #DBDEE3; border-radius: 10px; margin-top: 2px;">
                            <div class="col-lg-10 col-sm-11 col-sm-offset-1 radio">
                                <input type="radio" name="payment" value="payment">Add Debit/Credit/ATM Card
                            </div>
                        </div>
                        <div class="row" style="background-color: #DBDEE3; border-radius: 10px; margin-top: 2px;">
                            <div class="col-lg-10 col-lg-offset-1 col-sm-11 col-sm-offset-1 radio">
                                <input type="radio" name="payment" value="payment">Netbanking
                                <div>
                                    <select>
                                    <option>Choose an option</option>
                                    <option>Airtel Payments Bank</option>
                                    <option>Axis Bank</option>
                                    <option>HDFC Bank </option>
                                    <option>ICICI Bank</option>
                                    <option>Kotak Bank</option>
                                    <option>State Bank Of India</option>
                                    <option>Allahabad Bank</option>
                                </select>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="background-color: #DBDEE3; border-radius: 10px; margin-top: 2px;">
                            <div class="col-lg-10 col-lg-offset-1 col-sm-11 col-sm-offset-1 radio">
                                <input type="radio" name="payment" value="payment">Other UPI Apps
                            </div>
                        </div>
                        <div class="row" style="background-color: #DBDEE3; border-radius: 10px; margin-top: 2px;">
                            <div class="col-lg-10 col-lg-offset-1 col-sm-11 col-sm-offset-1 radio">
                                <input type="radio" name="payment" value="payment">EMI
                            </div>
                        </div>
                        <div class="row" style="background-color: #DBDEE3; border-radius: 10px; margin-top: 2px;">
                            <div class="col-lg-10 col-lg-offset-1 col-sm-11 col-sm-offset-1 radio">
                                <input type="radio" name="payment" value="payment">Pay on Delivery
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
