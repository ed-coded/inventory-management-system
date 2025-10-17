<?php
/*     function distitle($title) { 
        return htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); 
    }

    $page_name = $title ?? "Untitled Page"; */
    require __DIR__ . "/views/partials/tags.php";
    require_once __DIR__ . '/functions.php';
/*     require_once dirname(__DIR__, 2) . '/config/path.php';
 */
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/asset/css/template.css">
</head>
    <body>
        <!-- Header -->
        <?php include dirname(__DIR__) . "/includes/header.php"; ?>

        <div class="page-wrapper">
            <!-- Aside -->
            <?php include dirname(__DIR__) . "/includes/aside.php"; ?>

            <!-- Main Content -->
            <main class="main bg-gray-100 p-6 font-sans">
                <?= $MainContent ?>
            </main>

            <!-- Right Aside -->
            <?php include dirname(__DIR__) . "/includes/aside-right.php"; ?>
        </div>
        <!-- Footer -->
        <?php include dirname(__DIR__) . "/includes/footer.php"; ?>
    </body>
</html>