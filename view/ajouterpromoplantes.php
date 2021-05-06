<?php

    include "../controller/PlanteC.php";
	include_once '../Model/Plante.php';

	$PlantesC = new PlantesC();
	$error = "";
	
	if (
		isset($_POST["id"]) && 
		isset($_POST["nom"]) && 
        isset($_POST["longeur"]) &&
        isset($_POST["prix"]) &&
        isset($_POST["type"]) &&
        isset($_POST["image"]) &&
		isset($_POST["dated"]) &&
        isset($_POST["datef"]) &&
        isset($_POST["prix_promoplante"])  
	){
		if (
			!empty($_POST["id"]) && 
			!empty($_POST["nom"]) && 
            !empty($_POST["longeur"]) && 
            !empty($_POST["prix"]) && 
            !empty($_POST["type"]) &&
			!empty($_POST["image"]) &&
			!empty($_POST["dated"]) &&
			!empty($_POST["datef"]) &&
            !empty($_POST["prix_promoplante"])

        ) {
            $user = new promoplante(
				$_POST['id'],
				$_POST['nom'],
                $_POST['longeur'],
                $_POST['prix'], 
                $_POST['type'],
				$_POST['image'],
				$_POST['dated'],
				$_POST['datef'],
                $_POST['prix_promoplante']

			);
			
            $PlantesC->ajouterpromoplante($user);
			header('Location:promoplantes.php');

        }
        else
            $error = "Missing information";
	}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lumino - Dashboard</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<script src="scripts.js"></script>

</head>
<body>

	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Nature</span>PET</a>
				<ul class="nav navbar-top-links navbar-right">
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-envelope"></em><span class="label label-danger">15</span>
					</a>
						<ul class="dropdown-menu dropdown-messages">
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right">3 mins ago</small>
										<a href="#"><strong>John Doe</strong> commented on <strong>your photo</strong>.</a>
									<br /><small class="text-muted">1:24 pm - 25/03/2015</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right">1 hour ago</small>
										<a href="#">New message from <strong>Jane Doe</strong>.</a>
									<br /><small class="text-muted">12:27 pm - 25/03/2015</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="all-button"><a href="#">
									<em class="fa fa-inbox"></em> <strong>All Messages</strong>
								</a></div>
							</li>
						</ul>
					</li>
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-bell"></em><span class="label label-info">5</span>
					</a>
						<ul class="dropdown-menu dropdown-alerts">
							<li><a href="#">
								<div><em class="fa fa-envelope"></em> 1 New Message
									<span class="pull-right text-muted small">3 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-heart"></em> 12 New Likes
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-user"></em> 5 New Followers
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Moetaz</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			
			<li class="nav-item">
                                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu1" aria-controls="submenu1"><i class="fas fa-calendar-check"></i>&nbsp;Gestion Evenement</a>
                                            <div id="submenu1" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="ajouterevenement.php"> <em class="fa fa-plus-square">&nbsp;</em>Ajouter Evenement</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="evenement.php"> <em class="fa fa-book-open">&nbsp;</em>Afficher Evenement</a>
                                                    </li>
                                                    
                                                </ul>
                                            </div>
             </li>

			 <li class="nav-item">
                                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu2" aria-controls="submenu2"> <em class="fas fa-percentage">&nbsp;</em>Gestion Promotions</a>
                                            <div id="submenu2" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="promoanimaux.php"> <em class="fa fa-paw">&nbsp;</em>Promotions Animaux</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="promoplantes.php"> <em  class="fab fa-pagelines" aria-hidden="true">&nbsp;</em>Promotions Plantes</a>
                                                    </li>
                                                   
                                                </ul>
                                            </div>
             </li>


		</ul>
		
			
		</div><!--/.row-->
		</div><!--/.row-->
		<div>  
		<td>aa</td>
		<td>aa</td>
		<td>aa</td>
		<td>aa</td>
        <div id="error">
            <?php echo $error; ?>
        </div>

    	<?php
			if (isset($_GET['id'])){
				$user = $PlantesC->recupereretat($_GET['id']);
				
		?>
		<form action="" method="POST">
            <table border="1" align="center">

                <tr>
                    <td rowspan='9' colspan='1'> </td>
                    <td>
                        <label for="id">id:
                        </label>
                    </td>
                    <td><input type="text" name="id" id="id" value = "<?php echo $user['id']; ?>" maxlength="20" readonly></td>
                </tr>
               
                <tr>
                    <td>
                        <label for="nom">nom:
                        </label>
                    </td>
                    <td><input type="text" name="nom" id="nom" value = "<?php echo $user['nom']; ?>" maxlength="20" readonly></td>
                </tr>
                
                <tr>
                    <td>
                        <label for="longeur">longeur:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="longeur" value = "<?php echo $user['longeur']; ?>" id="longeur" readonly>
                    </td>
                    
                </tr>
                <tr>
                    <td>
                        <label for="prix">prix:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="prix" id="prix" value = "<?php echo $user['prix']; ?>" readonly>
                    </td>
                    
                </tr>
                <tr>
                    <td>
                        <label for="type">type:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="type" id="type" value = "<?php echo $user['type']; ?>" readonly>
						                   
                    </td>
                    
                </tr>
                
				<tr>
                    <td>
                        <label for="image">image:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="image" id="image"  value = "<?php echo $user['image']; ?>" readonly>

                    </td>
                    
                </tr>

				<tr>
                    <td>
                        <label for="dated">Date Debut Promotions:
                        </label>
                    </td>
                    <td>
                        <input type="date" name="dated" id="dated" required>
                    </td>
                    
                </tr>
				<tr>
                    <td>
                        <label for="datef">Date Fin Promotions:
                        </label>
                    </td>
                    <td>
                        <input type="date" name="datef" id="datef" required>
                    </td>
                    
                </tr>
                <tr>
                    <td>
                        <label for="prix_promoplante">Solde:
                        </label>
                    </td>
                    <td>
                        <input type="number" name="prix_promoplante" id="prix_promoplante"  min="1" max="100" required>
                    </td>
                    
                </tr>
                
               
                
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Envoyer" onclick="return verif();"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
		<?php
		}
		?>
   
		</div>
	</div>	<!--/.main-->
	
	
	
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>
		
</body>
</html>