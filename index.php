<?php
  if(isset($_POST['mailform']))
  {
    if(!empty($_POST['nom']) AND !empty($_POST['mail']) AND !empty($_POST['message']))
    {
      $header='MIME-Version: 1.0\r\n';
      $header.='From:"VOTRE NOM"<email-expediteur@example.org>'."\n";
      $header.='Content-Type:text/html; charset="uft-8"'."\n";
      $header.='Content-Transfer-Encoding: 8bit';

      $message='
      <html>
        <body>
          <div align="center">
            <u>Nom de l\'expéditeur :</u>'.$_POST['nom'].'<br />
            <u>Mail de l\'expéditeur :</u>'.$_POST['mail'].'<br />
            <br />
            '.nl2br($_POST['message']).'
          </div>
        </body>
      </html>
      ';

      mail("ktm.duke11700@gmail.com", "CONTACT - Monsite.com", $message, $header);
      $msg="Votre message a bien été envoyé !";
    }
    else
    {
      $msg="Tous les champs doivent être complétés !";
    }
  }
?>


<!DOCTYPE html>
<html lang="fr">
	<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/animate.css"/>

		<link rel="stylesheet" href="css/style.css" />

    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCZXJBVDf7R4JqmSpopVPoduIGWx1IwpBM"></script>
    <script type="text/javascript" src="js/plugins.js"></script>

	</head>
	<body>
	<div class="svg-wrap">
      <svg width="64" height="64" viewBox="0 0 64 64">
        <path id="arrow-left" d="M26.667 10.667q1.104 0 1.885 0.781t0.781 1.885q0 1.125-0.792 1.896l-14.104 14.104h41.563q1.104 0 1.885 0.781t0.781 1.885-0.781 1.885-1.885 0.781h-41.563l14.104 14.104q0.792 0.771 0.792 1.896 0 1.104-0.781 1.885t-1.885 0.781q-1.125 0-1.896-0.771l-18.667-18.667q-0.771-0.813-0.771-1.896t0.771-1.896l18.667-18.667q0.792-0.771 1.896-0.771z"></path>
      </svg>

      <svg width="64" height="64" viewBox="0 0 64 64">
        <path id="arrow-right" d="M37.333 10.667q1.125 0 1.896 0.771l18.667 18.667q0.771 0.771 0.771 1.896t-0.771 1.896l-18.667 18.667q-0.771 0.771-1.896 0.771-1.146 0-1.906-0.76t-0.76-1.906q0-1.125 0.771-1.896l14.125-14.104h-41.563q-1.104 0-1.885-0.781t-0.781-1.885 0.781-1.885 1.885-0.781h41.563l-14.125-14.104q-0.771-0.771-0.771-1.896 0-1.146 0.76-1.906t1.906-0.76z"></path>
      </svg>
    </div>


    <!-- MAIN CONTENT -->

   <div class="container-fluid">

    <!-- HEADER -->

    <section id="header">

      <!-- NAVIGATION -->
      <nav class="navbar navbar-fixed-top navbar-default bottom">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#header">Axel MURA</a>
          </div><!-- /.navbar-header -->

          <div class="collapse navbar-collapse" id="menu">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#header">Accueil</a></li>
              <li><a href="#about">Experience</a></li>              
              <li><a href="#portfolio">Loisirs</a></li>
			        <li><a href="#info">Informations</a></li>
              <li><a href="#contact">Contact</a></li>
              <li><a href="CV_MURA.pdf" target="_blank"><button class="btn-info" type="button" title="À télécharger au format PDF">Mon CV</button></a></button></a></li>

            </ul>
          </div> <!-- /.navbar-collapse -->
        </div> <!-- /.container -->
      </nav>

      <!-- SLIDER -->
      <div class="header-slide">
        <section>
          <div id="loader" class="pageload-overlay" data-opening="M 0,0 0,60 80,60 80,0 z M 80,0 40,30 0,60 40,30 z">
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 80 60" preserveAspectRatio="none">
              <path d="M 0,0 0,60 80,60 80,0 Z M 80,0 80,60 0,60 0,0 Z"/>
            </svg>
          </div> <!-- /.pageload-overlay -->
          
          <div class="image-slide bg-fixed">
            <div class="overlay">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">

                    <div class="slider-content">
                      <h1></h1>
                      <p>Etudiant en DUT R&T (Réseau et Télécommunication) à l'IUT de Béziers </p>
                    </div>

                  </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->
              </div> <!-- /.container -->
            </div> <!-- /.overlay -->
          </div> <!-- /.image-slide -->

          <nav class="nav-slide">
            <a class="prev" href="#prev">
              <span class="icon-wrap">
                <svg class="icon" width="32" height="32" viewBox="0 0 64 64">
                  <use xlink:href="#arrow-left">
                </svg>
              </span>
              <div>
                <span>Prev Photo</span>
                <h3>...</h3>
                <p>...</p>
                <img alt="Previous thumb">
              </div>
            </a>
            <a class="next" href="#next">
              <span class="icon-wrap">
                <svg class="icon" width="32" height="32" viewBox="0 0 64 64">
                  <use xlink:href="#arrow-right">
                </svg>
              </span>
              <div>
                <span>Next Photo</span>
                <h3>...</h3>
                <p>...</p>
                <img alt="Next thumb">
              </div>
            </a>
          </nav>
        </section>

        <script type="text/javascript">
        var dataHeader = [
                            
                            {
                              bigImage :"images/slide-2.jpg",
                              title : "Axel MURA",
                              
                            },
                            {
                              bigImage :"images/slide-3.jpg",
                              title : "Axel MURA",
                            }
                        ],
            loaderSVG = new SVGLoader(document.getElementById('loader'), {speedIn : 600, speedOut : 600, easingIn : mina.easeinout});
            loaderSVG.show()
        </script>

      </div><!-- /.header-slide -->
    </section>

    <!-- HEADER END -->


    <!-- ABOUT -->

    <section id="about" class="light">
      <header class="title">
        <h2>Expérience <span>&</span> Formation</h2>
        <p>Actuellement étudiant en 1er année de DUT (Diplôme Universitaire et Technologique) Réseau et Télécommunication à Béziers, nous travaillons sur les réseaux d’entreprises administrés par des OS Linux, ainsi que sur la téléphonie, le fonctionnement des ondes et la fibre optique.</p>
      </header>

      <div class="container">
        <div class="row table-row">
          <div class="col-sm-6 hidden-xs">
            <div class="section-content">
              <div class="big-image" style="background-image:url(images/1.png)"></div>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="section-content">
              <div class="about-content left animated" data-animate="fadeInLeft">
                <div class="about-icon"><i class="fa fa-code"></i></div>
                <div class="about-detail">
                  <h4>Etudes</h4>
                  <p><b>2020 - Aujourd'hui :</b> Je suis actuellement en première année du DUT R&T (réseaux et télécommunication) à l'iut de Béziers <br/><b>2019 - 2020 :</b> L 'IUT de Perpignan en STID antenne de Carcassonne<br/><b>2017 - 2019</b>
                    Lycée : 1er / terminale STI2D option SIN Bac avec mention AB
                    
                    </p>
                </div>
              </div>

              <div class="about-content left animated" data-animate="fadeInLeft">
                <div class="about-icon"><i class="fa fa-desktop"></i></div>
                <div class="about-detail">
                  <h4>Stages</h4>
                  <p>J'ai effectué mon stage de 3ème dans une entreprise de réparation électronique à Narbonne dans l'entreprise SEIA électronique ou j'ai réalisé un listing de pièces d’ordinateurs, test et validation de cartes mères, Mise en magasin (conditionnement et référencement).
                  </p>
                </div>
              </div>

              <div class="about-content left animated" data-animate="fadeInLeft">
                <div class="about-icon"><i class="fa fa-cube"></i></div>
                <div class="about-detail">
                  <h4>Autre expérience</h4>
                  <p><b>Eté 2018, 2019, 2020</b>
                    J'ai travaillé en tant qu'employé polyvalent à la mairie de mon village : Castelnau-d'Aude, entretien des espaces publics, préparation de la salle polyvalente, mise en place de la sécurité pour le feu d’artifice du 14 juillet.
                    .</p>
                </div>
              </div>
            </div>
          </div>
        </div> <!-- /.row table-row -->
      </div> <!-- /.container -->
    </section>
	
	
	    <!-- Loisir -->

    <section id="portfolio" class="light">
      <header class="title">
        <h2>Loisirs</h2>
      </header>

      <div class="container-fluid">
        <div class="row">
          <ul id="filters" class="list-inline">
            <li data-filter="all" class="filter">Tous</li>
            <li data-filter=".Photographie" class="filter">Photographie</li> 
            <li data-filter=".Voyage" class="filter">Voyages</li> 
            <li data-filter=".Moto" class="filter">Moto</li> 
            <li data-filter=".Informatique" class="filter">Informatique</li> 
          </ul>
        </div>

        <div class="row">
          <div class="container-portfolio">
            <!-- PORTFOLIO OBJECT -->
            <script type="text/javascript">
            var portfolio = [
                    {
                      category : "Photographie",
                      image : "images/p-1.png",
                      title : " ",
                      link : "#none",
                      text : "Amateur de photographie, j’aime figer l’instant"
                    },
                    {
                      category : "Voyage",
                      image : "images/p-2.png",
                      title : " ",
                      link : "#none",
                      text : "Je suis passionné par les voyages, j’ai largement visité l’Espagne,"
                    },
                    {
                      category : "Voyage",
                      image : "images/p-3.png",
                      title : " ",
                      link : "#none",
                      text : "trop peu l’Italie. Je suis attiré par les pays latins, la culture et leur ouverture vers l’extérieur."
                    },
                    {
                      category : "Voyage",
                      image : "images/p-4.png",
                      title : " ",
                      link : "#none",
                      text : "L’Afrique m’interpelle, la beauté des paysages une faune attirante,"
                    },
                    {
                      category : "Voyage",
                      image : "images/p-5.png",
                      title : " ",
                      link : "#none",
                      text : "le tout à capturer pour un photographe amateur."
                    },
                    {
                      category : "Voyage",
                      image : "images/p-6.png",
                      title : " ",
                      link : "#none",
                      text : "   "
                    },
                    {
                      category : "Moto",
                      image : "images/p-7.png",
                      title : " ",
                      link : "#none",
                      text : "Les sensations de liberté,l’adrénaline du pilotage sont essentiels pour moi."
                    },
                    {
                      category : "Informatique",
                      image : "images/p-8.png",
                      title : " ",
                      link : "#none",
                      text : "Depuis toujours, je suis passionné d’informatique, l’assemblage des machines..."
                    }
                ];
            </script>
          </div>
        </div>
      </div>
    </section>



	
	    <!-- INFO -->

    <section id="info" class="dark">
      <header class="title">
        <h2>Autres <span>compétences</span></h2>
      </header>

      <div class="container experties">
        <div class="row">
          <div class="col-md-6">
            <div class="skill">
              <ul class="skill-bar list-unstyled">
                <li><span class="percentage" data-value="60%"></span><em>HTML/CSS/JS</em></li>
                <li><span class="percentage" data-value="70%"></span><em>Python</em></li>
                <li><span class="percentage" data-value="40%"></span><em>PHP</em></li>
                <li><span class="percentage" data-value="70%"></span><em>SQL</em></li>
                <li><span class="percentage" data-value="40%"></span><em>C</em></li>
                
              </ul>
            </div>
          </div>

          <div class="col-md-6">
            <div class="skill">
              <ul class="skill-bar list-unstyled">
                <li><span class="percentage" data-value="80%"></span><em>Suite office</em></li>
                <li><span class="percentage" data-value="50%"></span><em>Suite adobe</em></li>
                <li><span class="percentage" data-value="99%"></span><em>Francais</em></li>
                <li><span class="percentage" data-value="50%"></span><em>Anglais</em></li>
                <li><span class="percentage" data-value="60%"></span><em>Espagnol</em></li>
              </ul>
            </div>
          </div>
        </div>
      </div> <!-- /.container -->

    <header class="title">
        <p><b>Réalisation d'un projet en fin de de première année :</b> pouvoir connaitre le status seulement avec une conexion internet, pour cela nous avons utilisé : un <b>raspberry</b> pi, le language de programmation  <b>Python</b>, une base de donnée <b>InfluxDB</b>, pour afficher <b>Grafana</b> et pour relier l'interface graphique et la base de donnée <b>NodeRed</b>.</p>
        <a href="projet_MURA.zip" target="_blank"><button class="btn-info" type="button" title="À extraire">projet.zip</button></a></button></a>

      </header>
    </section>	

    <section class="separator blue">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="counter animated" data-animate="fadeInUp" data-delay="0">
              <div class="counter-icon">
                <i class="fa fa-group"></i>
              </div>
              <div class="counter-content">
                <a href="https://www.facebook.com/axel.mura.9" title="Rejoignez-moi sur Facebook"><img src="images/01.png" width="32px" onmouseover="javascript:this.src='images/01_bis.png';" onmouseout="javascript:this.src='img/01.png';" style="padding-right: 10px;"></a>
                <small>Facebook</small>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="counter animated" data-animate="fadeInUp" data-delay="500">
              <div class="counter-icon">
                <i class="fa fa-group"></i>
              </div>
              <div class="counter-content">
                <a href="https://twitter.com/axel_mura" title="Rejoignez-moi sur Twitter"><img src="images/02.png" width="32px" onmouseover="javascript:this.src='images/02_bis.png';" onmouseout="javascript:this.src='img/02.png';"style="padding-right: 10px;"></a>
                <small>Twitter</small>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="counter animated" data-animate="fadeInUp" data-delay="1000">
              <div class="counter-icon">
                <i class="fa fa-group"></i>
              </div>
              <div class="counter-content">
                <a href="https://www.linkedin.com/in/axel-mura-486a2a199?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3Be0pHEn0CTdCF8NChuSq6fA%3D%3D" title="Rejoignez-moi sur LinkedIn"><img src="images/03.png" width="32px" onmouseover="javascript:this.src='images/03_bis.png';" onmouseout="javascript:this.src='img/03.png';" style="padding-right: 10px;"></a>
                <small>Linkedin</small>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="counter animated" data-animate="fadeInUp" data-delay="1500">
              <div class="counter-icon">
                <i class="fa fa-group"></i>
              </div>
              <div class="counter-content">
                <a href="https://www.instagram.com/mura_axel/" title="Rejoignez-moi sur Instagram"><img src="img/insta_2.png" width="32px" onmouseover="javascript:this.src='images/insta.png';" onmouseout="javascript:this.src='images/insta_2.png';"
                  style="padding-right: 10px;"></a>                
                  <small>Instagram</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- FOOTER CONTACT -->

     <section id="contact" class="dark">
      <header class="title">
        <h2>Contactez <span>moi</span></h2>
      </header>

      <div class="container">
        <div class="row">
          <div class="col-md-8 animated" data-animate="fadeInLeft">
            <form action="#">
              <div class="row">
                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="Your Name">
                </div>
                <div class="col-md-6">
                  <input type="email" class="form-control" placeholder="Your Email">
                </div>
                <div class="col-md-12">
                  <textarea class="form-control" rows="3" placeholder="Tell Us Everything"></textarea>
                </div>
                <div class="col-md-12">
                  <button class="btn btn-default submit">Send Message</button>
                </div>
              </div>
            </form>
          </div>



          <div class="col-md-4 animated" data-animate="fadeInRight">
            <address>
                <span><i class="fa fa-map-marker fa-lg"></i> 15 rue pelisson, 34500 Béziers</span>
                <span><i class="fa fa-phone fa-lg"></i> <a href="tel:+33651095081" style="color:white;">06.51.09.50.81</a></span>
                <span><i class="fa fa-envelope-o fa-lg"></i> <a href="axelmura@outlook.com">axelmura&#64;outlook.com</a></span>
                <span><i class="fa fa-globe fa-lg"></i> <a href="https://axel--mura.000webhostapp.com/index.html">mon site</a></span>
            </address>
          </div>
		  
        </div>
      </div>
    </section>

    <section id="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <p>2021 &copy; Axel MURA- Tous droits réservés</p>
          </div>
        </div>
      </div>
    </section>

   </div><!-- /.container-fluid -->
    
    <!-- SCRIPT -->
    <script type="text/javascript" src="js/main.js"></script>
	</body>
</html>