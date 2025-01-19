<?php
$navigationLinks = [
    'Home' => 'index',
    'Products' => 'products',
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- tailwindcss - cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" referrerpolicy="no-referrer" />

    <!-- daisyui - cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/daisyui/4.12.23/full.css" integrity="sha512-liVdpj1E7WACFJBjb9MexsvLC33vmuHcrmR+nw42OaRl13zpHWHJofEKTP3M84Ah82zJTBvei6ggHlSv9aLz8Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- title -->
    <title>
        ITM - PHP - L15
    </title>
</head>

<body class="bg-info h-screen">
    <header>
        <nav class="navbar bg-base-100 text-center">
            <?php foreach ($navigationLinks as $key => $value): ?>
                <a class="btn btn-ghost text-xl" href="<?= "{$value}" ?>.php">
                    <?= $key ?>
                </a>
            <?php endforeach; ?>
        </nav>
    </header>