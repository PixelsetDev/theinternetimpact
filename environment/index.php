<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require __DIR__.'/../common/vendors.inc'; ?>
        
        <title>Environment - The Internet Impact</title>
    </head>
    <body>
        <?php include __DIR__.'/../common/nav.inc'; ?>
        
        <header class="bg-center bg-cover bg-norepeat pt-60 pb-48 bg-neutral-800" style="background-image: url('/assets/images/environment.jpg');">
            <h1 class="w-full text-center text-4xl md:text-6xl lg:text-8xl text-white extrabold">
                Environment
            </h1>
            <p class="text-center text-2xl md:text-4xl lg:text-6xl text-white extrabold">
                Exploring the envrironmental impacts of the internet.
            </p>
        </header>
        
        <main class="px-8 md:px-16 lg:px-32 py-32 mx-auto text-xl md:text-2xl lg:text-3xl">
            <h2 class="text-2xl md:text-3xl lg:text-4xl">The internet's data centers alone have the same CO<sub>2</sub> footprint as the global air travel industry.</h2>
            <p class="mt-4">
                Every website we browse, video we watch, and email we send will probably pass through a data center. These giant warehouse-like buildings house hundreds of incredibly power hungry server computers.
                These data centers use massive amounts of electricity, usually from fossil fuels which release a huge amount of CO<sub>2</sub> into the atmosphere.
                The Internet will use a fifth of all the world’s electricity by 2025 and currently uses more electricity than the United Kingdom.
            </p>
            <div class="bg-red-700 my-16 py-4 px-6 text-white">
                The internet is responsible for roughly one billion tonnes of greenhouse gases a year, or around two per cent of world emissions.<br>
                <span class="text-lg">Source: <a href="https://www.sciencefocus.com/science/what-is-the-carbon-footprint-of-the-internet/" target="_blank" class="underline">What is the carbon footprint of the internet?, BBC Science Focus, 2022 <i class="fa-solid fa-up-right-from-square text-sm" aria-hidden="true"></i></a>.</span>
            </div>
            
            <hr class="w-1/2 mx-auto my-32">
            
            <h2 class="text-2xl md:text-3xl lg:text-4xl">Green web progress.</h2>
            <p class="mt-4">
                We're continuing to push for a more green internet - where websites are hosted with renewable energy and offset the emissions of their visitors, and we've made some progress.
            </p>
            <div class="bg-green-700 my-16 py-4 px-6 text-white">
                Big brands such as Apple, Meta and Google already use 100% renewable energy.<br>
                <span class="text-lg">Source: <a href="https://www.climatecare.org/resources/news/infographic-carbon-footprint-internet/" target="_blank" class="underline">ClimateCare <i class="fa-solid fa-up-right-from-square text-sm" aria-hidden="true"></i></a>.</span>
            </div>
            
            <hr class="w-1/2 mx-auto my-32">
            
            <h2 class="text-2xl md:text-3xl lg:text-4xl">How much carbon does the internet release?</h2>
            <canvas id="internetCarbon" width="400" height="100"></canvas>
            <script>
            const ctx = document.getElementById('internetCarbon').getContext('2d');
            const internetCarbon = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Google Search (0.2g / search)', 'Email (4g / message)', 'Email with Images (50g / message)', 'Netflix (55g / hour)', 'TikTok (12g / hour)'],
                    datasets: [{
                        label: 'Grams of CO2',
                        data: [0.2, 4, 50, 55, 12],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ]
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
            </script>
            
            <hr class="w-1/2 mx-auto my-32">
            
            <h2 class="text-2xl md:text-3xl lg:text-4xl">How you can reduce your online carbon footprint.</h2>
            <ul class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-6 lg:gap-8 mt-16">
                <li class="rounded-lg shadow-lg transform duration-200">
                    <div class="py-4 md:py-6 lg:py-8 px-2 md:px-3 lg:px-4">
                        <i class="w-full text-center fa-solid fa-video text-2xl md:text-4xl lg:text-6xl" aria-hidden="true"></i>
                        <h3 class="w-full text-center mt-4">Video Streaming</h3>
                        <p class="w-full text-center mt-4 text-lg md:text-xl">Turn off auto-play and avoid using video if you only need audio.</p>
                    </div>
                </li>
                <li class="rounded-lg shadow-lg transform duration-200">
                    <div class="py-4 md:py-6 lg:py-8 px-2 md:px-3 lg:px-4">
                        <i class="w-full text-center fa-solid fa-envelope text-2xl md:text-4xl lg:text-6xl" aria-hidden="true"></i>
                        <h3 class="w-full text-center mt-4">Email</h3>
                        <p class="w-full text-center mt-4 text-lg md:text-xl">Avoid using 'reply-all' when possible. Unsubscribe to email newsletters you no longer need. Try to talk in-person instead of online.</p>
                    </div>
                </li>
                <li class="rounded-lg shadow-lg transform duration-200">
                    <div class="py-4 md:py-6 lg:py-8 px-2 md:px-3 lg:px-4">
                        <i class="w-full text-center fa-solid fa-power-off text-2xl md:text-4xl lg:text-6xl" aria-hidden="true"></i>
                        <h3 class="w-full text-center mt-4">Shut down</h3>
                        <p class="w-full text-center mt-4 text-lg md:text-xl">Turn off your computer if you're not using it. Don't use sleep mode!</p>
                    </div>
                </li>
                <li class="rounded-lg shadow-lg transform duration-200">
                    <div class="py-4 md:py-6 lg:py-8 px-2 md:px-3 lg:px-4">
                        <i class="w-full text-center fa-solid fa-mobile text-2xl md:text-4xl lg:text-6xl" aria-hidden="true"></i>
                        <h3 class="w-full text-center mt-4">Use a mobile device</h3>
                        <p class="w-full text-center mt-4 text-lg md:text-xl">For quick searches or checking your emails, use your phone or a tablet.</p>
                    </div>
                </li>
                <li class="rounded-lg shadow-lg transform duration-200">
                    <div class="py-4 md:py-6 lg:py-8 px-2 md:px-3 lg:px-4">
                        <i class="w-full text-center fa-brands fa-bitcoin text-2xl md:text-4xl lg:text-6xl" aria-hidden="true"></i>
                        <h3 class="w-full text-center mt-4">Avoid non-green Crypto</h3>
                        <p class="w-full text-center mt-4 text-lg md:text-xl">Cryptocurrency mining is very energy intensive (it could be as much energy as the entire of Ireland uses) and has a huge carbon footprint. Avoid cryptocurrency that isn't energy efficient and certified green.</p>
                    </div>
                </li>
            </ul>
            
            <hr class="w-1/2 mx-auto my-32">
            
            <h2 class="text-2xl md:text-3xl lg:text-4xl">Cryptocurrency and NFTs.</h2>
            <p class="mt-4">
                Cryptocurrency mining is very energy intensive (it could be as much energy as the entire of Ireland uses) and has taken on industrial proportions in countries where there is cheap electricity and political favor.<br>
                NFTs and coins have huge environmental impacts to our planet and release tonnes of CO<sub>2</sub> every year.
            </p>
            <div class="bg-red-700 my-16 py-4 px-6 text-white">
                Bitcoin released 114.06 Megatonnes CO<sub>2</sub> last year and releases 1170.91 kg CO<sub>2</sub> per transaction. That's equivalent to 2,595,147 VISA transactions or 195,152 hours of watching Youtube.<br>
                <span class="text-lg">Source: <a href="https://digiconomist.net/bitcoin-energy-consumption" target="_blank" class="underline">Bitcoin Energy Consumption, Digiconomist, 2022 <i class="fa-solid fa-up-right-from-square text-sm" aria-hidden="true"></i></a>.</span>
            </div>
            <div class="bg-red-700 my-16 py-4 px-6 text-white">
                A single NFT transaction on the Ethereum platform emits almost 150 kilograms of carbon dioxide, equivalent to 331,056 Visa transactions or 24,895 hours of watching YouTube. However, this may change soon.<br>
                <span class="text-lg">Source: <a href="https://www.investopedia.com/nfts-and-the-environment-5220221" target="_blank" class="underline">NFTs and the Environment, Investopedia, 2022 <i class="fa-solid fa-up-right-from-square text-sm" aria-hidden="true"></i></a>.</span>
            </div>
            <p class="mt-4">
                Solana, Algorand, Cardano, and Tezos offer energy-efficient NFTs which heavily reduce the environmental impact of transactions.
            </p>
            <p class="mt-4">
                The Ethereum blockchain is about to become less of an energy hog thanks to a new "proof-of-stake" operating model.
                The official switch to this new model is planned to take effect in the second quarter of 2022, according to ethereum.org<br>
                Once the merge is complete, the expected energy consumption for a proof-of-stake Ethereum transaction should be the equivalent of 20 minutes of television.
            </p>
            <canvas id="cryptoCarbon" width="400" height="100"></canvas>
            <script>
            const ccx = document.getElementById('cryptoCarbon').getContext('2d');
            const cryptoCarbon = new Chart(ccx, {
                type: 'bar',
                data: {
                    labels: ['Bitcoin (1170kg)', 'Ethereum (Pre-POS) (150kg)', 'Dogecoin (282kg)', 'Ripple / XRPL (0.01kg)'],
                    datasets: [{
                        label: 'Kilograms of CO2 per single transaction',
                        data: [1170, 150, 282, 0.01],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ]
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
            </script>
            
            <hr class="w-1/2 mx-auto my-32">
            
            <h2 class="text-2xl md:text-3xl lg:text-4xl">Developers: How you can make your websites more green.</h2>
            <p class="mt-4">
                <strong>Reduce page size.</strong><br>
                <span class="text-lg md:text-xl lg:text-2xl">
                    Minifying your code not only makes pages load faster, but it also saves on bandwidth, server power, and therefore electricity.
                    Use JPGs instead of PNGs and reduce the amount of video on your site. Don't autoplay videos.
                </span>
            </p>
            <p class="mt-4">
                <strong>Switch to a green web host.</strong><br>
                <span class="text-lg md:text-xl lg:text-2xl">
                    Green web hosts use renewable energy to host web pages. We even use one! You can find a list of green web hosts at the
                    <a href="https://www.thegreenwebfoundation.org/directory/" target="_blank" class="underline">Green Web Foundation's Hosting Directory
                    <i class="fa-solid fa-up-right-from-square text-sm" aria-hidden="true"></i></a>
                </span>
            </p>
        </main>
        
        <?php include __DIR__.'/../common/footer.inc'; ?>
        
    </body>
</html>