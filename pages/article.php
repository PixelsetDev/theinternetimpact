<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?= $page->title; ?> - The Internet Impact</title>
        <?php require_once __DIR__ . '/common/vendors.php'; ?>

        <meta name="description" content="<?= $page->title; ?> on The Internet Impact">
        <meta name="author" content="Lewis">
    </head>
    <body>
        <?php require_once __DIR__ . '/common/header.php'; ?>
        <main>
            <?php
                $slug = str_replace("/", "-", $page->slug);
                if (file_exists(__DIR__ . '/articles/'.$slug.'.php')) {
                    require_once __DIR__ . '/articles/' . $slug . '.php';
                } else {
                    header('Location: /load-error');
                    exit;
                }
            ?>
        </main>
        <?php require_once __DIR__ . '/common/footer.php'; ?>
    </body>
</html>