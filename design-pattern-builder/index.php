<?php

require_once('SQLQueryBuilder.php');
require_once('MysqlQueryBuilder.php');

use Builder\MysqlQueryBuilder;

$mysqlQueryBuilder = new MysqlQueryBuilder();

// $query = $mysqlQueryBuilder;
// $query = $query->select("users", ["name", "email", "password"]);
// $query = $query->where("age", 18, ">");
// $query = $query->where("age", 30, "<");
// $query = $query->limit(10, 20);
// $query = $query->getSQL();

/** shorter way to write the same 👆🏻 **/
$query = $mysqlQueryBuilder
        ->select("users", ["name", "email", "password"])
        ->where("age", 18, ">")
        ->where("age", 30, "<")
        ->limit(10, 20)
        ->getSQL();

echo $query.PHP_EOL;
