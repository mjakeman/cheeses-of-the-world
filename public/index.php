<!DOCTYPE html>

<?php
    // Standard Include
    require $_SERVER["DOCUMENT_ROOT"] . '/../resources/config.php';
?>

<html>
    <head>
        <?php generate_head("Home"); ?>
    </head>
    <body>
        <!-- PHP Checker -->
        <?php
        // This is a small hack to detect if PHP is currently able to
        // execute on the web server. When a web browser parses this
        // document without PHP, it will ignore the comment start and
        // end characters, and display the following HTML code, which
        // is designed to take up the entire viewport. If PHP is installed,
        // then the following code will be ignored and the page will
        // display as intended.

        /*

        <!-- Sacrificial Element (Ignored By Parser) -->
        <div></div>

        <!-- Error Page Stylesheet -->
        <link rel="stylesheet" type="text/css" href="css/error-page.css">

        <!-- Error Page HTML -->
        <div class='error-splash'>
            <div class='error-container'>
                <h2>Oops! PHP is not enabled.</h2>
                <p>This website requires a PHP7 and MySQL capable web server to operate. It has been
                tested with the following configurations:</p>
                <ul>
                    <li><a href="https://www.apachefriends.org/index.html">XAMPP for Windows - 7.2.4</a></li>
                    <li><a href="http://www.wampserver.com/en/">WampServer - 3.0.6</a></li>
                </ul>
                <br>
                <p>Still not working?</p>
                <ul>
                    <li><p>Are you accessing the website through <a href="http://localhost/">http://localhost/</a>?</p></li>
                    <li><p>Can you access the default dashboard of your web server?</p></li>
                </ul>
                <p>For more information, please read the accompanying documentation.</p>
            </div>
        </div>
        */
        ?>

        <!-- Splash/Landing -->
		<div class="splash-container">
			<div class="splash-overlay">
				<img src="../img/logo_white.png">
				<a class="splash-explore" href="map.php"><span>Explore</span></a>
			</div>
		</div>

        <!-- Navigation -->
        <?php generate_navigation(); ?>
        <!-- Content -->
        <!-- Footer -->
    </body>
</html>