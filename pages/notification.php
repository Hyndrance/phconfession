<?php
$recepient = $_SESSION['alias_session'];
?>

<div class="card card-plain">
  <ul style="color:black; padding-left: 0px !important;">
    <?php foreach(notification()->list("recepient like '%$recepient' order by Id desc") as $row) {?>
      <li onclick="location.href='process.php?action=delete_notification&id=<?=$row->Id?>&confessionId=<?=$row->confessionId;?>&commentId=<?=$row->commentId;?>'"
				style="list-style-type:none; margin-bottom: 10px; background-color: #f5f5f5; padding: 10px; border-radius: 5px;"> <div class="timeline-heading">
				<span style="color:gray;font-style:italic;font-size:12px; "><?=timeElapse($row->datetime);?></span>
      </div> <?=$row->message;?>
			<br>
			</li>
    <?php } ?>
  </ul>
</div>
