<section>
    <h2>
        The internet gives millions of people access to information.
    </h2>

    <p>
        When websites and web tools are properly designed and developed with accessibility in mind, people with disabilities
        can use them. However, currently many websites and services are developed with accessibility barriers that make them
        difficult or impossible for some people to use.
    </p>

    <p>
        The Web must be accessible to provide equal access and equal opportunity to people with disabilities.
    </p>

    <div class="grid-2-1 gap-std">
        <div class="card-red grid gap-std">
            <p>
                96.8% of the world's top one million websites don't offer full accessibility.
            </p>
            <p class="source">
                Source:
                <a href="https://webaim.org/projects/million/">The WebAIM Million Project, WebAIM, 2022 <?= $c->externalLink(); ?></a>.
            </p>
        </div>
        <div class="card-red grid gap-std">
            <p>
                42.3% of respondents believe that web content accessibility has not changed, and 18.5% of respondents think
                the web has become less accessible.
            </p>
            <p class="source">
                Source:
                <a href="https://webaim.org/projects/screenreadersurvey9">Screen Reader User Survey #9, WebAIM, 2021 <?= $c->externalLink(); ?></a>.
            </p>
        </div>
    </div>
</section>

<section class="alt">
    <h2>
        Web accessibility progress.
    </h2>
    <p>
        We're continuing to push for full web accessibility - where anyone from any background can access any website and
        use it as intended, and we've made some progress. Unfortunately, it's not much.
    </p>

    <div class="card-alt-green grid gap-std">
        <p>
            Full web accessibility has increased by 0.62% from 2021 to 2022 amongst the world's top one million websites.
        </p>
        <p class="source">
            Source:
            <a href="https://webaim.org/projects/million/">The WebAIM Million Project, WebAIM, 2022 <?= $c->externalLink(); ?></a>.
        </p>
    </div>
</section>

<section>
    <h2>
        Developers: How you can make your websites better.
    </h2>

    <div class="masonry">
        <div class="masonry-col">
            <div class="grid card">
                <h3>
                    Alternative Text for Images
                </h3>
                <p>
                    Not only does this help people who need screenreaders, but it also helps people who have slower internet connections
                    that can't load images.
                </p>
                <code>
                    &lt;img src="dog.jpg" <span class="code-good">alt="Picture of a dog"</span>&gt;
                </code>
            </div>

            <div class="grid card">
                <h3>
                    Meaningful Links
                </h3>
                <p>
                    Screen readers can't tell what a link does if it just says "click here". These should be changed or
                    labelled.
                </p>
                <code>
                    &lt;a href="/dogs"&gt;<span class="code-good">Click here to go to the page about dogs.</span>&gt;/a&lt;<br>
                    &lt;a href="/dogs" <span class="code-good">aria-label="A link to a page about dogs."</span>&gt;Click here.&gt;/a&lt;
                </code>
            </div>

            <div class="grid card">
                <h3>
                    Contrast Ratio
                </h3>
                <p>
                    Ensure website content has an acceptable contrast ratio so that people with eyesight difficulties
                    can still read your website well. Consider adding a colour blindness mode if your website relies on
                    colours.
                </p>
            </div>

            <div class="flex-grow"></div>
        </div>

        <div class="masonry-col">
            <div class="grid card">
                <h3>
                    ARIA Attributes
                </h3>
                <p>
                    People who use screen readers can't see icons. Decorative icons should be hidden, non-decorative icons
                    should be labelled.
                </p>
                <code>
                    &lt;i class="fa-solid fa-universal-access" <span class="code-good">aria-hidden="true"</span>&gt;&lt;/i&gt;<br>
                    &lt;i class="fa-solid fa-universal-access" <span class="code-good">aria-label="Accessibility"</span>&gt;&lt;/i&gt;
                </code>
            </div>

            <div class="grid card">
                <h3>
                    HTML Regions
                </h3>
                <p>
                    Regions help screen reader users to navigate your website.
                </p>
                <code>
                    <span class="code-good">
                        &lt;main&gt;Main content section.&lt;/main&gt;<br>
                        &lt;header&gt;Website page header.&lt;/header&gt;<br>
                        &lt;nav&gt;A navigation bar.&lt;/nav&gt;<br>
                        &lt;footer&gt;Website footer.&lt;/footer&gt;
                    </span>
                </code>
            </div>

            <div class="flex-grow"></div>
        </div>
    </div>
</section>

<section>
    <p class="source">Last updated: 2025-03-25 by Lewis</p>
</section>