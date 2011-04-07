<div class="wordpress-article-teaser">
  <p>
    <?php print $node['node_link']; ?>
    <em>Originally published: <?php print date('d/M/Y', $node['created']); ?></em>
  </p>
  <?php print $node['teaser']; ?>
</div>