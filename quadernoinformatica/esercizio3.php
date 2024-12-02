<?php
// Introduzione per l'utente 
echo "<h3>Controllo delle Credenziali</h3>";
echo "<p>Questa pagina verifica il nome utente e la password inseriti. Se le credenziali sono corrette, accederai alla sezione riservata. Altrimenti, potrai tornare indietro per riprovare.</p>";

// Controlla se il metodo della richiesta è POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Recupera i dati inseriti dall'utente nel modulo
    $creanomeutente = $_POST['creanomeutente'];
    $password = $_POST['creapassword'];

    // Controlla se le credenziali sono corrette
    if ($creanomeutente == "Mario" && $creapassword == "123") {
        // Messaggio per accesso riuscito
        echo "<p><strong>Benvenuto $creanomeutente</strong> nella pagina riservata del sito!</p>";
    } else {
        // Messaggio per credenziali errate
        echo "<p><strong>Attenzione:</strong> credenziali non corrette. Riprova inserendo i dati corretti.</p>";
        // Pulsante per tornare indietro
        echo "<a href='esercizio3.html'><button>Torna indietro</button></a>";
    }
} else {
    // Messaggio per accesso non autorizzato senza modulo
    echo "<p>Accesso non valido. Per favore utilizza il modulo di login.</p>";
    echo "<a href='esercizio3.html'><button>Torna al modulo di login</button></a>";
}
?>
