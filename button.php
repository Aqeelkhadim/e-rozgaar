<!-- Delete -->
<div class="modal fade" id="del<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Delete</h4></center>
            </div>
            <div class="modal-body">
                <?php
                $del = mysqli_query($conn, "select * from users where id='" . $row['id'] . "'");
                $drow = mysqli_fetch_array($del);
                ?>
                <div class="container-fluid">
                    <h5>
                        <center>Name: <strong><?php echo $drow['name']; ?></strong></center>
                    </h5>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span
                            class="glyphicon glyphicon-remove"></span> Cancel
                </button>
                <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><span
                            class="glyphicon glyphicon-trash"></span> Delete</a>
            </div>

        </div>
    </div>
</div>
<!-- /.modal -->

<!-- Edit -->
<div class="modal fade" id="edit<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit</h4></center>
            </div>
            <div class="modal-body">
                <?php
                $edit = mysqli_query($conn, "select * from users where id='" . $row['id'] . "'");
                $erow = mysqli_fetch_array($edit);
                ?>
                <div class="container-fluid">
                    <form method="POST" action="edit.php?id=<?php echo $erow['id']; ?>">
                        <div class="row">
                            <div class="col-lg-2">
                                <label style="position:relative; top:7px;">Name:</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" name="name" class="form-control" value="<?php echo $row['name']; ?>">
                            </div>
                        </div>
                        <div style="height:10px;"></div>
                        <div class="row">
                            <div class="col-lg-2">
                                <label style="position:relative; top:7px;">Email:</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" name="email" class="form-control"
                                       value="<?php echo $row['email']; ?>">
                            </div>
                        </div>
                        <div style="height:10px;"></div>
                        <div class="row">
                            <div class="col-lg-2">
                                <label style="position:relative; top:7px;">Password:</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" name="pass" class="form-control" value="<?php echo $row['pass']; ?>">
                            </div>
                        </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span
                            class="glyphicon glyphicon-remove"></span> Cancel
                </button>
                <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-check"></span> Save
                </button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- /.modal -->