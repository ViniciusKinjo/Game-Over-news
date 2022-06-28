<?php
session_start();
unset($_SESSION['id']);
header("Location:../visao/index.php");