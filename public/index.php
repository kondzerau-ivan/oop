<?php

echo 'index.php';
echo '<br>';
echo '<pre>';
print_r($_SERVER['REQUEST_URI']);
echo '</pre>';
echo '<br>';
echo '<pre>';
print_r($_SERVER['QUERY_STRING']);
echo '</pre>';
echo '<br>';
echo '<pre>';
print_r($_GET);
echo '</pre>';