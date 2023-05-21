<?php
include_once 'header.php';
include_once 'sidebar.php';
?>
<div class="content-wrapper">
<?php
      error_reporting(0);
      $belajar = $_GET['krupuk'];
      if ($belajar == 'home.php') {
        include_once 'home.php';
      } elseif (!empty($belajar)) {
        include_once '' . $belajar . '.php';
      } else {
        include_once 'home.php';
      }
?>
</div>

<?php
include_once 'footer.php';
?>