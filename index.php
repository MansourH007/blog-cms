<?php
    include 'header.php';

    function getPostTitlesFromDatabase () {
        $postTitles = array ("Blog Post 1", "Blog Post 2", "Blog Post 3");
        return $postTitles;
    }
?>

    <main>
        <h2>All Posts</h2>
        <ul>
           <?php
                $postTitles = getPostTitlesFromDatabase ();

                foreach($postTitles as $postTitle) {
                    echo "<li><a href = 'post.php'>" . $postTitle . "</a></li>";
                }
           ?>

        </ul>
    </main>
    <footer>
        <p>&copy; 2024 My Blog</p>
    </footer>
</body>
</html>
