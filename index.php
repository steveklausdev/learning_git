<?php

#$list = array{"test", "hallo", "whatsgood"};
function myTest()
{
    static $counter = 0;
    echo $counter;
    $counter++;
}

myTest();
myTest();
myTest();
myTest();

echo "es hat geklappt";

?>