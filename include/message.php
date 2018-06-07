<?php  if (isset($_SESSION['close_notif']) && ($_SESSION['close_notif'] = $_SESSION['alias_session']) ) {} else {?>
<?php foreach(notification()->list("status=1") as $row) {?>
  <div class="alert alert-<?=$row->type;?> alert-with-icon" data-notify="container">
      <i class="material-icons" data-notify="icon">add_alert</i>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close" onclick="close_notif();">
          <i class="material-icons">close</i>
      </button>
      <span data-notify="message"><?=$row->message;?></span>
  </div>
<?php } }?>

<script>
function close_notif() {
  var xhttp = new XMLHttpRequest();
    xhttp.open("GET", "process.php?action=close_notif", true);
    xhttp.send();
}
</script>
