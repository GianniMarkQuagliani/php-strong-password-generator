# password generator

1) Milestone 1: Creazione del form

  - Inizio creando con un file index.php che servirà come pagina principale.

  - All'interno di index.php, includo il file functions.php che conterrà la mia logica per generare password.

  - Creo un form HTML all'interno di index.php che consentirà all'utente di specificare la lunghezza desiderata per la password. Questo form ha un campo "Lunghezza password" e due pulsanti, uno per "Invia" e uno per "Annulla".
  
  - Se l'utente preme il pulsante "Invia", il form invierà i dati in modalità GET, incluso il campo "length" con la lunghezza desiderata.


  
2) Milestone 2: Logica di generazione della password

  - Nella stessa pagina index.php, verifica i dati inviati dal form. Controlla se la lunghezza è compresa tra 8 e 32 caratteri.

  - Se la lunghezza è valida, chiama una funzione chiamata generatePassword dal file functions.php. Passa il minimo (8) e la lunghezza desiderata come parametri.

  - La funzione generatePassword genera una password casuale composta da lettere minuscole, maiuscole, numeri e caratteri speciali. Assicura che la password generata rispetti i criteri di sicurezza.

  - Restituisce la password generata nella variabile $password.