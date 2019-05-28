<?php
include "lang/config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Porte folio">
    <meta name="keywords" content="Porte folio,HTML5,CSS3,BOOTSTRAP,ANIMATE,JAVASCRIPT,jQuery,WOW,PHP,">
    <link rel="icon" href="img/Portfolio.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.css">

    <!-- <link rel="stylesheet" href="js/all.js"> -->
    <script src="js/all.js"></script>
    <script src="js/wow.min.js"></script>
    <title><?php echo $lang["title"]?></title>
    <style>
    * {
        font-family: 'Playfair Display', serif;
    }
    </style>


<body>

    <div class="nav text-white text-center  ">
        <div class="overlay ">
            <h3 class=" height col-12">SALUT</h3><br>
            <h1 class=" height col-12 font-weight-bold">JE SUIS ABDELLAH OMARA</h1><br>
            <div class=" row  mx-auto" style="width: 220px;">
                <p class=" height"> devEloppeur  </p><br>
                <p class=" height  ">FRONT-END</p><br>
            </div>
            <a href="#about">
                <button type=" button" class="height btn btn-outline-light mx-auto">About me</button>
            </a>
        </div>
    </div>
    <nav class="navbar navbar-dark bg-dark fixed-top mt-3 ml-5 rounded">
        <!-- <a class="navbar-brand d-none" href="#">Navbar</a> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#resume">Resume<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#porte folio">Portefolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#cantact">Contacter moi</a>
                </li>

                <!-- <li class="nav-item">
                    <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Log in </a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-5" id="about">
        <span id="about"></span>
        <div class="row text-justify m-5">
            <h2 class=" col-12 text-center text-danger wow bounceInLeft">ABOUT</h2>
            <h1 class="col-12 text-center my-3 mb-5 wow bounceInRight ">Je vous presente</h1>
            <img src="img/profile-pic.jpg" alt="" class=" col-lg-2 col-sm-4 img-fluid img-thumbnail ">
            <p class="col-sm-8 col-lg-10 text-center text-secondary mt-2 " style="height: 20%">Je m'appelle ABDELLAH OMARA né en 1994 j'habite a YOUSSOUFIA d'origine a OUEDZEM .

</p>
            <div class="col-lg-6 text-center wow bounceInLeft my-4">
                <!-- <h5 class="font-weight-bolder  ">PROFILE</h5> -->
                <!-- <p></p> -->
                <h5 class="font-weight-bolder">NOM</h5>
                <p>Abdellah Omara</p>
                <h5 class="font-weight-bolder">Date de naissence</h5>
                <p>04/06/1994</p>
                <h5 class="font-weight-bolder">Formation</h5>
                <p>Freelancer, Frontend Developper</p>
                <!-- <h5 class="font-weight-bolder">WEBSITE:</h5>
                <p>www.kardswebsite.com</p>
                <h5 class="font-weight-bolder">WEBSITE:</h5>
                <p>www.kardswebsite.com</p> -->
                <h5 class="font-weight-bolder">Email</h5>
                <p>abdellahomara2@gmail.com</p>
                <!-- <button type="button" class="btn btn-outline-success float-right mr-5 w-75"> HIER ME</button> -->
            </div>
            <div class="col-lg-6 text-center my-4 wow bounceInRight">
                <h3>CENTRES D'INTERETS</h3>
                <P>•	Recherche sur l’internet. 
•	TAEKWONDO. 
•	Football. </P>
                <h5 class="font-weight-bolder">HTML</h5>
                <div class="progress my-3" style="height: 10px;">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 70%; " aria-valuenow="25"
                        aria-valuemin="0" aria-valuemax="100">70</div>
                </div>
                <h5 class="font-weight-bolder">CSS</h5>
                <div class="progress my-3 " style="height: 10px;">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 70%" aria-valuenow="50"
                        aria-valuemin="0" aria-valuemax="100">70%</div>
                </div>
                <h5 class="font-weight-bolder">BOOTSTRAP</h5>
                <div class="progress my-3 " style="height: 10px;">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 60%" aria-valuenow="75"
                        aria-valuemin="0" aria-valuemax="100">60</div>
                </div>
                <h5 class="font-weight-bolder">JAVASCRIPT</h5>
                <div class="progress my-3 " style="height: 10px;">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 45%" aria-valuenow="100"
                        aria-valuemin="0" aria-valuemax="100">45</div>
                </div>
                <h5 class="font-weight-bolder">PHP</h5>
                <div class="progress my-3 " style="height: 10px;">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 40%" aria-valuenow="100"
                        aria-valuemin="0" aria-valuemax="100">40</div>
                </div>
                <h5 class="font-weight-bolder">SQL</h5>
                <div class="progress my-3 " style="height: 10px;">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 40%" aria-valuenow="100"
                        aria-valuemin="0" aria-valuemax="100">40</div>
                </div>
                <button type="button" class="btn btn-outline-info mt-4 ml-4 w-75">
                    <i class="fas fa-download"></i>
                    DOWNLOAD CV
                </button>
            </div>

        </div>
    </div>
    <div class="container-fluid mt-5" id="resume">
        <div class="row bg-light ">
            <div class="col-12">
                <div class="text-center my-5 mx-auto">
                    <h4>RESUMER</h4>
                    <h1>Plus de mes références</h1>
                    <h1 class="text-warning">Educations</h1>
                    <!-- <p class="w-75  mx-auto">Lorem ipsum Do commodo in proident enim in dolor cupidatat adipisicing
                        dolore officia nisi aliqua incididunt Ut veniam lorem ipsum Consectetur ut in in eu do.</p> -->
                </div>
            </div>
            <!-- <h3 class="mx-auto d-block">Work Experience</h3> -->
            <div class="container w-50  ">
                <div class="row mb-5">
                    <div class="col-lg-5 col-sm-12">
                        <!-- <i class="fas fa-user-graduate"></i> -->
                        <h4 class="pr-5">ISTA IE CASABLANCA</h4>
                        <h5 class="pr-5">• 2016-2018</h5>
                        <br>
                        <br>
                        <h4 class="pr-5">ISTA OZ</h4>
                        <h5 class="pr-5">•	2014-2016</h5>

                    </div>
                    <div class="col-lg-7 col-sm-12 pl-5 border-left">
                        <h4>TCVVPR</h4>
                        <p>Technico-commerciale en vente de véhicule et du piéces de rechanges</p>
                        <br>
                        <br>
                        <h4>TREM</h4>
                        <p>technicien en réparation des engins a moteur</p>

                    </div>
                </div>
                <h1 class="text-center my-5 mx-auto text-warning">Experiences</h1>
                <div class="row">
                    <div class="col-lg-5 col-sm-12">
                    <h4 class="pr-5">Stage au sein de VOLVO TRUCKS</h4> 
                    <h5 class="pr-5">• 1-11-2017 au 30-05-2018</h5>
                    <br>
                    <br>
                    <h4 class="pr-5">S.A.V</h4>
                    <h5 class="pr-5">•	Service apres ventes.</h5>

                    </div>
                    <div class="col-sm-12 col-lg-7 pl-5 border-left">
                    <h4>S.A.V</h4>
                        <p>Service apres ventes.</p>
                        <br>
                        <br>
                        <h4>Reparations dans les atheliers centraux YOUSSOUFIA</h4>
                        <p>Travaux de service et réparations aux véhicules .</p>
                    </div>
                </div>
                <div class="row">
                    <!-- <div class="col-lg-5 col-sm-12">
                        <i class=" fas fa-user-graduate d-none d-lg-block"></i>
                        <h4 class="pr-5">Front-end Developer</h4>
                        <h5 class="pr-5">July 2014 - June 2015</h5>

                    </div> -->
                    <!-- <div class="col-lg-7 col-sm-12 pl-5 border-left">
                        <h4>Awesome Studio</h4>
                        <p>Lorem ipsum Occaecat do esse ex et dolor culpa nisi ex in magna consectetur nisi
                            cupidatat laboris esse eiusmod deserunt aute do quis velit esse sed Ut proident
                            cupidatat nulla esse cillum laborum occaecat nostrud sit dolor incididunt amet est
                            occaecat nisi.</p>

                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- start script porte folio -->
    <!-- fin script porte folio -->
    <div class="container" id="porte folio">
        <h1 class="mt-5 text-secondary">PORTE FOLIO</h1>
        <!-- <div class="row mt-5"> -->

        <?php
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName="abdelah";
        $conn =  mysqli_connect($host, $dbUsername, $dbPassword, $dbName);
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }else{
        $sql = "SELECT  description, image,lienGithub,title,id FROM portefolio";
        $result = $conn->query($sql);
           if ($result->num_rows > 0) {?>
        <div class='row'>
            <?php
                     // bookle while for show the data in dashbord 
                      while($row = $result->fetch_assoc()) {?>
            <div class="col-sm-12 col-lg-4 my-4  ">

                <div class="cards" style="width: 18rem;">
                    <img src="<?php	echo "img/porte folio/" . $row['image'] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-dark"><?php	echo $row['title'] ?></h5>
                        <p class="card-text text-dark"><?php	echo $row["description"] ?>.</p>
                        <a href="<?php	echo $row['lienGithub'] ?>" class="btn btn-dark ">Go to Github</a>
                    </div>
                </div>
            </div>

            <?php
                      }?>
        </div>
        <?php
          } else {
              echo "0 results";
          }
              $result->close();
        }
          ?>




        <!-- <div class="col-lg-4 mx-auto">
                <div class="cards mx-auto wow flipInY">
                    <img src="img/intro-bg.jpg" alt="" style="width:100%">
                    <div class="conta">
                        <h4><b>Jane Doe</b></h4>
                        <p>Interior Designer</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mx-auto wow flipInY">
                <div class="cards  mx-auto">
                    <img src="img/intro-bg.jpg" alt="" style="width:100%">
                    <div class="conta">
                        <h4><b>Jane Doe</b></h4>
                        <p>Interior Designer</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mx-auto wow flipInY">
                <div class="cards  mx-auto">
                    <img src="img/intro-bg.jpg" alt="" style="width:100%">
                    <div class="conta">
                        <h4><b>Jane Doe</b></h4>
                        <p>Interior Designer</p>
                    </div>
                </div>
            </div> -->
        <!-- </div> -->
    </div>

    <!-- start contact script -->

    <div class="container contact-form bg-dark rounded" id="cantact">
        <div class="contact-image">
            <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact" />
        </div>
        <form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
            <h3>Drop Us a Message</h3>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" name="txtName" class="form-control" placeholder="Your Name *" value=""
                            required />
                    </div>
                    <div class="form-group">
                        <input type="text" name="txtEmail" class="form-control" placeholder="Your Email *" value=""
                            required />
                    </div>
                    <div class="form-group">
                        <input type="text" name="txtPhone" class="form-control" placeholder="Your Phone Number *"
                            value="" required />
                    </div>
                    <div class="form-group">
                        <input type="submit" name="btnSubmit" class="btnContact" value="Send Message" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <textarea name="txtMsg" class="form-control" placeholder="Your Message *"
                            style="width: 100%; height: 150px;"></textarea>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4 text-white text-center">
                    <i class="fas fa-map-marker-alt"></i>
                    <h4>WHERE TO FIND ME</h4>
                    <p>1600 Amphitheatre Parkway
                        Mountain View, CA
                        94043 US
                    </p>
                </div>
                <div class="col-sm-12 col-lg-4 text-white text-center">
                    <i class="fas fa-envelope-open-text"></i>
                    <h4>WHERE TO FIND ME</h4>
                    <p>1600 Amphitheatre Parkway
                        Mountain View, CA
                        94043 US
                    </p>
                </div>
                <div class="col-sm-12  col-lg-4 text-white text-center">
                    <i class="fas fa-phone"></i>
                    <h4>WHERE TO FIND ME</h4>
                    <p>1600 Amphitheatre Parkway
                        Mountain View, CA
                        94043 US
                    </p>
                </div>

            </div>
        </form>
    </div>

    <!-- fin contact script -->

    <!-- =========================================================================
           script send email
	========================================================================= -->
    <?php
           
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      $Name = test_input($_POST["txtName"]); 
      $email = test_input($_POST["txtEmail"]);
      $phone = test_input($_POST["txtPhone"]);
      $text = test_input($_POST["txtMsg"]);
      $emailto = "chraiha1abdelati@gmail.com";
    
      if((!filter_var($Name, FILTER_SANITIZE_STRING)===false) and (!filter_var($email, FILTER_SANITIZE_EMAIL)===false)){
        
          mail($emailto,$Name,"From : ". $email. "the Phone is: " . $phone .  " message : ". $text);
          echo "<script> alert(\"Your message was sent\")</script>";
        }else{
          echo "<script> alert(\"Your message was not sent\")</script>";
        }
    }
    ?>
    <!-- fin script send email -->
    <!-- button lang -->
    <a href="index.php?language=fr" class="fixed-bottom m-3"><img
            src="https://img.icons8.com/color/32/000000/france.png"></a>
    <a href="index.php?language=en" class="fixed-bottom ml-3 mb-5 "><img
            src="https://img.icons8.com/color/32/000000/great-britain.png"></a>
    <!-- start script footer -->
    <footer class="container-fluid bg-dark text-white ">
        <div class="row  text-center mt-5 pt-5">

            <div class="col-sm-12  ">
                <img src="img/Portfolio.png" class="h-25 w-25 " alt="">
                <h1 class="font-weight-bold ">Follow Me </h1>
                <a href="" target="_blank"><i class="fab fa-github fa-2x"></i></a>
                <span class="px-5"><a href="" target="_blank"><i class="fab fa-linkedin fa-2x"></i></a></span>
                <a href="" target="_blank"><i class="fab fa-facebook fa-2x"></i></a>
                <p>Copyright © 2019 Tous droits réservés | Ce modèle est fait avec Abdelah OMARA</p>
            </div>

        </div>
    </footer>
    <!-- fin script footer -->
    <!-- script for slow the scroll -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <!-- fin script for slow the scroll -->
    <script>
    new WOW().init();
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>