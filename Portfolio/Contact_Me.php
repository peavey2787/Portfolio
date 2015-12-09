<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <title>Contact Me</title>
    <meta name="description" content="Contact Jamie Horton to discuss an employment offer, ask a question, leave a comment, or volunteer work.">
    <meta name="keywords" content="contact jamie horton,Jamie Horton's Personal web site,Jamie Horton's website,Jamie Horton's Web Site,Jamie Horton's Portfolio, Jamie Horton's Portfolio Page, Jamie Horton's Resume'">
    <meta name="author" content="Jamie Horton">
    <meta name="copyright" content="Jamie Horton 2015">  

    <!-- Load Proper CSS Template File-->
    <script src="./Scripts/Load_CSS_Template.js"></script>
</head>
<body>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/Navigation.php'; ?>

    <div id="Contact_Me">
        <?php
        $ShowForm = true;

        if(isset($_POST["submit"]) && !empty($_POST["submit"]))
        {
            $ShowForm = false;

            // Remove all illegal chars from email
            $_POST["eMail"] = filter_var($_POST["eMail"], FILTER_SANITIZE_EMAIL);

            // Validate form input
            if(empty($_POST["fName"]) || !ctype_alpha($_POST["fName"]))
            {
                $ShowForm = true;
                echo '<p class="error">You must enter a valid first name!</p>';
            }
            if(empty($_POST["lName"]) || !ctype_alpha($_POST["lName"]))
            {
                // Remove ' to allow names like O'Brian
                $name = str_replace("'","",$_POST["lName"]);

                // Make sure that was the only thing wrong
                if(!ctype_alpha($name))
                {
                    $ShowForm = true;
                    echo '<p class="error">You must enter a valid last name!</p>';
                }
            }
            if(empty($_POST["eMail"]) || !ctype_alpha($_POST["eMail"]))
            {
                $ShowForm = true;
                echo '<p class="error">You must enter a valid Email address!</p>';
            }
            if(empty($_POST["qComment"]) || !ctype_alpha($_POST["qComment"]))
            {
                $ShowForm = true;
                echo '<p class="error">You must enter a question/comment!</p>';
            }

            // If the form is valid send the email
            if(!$ShowForm)
            {
                $message = 'Name: ' . $_POST["fName"] . ' ' . $_POST["lName"] . '<br>';
                $message = message . 'Email: ' . $_POST["eMail"] . '<br>';
                $message = message . 'Question/Comment: ' . $_POST["qComment"];
                $message = wordwrap($message, 70);
                $header = 'From: webmaster@JamieHorton.azurewebsites.net' . '\r\n' . 'Content-type: text/html; charset="UTF-8"; format=flowed \r\n' . 'Reply-To: webmaster@JamieHorton.azurewebsites.net' . '\r\n' . 'X-Mailer: PHP/' . phpversion();
                mail("peavey2787@yahoo.com", "Question/Comment from Portfolio site",$message, $header);
                echo '<h1>Message Successfully sent! I will respond as soon as possible.</h1>';
            }

        } // Is post

        if ($ShowForm)
        {
            echo '<h1>Contact Me</h1>
            <p>Have a question/comment? Please let me know by filling out the form below.</p>
	    <div id="Contact_Form">
            <form name="Contact" method="post" action="">
                <p>First Name:</p>
                <input name="fName" type="text" value="' . $_POST[" fName"].'">

                <p>Last Name:</p>
                <input name="lName" type="text" value="' . $_POST[" lName"].'">
                <p>Email:</p>
                <input name="eMail" type="text" value="' . $_POST[" eMail"].'">
                <p>Question/Comment:</p>
                <textarea name="qComment" rows="8" cols="30">' . $_POST["qComment"].' </textarea>
                <p><input type="submit" name="submit" value="Send"></p>
            </form>
	    </div>';
        }
        ?>
    </div>
</body>
</html>
