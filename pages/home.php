<?php
$c = (isset($_GET['c']) && $_GET['c'] != '') ? 'and category="' . $_GET['c'] .'"' : '';

?>

<?php foreach(confession()->list("Id!=0 $c order by Id desc") as $row) {
?>
    <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header card-header-success card-header-icon">
                <div class="card-icon" style="height:10px">
                    <div style="margin-top:-10px;"><?=$row->category;?></div>
                </div>
                <p class="card-category">3 hours ago</p>
                <p style="color:black;text-align:justify">
                    <?=$row->message;?>
                </p>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="material-icons">favorite</i>
                    <a href="#pablo">Like</a>
                </div>
            </div>
        </div>
    </div>

  <?php } ?>
