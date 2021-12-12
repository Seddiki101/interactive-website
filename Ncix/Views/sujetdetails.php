<?php
require_once "../Controller/sujetc.php";
require_once "../Model/sujet.php";
require_once "../config.php";
require_once "../Controller/blogC.php";
$sujetc = new sujetc();
if(isset($_GET["id"]))
{
     
    $id = $_GET["id"] ;
    $sujetc = new sujetc();
    $blogC = new blogC(); 
    $conmments = $blogC->sujetjoin($id);
    $selectedsujet = $sujetc->getsujet($id);
    $sujetc->incremateviews($id, $selectedsujet['views'], 'views');
	if(isset($_POST['like'])){
		$sujetc->incremateviews($id, $selectedsujet['likes'], 'likes');

	}
	
	
}


?>
<!DOCTYPE HTML>
<html>

<head>
    <title>NCIX</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/css/main.css" />

    <noscript>
        <link rel="stylesheet" href="../assets/css/noscript.css" />
    </noscript>
    <style>
        .comments-section{
		display: flex;
	}
	.img-user{
		width: 50px;
		height: 50px;
        background: darkgrey;
    border-radius: 50%;
	}
    </style>
</head>


<script>
       

        function verif() {
            if ( /\d/.test(f1.name.value ))   {
                document.getElementById('message').innerHTML = "nom doit contenir que de alphbé";
                return false;

            }
            if(f1.message.value.length <10){
                document.getElementById('message').innerHTML = "message doit contenir au moin 10 caratctére";
                return false;
            }
            if(f1.email.value.length==0){
                document.getElementById('message').innerHTML = "email est obligatoire";
                return false;
            }
            
            document.getElementById("f").submit();

            // return true;

        }
    </script>
<body class="is-preload">

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Header -->
        <header id="header" class="alt">
            <a href="index.html" class="logo"><strong>NCIX</strong> <span>Website</span></a>
            <nav>
                <button id="signb"><a href="Sign in.html">Sign in</a></button>
                <button id="signb"><a href="Inscription.html">Sign Up</a></button>
                <a href="#menu">Menu</a>
            </nav>
        </header>

        <!-- Menu -->
        <nav id="menu">
            <ul class="links">
                <li> <a href="index.html">Home </a> </li>

                <li> <a href="jobs.html">Jobs</a> </li>

                <li class="active"> <a href="blog.html">Blog</a> </li>

                <li> <a href="about-us.html">About Us</a> </li>

                <li><a href="team.html">Team</a></li>

                <li><a href="testimonials.html">Testimonials</a></li>

                <li><a href="terms.html">Terms</a></li>

                <li><a href="contact.html">Contact Us</a></li>
            </ul>
        </nav>

        <!-- Main -->
        <div id="main" class="alt">

            <!-- One -->
            <section id="one">
                <div class="inner">
                    <header class="major">
                        <span class="lnr lnr-eye"></span>

                        <h1><?php echo $selectedsujet['titresujet'] ;?></h1>

                        <h4><i class="fa fa-user"></i>Seif Boulabiar &nbsp;&nbsp;&nbsp;&nbsp; <i
                                class="fa fa-calendar"></i> 14/11/2021 10:30 &nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fa fa-eye"></i> <?php echo $selectedsujet['views'] ?>&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fa fa-thumbs-up"></i> <?php echo $selectedsujet['likes'] ?>
                        </h4>

                    </header>
                    <span class="image main"><img src="../images/<?= $selectedsujet['image'] ?>" alt="" /></span>
                    <p><?php echo "". $selectedsujet['contenu'] ;?></p>



                </div>
                <div>
                    <form action="sujetdetails.php?id=<?php echo $id ?>" method="POST">


                        <button type="submit" class="like-button" style="display: block;
    					margin: 10px auto;" name="like"><i class="fa fa-thumbs-up"></i> like</button>

                    </form>

                </div>
            </section>

        </div>

        <section id="contact">
            <div class="inner">

                <section>
                    <header class="major">
                        <h2> Comments</h2>
                    </header>
                    <div >
                        
                        
                            <?php if(count($conmments) == 0){
                                ?>
                            <center>
                                <h3>no comments</h3>
                            </center>
                            <?php }else {
                                foreach($conmments as $comment){
                            ?>
                            <div class="comments-section">
                            <div>
                                <img src="../images/user.png" alt="" class="img-user">
                            </div>
                                <div>
                                <h4 style="padding: 0.5em;"> <?php echo $comment['nom'] ?></h4>
                                <h5><?php 
                                    echo $comment['comment'] ?></h5>
                                <hr>

                                    </div>
                            </div>
                            <?php    }
                            } ?>
                        
                        
                    </div>
                    <header class="major">
                        <h2>Leave a Comment</h2>
                    </header>

                    <form action="Ajouterblog.php?id=<?php echo $id ?>" method="post" onsubmit="verif(); return (false)" id="f" name="f1">
                    <div id="message" style="color :red"> </div>

                        <div class="fields">
                            <div class="field half">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name">
                            </div>
                            <div class="field half">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email">
                            </div>
                            <div class="field">
                                <label for="message">Message</label>
                                <textarea name="message" id="message" rows="6"></textarea>
                            </div>

                            <div class="field half text-right">
                                <ul class="actions">
                                    <li><input type="submit" value="Send Message" class="primary"></li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </section>
                <section class="split">
                    <section>
                        <div class="contact-method">
                            <span class="icon alt fa-info"></span>
                            <h3>Lorem ipsum dolor sit amet.</h3>
                            <span>Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed voluptate nihil eumester
                                consectetur similiqu consectetur. Lorem ipsum dolor sit amet, consectetur adipisic elit.
                                Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti.</span>
                        </div>
                    </section>
                    <section>
                        <div class="contact-method">
                            <span class="icon alt fa-share"></span>
                            <h3>Share</h3>

                            <p style="position: relative;">
                                <a href="#" style="position: relative;" class="icon alt fa-twitter"><span
                                        class="label">Twitter</span></a> &nbsp;
                                <a href="#" style="position: relative;" class="icon alt fa-facebook"><span
                                        class="label">Facebook</span></a> &nbsp;
                                <a href="#" style="position: relative;" class="icon alt fa-linkedin"><span
                                        class="label">LinkedIn</span></a> &nbsp;
                                <a href="#" style="position: relative;" class="icon alt fa-behance"><span
                                        class="label">Behance</span></a>
                            </p>
                        </div>
                    </section>
                </section>
            </div>
        </section>

        <!-- Footer -->
        <footer id="footer">
            <div class="inner">
                <ul class="icons">
                    <li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
                    <li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
                    <li><a href="#" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
                </ul>
                <ul class="copyright">
                    <li>Copyright © 2020 Company Name - Template by:</li>
                    <li> <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></li>
                </ul>
            </div>
        </footer>

    </div>

    <!-- Scripts -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/jquery.scrolly.min.js"></script>
    <script src="../assets/js/jquery.scrollex.min.js"></script>
    <script src="../assets/js/browser.min.js"></script>
    <script src="../assets/js/breakpoints.min.js"></script>
    <script src="../assets/js/util.js"></script>
    <script src="../assets/js/main.js"></script>

</body>

</html>