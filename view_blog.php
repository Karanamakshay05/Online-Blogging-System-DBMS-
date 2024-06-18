<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>View Blogs</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f8f9fa;
        margin: 0;
        padding: 0;
    }
    .container {
        max-width: 800px;
        margin: 20px auto;
        padding: 20px;
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h1 {
        color: #333333;
        margin-bottom: 20px;
    }
    .blog-container {
        background-color: #f0f0f0;
        padding: 20px;
        border-radius: 8px;
        margin-top: 20px;
    }
    .blog {
        background-color: #ffffff;
        padding: 20px;
        margin-bottom: 20px;
        border-radius: 8px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }
    .blog h2 {
        color: #333333;
        margin-bottom: 10px;
    }
    .blog p {
        color: #555555;
    }
    .fetch-button {
        background-color: #007bff;
        color: #ffffff;
        border: none;
        border-radius: 4px;
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
    }
    .fetch-button:hover {
        background-color: #0056b3;
    }
</style>
</head>
<body>
<div class="container">
    <h1>View Blogs</h1>
    <button class="fetch-button" onclick="fetchBlogs()">View Blogs</button>
    <div id="blogsContainer" class="blog-container"></div>
</div>

<script>
    function fetchBlogs() {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                var blogsContainer = document.getElementById("blogsContainer");
                blogsContainer.innerHTML = xhr.responseText;
            }
        };
        xhr.open("GET", "fetch_blogs.php", true);
        xhr.send();
    }
</script>

</body>
</html>
