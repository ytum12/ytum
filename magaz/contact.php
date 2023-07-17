<!doctype html>
<html lang="en">
  <head>
  	<title>Контакты</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="css/contact.css">
	</head>
	<body>

	<nav class="navMenu">
      <a href="main.php">Главная</a>
      <a href="reviews.php">Отзывы</a>
      <a href="../profile.php">Личный кабинет</a>
      <div class="dot"></div>
    </nav>
<hr>

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Контакты</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="wrapper">
						<div class="row no-gutters mb-5">
							<div class="col-md-7">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-4">Связаться с нами</h3>
									<div id="form-message-warning" class="mb-4"></div> 
									<form method="POST" id="contactForm" name="contactForm" class="contactForm">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="name">Имя</label>
													<input type="text" class="form-control" name="name" id="name" placeholder="Имя">
												</div>
											</div>
											<div class="col-md-6"> 
												<div class="form-group">
													<label class="label" for="email">Почта</label>
													<input type="email" class="form-control" name="email" id="email" placeholder="Почта">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="#">Сообщение</label>
													<textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Сообщение"></textarea>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="Отправить" class="btn btn-primary">
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="col-md-5 d-flex align-items-stretch">
								<div id="map">
			          </div>
							</div>
						</div>
					<div class="map">
						<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Af40fbc90b653ec4d35dbc59a32e8fccad041bf3957af620bab82355ab6320521&amp;width=600&amp;height=515&amp;lang=ru_RU&amp;scroll=true"></script>
					</div>
						<div class="row">
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
			        		<div class="text">
				            <p><span>Адрес:</span> Рязанская область, Сасово, ул.Пушкина 21</p>
				          </div>
			          </div>
							</div>
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
			        		<div class="text">
				            <p><span>Телефон:</span>+7(985)-431-35-45</p>
				          </div>
			          </div>
							</div>
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
			        		<div class="text">
				            <p><span>ИНН:</span>7785083872</p>
				          </div>
			          </div>
							</div>
			          </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

