<?php
  require_once('core.php');
  session_destroy();
  header('Location: '.$http_referer);
?>