<?php
// GET запрос
$name = $_GET['name'] ?? 'Recruto';
$message = $_GET['message'] ?? 'Давай дружить';

// Результат
echo "Hello $name! $message!";
?>