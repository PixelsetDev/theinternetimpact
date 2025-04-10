<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Error 404 - The Internet Impact</title>
        <?php require_once __DIR__ . '/../common/vendors.php'; ?>
    </head>
    <body>
        <?php require_once __DIR__ . '/../common/header.php'; ?>
        <main>
            <section>
                <h2 class="text-center">
                    Sorry, the requested page or resource could not be found.
                </h2>
            </section>

            <section class="grid-2 gap-std">
                <a href="/" class="btn-primary text-center">Homepage</a>
                <a href="https://support.pixelset.dev/knowledgebase.php?article=50" class="btn-primary text-center" target="_blank">Contact Support <?= $c->externalLink(); ?></a>
            </section>
        </main>
        <?php require_once __DIR__ . '/../common/footer.php'; ?>
    </body>
</html>