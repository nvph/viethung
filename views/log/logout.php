<?php
   session_start();
   if(session_destroy()) {
      header("Location: index.php?controller=pages&action=home");
   }
?>