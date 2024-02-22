
<section class="admin">
  <div class="admin-text">    
  <div class="format">

<form action="" method="post">
    <input type="hidden" name="id" value="<?=$student['id'];?>">
    <h3>    <label for='id'>Edit your name here:<br></label> </h3>  <br>
</br><textarea name="name" rows="5" cols="40">
        <?=$student['name']?>
</textarea>

<center> <input type="submit" name="submit" value="Save"> </center>
</form>