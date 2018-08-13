<!DOCTYPE html>

<?php
    // Standard Include
    require $_SERVER["DOCUMENT_ROOT"] . '/../resources/config.php';
?>

<html>
    <head>
        <?php generate_head("Cheese Map"); ?>
    </head>
    <body id="map">
        <!-- Navigation -->
        <?php generate_navigation(); ?>
        <!-- Content -->
        <div class="rkmap-container">
            <?php
            $map_to_show = 0;
            if (isset($_GET['map'])) {
                $map_to_show = $_GET['map'];
            }

            // IDs
            // 0 - World
            // 1 - North America
            // 2 - Central America
            // 3 - South America
            // 4 - Europe
            // 5 - Middle East/North Africa
            // 6 - Africa
            // 7 - Asia
            // 8 - Oceania

            switch ($map_to_show) {
                default:
                case 0:
                    include 'map/world.php';
                    break;
                case 1:
                    include 'map/na.php';
                    break;
                case 2:
                    include 'map/ca.php';
                    break;
                case 3:
                    include 'map/sa.php';
                    break;
                case 4:
                    include 'map/eu.php';
                    break;
                case 5:
                    include 'map/me.php';
                    break;
                case 6:
                    include 'map/af.php';
                    break;
                case 7:
                    include 'map/as.php';
                    break;
                case 8:
                    include 'map/oc.php';
                    break;
            }
            
            ?>
        </div>
    </body>
</html>