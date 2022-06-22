<?php

//Akan error apabila file tidak ditemulan
// require "Function/FunctionArgument.php";

//Akan memberikan warning apabila file tidak ditemukan
// include "Function/FunctionArgument.php";

//Mendeteksi jika kita pernah mengambil file yang sama untuk menghindari redeclare
require_once "Function/FunctionArgument.php";
include_once "Function/FunctionArgument.php";

echo Hai("Alam");

