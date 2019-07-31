<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
	</header>

	<div class="entry-content">

		<form class="submit-form">
			<p>author of quote</p>
			<input class="submit_author" type="text" name="author" value="">

			<p>quote</p>
			<textarea class="quote_text" rows="4" cols="50" name="quote-text"></textarea>

			<p>where did you find this quote?(eg. book name)</p>
			<input class="quote_origin" type="text" name="quote-origin" value="">

			<p>provide the URL of the quote source, if available.</p>
			<input class="quote_url" type="text" name="quote-url" value=""><br>

			<input class="post_quote" type="submit" value="Submit Quote">
		</form>
	</div>
</article>