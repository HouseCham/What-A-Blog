<?php require_once 'php/helpers.php'; ?>
<?php require_once 'php/connection.php'; ?>
<?php
    if(!isset($_POST['search'])){
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
    <!-- Header -->
    <header></header>
    <!-- Navbar -->
    <?php include_once 'WEB-INF/pages/common/navbar.php' ?>
    <!-- Content -->
    <div class="container content">
        <?php if (isset($_SESSION['error_login'])) : ?>
            <div class="row text-center">
                <h2 class="error_login">
                    <?= $_SESSION['error_login'] ?>
                </h2>
            </div>
        <?php endif; ?>
        <div class="row">
            <!-- Main -->
            <div class="main_body col-sm-12 col-lg-9">
                <!-- Get search articles from database -->
                <?php $search = searchPosts($connection, $_POST['search']); ?>
                <h2 class="category_title text-center">
                    About your search... 
                    "<?= $_POST['search']; ?>"
                </h2>
                <?php if (!empty($search)) : ?>
                    <?php while ($article = mysqli_fetch_assoc($search)) : ?>
                        <?php include 'WEB-INF/pages/common/article.php' ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <!--========== Lateral ==========-->
            <!-- There is no user -->
            <?php if (!isset($_SESSION['user'])) : ?>
                <?php include_once 'WEB-INF/pages/common/sign_in.php' ?>
            <?php endif; ?>
            <!-- User logged -->
            <?php if (isset($_SESSION['user'])) : ?>
                <?php include_once 'WEB-INF/pages/common/userCard.php' ?>
            <?php endif; ?>
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