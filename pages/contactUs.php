<div class="col-md-12">
    <div class="card">
        <div class="card-header card-header-primary"  style="<?=button_color()[6]?>">
            <h4 class="card-title">Help up improve</h4>
            <p class="card-category">Please give us any suggestions or comments on the PH Confession. Do not worry, we are open to your suggestions</p>
        </div>
        <div class="card-body">
            <form method="POST" action="process.php?action=contactUs">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-label-floating">Email (Optional)</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Comments / Suggestions</label>
                            <div class="form-group">
                                <textarea class="form-control" rows="5" name="message"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary pull-right"   style="<?=button_color()[6]?>">Submit</button>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>
