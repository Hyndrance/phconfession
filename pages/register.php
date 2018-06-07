<br><br><br>&nbsp;
<div class="col-md-4 col-sm-6 ml-auto mr-auto">
    <div class="card">
        <div class="card-header card-header-primary text-center" style="<?=button_color()[6]?>">
            <h4 class="card-title">Create a Secret Alias</h4>
            <p class="card-category">Do not worry, we won't ask any detail about you.</p>
        </div>
        <div class="card-body">
            <form method="POST" action="process.php?action=register">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-label-floating">Alias:</label>
                            <input type="text" name="alias" class="form-control" required>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary pull-right" style="<?=button_color()[6]?>">Let's go</button>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>
