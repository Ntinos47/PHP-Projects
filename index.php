<?php
$sections = array(
  array(
    'id' => 'section1',
    'title' => 'ΑΦΙΕΡΩΜΑ ΚΩΣΤΑΣ ΣΗΜΙΤΗΣ',
    'link' => '',
    'posts' => array(
      array('title' => 'test 1'),
      array('title' => 'test 2'),
      array('title' => 'test 3'),
      array('title' => 'test 4'),
    )
  ),
  array(
    'id' => 'section2',
    'title' => 'ΒΗΜΑHISTORY',
    'link' => '',
    'posts' => array(
    )
  ),
  array(
    'id' => 'section4',
    'title' => '50 ΧΡΟΝΙΑ ΠΟΛΥΤΕΧΝΕΙΟ',
    'link' => '',
    'posts' => array(
    )
  ),
); ?>


<?php foreach ($sections as $section) { ?>
  <div id="<?php echo $section['id']; ?>">
    <h2>
      <?php echo $section['title']; ?>
    </h2>
    <?php foreach ($section['posts'] as $post) { ?>
      <article>
        <?php echo $post['title']; ?>
      </article>
    <?php } ?>
  </div>
<?php } ?>