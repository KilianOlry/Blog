<head>
    <link rel="stylesheet" href="../asset/css/variables.css">
    <link rel="stylesheet" href="../asset/css/header.css">
</head>


<header>
    <a href="../" class=".logo">Blog</a>
    <ul class="header-menu">
        <li class=<?= $_SERVER['REQUEST_URI'] === '/website/Blog/Routes/add-articles.php' ? 'active' : '' ?>>
            <a href="../../../website/Blog/Routes/add-articles.php">Ajouter un article</a>
        </li>
    </ul>
</header>