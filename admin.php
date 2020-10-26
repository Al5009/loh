<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
	<style type="text/css">
	</style>
<body>

		<div class="col-12 d-flex pt-3" style="height: 65px; background: #d6e5e2;">
			<img src="img/title.svg" class="" style="height: 30px">
			<a class="font-weight-normal ml-1">Cangallo</a>
			<a href='' class="font-weight-light ml-auto mr-5" style="color: black;">Начальная страница</a>
			<a href='' class="font-weight-light mr-5" style="color: black;">Доставка</a>
			<a href='' class="font-weight-light mr-5" style="color: black;">О нас</a>
			<a href='' class="font-weight-light mr-5" style="color: black;">ЧаВо</a>
			<a href='admin.php' class="font-weight-light" style="color: black;">Админ панель</a>
		</div>
	<div class="col-7 mx-auto" style="margin-top: 50px; background-color: white;">
		<hr>
		<div class="col-12"> <!-- 2. выводите все элементы в этом диве -->
			<h1>Админ панель</h1>
			 <form action="xz.php" method="GET">
				<div class="mr-4" style="margin-top: 30px;">
					<input placeholder="Название товара" name="name" class="form-control">
				</div>
				<div class="mr-4" style="margin-top: 20px;">
					<input placeholder="Описание" name="text" class="form-control">
				</div>
				<div class="mr-4" style="margin-top: 20px;">
					<input placeholder="Картинка" name="img" class="form-control">
				</div>
				<div class="mr-4" style="margin-top: 20px;">
					<input placeholder="Цена" name="price" class="form-control">
				</div>
				<div class="mr-4" style="margin-top: 20px;">
					<button class="btn bg-primary text-white">Отправить</button>
				</div>
				<div class="col-1" style="height: 20px;"></div>
			</form>
		</div>
	</div>
</body>
</html>