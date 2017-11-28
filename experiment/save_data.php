<?php
  // the $_POST[] array will contain the passed in filename and data
  $filename = "data/".$_POST['filename'];
  $data = $_POST['filedata'];
  // write the file to disk
  file_put_contents($filename, $data);
?>