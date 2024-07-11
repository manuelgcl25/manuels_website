<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Manuel's Website</title>
    <style>
        body {
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        },
    </style>
</head>
<body>
    <h1>Recommended Dishes</h1>

        <?php $dishes = [
            'For Breakfast' => 'Tostada de Iberico',
            'For Lunch' => 'Paella',
            'For Dinner' => 'Tortilla Espanola'
        ];
        ;?>

        <ul>
            <?php foreach ($dishes as $dish) : ?>
                <?="<li>$dish</li>" ?>
            <?php endforeach; ?>
        </ul>
</body>
</html>