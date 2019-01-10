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
                // Adding Posts from the DB with PHP
                $query = 'SELECT * FROM posts';
                $queryAllPosts = mysqli_query($connection,$query);

                while ($row = mysqli_fetch_assoc($queryAllPosts)) {
                        $postTitle = $row['post_title'];
                        $postAuthor = $row['post_author'];
                        $postContent = $row['post_content'];
                        $postDate = $row['post_date'];
                        $postImage = $row['post_image'];
                        
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
