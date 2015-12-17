<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>My Portfolio</title>
    <meta name="description" content="Jamie Horton's Portfolio. A collection of projects that I have created on my own.">
    <meta name="keywords" content="Jamie Horton's Personal web site,Jamie Horton's website,Jamie Horton's Web Site,Jamie Horton's Portfolio, Jamie Horton's Portfolio Page, Jamie Horton's Resume'">
    <meta name="author" content="Jamie Horton">
    <meta name="copyright" content="Jamie Horton 2015">

    <!-- Load Proper CSS Template File-->
    <script src="./Scripts/Load_CSS_Template.js"></script>
	<script>Start(0);</script>
</head>
<body class="center">
    <div id="Full_Screen_Wrapper" class="center">
  		<?php include $_SERVER['DOCUMENT_ROOT'].'/Navigation.php'; ?>

        <div id="Portfolio_Page">
			<div id="Csharp_Border"></div>
            <div id="My_Portfolio"></div>
	    
            <div id="Csharp">
                <h1>C# Projects</h1>
                <a href="Project_Description.php?Project=Auto_Programs">
                    <img id="Auto_Programs" class="Portfolio_Images_Width Portfolio_Images_Margin" src="./Images/Auto_Programs.png" alt="Auto Move Files and Auto VPN" />
                </a>
                <a href="Project_Description.php?Project=WatchME_JamieDLL">
                    <img id="WatchME_JamieDLL" class="Portfolio_Images_Width Portfolio_Images_Margin" src="./Images/WatchME_JamieDLL.png" alt="WatchME and JamieDLL" />
                </a>
            </div>
            <a href="Project_Description.php?Project=Cplusplus_School_Projects">
                <img id="Cplusplus_School_Projects" class="Portfolio_Images_Width Portfolio_Images_Margin" src="./Images/Cplusplus_School_Projects.png" alt="Cplusplus School Projects" />
            </a>
            <a href="Dice.php">
                <img id="GameMaker_Studio" class="Portfolio_Images_Width Portfolio_Images_Margin" src="./Images/GameMaker_Studio.png" alt="GameMaker Studio" />
            </a>
			<a href="Project_Description.php?Project=Peavey2787">
			<img id="Peavey2787" class="Portfolio_Images_Width Portfolio_Images_Margin" src="./Images/Peavey2787.png" alt="Peavey2787 Jamie's Personal Blog Website" />
			</a>
        </div>
    </div><!-- End Wrapper -->
	<?php include $_SERVER['DOCUMENT_ROOT'].'/Footer.php'; ?>
</body>
</html>