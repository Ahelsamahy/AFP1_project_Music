<?php 
    require_once ARTICLE_MANAGER;
    $articles = getArticles();

?>

<h1 class="h1edit">Articles</h1>
<center>
        <hr class="mb-5 mt-3" style="width:15%">
      </center>
<div class = "container">
    <?php foreach($articles as $a) : ?>
        <a href="index.php?P=article&A=<?=$a['id']; ?>">
            <div class="row">
                <div class="col-md-4">
                    <img class="rewimages" src="<?=$a['banner']?>" alt="Card image cap">
                </div>
                <div class="col-md-8">
                    <ol>
                        <h5><?=$a['title']?></h5>
                        <p><?php echo strip_tags(substr($a['content'], 0, 150));?></p>
                    </ol>
                </div>
            </div>
            <br>
        </a>
    <?php endforeach; ?>
</div>