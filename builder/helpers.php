<?php

// This function retrieves the asset path from the manifest file
// We need it to ensure that the correct versioned asset is used in the rendered HTML
function asset_path($path) {
    $manifestPath = __DIR__ . '/../source/assets/manifest.json';
    if (!file_exists($manifestPath)) {
        throw new Exception('The manifest file does not exist:' . $manifestPath);
    }

    $manifest = json_decode(file_get_contents($manifestPath), true);

    if (!array_key_exists($path, $manifest)) {
        throw new Exception("The path {$path} does not exist in the manifest.");
    }

    return '/assets/' . $manifest[$path]['file'];
}