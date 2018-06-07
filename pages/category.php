<div class="col-md-12">
    <div class="card">
        <div class="card-header card-header-primary" style="<?=button_color()[6]?>">
            <h4 class="card-title ">Category</h4>
            <p class="card-category"> Here are topics of confessions </p>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <tbody>
                      <?php foreach(category() as $key => $value) {
                      ?>
                        <tr>
                            <td>
                                <a href="index.php?c=<?=$key;?>"><?=$value;?></a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
