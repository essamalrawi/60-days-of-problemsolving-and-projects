<?php 
/*
  date_default_timezone_set("Asia/Riyadh");
  echo date_default_timezone_get() . "<br>";

  date_default_timezone_set("Africa/Cairo");
  $date = date_create("2005-10-02");

  date_add($date, date_interval_create_from_date_string("15 hour 15 minute 15 second"));
  echo date_format($date, "Y, F, l, dS H:s:m") ; 

  $date = date_create("1990-10-01");
  date_default_timezone_set("Africa/Cairo");
*/



  setcookie("site[layout]", "Boxed", strtotime("+2 month 5 days"));
  setcookie("site[font]", "Swat", strtotime("+2 month 5 days"));
  setcookie("site[color]", "Blue",strtotime("+2 month 5 days") );

  echo "<pre>";
  print_r($_COOKIE); 
  echo "</pre>";

  echo "Your Color Is blue And Your Font Is " . $_COOKIE["site"]["font"];
