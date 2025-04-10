<section>
    <h2>
        The internet's data centers alone have the same CO<sub>2</sub> footprint as the global air travel industry.
    </h2>
    <p>
        Every website we browse, video we watch, and email we send will probably pass through a data center. These giant
        warehouse-like buildings house hundreds of incredibly power hungry server computers. These data centers use
        massive amounts of electricity, usually from fossil fuels which release a huge amount of CO<sub>2</sub> into the
        atmosphere.
    </p>
    <p>
        The Internet will use a fifth of all the world’s electricity by 2025 and currently uses more electricity than
        the United Kingdom.
    </p>
    <div class="card-red grid gap-std">
        <p>
            The internet is responsible for roughly one billion tonnes of greenhouse gases a year, or around two
            percent of world emissions.
        </p>
        <p class="source">
            Source: <a href="https://www.sciencefocus.com/science/what-is-the-carbon-footprint-of-the-internet/" target="_blank">What is the carbon footprint of the internet?, BBC Science Focus, 2022 <?= $c->externalLink(); ?></a>.
        </p>
    </div>

    <p>
        Here's how much CO<sub>2</sub> we estimate some things on the internet produce:
    </p>
    <div class="grid gap-2 text-center">
        <?= $c->progressBar(false, 0.15, 'Visit to The Internet Impact', '0.09g'); ?>
        <?= $c->progressBar(false, 0.33, 'Google Search', '0.2g'); ?>
        <?= $c->progressBar(false, 3.33, 'Google Search with AI Overview', '2g'); ?>
        <?= $c->progressBar(false, 4.46, 'ChatGPT Message using GPT-4o', '2.68g'); ?>
        <?= $c->progressBar(false, 6.66, 'Email', '4g'); ?>
        <?= $c->progressBar(false, 7.2, 'Average ChatGPT Message', '4.32g'); ?>
        <?= $c->progressBar(false, 20, 'Hour of TikTok', '4.32g'); ?>
        <?= $c->progressBar(false, 56.83, 'ChatGPT Message using GPT-4', '34.1g'); ?>
        <?= $c->progressBar(false, 72, 'Average ChatGPT conversation', '43.2g'); ?>
        <?= $c->progressBar(false, 83.33, 'Email with Images', '50g'); ?>
        <?= $c->progressBar(false, 91.66, 'Hour of Netflix', '55g'); ?>
    </div>

    <p>
        Remember, each of these is per action or per hour. When using Google, Email, or ChatGPT, you'll probably
        perform that action more than once. It'll all stacks up! This doesn't include the CO<sub>2</sub> used to power
        the device you're using.
    </p>
    <p>
        AI models such as ChatGPT also require immense amounts of power to be trained before they can be used, scroll
        down to learn more about how AI is impacting the environment.
    </p>
    <p>
        Energy usage and carbon emissions of AI varies from model to model, learn more on our
        <a href="/artificial-intelligence" class="link-inline">Artificial Intelligence page</a>.
    </p>
</section>

<section class="alt">
    <h2>Is Big Tech helping?</h2>

    <div class="grid-2-1 gap-std">
        <div class="card-alt-green grid gap-std">
            <p>
                Big brands such as Apple and Meta already use 100% renewable energy.
            </p>
            <p>
                Google was previously on this list as well.
            </p>
            <p class="source">
                Source: <a href="https://www.climatecare.org/resources/news/infographic-carbon-footprint-internet/" target="_blank">ClimateCare <?= $c->externalLink(); ?></a>.
            </p>
        </div>
        <div class="card-alt-red grid gap-std">
            <p>
                "Google Is No Longer Claiming to Be Carbon Neutral
            </p>
            <p>
                The tech giant, which has seen its planet-warming emissions rise because of artificial intelligence, has
                stopped buying cheap offsets behind the neutrality claim. The company now aims to reach net-zero carbon by
                2030."
            </p>
            <p class="source">
                Source: <a href="https://www.bloomberg.com/news/articles/2024-07-08/google-is-no-longer-claiming-to-be-carbon-neutral" target="_blank">Bloomberg, 2024 <?= $c->externalLink(); ?></a>.
            </p>
        </div>
    </div>
</section>

<section>
    <h2>How you can reduce your online carbon footprint.</h2>
    <div class="grid-3 gap-std text-center">
        <div class="card grid gap-std">
            <i class="fa-solid fa-video txt-6xl mx-auto"></i>
            <h3>Video Streaming</h3>
            <p>Turn off autoplay and avoid using video if you only need audio.</p>
            <p>If you're watching something in the background - consider switching to music!</p>
        </div>
        <div class="card grid gap-std">
            <i class="fa-solid fa-envelope txt-6xl mx-auto"></i>
            <h3>Email</h3>
            <p>Avoid using 'reply-all' when possible. Unsubscribe to email newsletters you no longer need.</p>
            <p>Try to talk in-person instead of online.</p>
        </div>
        <div class="card grid gap-std">
            <i class="fa-solid fa-power-off txt-6xl mx-auto"></i>
            <h3>Shut down</h3>
            <p>Turn off your computer if you're not using it. Don't use sleep mode!</p>
            <p>Computers still consume electricity when they're in sleep mode.</p>
        </div>
        <div class="card grid gap-std">
            <i class="fa-solid fa-mobile txt-6xl mx-auto"></i>
            <h3>Use a mobile device</h3>
            <p>For quick searches or checking your emails, use your phone or a tablet.</p>
            <p>
                These devices are typically more energy efficient than computers and will therefore release less
                CO<sub>2</sub>.
            </p>
        </div>
        <div class="card grid gap-std">
            <i class="fa-brands fa-bitcoin txt-6xl mx-auto"></i>
            <h3>Avoid non-green Crypto</h3>
            <p>Cryptocurrency mining is very energy intensive (it could be as much energy as the entire of Ireland uses) and has a huge carbon footprint. Avoid cryptocurrency that isn't energy efficient and certified green.</p>
        </div>
        <div class="card grid gap-std">
            <i class="fa-solid fa-hexagon-nodes txt-6xl mx-auto"></i>
            <h3>Avoid using AI</h3>
            <p>AI models use much more power and release more CO<sub>2</sub> than traditional Google searches.</p>
            <p>
                Alternatively, use a greener AI model. Learn more on our
                <a href="/artificial-intelligence" class="link-inline">Artificial Intelligence page</a>.
            </p>
        </div>
    </div>
</section>

<section>
    <h2>Artificial Intelligence</h2>
    <div class="grid-2-1 gap-std">
        <div class="card-red grid gap-std">
            <p>
                Globally, AI-related infrastructure may soon consume six times more water than Denmark, a country of 6
                million, according to one estimate. That is a problem when a quarter of humanity already lacks access to
                clean water and sanitation.
            </p>
            <p class="source">
                Source: <a href="https://www.unep.org/news-and-stories/story/ai-has-environmental-problem-heres-what-world-can-do-about" target="_blank">UN Environment Programme, 2024 <?= $c->externalLink(); ?></a>.
            </p>
        </div>
        <div class="card-red grid gap-std">
            <p>
                Training AI-models can produce about 626,000 pounds of carbon dioxide, or the equivalent of around 300
                round-trip flights between New York and San Francisco – nearly 5 times the lifetime emissions of the average
                ar.
            </p>
            <p class="source">
                Source: <a href="https://www.technologyreview.com/2019/06/06/239031/training-a-single-ai-model-can-emit-as-much-carbon-as-five-cars-in-their-lifetimes/" target="_blank">Technology Review, Massachusetts Institute of Technology, 2019 <?= $c->externalLink(); ?></a>.
            </p>
        </div>
    </div>
    <p>
        Energy usage and carbon emissions of AI varies from model to model, learn more on our
        <a href="/artificial-intelligence" class="link-inline">Artificial Intelligence page</a>.
    </p>
</section>

<section>
    <h2>Cryptocurrency and NFTs</h2>
    <p>
        Cryptocurrency mining is very energy intensive (it could be as much energy as the entire of Ireland uses) and
        has taken on industrial proportions in countries where there is cheap electricity and political favor.
    </p>
    <p>
        NFTs and coins have huge environmental impacts to our planet and release tonnes of CO<sub>2</sub> every year.
    </p>
    <div class="grid-2 gap-std">
        <div class="card-red grid gap-std">
            <p>
                Bitcoin released 114.06 Megatonnes CO<sub>2</sub> last year and releases 1170.91 kg CO<sub>2</sub> per transaction. That's
                equivalent to 2,595,147 VISA transactions or 195,152 hours of watching Youtube.
            </p>
            <p class="source">
                Source: <a href="https://digiconomist.net/bitcoin-energy-consumption" target="_blank">Bitcoin Energy Consumption, Digiconomist, 2022 <?= $c->externalLink(); ?></a>.
            </p>
        </div>
        <div class="card-yellow grid gap-std">
            <p>
                In 2021 a single NFT transaction on the Ethereum platform emitted almost 150 kilograms of carbon
                dioxide, equivalent to 331,056 Visa transactions or 24,895 hours of watching YouTube. However, in 2022
                they changed consensus mechanism which reduced CO<sub>2</sub> emissions.
            </p>
            <p class="source">
                Source: <a href="https://www.investopedia.com/nfts-and-the-environment-5220221" target="_blank">NFTs and the Environment, Investopedia, 2022 <?= $c->externalLink(); ?></a>.
            </p>
        </div>
    </div>
    <p>
        Solana, Algorand, Cardano, and Tezos offer energy-efficient NFTs which heavily reduce the environmental impact
        of transactions.
    </p>
    <p>
        The Ethereum blockchain also became less of an energy hog in 2022 thanks to a new "proof-of-stake" operating
        model. Post merge the expected energy consumption for a proof-of-stake Ethereum transaction should be the
        equivalent of 20 minutes of television.
    </p>
</section>

<section class="alt">
    <h2>Our website</h2>
    <p>
        We wanted to show how easy it is to make an eco-friendly website. So we did! This site follows all the tips and
        tricks we recommend to developers just below this section.
    </p>
    <p>
        Our website is cleaner than 85% of websites tested by The Carbon Calculator as of 25th March 2025, runs on 100%
        renewable energy, and only emits 0.09g of carbon per user. You can see the stats for yourself on
        <a href="https://websiteemissions.com" target="_blank" class="link-inline">our carbon calculator page <?= $c->externalLink(); ?></a>.
    </p>
    <p>
        You can never be perfect, but you can be better. Since we found how much carbon our website releases, we decided
        to get planting. We've already planted 100 trees as of March 2025 with Krystal.uk's One Billion Trees pledge,
        the company that we host all of our projects with. We also use CloudFlare to speed up your ability to access us,
        and reducing the amount of energy required to access our site. Both Krystal and CloudFlare run on 100% renewable
        electricity. Krystal is carbon-neutral, and CloudFlare is net-zero right back to when they first started.
    </p>
    <img src="https://api.thegreenwebfoundation.org/greencheckimage/theinternetimpact.org">
    <p>
        This sounds like a lot of extra work, but it really wasn't. Learn how you can make your website eco-friendly in
        the section below.
    </p>
</section>

<section>
    <h2>Developers: How you can make your websites more green.</h2>
    <div class="grid-2 gap-std text-center">
        <div class="card">
            <h3>Reduce page size</h3>
            <p>
                Minifying your code not only makes pages load faster, but it also saves on bandwidth, server power, and
                therefore electricity. Use WEBP images instead of JPGs or PNGs and reduce the amount of video on your
                site. Don't autoplay videos.
            </p>
        </div>
        <div class="card">
            <h3>Switch to a green web host</h3>
            <p>
                Green web hosts use renewable energy to host web pages. We even use one! You can find a list of green
                web hosts at the <a href="https://www.thegreenwebfoundation.org/directory/" target="_blank">Green Web Foundation's Hosting Directory <?= $c->externalLink(); ?></a>.
            </p>
        </div>
    </div>
</section>

<section>
    <h2>Learn more</h2>
    <div class="grid-2 gap-std">
        <a href="/energy" class="btn-primary">Energy</a>
        <a href="/streaming" class="btn-primary">Streaming</a>
        <a href="/cryptocurrency" class="btn-primary">Cryptocurrency</a>
        <a href="/artificial-intelligence" class="btn-primary">Artificial Intelligence</a>
    </div>
</section>

<section>
    <p class="source">Last updated: 2025-03-25 by Lewis</p>
</section>