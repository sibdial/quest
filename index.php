<?php
defined('_JEXEC') or die;

$app             = JFactory::getApplication();
$doc             = JFactory::getDocument();
$user            = JFactory::getUser();
$this->language  = $doc->language;
$this->direction = $doc->direction;

// Getting params from template
$params = $app->getTemplate(true)->params;

// Detecting Active Variables
$option   = $app->input->getCmd('option', '');
$view     = $app->input->getCmd('view', '');
$layout   = $app->input->getCmd('layout', '');
$task     = $app->input->getCmd('task', '');
$itemid   = $app->input->getCmd('Itemid', '');
$sitename = $app->get('sitename');

if($task == "edit" || $layout == "form" )
{
	$fullWidth = 1;
}
else
{
	$fullWidth = 0;
}

// Add JavaScript 
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/app/js/glide.min.js');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/app/js/main.js');

// Add Stylesheets
$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/app/css/main.css');

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<jdoc:include type="head"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="<?= JUri::base(TRUE) . "/templates/" . $doc->template;?>/app/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?= JUri::base(TRUE) . "/templates/" . $doc->template;?>/app/img/favicon.ico" type="image/x-icon">
</head>
<body>

	<div id="container">
		<div id="header">
			<div id="logo">
				<h1>Eleme<span>N</span>t</h1>
				<h2>Win of Mind</h2>
			</div>
			<div id="contacts">
				<h2>г.Новокузнецк, ул.Кирова, XXX</h2>
				<h3>тел. 8-923-466-92-52</h3>
			</div>
			<div id="social">
				<div class="icon vk"><a href="#"></a></div>
				<div class="icon odnoklassniki"><a href="#"></a></div>
				<div class="icon instagramm"><a href="#"></a></div>
			</div>
		</div>
		<div class="menu">
		<a href="#" id="touch-menu">Меню</a>
		<nav>
			<ul class="nav">
				<li><a href="#about">О нас</a></li>
				<li><a href="#quests">Квесты</a></li>
				<li><a href="#stock">Акции</a></li>
				<li><a href="#adress">Контакты</a></li>
				<!-- <li><a href="#">Текст_5</a></li> -->
			</ul>
		</nav>
		</div>
		<div id="slider">
			<!-- <div id="self_slider"> -->
			<jdoc:include type="modules" name="position-1"/>
			<!-- </div> -->
		</div>
		<div id="about">
			<h2>О нас</h2>
			<p>Не знаете как весело провести время? Надоели походы в кинотеатры, боулинг, различные антикафе и прочие 
			"заезженные" места развлечений? Любите все интересное и необычное? В поиске чего-то нового? Подумываете сплотить 
			ваш рабочий коллектив? Тогда вы зашли по адресу!!! Реалити-квест "Элемент" - это новый отличный способ провести
			время с вашими близкими, друзьями и коллегами! </p>
			<p>Этот вид развлечений подойдет для всех любителей интересного и интеллектуального времяпрепровождения, ведь 
			целью таких реальных квест-игр является решение различных логических загадок. Двигаясь вперед, шаг за шагом, 
			Вам предстоит решать все новые и новые задачи, находить подсказки в самых неожиданных местах, сохраняя при 
			этом спокойствие и способность логически мыслить.</p>
			<p>Участников ждет невероятная атмосфера, море новых эмоций и адреналина. Хорошо продуманный сюжет гарантирует
			 вам увлекательный и завораживающий процесс.</p>
			<p>Мы ждем Вас, если Вы - человек с активной жизненной позицией, любитель загадок и тайн, 
			склонный к приключениям!!!</p>
		</div>
		<div id="quests">
			<div class="up"><a href="#container">К меню</a></div>
			<h2>Квесты</h2>
			<div class="quest1 item-quest">
				<img src="<?= JUri::base(TRUE) . "/templates/" . $doc->template;?>/app/img/dosimeter-622511_1280.jpg">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
			<div class="quest2 item-quest">
			<div class="up"><a href="#container">К меню</a></div>
			<img src="<?= JUri::base(TRUE) . "/templates/" . $doc->template;?>/app/img/government-bunker-759486_1280.jpg">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</div>
		<div id="stock">
			<div class="up"><a href="#container">К меню</a></div>
			<p>3Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
		<div id="adress">
			<div class="up"><a href="#container">К меню</a></div>
			<p>3Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	</div>
</body>
</html>

