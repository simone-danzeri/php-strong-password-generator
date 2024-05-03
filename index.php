<?php

// Array con tutte le lettere minuscole
$lowercaseLetters = range('a', 'z');

// Array con tutte le lettere minuscole
$uppercaseLetters = range('A', 'Z');

// Array con i simboli
$symbols = [
    '!',
    '$',
    '%',
    '^',
    '&',
    '#',
    '*',
    '§'
];


//Array con i numeri
$numbers = [];
for ($i = 0; $i < 10; $i++) {
    $numbers[] = $i;
}
// Array finale con tutti i caratteri da usare per le password
$characters = array_merge($lowercaseLetters, $uppercaseLetters, $symbols, $numbers);

//var_dump($characters);

// Metto il vaore scelto dall'utente dentro una variabile
$passwordLength = isset($_GET['password']) ? intval($_GET['password']) : '';
// var_dump($passwordLength);

// Includo il file con la funzione
require_once __DIR__ . '/functions.php';
?>

<!-- SESSION -->
<?php
session_start();
$_SESSION['userPassword'] = $userPassword;
?>

<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <!--Bootstrap link-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!--Bootstrap link-->
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>
    <h1 class="text-center">Random Password Generator</h1>
    <p class="text-center">Genera con noi la tua nuova password</p>
    <div class="container ms-background">
        <form method="GET">
            <div class="mb-3">
                <label for="password" class="form-label">Di quanti caratteri vuoi la tua password super sicura?</label>
                <input type="text" class="form-control" id="password" name="password" value="<?php echo $passwordLength ?>">
            </div>
            <button type="submit" class="btn btn-primary">Genera</button>
        </form>
    </div>

    <div class="container text-center">
        <?php if($passwordLength !== 0 && $passwordLength !== '') { ?>
            <?php header('Location: result.php') ?>
        <?php } else {?>
            <p class="alert alert-danger mt-4">Inserisci un numero maggiore di 0</p>
        <?php } ?>
    </div>
    <!--Bootstrap JS link-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!--Bootstrap JS link-->
</body>
</html>