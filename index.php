<!-- index.php -->

<?php
$connect = mysqli_connect(
    'db', # service name
    'php_docker', # username
    'password', # password
    'php_docker' # db table
);

$table_name = "php_docker_table";

$query = "SELECT * FROM $table_name";

$response = mysqli_query($connect, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Docker Articles</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
        }

        header img {
            margin-bottom: 10px;
        }

        nav {
            background-color: #444;
            padding: 10px;
            text-align: center;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }

        .article-container {
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .article {
            margin-bottom: 20px;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            background-color: #fafafa;
        }

        .article h2 {
            color: #333;
        }

        .article p {
            color: #666;
        }

        .article img {
            max-width: 100%;
            height: auto;
            border-radius: 4px;
            margin-top: 10px;
        }

        hr {
            border: 0;
            height: 1px;
            background-color: #ddd;
            margin: 15px 0;
        }
    </style>
</head>
<body>

<header>
    <h3>CC AAT</h3>
    <h1>PHP Docker Articles</h1>
</header>

<nav>
    <a href="#">Home</a>
    <a href="#">About</a>
    <a href="#">Contact</a>
</nav>

<div class="article-container">
    <?php
    while ($i = mysqli_fetch_assoc($response)) {
        echo '<div class="article">';
        echo '<h2 style="color: ' . getRandomColor() . ';">' . $i['title'] . '</h2>';
        echo '<p>' . $i['body'] . '</p>';
        echo '<p>' . $i['date_created'] . '</p>';
        echo '</div>';
        echo '<hr>';
    }
    ?>
</div>

<?php
function getRandomColor()
{
    $colors = ['#3498db', '#2ecc71', '#e74c3c', '#f39c12', '#9b59b6', '#1abc9c'];
    return $colors[array_rand($colors)];
}


?>

</body>
</html>
