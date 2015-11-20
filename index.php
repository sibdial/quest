<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.protostar
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

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

// Add JavaScript Frameworks
JHtml::_('bootstrap.framework');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/js/template.js');

// Add Stylesheets
$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/template.css');

// Load optional RTL Bootstrap CSS
JHtml::_('bootstrap.loadCss', false, $this->direction);

// Adjusting content width
if ($this->countModules('position-7') && $this->countModules('position-8'))
{
	$span = "span6";
}
elseif ($this->countModules('position-7') && !$this->countModules('position-8'))
{
	$span = "span9";
}
elseif (!$this->countModules('position-7') && $this->countModules('position-8'))
{
	$span = "span9";
}
else
{
	$span = "span12";
}

// Logo file or site title param
if ($this->params->get('logoFile'))
{
	$logo = '<img src="' . JUri::root() . $this->params->get('logoFile') . '" alt="' . $sitename . '" />';
}
elseif ($this->params->get('sitetitle'))
{
	$logo = '<span class="site-title" title="' . $sitename . '">' . htmlspecialchars($this->params->get('sitetitle')) . '</span>';
}
else
{
	$logo = '<span class="site-title" title="' . $sitename . '">' . $sitename . '</span>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Win of Mind</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
</head>
<body>

	<div id="container">
		<div id="header">
			<div id="logo">
				<h1>Победа разума</h1>
			</div>
			<div id="main_menu">
				<ul>
					<li class="button"><a href="#">Главная</a></li>
					<li class="button"><a href="#">Контакты</a></li>
					<li class="button"><a href="#">Отзывы</a></li>
				</ul>
			</div>
		</div>
		<div id="middle_block">
			<div id="slider">
				<div id="self_slider"></div>
			</div>
			<div id="social">
				<div class="icon vk"><a href="#"><img src="img/vk.png" height="50" width="50"></a></div>
				<div class="icon instagramm"><a href="#"><img src="img/instagram.png" height="50" width="50"></a></div>
				<div class="icon odnoklassniki"><a href="#"><img src="img/odnoklassniki.png" height="50" width="50"></a></div>
				<div id="contacts">Наш адрес: ул.Попкина 24 <br> Телефон: 89234669252</div>

			</div>
		</div>
		<div id="main_content">
			<div id="sidebar">
				<ul>
					<li><a href="#">Quest rooms</a></li>
					<li><a href="#">Что же вас ждет</a></li>
					<li><a href="#">Контакты</a></li>
					<li><a href="#">Отзывы</a></li>
				</ul>
			</div>
			<div id="content">
				<div id="self_content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</div>
			</div>
		</div>
		<div id="footer">
			<div id="create_by"><span><a href="https://vk.com/d.a.sibiryakov" target="blank">.DimaS.</a></span></div>
			<div id="copyright"><span>&copy; SibDiAl 2015</span></div>
		</div>
	</div>
</body>
</html>

