<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <title>Corou!</title>
</head>
<body>
    <nav class="header">
        <h1>Quantas vezes a COROU pediu pra muudar de equipe</h1>
    </nav>
    <main>
        <div class="sidebar">
            <div class="sidebar-card">
                <form class="form" action="contador.php" method="post">
                    <input type="hidden" name="timestamp" value="<?php echo time(); ?>">
                    <button type="submit" class="button-confirm">+</button>
                </form>
            </div>    
        </div>

        <section class="content">

        </section> 
    </main>

</body>
</html>