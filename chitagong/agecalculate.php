﻿<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

 <!-- BEGIN HEAD -->
<head>
      <meta charset="UTF-8" />
    <title>NASA SPACE APP COMPETITION</title>
     <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
    <!-- GLOBAL STYLES -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/theme.css" />
    <link rel="stylesheet" href="assets/css/MoneAdmin.css" />
    <link rel="stylesheet" href="assets/plugins/Font-Awesome/css/font-awesome.css" />
    <!--END GLOBAL STYLES --> 

    <!-- PAGE LEVEL STYLES -->
    
 <link href="assets/css/jquery-ui.css" rel="stylesheet" />
<link rel="stylesheet" href="assets/plugins/uniform/themes/default/css/uniform.default.css" />
<link rel="stylesheet" href="assets/plugins/inputlimiter/jquery.inputlimiter.1.0.css" />
<link rel="stylesheet" href="assets/plugins/chosen/chosen.min.css" />
<link rel="stylesheet" href="assets/plugins/colorpicker/css/colorpicker.css" />
<link rel="stylesheet" href="assets/plugins/tagsinput/jquery.tagsinput.css" />
<link rel="stylesheet" href="assets/plugins/daterangepicker/daterangepicker-bs3.css" />
<link rel="stylesheet" href="assets/plugins/datepicker/css/datepicker.css" />
<link rel="stylesheet" href="assets/plugins/timepicker/css/bootstrap-timepicker.min.css" />
<link rel="stylesheet" href="assets/plugins/switch/static/stylesheets/bootstrap-switch.css" />
   
    <!-- END PAGE LEVEL  STYLES -->
   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

</head>
     <!-- END HEAD -->
     <!-- BEGIN BODY -->
<body class="padTop53 " >

       <!-- MAIN WRAPPER -->
    <div id="wrap">


          <!-- HEADER SECTION -->
        <div id="top">

            <nav class="navbar navbar-inverse navbar-fixed-top " style="padding-top: 10px;">
                <a data-original-title="Show/Hide Menu" data-placement="bottom" data-tooltip="tooltip" class="accordion-toggle btn btn-primary btn-sm visible-xs" data-toggle="collapse" href="#menu" id="menu-toggle">
                    <i class="icon-align-justify"></i>
                </a>
                <!-- LOGO SECTION -->
                <header class="navbar-header">

                    <a href="index.html" class="navbar-brand">
                    <img src="assets/img/logo.png" alt="" /></a>
                </header>
                <!-- END LOGO SECTION -->
                <ul class="nav navbar-top-links navbar-right">

                    
                </ul>

            </nav>

        </div>
        <!-- END HEADER SECTION -->



        <!-- MENU SECTION -->
       <div id="left">
            

            <ul id="menu" class="collapse">

                
                <li><a href="index.php"><i class="icon-home"></i> MASS Calculation </a></li>
                <li><a href="diametercalculate.php"><i class="icon-sun"></i> DIAMETER Calculation</a></li>
                <li><a href="densitycalculate.php"><i class="icon-map-marker"></i>DENSITY Calculation</a></li>
                <li><a href="gravitycalculate.php"><i class="icon-weibo"></i>GRAVITY Calculation</a></li>
                <li><a href="escape_velocitycalculate.php"><i class="icon-signal"></i>Escape Velocity Calculation</a></li>
                <li class="panel "><a href="3d.php" ><i class="icon-play"></i> 3D Solar System</a></li>

                

            </ul>

        </div>
        <!--END MENU SECTION -->

       <!--PAGE CONTENT -->
        <div id="content">
           
                <div class="inner">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">AGE Calculation ALL IN ONE
                    </h1>
                </div>
            </div>
                     
                                     
<div class="row">
    <div class="col-lg-12">
        <div class="box">
            <header>
                <h5><i class="icon-th-large"></i> ALL PLANET AGE Calculation</h5>
            </header>
            <div class="row">

               <div class="col-sm-6 col-md-4">
                
              </div>

               <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                  <img class=" col-sm-4" src="img/earth.png" alt="...">
                  <div class="caption">
                    <h3 style="text-align:center;">EARTH</h3>
                    

                    <form action="" class="form-horizontal" id="block-validate" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="control-label col-lg-12" style="text-align:center;">Your Age IN EARTH</label>
                            <label class="control-label col-lg-4">Year</label>
                            <label class="control-label col-lg-4">Month</label>
                            <label class="control-label col-lg-4">Day</label>
                            <div class="col-lg-4">
                                <input type="text" id="digits" name="year" class="control-label form-control" 


                                    <?php
          
                                          if (isset($_POST['earth']))
                                            {
                                              $year=$_POST['year'];
                                              $day_year=$year*365;
                                              $month=$_POST['month'];
                                              $day_month=$month*30;
                                              $day=$_POST['day'];
                                              $all_day=$day_year+$day_month+$day;


                                              $year=$all_day/365;
                                              $month_days=$all_day%365;
                                              $month=$month_days/30;
                                              $days=$month_days%30;

                                              echo 'value="'.$year.$month.$days.'"';
                                            } 
                                          elseif (isset($_POST['mercury']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0553;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['venus']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.815;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['moon']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0123;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['mars']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.107;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['jupiter']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/317.8;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['saturn']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/95.2;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['uranus']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/14.5;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['neptune']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/17.1;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['pluto']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0025;

                                              echo 'value="'.$digit.'"';
                                            }
                                          else{echo 'value=""';}
                                    ?>


                                />
                            </div>
                        


                        <div class="col-lg-4">
                                <input type="text" id="digits" name="month" class="control-label form-control" 


                                    <?php
          
                                          if (isset($_POST['earth']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['mercury']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0553;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['venus']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.815;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['moon']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0123;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['mars']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.107;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['jupiter']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/317.8;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['saturn']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/95.2;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['uranus']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/14.5;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['neptune']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/17.1;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['pluto']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0025;

                                              echo 'value="'.$digit.'"';
                                            }
                                          else{echo 'value=""';}
                                    ?>


                                />
                            </div>


                        <div class="col-lg-4">
                                <input type="text" id="digits" name="day" class="form-control" 


                                    <?php
          
                                          if (isset($_POST['earth']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['mercury']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0553;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['venus']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.815;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['moon']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0123;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['mars']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.107;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['jupiter']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/317.8;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['saturn']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/95.2;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['uranus']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/14.5;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['neptune']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/17.1;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['pluto']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0025;

                                              echo 'value="'.$digit.'"';
                                            }
                                          else{echo 'value=""';}
                                    ?>


                                />
                            </div>
                        </div>

                        <div class="form-actions no-margin-bottom" style="text-align:center;">
                            <input type="submit" value="Calculate" class="btn btn-primary btn-lg " name="earth"/>
                        </div>

                    </form>


                  </div>
                </div>
              </div>


              <div class="col-sm-6 col-md-4">
                

              </div>


            </div>
            

            <div class="row">

               <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                  <img class=" col-sm-4" src="img/earth.png" alt="...">
                  <div class="caption">
                    <h3 style="text-align:center;">EARTH</h3>
                    

                    <form action="" class="form-horizontal" id="block-validate" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="control-label col-lg-12" style="text-align:center;">Your Age IN EARTH</label>
                            <label class="control-label col-lg-4">Year</label>
                            <label class="control-label col-lg-4">Month</label>
                            <label class="control-label col-lg-4">Day</label>
                            <div class="col-lg-4">
                                <input type="text" id="digits" name="year" class="control-label form-control" 


                                    <?php
          
                                          if (isset($_POST['earth']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['mercury']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0553;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['venus']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.815;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['moon']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0123;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['mars']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.107;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['jupiter']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/317.8;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['saturn']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/95.2;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['uranus']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/14.5;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['neptune']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/17.1;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['pluto']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0025;

                                              echo 'value="'.$digit.'"';
                                            }
                                          else{echo 'value=""';}
                                    ?>


                                />
                            </div>
                        


                        <div class="col-lg-4">
                                <input type="text" id="digits" name="month" class="control-label form-control" 


                                    <?php
          
                                          if (isset($_POST['earth']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['mercury']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0553;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['venus']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.815;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['moon']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0123;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['mars']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.107;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['jupiter']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/317.8;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['saturn']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/95.2;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['uranus']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/14.5;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['neptune']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/17.1;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['pluto']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0025;

                                              echo 'value="'.$digit.'"';
                                            }
                                          else{echo 'value=""';}
                                    ?>


                                />
                            </div>


                        <div class="col-lg-4">
                                <input type="text" id="digits" name="day" class="form-control" 


                                    <?php
          
                                          if (isset($_POST['earth']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['mercury']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0553;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['venus']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.815;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['moon']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0123;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['mars']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.107;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['jupiter']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/317.8;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['saturn']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/95.2;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['uranus']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/14.5;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['neptune']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/17.1;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['pluto']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0025;

                                              echo 'value="'.$digit.'"';
                                            }
                                          else{echo 'value=""';}
                                    ?>


                                />
                            </div>
                        </div>

                        <div class="form-actions no-margin-bottom" style="text-align:center;">
                            <input type="submit" value="Calculate" class="btn btn-primary btn-lg " name="earth"/>
                        </div>

                    </form>


                  </div>
                </div>
              </div>



               <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                  <img class=" col-sm-4" src="img/earth.png" alt="...">
                  <div class="caption">
                    <h3 style="text-align:center;">EARTH</h3>
                    

                    <form action="" class="form-horizontal" id="block-validate" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="control-label col-lg-12" style="text-align:center;">Your Age IN EARTH</label>
                            <label class="control-label col-lg-4">Year</label>
                            <label class="control-label col-lg-4">Month</label>
                            <label class="control-label col-lg-4">Day</label>
                            <div class="col-lg-4">
                                <input type="text" id="digits" name="year" class="control-label form-control" 


                                    <?php
          
                                          if (isset($_POST['earth']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['mercury']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0553;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['venus']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.815;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['moon']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0123;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['mars']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.107;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['jupiter']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/317.8;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['saturn']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/95.2;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['uranus']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/14.5;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['neptune']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/17.1;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['pluto']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0025;

                                              echo 'value="'.$digit.'"';
                                            }
                                          else{echo 'value=""';}
                                    ?>


                                />
                            </div>
                        


                        <div class="col-lg-4">
                                <input type="text" id="digits" name="month" class="control-label form-control" 


                                    <?php
          
                                          if (isset($_POST['earth']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['mercury']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0553;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['venus']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.815;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['moon']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0123;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['mars']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.107;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['jupiter']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/317.8;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['saturn']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/95.2;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['uranus']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/14.5;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['neptune']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/17.1;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['pluto']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0025;

                                              echo 'value="'.$digit.'"';
                                            }
                                          else{echo 'value=""';}
                                    ?>


                                />
                            </div>


                        <div class="col-lg-4">
                                <input type="text" id="digits" name="day" class="form-control" 


                                    <?php
          
                                          if (isset($_POST['earth']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['mercury']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0553;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['venus']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.815;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['moon']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0123;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['mars']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.107;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['jupiter']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/317.8;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['saturn']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/95.2;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['uranus']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/14.5;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['neptune']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/17.1;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['pluto']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0025;

                                              echo 'value="'.$digit.'"';
                                            }
                                          else{echo 'value=""';}
                                    ?>


                                />
                            </div>
                        </div>

                        <div class="form-actions no-margin-bottom" style="text-align:center;">
                            <input type="submit" value="Calculate" class="btn btn-primary btn-lg " name="earth"/>
                        </div>

                    </form>


                  </div>
                </div>
              </div>



               <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                  <img class=" col-sm-4" src="img/earth.png" alt="...">
                  <div class="caption">
                    <h3 style="text-align:center;">EARTH</h3>
                    

                    <form action="" class="form-horizontal" id="block-validate" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="control-label col-lg-12" style="text-align:center;">Your Age IN EARTH</label>
                            <label class="control-label col-lg-4">Year</label>
                            <label class="control-label col-lg-4">Month</label>
                            <label class="control-label col-lg-4">Day</label>
                            <div class="col-lg-4">
                                <input type="text" id="digits" name="year" class="control-label form-control" 


                                    <?php
          
                                          if (isset($_POST['earth']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['mercury']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0553;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['venus']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.815;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['moon']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0123;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['mars']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.107;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['jupiter']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/317.8;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['saturn']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/95.2;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['uranus']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/14.5;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['neptune']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/17.1;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['pluto']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0025;

                                              echo 'value="'.$digit.'"';
                                            }
                                          else{echo 'value=""';}
                                    ?>


                                />
                            </div>
                        


                        <div class="col-lg-4">
                                <input type="text" id="digits" name="month" class="control-label form-control" 


                                    <?php
          
                                          if (isset($_POST['earth']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['mercury']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0553;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['venus']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.815;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['moon']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0123;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['mars']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.107;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['jupiter']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/317.8;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['saturn']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/95.2;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['uranus']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/14.5;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['neptune']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/17.1;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['pluto']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0025;

                                              echo 'value="'.$digit.'"';
                                            }
                                          else{echo 'value=""';}
                                    ?>


                                />
                            </div>


                        <div class="col-lg-4">
                                <input type="text" id="digits" name="day" class="form-control" 


                                    <?php
          
                                          if (isset($_POST['earth']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['mercury']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0553;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['venus']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.815;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['moon']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0123;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['mars']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.107;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['jupiter']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/317.8;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['saturn']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/95.2;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['uranus']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/14.5;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['neptune']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/17.1;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['pluto']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0025;

                                              echo 'value="'.$digit.'"';
                                            }
                                          else{echo 'value=""';}
                                    ?>


                                />
                            </div>
                        </div>

                        <div class="form-actions no-margin-bottom" style="text-align:center;">
                            <input type="submit" value="Calculate" class="btn btn-primary btn-lg " name="earth"/>
                        </div>

                    </form>


                  </div>
                </div>
              </div>


             

            </div>
<div class="row">

               <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                  <img class=" col-sm-4" src="img/earth.png" alt="...">
                  <div class="caption">
                    <h3 style="text-align:center;">EARTH</h3>
                    

                    <form action="" class="form-horizontal" id="block-validate" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="control-label col-lg-12" style="text-align:center;">Your Age IN EARTH</label>
                            <label class="control-label col-lg-4">Year</label>
                            <label class="control-label col-lg-4">Month</label>
                            <label class="control-label col-lg-4">Day</label>
                            <div class="col-lg-4">
                                <input type="text" id="digits" name="year" class="control-label form-control" 


                                    <?php
          
                                          if (isset($_POST['earth']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['mercury']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0553;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['venus']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.815;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['moon']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0123;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['mars']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.107;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['jupiter']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/317.8;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['saturn']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/95.2;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['uranus']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/14.5;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['neptune']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/17.1;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['pluto']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0025;

                                              echo 'value="'.$digit.'"';
                                            }
                                          else{echo 'value=""';}
                                    ?>


                                />
                            </div>
                        


                        <div class="col-lg-4">
                                <input type="text" id="digits" name="month" class="control-label form-control" 


                                    <?php
          
                                          if (isset($_POST['earth']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['mercury']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0553;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['venus']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.815;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['moon']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0123;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['mars']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.107;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['jupiter']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/317.8;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['saturn']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/95.2;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['uranus']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/14.5;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['neptune']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/17.1;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['pluto']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0025;

                                              echo 'value="'.$digit.'"';
                                            }
                                          else{echo 'value=""';}
                                    ?>


                                />
                            </div>


                        <div class="col-lg-4">
                                <input type="text" id="digits" name="day" class="form-control" 


                                    <?php
          
                                          if (isset($_POST['earth']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['mercury']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0553;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['venus']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.815;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['moon']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0123;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['mars']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.107;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['jupiter']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/317.8;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['saturn']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/95.2;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['uranus']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/14.5;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['neptune']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/17.1;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['pluto']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0025;

                                              echo 'value="'.$digit.'"';
                                            }
                                          else{echo 'value=""';}
                                    ?>


                                />
                            </div>
                        </div>

                        <div class="form-actions no-margin-bottom" style="text-align:center;">
                            <input type="submit" value="Calculate" class="btn btn-primary btn-lg " name="earth"/>
                        </div>

                    </form>


                  </div>
                </div>
              </div>



               <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                  <img class=" col-sm-4" src="img/earth.png" alt="...">
                  <div class="caption">
                    <h3 style="text-align:center;">EARTH</h3>
                    

                    <form action="" class="form-horizontal" id="block-validate" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="control-label col-lg-12" style="text-align:center;">Your Age IN EARTH</label>
                            <label class="control-label col-lg-4">Year</label>
                            <label class="control-label col-lg-4">Month</label>
                            <label class="control-label col-lg-4">Day</label>
                            <div class="col-lg-4">
                                <input type="text" id="digits" name="year" class="control-label form-control" 


                                    <?php
          
                                          if (isset($_POST['earth']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['mercury']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0553;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['venus']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.815;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['moon']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0123;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['mars']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.107;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['jupiter']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/317.8;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['saturn']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/95.2;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['uranus']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/14.5;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['neptune']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/17.1;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['pluto']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0025;

                                              echo 'value="'.$digit.'"';
                                            }
                                          else{echo 'value=""';}
                                    ?>


                                />
                            </div>
                        


                        <div class="col-lg-4">
                                <input type="text" id="digits" name="month" class="control-label form-control" 


                                    <?php
          
                                          if (isset($_POST['earth']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['mercury']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0553;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['venus']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.815;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['moon']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0123;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['mars']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.107;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['jupiter']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/317.8;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['saturn']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/95.2;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['uranus']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/14.5;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['neptune']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/17.1;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['pluto']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0025;

                                              echo 'value="'.$digit.'"';
                                            }
                                          else{echo 'value=""';}
                                    ?>


                                />
                            </div>


                        <div class="col-lg-4">
                                <input type="text" id="digits" name="day" class="form-control" 


                                    <?php
          
                                          if (isset($_POST['earth']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['mercury']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0553;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['venus']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.815;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['moon']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0123;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['mars']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.107;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['jupiter']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/317.8;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['saturn']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/95.2;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['uranus']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/14.5;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['neptune']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/17.1;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['pluto']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0025;

                                              echo 'value="'.$digit.'"';
                                            }
                                          else{echo 'value=""';}
                                    ?>


                                />
                            </div>
                        </div>

                        <div class="form-actions no-margin-bottom" style="text-align:center;">
                            <input type="submit" value="Calculate" class="btn btn-primary btn-lg " name="earth"/>
                        </div>

                    </form>


                  </div>
                </div>
              </div>



               <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                  <img class=" col-sm-4" src="img/earth.png" alt="...">
                  <div class="caption">
                    <h3 style="text-align:center;">EARTH</h3>
                    

                    <form action="" class="form-horizontal" id="block-validate" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="control-label col-lg-12" style="text-align:center;">Your Age IN EARTH</label>
                            <label class="control-label col-lg-4">Year</label>
                            <label class="control-label col-lg-4">Month</label>
                            <label class="control-label col-lg-4">Day</label>
                            <div class="col-lg-4">
                                <input type="text" id="digits" name="year" class="control-label form-control" 


                                    <?php
          
                                          if (isset($_POST['earth']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['mercury']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0553;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['venus']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.815;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['moon']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0123;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['mars']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.107;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['jupiter']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/317.8;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['saturn']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/95.2;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['uranus']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/14.5;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['neptune']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/17.1;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['pluto']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0025;

                                              echo 'value="'.$digit.'"';
                                            }
                                          else{echo 'value=""';}
                                    ?>


                                />
                            </div>
                        


                        <div class="col-lg-4">
                                <input type="text" id="digits" name="month" class="control-label form-control" 


                                    <?php
          
                                          if (isset($_POST['earth']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['mercury']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0553;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['venus']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.815;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['moon']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0123;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['mars']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.107;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['jupiter']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/317.8;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['saturn']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/95.2;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['uranus']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/14.5;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['neptune']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/17.1;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['pluto']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0025;

                                              echo 'value="'.$digit.'"';
                                            }
                                          else{echo 'value=""';}
                                    ?>


                                />
                            </div>


                        <div class="col-lg-4">
                                <input type="text" id="digits" name="day" class="form-control" 


                                    <?php
          
                                          if (isset($_POST['earth']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['mercury']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0553;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['venus']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.815;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['moon']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0123;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['mars']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.107;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['jupiter']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/317.8;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['saturn']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/95.2;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['uranus']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/14.5;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['neptune']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/17.1;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['pluto']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0025;

                                              echo 'value="'.$digit.'"';
                                            }
                                          else{echo 'value=""';}
                                    ?>


                                />
                            </div>
                        </div>

                        <div class="form-actions no-margin-bottom" style="text-align:center;">
                            <input type="submit" value="Calculate" class="btn btn-primary btn-lg " name="earth"/>
                        </div>

                    </form>


                  </div>
                </div>
              </div>


             

            </div>
<div class="row">

               <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                  <img class=" col-sm-4" src="img/earth.png" alt="...">
                  <div class="caption">
                    <h3 style="text-align:center;">EARTH</h3>
                    

                    <form action="" class="form-horizontal" id="block-validate" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="control-label col-lg-12" style="text-align:center;">Your Age IN EARTH</label>
                            <label class="control-label col-lg-4">Year</label>
                            <label class="control-label col-lg-4">Month</label>
                            <label class="control-label col-lg-4">Day</label>
                            <div class="col-lg-4">
                                <input type="text" id="digits" name="year" class="control-label form-control" 


                                    <?php
          
                                          if (isset($_POST['earth']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['mercury']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0553;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['venus']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.815;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['moon']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0123;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['mars']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.107;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['jupiter']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/317.8;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['saturn']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/95.2;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['uranus']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/14.5;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['neptune']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/17.1;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['pluto']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0025;

                                              echo 'value="'.$digit.'"';
                                            }
                                          else{echo 'value=""';}
                                    ?>


                                />
                            </div>
                        


                        <div class="col-lg-4">
                                <input type="text" id="digits" name="month" class="control-label form-control" 


                                    <?php
          
                                          if (isset($_POST['earth']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['mercury']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0553;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['venus']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.815;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['moon']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0123;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['mars']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.107;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['jupiter']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/317.8;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['saturn']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/95.2;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['uranus']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/14.5;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['neptune']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/17.1;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['pluto']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0025;

                                              echo 'value="'.$digit.'"';
                                            }
                                          else{echo 'value=""';}
                                    ?>


                                />
                            </div>


                        <div class="col-lg-4">
                                <input type="text" id="digits" name="day" class="form-control" 


                                    <?php
          
                                          if (isset($_POST['earth']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['mercury']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0553;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['venus']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.815;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['moon']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0123;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['mars']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.107;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['jupiter']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/317.8;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['saturn']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/95.2;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['uranus']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/14.5;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['neptune']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/17.1;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['pluto']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0025;

                                              echo 'value="'.$digit.'"';
                                            }
                                          else{echo 'value=""';}
                                    ?>


                                />
                            </div>
                        </div>

                        <div class="form-actions no-margin-bottom" style="text-align:center;">
                            <input type="submit" value="Calculate" class="btn btn-primary btn-lg " name="earth"/>
                        </div>

                    </form>


                  </div>
                </div>
              </div>



              <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                  <img class=" col-sm-4" src="img/earth.png" alt="...">
                  <div class="caption">
                    <h3 style="text-align:center;">EARTH</h3>
                    

                    <form action="" class="form-horizontal" id="block-validate" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="control-label col-lg-12" style="text-align:center;">Your Age IN EARTH</label>
                            <label class="control-label col-lg-4">Year</label>
                            <label class="control-label col-lg-4">Month</label>
                            <label class="control-label col-lg-4">Day</label>
                            <div class="col-lg-4">
                                <input type="text" id="digits" name="year" class="control-label form-control" 


                                    <?php
          
                                          if (isset($_POST['earth']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['mercury']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0553;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['venus']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.815;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['moon']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0123;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['mars']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.107;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['jupiter']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/317.8;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['saturn']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/95.2;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['uranus']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/14.5;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['neptune']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/17.1;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['pluto']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0025;

                                              echo 'value="'.$digit.'"';
                                            }
                                          else{echo 'value=""';}
                                    ?>


                                />
                            </div>
                        


                        <div class="col-lg-4">
                                <input type="text" id="digits" name="month" class="control-label form-control" 


                                    <?php
          
                                          if (isset($_POST['earth']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['mercury']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0553;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['venus']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.815;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['moon']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0123;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['mars']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.107;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['jupiter']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/317.8;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['saturn']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/95.2;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['uranus']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/14.5;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['neptune']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/17.1;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['pluto']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0025;

                                              echo 'value="'.$digit.'"';
                                            }
                                          else{echo 'value=""';}
                                    ?>


                                />
                            </div>


                        <div class="col-lg-4">
                                <input type="text" id="digits" name="day" class="form-control" 


                                    <?php
          
                                          if (isset($_POST['earth']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['mercury']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0553;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['venus']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.815;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['moon']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0123;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['mars']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.107;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['jupiter']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/317.8;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['saturn']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/95.2;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['uranus']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/14.5;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['neptune']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/17.1;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['pluto']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0025;

                                              echo 'value="'.$digit.'"';
                                            }
                                          else{echo 'value=""';}
                                    ?>


                                />
                            </div>
                        </div>

                        <div class="form-actions no-margin-bottom" style="text-align:center;">
                            <input type="submit" value="Calculate" class="btn btn-primary btn-lg " name="earth"/>
                        </div>

                    </form>


                  </div>
                </div>
              </div>



              <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                  <img class=" col-sm-4" src="img/earth.png" alt="...">
                  <div class="caption">
                    <h3 style="text-align:center;">EARTH</h3>
                    

                    <form action="" class="form-horizontal" id="block-validate" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="control-label col-lg-12" style="text-align:center;">Your Age IN EARTH</label>
                            <label class="control-label col-lg-4">Year</label>
                            <label class="control-label col-lg-4">Month</label>
                            <label class="control-label col-lg-4">Day</label>
                            <div class="col-lg-4">
                                <input type="text" id="digits" name="year" class="control-label form-control" 


                                    <?php
          
                                          if (isset($_POST['earth']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['mercury']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0553;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['venus']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.815;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['moon']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0123;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['mars']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.107;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['jupiter']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/317.8;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['saturn']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/95.2;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['uranus']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/14.5;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['neptune']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/17.1;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['pluto']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0025;

                                              echo 'value="'.$digit.'"';
                                            }
                                          else{echo 'value=""';}
                                    ?>


                                />
                            </div>
                        


                        <div class="col-lg-4">
                                <input type="text" id="digits" name="month" class="control-label form-control" 


                                    <?php
          
                                          if (isset($_POST['earth']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['mercury']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0553;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['venus']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.815;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['moon']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0123;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['mars']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.107;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['jupiter']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/317.8;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['saturn']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/95.2;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['uranus']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/14.5;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['neptune']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/17.1;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['pluto']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0025;

                                              echo 'value="'.$digit.'"';
                                            }
                                          else{echo 'value=""';}
                                    ?>


                                />
                            </div>


                        <div class="col-lg-4">
                                <input type="text" id="digits" name="day" class="form-control" 


                                    <?php
          
                                          if (isset($_POST['earth']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['mercury']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0553;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['venus']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.815;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['moon']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0123;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['mars']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.107;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['jupiter']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/317.8;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['saturn']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/95.2;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['uranus']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/14.5;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['neptune']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/17.1;

                                              echo 'value="'.$digit.'"';
                                            } 
                                          elseif (isset($_POST['pluto']))
                                            {
                                              $digits=$_POST['digits'];
                                              $digit=$digits/0.0025;

                                              echo 'value="'.$digit.'"';
                                            }
                                          else{echo 'value=""';}
                                    ?>


                                />
                            </div>
                        </div>

                        <div class="form-actions no-margin-bottom" style="text-align:center;">
                            <input type="submit" value="Calculate" class="btn btn-primary btn-lg " name="earth"/>
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
        <!-- END PAGE CONTENT -->

                </div>
        
    
       <!--END MAIN WRAPPER -->

   <!-- FOOTER -->
    <div id="footer">
        <p>&copy;  NASA SPACE APP COMPETITION &nbsp;2017 &nbsp;</p>
    </div>
    <!--END FOOTER -->


     <!-- GLOBAL SCRIPTS -->
    <script src="assets/plugins/jquery-2.0.3.min.js"></script>
     <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- END GLOBAL SCRIPTS -->


      <!-- PAGE LEVEL SCRIPT-->
 <script src="assets/js/jquery-ui.min.js"></script>
 <script src="assets/plugins/uniform/jquery.uniform.min.js"></script>
<script src="assets/plugins/inputlimiter/jquery.inputlimiter.1.3.1.min.js"></script>
<script src="assets/plugins/chosen/chosen.jquery.min.js"></script>
<script src="assets/plugins/colorpicker/js/bootstrap-colorpicker.js"></script>
<script src="assets/plugins/tagsinput/jquery.tagsinput.min.js"></script>
<script src="assets/plugins/validVal/js/jquery.validVal.min.js"></script>
<script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
<script src="assets/plugins/daterangepicker/moment.min.js"></script>
<script src="assets/plugins/datepicker/js/bootstrap-datepicker.js"></script>
<script src="assets/plugins/timepicker/js/bootstrap-timepicker.min.js"></script>
<script src="assets/plugins/switch/static/js/bootstrap-switch.min.js"></script>
<script src="assets/plugins/jquery.dualListbox-1.3/jquery.dualListBox-1.3.min.js"></script>
<script src="assets/plugins/autosize/jquery.autosize.min.js"></script>
<script src="assets/plugins/jasny/js/bootstrap-inputmask.js"></script>
       <script src="assets/js/formsInit.js"></script>
        <script>
            $(function () { formInit(); });
        </script>
        
     <!--END PAGE LEVEL SCRIPT-->
     
</body>
     <!-- END BODY -->
</html>
