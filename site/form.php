<!DOCTYPE html>
<html lang="en">
  <head>
   <title></title>

    <link href="css/bootstrap_default.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>
  	<nav class="navbar navbar-default">
  		<div class="container-fluid">
  			<!--start collaps navbar-->
  			
  		<div class="navbar-header">
        <button 
        type="button" 
        class="navbar-toggle collapsed" 
        data-toggle="collapse" 
        data-target="#main_navbar" 
        aria-expanded="false">open!</button>
      </div>
      <!-- / collapsed navbar-->

      <!-- start un-collapsed navbar-->
      <div class="collapse navbar-collapse"
      id="main_navbar">
      <ul class="nav navbar-nav">
  			<li ><a href="index.html">Home</a></li>
        <li><a href="Developer_album.html">Album</a></li>
         <li class="active"><a href="form.php">Form</a></li>
  		</ul>
  	</div> 
  </div>
  	</nav>
  	<div class="container">
  		<h1>I   E  H  R  s</h1>
      
      <!-- start breadcrumb -->
      <ol class="breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li><a href="form.php">Form</a></li>
      </ol>
      <!-- / breadcrumb -->
      <h2>Form</h2>
      <form method="post" action="form_details.php">
    NAME :<input type="text" name="fname"><br>
    EMAIL :<input type="text" name="email"><br>
    PWD : <input type="password" name="pwd"><br>
    <input type="submit" name="">
      </form>
  	
  	</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>