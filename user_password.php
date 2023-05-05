<!-- **Milestone 3** -->
<!-- Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente. -->

<?php

session_start();

if(isset($_SESSION['password'])) {
    echo $_SESSION['password'];
}

?>