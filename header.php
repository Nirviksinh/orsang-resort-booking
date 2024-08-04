<?php
session_start();
include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="path/to/your/css/file.css">
    <style>
        .login_register_btn a {
            color: white;
            border: 1px solid skyblue;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 4px;
            transition: all 0.3s ease;
            margin: 0 10px; /* Add margin here for consistent spacing */
        }

        .login_register_btn a:hover {
            background-color: skyblue;
            color: white;
        }
        
        .button-container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .logo-img img {
            max-width: 150px; /* Adjust the size as needed */
            height: auto; /* Maintain aspect ratio */
        }
    </style>
</head>
<body>
<header>
    <div class="header-area">
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid p-0">
                <div class="row align-items-center no-gutters">
                    <div class="col-xl-5 col-lg-6">
                        <div class="main-menu d-none d-lg-block">
                        
</html>
