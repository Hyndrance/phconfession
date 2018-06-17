<?php
  $error = (isset($_GET['error']) && $_GET['error'] != '') ? $_GET['error'] : '';
?>
<br><br><br>&nbsp;
<div class="col-md-4 col-sm-6 ml-auto mr-auto">

  <?php if ($error) { ?>
    <div class="alert alert-danger alert-with-icon" data-notify="container">
        <i class="material-icons" data-notify="icon">error_outline</i>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close" onclick="close_notif();">
            <i class="material-icons">close</i>
        </button>
        <span data-notify="message"><?=$error;?></span>
    </div>
  <?php }?>
    <div class="card">
        <div class="card-header card-header-primary text-center" style="<?=button_color()[6]?>">
            <h4 class="card-title">Create Your Secret Alias</h4>
            <p class="card-category">Do no worry! We won't ask any detail about you.<br>
              Already have an alias? <a href="?view=login">Login here</a>.</p>
        </div>
        <div class="card-body">
            <form method="POST" action="process.php?action=register" autocomplete="off">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-label-floating">Create an Alias: <br><i>(Please use only one word)</i></label>
                            <input type="text" name="alias" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-label-floating">Create Password:</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-label-floating">Re-type Password:</label>
                            <input type="password" name="password2" class="form-control" required>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary pull-right" style="<?=button_color()[6]?>">Submit</button>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>
