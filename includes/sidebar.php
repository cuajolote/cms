
<div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>
                    <form action="search.php" method='post'>
                    <div class="input-group">
                        <input name='search' type="text" class="form-control">
                        <span class="input-group-btn">
                            <button name ='submit' class="btn btn-default" type="submit">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    </form>
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-10">
                            <ul class="list-unstyled">
                                <?php 
                                    // Displaying the data from the DB into the navigation
                                    $query = 'SELECT * FROM categories'; 
                                    $selectCategoriesSidebarQuery = mysqli_query($connection, $query);

                                    while ($rowCategories = mysqli_fetch_assoc($selectCategoriesSidebarQuery)) {
                                    $catTitle = $rowCategories['cat_title'];
                                    echo "<li><a href='#'>$catTitle</a></li>";
                                }
                
                ?>
                            </ul>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <?php include "widget.php"?>

            </div>