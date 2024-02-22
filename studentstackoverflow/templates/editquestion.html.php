
<section class="admin">
  <div class="admin-text">    
  <div class="format">

<form action="" method="post">
    <input type="hidden" name="questionid" value="<?=$question['id'];?>">
    <h3>    <label for='questiontext'>Edit your question here:<br></label> </h3>  <br>
</br><textarea name="questiontext" rows="5" cols="40">
        <?=$question['questiontext']?>
</textarea>
<center> <input type="submit" name="submit" value="Save"> </center>
</form>