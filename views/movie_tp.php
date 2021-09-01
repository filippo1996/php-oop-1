<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Guarda la lista dei film</h1>
    <ol>
        <?php foreach($movie->getInfo('title') as $title): ?>
            <li><?= $title ?></li>
        <?php endforeach ?>
    </ol>

    <h2>Guarda i trailer</h2>

    <?php foreach($movie->getInfo('trailer') as $url): ?>
    
        <iframe width="560" height="315" src="<?= str_replace('watch?v=', 'embed/', $url) ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        
    <?php endforeach ?>

</body>
</html>