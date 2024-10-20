<?php
session_start();


echo '<div style="margin-top: 20px;"></div>';
if (isset($_SESSION['user']) && $_SESSION['user'] !== '') {
    include './info.php';
} else {
    include './form.html';
}