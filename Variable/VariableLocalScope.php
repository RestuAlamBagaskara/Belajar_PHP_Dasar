<?php

function createName()
{
    $name = "Alam"; // local scope
}

createName();

//akan menghasilkan warning karena $name tidak berada dalam satu scope
//$name bisa diakses dari dalam fungsi createName()
echo $name . PHP_EOL;
