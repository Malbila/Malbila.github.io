<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    

    <title>Info School</title>

    <link rel="shortcut icon" href="../../Images/logo.png">

    <link rel="stylesheet" href="../../css/style.css" />
    <link rel="stylesheet" href="../../style.css" />
</head>
<body>

<div class="bg-dark">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div id="root">
                        <div id="topnav" class="topnav">
                            <a id="home_link" class="navbar-brand" href="../../">
                                <img src="../../Images/logo.png" width = "50" height = "50" alt="Logo du site">  
                                Info School
                            </a>
                      
                          <!-- Classic Menu -->
                          <nav role="navigation" id="topnav_menu" class="dropdown-main">
                            <ul class="dropdown">
                              <li class="topnav_link"><a href="../../">Accueil</a></li>
                              <li class="topnav_link"><a href="javascript:void(0)">Services</a>
                                  <div class="menu-bar">
                                      <ul>
                                          <li><a href="./">Développement web et mobile</a></li>
                                          <li><a href="#">Marketing</a></li>
                                          <li><a href="#">Mentorat</a></li>
                                          <li><a href="#">SEO</a></li>
                                      </ul>
                                  </div>
                              </li>
                              
  
                              <li class="topnav_link"><a href="javascript:void(0)">Cours</a>
                                  <div class="menu-bar">
                                      <ul>
                                          <li><a href="../../cours/">Développement</a></li>
                                          <li><a href="#">Marketing digital</a></li>
                                          <li><a href="#">Entrepreunariat</a></li>
                                          <li><a href="#">Soft Skills</a></li>
                                          <li><a href="#">Design</a></li>
                                      </ul>
                                  </div>
                              </li>
                              <li class="topnav_link"><a href="../../blog/">Blog</a></li>
                              <li class="topnav_link"><a href="javascript:void(0)">Espace clients</a>
                                  <div class="menu-bar">
                                      <ul>
                                          <li><a href="../../espace-clients/">Témoignage</a></li>
                                          <li><a href="../../espace-clients/">Projets</a></li>
                                          <li><a href="../../message/">Message</a></li>
                                      </ul>
                                  </div>
                              </li>
                              <li class="topnav_link"><a href="../../faq/">FAQ</a></li>
                          </ul>
                        </nav>
                      
                          <a id="topnav_hamburger_icon" href="javascript:void(0);" onclick="showResponsiveMenu()">
                            <!-- Some spans to act as a hamburger -->
                            <span></span>
                            <span></span>
                            <span></span>
                          </a>
                      
                          <!-- Responsive Menu -->
                          <nav role="navigation" id="topnav_responsive_menu">
                            <ul>
                                <li><a href="../../">Accueil</a></li>
                                <li><a href="../../blog/">Blog</a></li>
                                <li><a href="../../services/">Services</a></li>
                                <li><a href="../../espace-clients/">Espace clients</a></li>
                                <li><a href="../../faq/">FAQ</a></li>
                            </ul>
                          </nav>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container content">
        <div class="row">

            <div class="col-12 col-sm-6 text-center">
                <br /><br /><br /><h1>User's registration</h1> <br /><br />
                <div>
                    <p>
                        <form action="signupDB.php" method="post">
                            <div class="input-group mb-4 text-center">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><img src="../../Images/user.png" class="bordure" width = "23" height = "23" alt="user"></span>
                                </div>
                                <input type="text" class="form-control" name="name" id="Uname" placeholder="Username" required = "required">
                            </div>
                            <div class="input-group mb-4 text-center input">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><img src="../../Images/pwd.png" class="bordure" width = "23" height = "23" alt="pwd"></span>
                                </div>
                                <input type="password" class="form-control" name="pass" id="pass" placeholder="Password" required = "required">
                            </div>
                            <div class="input-group mb-4 text-center">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><img src="../../Images/pwd.png" class="bordure" width = "23" height = "23" alt="pwd"></span>
                                </div>
                                <input type="password" class="form-control" name="passconf" id="pass" placeholder="Confirm Password" required = "required">
                            </div>        
                            <button class="btn btn-success" type="submit" >Save</button>
                        </form>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src='../../responsive.js'></script>

</body>
</html>