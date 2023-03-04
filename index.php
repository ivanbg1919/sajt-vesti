<?php

require 'config/db_connect.php';

// ispisi iz podateke iz vesti
$sql = 'SELECT naslov, tekst, autor, id, kreirano FROM vesti ORDER BY kreirano DESC';

// napravi upit i daj rezultate
$rezultat = mysqli_query($conn, $sql);

// daj rezultate kao array
$vesti = mysqli_fetch_all($rezultat, MYSQLI_ASSOC);

// oslobodi rezultat iz memorije
mysqli_free_result($rezultat);

// zatvori konekciju
mysqli_close($conn);

//echo '<pre>';
//var_dump($vesti);
//echo '</pre>';

?>
<?php include 'templates/header.php'; ?>
<?php include 'templates/navbar.php'; ?>

<!-- hero -->
<header class="py-5 bg-light border-bottom mb-4">
    <div class="container">
        <div class="text-center my-5">
            <h1>Dobrodošli na sajt Brze Vesti</h1>
            <p class="lead mb-0">Ovde možete pogledati vesti iz zemlje i sveta</p>
        </div>
    </div>
</header>
<!-- end of hero -->
<!-- page -->
<div class="container" style="position: relative; padding-bottom: 70px;">
    <div class="row">
        <div class="col-lg-8">
            <?php foreach ($vesti as $vest) : ?>
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="small text-muted"><?php echo htmlspecialchars($vest['kreirano']) ?></div>
                        <h2 class="card-title"><?php echo htmlspecialchars($vest['naslov']) ?></h2>
                        <h6 class="text-muted"><?php echo htmlspecialchars($vest['autor']) ?></h6>
                        <p class="card-text"><?php echo htmlspecialchars($vest['tekst']) ?></p>
                    </div>
                    <div class="d-flex flex-row justify-content-between">
                        <div class="ml-auto p-2"><i class="bi bi-star"></i></div>
                        <div class="p-2"><i class="bi bi-share"></i></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="col-lg-4">
            <?php include 'templates/sidebar.php'; ?>
        </div>
    </div>
</div>
<?php include 'templates/footer.php'; ?>

</html>