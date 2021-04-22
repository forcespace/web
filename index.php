<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta content="ips.web" property="og:title">
    <meta content="http://www.new-site.ru/" property="og:url">
    <meta content="ips.web" property="og:description">
    <meta content="ips.web" property="og:image">
    <title>ips.web</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="src/css/main.css" rel="stylesheet">
</head>
<body>

<?
    include_once('php/header/header.php');
?>

<div class="top-block">
    <div class="top-block__background"></div>
    <div class="top-block__content content">
        <img class="top-block__image" src="upload/images/top-block/photo.jpg" alt="Jane Doe">
        <div class="top-block__text-block">
            <p class="top-block__text top-block__text_quote">
                Мы берем на себя много, потому что мало чего боимся
            </p>
            <span class="top-block__text top-block__text_author">
                — Том Демарко. Deadline
            </span>
            <h1 class="top-block__title">
                Jane Doe
            </h1>
        </div>
    </div>
</div>

<footer>
</footer>

<script src="src/js/vendor/jquery-3.5.1.min.js"></script>
<script src="src/js/vendor/jquery.scrollTo.js"></script>
<script src="src/js/vendor/mfp.js"></script>
<script src="src/js/initialization/init_mfp.js"></script>
<script src="src/js/primeNumbers/primeNumbers.js"></script>
</body>
</html>