<?php

session_start();

unset($_SESSION['name']);
unset($_SESSION['email']);
unset($_SESSION['password']);
session_destroy();

header("Location:http://localhost/learn/login.php");