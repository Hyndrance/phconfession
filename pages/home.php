<?php
  $c = (isset($_GET['c']) && $_GET['c'] != '') ? 'and category="' . $_GET['c'] .'"' : '';
?>
<?php foreach(confession()->list("Id!=0 $c order by Id desc") as $row) {
  // This is to limit the message and add ...
  $limitMessage = strlen($row->message) > 200 ? substr($row->message,0,200)."..." : $row->message;
?>
  <div class="col-lg-4 col-md-6 col-sm-6">
      <div class="card card-stats">
          <div class="card-header card-header-success card-header-icon"
              onclick="location.href='process.php?action=view&id=<?=$row->Id;?>'">
              <div class="card-icon" style="height:10px">
                  <div style="margin-top:-10px;"><?=$row->category;?></div>
              </div>
              <p class="card-category"><?=timeElapse($row->datetime);?></p>
              <p style="color:black;text-align:justify;font-weight:bold;"><?=$row->title;?></p>
              <p style="color:black;text-align:justify">
                  <?=$limitMessage;?> <br>
                  <div style="color:gray;font-weight:bold;font-style:italic;">- <?=$row->alias;?></div>
              </p>
          </div>
          <div class="card-footer">
              <?php if (relate()->count("cId=$row->Id") == 0) {?>
                <div class="stats" id="onclick_<?=$row->Id;?>" onclick="loadDoc_<?=$row->Id;?>()">
                      <i class="material-icons" id="icon_<?=$row->Id;?>">favorite_border</i>
                      <span id="relate_<?=$row->Id;?>"><?=relate()->count("cId=$row->Id");?> </span>&nbsp;Relates
                  </div>
              <?php } else { ?>
                <div class="stats">
                    <i class="material-icons">favorite</i>
                    <span id="relate_<?=$row->Id;?>"><?=relate()->count("cId=$row->Id");?> </span>&nbsp;Relates
                </div>
              <?php } ?>

              <div class="stats">
                  <i class="material-icons">chat</i>
                  <?=comment()->count("cId=$row->Id");?> comments
              </div>

              <div class="stats">
                  <i class="material-icons">visibility</i>
                  <?=$row->view;?> views
              </div>
          </div>
      </div>
  </div>
   <script>
       function loadDoc_<?=$row->Id?>() {
         var xhttp = new XMLHttpRequest();
           xhttp.open("GET", "process.php?action=add_relate&id=<?=$row->Id?>", true);
           xhttp.send();

           var relate = document.getElementById("relate_<?=$row->Id;?>").innerHTML;
           // Add one relate
           document.getElementById("relate_<?=$row->Id;?>").textContent= Number(relate) + 1;
           // Add one relate
           document.getElementById("icon_<?=$row->Id;?>").textContent= 'favorite';
           // disable onclick
           document.getElementById("onclick_<?=$row->Id;?>").onclick="";
       }
        </script>
<?php } ?>
