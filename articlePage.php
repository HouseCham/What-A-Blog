<?php require_once 'php/helpers.php'; ?>
<?php require_once 'php/connection.php'; ?>
<?php
    $post = getSinglePost($connection, $_GET['idPost']);
    if(!isset($post['id'])){
        header('LOCATION: /master_php/proyecto_php/index.php');
    }
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Unicons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Main CSS -->
    <link href="css/main.css" rel="stylesheet" />
    <title>What a blog</title>
</head>

<body>
    <!-- Navbar -->
    <?php include_once 'WEB-INF/pages/common/navbar.php' ?>
    <!-- content -->
    <div class="container">
        <div class="row">
            <div class="col-sm-12 articleSection_container">
                <h1 class="article_title text-center"><?= $post['title'] ?></h1>
                <h4 class="article_date text-center"><?= $post['date'] ?></h4>
                <p class="article_content">
                    <?= $post['description'] ?>
                </p>
                <span class="article_author">
                    By: 
                    <?= $post['name'] ?>
                    <?= " " ?>
                    <?=$post['lastname'] ?>
                </span>
                </br>
                <span class="category_article">
                <?=$post['category'] ?>
                </span>
                <?php if(isset($_SESSION['user']) && $_SESSION['user']['id'] == $post['user_id']): ?>
                    </br>
                    <a href="/master_php/proyecto_php/php/deletePost.php?postId=<?=$post['id'] ?>" class="btn delete_post text-white">Delete</a>
                    <a href="/master_php/proyecto_php/editPost.php?postId=<?=$post['id'] ?>" class="btn edit_post text-white">Edit</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <?php include_once 'WEB-INF/pages/common/footer.php' ?>
    <!-- Errors -->
    <?php if (isset($_SESSION['error_login'])) : ?>
        <?php $_SESSION['error_login'] = null; ?>
    <?php endif; ?>
    <!-- Main JS -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>