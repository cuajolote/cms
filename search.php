<?php include "includes/database.php"?>
<?php include "includes/header.php"?>
<body>

    <!-- Navigation -->
    <?php include "includes/navigation.php"?>
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="page-header">
                     Page Heading
                     <small>Secondary Text</small>
                </h1>

                <?php 
                //Searches for a post and prints it on the page
                    if (isset($_POST['submit'])) 
                    {
                        $search = $_POST['search'];
                        mysqli_real_escape_string($search);
                        
                        $query = "SELECT * FROM posts WHERE post_tags LIKE '%$search%'";
                        $searchQuery = mysqli_query($connection,$query);

                        if (!$searchQuery) 
                        {
                            die('Query failed' . mysqli_error($connection));
                        }

                        $count = mysqli_num_rows($searchQuery);
                        if ($count == 0) 
                        {
                         echo "<h2>NO RESULTS FOUND</h2>";
                        }   else 
                        {
                            while ($searchRow = mysqli_fetch_assoc($searchQuery)) 
                            {
                                $postTitle = $searchRow['post_title'];
                                $postAuthor = $searchRow['post_author'];
                                $postContent = $searchRow['post_content'];
                                $postDate = $searchRow['post_date'];
                                $postImage = $searchRow['post_image'];
                                
                                echo "<h2>
                                <a href='#'>$postTitle</a>
                                </h2>
                                <p class='lead'>
                                by <a href='index.php'>$postAuthor</a>
                                </p>
                                <p><span class='glyphicon glyphicon-time'></span> Posted on $postDate</p>
                                <hr>
                                <img class='img-responsive' src='images/$postImage' alt='''>
                                <hr>
                                <p>$postContent</p>
                                <a class='btn btn-primary' href='#'>Read More <span class='glyphicon glyphicon-chevron-right'></span></a>
                                <hr>";
                            }
                        }
                    }
                ?>

                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Older</a>
                    </li>
                    <li class="next">
                        <a href="#">Newer &rarr;</a>
                    </li>
                </ul>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <?php include "includes/sidebar.php" ?>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
<?php include "includes/footer.php"?>
