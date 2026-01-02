<?php
$pageTitle  = $pageTitle  ?? "Dashboard";
$breadcrumb = $breadcrumb ?? "Home / Dashboard";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?= $pageTitle ?> | Rent IQ Solutions</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
*{margin:0;padding:0;box-sizing:border-box;font-family:Segoe UI,sans-serif}

/* HEADER */
.header{
    position:fixed;
    top:0;
    width:100%;
    height:55px;
    background:#1e73be;
    color:#fff;
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:0 15px;
    z-index:1000;
}
.header-left{
    display:flex;
    align-items:center;
    gap:15px;
}
.header-left i{
    font-size:20px;
    cursor:pointer;
}
.system-name{
    font-size:18px;
    font-weight:bold;
}
.header-right i{
    margin-right:15px;
    cursor:pointer;
}

/* BREADCRUMB */
.breadcrumb{
    position:fixed;
    top:55px;
    width:100%;
    background:#9b2242;
    color:#fff;
    padding:10px 20px;
    font-size:14px;
    z-index:999;
}
</style>
</head>

<body>

<div class="header">
    <div class="header-left">
        <i class="fas fa-bars" onclick="toggleSidebar()"></i>
        <span class="system-name">Rent IQ Solutions</span>
    </div>
    <div class="header-right">
        <i class="fab fa-twitter"></i>
        <i class="fab fa-facebook"></i>
        Welcome, Admin
    </div>
</div>

<div class="breadcrumb">
    <?= $breadcrumb ?>
</div>
