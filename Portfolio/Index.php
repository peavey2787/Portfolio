<!DOCTYPE html>
<html lang="en">
<head>
<?php
	$root = $_SERVER['DOCUMENT_ROOT'];
	$Page = htmlspecialchars($_GET['Page']); 
	if($Page != 'About' && $Page != 'CoverLetter' && $Page != 'CoverSheet')
	{
		$Page = 'CoverSheet'; 
	}
?> 
	<title>Home Page</title>
	<meta charset="utf-8" />
	<meta name="description" content="Jamie Horton\'s Portfolio">
	<meta name="keywords" content="jamie horton\'s portfolio,jamie horton portfolio,jamie horton,Jamie Horton\'s Personal web site,Jamie Horton\'s website,Jamie Horton\'s Web Site,Jamie Horton\'s Portfolio, Jamie Horton\'s Portfolio Page, Jamie Horton\'s Resume">
	<meta name="author" content="Jamie Horton">
	<meta name="copyright" content="Jamie Horton 2015"> 	

	<link href="/Desktop_Template.css" rel="stylesheet" />
</head>

<body> 
	<div id="Full_Screen_Wrapper" class="center">
		<?php include $root.'/navigation.php'; ?>
		<ul id="Home_Navigation">
			<?php
				if($Page == "CoverSheet")
				{
					echo '<li id="CoverSheet" class="home_Selected"><a href="Index.php?Page=CoverSheet">Cover Sheet</a></li>';
				}
				else
				{
					echo '<li id="CoverSheet"><a href="Index.php?Page=CoverSheet">Cover Sheet</a></li>';
				}
				if($Page == "CoverLetter")
				{
					echo '<li id="CoverLetter" class="home_Selected"><a href="Index.php?Page=CoverLetter">Cover Letter</a></li>';
				}
				else
				{
					echo '<li id="CoverLetter"><a href="Index.php?Page=CoverLetter">Cover Letter</a></li>';
				}
				if($Page == "About")
				{
					echo '<li id="About" class="home_Selected"><a href="Index.php?Page=About">About Me</a></li>';
				}
				else
				{
					echo '<li id="About"><a href="Index.php?Page=About">About Me</a></li>';
				}
			?>
		</ul>


		<?php  
				echo "<section>"; 
						include ($root.'/Home/'.$Page.'.php'); 
				echo "</section>"; 
		?>
				 
	</div><!-- End Full Screen Wrapper --> 
	<?php include $root.'/footer.php'; ?>
</body>
</html>