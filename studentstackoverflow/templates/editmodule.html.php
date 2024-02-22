
<section class="admin">
  <div class="admin-text">    
  <div class="format">

<form action="" method="post">
    <input type="hidden" name="moduleid" value="<?=$module['id'];?>">
    <h3>    <label for='moduleName'>Edit your module here:<br></label> </h3>  <br>
</br><textarea name="moduleName" rows="5" cols="40">
        <?=$module['moduleName']?>
</textarea>
<center> <input type="submit" name="submit" value="Save"> </center>
</form>