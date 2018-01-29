<?php 
if (!isset($_SESSION['isLoged'])) {
  header("location:login");
}
