<?php include 'general/header.php'?>

<form action="<?php echo $link ?>" method="post">
    <label for="fpost">Başlık</label>
    <br>
    <input type="text" name="ftitle" value="<?php echo $post["title"]  ?>"> 
    <br>
    <label for="fpost">Yazı</label>
    <br>
    <textarea name="ftext"><?php echo $post["text"]?></textarea>
    <br>
    <label for="fpost">Yazar</label>
    <br>
    <input type="text" name="fathor" value="<?php echo $post["athor"]  ?>">
    <br><br>
    <button class="button3" >Gönder</button>
</form>


<?php include 'general/footer.php' ?>