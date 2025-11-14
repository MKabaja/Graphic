<?php 
//   config.php - Konfiguracja połączenia z bazą danych 

//1. dane do połączenia z bazą (xampp domyslnie) 
$host = 'localhost';    //adres servera MySQL (lokalnie zawsze localhost)
$dbname = 'graphic_db'; //nazwa bazy danych


$username = 'root';     //domyślny uzytkownik w XAMPP
$password = '';         // domyślnie XAMPP nie ma hasła dla root

//2.    DSN(DATA SOURCE NAME) - łancuch połączenia
$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";

//3 Opcja dla PDO - ustawienia bezpieczenstwa i obsługi błedów

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, //rzuca wyjątki przy błedach
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, //zwraca wyniki jako tablice asocjacyjne
    PDO::ATTR_EMULATE_PREPARES => false, //wyłącza emulację prepared statements
];
//4. Próba połączenia z bazą
try {
    $pdo = new PDO($dsn, $username, $password, $options);

    // echo "Połączenie udane!";
} catch (PDOException $e) {
    // jesli połączenie sie nie uda zatrzymaj skrypt i pokaz błąd
    die("Błąd połączenia z bazą danych:". $e->getMessage());
}
//5. Teraz zmienna $pdo jest dostępna dla innych plików, które zrobią require_once('config.php)
?>












