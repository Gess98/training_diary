<?php require_once 'incs/header.php' ?>

        <main class="main py-3">

            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <?php foreach ($posts as $post):?>
                            <div class="card border-dark mb-3">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="post/<?php echo $post['slug']?>"><?php echo $post['title']?></a></h5>
                                    <p class="card-text"><?php echo $post['desc']?></p>
                                    <a href="posts/<?php echo $post['slug']?>">Go somewhere</a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <?php require_once 'incs/sidebar.php' ?>

                </div>
            </div>

        </main>

<?php require_once 'incs/footer.php' ?>