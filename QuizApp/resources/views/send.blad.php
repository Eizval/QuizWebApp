<?php

    $email = $_POST["email"];

    DB::insert("insert into users (email) values (?)", [$email]);


?>