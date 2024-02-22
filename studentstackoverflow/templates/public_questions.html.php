<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>questions public</title>
     
      
</head>
<body>

    <section class="computing">
      
        
<h2><p><?=$totalQuestions?> questions have been submitted to the Student Stack OverFlow.</p></h2> <br>

<?php
 foreach($questions as $question): ?>
    <blockquote>
        <?=htmlspecialchars($question['questiontext'], ENT_QUOTES, 'UTF-8')?>
        <br/><?=htmlspecialchars($question['moduleName'], ENT_QUOTES, 'UTF-8')?>

        (by <a href="mailto:<?=htmlspecialchars($question['email'], ENT_QUOTES, 'UTF-8');?>">
        <?=htmlspecialchars($question['name'], ENT_QUOTES,'UTF-8'); ?></a>) 

        </form>
</blockquote>
    <?php endforeach;?> 

    </div></div></section>
</body>
</html>