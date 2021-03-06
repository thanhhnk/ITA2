<?php 
    session_start();
    include 'includes/common.inc.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>ISDN website</title>
            <meta name="homepage" content="An interactive guide for events in NL for students.">
            <link href="templates/css/style.css" type="text/css" rel="stylesheet"/>
            <script src = "js/jquery/jquery-2.1.4.min.js" type="text/javascript"/></script>
            <script src="js/jquery/jquery-2.1.4.js" type="text/javascript"></script>
            <script type="text/javascript" src="js/script/Script.js">
            </script> 
            <link rel="stylesheet" 
                href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
            <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
            <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js'></script>
            <script src="library/modernizr.js" type="text/javascript"></script>
        </head>
    <body>
        <div id="mainContainer">
            <?php
                displayHeaderIndex();
            ?>
            <div id="container">
                <?php include 'view/home.php'?>
            </div>
            
            <?php
                displayFooter();
            ?>
        </div><!--end div#mainContainer!-->
        
    </body>
</html>
