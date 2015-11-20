oldindex.php
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
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/app/bower/jquery/dist/jquery.min.js');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/app/js/main.js');

// Add Stylesheets
$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/app/css/main.css');


// // Logo file or site title param
// if ($this->params->get('logoFile'))
// {
// 	$logo = '<img src="' . JUri::root() . $this->params->get('logoFile') . '" alt="' . $sitename . '" />';
// }
// elseif ($this->params->get('sitetitle'))
// {
// 	$logo = '<span class="site-title" title="' . $sitename . '">' . htmlspecialchars($this->params->get('sitetitle')) . '</span>';
// }
// else
// {
// 	$logo = '<span class="site-title" title="' . $sitename . '">' . $sitename . '</span>';
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<jdoc:include type="head"/>
	<link rel="icon" href="<?= JUri::base(TRUE) . "/templates/" . $doc->template;?>/app/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?= JUri::base(TRUE) . "/templates/" . $doc->template;?>/app/img/favicon.ico" type="image/x-icon">
</head>
<body>

	<div id="container">
		<div id="header">
			<div id="logo">
				<a href="<?= JUri::base(TRUE);?>"><h1>Победа разума</h1></a>
			</div>
			<div id="main_menu">
				<jdoc:include type="modules" name="position-0"/>
			</div>
		</div>
		<div id="middle_block">
			<div id="slider">
				<div id="self_slider">
				<jdoc:include type="modules" name="position-1"/>
				</div>
			</div>
			<div id="social">
				<div class="icon vk"><a href="#"><img src="<?= JUri::base(TRUE) . "/templates/" . $doc->template;?>/app/img/vk.png" height="50" width="50"></a></div>
				<div class="icon odnoklassniki"><a href="#"><img src="<?= JUri::base(TRUE) . "/templates/" . $doc->template;?>/app/img/odnoklassniki.png" height="50" width="50"></a></div>
				<div class="icon instagramm"><a href="#"><img src="<?= JUri::base(TRUE) . "/templates/" . $doc->template;?>/app/img/instagram.png" height="50" width="50"></a></div>
				<div id="contacts">Наш адрес: ул.Попкина 24 <br> Телефон: 89234669252</div>

			</div>
		</div>
		<div id="main_content">
			<div id="sidebar">
				<ul>
					<li><a href="#">Quest rooms</a></li>
					<li><a href="#">Что же вас ждет</a></li>
					<li><a href="#">Контакты</a></li>
				</ul>
			</div>
			<div id="content">
				<jdoc:include type="component"/>
			</div>
		</div>
		<div id="footer">
			<div id="create_by"><span><a href="https://vk.com/d.a.sibiryakov" target="blank">.DimaS.</a></span></div>
			<div id="copyright"><span>&copy; SibDiAl 2015</span></div>
		</div>
	</div>
</body>
</html>

