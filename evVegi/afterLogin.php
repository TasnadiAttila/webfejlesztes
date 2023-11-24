<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" type="text/css" href="afterLogin.css">
</head>
<body>
    <div class="container">
        <?= isset($html) ? $html : '' ?>
    </div>
    <script>
        // Redirect to police.hu after displaying "Rossz jelszó" for 3 seconds
        setTimeout(function() {
            const errorMessage = document.querySelector("h1");
            if (errorMessage && errorMessage.textContent === "Rossz jelszó.") {
                window.location.href = 'https://police.hu';
            }
        }, 3000);
    </script>
</body>
</html>
