<?php require_once 'php/helpers.php'; ?>
<?php require_once 'php/connection.php'; ?>

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
                <h1 class="article_title text-center">Article title</h1>
                <h4 class="article_date text-center">04/30/2022</h4>
                <p class="article_content">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                    Saepe consequuntur unde similique error vitae quos tempora perferendis voluptate facilis? 
                    Quisquam ratione assumenda, cupiditate eum perferendis repellendus eligendi in eius officiis?
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                    Saepe consequuntur unde similique error vitae quos tempora perferendis voluptate facilis? 
                    Quisquam ratione assumenda, cupiditate eum perferendis repellendus eligendi in eius officiis?
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                    Saepe consequuntur unde similique error vitae quos tempora perferendis voluptate facilis? 
                    Quisquam ratione assumenda, cupiditate eum perferendis repellendus eligendi in eius officiis?
                </p>
                <span class="article_author">By: Author</span>
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