<?php
header("Content-Type: application/xml; charset=utf-8");

echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>https://tiranga-register.github.io/Signup/</loc>
        <lastmod><?php echo date('Y-m-d'); ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>
    <!-- Add more <url> entries as needed -->
</urlset>
