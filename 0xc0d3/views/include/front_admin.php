<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">

<title>Admin - cybergh0st</title>


 <script src="tinymce/tinymce.min.js"></script>
  <script type="text/javascript">
  tinymce.init({
    selector: '#mytextarea',
    height: 300,
    statusbar: false,
      menu: {
    edit: {title: 'Edit', items: 'undo redo | cut copy paste pastetext | selectall'},
    insert: {title: 'Insert', items: 'link media | template hr'},
    view: {title: 'View', items: 'visualaid'},
    format: {title: 'Format', items: 'bold italic underline strikethrough superscript subscript | formats | removeformat'},
    table: {title: 'Table', items: 'inserttable tableprops deletetable | cell row column'},
    tools: {title: 'Tools', items: 'spellchecker code'}
    }  
  });


</script>


<link rel="icon" href="favicon.png" type="image/png">
<link rel="shortcut icon" href="favicon.ico" type="img/x-icon">

<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>

<link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="../css/style.css" rel="stylesheet" type="text/css">
<!--<link href="css/font-awesome.css" rel="stylesheet" type="text/css">-->
<link href="../css/responsive.css" rel="stylesheet" type="text/css">
<link href="../css/animate.css" rel="stylesheet" type="text/css">

<!--[if IE]><style type="text/css">.pie {behavior:url(PIE.htc);}</style><![endif]-->

<script type="text/javascript" src="../js/jquery.1.8.3.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.js"></script>
<script type="text/javascript" src="../js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="../js/jquery.isotope.js"></script>
<!--<script type="text/javascript" src="js/wow.js"></script>-->
<!--<script type="text/javascript" src="js/classie.js"></script>-->


<!--[if lt IE 9]>
    <script src="js/respond-1.1.0.min.js"></script>
    <script src="js/html5shiv.js"></script>
    <script src="js/html5element.js"></script>
<![endif]-->


</head>
<body>



<nav class="main-nav-outer" id="test"><!--main-nav-start-->
	<div class="container">
        <ul class="main-nav" style="text-align:left;">
            <li class="small-logo"><a href="#header"><img src="../img/small-logo.png" alt=""></a></li>
        	<li><a href="admin.php?do=post">| Publicar |</a></li>
            <!--<li><a href="#service">Services</a></li>-->
            <li><a href="admin.php?do=mispubl">| Mis Publicaciones |</a></li>
            <li style="text-align:right;"><a href="admin.php?do=miinfo">| Mi Cuenta |</a></li>
            <li><a href="admin.php?do=post"></a></li>
            <li><a href="admin.php?do=logout"> LogOut</a></li>
        </ul>
        <a class="res-nav_click" href="#"><i class="fa-bars"></i></a>
    </div>
</nav><!--main-nav-end-->




<!--main-section-start-->

<?php include($view); ?>

<!--main-section-end-->


<footer class="footer">
    <div class="container">
        <div class="footer-logo"><a href="#"><img src="../img/footer-logo.png" alt=""></a></div>
        <span class="copyright">Copyright © 2016 | <a href="http://readcode.esy.es/">CyberSecurity</a> by C0deGh0st</span>
    </div>
    <!-- 
        All links in the footer should remain intact. 
        Licenseing information is available at: http://bootstraptaste.com/license/
        You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Knight
    -->
</footer>


<script type="text/javascript">
    $(document).ready(function(e) {
        $('#test').scrollToFixed();
        $('.res-nav_click').click(function(){
            $('.main-nav').slideToggle();
            return false    
            
        });
        
    });

</script>
</body>
</html>