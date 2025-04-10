<!DOCTYPE html>
<html lang="en">
    <head>
        <title>All topics - The Internet Impact</title>
        <?php require_once __DIR__ . '/common/vendors.php'; ?>
    </head>
    <body>
        <?php require_once __DIR__ . '/common/header.php'; ?>
        <main>
            <section>
                <h2 class="text-center">
                    All topics
                </h2>
                <div class="grid-4 gap-std">
                    <?php
                    $pages = json_decode(file_get_contents(__DIR__ . '/../data/pages.json'));
                    sort($pages->topics);
                    foreach ($pages->topics as $page) {
                        if ($page->status == 0) {
                        ?>
                        <div class="btn-grid grid gap-std text-center relative">
                            <i class="<?= $page->icon; ?> txt-6xl mx-auto" aria-hidden="true"></i>
                            <span class="self-center"><?= $page->title; ?></span>
                            <div class="bg-yellow-400 dark:bg-yellow-600 rounded px-2 py-1">Coming Soon</div>
                        </div>
                    <?php } elseif ($page->status == 1) { ?>
                        <a href="/<?= $page->slug; ?>" class="btn-grid grid gap-std text-center relative">
                            <i class="<?= $page->icon; ?> txt-6xl mx-auto" aria-hidden="true"></i>
                            <span class="self-center"><?= $page->title; ?></span>
                        </a>
                    <?php }} ?>
                </div>
            </section>
        </main>
        <?php require_once __DIR__ . '/common/footer.php'; ?>
    </body>
</html>