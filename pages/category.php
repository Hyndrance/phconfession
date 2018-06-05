<div class="col-md-12">
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title ">Category</h4>
            <p class="card-category"> Here are topics of confessions </p>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <tbody>
                      <?php foreach(category() as $row) {
                      ?>
                        <tr>
                            <td>
                                <a href="index.php?c=<?=$row;?>"><?=$row;?></a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
