<div class="col-md-4">
    <h3>Recent post</h3>
    <ul class="list-group">
        <?php foreach($recent_posts as $recent_post): ?>
            <li class="list-group-item border-dark"><a href="post/<?php echo $recent_post['slug']?>"><?php echo $recent_post['title']?></a></li>
        <?php endforeach;?>
    </ul>
</div>