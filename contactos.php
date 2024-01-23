<!DOCTYPE html>

<html lang="en">

<head>



     <title>Neurociencias - Dr. Dionisio Redondo</title>





     <meta charset="UTF-8">

     <meta http-equiv="X-UA-Compatible" content="IE=Edge">

     <meta name="description" content="">

     <meta name="keywords" content="">

     <meta name="author" content="">

     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">



     <link rel="stylesheet" href="css/bootstrap.min.css">

     <link rel="stylesheet" href="css/font-awesome.min.css">

     <link rel="stylesheet" href="css/owl.carousel.css">

     <link rel="stylesheet" href="css/owl.theme.default.min.css">



     <!-- MAIN CSS -->

     <link rel="stylesheet" href="css/templatemo-style.css">



</head>

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

<?php
$db_host = 'localhost'; // Server Name
$db_user = 'id14891044_adm'; // Username
$db_pass = 'Vitalogy9***'; // Password
$db_name = 'id14891044_neuro'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}

$sql = 'SELECT * from contactos';
//$sql = 'SELECT id, titulo, tipo, origen, proceso, area, estado, subestado FROM accionesdemejora';		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>
	<body>
		<table class="table table-striped" >
  	
		<thead>
		<tr>
		    <th>ID</th>
			<th>Nombre</th>
			<th>Email</th>
			<th>Mensaje</th>
		</tr>
		</thead>
		
				
		
		<?php

		while ($row = mysqli_fetch_array($query))
		{
			echo '<tr>
			        <div style="max-height: 100px; max-width: 100px; width: 100px; overflow: auto;">
					<td>'.$row['id'].'</td>
					<td>'.$row['name'].'</td>
					<td>'.$row['email'].'</td>
					<td>'.$row['message'].'</td>
                    </div>					
			   	</tr>';
		}?>
		</tbody>
     </table>  
</body>



     <!-- PRE LOADER -->

     <section class="preloader">

          <div class="spinner">



               <span class="spinner-rotate"></span>

               

          </div>

     </section>

<script language=”JavaScript”>



var frmvalidator = new Validator(“contactform”); frmvalidator.addValidation(“name”,”req”,”Por favor agrega tu nombre”); frmvalidator.addValidation(“email”,”req”,”Agrega tu email”); frmvalidator.addValidation(“email”,”email”, “Ingresa una direccion correcta”); </script>



     <!-- MENU -->

     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">

          <div class="container">



               <div class="navbar-header">

                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">

                         <span class="icon icon-bar"></span>

                         <span class="icon icon-bar"></span>

                         <span class="icon icon-bar"></span>

                    </button>



                    <!-- lOGO TEXT HERE -->

                    <a href="index.php" class="navbar-brand">Neurociencias | Dr. Dionisio Redondo</a>

               </div>



               <!-- MENU LINKS -->

               <div class="collapse navbar-collapse">

                    <ul class="nav navbar-nav navbar-nav-first">

                         <li><a href="index.php" class="smoothScroll">Home</a></li>

            

                    </ul>



                    <ul class="nav navbar-nav navbar-right">

                         <li><a href="tel:+3382 2244 1100"><i class="fa fa-phone"></i> +3482 42-9804</a></li>

                         <li><a href="https://api.whatsapp.com/send?phone=+543482667130"><i class="fa fa-whatsapp" aria-hidden="true"></i>+54 3482 66-7130</a></li>

                    </ul>

               </div>



          </div>

     </section>

	 

     <!-- SCRIPTS -->

     <script src="js/jquery.js"></script>

     <script src="js/bootstrap.min.js"></script>

     <script src="js/owl.carousel.min.js"></script>

     <script src="js/smoothscroll.js"></script>

     <script src="js/custom.js"></script>





</html>