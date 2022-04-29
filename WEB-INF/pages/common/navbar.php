<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <a class="navbar-brand nav_title" href="/master_php/proyecto_php/index.php">What a Blog!!</a>
        <button class="navbar-toggler button" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="uil uil-list-ul menu_icon"></i>
        </button>
        <div class="collapse navbar-collapse menu py-1" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/master_php/proyecto_php/index.php">
                        <span class="nav_link">Home</span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="nav_link">Categories</span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <!-- Get categories from database -->
                        <?php $categories = getCategories($connection) ?>
                        <?php if(!empty($categories)): ?>
                            <?php while($category = mysqli_fetch_assoc($categories)): ?>
                                <li><a class="dropdown-item" href="WEB-INF/pages/blogs/categories.php?id=<?= $category['id'] ?>"><?= $category['name'] ?></a></li>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/master_php/proyecto_php/about.php">
                        <span class="nav_link">About</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span class="nav_link">Contact</span>
                    </a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2 search_bar mb-1 mt-1" type="search" placeholder="Search" aria-label="Search">
                <button class="btn search_btn mb-1 mt-1" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>