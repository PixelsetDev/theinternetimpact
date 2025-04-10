<nav>
            <div class="relative">
                <div class="flex space-x-8 px">
                    <a href="/" class="flex space-x-2">
                        <img src="/assets/images/icon.webp" alt="TII Icon" width="50px">
                        <p class="txt-logo">The Internet Impact</p>
                    </a>
                    <div class="flex-grow"></div>
                    <a href="/topics" class="btn-nav">All topics</a>
                </div>
            </div>
        </nav>

        <header class="flex flex-col <?php if ($currentPage->slug == 'home') { ?>h-screen <?php } else { ?>py-12 sm:py-18 md:py-24 lg:py-32 xl:py-48<?php } ?> px-2 mt-10 bg-center bg-no-repeat bg-cover" style="background-image: url('/assets/images/banners/<?= str_replace('/', '-', $currentPage->slug); ?>.webp<?= $cc; ?>');">
            <div class="flex-grow"></div>
            <h1 class="text-center text-white txt-extrabold np">
                <?= $currentPage->title; ?>
            </h1>
            <p class="text-center txt-6xl text-white txt-extrabold np">
                <?= $currentPage->subtitle; ?>
            </p>
            <div class="flex-grow"></div>
        </header>