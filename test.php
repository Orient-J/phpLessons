<!DOCTYPE html>
<html>
    <head>
        <title>This is HTML DOC</title>
    </head>
    <body>

        <h1>This is HTML</h1>

        <p>Total Result is <?php echo 7 * 8  ?></p>

        <em>This is print output 

            <?php print(25 / 5) ?>
        </em>

        <strong>

            Result is 

                <?php 

                    $num1 = 55;
                    $num2 = 5;

                    echo $num1 - $num2;
                ?>  

        </strong>

        <h2>
            Addition result is <?php echo $num1 + $num2; ?>
        </h2>

        <h3>

            This is the result of ouput php tag 

            <?= $num1 * $num2 ?>

        </h3>



        <p>Current is </p>

        <?php $time = date('h'); ?>

        <h4>

            <?php 

                echo $time;

            ?>
            
            <?php if( $time < 6 || $time > 18 ) { ?>

                <strong>Night Time</strong>


            <?php } else { ?>

                <em>Day Time</em>

            <?php } ?>


        </h4>


        <?php 
        
                $num4 = 20;
                $num5 = 7; 

                $total = $num4 * $num5;

                echo $total;
        ?>

        <?php if( $total < 100 || $total > 150 ) : ?>

            <strong>DayTime</strong>
        
        <?php else : ?>

            <em>NightTime</em>

        <?php endif ?>


    </body>
</html>

<?php 

    $var;

    echo var_dump($var);

    $var = 333;

    echo var_dump($var);

    $var = 12.44;

    echo var_dump($var);

    $var = "abcde";

    echo var_dump($var);

    $name = "Kyaw";

    function getName(){

        $name = "Pyae";

        echo $name;
    }

    getName();

    echo $name;


    $nickName = "Dog Pu";

    function getNickName(){

        global $nickName;

        echo $nickName;
    }

    getNickName();


    if(true){

        $salary = 1000;
    }else{

        $salary = 10000;
    }

    echo $salary;


    function getSalary(){

        $salary = 100;

        echo $salary;
    }

    // getSalaray();


    function setSalary(){

        if(true){

            $money = 12.344;

            echo $money;
        }

        echo $money;
    }

    setSalary();


    $variable = "this is variable";

    echo $variable;



    define("MAX",1000);
    define("MIN",10);

    echo MAX;
    echo MIN;

    // MAX = 10;

