<?php

require "flight/Flight.php";
require "rb.php";
require "db.php";

Flight::register("db", "DB");

Flight::route("GET /", function () {
  echo json_encode( Flight::db()->goods() );
});

Flight::start();
