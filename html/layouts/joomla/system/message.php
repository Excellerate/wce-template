<?php
/**
 * @package     Joomla.Site
 * @subpackage  Template.protostar
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
$msgList = $displayData['msgList'];
$alert = array('error' => 'alert-error', 'warning' => '', 'notice' => 'alert-info', 'message' => 'alert-success');
?>

<?php if (is_array($msgList) && !empty($msgList)) : ?>
<div id="system-message-container" class="ui modal">
  <div class="header">Message</div>
    <div class="content">
      <?php foreach ($msgList as $type => $msgs) : ?>
        <?php if (!empty($msgs)) : ?>
          <?php foreach ($msgs as $msg) : ?>
            <p><?php echo $msg; ?></p>
          <?php endforeach; ?>
        <?php endif; ?>
      <?php endforeach; ?>
    </div>
    <div class="actions">
      <div class="ui cancel button">OK</div>
    </div>
  </div>
</div>

<script>
  jQuery(document).ready(function(){
    $("#system-message-container").modal('show');
  });
</script>

<?php endif; ?>