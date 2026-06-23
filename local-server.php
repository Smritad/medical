<?php
/**
 * Local dev router that mimics the PRODUCTION server layout.
 *
 * On the live server the document root is the project root and the .htaccess
 * rewrites any path that does NOT start with /public/ into the public/ folder:
 *     RewriteCond %{REQUEST_URI} !^/public/
 *     RewriteRule ^(.*)$ public/$1 [L]
 *
 * So BOTH of these resolve to the same file on production:
 *     /public/frontend/images/logo.png   (legacy, already indexed)
 *     /frontend/images/logo.png          (clean URLs)
 *
 * This router reproduces that locally so images/css/js load with or without
 * the /public/ prefix. Run from the project root:
 *     php -S 127.0.0.1:8000 -t . local-server.php
 * or just double-click start-local.bat
 */

$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?? '');

// 1. A real file under the project root (covers legacy /public/... asset URLs)
//    -> let the built-in server serve it as-is.
if ($uri !== '/' && file_exists(__DIR__ . $uri) && !is_dir(__DIR__ . $uri)) {
    return false;
}

// 2. Clean asset URL (no /public/ prefix) that exists inside public/
//    -> serve it directly, mimicking the production rewrite.
if ($uri !== '/' && strpos($uri, '/public/') !== 0) {
    $pub = __DIR__ . '/public' . $uri;
    if (file_exists($pub) && !is_dir($pub)) {
        $ext = strtolower(pathinfo($pub, PATHINFO_EXTENSION));
        $types = [
            'css' => 'text/css', 'js' => 'application/javascript',
            'png' => 'image/png', 'jpg' => 'image/jpeg', 'jpeg' => 'image/jpeg',
            'gif' => 'image/gif', 'svg' => 'image/svg+xml', 'webp' => 'image/webp',
            'ico' => 'image/x-icon', 'woff' => 'font/woff', 'woff2' => 'font/woff2',
            'ttf' => 'font/ttf', 'otf' => 'font/otf', 'eot' => 'application/vnd.ms-fontobject',
            'mp4' => 'video/mp4', 'webm' => 'video/webm', 'json' => 'application/json',
            'pdf' => 'application/pdf', 'map' => 'application/json', 'txt' => 'text/plain',
        ];
        if (isset($types[$ext])) {
            header('Content-Type: ' . $types[$ext]);
        }
        readfile($pub);
        return; // stop here; our output IS the response
    }
}

// 3. Everything else -> Laravel front controller.
require_once __DIR__ . '/public/index.php';
