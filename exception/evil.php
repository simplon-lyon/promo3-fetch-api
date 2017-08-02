<?php
class Evil {
    function __construct() {
        $pdo = new PDO('mysql:dbname=testdb;host=localhost', 'toto', 'titi');
    }
}