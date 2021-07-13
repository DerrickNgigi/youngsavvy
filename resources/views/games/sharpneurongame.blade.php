<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo url('/'); ?>/images/YoungSavvy.png">

    <!-- Title Page-->
    <title>Free Robotics and Coding Class </title>

    <!-- Icons font CSS-->
    <link href="<?php echo url('/'); ?>/games/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="<?php echo url('/'); ?>/games/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="<?php echo url('/'); ?>/games/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?php echo url('/'); ?>/games/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo url('/'); ?>/games/css/main.css" rel="stylesheet" media="all">
</head>

<body>
<div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
    <div class="wrapper wrapper--w680">
        <div class="card card-4">
            <div class="card-body">
                <h2 class="title" style="text-align: center">Free Robotics and Coding Class</h2>
                <form  method="POST"  action="{{ route('game_sign_in') }}" >
                @csrf
{{--                    action=" {!! route('route-name',$post->id) !!}"--}}
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">first name</label>
                                <input class="input--style-4" type="text" name="first_name" required>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">last name</label>
                                <input class="input--style-4" type="text" name="last_name" required>
                            </div>
                        </div>
                    </div>
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Birthday</label>
                                <div class="input-group-icon">
                                    <input class="input--style-4 js-datepicker" type="text" name="birthday" required>
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Gender</label>
                                <div class="rs-select2 js-select-simple select--no-search">
                                    <select name="gender">
                                        <option disabled="disabled" selected="selected">Choose Gender</option>
                                        <option>Female</option>
                                        <option>Male</option>
                                    </select>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">School</label>
                                <input class="input--style-4" type="text" name="school" required>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Grade</label>
                                <div class="rs-select2 js-select-simple select--no-search">
                                    <select name="grade">
                                        <option disabled="disabled" selected="selected">Choose option</option>
                                        <option>Grade 1</option>
                                        <option>Grade 2</option>
                                        <option>Grade 3</option>
                                        <option>Grade 4</option>
                                        <option>Grade 5</option>
                                        <option>Grade 6</option>
                                        <option>Grade 7</option>
                                        <option>Grade 8</option>
                                        <option>Grade 9</option>
                                    </select>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Parent's Email</label>
                                <input class="input--style-4" type="email" name="parent_email" required>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Parent's Number</label>
                                <input class="input--style-4 " type="tel" name="parent_number" pattern="[0-9]{4}[0-9]{6}" placeholder="0722123456" required>
                            </div>
                        </div>
                    </div>
                    <div class="row row-space">
                        <div class="col-4">
                            <div class="input-group">
                                <label class="label">Home Area</label>
                                <input class="input--style-4" type="text" name="home_area" required>
                            </div>
                        </div>
                    </div>
                    <div class="p-t-15">
                        <button class="btn btn--radius-2 btn--blue" type="submit">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Jquery JS-->
<script src="<?php echo url('/'); ?>/games/vendor/jquery/jquery.min.js"></script>
<!-- Vendor JS-->
<script src="<?php echo url('/'); ?>/games/vendor/select2/select2.min.js"></script>
<script src="<?php echo url('/'); ?>/games/vendor/datepicker/moment.min.js"></script>
<script src="<?php echo url('/'); ?>/games/vendor/datepicker/daterangepicker.js"></script>
<!-- Main JS-->
<script src="<?php echo url('/'); ?>/games/js/global.js"></script>
<script>
    $( function() {
        $('.date').datepicker({
            format: '{{ config('app.date_format_javascript') }}',
            locale: 'en'
        });
    });
</script>

</body>

</html>
<!-- end document-->
