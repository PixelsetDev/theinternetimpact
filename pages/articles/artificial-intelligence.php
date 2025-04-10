<section>
    <h2>Knowledge like never before.</h2>
    <p>
        AI brings us quick and easy access to knowledge in a way we've never before experienced. What would previously
        take upwards of five Google searches, we can now do with one message to ChatGPT.
    </p>
    <p>
        This technology has the potential to solve problems at an unprecedented rate such as optimising existing
        systems, finding new solutions to issues, and even detecting cancer earlier than human doctors can.
    </p>
</section>

<section>
    <h2>Environmental Impact</h2>
    <div class="grid-2 gap-std">
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
        <div class="card-yellow grid gap-std">
            <p>
                Some applications of AI, such as fossil fuel discovery and exploration, may worsen climate change. Use
                of AI for personalized marketing may also cause increased consumption of goods, which could also
                increase global emissions indirectly.
            </p>
            <p class="source">
                Source: <a href="https://www.scientificamerican.com/article/ais-climate-impact-goes-beyond-its-emissions/" target="_blank">Scientific American, 2023 <?= $c->externalLink(); ?></a>.
            </p>
        </div>
    </div>
</section>

<section>
    <h2>Fighting Climate Change</h2>
    <div class="grid-2 gap-std">
        <div class="card-yellow grid gap-std">
            <p>
                AI has the potential to help mitigate the effects of climate change, such as through better weather
                pattern predictions, disaster prevention, and being used to track pollution. Whilst this focuses on
                mitigating the effects, it doesn't directly help prevent climate change.
            </p>
            <p class="source">
                Source: <a href="https://news.un.org/en/story/2023/11/1143187" target="_blank">United Nations, 2023 <?= $c->externalLink(); ?></a>.
            </p>
        </div>
        <div class="card-green grid gap-std">
            <p>
                AI could also be used to optimise electricity grids and increase efficiency of green energy systems
                such as solar panels and wind farms. It could also be used to implement predictive maintenance which can
                reduce downtime in energy production. That can mean reducing the planet’s carbon footprint.
            </p>
            <p class="source">
                Source: <a href="https://news.un.org/en/story/2023/11/1143187" target="_blank">United Nations, 2023 <?= $c->externalLink(); ?></a>.
            </p>
        </div>
    </div>
</section>

<section class="alt">
    <div class="grid-2-1 gap-std">
        <div class="flex flex-col space-y-std">
            <h2>CO<sub>2</sub> emissions</h2>
            <p>
                The actual CO<sub>2</sub> emissions of AI is hard to predict due to its ever-changing nature. It also releases
                much more CO<sub>2</sub> to train a model as opposed to using it.
            </p>
            <div class="grid gap-2 text-center">
                <?= $c->progressBar(true, 0.33, 'Meta Llama 3.1 8B', '0.116g'); ?>
                <?= $c->progressBar(true, 0.78, 'Google Gemini 1.0 Pro', '0.274g'); ?>
                <?= $c->progressBar(true, 1.09, 'Meta Llama 3.1 70B', '0.383g'); ?>
                <?= $c->progressBar(true, 7.65, 'Google Gemini 1.5 Pro', '2.68g'); ?>
                <?= $c->progressBar(true, 7.65, 'OpenAI ChatGPT-4o', '2.68g'); ?>
                <?= $c->progressBar(true, 20.77, 'Meta Llama 3.1 405B', '7.27g'); ?>
                <?= $c->progressBar(true, 97.42, 'OpenAI ChatGPT-4', '34.1g'); ?>
            </div>
            <p>
                CO<sub>2</sub> emissions may vary depending on where the company running the AI sources their energy
                from.
            </p>
            <p class="source">Source: <a href="https://huggingface.co/spaces/genai-impact/ecologits-calculator" target="_blank">Ecologits.AI <?= $c->externalLink(); ?></a></p>
            <div class="flex-grow"></div>
        </div>

        <div class="flex flex-col space-y-std">
            <h2>Energy Consumption</h2>
            <p>
                The actual energy consumption of AI is hard to predict due to its ever-changing nature. It also takes much more
                energy to train a model as opposed to using it.
            </p>
            <div class="grid gap-2 text-center">
                <?= $c->progressBar(true, 2.7, 'Traditional Google Search', '1.08kJ'); ?>
                <?= $c->progressBar(true, 9, 'AI message (best case)', '3.6kJ'); ?>
                <?= $c->progressBar(true, 90, 'AI message (worst case)', '36kJ'); ?>
            </div>
            <div class="flex-grow"></div>
        </div>
    </div>
</section>

<section>
    <h2>Is that correct?</h2>
    <p>
        Since AI is trained on pre-existing data, it learns what's in it. If that data is wrong, so is the output. AI
        can also sometimes "hallucinate" which may lead to incorrect information being shared.
    </p>
    <p>
        It's also typical for AI models to have a "knowledge cutoff", meaning they only know information up until a
        certain point in time. Due to this, newer information may be missing from these models.
    </p>
    <p>
        Newer AI models are becoming more accurate and knowledgeable, it's likely that over time this problem will
        improve greatly.
    </p>
</section>

<section>
    <h2>Copyright and Content Ownership</h2>
    <p>
        AI companies have been scraping content from across the internet to train their AI models on, often without
        permission and ignoring legal licenses in place on these sites.
    </p>
</section>

<section>
    <h2>Learn more</h2>
    <div class="grid-2 gap-std">
        <a href="/power" class="btn-primary">Power</a>
        <a href="/environment" class="btn-primary">Environment</a>
    </div>
</section>

<section>
    <p class="source">Last updated: 2025-03-25 by Lewis</p>
</section>

<?= $c->popup('ai-evolution', 'warning', 'Artificial Intelligence','AI is evolving incredibly quickly, due to this some information on this page may be out of date. If it\'s not, it probably will be soon. We\'re updating the content here as quickly as possible, but we can\'t guarantee it\'s perfectly current.'); ?>