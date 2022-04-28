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
                <h1 class="new_article_title text-center">What about creating a new article?</h1>
            </div>
        </div>
        <div class="row">
            <form>
                <div class="mb-3">
                    <label for="article_title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="article_title"  name="article_title" required>
                </div>
                <div class="mb-3">
                    <label for="article_description" class="form-label">Description</label>
                    <textarea name="article_description" id="article_description" cols="30" rows="10"></textarea>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <!-- Footer -->
    <?php include_once 'WEB-INF/pages/common/footer.php' ?>
    <!-- Main JS -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>