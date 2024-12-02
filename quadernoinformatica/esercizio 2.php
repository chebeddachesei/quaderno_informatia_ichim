<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <title>Accesso a pagina riservata esercizio</title>
</head>
<body>

<h2>CONTROLLO CREDENZIALI</h2>

<!-- Introduzione -->
<p>Questa pagina verifica le credenziali che hai inserito. Se il nome utente e la password sono corretti, avrai accesso alla pagina riservata. Altrimenti, riceverai un messaggio di errore.</p>

<?php
// Abilita la visualizzazione degli errori per il debug
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Recupero dei dati dal modulo precedente
$nomeutente = isset($_POST['nomeutente']) ? $_POST['nomeutente'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

// Visualizzazione delle credenziali inserite dall'utente
echo "<p>Nome utente inserito: <strong>" . htmlspecialchars($nomeutente) . "</strong></p>";
echo "<p>Password inserita: <strong>" . htmlspecialchars($password) . "</strong></p>";

// Controllo delle credenziali
if ($nomeutente === "Admin" && $password === "123") {
  // Messaggio per credenziali corrette
  echo "<p><strong>Benvenuto $nomeutente nella pagina riservata del sito!</strong></p>";
} else {
  // Messaggio per credenziali errate
  echo "<p><strong>Attenzione:</strong> credenziali non corrette. Riprova inserendo i dati giusti.</p>";
}
?>

<!-- Pulsante per tornare indietro -->
<a href="esercizio2.html">
  <button>Torna indietro</button>
</a>
<p>Commento: Premi "Torna indietro" per tornare al modulo di login e riprovare a inserire le credenziali.</p>

</body>
</html>
