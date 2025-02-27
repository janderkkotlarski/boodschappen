<!-- Tab depth matters -->
	<body>
		<nav>
			<?php
			// Button names for each navigational link
			$nav_links = [
				"\\" => 'Bekijk boodschappenlijst',
				"\\create" => 'Voeg boodschap toe',
				"\\delete" => 'Haal boodschap weg'
			];

			$amount = 0;

			// Make the navigation buttons
			foreach ($nav_links as $link => $message) {
				makeFormButton($link, $message, $amount);
				$amount = 3;
			}
			?> 
		</nav>