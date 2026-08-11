<?php
/**
 * Run Iceland landing page
 * Sections are plain HTML partials; compose them here only.
 */
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/nav.php';

require __DIR__ . '/sections/hero.php';
require __DIR__ . '/sections/grid.php';
require __DIR__ . '/sections/countdown.php';
require __DIR__ . '/sections/about.php';
require __DIR__ . '/sections/trip.php';
require __DIR__ . '/sections/urgency.php';
require __DIR__ . '/sections/proof.php';
require __DIR__ . '/sections/signup.php';

require __DIR__ . '/includes/footer.php';
require __DIR__ . '/includes/sticky-cta.php';
?>
<script src="assets/js/main.js"></script>
</body>
</html>
