<div class="user_card col-sm-12 col-md-3">
    <div class="user_section">
        <h3 class="user_welcome text-center mt-1">Welcome back!!</h3>
        <h4 class="username text-center"><?= $_SESSION['user']['name']; ?></h4>

        <ul class="user_list">
            <li class="user_info">
                <i class="uil uil-notes user_icon"></i>
                <span class="user_fact">Total of articles: </span>
            </li>
        </ul>
        <!-- Edit profile -->
        <?php include_once 'editProfile.php' ?>
        <!-- New Article -->
        <a href="newArticle.php" class="btn new-article_btn">
            <i class="uil uil-plus new-article_icon"></i>
            New article
        </a>
        <!-- Logout btn -->
        <a href="php/logout.php" class="btn logout_btn">Log out</a>
    </div>
</div>