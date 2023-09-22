<?php 
$title = 'titulo';
$body_text = 'cuerpo';
?>
<form action="pdf_printer.php" method="post">
<input type="hidden" name="title" value="<?php echo $title; ?>"/>
<input type="hidden" name="body_text" value="<?php echo $body_text; ?>"/>
<input type="submit" name="submit" value="Print">
</form> 
