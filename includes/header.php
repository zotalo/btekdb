<!DOCTYPE html>
<html>
<head>
	<title><?= isset($PageTitle) ? $PageTitle : "Bowtech Data Base"?></title>
	<meta charset="utf-8">
<link rel="icon" type="image/png" sizes="32x32" href="/images/favicon.ico">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/images/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
	<link rel="stylesheet" href="/CSS/bowtech.css">
	<link rel="stylesheet" href="/CSS/header.css">
	<link rel="stylesheet" href="/CSS/section.css">
	<link rel="stylesheet" href="/CSS/footer.css">
	<link rel="stylesheet" href="/CSS/navigation.css">
	<link rel="stylesheet" href="/CSS/table.css">
	<link rel="stylesheet" href="/CSS/info.css">
	<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
 <script>tinymce.init({ selector:'textarea',
						   height: 150,
						   width: 700,
  theme: 'modern',
  plugins: [
    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
    'searchreplace wordcount visualblocks visualchars code fullscreen',
    'insertdatetime media nonbreaking save table contextmenu directionality',
    'emoticons template paste textcolor colorpicker textpattern imagetools codesample'
  ],
  toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
  toolbar2: 'print preview media | forecolor backcolor emoticons | codesample',
  image_advtab: true,
  templates: [
    { title: 'Test template 1', content: 'Test 1' },
    { title: 'Test template 2', content: 'Test 2' }
  ],
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css'
	]});
	</script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="/js/nav.js"></script>
</head>
<body>
<header>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header_container.php';?>
</header>
<section class="content-wrap">