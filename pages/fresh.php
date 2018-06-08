<?php
$alias = $_SESSION['alias_session'];
// Category name
$category_name = category();
// Different colors
$head_color = button_color();

?>
<?php foreach(confession()->list("Id!=0 order by datetime desc") as $row) {
  // This is to limit the message and add ...
  $limitMessage = strlen($row->message) > 200 ? substr($row->message,0,200)."..." : $row->message;
?>
  <div class="col-lg-4 col-md-6 col-sm-6" id="your_div">
      <div class="card card-stats">
          <div class="card-header card-header-success card-header-icon"
              onclick="location.href='process.php?action=view&id=<?=$row->Id;?>'">
              <div class="card-icon" style="height:10px; <?=$head_color[$row->category];?>">
                  <div style="margin-top:-10px;"><?=$category_name[$row->category];?></div>
              </div>
              <p class="card-category"><?=timeElapse($row->datetime);?></p>
              <p style="color:black;text-align:justify;font-weight:bold;"><?=$row->title;?></p>
              <p style="color:black;text-align:justify">
                  <?=$limitMessage;?> <br>
                  <div style="color:gray;font-weight:bold;font-style:italic;">- <?=$row->alias;?></div>
                  <div style="color:gray;font-style:italic;"><?=$row->location;?></div>
              </p>
          </div>
          <div class="card-footer">
              <?php if (relate()->count("cId=$row->Id and alias='$alias'") == 0) {?>
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

              <div class="stats" onclick="location.href='index.php?view=display&id=<?=$row->Id?>#comment'">
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

<script>
$(window).scroll(function() {
    if($(window).scrollTop() == $(document).height() - $(window).height()) {
           // ajax call get data from server and append to the div
           new_element.hide().appendTo('#your_div').fadeIn(); $(window).scrollTop($(window).scrollTop()-1);
    }
});
</script>
