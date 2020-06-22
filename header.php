<?php 
	if (!isset($page_title))
		$page_title = 'Busca Boletins';
	$content_only = isset($_SERVER['HTTP_CONTENT_ONLY']) && $_SERVER['HTTP_CONTENT_ONLY'] == 1;

	if ($content_only)
		header('Page_Title: ' . $page_title);
	else {
?>

<!DOCTYPE html PUBLIC "-//w3c//DTD XHTML 1.o Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-bt" xml:lang="pt-br">	
	<head>			
		<link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet" type='text/css'>	
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">			
		<meta  http-equiv="content-Type" content="text/html" charset="utf-8">		
		<title><?php $page_title ?></title>		
	</head>
	<body>
		<header>
			<div id="header">
				<h1 id="h1-header" align="center">Busca Boletins</h1>
			</div>
		</header>
		<main>
<?php } ?>