<?php
/**
 * The 404 error template
 */

get_header();

$page_requested = get_page_by_path($_SERVER['REQUEST_URI']);
$page_status = get_post_status($page_requested->ID);
?>
  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
      <?php
      if ($page_status == 'private' && !is_user_logged_in()) {
        echo "<h2>This page requires a member login, please login below to view this page</h2>";
      } else {
        echo "<h2>Page does not exist</h2>";
      }
      ?>
  </div><!-- .content-area -->
<?php
get_footer();