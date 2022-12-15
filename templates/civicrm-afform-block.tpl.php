<?php

/**
 * @file
 * Default theme implementation for rendering book outlines within a block.
 *
 * This template is used only when the block is configured to "show block on all
 * pages", which presents multiple independent books on all pages.
 *
 * Available variables:
 * - $name: Name of the form to the display.
 * - $directive: The directive name.
 *
 * @ingroup themeable
 */
?>
<div class="crm-container">
  <crm-angular-js modules="<?php print $name ?>">
    <<?php print $directive ?>></<?php print $directive ?>>
  </crm-angular-js>
</div>
