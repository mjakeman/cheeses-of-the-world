<!DOCTYPE html>

<?php
    // Standard Include
    require $_SERVER["DOCUMENT_ROOT"] . '/../resources/config.php';
?>

<html>
    <head>
        <?php generate_head("Submission Recieved"); ?>
    </head>
    <body>
        <!-- Navigation -->
        <?php generate_navigation(); ?>

        <!-- Content -->
        <main>
            <section>
                <h1 class="section-header">We'll Get Back to You</h1>
                <p class="order-message"><b>Thank You</b> for your interest in our products. We're very busy at the moment making the best cheeses we possibly can, so it might be a while before we can get back to you. You should recieve a reply within 7 working days. If you have any concerns, please do not hesitate to contact our team at <a href="mailto:support@cheese.com">support@cheese.com</a>. Please click <a href="index.php">here</a> to return to the home page.</p>
            </section>
        </main>

        <!-- Footer -->
        <?php generate_footer(); ?>
    </body>
</html>