<!DOCTYPE html>

<?php
    // Standard Include
    require $_SERVER["DOCUMENT_ROOT"] . '/../resources/config.php';

    // Helper Functions
    function generate_table_item($id, $name) {
        $output = <<<HEREDOC
            <tr>
                <td>$id</td>
                <td>$name</td>
                <td><form id="admin-edit" class="php-var-button" action="edit.php"><input name="id" value="$id"><input type="submit" value="Edit"></form>
                <form id="admin-remove" class="php-var-button" action="remove.php"><input name="id" value="$id"><input class="damage" type="submit" value="Remove"></form></td>
            </tr>
HEREDOC;

        echo $output;
    }

    if (isset($_POST["user"])) {
        $_SESSION["user"] = $_POST["user"];
    }
    if (isset($_POST["pass"])) {
        $_SESSION["pass"] = $_POST["pass"];
    }
?>

<html>
    <head>
        <?php generate_head("Web Interface Portal"); ?>
    </head>
    <body>
        <!-- Content -->
        <main>
            <section>
                <?php
                $config = $GLOBALS["config"];
                $user = @$_SESSION["user"];
                $pass = @$_SESSION["pass"];

                if (($config["portal"]["user"] == $user) && ($config["portal"]["pass"] == $pass)) {
                    
                    // Start Admin Portal
                    echo "<div class='admin-portal-container'>";
                    
                    // Greeting and Actions
                    echo "<h2>Hello, " . $user . "</h2>";
                    echo "<p class='admin-actions'><a href='new.php'>Add New Cheese</a> | <a href='logout.php'>Logout</a></p>";

                    // Information
                    echo "<br>Use 'Ctrl + F' to find a specific cheese";

                    // Table Start
                    echo "<table class='admin-table'>";

                    // Table Header
                    echo "<tr><th>Cheese ID</th><th>Cheese Name</th><th>Controls</th></tr>";
        
                    // Print All Cheeses
                    $conn = setup_connect_to_db();
                    $sql = "SELECT * FROM TCheeses";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        
                        while ($row = mysqli_fetch_assoc($result)) {
                            $item_id = $row['cheese_id'];
                            $item_name = $row['cheese_name'];
                            
                            generate_table_item($item_id, $item_name);
                        }

                    } else {
                        echo "<tr><td colspan='3'>No Cheeses Found</td></tr>";
                    }

                    // Table End
                    echo "</table>";

                    // End Admin Portal
                    echo "</div>";

                } else {
                    $self = $_SERVER['PHP_SELF'];
                    $output = <<<HEREDOC
                        <form class="admin-login" method="post" action="$self">
                            <h4>Web Interface Portal</h4>
                            <span><p>Cheeses of the World</p></span>
                            <br>
                            <p>Username:</p>    
                            <input name="user">
                            <p>Password:</p>    
                            <input name="pass" type="password">
                            <br>
                            <input type="submit" value="Log In">
                            <br>
                            <span><p>Please see the accompanying documentation or README.txt file for the username and password.</p></span>
                        </form>
HEREDOC;
                echo $output;
                }
                ?>
            </section>
        </main>
    </body>
</html>