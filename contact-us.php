<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Multi-net Group Ltd is a leading investment holding company based in Abuja, Nigeria. With over 30 years high-level experience and investment success in several companies.">
    <meta name="author" content="">
    <meta name="keywords" content="multinet, multi-net, multinet group, multin-net group ltd, investment, investment company in nigeria, oil and gas, telecoms, agriculture, real estate, abuja, lagos">
    <title>Contact Us | Multinet Group Ltd</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="icon" href="images/fav.jpg">
</head><!--/head-->
<body>

  <!--  -->
  <?php include 'include/head.php'; ?>
  <!--  -->

    <section id="title" class="pomegranate">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>CONTACT US</h1>
                    <p>Get in touch for business enquiries and general information.</p>
                </div>
                <div class="col-sm-6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!--/#title-->

    <section id="contact-page" class="container">
        <div class="row">
            <div class="col-sm-8">
                <h4>Contact Form</h4>
                 <div class="status alert alert-success" style="display: none"></div> 
                <form id="main-contact-form" method="post" action="sendemail.php" role="form">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="form-group">
                                <input type="text" class="form-control" required="required" placeholder="First Name" name="firstname">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" required="required" placeholder="Last Name" name="lastname">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" required="required" placeholder="Email address" name="email">
                            </div>
                        </div>
                        <div class="col-sm-7">
                          <div class="form-group">
                            <textarea name="message" required="required" class="form-control" rows="7" placeholder="Message"></textarea>
                          </div>
                          <div class="form-group" align="right">
                            <button type="submit" name="submit" class="btn btn-danger">Send</button>
                          </div>
                        </div>
                    </div>
                </form>
            </div><!--/.col-sm-8-->
            <div class="col-sm-4">
                <h4>Our Location</h4>
                <iframe width="100%" height="215" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3939.705050257213!2d7.500325114808334!3d9.090610790523877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e0a3ff7fc1679%3A0xd3cce019bd23e3a8!2sOna+Cres%2C+Maitama%2C+Abuja!5e0!3m2!1sen!2sng!4v1546966057266"></iframe>
            </div><!--/.col-sm-4-->
        </div>
    </section><!--/#contact-page-->

    <!--  -->
    <?php include 'include/foot.php'; ?>
    <!--  -->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
