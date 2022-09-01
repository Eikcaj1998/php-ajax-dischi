<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap 5.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- Personal css -->
    <link rel="stylesheet" href="css/style.css">

    <title>Document</title>
</head>
<body>
    <header>
       <div>
           <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/Spotify_logo_without_text.svg/2048px-Spotify_logo_without_text.svg.png" alt="brand logo">
       </div>
    </header> 
    <?php
    include __DIR__ . '/data.php';
?>

<main>
    <div class="container">
        <div class="row col-10 m-auto py-5">

            <?php foreach ($disks as $disk) { 
                $title = $disk['title'];
                $img = $disk['poster'];
                $author = $disk['author'];
                $genre = $disk['genre'];
                $year = $disk['year'];  
            ?>

                <div class="ms_card col-2">

                    <img class="img-fluid" src="<?php echo $img; ?>" 
                        alt="<?php echo $author . "'s song"; ?>"
                    >

                    <h5>
                        <?php echo $title; ?>
                    </h5>

                    <div>
                        <?php echo $author ?>
                    </div>
                    <div>
                        <?php echo $year ?>
                    </div>

                </div>

            <?php } ?>
        </div>
    </div>
</main>
</body>
</html>