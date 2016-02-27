<?php foreach ($patterns as $pattern): ?>

	<!-- Pattern -->

	<section class="pattern container">

		<header class="pattern-preview">
			<h2><?php echo $pattern['name']; ?></h2>

			<div class="example">
				<?php echo $pattern['example']; ?>
			</div>

		</header>

		<div class="pattern-details">

			<main>
				<div class="pattern-markup">
						<h3>Markup</h3>
						<pre><code class="language-markup"><?php echo $pattern['markup']; ?></code></pre>
				</div>
				<div class="pattern-css">
					<h3>CSS</h3>
					<pre><code class="language-css"><?php echo $pattern['css']; ?></code></pre>
				</div>
				<div class="pattern-sass">
					<h3>SASS</h3>
					<pre><code class="language-css"><?php echo $pattern['sass']; ?></code></pre>
				</div>
			</main>

			<aside>
				<summary>
					<h3>Pattern Summary</h3>
					<p><?php echo $pattern['text']; ?></p>
					<ul>
						<li><a href="#" title="#">Download files</a></li>
					</ul>
				</summary>
			</aside>

		</div><!-- /pattern-details -->

	</section><!-- /pattern -->

<?php endforeach; ?>
