<?php
session_start();
?>
<form action="controler.php" method="post">
    <div>
        <label for="">Donnez la valeur de a</label>
        <input type="text" name="a" value="<?php 
            if(isset($_SESSION['post']['a']) && (!isset($_SESSION['error']['a']))) echo $_SESSION['post']['a']?>">
        <span style="color:red;">
            <?php if(isset($_SESSION['error']['a'])):echo $_SESSION['error']['a'] ?>
            <?php 
            endif;
            ?>
        </span>
    </div>
    <div>
        <label for="">Donnez la valeur de b </label>
        <input type="text" name="b" value="<?php 
        if(isset($_SESSION['post']['b']) &&(!isset($_SESSION['error']['b']))) echo $_SESSION['post']['b'] ?>">
        <span style="color:red;">
            <?php if(isset($_SESSION['error']['b'])):echo $_SESSION['error']['b'] ?>
            <?php 
            endif;
        ?>
        </span>
    </div>
    <div>
        <label for="">Donnez la valeur de c</label>
        <input type="text" name="c" value="<?php
        if(isset($_SESSION['post']['c']) && (!isset($_SESSION['error']['c']))) echo $_SESSION['post']['c']?>">
        <span style="color:red;">
            <?php if(isset($_SESSION['error']['c'])):echo  $_SESSION['error']['c']?>
            <?php 
            endif;
            ?>
        </span>
    </div>
        <button type="submit" name="ok">Envoyer</button>
</form>
<?php 
if(isset($_SESSION['error'])){
    unset($_SESSION['error']);
}
if(isset($_SESSION['post'])){
    unset($_SESSION['post']);
}

?>