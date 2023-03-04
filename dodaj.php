<?php include 'templates/header.php'; ?>
<?php include 'templates/navbar.php'; ?>

<?php

require 'config/db_connect.php';

$naslov = $tekst = $autor = '';

$errors = array('naslov' => '', 'tekst' => '', 'autor' => '');

if (isset($_POST['submit'])) {

    //proveri naslov
    if (empty($_POST['naslov'])) {
        $errors['naslov'] = 'Naslov je potreban <br>';
    } else {
        $naslov = $_POST['naslov'];
        if (!preg_match('/[.a-zA-Z-č-Č\s]+$/', $naslov)) {
            $errors['naslov'] =  'Tekst mora biti od slova';
        }
    }

    //proveri tekst
    if (empty($_POST['tekst'])) {
        $errors['tekst'] = 'Tekst je potreban <br>';
    } else {
        $tekst = $_POST['tekst'];
        if (!preg_match('/[.a-zA-Z-č-Č\s]+$/', $tekst)) {
            $errors['tekst'] =  'Tekst mora biti od slova';
        }
    }
    //proveri autor
    if (empty($_POST['autor'])) {
        $errors['autor'] = 'Autor je potreban <br>';
    } else {
        $autor = $_POST['autor'];
        if (!preg_match('/[.a-zA-Z-č-Č\s]+$/', $autor)) {
            $errors['autor'] = 'Autor mora biti od slova';
        }
    }

    if (array_filter($errors)) {
        //echo 'greške u formi';
    } else {

        $naslov = mysqli_real_escape_string($conn, $_POST['naslov']);
        $tekst = mysqli_real_escape_string($conn, $_POST['tekst']);
        $autor = mysqli_real_escape_string($conn, $_POST['autor']);

        // napravi sql
        $sql = "INSERT INTO vesti(naslov,tekst,autor) VALUES('$naslov', '$tekst', '$autor')";

        // snimi u bazu i proveri
        if (mysqli_query($conn, $sql)) {
            // uspeh
            header('Location: index.php');
        } else {
            //greska
            echo 'upit greska: ' . mysqli_error($conn);
        }
    }
}  // kraj POST provere


?>

<!-- page -->
<div class="container">
    <div class="row mt-5">
        <div class="col-lg-8">
            <h1 class="">Dodaj Vest</h1>
            <form action="dodaj.php" method="POST">
                <div class="form-group">
                    <label class="form-label">Naslov</label>
                    <input type="text" name="naslov" class="form-control" value="<?php echo htmlspecialchars($naslov) ?>">
                    <div class="text-danger"><?php echo $errors['naslov'] ?></div>
                </div>
                <div class="form-group">
                    <label>Tekst</label>
                    <textarea type="text" name="tekst" rows="10" cols="30" class="form-control"><?php echo htmlspecialchars($tekst) ?></textarea>
                    <div class="text-danger"><?php echo $errors['tekst'] ?></div>
                </div>
                <div class="form-group">
                    <label>Autor</label>
                    <input type="text" name="autor" class="form-control" value="<?php echo htmlspecialchars($autor) ?>">
                    <div class="text-danger"><?php echo $errors['autor'] ?></div>
                </div>
                <input type="submit" name="submit" value="Potvrdi" class="btn btn-primary mt-2">
            </form>
        </div>
        <div class="col-lg-4">
            <?php include 'templates/sidebar.php'; ?>
        </div>
    </div>
</div>
<?php include 'templates/footer.php'; ?>

</html>