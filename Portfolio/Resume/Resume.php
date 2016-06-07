<!DOCTYPE html>
<html>
<head>
<?php
    $Page = htmlspecialchars($_GET['Page']);
	
	if($Page != 'About_Me')
	{
		// Replace '_' with a space
		$Clean = str_replace('_',' ',$Page);
		echo '<title>Description of ' . $Clean . '</title>
		<meta charset="utf-8" />
		<meta name="description" content="Jamie Horton ' . $Clean . '">
		<meta name="keywords" content="jamie horton ' . $Clean . ',jamie horton,Jamie Horton\'s Personal web site,Jamie Horton\'s website,Jamie Horton\'s Web Site,Jamie Horton\'s Portfolio, Jamie Horton\'s Portfolio Page, Jamie Horton\'s Resume">
		<meta name="author" content="Jamie Horton">
		<meta name="copyright" content="Jamie Horton 2015">';
	}
	else
	{
		echo '<title>My Resume</title>
		<meta charset="utf-8" />
		<meta name="description" content="Jamie Horton\'s Resume">
		<meta name="keywords" content="jamie horton\'s resume,jamie horton resume,jamie horton,Jamie Horton\'s Personal web site,Jamie Horton\'s website,Jamie Horton\'s Web Site,Jamie Horton\'s Portfolio, Jamie Horton\'s Portfolio Page, Jamie Horton\'s Resume">
		<meta name="author" content="Jamie Horton">
		<meta name="copyright" content="Jamie Horton 2015">';  
	}
?>
	<link href="/Desktop_Template.css" rel="stylesheet" />
</head>
<body class="center">
    <div id="Full_Screen_Wrapper" class="center">
	<?php include $_SERVER['DOCUMENT_ROOT'].'/navigation.php'; ?>

		<div id="Resume_Wrapper">
			<?php 
				$About_Me = "button";
				$Education = "button";
				$Skills = "button";
				$Work_History = "button";
				
				if($Page == "About_Me")
				{
					$About_Me = "button_Selected";
				}
				else if($Page == "Education")
				{
					$Education = "button_Selected";
				}
				else if($Page == "Skills")
				{
					$Skills = "button_Selected";
				}
				else if($Page == "Work_History")
				{
					$Work_History = "button_Selected";
				}
			echo '
			<div id="Left_Side_Bar">  
				<img id="My_Stats" class="roundCorners" src="/Images/MyStats.png" alt="My Stats" />               
			    
					<a class="' . $About_Me . '" href="/Resume/Resume.php?Page=About_Me"> 
						<img src="/Images/icon_About_Me.png" alt="About Me" />
						<p>About Me&nbsp;&nbsp;&nbsp;</p>
					</a>   
					<a class="' . $Education . '" href="/Resume/Resume.php?Page=Education"> 
						<img src="/Images/icon_Education.png" alt="Education" />
						<p>Education&nbsp;&nbsp;&nbsp;</p>
					</a>  
					<a class="' . $Skills . '" href="/Resume/Resume.php?Page=Skills"> 
						<img src="/Images/icon_Skills.png" alt="Skills" />
						<p>My Skills&nbsp;&nbsp;&nbsp;</p>
					</a>  
					<a class="' . $Work_History . '" href="/Resume/Resume.php?Page=Work_History"> 
						<img src="/Images/icon_Work_History.png" alt="Work History" />
						<p>Work History &nbsp;&nbsp;&nbsp;</p>
					</a> 
			</div><!-- End Left Side Bar -->';
					
        
            
			if($Page != 'About_Me')
			{ 
				include ($Page.'.php'); 
			}
			else
			{
				echo '<div id="About_Me_Content" class="roundCorners">  
						<h1>Objective</h1>
						<p>To utilize my education in order to secure a position in the information technology field.</p>
							   
						<img class="Horizontal_Separator" src="/Images/Horizontal_Separator.png" alt="Horizontal Separator" />
								
						<h1>Introduction</h1>
						<p>Hello, and thank you for taking the time to review my resume. I am a full time student and currently work from home as an independent contractor for an agency doing crowdsource work such as UX testing, web search result analyzing, and error reporting. I am a jack of all trades when it comes to computers, from hardware to software. I have a great work ethic, I\'m always punctual, and I take pride in every job I do no matter how small.
							<br /> <br />
							• Passion for Learning New Technologies
							<br />
							• Perpetual Student of Programming Standards/Best Practices
							<br />
							• Superb Work Ethic
							<br />
							• Extremely Detail Oriented
						</p>

						<img class="Horizontal_Separator" src="/Images/Horizontal_Separator.png" alt="Horizontal Separator" />
								
						<h1>Target Audience</h1>
						<p>Anyone looking to hire an IT professional. This could include a major corporation with a job opening for Programming/Desgining/IT administration down to someone just looking for a personal website or tech support.</p>	
					  </div><!-- End About Me Content -->';				
			}
			echo '</div><!-- End Resume Wrapper -->';
        ?>
    </div><!-- End Wrapper -->
	<?php include $_SERVER['DOCUMENT_ROOT'].'/footer.php'; ?>
</body>
</html>
