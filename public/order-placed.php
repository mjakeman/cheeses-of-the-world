<!DOCTYPE html>

<?php
    // Standard Include
    require $_SERVER["DOCUMENT_ROOT"] . '/../resources/config.php';
?>

<html>
    <head>
        <?php generate_head("Order Placed"); ?>
    </head>
    <body>
        <!-- Navigation -->
        <?php generate_navigation(); ?>

        <!-- Content -->
        <main>
            <section>
                <h1 class="section-header">Order Placed</h1>
                <p class="order-message"><b>Thank You</b> for purchasing from Cheeses of the World. We appreciate your custom and hope you find our artisinal cheeses satisfactory. If you have any concerns, please do not hesitate to contact our team at <a href="mailto:support@cheese.com">support@cheese.com</a>. Please click <a href="index.php">here</a> to return to the home page.</p>
            </section>
        </main>

        <!-- Footer -->
        <?php generate_footer(); ?>
    </body>
</html>