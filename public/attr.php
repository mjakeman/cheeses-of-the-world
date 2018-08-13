<!DOCTYPE html>

<?php
    // Standard Include
    require $_SERVER["DOCUMENT_ROOT"] . '/../resources/config.php';

    // Helper
    function gen_attr_tr($name, $src, $url, $license) {
        echo '<tr>';
        echo "<td>$name</td>";
        echo "<td><a href='$url'>$src</a></td>";
        echo "<td>$license</td>";
        echo '</tr>';
    }
?>

<html>
    <head>
        <?php generate_head("Attribution and Copyright"); ?>
    </head>
    <body>
        <!-- Navigation -->
        <?php generate_navigation(); ?>

        <!-- Content -->
        <main>
            <section>
                <h1 class="section-header">Attribution and Copyright</h1>
                <table class="attr-table">
                    <tr>
                        <th>Resource</th>
                        <th>Source</th>
                        <th>License</th>
                    </tr>
                    <?php
                        gen_attr_tr('Shop Brie Image', 'Myrabella/Wikimedia Commons', 'https://commons.wikimedia.org/wiki/File:Brie_noir.jpg', 'CC BY-SA 3.0');
                        gen_attr_tr('Shop Camembert Image', 'Nataraja/Wikimedia Commons', 'https://commons.wikimedia.org/wiki/File:Camembert_(Cheese).jpg', 'CC BY-SA 3.0');
                        gen_attr_tr('Shop Bleu de Gex Image', 'Myrabella/Wikimedia Commons', 'https://commons.wikimedia.org/wiki/File:Bleu_de_Gex.jpg', 'CC BY-SA 3.0');
                        gen_attr_tr('Shop Cheddar Image', 'Jon Sullivan/Wikimedia Commons', 'https://commons.wikimedia.org/wiki/File:Bandaged_Wrapped_Cheddar.jpg', 'Public Domain');
                        gen_attr_tr('Shop Stilton Image', 'Jon Sullivan/Wikimedia Commons', 'https://commons.wikimedia.org/wiki/File:Blue_Stilton_cheese.jpg', 'Public Domain');
                        gen_attr_tr('Shop Tyrolean Grey Image', 'RudolfSimon/Wikimedia Commons', 'https://commons.wikimedia.org/wiki/File:Tyrolean_grey_cheese_Loaf_Cut.jpg', 'CC BY-SA 3.0');
                        gen_attr_tr('Shop Feta Image', 'Dominik Hundhammer/Wikimedia Commons', 'https://commons.wikimedia.org/wiki/File:Feta_Greece_2.jpg', 'CC BY-SA 3.0');
                        gen_attr_tr('Shop Edam Image', 'Yvwv/Wikimedia Commons', 'https://commons.wikimedia.org/wiki/File:SmallEdamCheese.jpg', 'CC BY-SA 3.0');
                        gen_attr_tr('Shop Smoked Gruyere Image', 'Jon Sullivan/Wikimedia Commons', 'https://commons.wikimedia.org/wiki/File:Smoked_Gruy%C3%A8re_cheese.jpg', 'Public Domain');
                        gen_attr_tr('Shop Emmental Image', 'Coyau/Wikimedia Commons', 'https://commons.wikimedia.org/wiki/File:Emmental_(fromage)_01.jpg', 'CC BY-SA 3.0');

                        gen_attr_tr('Shop Halloumi Image', 'Rainer Zenz/Wikimedia Commons', 'https://commons.wikimedia.org/wiki/File:Halloumi-1.jpg', 'CC BY-SA 3.0');
                        gen_attr_tr('Shop Akawi Image', 'Yona Damari/Wikimedia Commons', 'https://commons.wikimedia.org/wiki/File:Akawi_Cheese.jpg', 'CC BY-SA 4.0');
                        gen_attr_tr('Shop Domiati Image', 'MartinKassemJ120/Wikimedia Commons', 'https://commons.wikimedia.org/wiki/File:Domiati_cheese.jpg', 'CC BY-SA 4.0');
                        gen_attr_tr('Shop Baladi Image', 'Jon Lebensold/Wikimedia Commons', 'https://commons.wikimedia.org/wiki/File:Baladi_Cheese,_Spinach,_Avocado_&_Zataar_(2806311953).jpg', 'CC BY-SA 2.0');
                        gen_attr_tr('Shop Sakura Image', 'ringoffirefly/Blogspot', 'https://ringofirefly.blogspot.com/2011/07/for-cheese-and-chilled-sakes-sake.html', 'Attribution');
                        gen_attr_tr('Shop Cheddar 2 Image', 'LearningLark/Wikimedia Commons', 'https://commons.wikimedia.org/wiki/File:Cheese_and_Pickle_Sandwich_Step_2_(8576753601).jpg', 'CC BY-SA 2.0');
                        gen_attr_tr('Shop Oka Image', 'Jon Sullivan/Wikimedia Commons', 'https://commons.wikimedia.org/wiki/File:Oka_cheese_2.jpg', 'Public Domain');
                        gen_attr_tr('Shop Monterey Jack Image', 'Frank Schulenburg/Wikimedia Commons', 'https://commons.wikimedia.org/wiki/File:Sonoma_Dry_Jack.jpg', 'CC BY-SA 3.0');
                        gen_attr_tr('Shop Cotija Image', 'Gourmetsleuth.com', 'https://www.gourmetsleuth.com/ingredients/detail/cotija-cheese', 'Attribution');
                        gen_attr_tr('Shop Queijo Branco Image', 'Geoff/Wikimedia Commons', 'https://commons.wikimedia.org/wiki/File:Queso_fresco.JPG', 'CC BY-SA 3.0');
                        gen_attr_tr('Shop Cremoso Image', 'DonFranciscoCheese', 'http://donfranciscocheese.com/wp-content/uploads/2016/07/Panel-720x406.jpg', 'Attribution');
                        gen_attr_tr('Shop Cheddar 3 Image', 'Matthew Jakeman (Myself)', '', 'N/A');
                        gen_attr_tr('Shop Wagasi Image', 'Pulaku Project (via Quora)', 'https://www.quora.com/What-are-some-of-the-best-African-cheeses?share=1', 'Attribution');

                        gen_attr_tr('Cheese Store', 'Jorge Royan/Wikimedia Commons', 'https://commons.wikimedia.org/wiki/File:Amsterdam_-_Cheese_store_-_1605.jpg', 'CC BY-SA 3.0');
                        gen_attr_tr('Kaspressknödel', 'SlartibErtfass der bertige/Wikimedia Commons', 'https://commons.wikimedia.org/wiki/File:Kaspressknoedelsuppe.JPG', 'CC BY-SA 3.0');
                        gen_attr_tr('Crackers and Cheese', 'Jordan Johnson/Wikimedia Commons', 'https://commons.wikimedia.org/wiki/File:Wine_&_Cheese_Platter.jpg', 'CC BY-SA 2.0');
                        gen_attr_tr('Macaroni and Cheese', 'Martin/Wikimedia Commons', 'https://commons.wikimedia.org/wiki/File:Baked_macaroni_and_cheese_1.jpg', 'CC BY-SA 2.0');
                        
                        gen_attr_tr('World Map', 'CIA World Factbook/Wikimedia Commons', 'https://commons.wikimedia.org/wiki/File:Political_map_of_the_World_(January_2015).svg', 'Public Domain');

                        gen_attr_tr('Icons', 'Firefox Design', 'https://github.com/FirefoxUX/icons', 'Mozilla Public License');
                        gen_attr_tr('Recipe 1', 'Wikibooks', 'https://en.wikibooks.org/wiki/Cookbook:Macaroni_%26_Cheese_(Baked)', 'CC BY-SA 2.0');
                        gen_attr_tr('Recipe 2', 'Wikibooks', 'https://en.wikibooks.org/wiki/Cookbook:Cheese_Dumplings', 'CC BY-SA 2.0');
                    ?>
                </table>
            </section>
        </main>

        <!-- Footer -->
        <?php generate_footer(); ?>
    </body>
</html>