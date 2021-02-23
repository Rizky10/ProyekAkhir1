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
<?php include("KSonfig.php"); ?>
<?php

    if(isset($_POST['send'])) {
        $name = $_POST['Judul'];
        $email = $_POST['tahun'];
        $result = mysqli_query($mysqli, "INSERT INTO eka(judul,tahun) VALUES('$name','$email')"); 
        echo "<script>alert('Success!');</script>";
    }
    ?>
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
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<script src="js/modernizr-custom.js"></script>
	<style>
		input, select, textarea{
    		color:black;
		}

	</style>
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
			<div class="menu__wrap">
				
				<ul data-menu="main" class="menu__level" tabindex="-1" role="menu" aria-label="All">
					<li class="menu__item" role="menuitem"><a class="menu__link" data-submenu="submenu-2" aria-owns="submenu-2" href="#">Data Dosen</a></li>
					
				</ul>
				
				<ul " data-menu="submenu-2" id="submenu-2" class="menu__level" tabindex="-1" role="menu" aria-label="Fruits">
					<li ><a class="menu__link"  href="TampilanEka.php">Eka Stephani Sinambella</a></li>
					<li ><a class="menu__link" href="TampilanPandapotan.php">Pandapotan Siagian</a></li>
					<li ><a class="menu__link" href="TampilanMarojahan.php">Marojahan Sigiro</a></li>
					<li ><a class="menu__link" href="TampilanIstas.php">Istas Pratomo Manalu</a></li>
					<li ><a class="menu__link" href="TampilanSari.php">Sari Muthia Silalahi</a></li>
					<li ><a class="menu__link" href="TampilanTulus.php">Tulus Pardamean Simajuntak</a></li>
					<li ><a class="menu__link" href="TampilanPurwa.php">Ahmad Zatnika Purwalaksana</a></li>
					<li ><a class="menu__link" href="Tampilanfica.php">Fica Aida Nadhifatul Aini</a></li>
				</ul>
				
			</div>
		</nav>
		<div class="content">
			<div class="containersassd">
  				<h2>Data Penelitian Dosen</h2>
  				<hr>
  				<h4>Eka Stephani Sinambella</h4>
 			 		<table class="table table-hover">
			    <thead>
			      <tr>
			        <th>No.</th>
			        <th>Judul</th>
			        <th>Tahun</th>
			        <th>Action</th>
			       </tr>
			    </thead>
			    <tbody>
			       <?php
			       settype($var,'integer');
			        $var = 1;
			        $sql = "SELECT * FROM eka";
			        $query = mysqli_query($mysqli , $sql);
			        
			        while($komen = mysqli_fetch_array($query)){
			        
			            echo "<tr>";
			            echo "<td>".$var."</td>";
			            echo "<td>".$komen['judul']."</td>";
			            echo "<td>".$komen['tahun']."</td>";
			            echo "<td>";
			            echo "<a href='hapusEka.php?id=".$komen['id']."'>Hapus</a>";
			            echo "</td>";

			            echo "</tr>";
			            $var++;
			        } 
			        ?>

			    </tbody>
			  </table>
			</div>
			<div>
				<form action="TampilanEka.php" method="POST">
                            <div class="row"><br><br>Tambahkan data <hr>	
                                <div class="w3-row-padding">
								  <div class="w3-twothird">
								    <label>Judul</label>
								    <input class="w3-input w3-border" type="text" placeholder="Judul" name="Judul">
								  </div>
								  <div class="w3-third">
								    <label>Tahun</label>
								    <input class="w3-input w3-border" type="text" placeholder="Tahun" name="tahun">
								  </div>

								  <div class="w3-half" style="margin-top: 20px;">
								  	<button class="w3-bar-item w3-button w3-teal" name="send">Send</button>
								  </div>
								</div>
                            </div>
                        </form>
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
