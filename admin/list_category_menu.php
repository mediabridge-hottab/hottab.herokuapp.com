<?php include 'header.php';?>
<?php include 'function.php'?>
    <!-- container section start -->
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    List category menu.
                </header>

                <table class="table table-striped table-advance table-hover">
                    <tbody>
                    <tr>
                        <th><i class="icon_profile"></i> icon</th>
                        <th><i class="icon_calendar"></i> hotel_id</th>
                        <th><i class="icon_mail_alt"></i> menu_id</th>
                        <th><i class="icon_pin_alt"></i> name</th>
                        <th><i class="icon_mobile"></i> Desciption</th>
                        <th><i class="icon_cogs"></i> Action</th>
                    </tr>
                    <?php
                        $cate = getAllCate();
                        while($row = mysqli_fetch_array($cate)){
                    ?>
                    <tr>
                        <td><img width="50px" height="30px" src="img/icon/<?php echo $row[2] ?>"></td>
                        <td><?php echo $row[1] ?></td>
                        <td><?php echo $row[11] ?></td>
                        <td><?php echo $row[13] ?></td>
                        <td><?php echo $row[14] ?></td>
                        <td>
                            <div class="btn-group">
                                <a class="btn btn-primary" href="edit_cate.php?id=<?php echo $row[0] ?>"><i class="icon_plus_alt2"></i></a>

                                <a class="btn btn-danger" href="delete_cate.php?id=<?php echo $row[0] ?>"><i class="icon_close_alt2"></i></a>
                            </div>
                        </td>
                    </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </section>
        </div>
    </div>
    <!-- container section start -->
<?php include 'footer.php';?>