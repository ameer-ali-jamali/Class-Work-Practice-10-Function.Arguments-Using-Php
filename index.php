<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    // Function Arguments
    // Function Arguments: Argument is just like a variable which can be used to pass through information to functions. 

    // PHP supports Call by Value, Call by Reference, Default Argument Values and Variable-length argument.



    // 1. Call by Value
    // In Call by Value, the value of a variable is passed directly. This means if the value of a variable within the function is changed, it does not get changed outside of the function. 

    // Example:

    function incr($i)
    {
        $i++;
    }
    $i = 5;
    incr($i);
    echo $i;

    //Output:  5


    // 2. Call by Reference
    // In call by reference, the address of a variable (their memory location) is passed. In the case of call by reference, we prepend an ampersand (&) to the argument name in the function definition. Any change in variable value within a function can reflect the change in the original value of a variable.

    // Example:

    function inc($i)
    {
        $i++;
    }
    $i = 5;
    inc($i);
    echo $i;

    // Output:  6


    // 3. Default Argument Values
    // If we call a function without arguments, then PHP function takes the default value as an argument. 

    // Example:

    function Hello($name = "Anwar")
    {
        echo "Hello $name <br>";
    }
    Hello("Raheem");
    Hello(); //passing no value  
    Hello("jamel");

    // Output: Hello Anwar Hello Raheem Hello jamel


    // 4. Variable Length Argument
    // It is used when we need to pass n number of arguments in a function. To use this, we need to write three dots inside the parenthesis before the argument. 

    // Example:

    function add(...$nums)
    {
        $sum = 0;
        foreach ($nums as $n) {
            $sum += $n;
        }
        return $sum;
    }
    echo add(1, 2, 3, 4);

    // Output: 10

    ?>


</body>

</html>