<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'functions.php';
?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <title>Cupcake Fundraiser</title>
</head>
<body>
<header>
    <h1>Cupcake Fundraiser</h1>
</header>
<section>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <section>
            <p>Your Name:</p>
            <label>
                <input name="fullName" placeholder="Please input your name" type="text"/>
            </label>
            <article>
                <p>Cupcake Flavors:</p>
                <?php formCheckboxes(flavors()); ?>
            </article>
            <article>
                <br>
                <br>
                <input type="submit" name="submit" value="Order">
            </article>
        </section>
    </form>
</section>
<section>
    <?php

    if(isset($_POST['submit'])&&($_POST['fullName']))
    {
        $name = $_POST['fullName'];
        $cupcakes = $_POST['cupcakes1'];
        echo "<pre>";
        echo "<p>Thank you $name </p>";
        echo "<p>Order Summary";
        if(isset($_POST['cupcakes1']))
        {
            echo "<ul>";
            foreach ($cupcakes as $cupcake => $x)
            {
                echo "<li>$x</li>";
            }
            echo "</ul>";
            $cost = count($cupcakes) * 3.5;
            $cost = number_format($cost, 2, '.', '');
            echo "<p>Order Total: $$cost</p>";
            echo "</p></pre>";
        }
        else if (isset($_POST['cupcakes1']) == null)
        {
            echo "Order Total: $0.00";
        }
    }
    ?>
</section>
</body>
</html>
