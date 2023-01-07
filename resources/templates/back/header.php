<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Safeway - Admin Portal</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <!-- Style CSS -->
    <link href="css/style.css" rel="stylesheet">
    
     <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="../../assets/images/logo.png">
    
    <!-- Font Awesome-->
    <script src="https://kit.fontawesome.com/552e0e7386.js" crossorigin="anonymous"></script>
    
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-49Y8WQ28YC"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    
    gtag('config', 'G-49Y8WQ28YC');
    </script>
    <style>
@import url(https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css);

html, body {
  background: #222;
  font-family: Verdana, sans-serif;  
}

.fa{
  display:inline-bloxk;
}
.hidden{
  display:none;
}

input[type=checkbox] + label {
  position:relative;
} 

input[type=checkbox]:checked + label {
  animation: closing 0.3s forwards ease-in-out,
             moving 0.3s forwards ease-in-out;
} 
.pointer-cursor{
   cursor: pointer; cursor: hand;
}
.close{

    float:right;
    color: #b94b45;
    cursor: pointer; cursor: hand;
}

.alert-message{
  background-color: #f2dede;
  border: 1px solid rgba(#34495e, 0.25);
  color: #b94b45;
  border-radius: 3px;
  line-height:30px;
  position: absolute;
  top: 0; left: 0;
  display:block;
  width:100%;
  padding: 12px;
  box-sizing: border-box;
  color: rgba(255, 255, 255, .9);
  box-shadow: 0px 10px 50px rgba(0,0,0,.6);
  background:#34495e;
}

@keyframes closing {
  from {
    opacity: 1; 
  }
  to {
    opacity: 0;
  }
}

@keyframes moving {
  0%, 90% { top: 0; left: 0; }
  100%  { top: -100px; left: 0; }
}

.btn-dark {
    color: #fff;
    background-color: 	#D3D3D3;
    border-color: #C0C0C0;
}
.btn-receipt {
    color: #fff;
    background-color: 	#40E0D0;
    border-color: #C0C0C0;
}

    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
           
              
              
              <!-- Top items-->
               <?php include(TEMPLATE_BACK . "/top_nav.php");  ?>
           
           
          
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
           
           <?php include(TEMPLATE_BACK . "/side_nav.php");  ?>
           
           
       
        </nav>