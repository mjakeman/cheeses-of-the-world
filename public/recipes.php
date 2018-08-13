<!DOCTYPE html>

<?php
    // Standard Include
    require $_SERVER["DOCUMENT_ROOT"] . '/../resources/config.php';
?>

<html>
    <head>
        <?php generate_head("Recipes"); ?>
    </head>
    <body>
        <!-- Navigation -->
        <?php generate_navigation(); ?>

        <!-- Content -->
        <main>
            <section>
                <div class="hero recipes-hero">
                    <div class="hero-overlay recipes-hero-overlay">
                        <h1>Recipes</h1>
                        <p>A curated collection of some scrumptious and satisfying recipes</p>
                        <p>we've gathered over the years, guaranteed to blow your mind </p>
                        <p>(and your taste buds) well into next week. </p>
                        <br>
                        <p>These recipes are designed to use some of our own high quality</p>
                        <p>artisinal cheeses, however they do not require any special cheeses</p>
                        <p>to make.</p>
                        <br>
                        <p>And remember &mdash; Cheese makes everything better.</p>
                        <p>Trust Us, We Know</p>
                    </div>
                </div>
            </section>
            <section class="recipe-section">
                <article id="recipe-1">
                    <div class="recipe-content">
                        <h2>Baked Macaroni & Cheese</h2>
                        <h4>Ingredients</h4>
                        <ul class="multi">
                            <li>225g Elbow Macaroni</li>
                            <li>3 Tbsp Butter</li>
                            <li>3 Tbsp Flour</li>
                            <li>1 Tbsp Powdered Mustard</li>
                            <li>3 c milk</li>
                            <li>1 Red Onion, Finely Chopped</li>
                            <li>2 tsp Tabasco Sauce</li>
                            <li>1 Bay Leaf</li>
                            <li>1/2 tsp Paprika</li>
                            <li>1 Large Egg</li>
                            <li><a href="item.php?cheese_id='1'">340g Sharp Cheddar, Shredded</a></li>
                            <li>1 tsp Salt</li>
                            <li>Fresh Black Pepper</li>
                        </ul>
                        <br>
                        <h4>Instructions</h4>
                        <ol>
                            <li>Preheat oven to 350 degrees F.</li>
                            <li>In a large pot of boiling, salted water cook the pasta until it is al dente.</li>
                            <li>While the pasta is cooking, melt the butter in a separate pot.</li>
                            <li>Whisk in the flour and mustard and keep it moving for about five minutes. Make sure it is free of lumps.</li>
                            <li>Stir in the milk, onion, bay leaf, and paprika. Simmer for ten minutes and remove the bay leaf.</li>
                            <li>Temper in the egg.</li>
                            <li>Stir in 3/4 of the cheese.</li>
                            <li>Season with salt and pepper.</li>
                            <li>Fold the macaroni into the mix and pour into a 2-quart casserole dish.</li>
                            <li>Top with remaining cheese.</li>
                            <li>Melt the butter in a sauté pan and toss the bread crumbs to coat.</li>
                            <li>Top the macaroni with the bread crumbs.</li>
                            <li>Bake for 30 minutes.</li>
                            <li>Remove from oven and rest for 10 minutes before serving.</li>
                        </ul>
                    </div>
                    <div class="recipe-image"></div>
                </article>
                <article id="recipe-2">
                    <div class="recipe-image"></div>
                    <div class="recipe-content">
                    <h2>Kaspressknödel (Cheese Dumplings)</h2>
                        <h4>Ingredients</h4>
                        <ul class="multi">
                            <li>250g White Bread, Finely Diced, No Crust</li>
                            <li>250ml Milk</li>
                            <li>2-3 Eggs</li>
                            <li><a href="item.php?cheese_id=6">250g Grated Tyrolean Grey Cheese</a></li>
                            <li>50g Butter</li>
                            <li>1 Onion</li>
                            <li>Salt, Pepper, Parsely, Caraway Seeds</li>
                            <li>Flour</li>
                        </ul>
                        <br>
                        <h4>Instructions</h4>
                        <ol>
                            <li>Mix the eggs with the milk.</li>
                            <li>Soak the white bread in the mixture.</li>
                            <li>Knead the mixture and let it rest. Brown the thinly sliced onions with butter in a pan.</li>
                            <li>Add the onions, salt, pepper, parsely, caraway, and grated cheese to the white bread mixture.</li>
                            <li>Add the flour and let the mixture rest for a further 10 minutes.</li>
                            <li>Form dumplings that are approximately the size of a golf ball, then press flat (2-3cm thick). Forming them is easiest with slightly wet hands.</li>
                            <li>Heat some butter or oil in a pan and put int he pressed cheese dumplings.</li>
                            <li>Cook them on one side and then flip, until both sides are golden brown.</li>
                            <li>Place the dumplings on a paper towel to absorb the excess fat.</li>
                            <li>Serve in a beef broth or with a green salad.</li>
                        </ul>
                    </div>
                </article>                
            </section>
            <p class="recipe-attr">The recipes on this page were sourced from Wikibooks.org, licensed under the <a href="https://creativecommons.org/licenses/by-sa/3.0/">CC BY-SA 3.0</a> (<a href="https://en.wikibooks.org/wiki/Cookbook:Macaroni_%26_Cheese_(Baked)">Recipe 1</a>, <a href="https://en.wikibooks.org/wiki/Cookbook:Cheese_Dumplings">Recipe 2</a>).</p>
        </main>

        <!-- Footer -->
        <?php generate_footer(); ?>
    </body>
</html>