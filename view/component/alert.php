<?php if(isset($_SESSION['alert_message']) && isset($_SESSION['alert_type'])) : ?>
  
  <div class="alert alert-<?=$_SESSION['alert_type']?>" role="alert">
    <?=$_SESSION['alert_message']?>
  </div>

<?php endif; ?>
<?php unset($_SESSION['alert_message']); 
unset($_SESSION['alert_type']);
?>
