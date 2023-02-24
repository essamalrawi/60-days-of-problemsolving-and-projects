<?php 
/*
  echo round((disk_total_space("/") / 1099511627776), 2) . " Terabyte" . "<br>";
  echo round((disk_total_space("/run/media/essam/media") / 1099511627776), 2) . " Terabyte";
  echo filesize("/home/essam/2023-02-10 13-54-55.mp4"). "<br>";
  echo round((filesize("/home/essam/2023-02-10 13-54-55.mp4") / 1048576), 2). "<br>";

function change_permissions($x) {
  if (is_dir($x)) {
    echo "This Is Directory And Only Files Allowed"; 
    return 0;
  }
  if(pathinfo($x, PATHINFO_EXTENSION) == "txt")  {
    chmod($x, 0700);
    echo "Permissions Changed";
  } else {
    echo "File Extension Is Not Txt";
  }
}


 change_permissions("");

  //$x = pathinfo("f.php")["extension"];


  $old = "Osamaa";
  $new = "Elzero";
  $str = implode("", file('elzero.txt'));
  $handle = fopen("elzero.txt","w");
  $str=str_replace($old ,$new ,$str);

  fwrite($handle, $str, strlen($str));
  fclose($handle);
  //Don't forget to create your file.txt
*/


?>