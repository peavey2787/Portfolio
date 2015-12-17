<!DOCTYPE html>
<html>
<head>
<?php
    $Page = htmlspecialchars($_GET["Page"]);

    echo '<title>My ' . $Page . '</title>
	<meta charset="utf-8" />
    <meta name="description" content="Jamie Horton\'s $Page Page">';?>
    <meta name="keywords" content="jamie horton's resume,Jamie Hortons resume,Jamie Horton's website,Jamie Horton's Web Site,Jamie Horton's Portfolio, Jamie Horton's Resume Page">
    <meta name="author" content="Jamie Horton">
    <meta name="copyright" content="Jamie Horton 2015">  

    <!-- Load Proper CSS Template File-->
    <script src="/Scripts/Load_CSS_Template.js"></script>
	<script>Start(0);</script>
</head>
<body class="center">
    <div id="Full_Screen_Wrapper" class="center">
        <?php 
            include $_SERVER['DOCUMENT_ROOT'].'/Navigation.php'; 
			include $_SERVER['DOCUMENT_ROOT'].'/Resume_Navigation.php';
            include $_SERVER['DOCUMENT_ROOT'].'/Resume/'.$Page.'.php'; 
        ?>
    </div><!-- End Wrapper -->
	<?php include $_SERVER['DOCUMENT_ROOT'].'/Footer.php'; ?>
</body>
</html>
