<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Document</title>
</head>
<body>
	<div class="col-12 mx-auto pt-3" style="height: 575px; background: #d6e5e2;">
		<div class="row">
			<div class="col-12 d-flex" style="height: 75px;">
				<img src="img/title.svg" class="" style="height: 30px">
				<a class="font-weight-normal ml-1">Cangallo</a>
				<a href='' class="font-weight-light ml-auto mr-5" style="color: black;">Доставка</a>
				<a href='' class="font-weight-light mr-5" style="color: black;">О нас</a>
				<a href='' class="font-weight-light mr-5" style="color: black;">ЧаВо</a>
				<a href='admin.php' class="font-weight-light" style="color: black;">Админ панель</a>
			</div>
		</div>
		<div class="col-12 mx-auto d-flex" style="height: 425px;">
			<div class="col-6 mx-auto d-flex" style="height: 425px;">
				<img src="img/title.svg" class="w-100">
			</div>
			<div class="col-6 mx-auto d-flex" style="height: 425px;">
				<h1 class="font-weight-light ml-5" style="margin-top: 160px; font-size:75px">Cangallo</h1>
			</div>
		</div>
	</div>


	<div class="col-12 mx-auto">	
		<?php 
			$connect = mysqli_connect("127.0.0.1", "root", "", "store");
			$query = mysqli_query($connect, "SELECT * FROM tovari");
		?>
		<div class='col-10 mx-auto'>
			<div class="row">
			<?php  
				echo count($query);
				for ($p = 0; $p <= 2; $p++) {
					$resolt = $query->fetch_assoc();
					echo "<div class='col-4 mх-auto mt-5'><img class='w-100' style='height: 300px;' src=" . $resolt['img'] . ">";
					echo "<div><a class='font-weight-normal' style='font-size: 30px;' href=>" . $resolt['name'] . "</a></div>";
					echo "<div><p class='font-weight-light' style='font-size: 20px;''>" . $resolt['text'] . "</p></div>";
					echo "<div><button class='font-weight-normal btn bg-primary' style='font-size: 20px; color: white;''>" . $resolt['price'] . "</button></div></div>";
				}
			?>
			</div>
			<div class="row">
			<?php
				for ($p = 3; $p <= 5; $p++) {
					$resolt = $query->fetch_assoc();
					echo "<div class='col-4 mх-auto mt-5'><img class='w-100' style='height: 300px;' src=" . $resolt['img'] . ">";
					echo "<div><a class='font-weight-normal' style='font-size: 30px;' href=>" . $resolt['name'] . "</a></div>";
					echo "<div><p class='font-weight-light' style='font-size: 20px;''>" . $resolt['text'] . "</p></div>";
					echo "<div><button class='font-weight-normal btn bg-primary' style='font-size: 20px; color: white;''>" . $resolt['price'] . "</button></div></div>";
				}
			?>
			</div>
		</div>

		<div class="col-12"></div>
		
	</div>

	<div class="col-12 mx-auto pt-3 mt-5" style="height: 100px; background: #d6e5e2;">
		<p class="font-weight-light ml-3">Наша почта: blabla@gmail.com</p>
	</div>
</body>
</html>