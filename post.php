<?php
include 'header.php';

function getPostDetailsFromDatabase() {
    // Hardcoded post details
    $postDetails = array(
        "title" => "Blog Post 1",
        "content" => "My First Blog Post",
        "author" => "John Doe",
        "date" => "January 1, 2024");

    return $postDetails; 
?>

<main>

    <?php
    $postDetails = getPostDetailsFromDatabase();
    ?>

    <h1><?php echo $postDetails["title"]; ?></h1> 
    <div><?php echo $postDetails["author"]; ?></div> 
    <div><?php echo $postDetails["date"]; ?></div> 
    <div><?php echo $postDetails["content"]; ?></div>

</main>
<footer>
    <p>&copy; 2024 My Blog</p>
</footer>
</body>
</html>
