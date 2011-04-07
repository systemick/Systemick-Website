<?php //print $hello; ?>
<?php //print $heading; ?>

<?php //print render($content); ?>

<!--<pre>-->
<?php //print_r($content); ?>
<?php //print_r(get_defined_vars()); ?>

<div class="content"<?php print $content_attributes; ?>>
  <?php
    // Hide comments, tags, and links now so that we can render them later.
    hide($content['comments']);
    hide($content['links']);
    hide($content['field_tags']);
    //hide($content['title']);
    //print render($content['links']);
    print render($content);
  ?>
</div>

<?php if (!empty($content['field_tags']) || !empty($content['links'])): ?>
  <footer>
    <?php print render($content['field_tags']); ?>
    <?php print render($content['links']); ?>
  </footer>
<?php endif; ?>

<?php print render($content['comments']); ?>