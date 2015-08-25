<?php
error_reporting(E_ALL);

echo "<h2>Connexion TCP/IP</h2>\n";

/* Lit le port du service WWW. */
$service_port = 20000;

/* Lit l'adresse IP du serveur de destination */
$address ="192.168.1.39";

/* Crée un socket TCP/IP. */
$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
if ($socket === false) {
    echo "socket_create() a échoué : raison :  " . socket_strerror(socket_last_error()) . "\n";
} else {
    echo "OK.\n";
}

echo "Essai de connexion à '$address' sur le port '$service_port'...";
$result = socket_connect($socket, $address, $service_port);
if ($socket === false) {
    echo "socket_connect() a échoué : raison : ($result) " . socket_strerror(socket_last_error($socket)) . "\n";
} else {
    echo "OK.\n";
}


$in = "*99*0##";


//echo "Envoi de la requête COMMAND...";
socket_write($socket, $in, strlen($in));
//echo "OK.\n";

//echo "Lire la réponse : \n\n";
/*while ($out = socket_read($socket, 128)) {
    echo $out;
}*/
//echo socket_read($socket, 128);



$instructions = explode(',', $_GET['frame']);
var_dump($instructions);
foreach($instructions as $in){
echo 'Envoi de l\'instruction: '.$in.'...';
socket_write($socket, $in, strlen($in));
echo "OK.";

echo "Reponse : ";
/*while ($out = socket_read($socket, 128)) {
    echo $out;
}*/
echo socket_read($socket, 128).'<br/>';
}


?>

<form>
Send frame: <input type="text" name="frame" value="<?php echo $_GET['frame'];?>">
<input type="submit">
</form>
</form>