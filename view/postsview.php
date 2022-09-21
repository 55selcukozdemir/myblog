<?php include 'general/header.php'?>

<?php foreach($posts as $post): ?>

    <div> 
        <a href="<?php echo 'read/' . $post['id'] ?>"><h2><?php echo $post['title'] ?></h2></a>
        <p><?php echo $post['text'] ?></p>
    </div>

<?php endforeach; ?>


<?php include 'general/footer.php'?>