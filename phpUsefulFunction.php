<!doctype html>
<html lang="en">
    <head>
        <title>PHP Useful Function</title>
    </head>
    <body>

        <h1>PHP USEFUL BUILT IN ARRAY FUNCTIONS</h1>

        <ol>
            <li><h2>count() = to count no of items in an array</h2></li>
                <?php

            $arr1 = ["a", "b", "c", "d"];

            print_r($arr1);
            echo " has ";
            echo count($arr1);

            echo "<br/>";

            $arr2 = ["a", "b", "c", "d", "e"];
            print_r($arr2);
            echo " has ";
            echo count($arr2);

            echo "<br/>";

            $arr3 = [
                "name" => "kps",
                "age" => 23,
                "job" => "full stack developer",
                "married" => false
            ];

            print_r($arr3);
            echo " has ";
            echo count($arr3);
            ?>
            <li><h2>is_array() = to check whether array or not</h2></li>
                <?php

                    $arr4 = array(
                        "name" => "johnny",
                        "job" => "actor",
                        "age" => 50,
                        "09-769595258",
                        ["book","ruler","pencil"]
                    );

                    print_r($arr4);

                    echo "<br/>";

                    if( is_array($arr4) ){

                        echo "this is array";
                    }else{
                        echo "this is not array";
                    }

                    echo "<br/>";

                    echo  is_array($arr4[0]) ? "this is array" : "this is not array";

                ?>
            <li><h2>in_array() = to check specific items in specific array</h2></li>
                <?php

                    echo "<pre>";

                    $arr6 = [
                        "orange",
                        "apple",
                        "mango",
                        ["strawberry", "resBerry", "blueberry", "blackberry"],
                        "banana",
                        "name" => "Johnny",
                        "age" => 45,
                        "animals" => ["cows", "dogs", "goats", "chicken", "buffaloes"],

                    ];

                    print_r($arr6);

                    echo in_array("apple", $arr6); // 1

                    echo in_array("pineapple", $arr6); // empty

                    echo in_array("orange",$arr6) ? "yes, it is <br/>" : "no, it isn't <br/>"; // true

                    echo in_array("strawberry",$arr6) ? "yes, it is <br/>" : "no , it isn't <br/>"; // false

                    $trueText = "yes, it is <br/>";

                    $falseText = "no, it isn't <br/>";

                    echo in_array("blueberry", $arr6[3]) ? $trueText : $falseText;

                    echo in_array("Johnny", $arr6) ? $trueText : $falseText;

                    echo in_array(45, $arr6) ? $trueText : $falseText;

                    echo in_array( "cows" , $arr6 ) ? $trueText : $falseText;

                    echo in_array("goats", $arr6["animals"]) ? $trueText : $falseText;


                    echo "</pre>";
                ?>
            <li><h2>array_search() = to check the index of specific items in an array</h2></li>
                <?php

                    echo "<pre>";

                    $arr7 = [
                        "actors" => [
                            "johnny depp",
                            "taylor swift",
                            "henry cavil"
                        ],
                        "jacob",
                        "wally",
                        "gusti",
                        "business" => [
                            "facebook" => "ZuZu",
                            "microsoft" => "bill gate"
                        ],
                        ["grant", "henry", "will"],
                        "name" => "xr project",
                        "members" => "over 100"
                    ];

                    print_r($arr7);

                    echo array_search("jacob", $arr7); // 0
                    echo "<br/>";
                    echo array_search("gusti", $arr7); // 2
                    echo "<br/>";
                    echo array_search("grant", $arr7); // empty
                    echo "<br/>";
                    echo array_search("will", $arr7[3]); // 2
                    echo "<br/>";
                    echo array_search("over 100",$arr7); // members
                    echo "<br/>";
                    echo array_search("name", $arr7); // not use index = empty
                    echo "<br/>";
                    echo array_search("johnny depp", $arr7); // empty
                    echo "<br/>";
                    echo array_search("henry cavil", $arr7["actors"]); // 2
                    echo "<br/>";
                    echo array_search("facebook", $arr7); //
                    echo "<br/>";
                    echo array_search("ZuZu", $arr7); //
                    echo "<br/>";
                    echo array_search("bill gate", $arr7["business"]);

                    echo array_search("Wally", $arr7); // case sensitive



                    echo "</pre>";

                ?>
            <li><h2>array_push() = to add new items to an array behind</h2></li>
                <?php
                    echo "<h3 style='color: red;'>array_splice() modify the original array so use with cautious</h3>";

                    echo "<pre>";

                    $arr = [];

                    array_push($arr, "jacob", "jedi");
                    array_push($arr, ["dean","sam"], ["john", "henry"]);
                    array_push($arr, [
                        "name" => "winchesters",
                        "jobs" => "hunting"
                    ], [
                        "name" => "salvatore",
                        "genre" => "vampire"
                    ]);
                    // should use array_push() to add more than one value . if not will warn

                    print_r($arr);



                    echo "</pre>";

                ?>
            <li><h2>array_pop() = to remove items from an array behind</h2></li>
                <?php
                    echo "<h3 style='color: red;'>array_splice() modify the original array so use with cautious</h3>";

                    echo "<pre>";

                    array_pop($arr);

                    array_pop($arr[4]);

                    array_pop($arr);

                    array_pop($arr[3]);

                    array_pop($arr);

                    array_pop($arr[2]);

                    array_pop($arr[2]);

                    array_pop($arr);

                    array_pop($arr);

                    array_pop($arr);

                    print_r($arr);

                    echo "</pre>";

                ?>
            <li><h2>array_unshift() = to add new items to an array front</h2></li>
                <?php
                    echo "<h3 style='color: red;'>array_splice() modify the original array so use with cautious</h3>";

                    echo "<pre>";

                    array_unshift($arr, "apple");

                    array_unshift($arr, "orange");

                    array_unshift($arr, ["pencil", "book", "ruler"]);

                    array_unshift($arr, [
                        "name" => "aaa",
                        "age" => 34,
                        "job" => "bbb"
                    ] );

                    print_r($arr);

                    echo "</pre>";
                ?>
            <li><h2>array_shift() = to remove items from an array front</h2></li>
                <?php

                    echo "<h3 style='color: red;'>array_splice() modify the original array so use with cautious</h3>";


                    echo "<pre>";

                    array_shift($arr);

                    array_shift($arr);

                    print_r($arr);

                    echo "</pre>";

                ?>
            <li><h2>array_splice() = to cut out an array from an array , it returns an array</h2></li>
                <?php

                    echo "<h3 style='color: red;'>array_splice() modify the original array so use with cautious</h3>";

                    echo "<pre>";

                    echo "This is original array ";

                    print_r($arr7);

                    echo "<hr/>";

                    print_r(array_splice($arr7,3, count($arr7)));

                    echo "<hr/>";

                    echo "This is original array";

                    print_r($arr7);

                    echo "<hr/>";

                    print_r(array_splice($arr7, 0, 1));

                    echo "<hr/>";

                    echo "This is original array";

                    print_r($arr7);

                    echo "</pre>";

                ?>
            <li><h2>array_keys() = to filter keys from an array , it returns an array</h2></li>
                <?php

                    echo "<pre>";

                        print_r($arr);

                        print_r(array_keys($arr));

                        echo "<hr/>";

                        print_r($arr1);

                        print_r(array_keys($arr1));

                        echo "<hr/>";

                        print_r($arr2);

                        print_r(array_keys($arr2));

                        echo "<hr/>";

                        print_r($arr3);

                        print_r(array_keys($arr3));

                        echo "<hr/>";

                        print_r($arr4);

                        print_r(array_keys($arr4));

                        echo "<hr/>";

                        print_r($arr6);

                        print_r(array_keys($arr6));

                        echo "<hr/>";

                        print_r($arr7);

                        print_r(array_keys($arr7));

                    echo "</pre>";

                ?>
            <li><h2>array_values() = to filter values from an array , it returns an array</h2></li>
                <?php

                    echo "<pre>";

                    print_r($arr);

                    print_r(array_values($arr));

                    echo "<hr/>";

                    print_r($arr1);

                    print_r(array_values($arr1));

                    echo "<hr/>";

                    print_r($arr2);

                    print_r(array_values($arr2));

                    echo "<hr/>";

                    print_r($arr3);

                    print_r(array_values($arr3));

                    echo "<hr/>";

                    print_r($arr4);

                    print_r(array_values($arr4));

                    echo "<hr/>";

                    print_r($arr4[1]);

                    print_r(array_values($arr4[1]));

                    echo "<hr/>";

                    print_r($arr6);

                    print_r(array_values($arr6));

                    print_r(array_values($arr6[3]));

                    print_r(array_values($arr6["animals"]));

                    echo "<hr/>";

                    print_r($arr7);

                    print_r(array_values($arr7));


                    echo "</pre>";

                ?>
            <li><h2>sort() = to sorting an array according to values</h2></li>
                <?php

                    echo "<h3 style='color:red'>This function can affect to the original array so use with cautious</h3>";

                    echo "<pre>";

                    print_r($arr6);

                    sort($arr6);

                    print_r($arr6);

                    echo "<h2 style='color: red;'>Remark ::since this function sort the array with values , it has no original keys names. It can only sort specific dimension of the array</h2>";

//                    print_r($arr6["animals"]); // empty

                    echo "</pre>";

                ?>




        </ol>







    </body>
</html>