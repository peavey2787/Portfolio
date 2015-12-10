<!DOCTYPE html>
<html>
<head>
<?php
    $Project = htmlspecialchars($_GET["Project"]);

    echo '<title>Description of $Project</title>
	<meta charset="utf-8" />
    <meta name="description" content="A description of $Project">';?>
    <meta name="keywords" content="jamie horton's resume,Jamie Hortons resume,Jamie Horton's website,Jamie Horton's Web Site,Jamie Horton's Portfolio, Jamie Horton's Resume Page">
    <meta name="author" content="Jamie Horton">
    <meta name="copyright" content="Jamie Horton 2015">  

    <!-- Load Proper CSS Template File-->
    <script src="./Scripts/Load_CSS_Template.js"></script>
	<script>Start(0);</script>
</head>
<body class="center">
    <div id="Full_Screen_Wrapper" class="center">
        <?php 
            include $_SERVER['DOCUMENT_ROOT'].'/Navigation.php'; 
            include $_SERVER['DOCUMENT_ROOT'].'/Resume/'.$Project.'.php'; 
        ?>

		<h1>Resume Loaded</h1>
    </div><!-- End Wrapper -->
</body>
</html>
