<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Post Submission</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Welcome to My Blog</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="post-submission.html">New Post</a></li>
        </ul>
    </nav>
    <main>
        <h2>New Post Submission</h2>
        <form action="#" method="post">
            <label for="title">Title:</label><br>
            <input type="text" id="title" name="title"><br>
            <label for="author">Author:</label><br>
            <input type="text" id="author" name="author"><br>
            <label for="date">Date:</label><br>
            <input type="date" id="date" name="date"><br>
            <label for="content">Content:</label><br>
            <textarea id="content" name="content" rows="4" cols="50"></textarea><br>
            <input type="submit" value="Submit">
        </form>
    </main>
    <footer>
        <p>&copy; 2024 My Blog</p>
    </footer>
</body>
</html>
