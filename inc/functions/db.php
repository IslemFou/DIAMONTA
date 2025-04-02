<?php

// Db connection
define('DB_HOST', 'localhost');
define('DB_NAME', 'diamonta');
define('DB_USER', 'root');
define('DB_PASS', '');

function dbConnection(): object
{
  $DSN = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8';
  try {
    $PDO = new PDO($DSN, DB_USER, DB_PASS);
    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $PDO->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  } catch (PDOException $e) {
    die('Database connection failed: ' . $e->getMessage());
  }
  return $PDO;
}