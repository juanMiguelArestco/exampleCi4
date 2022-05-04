<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= $this->renderSection('title') ?>&nbsp;-&nbsp;Mi blog</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
	<?php $this->renderSection('css') ?>
</head>
<body>
	<?= $this->include('Front/layout/header'); ?>
	<?= $this->renderSection('content'); ?>
	<?= $this->include('Front/layout/footer'); ?>
	
	<?php // $this->renderSection('js') ?>
</body>
</html>
