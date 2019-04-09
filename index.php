<?php
function flavors()
{
    $array = array(
        "grasshopper" => "The Grasshopper",
        "maple"       => "Whiskey Maple Bacon",
        "carrot"      => "Carrot Walnut",
        "caramel"     =>"Salted Caramel Cupcake",
        "velvet"      => "Red Velvet",
        "lemon"       => "Lemon Drop",
        "tiramisu"    => "Tiramisu"
    );
    return $array;
}

function formCheckBoxes($flavorsArray)
{
    foreach ($flavorsArray as $flavor => $flavor_value)
        echo '<input type="checkbox" name="cupcakes1[]" value="'.$flavor_value.'" id="'.$flavor.'"><label>'.$flavor_value.'</label><br>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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

        echo "<br>You can use the following form again to enter a new name.";
    }
    ?>
</section>
</body>
</html>
