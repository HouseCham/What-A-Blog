<div class="article_container">
    <a href="/master_php/proyecto_php/articlePage.php" class="article">
        <div class="article_header">
            <h2 class="article_title"><?= $article['title']; ?></h2>
        </div>
        <div class="article_body">
            <div class="article_text">
                <p class="text">
                    <?= substr($article['description'], 0, 180) . "..."; ?>
                </p>
            </div>
            <div class="article_date">
                <span>
                    <i class="uil uil-apps"></i>
                    <span class="category_text">
                        <?= $article['category']; ?>
                    </span>
                    <i class="uil uil-schedule"></i>
                    <span class="date_text">
                        <?= $article['date']; ?>
                    </span>
                </span>
            </div>
        </div>
    </a>
</div>