<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<?php include("onfig.php"); ?>
<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin - D3 Teknik Komputer</title>
	<meta name="description" content="Blueprint: A basic template for a responsive multi-level menu" />
	<meta name="keywords" content="blueprint, template, html, css, menu, responsive, mobile-friendly" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<meta name="author" content="Codrops" />
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/organicfoodicons.css" />
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<script src="js/modernizr-custom.js"></script>
</head>

<body>
	<!-- Main container -->
	<div class="container">
		<!-- Blueprint header -->
		<header class="bp-header cf">
			<div class="dummy-logo">
						<?php  if (isset($_SESSION['username'])) : ?>
						 <a class="menu__link"  href="index.php?logout='1'" >logout</a> 
						<?php endif ?>
						<a class="menu__link" href="index1.php">HOME</a>
			</div>
			
		</header>
		<button class="action action--open" aria-label="Open Menu"><span class="icon icon--menu"></span></button>
		<nav id="ml-menu" class="menu">
			<button class="action action--close" aria-label="Close Menu"><span class="icon icon--cross"></span></button>
			<nav id="ml-menu" class="menu">
			<button class="action action--close" aria-label="Close Menu"><span class="icon icon--cross"></span></button>
			
		</nav>
		</nav>
		<div class="content">
			<div class="containersassd">
  				<h2>Data Komentar D3 Teknik Komputer</h2>
 			 		<table class="table table-hover">
			    <thead>
			      <tr>
			        <th>No.</th>
			        <th>Nama</th>
			        <th>Email</th>
			        <th>Komentar</th>
			        <th>Waktu</th>
			        <th>action</th>
			      </tr>
			    </thead>
			    <tbody>
			       <?php
			       settype($var,'integer');
			        $var = 1;
			        $sql = "SELECT * FROM komentar";
			        $query = mysqli_query($mysqli , $sql);
			        
			        while($komen = mysqli_fetch_array($query)){
			        
			            echo "<tr>";

			            echo "<td>".$var."</td>";
			            echo "<td>".$komen['nama']."</td>";
			            echo "<td>".$komen['email']."</td>";
			            echo "<td>".$komen['komentar']."</td>";
			            echo "<td>".$komen['tanggal']."</td>";
			            
			            
			            echo "<td>";
			            echo "<a href='hapus.php?id=".$komen['id']."'>Hapus</a>";
			            echo "</td>";

			            echo "</tr>";
			            $var++;
			        } 
			        ?>

			    </tbody>
			  </table>
			</div>
		</div>
	</div>
	<!-- /view -->
	<script src="js/classie.js"></script>
	<script src="js/dummydata.js"></script>
	<script src="js/main.js"></script>
	<script>
	(function() {
		var menuEl = document.getElementById('ml-menu'),
			mlmenu = new MLMenu(menuEl, {
				backCtrl : false, // show back button
				onItemClick: loadDummyData // callback: item that doesn´t have a submenu gets 
			});

		// mobile menu toggle
		var openMenuCtrl = document.querySelector('.action--open'),
			closeMenuCtrl = document.querySelector('.action--close');

		openMenuCtrl.addEventListener('click', openMenu);
		closeMenuCtrl.addEventListener('click', closeMenu);

		function openMenu() {
			classie.add(menuEl, 'menu--open');
			closeMenuCtrl.focus();
		}

		function closeMenu() {
			classie.remove(menuEl, 'menu--open');
			openMenuCtrl.focus();
		}

		// simulate grid content loading
		var gridWrapper = document.querySelector('.content');

		function loadDummyData(ev, itemName) {
			ev.preventDefault();

			closeMenu();
			gridWrapper.innerHTML = '';
			classie.add(gridWrapper, 'content--loading');
			setTimeout(function() {
				classie.remove(gridWrapper, 'content--loading');
				gridWrapper.innerHTML = '<ul class="products">' + dummyData[itemName] + '<ul>';
			}, 700);
		}
	})();
	</script>
</body>

</html>
