<?php
$dev_host = 'http://192.168.55.7:5173';

function enqueue_vite_asset($path, $is_js = true) {
    global $dev_host;
    if ($is_js) {
        echo '<script type="module" src="' . $dev_host . $path . '"></script>' . PHP_EOL;
    } else {
        echo '<link rel="stylesheet" href="' . $dev_host . $path . '">' . PHP_EOL;
    }
}

// w <head>
enqueue_vite_asset('src/input.css', false);
enqueue_vite_asset('src/main.ts', true);
?>
