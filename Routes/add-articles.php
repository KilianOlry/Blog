<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/css/variables.css">
    <link rel="stylesheet" href="../asset/css/add-article.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <title>Créer un article</title>
</head>

<body>
    <div class="container">
        <?php require_once '../includes/header.php' ?>
        <div class="content center">
            <div class="block p-20 form-container">
                <h1>Écrire un article</h1>
                <form action="/Routes/add-articles.php" method="$_POST">

                    <div class="form-controll">
                        <label for="ID_title">Titre</label>
                        <input type="text" name="title" id="ID_title">
                        <!-- <p class="text-error"></p> -->
                    </div>

                    <div class="form-controll">
                        <label for="ID_image">Image</label>
                        <input type="text" name="image" id="ID_image">
                        <!-- <p class="text-error"></p> -->
                    </div>

                    <div class="form-controll">
                        <label for="category">Categorie</label>
                        <select name="category" id="ID_category">
                            <option value="technology">Technologie</option>
                            <option value="nature">Nature</option>
                            <option value="politic">Politique</option>
                        </select>
                        <!-- <p class="text-error"></p> -->
                    </div>

                    <div class="form-controll">
                        <label for="ID_content">Contenu</label>
                        <textarea name="content" id="ID_content"></textarea>
                        <!-- <p class="text-error"></p> -->
                    </div>

                    <div class="form-action">
                        <button type="button btn-secondary">Annuler</button>
                        <button type="button btn-primary">Sauvegarder</button>
                    </div>
                </form>
            </div>
            <?php require_once '../includes/footer.php' ?>
        </div>
    </div>
</body>

</html>