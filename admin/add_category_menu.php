<?php include 'header.php';?>
<?php include 'function.php'?>
    <!-- container section start -->

    <div class="row">
        <div class="col-lg-6">
            <section class="panel">
                <header class="panel-heading">

                </header>
                <div class="panel-body">
                    <form role="form"  method="post" action="add_category_menu_function.php"  enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Hotel</label>
                            <select class="form-control input-lg m-bot15" name="hotel">
                                <?php
                                $hotel = getHotel();
                                while($row = mysqli_fetch_array($hotel)){
                                    ?><option value = <?php  echo $row[0]; ?>><?php echo $row[1];?></option><?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Menu</label>
                            <select class="form-control input-lg m-bot15" name="menu">
                                <?php
                                $hotel = getMenu();
                                while($row = mysqli_fetch_array($hotel)){
                                    ?><option value = <?php  echo $row[0]; ?>><?php echo $row[6];?></option><?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Category Name</label>
                            <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Enter category Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Description</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="des" placeholder="Description">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <input type="file" name="icon" id="exampleInputFile">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </section>
        </div>
    <!-- container section start -->
<?php include 'footer.php';?>