<!DOCTYPE html>
<html lang="en">
    <head>
        <title>The Internet Impact</title>
        <?php require_once __DIR__ . '/common/vendors.php'; ?>
    </head>
    <body>
        <?php require_once __DIR__ . '/common/header.php'; ?>
        <main>
            <section>
                <h2 class="text-center">
                    The internet has the power.
                </h2>
            </section>

            <section class="text-center">
                <h3>
                    That's good, and bad.
                </h3>
                <p>
                    Our internet can create meaningful change, or make us all worse off than we were before. It's up to us
                    to make that change positive, and steer the web away from negative influence.
                </p>
            </section>

            <section class="grid-2-1 gap-std">
                <div class="text-center card-green flex flex-col">
                    <h3 class="np">
                        The good
                    </h3>
                    <div class="flex-grow"></div>
                    <p>
                        The internet helping people stay in touch, spreading vital information and easing the burden of
                        everyday tasks, like shopping or paying the bills.
                    </p>
                    <div class="flex-grow"></div>
                </div>
                <div class="text-center card-red flex flex-col">
                    <div class="flex-grow"></div>
                    <h3 class="np">
                        The bad
                    </h3>
                    <p>
                        The internet can cause addiction, harm to cognitive development, information overload, harm to
                        public/private boundaries and harm to social relationships and communities, and much more when
                        not used correctly.
                    </p>
                    <div class="flex-grow"></div>
                </div>
            </section>

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