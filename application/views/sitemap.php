<?php
  header('Content-type: application/xml; charset="ISO-8859-1"',true);  
  $datetime1 = new DateTime(date('Y-m-d H:i:s'));
?>
 
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  <url>
    <loc><?php echo base_url(); ?></loc>
    <lastmod><?php echo $datetime1->format(DATE_ATOM); ?></lastmod>
    <changefreq>daily</changefreq>
    <priority>0.1</priority>
  </url>
  <url>
    <loc><?php echo base_url(); ?>company-profile</loc>
    <lastmod><?php echo $datetime1->format(DATE_ATOM); ?></lastmod>
    <changefreq>daily</changefreq>
    <priority>0.80</priority>
  </url>
  <url>
    <loc><?php echo base_url(); ?>visi-dan-misi</loc>
    <lastmod><?php echo $datetime1->format(DATE_ATOM); ?></lastmod>
    <changefreq>daily</changefreq>
    <priority>0.80</priority>
  </url>
  <url>
    <loc><?php echo base_url(); ?>our-customer</loc>
    <lastmod><?php echo $datetime1->format(DATE_ATOM); ?></lastmod>
    <changefreq>daily</changefreq>
    <priority>0.80</priority>
  </url>
  <url>
    <loc><?php echo base_url(); ?>power-cord-series</loc>
    <lastmod><?php echo $datetime1->format(DATE_ATOM); ?></lastmod>
    <changefreq>daily</changefreq>
    <priority>0.80</priority>
  </url>
  <url>
    <loc><?php echo base_url(); ?>wiring-assy</loc>
    <lastmod><?php echo $datetime1->format(DATE_ATOM); ?></lastmod>
    <changefreq>daily</changefreq>
    <priority>0.80</priority>
  </url>

  <url>
    <loc><?php echo base_url(); ?>career</loc>
    <lastmod><?php echo $datetime1->format(DATE_ATOM); ?></lastmod>
    <changefreq>daily</changefreq>
    <priority>0.80</priority>
  </url>
  <url>
    <loc><?php echo base_url(); ?>contact-us</loc>
    <lastmod><?php echo $datetime1->format(DATE_ATOM); ?></lastmod>
    <changefreq>daily</changefreq>
    <priority>0.80</priority>
  </url>
  <?php foreach ($data_power_cord->data as $key => $value): ?>
  <url>
    <loc><?php echo base_url(); ?>view/<?php echo $value->slug; ?></loc>
    <lastmod><?php echo $datetime1->format(DATE_ATOM); ?></lastmod>
    <changefreq>daily</changefreq>
    <priority>0.80</priority>
  </url>
  <?php endforeach ?>
</urlset>