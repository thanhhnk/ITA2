
<header>
    <div id="leftLogo">
        <a href="<?php echo $config ["paths"]["home"]["FromIndex"]?>"><img id="logo" 
            src="<?php
                echo $config["paths"]["images"]["FromIndex"]."/logo.png";
            ?>" alt="ISNL">
        </a>
    </div>
    <?php
            include 'mainMenu.php';
    ?>
    <div id="Login">
        <div>
            <a id="btnLogin" href="webpage/privatePages/signIn.php">Login
            </a>
             <a id="btnSignUp">Sign up</a>
        </div>
    </div>
</header>  

