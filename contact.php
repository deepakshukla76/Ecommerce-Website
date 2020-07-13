<?php require './includes/common.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Contact Us | E- Store</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
</head>
<body>
        <?php include './includes/header.php'; ?>
        <div class="container">
            <div class="row">
              <div class="col-md-8">
                <h2>LIVE SUPPORT</h2>
                <h4>24 hours | 7 days a week | 365 days a year Live Technical Support</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae itaque magnam excepturi perspiciatis sunt veniam natus, modi a sequi animi expedita velit ex est provident minima reiciendis facilis distinctio quas.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae itaque magnam excepturi perspiciatis sunt veniam natus, modi a sequi animi expedita velit ex est provident minima reiciendis facilis distinctio quas.</p>
              </div>
              <div class="col-md-4">
                <img src="./img/contact.png" class="img-responsive" alt="Hello">
              </div>
            </div>
            <div class="row">
              <div class="col-md-7">
                  <h2>CONTACT US</h2>
                        <form  action="contact_script.php" method="POST">
                            <div class="form-group">
                                <input class="form-control" placeholder="Name" name="name"  required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Email"  name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="e-mail" required = "true">
                                <?php if(isset($_GET['m1'])) {echo $_GET['m1'];} ?>
                            </div>
                            <div class="form-group">
                                <textarea type="text" class="form-control input-lg" placeholder="Message" name="message" required></textarea>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            <?php
                                    if(isset($_GET['error'])) {echo $_GET['error'];}
                                    ?>
                        </form>
                    <br>
              </div>
              <div class="col-md-5">
                <h2>Company Information:</h2>
                <p>500 Lorem Ipsum dolor sit</p>
                <p>22-56-2-9 Sit Amet, Lorem,</p>
                <p>USA</p>
                <p>Phone:(00) 222 666 444</p>
                <p>Fax:(000) 000 00 00 0</p>
                <p>Email: info@mycompany.com</p>
                <p>Follow on: Facebook, Twitter</p>
              </div>
            </div>
        </div>
        <?php include './includes/footer.php'; ?>
</body>
</html>