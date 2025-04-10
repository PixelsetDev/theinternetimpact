<section>
    <h2>
        The internet's data centers use more power than the UK.
    </h2>
    <p>
        The Internet will use a fifth of all the world’s electricity by 2025 and currently uses more electricity than
        the United Kingdom.
    </p>

    <p>
        Here's how much energy we estimate some things on the internet produce:
    </p>
    <div class="grid-3 gap-std text-center">
        <div class="card-green">
            <h3>1.08kJ</h3>
            <p>Google Search</p>
        </div>
        <div class="card-red">
            <h3>3.6 - 36kJ</h3>
            <p>Google Search with AI Overview</p>
        </div>
        <div class="card-red">
            <h3>3.6 - 36kJ</h3>
            <p>ChatGPT Message</p>
        </div>
    </div>
</section>

<section class="alt">
    <h2>The more power we use, the more carbon we release.</h2>

    <div class="card-alt-red grid gap-std">
        <p>
            The internet is responsible for roughly one billion tonnes of greenhouse gases a year, or around two
            percent of world emissions.
        </p>
        <p class="source">
            Source: <a href="https://www.sciencefocus.com/science/what-is-the-carbon-footprint-of-the-internet/">What is the carbon footprint of the internet?, BBC Science Focus, 2022 <?= $c->externalLink(); ?></a>.
        </p>
    </div>
</section>

<section>
    <h2>Cryptocurrency and NFTs</h2>
    <p>
        Cryptocurrency mining is very energy intensive (it could be as much energy as the entire of Ireland uses) and
        has taken on industrial proportions in countries where there is cheap electricity and political favor.
    </p>
    <p>
        NFTs and coins have huge energy impacts and release tonnes of CO<sub>2</sub> every year.
    </p>
    <div class="grid-2-1 gap-std">
        <div class="card-red grid gap-std">
            <p>
                Bitcoin released 114.06 Megatonnes CO<sub>2</sub> last year and releases 1170.91 kg CO<sub>2</sub>
                per transaction. That's equivalent to 2,595,147 VISA transactions or 195,152 hours of watching Youtube.
            </p>
            <p class="source">
                Source: <a href="https://digiconomist.net/bitcoin-energy-consumption">Bitcoin Energy Consumption, Digiconomist, 2022 <?= $c->externalLink(); ?></a>.
            </p>
        </div>
        <div class="card-yellow grid gap-std">
            <p>
                In 2021 a single NFT transaction on the Ethereum platform emitted almost 150 kilograms of carbon
                dioxide, equivalent to 331,056 Visa transactions or 24,895 hours of watching YouTube. However, in 2022
                they changed consensus mechanism which reduced CO<sub>2</sub> emissions.
            </p>
            <p class="source">
                Source: <a href="https://www.investopedia.com/nfts-and-the-environment-5220221">NFTs and the Environment, Investopedia, 2022 <?= $c->externalLink(); ?></a>.
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

<section>
    <h2>Developers: How you can make your websites use less energy.</h2>
    <div class="grid-2-1 gap-std text-center">
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
                web hosts at the <a href="https://www.thegreenwebfoundation.org/directory/">Green Web Foundation's Hosting Directory <?= $c->externalLink(); ?></a>.
            </p>
        </div>
    </div>
</section>

<section>
    <h2>Learn more</h2>
    <div class="grid-3 gap-std">
        <a href="/environment" class="btn-primary">Environment</a>
        <a href="/cryptocurrency" class="btn-primary">Cryptocurrency & NFTs</a>
        <a href="/artificial-intelligence" class="btn-primary">Artificial Intelligence</a>
    </div>
</section>

<section>
    <p class="source">Last updated: 2025-03-25 by Lewis</p>
</section>