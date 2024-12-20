<?php
session_start();

if (isset($_POST['songId'])) {
    $_SESSION['songId'] = $_POST['songId'];
}
?>