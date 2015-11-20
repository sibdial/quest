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
				<h1>Элемент</h1>
				<h2>Win of Mind</h2>
			</div>
			<div id="contacts">
				<h2>г.Новокузнецк ул.Кирова, XXX</h2>
				<h3>тел. 8-923-466-92-52</h3>
			</div>
		</div>
	</div>
</body>
</html>

