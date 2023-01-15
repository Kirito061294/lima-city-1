<?php
// die Konstanten auslagern in eigene Datei
// die dann per require_once ('konfiguration.php'); 
// geladen wird.

// Damit alle Fehler angezeigt werden
// error_reporting(E_ALL);

// Zum Aufbau der Verbindung zur Datenbank
// die Daten erhalten Sie von Ihrem Provider
define ( 'MYSQL_HOST',      'localhost' );

// bei XAMPP ist der MYSQL_Benutzer: root
define ( 'MYSQL_BENUTZER',  'loc1' );
define ( 'MYSQL_KENNWORT',  'm5c9$y6^1ypL)U(:8]ÄGT7fw(!oÖÖöIq#]D+u°*}7Mi~JÄx//DKjHCoY#-Rz{Ä:V' );
// für unser Bsp. nennen wir die DB db_348875_3
define ( 'MYSQL_DATENBANK', 'db_348875_3' );
?>