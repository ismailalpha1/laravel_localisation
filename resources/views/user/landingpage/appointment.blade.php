<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.ansonika.com/limmo/reservation-single-date-picker.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Jan 2024 13:27:18 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Limmo - Register, Reservation, Questionare, Reviews, Quotation form Multipurpose Wizard with SMTP and HTML email support">
    <meta name="author" content="Ansonika">
    <title>Limmo - Register, Reservation, Questionare, Reviews, Quotation form Multipurpose Wizard</title>
    
    <!-- GOOGLE WEB FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{asset('appointment/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('appointment/css/style.css')}}" rel="stylesheet">
	<link href="{{asset('appointment/css/vendors.css')}}" rel="stylesheet">

    <!-- ALTERNATIVE COLORS CSS -->
    <link href="#" id="colors" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{asset('appointment/css/custom.css')}}" rel="stylesheet">

</head>

<body class="bg_color_gray">

<div id="preloader">
    <div data-loader="circle-side"></div>
</div>
<div id="loader_form">
    <div data-loader="circle-side-2"></div>
</div>

<div class="min-vh-100 d-flex flex-column">

    <header>
        <div class="container-fluid">
            <div class="row d-flex align-items-center">
                <div class="col-4">
                    <a data-bs-toggle="offcanvas" href="#offcanvasNav" role="button" class="btn_nav"><i class="bi bi-list"></i></a>
                </div>
                <div class="col-4 text-center">
                    <a href="{{url('/')}}"><img src="#" alt="logo" class="img-fluid" width="95" height="30"></a>
                </div>
            </div>
        </div>
        <!-- /container -->
    </header>
    <!-- /header -->

    <div class="container-fluid d-flex flex-column my-auto">

        <div id="wizard_container">

            <div id="top-wizard">
                <div id="progressbar"></div>
            </div>
            <!-- /top-wizard -->

            <form id="wrapped" method="POST">
                <input id="website" name="website" type="text" value="">
                <!-- Leave input above for security protection, read docs for details -->

                <div id="middle-wizard">
                    <div class="step">
                        <div class="question_title">
                            <h3>Please choose a date!</h3>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</p>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-7">
                                <div class="clearfix position-relative mb-3" id="inline-calendar">
                                    <input type="text" name="dates" id="dates" class="single required" hidden="hidden">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Step -->

                    <div class="step">
                        <div class="question_title">
                            <h3>Please select room type!</h3>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</p>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-10 mb-3">
                                <div class="form-floating">
                                    <select class="form-select required" id="room_type" name="room_type" aria-label="Room type">
                                        <option value selected>Please select</option>
                                        <option value="1">Single Room</option>
                                        <option value="1">Double Room</option>
                                        <option value="2">Double with single beds</option>
                                        <option value="3">Junior suite</option>
                                    </select>
                                    <label for="room_type">Room type</label>
                                </div>
                            </div>
                        </div>
                        <!-- /row -->
                    </div>
                    <!-- /Step -->

                    <div class="step">
                        <div class="question_title">
                            <h3>Please add number of guests?</h3>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</p>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-10">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="mb-3 qty-buttons">
                                            <input type="button" value="+" class="qtyplus" name="adults">
                                            <input type="text" name="adults" id="adults" value="" class="qty form-control required" placeholder="Adults">
                                            <input type="button" value="-" class="qtyminus" name="adults">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-3 qty-buttons">
                                            <input type="button" value="+" class="qtyplus" name="childs">
                                            <input type="text" name="childs" value="" class="qty form-control" placeholder="Childs">
                                            <input type="button" value="-" class="qtyminus" name="childs">
                                        </div>
                                    </div>
                                </div>
                                <!-- /row -->
                            </div>
                        </div>
                        <!-- /row -->
                    </div>
                    <!-- /Step -->

                    <div class="submit step">
                        <div class="question_title">
                            <h3>Please fill with your details</h3>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</p>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-7">
                                <div class="mb-3 form-floating">
                                    <input type="text" name="firstname" id="firstname" class="form-control required" placeholder="First Name">
                                    <label for="firstname">First Name</label>
                                </div>
                                <div class="mb-3 form-floating">
                                    <input type="text" name="lastname" id="lastname" class="form-control required" placeholder="Last Name">
                                    <label for="lastname">Last Name</label>
                                </div>
                                <div class="mb-3 form-floating">
                                    <input type="email" name="email" id="email" class="form-control required" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                                <div class="form-floating mb-4">
                                    <input type="text" name="telephone" id="telephone" class="form-control required" placeholder="Your Telephone">
                                    <label for="telephone">Your Telephone</label>
                                </div>
                                <div class="terms">
                                    <label class="container_check">Please accept our <a href="#" data-bs-toggle="modal" data-bs-target="#terms-txt">Terms and conditions</a>
                                        <input type="checkbox" name="terms" value="Yes" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- /row -->
                    </div>
                    <!-- /Step -->

                </div>
                <!-- /middle-wizard -->

                <div id="bottom-wizard">
                    <button type="button" name="backward" class="backward btn_1">Backward</button>
                    <button type="button" name="forward" class="forward btn_1 ciao">Forward</button>
                    <button type="submit" name="process" class="submit btn_1">Submit</button>
                </div>
                <!-- /bottom-wizard -->
                
            </form>
        </div>
        <!-- /Wizard container -->
    </div>
    <!-- /Container -->


</div>
<!-- /flex-column -->


<!-- Modal terms -->
<div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="termsLabel">Terms and conditions</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
                <p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
                <p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
            </div>
        </div>
        <!-- /modal-content -->
    </div>
    <!-- /modal-dialog -->
</div>
<!-- /modal -->
	
<!-- COMMON SCRIPTS -->
<script src="{{asset('appointment/js/common_scripts.min.js')}}"></script>
<script src="{{asset('appointment/js/common_functions.js')}}"></script>
<script src="{{asset('appointment/assets/validate.js')}}"></script>

<!-- SPECIFIC SCRIPTS -->
<script src="{{asset('appointment/js/reservation_wizard_func.js')}}"></script>
<script src="{{asset('appointment/js/daterangepicker_func.js')}}"></script> 

<!-- COLOR SWITCHER  -->
<script src="{{asset('appointment/js/switcher.js')}}"></script>

</body>
</html>