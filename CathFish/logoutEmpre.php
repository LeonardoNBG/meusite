<?php
session_start();
session_destroy();
header('Location: loginEmpre.php');
exit();