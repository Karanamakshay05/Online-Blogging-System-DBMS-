<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Welcome to Online Blogging System</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f8f9fa;
        margin: 0;
        padding: 0;
    }
    .container {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h1 {
        color: #333333;
    }
    #createBlogBtn {
        background-color: #007bff;
        color: #ffffff;
        border: none;
        border-radius: 4px;
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
    }
    #createBlogBtn:hover {
        background-color: #0056b3;
    }
    input[type="text"],
    textarea {
        width: 100%;
        padding: 10px;
        margin-top: 10px;
        margin-bottom: 10px;
        border: 1px solid #ced4da;
        border-radius: 4px;
        box-sizing: border-box;
    }
    textarea {
        resize: vertical;
    }
    button[type="submit"] {
        background-color: #28a745;
        color: #ffffff;
        border: none;
        border-radius: 4px;
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
    }
    button[type="submit"]:hover {
        background-color: #218838;
    }
</style>
</head>
<body>
<div class="container">
    <h1>Welcome to Online Blogging System</h1>
    <button id="createBlogBtn" onclick="toggleForm()">Create Blog</button>
    <form id="blogForm" action="save_blog.php" method="POST">
        <textarea name="blogContent" id="blogContent" cols="30" rows="10" placeholder="Write your blog here..."></textarea>
        <button type="submit" name="postBtn">Post</button>
        <button type="button" onclick="viewBlogs()">View Blog</button>
    </form>
</div>

<script>
    function toggleForm() {
        var blogForm = document.getElementById('blogForm');
        if (blogForm.style.display === 'none') {
            blogForm.style.display = 'block';
        } else {
            blogForm.style.display = 'none';
        }
    }

    function viewBlogs() {
        window.location.href = "view_blog.php";
    }
</script>

</body>
</html>
