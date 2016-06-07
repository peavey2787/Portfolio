<!DOCTYPE html>
<html>
<head>
<?php
	$Project = htmlspecialchars($_GET['Project']);

	if($Project != 'Portfolio' && $Project != '' && $Project != 'null' && $Project != 'undefined' )
	{  
		echo '<title>Description of ' . $Project . '</title>
		<meta charset="utf-8" />
		<meta name="description" content="A description of ' . $Project . '">
		<meta name="keywords" content="description of ' . $Project . ',jamie horton,Jamie Horton\'s Personal web site,Jamie Horton\'s website,Jamie Horton\'s Web Site,Jamie Horton\'s Portfolio, Jamie Horton\'s Portfolio Page, Jamie Horton\'s Resume">
		<meta name="author" content="Jamie Horton">
		<meta name="copyright" content="Jamie Horton 2015">';
	}
	else
	{
		echo '<title>My Portfolio</title>
		<meta charset="utf-8" />
		<meta name="description" content="Jamie Horton\'s Portfolio">
		<meta name="keywords" content="jamie horton\'s portfolio,jamie horton portfolio,jamie horton,Jamie Horton\'s Personal web site,Jamie Horton\'s website,Jamie Horton\'s Web Site,Jamie Horton\'s Portfolio, Jamie Horton\'s Portfolio Page, Jamie Horton\'s Resume">
		<meta name="author" content="Jamie Horton">
		<meta name="copyright" content="Jamie Horton 2015">';  
	}
?>
	<link href="/Desktop_Template.css" rel="stylesheet" />
</head>
<body class="center">
	<div id="Full_Screen_Wrapper" class="center">
		<?php 
			include $_SERVER['DOCUMENT_ROOT'].'/navigation.php';
			if($Project != 'Portfolio' && $Project != '' && $Project != 'null' && $Project != 'undefined' )
			{  
				include ($Project.'.php'); 
			}
			else
			{
				echo ' 
				<img src="/Images/My_Portfolio.png" alt="My Portfolio" />
				<div id="Portfolio_Wrapper">
					<div id="Csharp" class="roundCorners">
						<h1>C# Projects</h1>
						<a href="Portfolio.php?Project=Auto_Programs">
							<img src="/Images/Auto_Programs.png" alt="Auto Move Files and Auto VPN" />
						</a>
						<a href="Portfolio.php?Project=WatchME_JamieDLL">
							<img src="/Images/WatchME_JamieDLL.png" alt="WatchME and JamieDLL" />
						</a>
					</div>
					<div id="WebSites" class="roundCorners">
						<h1>WebSites</h1>
						<a href="Portfolio.php?Project=Peavey2787">
							<img src="/Images/Peavey2787.png" alt="Peavey2787 Jamie\'s Personal Blog Website" />
						</a>
						<a href="Portfolio.php?Project=This_Website">
							<img src="/Images/This_Website.png" alt="This Website" />
						</a>
					</div>
					<a href="Portfolio.php?Project=Cplusplus_School_Projects">
						<img src="/Images/Cplusplus_School_Projects.png" alt="Cplusplus School Projects" />
					</a>
					<a href="/Dice.php">
						<img src="/Images/GameMaker_Studio.png" alt="GameMaker Studio" />
					</a>
				</div><!-- End Portfolio Wrapper -->';
			}
		?>
	</div><!-- End Wrapper -->
	<?php include $_SERVER['DOCUMENT_ROOT'].'/footer.php'; ?>
</body>
</html>