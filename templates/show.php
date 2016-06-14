<?php $title = $post['title_name'] ?>

<?php ob_start() ?>
    <h1><?php echo $post['title_name'] ?></h1>

    <div class="date"><?php echo $post['created_at'] ?></div>
    <div class="body">
        <?php echo $post['content'] ?>
    </div>
<?php $content = ob_get_clean() ?>

<?php include 'layout.php' ?>