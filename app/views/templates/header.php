<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['title'] ?> Page</title>
    <link rel="shortcut icon" href="<?= BASE_URL ?>/img/icon.svg" type="image/x-icon">
    <link rel="stylesheet" href="<?= BASE_URL ?>/css/style.css">

    <!-- Poppins Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Inter Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
</head>

<body>
    <!-- Desktop Navbar Start -->
    <nav class="container-fluid navbar" id="navbar">
        <a href="<?= BASE_URL ?>" class="icon-brand"><img src="<?= BASE_URL ?>/img/icon.svg" alt="icon">
            <p>ToDoList</p>
        </a>
        <div class="desktop-navbar">
            <div class="nav-links">
                <a href="<?= BASE_URL ?>" class="nav-link">Home</a>
                <a href="<?= BASE_URL ?>/docs" class="nav-link">Docs</a>
                <a href="<?= BASE_URL ?>/products" class="nav-link">Products</a>
                <a href="<?= BASE_URL ?>/about" class="nav-link">About</a>
                <button type="button" class="btn btn-black"
                    onclick="gotoURL('http://localhost/todolist-php/public/dashboard')">Get Started</button>
            </div>
        </div>
        <div class="mobile-navbar">
            <h1>X</h1>
        </div>
    </nav>
    <!-- Desktop Navbar End -->

    <!-- Mobile Sidebar Start -->
    <div class="side-navbar">
    </div>
    <!-- Mobile Sidebar End -->