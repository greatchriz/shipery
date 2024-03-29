<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Yashadmin:Sales Management System Admin Bootstrap 5 Template">
	<meta property="og:title" content="Yashadmin:Sales Management System Admin Bootstrap 5 Template">
	<meta property="og:description" content="Yashadmin:Sales Management System Admin Bootstrap 5 Template">
	<meta property="og:image" content="https:/yashadmin.dexignzone.com/xhtml/social-image.png">
	<meta name="format-detection" content="telephone=no">

	<!-- PAGE TITLE HERE -->
	<title>Yash Admin Sales Management System</title>

	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="/otherp/images/favicon.png">
	<link href="../css2-1?family=Material+Icons" rel="stylesheet">
	<link href="/otherp/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="/otherp/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="/otherp/css/style.css" rel="stylesheet">

</head>

<body>

    <div id="main-wrapper">

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">

                        <div class="card mt-3">
                            <div class="card-header"> Invoice <strong>24/01/2024</strong> <span class="float-end">
                                    <strong>Status:</strong> Pending</span> </div>
                            <div class="card-body">
                                <div class="row mb-5">
                                    <div class="mt-4 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                        <h6>From:</h6>
                                        <div> <strong>{{ $item->sender->name }}</strong> </div>
                                        <div>Madalinskiego 8</div>
                                        <div>71-101 Szczecin, Poland</div>
                                        <div>Email: info@webz.com.pl</div>
                                        <div>Phone: +48 444 666 3333</div>
                                    </div>
                                    <div class="mt-4 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                        <h6>To:</h6>
                                        <div> <strong>Bob Mart</strong> </div>
                                        <div>Attn: Daniel Marek</div>
                                        <div>43-190 Mikolow, Poland</div>
                                        <div>Email: marek@daniel.com</div>
                                        <div>Phone: +48 123 456 789</div>
                                    </div>
                                    <div class="mt-4 col-xl-6 col-lg-6 col-md-12 col-sm-12 d-flex justify-content-lg-end">
                                        <div class="row align-items-center">
											<div class="col-sm-9">
												{{-- <div class="brand-logo mb-2 inovice-logo">
                                                    <img src="/otherp/images/logo.png" alt="logo" width="150px" height="40px">
												</div> --}}
                                                <span>Please send exact amount: <strong class="d-block">0.15050000 BTC</strong>
                                                    <strong>1DonateWffyhwAjskoEwXt83pHZxhLTr8H</strong></span><br>
                                                <small class="text-muted">Current exchange rate 1BTC = $6590 USD</small>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-border">
                                        <thead>
                                            <tr>
                                                <th class="center">#</th>
                                                <th>Item</th>
                                                <th>Description</th>
                                                <th class="right">Unit Cost</th>
                                                <th class="center">Qty</th>
                                                <th class="right">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="center">1</td>
                                                <td class="left strong">Origin License</td>
                                                <td class="left">Extended License</td>
                                                <td class="right">$999,00</td>
                                                <td class="center">1</td>
                                                <td class="right">$999,00</td>
                                            </tr>
                                            <tr>
                                                <td class="center">2</td>
                                                <td class="left">Custom Services</td>
                                                <td class="left">Instalation and Customization (cost per hour)</td>
                                                <td class="right">$150,00</td>
                                                <td class="center">20</td>
                                                <td class="right">$3.000,00</td>
                                            </tr>
                                            <tr>
                                                <td class="center">3</td>
                                                <td class="left">Hosting</td>
                                                <td class="left">1 year subcription</td>
                                                <td class="right">$499,00</td>
                                                <td class="center">1</td>
                                                <td class="right">$499,00</td>
                                            </tr>
                                            <tr>
                                                <td class="center">4</td>
                                                <td class="left">Platinum Support</td>
                                                <td class="left">1 year subcription 24/7</td>
                                                <td class="right">$3.999,00</td>
                                                <td class="center">1</td>
                                                <td class="right">$3.999,00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-sm-5"> </div>
                                    <div class="col-lg-4 col-sm-5 ms-auto table-margin">
                                        <table class="table table-clear">
                                            <tbody>
                                                <tr>
                                                    <td class="left"><strong class="text-dark">Subtotal</strong></td>
                                                    <td class="right">$8.497,00</td>
                                                </tr>
                                                <tr>
                                                    <td class="left"><strong class="text-dark">Discount (20%)</strong></td>
                                                    <td class="right">$1,699,40</td>
                                                </tr>
                                                <tr>
                                                    <td class="left"><strong class="text-dark">VAT (10%)</strong></td>
                                                    <td class="right">$679,76</td>
                                                </tr>
                                                <tr>
                                                    <td class="left"><strong class="text-dark">Total</strong></td>
                                                    <td class="right"><strong class="text-dark">$7.477,36</strong><br>
                                                        <strong class="text-dark">0.15050000 BTC</strong></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


    </div>


    <!-- Required vendors -->
    <script src="/otherp/vendor/global/global.min.js"></script>
	<script src="/otherp/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="/otherp/js/custom.js"></script>
	<script src="/otherp/js/deznav-init.js"></script>
	<script src="/otherp/js/demo.js"></script>
    <script src="/otherp/js/styleSwitcher.js"></script>
</body>
</html>
