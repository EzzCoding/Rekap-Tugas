<?php

echo "<pre>";
print_r(json_decode(base64_decode($_GET['data'])));

$json = base64_decode($_GET['data']);
$dataJSON = json_decode($json);

echo $dataJSON->mobil->minibus[1];