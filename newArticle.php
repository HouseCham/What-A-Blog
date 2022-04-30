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
    <!-- Header -->
    <header></header>
    <!-- Navbar -->
    <?php include_once 'WEB-INF/pages/common/navbar.php' ?>
    <!-- Article form -->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="new_article text-center">What about creating a new post?</h1>
            </div>
        </div>
        <div class="row">
            <form action="php/savePost.php" method="POST">
                <div class="mb-3">
                    <label for="article_title" class="form-label article_label">Title</label>
                    <input type="text" class="form-control new_article_title" id="article_title" name="article_title" required 
                    value="<?php echo isset($_SESSION['savePost_error']) ? showError($_SESSION['savePost_error'], 'title') : '' ?>">
                </div>
                <div class="mb-3">
                    <label for="article_description" class="form-label article_label">Description</label>
                    </br>
                    <textarea name="article_description" id="article_description" cols="30" rows="10" class="new_article_description" required>
                        <?php echo isset($_SESSION['savePost_error']) ? showError($_SESSION['savePost_error'], 'description') : '' ?>
                    </textarea>
                </div>
                <div class="mb-3">
                    <label for="categories" class="form-label">
                        Category
                    </label>
                    <select id="categories" name="category" class="form-select categories">
                        <!-- Get categories from database -->
                        <?php $categories = getCategories($connection) ?>
                        <?php if(!empty($categories)): ?>
                            <?php while($category = mysqli_fetch_assoc($categories)): ?>
                                <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </select>
                </div>
                <button type="submit" class="btn article_btn mb-5">Create article</button>
            </form>
        </div>
    </div>
    <?php deleteErrors(); ?>
    <!-- Footer -->
    <?php include_once 'WEB-INF/pages/common/footer.php' ?>
    <!-- Main JS -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>