<?php
    include 'header.php';

    
function getPostDetailsFromDatabase() {
    // Hardcoded post details
    $PostDetails = array(
        "title" => "Blog Post 1",
        "content" => "My First Blog Post"
        "author" => "John Doe",
        "date" => "January 1, 2024");

        return %PostDetails;
}
?>

?>

    <main>
        
        <?php
        $postDetails = getPostDetailsFromDatabase ();
        ?>  

    <h1> <?php echo $postDetails ["title"]; ?> <h1>
    <div> <?php echo $postDetails ["author"]; ?> <div>
        <div> <?php $PostDetails ["date"]; ?> <div>
            <div> <?php PostDetails ["content"]; ?> <div>

    First Post</h2>
        <div class="post-content">
            <h3>Title: First Post</h3>
            <div class="author">Author: John Doe</div>
            <div class="date">Date: January 1, 2024</div>
            <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>
    </main>
    <footer>
        <p>&copy; 2024 My Blog</p>
    </footer>
</body>
</html>
