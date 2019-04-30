<?php
   function showError(  )
   {
      die("Error " . mysql_errno(  ) . " : " . mysql_error(  ));
   }
?>
