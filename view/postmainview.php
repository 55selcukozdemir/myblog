<?php include 'general/header.php' ?>

    <?php foreach($post as $p): ?>
     <div> 
        <h2><?php echo $p['title'] ?></h2>
        <p><?php echo $p['text'] ?></p>
        <br>
        <p><?php echo $p['athor'] ?></p>
    </div>
    <?php endforeach; ?>

    
    <div>
        <form action="<?php echo '../write/' . $p['id'] ?>" method="post">
            <button class="button1" >Düzenle</button>
        </form>
        
        <form action="<?php 'delete/'.$p['id'] ?>" method="post">
            <button class="button2">Sil</button>
        </form>
    </div>



<?php include 'general/footer.php'?>