<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<!DOCTYPE html>
<html>

<head>
	<? $APPLICATION->ShowHead(); ?>
	<title><? $APPLICATION->ShowTitle(); ?></title>
	<link rel="shortcut icon" href="<?= SITE_TEMPLATE_PATH ?>/images/favicon.604825ed.ico" type="image/x-icon">
	<link href="<?= SITE_TEMPLATE_PATH ?>/css/common.css" rel="stylesheet">
</head>

<body>
	<div id="panel">
		<? $APPLICATION->ShowPanel(); ?>
	</div>