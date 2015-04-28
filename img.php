<?php
  // Allow for arbitrary delay via CSS url. Defaults to 5 seconds.
  $delay = (is_numeric($_GET['delay'])) ? $_GET['delay'] : 5000;

  // Artificial delay to simulate network latency (in milliseconds).
  sleep($delay / 1000);

  // Output the image.
  header('Content-Type: image/jpeg');
  readfile('jbay.jpg');
