<?php

/**
 * �������� ������
 * ===============
 * $title - ���������
 * $content - HTML ��������
 */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>

<head>
	<title><?= $title ?></title>
	<meta content="text/html; charset=Windows 1251" http-equiv="content-type">
	<link rel="stylesheet" type="text/css" media="screen" href="v/style.css" />
</head>

<body>
	<div id="header">
		<h1><?= $title ?></h1>
	</div>

	<div id="menu">
		<a href="index.php">������ �����</a> |
		<a href="index.php?c=page&act=edit">������������� �����</a>
	</div>

	<div id="content">
		<?= $content ?>
	</div>

	<div id="footer">
		��� ����� ��������. �����. �������.
	</div>
</body>

</html>