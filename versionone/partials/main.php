<?php
    include __DIR__ . '/../../db/database.php';
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