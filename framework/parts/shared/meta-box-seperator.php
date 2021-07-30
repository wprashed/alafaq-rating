
  <?php echo piklist_form::template_tag_fetch('field_wrapper', $wrapper, 'end'); ?>

<?php if (!isset($close) || $close): ?>

  </div>

<?php endif; ?>

<div class="piklist-meta-box">

  <h3 id="<?php echo $meta_box['id']; ?>" class="piklist-meta-box-title"><?php echo $meta_box['data']['title']; ?></h3>

  <?php if (!empty($meta_box['data']['description'])): ?>

    <?php echo wpautop($meta_box['data']['description']); ?>

  <?php endif; ?>

  <?php echo piklist_form::template_tag_fetch('field_wrapper', $wrapper, 'start'); ?>

</div>
