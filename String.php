<!DOCTYPE html>
<html>
    <head>
        <title>PHP String</title>
    </head>
    <body>

        <?php 


            $str1 = "This is Double Quote ";
            $str2 = 'This is Single Quote ';

        ?>
        
        <?php

            $age = 15;

            $str3 = "Aye Mya is $age years old";
            $str4 = 'Hlaing Hlaing is $age years old';   
            
        ?>

        <?php 
        
            $str5 = "I am 5'6\" tall in height ";

            $salary = 8000;
            $str6 = "Maung Maung's salary is $$salary.";
            $str7 = "Mya Mya get \$$salary as a gift";


            $str8 = "Folder Path is ' D:\\programFiles\\index.php ' ";

        ?>

        <?php 
        
            $str9 = "This is php lesson about php string.";
        
            $strLength = strlen($str9); // strlen("string");

            $subStr = substr($str9,10,5); // substr("string",start,length);

            $strReplace = str_replace("php","JavaScript",$str9); // str_replace("old","new","string");

        ?>

        <?php echo $str1 ?>

        <br/>

        <?php echo $str2 ?>

        <hr/>

        <?php echo $str3 ?>

        <br/>

        <?php echo $str4 ?>

        <hr/>

        <?php echo $str5; ?>

        <br/>

        <?php echo $str6; ?>

        <?php 
            echo "<br/>";
            echo $str7; 
        ?>

        <?php 
        
            echo "<br/>";
            echo $str8;
        ?>

        <hr/>

        <?php 
        
            echo $str9;
            
            echo "<br/>";

            echo "\"$str9\" has $strLength characters";

            echo "<br/>";

            echo $subStr;

            echo "<br/>";

            echo $strReplace;

        ?>

        <hr/>

    </body>
</html>