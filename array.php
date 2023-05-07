<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PHP Array</title>
    </head>
    <body>
    
        <h1>PHP ARRAY</h1>

        <ol>
            <li>Numeric Array</li>
            <li>Associative Array</li>
        </ol>

        <h2>Numeric Array</h2>

        <ol type="i">
            <li>array()</li>
            <li>[]</li>
        </ol>

        <?php 
        
            // array() 

            $edu = array("ruler","pencil","book");

            // []

            $fruits = [
                "apple",
                "mango",
                "orange",
                "pineapple"
            ];

        ?>  

        <?php 
        
//            echo $edu;

            echo "<br/>";

//            print $edu;

            echo "<br/>";

            print_r($edu);

            echo "<br/>";

            var_dump($edu);

        ?>

        <hr/>

        <?php 
        
//            echo $fruits;

            echo "<br/>";

//            print $fruits;

            echo "<br/>";

            print_r($fruits);

            echo "<br/>";

            var_dump($fruits);
        
        ?>

        <hr/>
        <hr/>

        <h2>Associative Array</h2>

        <?php 
        
            $mgmgInfos = [

                "name" => "Maung Maung",
                "age" => 20,
                "married" => true,
                "salary" => 20.8,
            ];
        ?>

        <?php 
        
            $inventory = [

                "education" => ["pencil","pen","ruler","book"],
                
                "computer" => ["monitor","casing","keyboard","mouse"],

            ];
        
        ?>

        <?php 

//            echo $mgmgInfos;

            echo "<br/>";

//            print($mgmgInfos);

            echo "<br/>";

            print_r($mgmgInfos);

            echo "<br/>";

            var_dump($mgmgInfos);
        
        ?>

        <hr/>

        <pre>

<?php 
    
//    echo $inventory;

    echo "<br/>";

//    print($inventory);

    echo "<br/>";

    print_r($inventory);

    echo "<br/>";

    var_dump($inventory);

    // echo "<pre/>";

?>

        </pre>

        <hr/>

        <h2>Getting Array Values by ONe</h2>

        <?php 
        
            $arr1 = array("book","pencil","marker pen");

            $arr2 = ["JAVA","C++","Python","JavaScript"];

            $arr3 = [

                "book1" => [

                    "name" => "Java2SE",
                    "usage" => "Desktop Application",
                    "noOfPages" => 1000
                ],
                
                "book2" => [

                    "name" => "Java2EE",
                    "usage" => "Web Server",
                    "noOfPages" => 800
                ],

                "book3" => [

                    "name" => "DataStructors and Algorithms with Java",
                    "usage" => "DataStructors and Algorithms",
                    "noOfPages" => 1010
                ]
 
            ]
            
        ?>

        <?php 
        
            echo $arr1[0];

            echo "<br/>";

            print($arr1[1]);

            echo "<br/>";

            print_r($arr1[2]);

            echo "<br/>";

            var_dump($arr1[0]);
        
        ?>

        <hr/>

        <?php 
        
            echo $arr2[0];

            echo "<br/>";

            print($arr2[1]);

            echo "<br/>";

            print_r($arr2[2]);

            echo "<br/>";

            var_dump($arr2[3]);
                    
        ?>

        <hr/>

        <?php 
        
//            echo $arr3["book1"];
            
            echo "<br/>";

//            echo $arr3['book1'];

            echo "<br/>";

            // echo $arr3[0];

            // echo $arr3["book1"][0];

            echo $arr3["book1"]["name"];

            echo "<br/>";

//            print($arr3["book1"]);

            echo "<br/>";

            print($arr3["book1"]["usage"]);

            echo "<br/>";

            print_r($arr3["book2"]);

            echo "<br/>";

            print_r($arr3["book2"]["noOfPages"]);

            echo "<br/>";

            var_dump($arr3["book3"]);

            echo "<br/>";

            var_dump($arr3["book3"]["name"]);
        ?>

        <?php 
        
            $arr4 = array(
                "Maung Maung",
                19,
                false
            );

            $arr5 = ["pineapple","mango","strawberry"];

            $arr6 = array(

                "name" => "yu yu",
                "age" => 38,
                "married" => false
            );
        
        ?>

        <hr/>

        <pre>

        <?php 

            var_dump($arr4);

            $arr4[1] = 25;

            echo "<br/>";

            var_dump($arr4);

            echo "<br/>";

            $arr4[5] = "&euro; 5000";

            var_dump($arr4);
        
            echo $arr4[2];

            echo "<br/>";

            echo $arr4[5];

            echo "<br/>";

            $arr5[0] = "banana";

            $arr5[4] = [
                "blueberry",
                "blackberry",
                "res berry"
            ];

            var_dump($arr5);

            echo "<br/>";

            $arr6["married"] = true;

            $arr6["children"] = [
                "Zaw Zaw",
                "Min Min",
                "Aye Aye"
            ];

            var_dump($arr6);


            echo "<br/>";

            $arr4[] = "09-123456789";

            var_dump($arr4);

            echo "<br/>";

            $arr5[] = "apple";

            var_dump($arr5);

            echo "<br/>";

            $arr6[] = [
                "web developer",
                "mobile Developer"
            ];

            var_dump($arr6);
        ?>

        </pre>

        <hr/>

        <h1>PHP ARRAY DESTRUCTURING</h1>

        <?php
        
            #methond 1 
            
            $arr7 = ["ironman", "captain america", "hulk", "thor"];
        ?>

        <?php

            list($avg1,$avg2,$avg3) = $arr7;

            echo $avg1;

            echo "<br/>";

            echo $avg2;

            echo "<br/>";

            echo $avg3;

        ?>

        <hr/>

        <?php 
        
//            list($member1,,$member2,,$memeber3) = $arr7;

//            echo "member1 is <strong>$member1</strong><br/>";

//            echo "member2 is <strong>$member2</strong><br/>";

//            echo "member3 is <strong>$member3</strong><br/>";

        ?>

        <hr/>

        <?php 
        
            [$strek,$steve,$banner] = $arr7;

            echo "Sterk is <em>$strek</em><br/>";

            echo "Steve is <em>$steve</em><br/>";

            echo "Banner is <em>$banner</em><br/>";

        ?>

        <hr/>

        <?php

/*            $arr8 = ["C++","Java","PHP"];

            ["C++" => $gameDev , "PHP" => $serverSide ]  = $arr8;

            echo $gameDev;

            echo "<br/>";

            echo $serverSide;*/

/*            $arr9 = [

                "name" => "Kyaw Pyae Sone",
                "age" => 20,
                "job" => "student at university of computer studies in yangon",
            ];

            [$getName, $getAge, $getJob] = $arr9;

            echo $getName;*/

        ?>


        <?php

            $arr10 = [
                "name" => "Eloquent JavaScript",
                "about" => "Learn JavaScript from basic to advance",
                "pages" => 1000
            ];

            ["name" => $bookName, "about" => $purpose, "pages" => $pages ] = $arr10;

            echo "$bookName <br/>";
            echo "$purpose <br/>";
            echo "$pages <br/>";

        ?>

        <hr/>

        <h1>PHP Array SPREAD</h1>

        <?php

            echo "<pre>";

            $arr11 = ["superman","batman","wonder woman","flash"];

            $justiceLeague = ["green lantern", "hawk man", ...$arr11, "shazam"];

            var_dump($justiceLeague);

            $arr12 = [

                "leader" => "dr.fate",
                "co-leader" => "hawk man"
            ];

            $justiceSocietyOfAmerica = ["AtomSmasher",...$arr12,"cyclone"];

            print_r($justiceSocietyOfAmerica);
        ?>


    </body>
</html>