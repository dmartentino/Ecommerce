
<!-- Configuration-->

<?php require_once("../resources/config.php"); ?>
<head>

<<<<<<< HEAD
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">

   

=======
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">
>>>>>>> 1577774235dea1a4539881963e5377743790bc78
</head>

     <!--Navigation -->

<<<<<<< HEAD
	<?php include(TEMPLATE_FRONT .  "/header.php");?>
=======
<?php include(TEMPLATE_FRONT .  "/header.php");?>
>>>>>>> 1577774235dea1a4539881963e5377743790bc78

         <!-- Contact Section -->

        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                      <h2 class="text-center bg-warning"><?php display_message() ?></h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
<<<<<<< HEAD
                    <form name="sentMessage" id="contactForm" method="POST" >
						
						<?php send_message(); ?>
=======
                    <form name="sentMessage" id="contactForm" >
                         <?php send_message(); ?>
>>>>>>> 1577774235dea1a4539881963e5377743790bc78
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="subject" class="form-control" placeholder="Your Subject *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
<<<<<<< HEAD
                                    <textarea class="form-control" name="message" placeholder="Your Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
=======
                                    <textarea name="message" class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
>>>>>>> 1577774235dea1a4539881963e5377743790bc78
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
<<<<<<< HEAD
                                <button name="submit" type="submit" class="btn btn-xl">Send Message</button>
=======
                                <button type="submit" name="submit" class="btn btn-xl">Send Message</button>
>>>>>>> 1577774235dea1a4539881963e5377743790bc78
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->
<?php include(TEMPLATE_FRONT .  "/footer.php");?>
