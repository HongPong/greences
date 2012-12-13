<?php

/**
 * @file
 * Default theme implementation to present a picture configured for the
 * user's account.
 *
 * Available variables:
 * - $user_picture: Image set by the user or the site's default. Will be linked
 *   depending on the viewer's permission to view the user's profile page.
 * - $account: Array of account information. Potentially unsafe. Be sure to
 *   check_plain() before use.
 *
 * @see template_preprocess_user_picture()
 */
?>
<?php if ($account->uid != 0): ?>
<div class="user-picture">
<?php if ($user_picture): ?>
  <?php print $user_picture; ?>
<?php else: ?>
  <?php global $base_url; ?>
  <img title="<?php echo check_plain($account->name); ?>'s picture" src="<?php echo $base_url . '/' . drupal_get_path('theme', 'greences') ?>/images/default-user.png" />  
<?php endif; ?>
</div>
<?php endif; ?>