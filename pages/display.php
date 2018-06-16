<?php
$Id =  $_GET['id'];
$conf = confession()->get("Id=$Id");
// Category name
$category_name = category();

?>
<div class="card card-testimonial">
		<div class="icon">
			<i class="material-icons">format_quote</i>
		</div>
		<div class="card-body">
			<h5 class="card-title">
        <b><?=$conf->title;?></b> <br>
          (<?=$category_name[$conf->category];?>)
				</h5>
        <br>
				<p style="color:black;text-align:center">
						<?=$conf->message;?> <br>
						<div style="color:gray;font-weight:bold;font-style:italic;">- <?=$conf->alias;?></div>
						<div style="color:gray;font-style:italic;"><?=$conf->location;?></div>
				</p>
		</div>
    <div class="card-footer">
			<!--
        <div class="stats">
					<br>
						<iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fphconfession.com%2Findex.php%3Fview%3Ddisplay%26id%3D<?=$conf->Id;?>&layout=button_count&size=small&mobile_iframe=true&width=69&height=20&appId"
							width="69" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
				</div>
			-->
    </div>
	</div>

  <div class="card card-plain">
          <ul style="color:black; padding-left: 0px !important;">
            <?php foreach(comment()->list("cId=$Id") as $row) {?>
              <li id="<?=$row->Id;?>" style="list-style-type:none; margin-bottom: 10px; background-color: #f5f5f5; padding: 10px; border-radius: 5px;"> <div class="timeline-heading">
                <span class="badge badge-pill badge-success"><?=$row->alias;?></span>
								<span style="color:gray;font-style:italic;font-size:12px; "><?=timeElapse($row->datetime);?></span>
              </div> <?=get_mention($row->comment);?>
							<br>
							</li>
            <?php } ?>
          </ul>

					<form method="post" action="process.php?action=comment&id=<?=$conf->Id;?>" autocomplete="off">
              <div class="col-md-12">
									<?php $link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
                  <div class="form-group" style="background-color:#f9f9f9; padding: 15px; border-radius: 5px; margin-bottom: 10px;">
                      <label class="bmd-label-floating">Leave a comment here</label>
											<input type="hidden" name="link" value="<?=$link;?>">
                      <input type="text" id="comment" name="comment" class="form-control" required/>
											<button type="submit" class="btn btn-primary"  style="<?=button_color()[6]?> margin-top: 15px;">Post</button>
                  </div>
              </div>
  </div>
