<?php

class XXX
{
    public function __toString()
    {
        return "MyClass";
    }
}

$myvar = "hoi";

$result = my_plus($myvar, 1, 2, 3, "blabla", new XXX());

echo("myvar = $myvar\n");

echo("resultaat: $result\n");

print_r($result);

?>
