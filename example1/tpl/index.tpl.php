<!DOCTYPE html>
<html>
<head>
	<title>Документ без названия</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<script src="scripts/jquery-3.1.1.min.js"></script>	
	<link rel="stylesheet" href="art/art.css">
	<script src="scripts/scripts.js"></script>	
</head>
<body>
	<div class="header">
		<div class="w1280">
			<div class="logo">
				<img src="art/logo.png">
			</div>
			<div class="site-title">
				<div class="title-bold">
					NAUSHNIKI
				</div>
				<div class="title-desc">
					магазин беспроводных наушников
				</div>
			</div>
			<div class="call">
				<div class="call-img">
					<img src="art/phone.png">
				</div>
				<div class="call-info">
					<div class="phone-number">
						<a href="tel:+79999999999"> + 7 (999) 999-99-99</a>
					</div>
					<div class="call-wait">
						Ждем Вашего звонка с 10:00 до 23:00
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="menu">
		{{mainMenu}}
	</div>
	<div class="content">
		<div class="w1280">

			<div class="item">
				<div>
					<div class="item-pics">
						<div class="item-pics-frame">
							<div class="item-main-pic">
								<img src="art/item_pic1.png">
							</div>
							<ul class="item-gallery-preview">
								<li>
									<img src="art/item_mini_pic1.png">
								</li>
								<li>
									<img src="art/item_mini_pic2.png">
								</li>
							</ul>
						</div>
					</div>

					<div class="desc">
						<div class="item-title">
							<span id="item">Beats PowerBeats 2</span> (<span id="color">черно-красный</span>)
						</div>

						<div class="item-price">
							<div class="wrapper">
								<div class="current-item-price">
									3690 руб.
								</div>
							</div>
							<div class="wrapper">
								<div class="striked-item-price">
									4790 руб.
								</div>
							</div>
							<input type="button" value="Купить" class="item-buy">
						</div>

						<div class="item-desc">
							<div class="item-colors">
								<div>Доступные цвета</div>
								<ul class="color-gallery">
									<li>
										<a href="#" onclick="selectColor(this)" title="черно-красный" ><img src="art/color_tile1.png"><span></span></a>
									</li>
									<li>
										<a href="#" onclick="selectColor(this)" title="серый"><img src="art/color_tile2.png"><span></span></a>
									</li>
									<li>
										<a href="#" onclick="selectColor(this)" title="красно-черный"><img src="art/color_tile3.png"><span></span></a>
									</li>
								</ul>
								<div class="characteristics-title">Характеристики:</div>
								<ul class="characteristics">
									<li>Вид наушников - вкладыши</li>
									<li>Тип подключение - Bluetooth</li>
									<li>Акустическое оформление - закрытое</li>
									<li>Есть микрофон</li>
									<li>Регулятор громкости</li>								
								</ul>
							</div>
						</div>
						<div class="item-desc">
							<div class="item-desc-title">
								Описание модели:
							</div>
							<div class="description">
								Точная реплика (включая валидность серийного номера) блютуз наушников для спорта Powerbeats 2 Wireless. Спроектированы специалистами компании для абсолютного удобства и комфорта обладателя. Восхитительное звучание, которым могут обладать только беспроводные наушники Beats с глубокими басами и четкими высокими частотами, высокоточное изготовление корпуса наушников, пото- и влагозащита. Ушные дуги имеют специальный запатентованный механизм, облегчающий надевание наушников. Дизайн переключателя громкости оптимизирован для нажатия на бегу. Держа в руках эту модель блутуз наушников, понимаешь, что они, пожалуй, лучшие bluetooth наушники на сегодня. На создание этой серии специалистов Beats и лично Dr.Dre воодушевила блистательная карьера и упорные тренировки баскетболиста LeBron James.
							</div>
						</div>
					</div>
				</div>

				<div>
					<h4>Полные технические характеристики: </h4>
					<div class="full-item-desc">
						<ul class="full">
							<li>Сопротивление (impedance): <span class="char-name"></span><span class="char-val"> 16 Ω</span></li>
							<li>Батарея (мАч): <span class="char-name"></span><span class="char-val"> 150</span></li>
							<li>Рабочее расстояние: <span class="char-name"></span><span class="char-val"> до 10 м</span></li>
							<li>Частотный диапазон: <span class="char-name"></span><span class="char-val"> 20 Гц-20 кГц</span></li>
							<li>Микрофон: <span class="char-name"></span><span class="char-val"> есть</span></li>
							<li>Возможность принимать звонки: <span class="char-name"></span><span class="char-val"> имеется</span></li>
						</ul>
					</div>
					<div class="full-item-desc">
						<ul class="full">
							<li>Время зарядки (ч): <span class="char-name"></span><span class="char-val"> 1</span></li>
							<li>Время в режиме прослушивания музыки (ч): <span class="char-name"></span><span class="char-val"> 6</span></li>
							<li>Время в режиме разговора (ч): <span class="char-name"></span><span class="char-val"> 6</span></li>
							<li>Время в режиме ожидания (ч): <span class="char-name"></span><span class="char-val"> 150</span></li>
							<li>Вес (гр): <span class="char-name"></span><span class="char-val"> 24</span></li>
						</ul>
					</div>
				</div>
				<div>
					<div class="full-item-desc">
						<div class="main-advantage-title">
							Преимущества наушников Beats PowerBeats 2 Wireless:
						</div>

						<div class="advantage">
							<ul>
								<li>Разработаны при участии баскетболиста NBA Леброна Джеймса.</li>
								<li>Фирменное звучание Beats с насыщенными басами.</li>
								<li>Беспроводное подключение к любым аудио устройствам по средствам Bluetooth.</li>
								<li>Регулируемое заушное крепление, позволяющее использовать наушники при занятии спортом.</li>
								<li>Защита наушников от попадания пота и влаги.</li>
								<li>Раздельные динамики для средних и низких частот для качественного звучания.</li>
								<li>Встроенный микрофон.</li>
							</ul>
						</div>

						<div class="advantage">
							<div class="advantage-title">
								Созданы специально для занятий спортом
							</div>
							Наушники PowerBeats 2 подходят для занятия практическим любым видом спорта, включая экстремальные. Регулируемые гибкие душки надежно держат наушники – они не свалится при прыжках, во время бега или от резкого поворота головы.
						</div>
						<div class="advantage">
							<div class="advantage-title">
								Эксклюзивные технологии Beats для непревзойденного звучания
							</div>
							Благодаря технологиям Beats достигается ясный и объемный звук, плотный бас, плавная передача вокала и четкие высокие частоты.
						</div>
					</div>
					<div class="full-item-desc">
						<div class="advantage">
							<div class="advantage-title">
								Наслаждайтесь музыкой и следите за тем, что происходит вокруг
							</div>
							В наушниках PowerBeats 2 вы можете работать, стрелять, бегать в парке или нестись на велосипеде максимально безопасно. Конструкция динамиков позволяет слышать все, что происходит вокруг.
						</div>
						<div class="advantage">
							<div class="advantage-title">
								Beats PowerBeats работают в любых условиях
							</div>
							Прочность и долговечность наушников проверена в самых экстремальных ситуациях. Защита от ультрафиолета позволяет использовать их в самую жаркую погоду.
						</div>
						<div class="advantage">
							<div class="advantage-title">
								Без проводов и без потерь
							</div>
							Благодаря фирменной технологии Beats и последним разработкам в области технологии BlueTooth, наушники PowerBeats 2 Wireless позволяют передавать звук «по воздуху» без потери качества во всем диапазоне.
						</div>
						<div class="advantage">
							<div class="advantage-title">
								Встроенный микрофон
							</div>
							PowerBeats 2 можно использовать в качестве гарнитуры для телефона. Функция ControlTalk позволяет совершать звонки с помощью встроенного микрофона.
						</div>
					</div>
				</div>
				<h2>Отзывы</h2>
				<div class="reviews">
					<div class="review">
						<div>
							<span>Анатолий, 19.12.2015</span>
							<span class="stars">
								<img src="art/star_solid.png">
								<img src="art/star_solid.png">
								<img src="art/star_solid.png">
								<img src="art/star_solid.png">
								<img src="art/star_solid.png">
							</span>
						</div>
						<div>
							Не ожидал что качество будет настолько хорошей для реплики! Спасибо за оперативную доставку! Мои рекомендации!
						</div>
					</div>
					<div class="review">
						<div>
							<span>Мария Сысоева, 1.11.2015 </span>
							<span class="stars">
								<img src="art/star_solid.png">
								<img src="art/star_solid.png">
								<img src="art/star_solid.png">
								<img src="art/star_solid.png">
								<img src="art/star_solid.png">
							</span>
						</div>
						<div>
							Очень стильные и качественные!!звук отменный!!Спасибо за оперативную доставку!
						</div>
					</div>
				</div>
				<h2>Добавить отзыв</h2>
				<div class="add-review">
					<input type="text" class="reviewer-name" placeholder="Ваше имя">
				
					<div class="mark">
						<span>Ваша оценка: </span>
						<span>
							<a href="#">
								<img src="art/star.png">
							</a>
							|
							<a href="#">
								<img src="art/star.png">
								<img src="art/star.png">
							</a> 
							|
							<a href="#">
								<img src="art/star.png">
								<img src="art/star.png">
								<img src="art/star.png">
							</a>
							|
							<a href="#">
								<img src="art/star.png">
								<img src="art/star.png">
								<img src="art/star.png">
								<img src="art/star.png">
							</a>
							|
							<a href="#">
								<img src="art/star.png">
								<img src="art/star.png">
								<img src="art/star.png">
								<img src="art/star.png">
								<img src="art/star.png">
							</a>
						</span>
					</div>
					<div>
						<textarea class="my-review" placeholder="Ваш отзыв"></textarea>
					</div>
					<input type="button" class="send-review" value="Добавить отзыв">
				</div>
				<div class="test-form">
					<h2 style="color: #808092;">Тестовая форма</h2>
					<div class="field">
						<div class="key">ФИО</div>
						<div class="test-val">
							<input type="text" placeholder="Введите ФИО" id="full=name">
							<div class="notice">Да, нужно ввести ФИО</div>
						</div>
					</div>
					<div class="field">
						<div class="key">Телефон</div>
						<div class="test-val">
							<input type="text" placeholder="+79999999999" id="phone">
							<div class="notice">А сюда нужно ввести телефон</div>
						</div>
					</div>
					<div class="field">
						<div class="key required">Ваш e-mail</div>
						<div class="test-val">
							<input type="text" placeholder="test@example.ru" id="email">
							<div class="notice">Внимание! Введя электронную почту, к которой у Вас нет доступа вы не сможете подтвердить заказ.</div>
						</div>
					</div>
					<div class="field">
						<div class="key required">Укажите дополнительную информацию</div>
						<div class="test-val">
							<textarea id="additional" placeholder="Введите сюда то, с чем вы считаете нам необходимо ознакомиться"></textarea>
						</div>
					</div>
					<div class="field">
						<div class="key">Quo vadis?</div>
						<div class="test-val">
							<ul id="latin">
								<li>
									<input type="radio" checked name="latin" value="Veni" id="veni">
									<label for="veni">Veni</label>
								</li>
								<li>
									<input type="radio" name="latin" value="Vidi" id="vidi">
									<label for="vidi">Vidi</label>	
								</li>
								<li>
									<input type="radio" name="latin" value="Vici" id="vici">
									<label for="vici">Vici</label>
								</li>
								<li>
									<input type="radio" name="latin" value="Errare Humanum est" id="errare">
									<label for="errare">Errare Humanum est</label>
								</li>
							</ul>
						</div>
					</div>
					<div class="field">
						<div class="key"></div>
						<div class="test-val">
							<input type="checkbox" id="cbox" checked >
							<label class="required" for="cbox">Temporibus autem quibusdam et aut officiis debitis aut rerum</label>
						</div>
					</div>
				</div>
				<h2 style="color: #808092;">Выбор доставки</h2>
				<ul class="delivery-type" id="delivery-type">
					<li>
						<input type="radio" checked name="delivery" value="courrier" id="courrier" onclick="showDeliveryType(this)">
						<label for="delivery">Курьером</label>
					</li>
					<li>
						<input type="radio" name="delivery" value="pickup" id="pickup" onclick="showDeliveryType(this)">
						<label for="pickup">Самовывоз</label>
					</li>
				</ul>
				<div class="delivery-variants" id="delivery-variants">
					<div class="pickup delivery-variant">
						<h2 style="color: #808092;">Самовывоз заказа</h2>
						<div class="delivery-form">
<!--						<div class="selector" id="selector">
								<div onclick="toggleSelector(this)" id="delivery-point">
									Выберите пункт самовывоза
								</div>
								<ul>
									<li onclick="toggleSelector(this)">Выберите пункт самовывоза</li>
									<li onclick="toggleSelector(this)">Пункт 1</li>
									<li onclick="toggleSelector(this)">Пункт 2</li>
								</ul>
							</div> -->
							<select id="delivery-point" class="selector">
								<option value="0">Выберите пункт самовывоза</option>
								<option value="Пункт 1">Пункт 1</option>
								<option value="Пункт 2">Пункт 2</option>
							</select>
						</div>
					</div>
					<div class="courrier delivery-variant">
						<h3 style="color: #808092;">Доставка курьером</h3>
						<div class="delivery-form">
							<input type="text" placeholder="Улица" id="street">
							<div class="notice required">Обязательное поле</div>
							<input type="text" placeholder="Дом" id="house">
							<div class="notice required">Обязательное поле</div>
							<input type="text" placeholder="Подъезд" id="entrance">
							<input type="text" placeholder="Домофон" id="doorphone">
							<input type="text" placeholder="Этаж" id="floor">
							<input type="text" placeholder="Квартира" id="apartament">
							<input type="text" placeholder="Корпус или строение" id="building">
							<div class="notice">Если есть</div>
						</div>
					</div>
					<div class="delivery-form">
						<textarea placeholder="Вы удивлены, почему часть анкеты написана на латыни?"></textarea>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-controls">
			<div class="w1280">
				<input class="next" type="button" value="Вперед →" onclick="checkForm()">
			</div>
		</div>
	</div>
</body>
</html>
