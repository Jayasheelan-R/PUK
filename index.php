<?php
// Minimal entrypoint: redirect to home.php if available.
// This makes the repo easier to serve with a web server that expects an index file.
$target = __DIR__ . '/home.php';
if (file_exists($target)) {
    header('Location: home.php');
    exit;
}
// Fallback: simple HTML response if home.php not present.
?><!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>PUK Project</title>
</head>
<body>
  <h1>PUK Project</h1>
  <p>No <code>home.php</code> found. Browse the repository files to find other pages (e.g., <code>about.html</code>, <code>services.php</code>).</p>
</body>
</html>
