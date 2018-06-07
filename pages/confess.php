<div class="col-md-12">
    <div class="card">
        <div class="card-header card-header-primary" style="<?=button_color()[6]?>">
            <h4 class="card-title">Tell us your confession</h4>
            <p class="card-category">Don't worry! I won't find you. I will just listen.</p>
        </div>
        <div class="card-body">
            <form method="POST" action="process.php?action=confess">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="bmd-label-floating">Title</label>
                            <input type="text" name="title" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="bmd-label-floating">Select Category</label>
                            <select class="form-control" name="category">
                              <?php foreach(category() as $key => $value) {
                              ?>
                                <option value="<?=$key?>"><?=$value;?></option>
                              <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>What is it that you want to confess?</label>
                            <div class="form-group">
                                <textarea class="form-control" rows="5" name="message" required></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                          <label class="bmd-label-floating">Location: (optional)</label>
                          <input type="text" name="location" class="form-control">
                      </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary pull-right"  style="<?=button_color()[6]?>">Submit</button>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>
