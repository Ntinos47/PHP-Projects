<?php
$sections = array(
  array(
    'id' => 'section1',
    'title' => 'ΑΦΙΕΡΩΜΑ ΚΩΣΤΑΣ ΣΗΜΙΤΗΣ',
    'subtitle' => 'ΟΛΑ ΤΑ ΑΡΘΡΑ',

    'img' => array(
      array('img1' => 'src:img/img1.jpg'),
      array('img2' => 'src:img/img2.jpg'),
      array('img3' => 'src:img/img3.jpg'),
      array('img4' => 'src:img/img4.jpg'),
    )
    'post-title' => array(
      array('title1' => 'Πώς ο Σημίτης φέρνει κοντά Μητσοτάκη – Ανδρουλάκη'),
      array('title2' => 'Εκδήλωση προς τιμήν του πρώην Πρωθυπουργού Κώστα Σημίτη'),
      array('title3' => 'Πώς ο Σημίτης διαδέχτηκε τον Ανδρέα Παπανδρέου στην πρωθυπουργία το 1996'),
      array('title4' => 'Η ένταξη της Ελλάδας στο ευρώ ήταν σωστή επιλογή'),
    ),
    'themes' => array(
      array('theme1' => 'Πολιτική'),
      array('theme2' => 'ΣΥΝΕΝΤΕΥΞΗ'),
    ),
    'name' => array(
      array('name1' => 'Γιάννης Ζουμπουλάκης'),
      array('name2' => 'Αγγελική Κουρουτζή'),
      array('name3' => 'Γιάννης Ζουμπουλάκης'),
      array('name4' => 'Κώστας Σημίτης'),
    )

  ),


  array(
    'id' => 'section2',
    'title' => 'ΒΗΜΑHISTORY',
    'subtitle' => 'ΟΛΑ ΤΑ ΑΡΘΡΑ',
    'posts-title' => 'Πεδινοί εναντίον Ορεινών: Ο άγνωστος ελληνικός εμφύλιος του 1863',
    'date' => '02.12.2022, 06:40',
    'name' => 'Γιάννης Διαμαντής'
    'Γιάννης Διαμαντής',
    'post-meta' => 'Πώς ξέσπασε και μεταξύ ποιων πλευρών ο άγνωστος ελληνικός εμφύλιος του 1863',
    'img1' => ,
    'art-content' => array(
      array('art1' => 'Βαλκανικοί Πόλεμοι: Πώς η Ελλάδα διπλασίασε την έκταση και τον πληθυσμό της'),
      array('art2' => 'Τσε Γκεβάρα: Τα στοιχεία που τον έκαναν παγκόσμιο είδωλο'),
    )
  ),


  array(
    'id' => 'section3',
    'title' => 'PODCASTS',
    'theme' => array(
      array('theme1' => 'BHMA ΣΗΜΕΡΑ')
      array('theme2' => 'ΓΛΩΣΣΑ ΓΛΩΣΣΑ')
      array('theme3' => 'ΑΠΟ ΠΟΥ ΝΑ ΑΡΧΙΣΩ')
    )
    'posts-title' => array(
      array('title1' => 'Μέσι: Επίσημος GOAT από τη FIFA')
      array('title2' => 'Η κρυφή ζωή των λέξεων')
      array('title3' => 'Ναι, το βιολογικό ρολόι χτυπά και μετά τα 40')
    )
    'button' => array(

    )

    array(
      'id' => 'section4',
      'title' => '50 ΧΡΟΝΙΑ ΠΟΛΥΤΕΧΝΕΙΟ',
      'posts-title' => array(
        array('title1' => 'Πολυτεχνείο: Η ιστορία της αιματοβαμμένης σημαίας')
        array('title2' => 'Η Δίκη του Πολυτεχνείου: Οι διαταγές της Χούντας και η απολογία των Δικτατόρων')
        array('title3' => 'Στην πορεία Τσίπρας , Κουτσούμπας – Τα μηνύματα')
        array('title4' => 'Κορυφώνονται οι εκδηλώσεις για την επέτειο του Πολυτεχνείου – Δρακόντεια μέτρα ασφαλείας')
      )
      'post-meta' => 'Τζουμάκας, Πολάκης, Παπουτσής, Λαζαρίδης, Δραβαλιάρης και πλήθος άλλων κράτησαν τη σημαία του Πολυτεχνείου',
      'img' => '',
      'theme' => array(
        array('theme1' => 'Κοινωνία')
        array('theme2' => 'Πολιτική')
        array('theme3' => 'Κοινωνία')
      )
      'name' => array(
        array('theme1' => 'Κοινωνία')
        array('theme2' => 'Πολιτική')
        array('theme3' => 'Κοινωνία')
      )
      'ef' => 'ΠΡΩΤΟΣΕΛΙΔΑ ΤΗΣ ΕΠΟΧΗΣ',
      
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