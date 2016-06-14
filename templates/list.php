
<?php $title = 'List of Posts' ?>
<?php ob_start() ?>
<h1>List of Posts</h1>
<ul>
    <?php foreach ($posts as $post): ?>
        <li>
            <a href="/show.php?id=<?php echo $post['id'] ?>">
                <?php echo $post['title_name'] ?>
            </a>
        </li>
    <?php endforeach ?>
    <form action="submitblog.php" method="post">
        Title: <input type="text" name="title"><br>
        Author: <input type="text" name="author"><br>
        Content: <input type="text" name="content"><br>
        <input type="submit">
    </form>
</ul>
<?php $content = ob_get_clean() ?>

<?php include 'layout.php' ?>