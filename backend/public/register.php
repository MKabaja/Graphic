<?php 
require_once('config.php');
// TODO: Obsługa POST requ

if($_SERVER['REQUEST_METHOD'] === 'POST') { // sprawdzam czy metoda rejestracji to napewno post
    
    $email =$_POST['email'] ?? null;
    $username =$_POST['username'] ?? null;
    $password =$_POST['password'] ?? null;
    //Dlaczego: ?? null oznacza: "weź wartość z formularza lub null, jeśli jej nie ma". To bezpieczna metoda.

    if(empty($email) || empty($username) || empty($password)) {
        echo Json_encode(['success' =>false,'message' => 'Wszystkie pola są wymagane']);
        exit;
    }
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['success' => false, 'message' => 'Nieprawidłowy format emailu']);
        exit;
    }
    $password_hash = password_hash($password, PASSWORD_BCRYPT);//Dlaczego: password_hash() to wbudowana funkcja PHP, która bezpiecznie szyfruje hasło. PASSWORD_BCRYPT to algorytm szyfrowania – bardzo bezpieczny.
    try{
        $sql = "INSERT INTO users (email,username,password_hash) VALUES (?, ?, ?)";
        //'?' to placeholdery – bezpieczne przed SQL Injection
        $stmt = $pdo->prepare($sql); //przygotowuje zapytanie

        $stmt->execute([$email,$username,

        $password_hash]); //wstawia wartości i wykonuje zapytanie
        echo json_encode(["success"=>true,"message"=> "Rejestracja UDANA!"]);

    } catch (PDOException $e) { 
        if(strpos($e -> getMessage(), 'Duplicate entry') !== false) {
            echo json_encode(['success'=> false,'message'=> 'ten email już istnieje']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Błąd bazy danych']);
        }
};
}
?>


<!--  Jak będzie działać przepływ danych:
text
Frontend (TypeScript/JS)
    ↓
wysyła POST request do register.php
    ↓
Backend PHP (register.php) odbiera dane w $_POST
    ↓
waliduje, hashuje, zapisuje do MySQL
    ↓
wysyła odpowiedź JSON z frontu
    ↓
Frontend obsługuje odpowiedź (sukces/błąd) -->