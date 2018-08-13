<!DOCTYPE html>

<?php
    // Standard Include
    require $_SERVER["DOCUMENT_ROOT"] . '/../resources/config.php';
?>

<html>
    <head>
        <?php generate_head("About"); ?>
    </head>
    <body>
        <!-- Navigation -->
        <?php generate_navigation(); ?>

        <!-- Content -->
        <main>
            <section>
                <div class="hero about-hero">
                    <div class="hero-overlay about-hero-overlay">
                        <h1>Our Mission</h1>
                        <p>Three wheels for the French; valued and prized,</p>
                        <p>Seven for the Swiss, who love Bloomy Rind,</p>
                        <p>Nine for the Britons, their cheese unpasteurised,</p>
                        <p>None for the heretics, ignorant and blind.</p>
                        <br>
                        <p>One Cheese to rule them all, One Cheese to find them,</p>
                        <p>One Cheese to bring them all, into the light which binds them.</p></p>
                        <br>
                        <p>&mdash; J. R. R. Tolkien*</p>
                        <p><span>*(probably)</span></p>
                    </div>
                </div>
            </section>
            <section class="coverage">
                <h2>As Seen On</h2>
                <div>
                    <img src="img/CNN.svg" alt="Cheese News Network">
                    <img src="img/NYT.svg" alt="New York Turophiles">
                    <img src="img/NBC.svg" alt="Nutty Blue Cheese">
                </div>
            </section>
            <section>
                <h1 class="section-header">Our History</h1>
                <div class="newspaper">
                    <h2>About Us</h2>
                    <p>Cheeses of the World is an universally acclaimed Artisinal Cheese House dedicated to crafting the world's best cheeses. Founded during the Golden Age of Piracy, we have continued to push the limits of Cheesemaking in our quest to create the 'One Cheese' - A cheese so powerful that it eclipses the sun.</p>
                    <br>

                    <h2>Humble Beginnings</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit ultricies quam egestas, est ornare montes tempus ridiculus nascetur odio id neque orci dictumst, tortor sollicitudin blandit nibh nam porttitor habitant nullam ac. Eget sem pulvinar euismod lectus venenatis habitasse nam habitant gravida erat, eu justo.</p>
                    <br>

                    <h3>Baby Steps</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit ultricies quam egestas, est ornare montes tempus ridiculus nascetur odio id neque orci dictumst.</p>
                    <img src="img/splash.jpg">
                    <br>            

                    <h2>Picking Up Speed</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit ultricies quam egestas, est ornare montes tempus ridiculus nascetur odio id neque orci dictumst, tortor sollicitudin blandit nibh nam porttitor habitant nullam ac. Eget sem pulvinar euismod lectus venenatis habitasse nam habitant gravida erat, eu justo magnis scelerisque semper orci nisl natoque accumsan class, imperdiet aliquam varius arcu dis consequat nunc tempor dapibus. Cras blandit habitant ad pharetra velit euismod ullamcorper nullam, duis id massa hendrerit eros magnis fusce sodales, platea condimentum tempor mi sagittis parturient mattis.</p><p>Netus quis fringilla molestie magnis eros aliquam vehicula rhoncus potenti accumsan, lobortis eget euismod gravida porttitor feugiat interdum mattis purus sodales cum, dui aenean leo mollis vitae neque enim libero vivamus. Tincidunt volutpat dictumst facilisi quis tempor scelerisque inceptos, id proin dapibus tristique fusce dis tempus laoreet, neque phasellus leo est semper feugiat. Sem fames gravida vulputate rutrum potenti semper fusce id condimentum, vel dapibus curae libero pretium turpis tincidunt eu, fermentum ut inceptos ultrices phasellus elementum tortor mauris.</p>
                    <br>

                    <h2>World Domination</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit ultricies quam egestas, est ornare montes tempus ridiculus nascetur odio id neque orci dictumst, tortor sollicitudin blandit nibh nam porttitor habitant nullam ac. Eget sem pulvinar euismod lectus venenatis habitasse nam habitant gravida erat, eu justo magnis scelerisque semper orci nisl natoque accumsan class, imperdiet aliquam varius arcu dis consequat nunc tempor dapibus. Cras blandit habitant ad pharetra velit euismod ullamcorper nullam, duis id massa hendrerit eros magnis fusce sodales, platea condimentum tempor mi sagittis parturient mattis.</p>
                    <br>

                    <h2>The Future</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit ultricies quam egestas, est ornare montes tempus ridiculus nascetur odio id neque orci dictumst, tortor sollicitudin blandit nibh nam porttitor habitant nullam ac. Eget sem pulvinar euismod lectus venenatis habitasse nam habitant gravida erat, eu justo magnis scelerisque semper orci nisl natoque accumsan class, imperdiet aliquam varius arcu dis consequat nunc tempor dapibus. Cras blandit habitant ad pharetra velit euismod ullamcorper nullam, duis id massa hendrerit eros magnis fusce sodales, platea condimentum tempor mi sagittis parturient mattis.</p><p>Netus quis fringilla molestie magnis eros aliquam vehicula rhoncus potenti accumsan, lobortis eget euismod gravida porttitor feugiat interdum mattis purus sodales cum, dui aenean leo mollis vitae neque enim libero vivamus. Tincidunt volutpat dictumst facilisi quis tempor scelerisque inceptos, id proin dapibus tristique fusce dis tempus laoreet, neque phasellus leo est semper feugiat. Sem fames gravida vulputate rutrum potenti semper fusce id condimentum, vel dapibus curae libero pretium turpis tincidunt eu, fermentum ut inceptos ultrices phasellus elementum tortor mauris.</p>
                </div>
            </section>
            <section>
                <h1 class="section-header">Contact Us</h1>
                <div class="contact-container">
                    <div class="contact-left">
                        <form action="submit.php">
                            <label for="name">Name*</label><br>
                            <input id="name" required placeholder="Name" type="text"><br>

                            <label for="email">Email*</label><br>
                            <input id="email" required placeholder="Email" type="text"><br>

                            <label for="contents">Subject*</label><br>
                            <textarea required placeholder="I'd like to purchase three hundred and forty seven wheels of cheese please..." id="contents"></textarea><br>

                            <p>*Required</p>

                            <input class="btn-submit" type="submit" value="Send!">
                        </form>
                    </div>
                    <div class="contact-right">
                        <p class="info location">10 Downing Street,<br>London SW1A 2AA</p>
                        <p class="info phone">0800 03 03 03</p>
                        <p class="info email"><a href="mailto:contact@cheese.com">contact@cheese.com</a></p>
                        <p class="contact-description">Located in Bright, Sunny, and Warm London, our headquarters boasts a large selection of cheeses for your browsing pleasure. If you are in the area, please do not hesitate to stop by and say hello!</p>
                    </div>
                </div>
            </section>
        </main>

        <!-- Footer -->
        <?php generate_footer(); ?>
    </body>
</html>