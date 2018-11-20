<?php
  switch($_SERVER['REQUEST_URI']) {
    case "/":
      include "index.html";
      break;
    case "/kontakt":
      include "kontakt.php";
      break;
    case "/impressum":
      include "impressum.html";
      break;
    default: 
      include "404.html";
  }
?>