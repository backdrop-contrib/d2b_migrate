<?php
/**
 * @file
 *
 * Default theme implementation for displaying the install page.
 *
 * Available variables:
 * - $task_list: A list of tasks that are being performed, with the current task marked.
 * - $main_content: The html that goes in the center area of the page.
 * These are defined in installer_browser_preprocess_installer_browser_install().
 *
 * @see installer_browser_preprocess_installer_browser_install().
 */
?>

<div class="migrate-page-sidebar">
  <?php print $task_list; ?>
</div>
<div class="migrate-page-main">
  <?php print $main_content; ?>
</div>
