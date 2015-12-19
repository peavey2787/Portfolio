<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Generated by GameMaker:Studio http://www.yoyogames.com/gamemaker/studio -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta http-equiv="pragma" content="no-cache"/>
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name ="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
        <meta charset="utf-8"/>

        <!-- Set the title bar of the page -->
        <title>Dice Score Keeper</title>
		<link href="/Desktop_Template.css" rel="stylesheet"></link>
        <!-- Set the background colour of the document -->
        <style>
            body {
              background-color: lightgrey; 
              margin: 0px;
              padding: 0px;
              border: 0px;
            }
			#Dice_Wrapper
            {
                   margin: 20px auto;
                   width: 640px;
            }
			#Dice_Wrapper h1
            { 
                 text-align: center;
            }
            canvas {
                      image-rendering: optimizeSpeed;
                      -webkit-interpolation-mode: nearest-neighbor;
                      -ms-touch-action: none;
                      margin: 0px;
                      padding: 0px;
                      border: 0px;
            }
            :-webkit-full-screen #canvas {
                 width: 100%;
                 height: 100%;
            }
            div.gm4html5_div_class
            {
              margin: 0px;
              padding: 0px;
              border: 0px;
            }
            /* START - Login Dialog Box */
            div.gm4html5_login
            {
                 padding: 20px;
                 position: absolute;
                 border: solid 2px #000000;
                 background-color: #404040;
                 color:#00ff00;
                 border-radius: 15px;
                 box-shadow: #101010 20px 20px 40px;
            }
            div.gm4html5_cancel_button
            {
                 float: right;
            }
            div.gm4html5_login_button
            {
                 float: left;
            }
            div.gm4html5_login_header
            {
                 text-align: center;
            }
            /* END - Login Dialog Box */
            :-webkit-full-screen {
               width: 100%;
               height: 100%;
            }
        </style>
    </head>

    <body>
		<?php include $_SERVER['DOCUMENT_ROOT'].'/navigation.php'; ?>
		<div id="Dice_Wrapper">
			<h1>Dice (10,000) Score Keeper</h1>
			<div class="gm4html5_div_class" id="gm4html5_div_id">
				<!-- Create the canvas element the game draws to -->
				<canvas id="canvas" width="640" height="480">
				   <p>Your browser doesn't support HTML5 canvas.</p>
				</canvas>
			</div>
			<p> 
				<b>Description: </b>A simple application that will keep score for the classic game of Dice (10,000). I could never seem to find a pen and paper when I needed one so I created this app primarily for my Android phone.
			</p>
			<p><b>Android APK: </b><a href="/Dice/Dice.apk">Download Dice.APK</a></p>
		</div>
        <!-- Run the game code -->
        <script type="text/javascript" src="/Dice/dice.js?ZHGZB=1795660973"></script>
		
		<div id="Page_Nation">
			<a href="/Portfolio/Portfolio.php?Project=Cplusplus_School_Projects"><img src="/Images/Back.png" alt="Back"></a> 
		</div>
		<?php include $_SERVER['DOCUMENT_ROOT'].'/footer.php'; ?>
    </body>
</html>
