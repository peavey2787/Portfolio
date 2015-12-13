<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">   
        <title>About Me</title>
        <meta name="description" content="Jamie Horton's Portfolio and Resume website, including a short autobiography.">
        <meta name="keywords" content="Jamie Horton's Personal web site,Jamie Horton's website,Jamie Horton's Web Site,Jamie Horton's Portfolio, Jamie Horton's Portfolio Page, Jamie Horton's Resume'">
        <meta name="author" content="Jamie Horton">
        <meta name="copyright" content="Jamie Horton 2015">     
         
        <!-- Load Proper CSS Template File-->
        <script src="Scripts/Load_CSS_Template.js"></script> 
		<script>Start(0);</script>
</head>
<body class="center">
	<div id="Full_Screen_Wrapper" class="center">
        <?php include $_SERVER['DOCUMENT_ROOT'].'/Navigation.php'; ?>


        <img id="Jamie_Loves_Computers" src="./Images/ByMe_Jamie_Loves_Computers.png" alt="Jamie Horton Loves Computers" />
        <img id="For_Hire" src="./Images/For_Hire.png" alt="Jamie Horton For Hire" />  
		
		<div id="flash_CTA_Contact_Me">
			<object type="application/x-shockwave-flash" data="Flash/My_Greeting.swf" width="300" height="325" id="My_Greeting" style="float: none; vertical-align:middle">
			<param name="movie" value="My_Greeting.swf" />
			<param name="quality" value="high" />
			<param name="bgcolor" value="#ffffff" />
			<param name="play" value="true" />
			<param name="loop" value="true" />
			<param name="wmode" value="window" />
			<param name="scale" value="showall" />
			<param name="menu" value="true" />
			<param name="devicefont" value="false" />
			<param name="salign" value="" />
			<param name="allowScriptAccess" value="sameDomain" /> 
			<!-- Show image if user doesn't have flash -->
			<img id="image_CTA_Contact_Me" src="./Images/ByMe_Me.png" alt="Greetings" />
			<a href="Contact_Me.cshtml">
				<div id="CTA_Contact_Me"></div>
			</a> 
			</object>
		</div>
        <div id="About_Me">
            <h1>About Me</h1>
            <p>Hello, my name is Jamie. I live in Wichita Falls, Texas, but I’m originally from Indiana. I was tired of the cold and the economy is better in Texas. My work history consists of primarily labor intensive production jobs, but I currently work at home doing Crowdsource work such as web search results analysis. Although I have hardly any IT work related experience, I fell in love with computers when my father gave me my first one at the age of 6. It had a giant monitor that displayed only green text and no mouse. Ever since I have taken all the computer programming and HTML classes I could in High School. Along with several college classes at South University. In fact, I already have my associate’s degree in Computer Science-Information Technology, and I am only a few months away from obtaining my Bachelors of Science in the same area.
            <br /> <br />
            My strongest soft skill is my creativity and resourcefulness. I enjoy getting the most out of what I have to work with, anywhere from overclocking hardware to recycling cardboard boxes as tables. I find creative solutions to problems others wouldn’t think of. My strongest hard skill is my proficiency in C#, as it is the primary language I use to create applications.</p>
        </div> 
    </div><!-- End Wrapper -->
</body>
</html>