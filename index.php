<?php
// includo il file functions.php
require_once(__DIR__."/functions.php");
$msg = "Scegliere una password con un minimo di 8 caratteri e un massimo di 32 caratteri";
$length = isset($_GET['length']) ? intval($_GET['length']) : null;

$password = "";

if ($_SERVER["REQUEST_METHOD"] === "GET") {
    if ($length !== null && $length >= 8 && $length <= 32 && isset($_GET['generate'])) {
        $password = generatePassword(8, $length);
    } elseif ($length !== null) {
        $msg = "Errore! La lunghezza della password deve avere un minimo di 8 caratteri e un massimo di 32 caratteri";
    }
}

include("header.php");
include("form.php");
include("footer.php");
?>