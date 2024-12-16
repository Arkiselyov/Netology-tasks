<?php
session_start();

if (!empty($_POST['username'])) {
    $_SESSION['username'] = $_POST['username'];
    header('Location: index.php');
    exit();
} else {
    header('Location: index.php');
    exit();
}