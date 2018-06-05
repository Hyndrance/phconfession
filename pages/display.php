<?php
$Id =  $_GET['id'];
$conf = confession()->get("Id=$Id");
?>
<div class="col-md-12">
    <div class="card card-chart">
        <div class="card-header card-header-warning">
            <div class="ct-chart" id="websiteViewsChart">
                  <h4 class="card-title "><?=$conf->title;?></h4>
                  <p class="card-category"> <?=$conf->category;?> </p>
            </div>
        </div>
        <div class="card-body">
            <h4 class="card-title"><?=$conf->message;?></h4>
            <p class="card-category">campaign sent 2 days ago</p>
        </div>
        <div class="card-footer">
            <div class="stats">
                <i class="material-icons">favorite</i> Relate
            </div>
        </div>
    </div>
</div>

<div class="col-md-12">
    <div class="card card-plain">
        <div class="card-header card-header-success card-header-icon">
            <div class="card-icon" style="height:10px">
                <div style="margin-top:-10px;">Comments</div>
            </div>
            <br>
            <p style="color:black;text-align:justify">
              This is a sample static comments
            </p>
        </div>
    </div>
</div>
