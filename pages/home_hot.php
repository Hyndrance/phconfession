<style>
span {
    display:none;
}
span.display {
	display: inline-block;
}
</style>

<?php
    // $alias = $_SESSION['alias_session'];
    $c = (isset($_GET['c']) && $_GET['c'] != '') ? 'and category="' . $_GET['c'] .'"' : '';
    $s = (isset($_GET['s']) && $_GET['s'] != '') ? 'and (title like "%' . $_GET['s'] .'%" or alias like "%' . $_GET['s'] .'%" or message like "%' . $_GET['s'] .'%")' : '';

    // Category name
    $category_name = category();
    // Different colors
    $head_color = button_color();
?>

<?php
 foreach(confession()->list("Id!=0 $c $s order by lastChange desc limit 6") as $row) {
  // This is to limit the message and add ...
  $limitMessage = strlen($row->message) > 200 ? substr($row->message,0,200)."..." : $row->message;
?>
  <span class="col-lg-3 col-md-6 col-sm-6" id="your_div" style="min-width: 33%;">
      <div class="card card-stats">
          <div class="card-header card-header-success card-header-icon"
              onclick="location.href='process.php?action=view&id=<?=$row->Id;?>'">
              <div class="card-icon" style="height:10px; <?=$head_color[$row->category];?>">
                  <div style="margin-top:-10px;"><?=$category_name[$row->category];?></div>
              </div>
              <p class="card-category"><?=timeElapse($row->datetime);?></p>
              <div style="height:180px;">
                <p style="color:black;text-align:justify;font-weight:bold;"><?=$row->title;?></p>
                <p style="color:black;text-align:justify;">
                    <?=$limitMessage;?>
                </p>
              </div>
              <div style="height:40px;">
                <div style="color:gray;font-weight:bold;font-style:italic;">- <?=$row->alias;?></div>
                <div style="color:gray;font-style:italic;"><?=$row->location;?></div>
              </div>
          </div>
          <div class="card-footer">
                <div class="stats" id="onclick_<?=$row->Id;?>" onclick="relateFun_<?=$row->Id;?>()">
                      <i class="material-icons" id="icon_<?=$row->Id;?>">favorite_border</i>
                      <span id="relate_<?=$row->Id;?>"><?=relate()->count("cId=$row->Id");?> </span>&nbsp;Relates
                  </div>

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
       <script>
           function relateFun_<?=$row->Id?>() {
             var xhttp = new XMLHttpRequest();
               xhttp.open("GET", "process.php?action=add_relate&id=<?=$row->Id?>", true);
               xhttp.send();

               var relate = document.getElementById("relate_<?=$row->Id;?>").innerHTML;
               // Add one relate
               document.getElementById("relate_<?=$row->Id;?>").textContent= Number(relate) + 1;
               // Add one relate
               document.getElementById("icon_<?=$row->Id;?>").textContent= 'favorite';
               // Add one relate
               document.getElementById("icon_<?=$row->Id;?>").style= 'color:red;';
               // disable onclick
               document.getElementById("onclick_<?=$row->Id;?>").onclick="";
           }
       </script>
  </span>
<?php }
// End loop
?>

<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>

<script>
$(function () {
    $("span").slice(0, 18).addClass('display');
    $("#loadMore").on('click', function (e) {
        e.preventDefault();
        $("span:hidden").slice(0, 9).addClass('display');
        if ($("span:hidden").length == 0) {
            $("#load").fadeOut('slow');
        }
    });
});

$(window).scroll(function () {
    if ($(this).scrollTop() > 50) {
        $('.totop a').fadeIn();
    } else {
        $('.totop a').fadeOut();
    }
});
</script>
