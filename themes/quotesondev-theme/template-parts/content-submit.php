<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
	</header>

	<div class="entry-content">

		<form class="submit-form">
			<div class="input-container">
				<p>Author of Quote</p>
				<input class="submit_author" type="text" name="author" value="">
			</div>

			<div class="input-container">
				<p>Quote</p>
				<textarea class="quote_text" rows="4" cols="50" name="quote-text"></textarea>
			</div>

			<div class="input-container">
				<p>Where did you find this quote? (eg. book name)</p>
				<input class="quote_origin" type="text" name="quote-origin" value="">
			</div>

			<div class="input-container">
				<p>Provide the URL of the quote source, if available.</p>
				<input class="quote_url" type="text" name="quote-url" value=""><br>
			</div>

			<button class="post_quote" type="button">Submit Quote</button>
		</form>
	</div>
</article>