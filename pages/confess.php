<div class="col-md-12">
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title">Tell us your confession</h4>
            <p class="card-category">Don't worry, get that off your chest</p>
        </div>
        <div class="card-body">
            <form method="POST" action="process.php?action=confess">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-label-floating">Select Category</label>
                            <select class="form-control" name="category">
                              <?php foreach(category() as $row) {?>
                                <option><?=$row;?></option>
                              <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>What is it that you want to tell?</label>
                            <div class="form-group">
                                <textarea class="form-control" rows="5" name="message"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary pull-right">Confess</button>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>
