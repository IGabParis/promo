<!DOCTYPE html>
<html lang="es"> 
<head>
    <title>Promo</title>
    <!-- Meta -->
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content=""/>
    <meta name="author" content="IGPA"/> 
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/font-awesome.css"/>
    <link rel="stylesheet" href="css/flexslider.css"/>
    <link rel="stylesheet" href="css/animations.css"/>
    <link rel="stylesheet" href="css/style-flexisel.css"/>
    <link id="theme-style" rel="stylesheet" href="css/styles.css"/>
</head> 
<body>
    <header id="top" class="header navbar-fixed-top">  
        <div class="container">
            <h1 class="logo pull-left">
                <a href="#promo">
                    <img id="logo-image" class="logo-image" src="img/logo2.jpg" alt="Logo" />
                    <span class="logo-title">Promo</span>
                </a>
            </h1>
            
            <nav id="main-nav" class="main-nav navbar-right" role="navigation">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="fa fa-bars"></span>
                    </button>
                </div>
                
                <div class="navbar-collapse collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                         <li class="nav-item <?php echo $partes == 'home' ? 'active' : ''; ?>"><a href="?p=home">Inicio</a></li>
                        <li class="nav-item <?php echo $partes == 'faq' ? 'active' : ''; ?>"><a href="?p=faq">FAQ</a></li>
                        <li class="nav-item <?php echo $partes == 'contact' ? 'active' : ''; ?>"><a href="?p=contact">Contact</a></li>
                    </ul>
                </div>
            </nav>        
        </div>
    </header>