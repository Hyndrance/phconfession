<?php
$Id =  $_GET['id'];
$conf = confession()->get("Id=$Id");
?>
<div class="card card-testimonial">
		<div class="icon">
			<i class="material-icons">format_quote</i>
		</div>
		<div class="card-body">
			<h5 class="card-title">
        <b><?=$conf->title;?></b> <br>
          (<?=$conf->category;?>)
				</h5>
        <br>
			<h5 class="card-description">
        <?=$conf->message;?>
				</h5>
		</div>
    <div class="card-footer">
        <div class="stats">
            <i class="material-icons">favorite</i> Relate
        </div>
    </div>
	</div>

  <div class="card card-plain">
          <ul style="color:black;text-align:justify">
            <?php foreach(comment()->list("cId=$Id") as $row) {?>
              <li> <div class="timeline-heading">
                <span class="badge badge-pill badge-success"><?=$row->alias;?></span>
              </div> <?=$row->comment;?> <span style="color:gray;font-weight:bold;font-style:italic;">-<?=timeElapse($row->datetime);?></span></li>
            <?php } ?>
          </ul>

					<form method="post" action="process.php?action=comment&id=<?=$conf->Id;?>">
              <div class="col-md-12">
                  <div class="form-group">
                      <label class="bmd-label-floating">Leave a comment here</label>
                      <input type="text" name="comment" class="form-control">
                  </div>
									<button type="submit" class="btn btn-primary pull-right">Submit Comment</button>
              </div>

  </div>
