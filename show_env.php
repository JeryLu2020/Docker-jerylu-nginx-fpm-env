<?php

echo "HOSTNAME: ";
var_dump(getenv('HOSTNAME'));
echo "<br>";

echo "HELLO: ";
var_dump(getenv('HELLO'));
echo "<br>";

echo "WORLD: ";
var_dump(getenv('WORLD'));
echo "<br>";

echo "REACT_APP_TEST_ENV: ";
var_dump(getenv('REACT_APP_TEST_ENV'));