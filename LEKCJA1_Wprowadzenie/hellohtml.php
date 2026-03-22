<?php
echo 'Hello World!'; //wyswietli hello world
echo '\n'; //wyswietli \n
echo "\n"; //nie wyswietli
$counter = 1; 
echo 'Counter: $counter'; //wyswietli counter: $counter
echo "\n"; //nie wyswietli
echo "Counter: $counter"; //wyswietli counter: 1
echo "\n"; //nie wyswietli

//same wyrazy używamy ''
//znaki specjalne uzywamy ""
//wyrazy + znaki specjalne używamy ""

//najbardziej poprawny zapis:
echo 'Counter: ' . $counter . "\n";

//przykład z widocznymi wszystkimi przełamaniami linii
echo '<pre>';
echo 'Hello World!';
echo '\n';
echo "\n";
$counter = 1;
echo 'Counter: $counter';
echo "\n";
echo "Counter: $counter";
echo "\n";
echo 'Counter: ' . $counter . "\n";
echo '</pre>';
?>



<pre> 
<?php
echo 'Hello World!';
echo '\n';
echo "\n";
$counter = 1;
echo 'Counter: $counter';
echo "\n";
echo "Counter: $counter";
echo "\n";
echo 'Counter: ' . $counter . "\n";
?>
</pre>
<p>
    <?php echo date('d.m.Y'); ?>
</p>


<?php
session_start();
$counter = isset($_SESSION['counter']) ? $_SESSION['counter'] : 0;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hello World!</title>
    </head>
    <body>
        <p>
            <?php echo 'Hello World!'; ?>
        </p>
        <p>
            <?php
                echo $counter;
                $_SESSION['counter'] += 1;
            ?>
        </p>
    </body>
</html>