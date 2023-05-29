<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div class="wrapper">

        <!--Part 0 - Output-->
        <?php
            echo "Hello World";
        ?>

        <br />

        <!--Part 1 - Variables-->
        <?php
            $firstName = "Rey";
            $lastName = "Abdul";
            $learning = "PHP";
            $prof = "Professor Maximus";

            echo "Hello my name is $firstName $lastName and I am learning $learning with $prof";
        ?>

        <br />

        <!--Part 2 - Variable Math-->
        <?php
            $x = 9;
            $y = 2;

            echo $x * $y;
        ?>

        <br />

        <!--Part 3 - Array-->
        <?php
            $groceries = array("apples", "cereal", "milk", "coffee");

            echo $groceries[1];
        ?>

        <br />

        <!--Part 4 - Super Global-->
        <?php
            echo $_SERVER['PHP_SELF'] . '<br>';
            echo $_SERVER['SERVER_ADDR'] . '<br>';
        ?>


    </div>

</body>

</html>