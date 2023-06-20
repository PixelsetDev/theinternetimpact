<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require __DIR__.'/../common/vendors.inc'; ?>
        
        <title>Accessibility - The Internet Impact</title>
    </head>
    <body>
        <?php include __DIR__.'/../common/nav.inc'; ?>
        
        <header class="bg-center bg-cover bg-norepeat pt-60 pb-48 bg-neutral-800" style="background-image: url('/assets/images/accessibility.jpg');">
            <h1 class="w-full text-center text-4xl md:text-6xl lg:text-8xl text-white extrabold">
                Accessibility
            </h1>
            <p class="text-center text-2xl md:text-4xl lg:text-6xl text-white extrabold">
                Everyone deserves easy access to the internet.
            </p>
        </header>
        
        <main class="px-8 md:px-16 lg:px-32 py-32 mx-auto text-xl md:text-2xl lg:text-3xl">
            <h2 class="text-2xl md:text-3xl lg:text-4xl">The internet gives millions of people access to information.</h2>
            <p class="mt-4">
                When websites and web tools are properly designed and developed with accessibility in mind, people with disabilities can use them.
                However, currently many websites and services are developed with accessibility barriers that make them difficult or impossible for some people to use.
            </p>
            <p class="mt-4">
                The Web must be accessible to provide equal access and equal opportunity to people with disabilities.
            </p>
            <div class="bg-red-700 my-16 py-4 px-6 text-white">
                96.8% of the world's top one million websites don't offer full accessibility.<br>
                <span class="text-lg">Source: <a href="https://webaim.org/projects/million/" target="_blank" class="underline">The WebAIM Million Project, WebAIM, 2022 <i class="fa-solid fa-up-right-from-square text-sm" aria-hidden="true"></i></a>.</span>
            </div>
            
            <p class="mt-4">
                So what about web content, that's the documents that we access on the web. Whilst it is improving, there's still significant work to be done.
            </p>
            
            <div class="bg-red-700 my-16 py-4 px-6 text-white">
                42.3% of respondants believe that web content accessibility has not changed, and 18.5% of respondants think the web has become less accessible.<br>
                <span class="text-lg">Source: <a href="https://webaim.org/projects/screenreadersurvey9" target="_blank" class="underline">Screen Reader User Survey #9, WebAIM, 2021 <i class="fa-solid fa-up-right-from-square text-sm" aria-hidden="true"></i></a>.</span>
            </div>
            
            <hr class="w-1/2 mx-auto my-32">
            
            <h2 class="text-2xl md:text-3xl lg:text-4xl">Web accessibility progress.</h2>
            <p class="mt-4">
                We're continuing to push for full web accessibility - where anyone from any background can access any website and use it as intended, and we've made some progress.
            </p>
            <div class="bg-green-700 my-16 py-4 px-6 text-white">
                Full web accessibility has increased by 0.62% since 2021 amongst the world's top one million websites.<br>
                <span class="text-lg">Source: <a href="https://webaim.org/projects/million" target="_blank" class="underline">The WebAIM Million Project, WebAIM, 2022 <i class="fa-solid fa-up-right-from-square text-sm" aria-hidden="true"></i></a>.</span>
            </div>
            
            <hr class="w-1/2 mx-auto my-32">
            
            <h2 class="text-2xl md:text-3xl lg:text-4xl">Developers: How you can make your websites better.</h2>
            <p class="mt-4">
                <strong>Alternative Text for Images</strong><br>
                Not only does this help people who need screenreaders, but it also helps people who have slower internet connections that can't load images.<br>
                <code class="bg-neutral-100 text-lg py-1 px-2">&lt;img src="dog.jpg" <code class="bg-green-500/10">alt="Picture of a dog"</code>&gt;</code>
            </p>
            <p class="mt-4">
                <strong>ARIA Attributes</strong><br>
                People who use screen readers can't see icons. Decorative icons should be hidden, non-decorative icons should be labelled.<br>
                <code class="bg-neutral-100 text-lg py-1 px-2">&lt;i class="fa-solid fa-universal-access" <code class="bg-green-500/10">aria-hidden="true"</code>&gt;</code><br>
                <code class="bg-neutral-100 text-lg py-1 px-2">&lt;i class="fa-solid fa-universal-access" <code class="bg-green-500/10">aria-label="Accessibility"</code>&gt;</code>
            </p>
            <p class="mt-4">
                <strong>Meaningful Links</strong><br>
                Screen readers can't tell what a link does if it just says "click here". These should be changed or labelled.<br>
                <code class="bg-neutral-100 text-lg py-1 px-2">&lt;a href="/dogs"&gt;<code class="bg-green-500/10">Click here to go to the page about dogs.</code>&lt;/a&gt;</code><br>
                <code class="bg-neutral-100 text-lg py-1 px-2">&lt;a href="/dogs" <code class="bg-green-500/10">aria-label="Dogs page link."</code>&gt;Click here.&lt;/a&gt;</code>
            </p>
            <p class="mt-4">
                <strong>HTML Regions</strong><br>
                Regions help screen reader users to navigate your website.<br>
                <code class="bg-neutral-100 text-lg py-1 px-2"><code class="bg-green-500/10">&lt;main&gt;Main content section.&lt;/main&gt;</code></code><br>
                <code class="bg-neutral-100 text-lg py-1 px-2"><code class="bg-green-500/10">&lt;header&gt;Website page header.&lt;/header&gt;</code></code><br>
                <code class="bg-neutral-100 text-lg py-1 px-2"><code class="bg-green-500/10">&lt;nav&gt;A navigation bar.&lt;/nav&gt;</code></code><br>
                <code class="bg-neutral-100 text-lg py-1 px-2"><code class="bg-green-500/10">&lt;footer&gt;Website footer.&lt;/footer&gt;</code></code>
            </p>
            <p class="mt-4">
                <strong>Contrast Ratio</strong><br>
                Ensure website content has an acceptable contrast ratio so that people with eyesight difficulties can still read your website well.<br>
                Consider adding a colour blindness mode if your website relies on colours.
            </p>
        </main>
        
        <?php include __DIR__.'/../common/footer.inc'; ?>
        
    </body>
</html>