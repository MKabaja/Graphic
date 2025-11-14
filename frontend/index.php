<?php require_once 'functions.php'; // wczytujemy funkcje ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GRAPHIC</title>
    <!-- Podgląd z hot reloadem -->
<?php 
    // ładowanie Tailwind CSS i TS/JS z Vite
        enqueue_vite_asset('/src/input.css', false);
        enqueue_vite_asset('/src/main.ts', true);
?>

</head>
<body>
    <?php echo 'działa' ;?>
    <h1 class="bg-blue-400">Tailwind działa</h1>

    <div class="bg-green-600 text-white p-4">
  Hello Tailwind!
</div>
</body>
</html>