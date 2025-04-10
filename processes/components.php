<?php

namespace processes;

class Components {
    public function externalLink(): string
    {
        return '<i class="fa-solid fa-arrow-up-right-from-square" title="External link"></i>';
    }
    public function popup(string $id, string $type, string $header, string $content): string
    {
        if ($type == 'danger') { $typeC = 'border-red-500'; }
        elseif ($type == 'warning') { $typeC = 'border-yellow-400'; }
        elseif ($type == 'success') { $typeC = 'border-green-500'; }
        elseif ($type == 'info') { $typeC = 'border-blue-500'; }

        return '<div id="'.$id.'-popup" class="hidden fixed top-0 left-0 right-0 bottom-0 z-50 bg-black/50 px-2 sm:px-6 md:px-12 lg:px-24 xl:px-36 py-4">
    <div class="px-3 py-2 md:px-6 md:py-4 lg:px-8 lg:py-6 bg-white dark:bg-neutral-900 border-t-std '.$typeC.' text-center grid gap-std card-btns">
        <h2>'.$header.'</h2>
        <p>
            '.$content.'
        </p>
        <div class="grid-2 gap-std card-btns">
            <button onclick="closePopup(\''.$id.'-popup\', 0);" class="btn-'.$type.'">Close</button>
            <button onclick="closePopup(\''.$id.'-popup\', 1);" class="btn-'.$type.'">Close &amp; Remember me</button>
        </div>
        <p class="text-xs italic">
            By clicking "Close &amp; Remember me", we won\'t show you this again. We\'ll also place a small bit of text in
            your local storage to remember you\'ve told us to keep this prompt closed.
        </p>
    </div>
</div>
<script>
    openPopup("'.$id.'-popup");
</script>';
    }

    public function progressBar(bool $isDarkBackground, float $percent, string $itemTitle, string|null $itemValue = null): string
    {
        if ($itemValue === null) {
            $itemValue = $percent;
        }

        if ($percent <= 33.33) {
            $colour = 'bg-green-500';
        } elseif ($percent <= 66.66) {
            $colour = 'bg-yellow-500';
        } elseif ($percent > 66.66) {
            $colour = 'bg-red-500';
        }

        if ($isDarkBackground) {
            $background = 'bg-black';
        } else {
            $background = 'bg-neutral-100';
        }

        return '<div class="'.$background.' relative h-12">
            <div class="'.$colour.' h-12" style="width:'.$percent.'%"></div>
            <p class="absolute top-0 left-0 right-0 bottom-0 text-center self-center">'.$itemTitle.' - '.$itemValue.'</p>
        </div>';
    }
}