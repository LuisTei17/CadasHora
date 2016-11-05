<?php
	error_reporting(E_ALL ^ E_NOTICE);
?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php  echo $titulo ?></title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/estilos.css">
	</head>
	<body>
		<div class=" navbar navbar-inverse navbar-fixed-top nave">
	        <div class="container">
	            <div class="navbar-header">
	                <a href="index.php" class="navbar-brand">Login</a>
	            </div>
	            <div>
	                <ul class="nav navbar-nav">
	                    <li><a href="professorAr.php">Professor</a></li>
	                    <li><a href="AlunoAr.php">Aluno</a></li>
	                </ul>
	            </div>
	        </div>
    	</div>

	    <div class="container">
	        <div class="principal">
