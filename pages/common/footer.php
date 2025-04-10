<footer class="grid-2-1 gap-std relative">
    <div class="flex space-y-std flex-col">
        <div class="flex space-x-2">
            <img src="/assets/images/icon.webp" alt="TII Icon" width="50px">
            <p class="txt-logo">The Internet Impact</p>
        </div>
        <p class="txt-xl">
            <strong>We're open source!</strong> If you find something wrong or would like to contribute to The Internet
            Impact, you can do it all on
            <a href="https://github.com/pixelsetdev/theinternetimpact" target="_blank" class="link-inline">our GitHub repository <?= $c->externalLink(); ?></a>.
        </p>
        <p class="text-xs">The Internet Impact &copy; Pixelset 2022 - <?= date('Y'); ?></p>
        <div class="flex-grow"></div>
    </div>
    <div class="flex space-y-std flex-col">
        <p class="txt-xl">
            All content on this website is licensed under
            <a href="https://creativecommons.org/licenses/by-sa/4.0/" target="_blank" class="link-inline">CC BY-SA 4.0 International License <?= $c->externalLink(); ?></a>,
            except quotes and sources which are property of their respective owners. This website is not affiliated with
            or endorsed by any of the companies or organisations mentioned.
        </p>
        <p class="text-xs"><button class="link-inline" onclick="clearPopupChoices();">Reset content warning & popups preferences</button></p>
        <div class="flex-grow"></div>
    </div>
    <a href="https://pixelset.dev" target="_blank" class="absolute bottom-5 right-5">
        <img src="https://brand.pixelset.dev/pixelset/Logo-light.svg" width="30px" alt="Pixelset Logo">
    </a>
</footer>

<div id="tii-disclaimer" class="hidden fixed top-0 left-0 right-0 bottom-0 z-50 bg-black/50 px-2 sm:px-6 md:px-12 lg:px-24 xl:px-36 py-4">
    <div class="px-3 py-2 md:px-6 md:py-4 lg:px-8 lg:py-6 bg-white dark:bg-neutral-900 border-t-std border-red-500 text-center grid gap-std card-btns">
        <h2>Content Warning</h2>
        <p>
            This website explores the profound impact of the internet on individuals and society. Please be aware that
            it discusses topics that may be distressing, including climate impact, mental health, and other sensitive
            subjects.
        </p>
        <p>
            If you find the content on this website distressing, we encourage you to seek support. Visit our Mental
            Health Support page for a list of resources and professionals who can provide assistance.
        </p>
        <div class="grid-2 gap-std card-btns">
            <button onclick="closeDisclaimer(0);" class="btn-success">Close</button>
            <button onclick="closeDisclaimer(1);" class="btn-success">Close &amp; Remember me</button>
        </div>
        <a href="https://google.com" class="btn-danger">Exit Website <?= $c->externalLink(); ?></a>
        <p class="text-xs italic">
            By clicking "Close &amp; Remember me", we won't show you this again. We'll also place a small bit of text in
            your local storage to remember you've told us to keep this prompt closed.
        </p>
    </div>
</div>

<script src="/assets/js/disclaimer.js<?= $cc; ?>"></script>
<script src="/assets/js/tabs.js<?= $cc; ?>"></script>