<?php
  $c = (isset($_GET['c']) && $_GET['c'] != '') ? 'and category="' . $_GET['c'] .'"' : '';
?>
<?php foreach(confession()->list("Id!=0 $c order by Id desc") as $row) {
  // This is to limit the message and add ...
  $limtMessage = strlen($row->message) > 200 ? substr($row->message,0,200)."..." : $row->message;
?>
  <div class="col-lg-4 col-md-6 col-sm-6">
      <div class="card card-stats">
          <div class="card-header card-header-success card-header-icon"
              onclick="location.href='process.php?action=view&id=<?=$row->Id;?>'">
              <div class="card-icon" style="height:10px">
                  <div style="margin-top:-10px;"><?=$row->category;?></div>
              </div>
              <p class="card-category">3 hours ago</p>
              <p style="color:black;text-align:justify;font-weight:bold;"><?=$row->title;?></p>
              <p style="color:black;text-align:justify">
                  <?=$limtMessage;?>
              </p>
          </div>
          <div class="card-footer">
              <div class="stats">
                  <i class="material-icons">favorite</i>
                  <a href="#"> 5 Relates</a>
              </div>

              <div class="stats">
                  <i class="material-icons">chat</i>
                  <?=$row->view;?> comments
              </div>

              <div class="stats">
                  <i class="material-icons">visibility</i>
                  <?=$row->view;?> views
              </div>

          </div>
      </div>
  </div>
<?php } ?>
