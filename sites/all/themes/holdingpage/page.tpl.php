<html>
    <body>
		<div id="root">
			<div class="body-wrap">
				<div class="main">
					<?php print render($page['main']) ?>
					<?php print render($page['content']) ?>
				</div>
				<div class="footer">
					<?php print render($page['footer']) ?>
				</div>
			</div>	
		</div>
	</body>
</html>