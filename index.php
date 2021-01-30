
    <?php

    //this is the first part
    $string_1 = "Hello";
    $string_2 = "World";
    $string_3 = $string_1 . $string_2;
    echo "String with double quote ::: ",  strlen($string_3);
    echo nl2br("\n"); // use to print space like move to next line
    echo nl2br("\n"); // use to print space like move to next line
    echo nl2br("\n"); // use to print space like move to next line
    // end of part 1


    //start of part 2 
    $string_21 = 'Hello';
    $string_22 = 'World';
    $string_23 = $string_21 . $string_22;
    echo "String with single quote ::: ",  strlen($string_23);
    echo nl2br("\n"); // use to print space like move to next line
    //end of part 2


    //start of part 3 

    // when i run this code it will show the syntax error with unexpected string

    //if you want to see the error remove the /* */ from below line till the end of part 3 
    //and run the code

    /*  $string_31 = 'Hello";
    $string_32 = 'World";
    $string_33 = $string_31 . $string_32;
    echo 'String with single quote ::: ",  strlen($string_33);
  echo nl2br("\n"); // use to print space like move to next line
    */


    //end of part 3



    //start of part 4 


    //when i remove the $ from the variable then i receive this error 'Parse error: syntax error, unexpected '=' '
    //this is an syntax error
    //to see the error please remove the /*  */ from the below code till end of part 4 line



    /* string_41 = 'Hello';
    $string_42 = 'World';
    $string_43 = $string_41 . $string_42;
    echo "String with single quote ::: ",  strlen($string43);
 echo nl2br("\n"); // use to print space like move to next line
    */


    //end of part 4



    //start of part 5 

    //when i remove one of the semi colon then i receive the following error 
    //Parse error: syntax error, unexpected ''World; ' (T_ENCAPSED_AND_WHITESPACE)
    //to run the code and want to see the error please remove the /* */ from below code

    /*  $string_51 = 'Hello';
    $string_52 = 'World;
    $string_53 = $string_51 . $string_52;
    echo "String with single quote ::: ",  strlen($string_53);
    echo nl2br("\n");
    */

    //end of part 5

    //start of part 6
    echo nl2br("\n"); // use to print space like move to next line
    echo ('"It is Markku`s car."');
    echo nl2br("\n" . 'Random Character: del c:\ *.*"');

    //end of part 6
    ?>




    <h1>Operators</h1>
    <?php
    //start of part 1
    $num_1 = 298;
    $num_2 = 234;
    $num_3 = 46;
    echo ("This is sum of all numbers : ");
    echo ($num_1 + $num_2 + $num_3);
    echo nl2br("\n"); // use to print space like move to next line
    //end of part 1


    //start of part 2
    $var1 = 87;
    $var2 = 44;
    $var3 = 200;
    $var4 = 15;
    $var5 = 10;
    echo nl2br("\n"); // use to print space like move to next line
    echo ("The result of expression is: ");
    echo (($var1 + $var2) + ($var3 * $var4) / $var5);



    ?>