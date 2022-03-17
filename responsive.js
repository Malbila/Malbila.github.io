function showResponsiveMenu() {
    var menu = document.getElementById("topnav_responsive_menu");
    var icon = document.getElementById("topnav_hamburger_icon");
    var root = document.getElementById("root");
    if (menu.className === "") {
      menu.className = "open";
      icon.className = "open";
      root.style.overflowY = "hidden";
    } else {
      menu.className = "";                    
      icon.className = "";
      root.style.overflowY = "";
    }
  }

  const responsive = document.getElementById('responsive')

 // responsive.innerHTML = '<div id="root"> <div id="topnav" class="topnav"><a id="home_link" class="navbar-brand" href="./"> <img src="Images/logo.png" width = "50" height = "50" alt="Logo du site">  Info School </a> <nav role="navigation" id="topnav_menu"> <a class="topnav_link" href="./">HOME</a> <a class="topnav_link" href="/about">ABOUT</a> <a class="topnav_link" href="/contact-us">CONTACT</a> </nav> <a id="topnav_hamburger_icon" href="javascript:void(0);" onclick="showResponsiveMenu()"><!-- Some spans to act as a hamburger --> <span></span> <span></span> <span></span> </a> <!-- Responsive Menu --> <nav role="navigation" id="topnav_responsive_menu"> <ul> <li><a href="./">HOME</a></li> <li><a href="/about">ABOUT</a></li> <li><a href="/contact-us">CONTACT</a></li> <li><a href="/privacy-policy">PRIVACY POLICY</a></li> <li><a href="/terms-and-conditions">TERMS AND CONDITIONS</a></li> </ul> </nav> </div> </div>'