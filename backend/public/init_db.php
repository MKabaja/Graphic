<?php 
// init_db.php - Inicjalizacja bazy danych (tworzenie tabel)

// 1. Importujemy config.php, aby mieć dostęp do $pdo
// require_once('config.php');

// try {
    // 2. SQL do tworzenia tabeli użytkowników (admini)
//     $sql = "
//     CREATE TABLE IF NOT EXISTS users (
//         id INT AUTO_INCREMENT PRIMARY KEY,
//         email VARCHAR(255) NOT NULL UNIQUE,
//         password_hash VARCHAR(255) NOT NULL,
//         username VARCHAR(100) NOT NULL,
//         role VARCHAR(50) DEFAULT 'admin',
//         created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
//         updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//     )
//     ";
    
//     // 3. Wykonaj SQL
//     $pdo->exec($sql);
    
//     echo "✅ Tabela 'users' została utworzona pomyślnie!";
// }catch (PDOException $e) {
//     echo "❌ Błąd przy tworzeniu tabeli: " . $e->getMessage() ."";
// }
// ?>


<!--id ---INT AUTO_INCREMENT PRIMARY KEY---Unikalny identyfikator (automatycznie numerowany)

email---VARCHAR(255) UNIQUE	---Email admina (unikalne, nie mogą być duplikaty)

password_hash---VARCHAR(255)---Zaszyfrowane hasło (NIGDY nie przechowujemy zwykłego hasła!)

username---VARCHAR(100)	---Nazwa użytkownika do logowania
role---VARCHAR(50)---Rola użytkownika (teraz 'admin', później możesz dodać więcej ról)

created_at---TIMESTAMP---Data utworzenia konta (automatycznie bieżąca data/czas)

updated_at---TIMESTAMP---Data ostatniej aktualizacji-->
