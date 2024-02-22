<section class="admin">
  <div class="admin-text">    

  <div class="format">


<form action="" method="post">
<center> <h3>   <label for='questiontext'> Type your question here: <br></label></center> </h3>
    <textarea name="questiontext" rows="3" cols-"40"></textarea>

    <select name="students">
        <option value="">Select a student<br></option>
        <?php foreach ($students as $student):?>
        <option value="<?=htmlspecialchars($student['id'], ENT_QUOTES, 'UTF-8'); ?>">
        <?=htmlspecialchars($student['name'], ENT_QUOTES, 'UTF-8'); ?>
        </option>
        <?php endforeach;?>
    </select>

    <select name="module">
       <option value=""> Select a module<br></option>
        <?php foreach ($modules as $module):?>
        <option value="<?=htmlspecialchars($module['id'], ENT_QUOTES, 'UTF-8'); ?>">
        <?=htmlspecialchars($module['moduleName'], ENT_QUOTES, 'UTF-8'); ?>
        </option>
        <?php endforeach;?>
    </select> 

    <center><input type="submit" name="submit" value="Add"> </center>


</form>