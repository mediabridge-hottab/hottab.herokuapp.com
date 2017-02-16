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
                        <th><i class="icon_calendar"></i> hotel_id</th>
                        <th><i class="icon_pin_alt"></i> name</th>
                        <th><i class="icon_mobile"></i> Desciption</th>
                        <th><i class="icon_cogs"></i> Action</th>
                    </tr>
                    <?php
                    $menu = getALLMenu();
                    while($row = mysqli_fetch_array($menu)){
                        ?>
                        <tr>
                            <td><?php echo $row[1] ?></td>
                            <td><?php echo $row[6] ?></td>
                            <td><?php echo $row[7] ?></td>
                            <td>
                                <div class="btn-group">
                                    <a class="btn btn-primary" href="edit_menu.php?id=<?php echo $row[0] ?>"><i class="icon_plus_alt2"></i></a>

                                    <a class="btn btn-danger" href="delete_menu.php?id=<?php echo $row[0] ?>"><i class="icon_close_alt2"></i></a>
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