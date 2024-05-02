<?php
include 'header.php';

function getPostDetailsFromDatabase() {
    // Hardcoded post details
    $postDetails = array(
        "title" => "Blog Post 1",
        "content" => "My First Blog Post",
        "author" => "John Doe",
        "date" => "January 1, 2024");

    return $postDetails; // Fixed the variable name here
}
?>

<main>

    <?php
    $postDetails = getPostDetailsFromDatabase();
    ?>

    <h1><?php echo $postDetails["title"]; ?></h1> <!-- Closed the <h1> tag -->
    <div><?php echo $postDetails["author"]; ?></div> <!-- Closed the <div> tag -->
    <div><?php echo $postDetails["date"]; ?></div> <!-- Closed the <div> tag and added echo -->
    <div><?php echo $postDetails["content"]; ?></div> <!-- Closed the <div> tag and added echo -->

</main>
<footer>
    <p>&copy; 2024 My Blog</p>
</footer>
</body>
</html>
