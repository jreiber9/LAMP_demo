<?php 
    include 'inc/db/config.php';
    include 'inc/db/references.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>References</title>
        <?php include 'inc/head.php';?>
    </head>

  <body>
        <header class="page-header">
            <?php include 'inc/nav.php';?>
        </header>

    <main>
      <div class="container py-4">
        <div class="bg-light rounded-3">
          <div class="container-fluid">
            <header>
              <h1 class="display-5 fw-bold">My References</h1>
            </header>

            <section>
              <div class="row">

              <?php
                $references = json_decode(getReferences(), true);
                
                foreach($references as $reference) {
                    $theReference = array_values($reference);
              
                    echo '<div class="col-md-4">
                                <div class="card">
                                    <img
                                        src="img/contact_' . $theReference[0]. '.png"
                                        class="card-img-top"
                                        alt="' . $theReference[1] . '"
                                    />
                                    <div class="card-body">
                                        <h5 class="card-title">'. $theReference[1] . '</h5>
                                        <p><a href="' . $theReference[2] . '">' . $theReference[2] . '</a></p>
                                        <p>cell: ' . $theReference[3] . '</p>
                                    </div>
                                </div>
                            </div>';
                    }
                ?>
              </div> 
            </section>
          </div>
        </div>

      </div>
    </main>
    <?php include 'inc/footer.php';?>
    <script src="js/tota11y.min.js"></script>
  </body>
</html>