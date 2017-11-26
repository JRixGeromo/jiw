
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>JIW - IntelWare</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <style>
    @font-face {
    font-family: Titillium-Thin;
    src: url(Titillium/Titillium-Thin.otf);
    }

    html *
    {
       font-family: Titillium-Thin !important;
    }

    </style>
    <!-- <link rel="stylesheet" href="https://bootswatch.com/4/solar/bootstrap.min.css" media="screen"> -->
    <link rel="stylesheet" href="bootstrap.css">
    <style>
    body {
    letter-spacing: 1px !important;
    text-transform: none !important;
    }     
    body {
    width: 100%;
    height: 100%;
    }
   .bg {
    position: relative;
    width: 100%;
    height: 100%;
    background-image: url(images/hp-bg.png);
    background-repeat: no-repeat;
    background-size: cover;
    display: block;
  }
  .display-3 {
      font-size: 1.5rem !important;
      margin-top: 20px;

  }
  p {
    text-align: justify;
  }

  .avatar {
      width:230px;
      background-color: #358f5b2e;
      margin: 1px;
      border:1px solid rgb(82, 82, 111);
      border-radius: 500px;
      -webkit-border-radius: 500px;
      -moz-border-radius: 500px;
  }    
    </style>
  </head>
  <body class="bg">
    <?php
    include "menu.php";
    ?>


    <div class="container" style="margin-top: 120px">


     
      <div class="bs-docs-section">

        <div class="row">
          <div class="col-lg-12">
            
            <div class="bs-component">
              <div class="jumbotron">
                <div class="text-center">
                  <img src="images/Rico-Geromo.png" class="rounded-circle avatar"><br>
                  <h2 style="color: #ffa501">Jose Rico Geromo</h2>
                </div>
                <p style="color: #d4d4d4; padding: 20px 0px 30px 0px; font-size: 18px">I'm a full stack, MEAN stack web developer living in the Philippines with 20+ years of experience. I make fully responsive/mobile friendly web application using various programming languages depending on client's preference like laravel, codeigniter, mysql, angular, express.js, nodejs, mongodb, etc...</p>
                <h1 class="display-3" style="color: #bbb">LOOKING FOR A WEBSITE DEVELOPER?</h1>
                <p><a class="btn btn-primary btn-md" href="#" style="margin-top: 10px" onclick="showcontact()">Contact Me</a></p>
              </div>
            </div>
          </div>
        </div>



      </div>

         

      <footer id="footer">
        <div class="row">
          <div class="col-lg-12">

            
            <p>© 2017 JIntelWare.com</p>

          </div>
        </div>

      </footer>


    </div>


    <script src="https://bootswatch.com/_vendor/jquery/dist/jquery.min.js"></script>
    <script src="https://bootswatch.com/_vendor/popper.js/dist/umd/popper.min.js"></script>
    <script src="https://bootswatch.com/_vendor/bootstrap/dist/js/bootstrap.min.js"></script>

  </body>
</html>

<?php
include "contact.php";
?>