<?php require_once('../private/initialize.php'); ?>

<?php $page_title = 'Links';//links to the header so that i can call the includes?>
<?php include(SHARED_PATH . '/header_links.php'); ?>

        <ul style="list-style: none;">
            <li><a href="links2.php?page=1">Page 1</a></li>
            <li><a href="links2.php?page=2">Page 2</a></li>
            <li><a href="links2.php?page=3">Page 3</a></li>
            <li><a href="links2.php?page=4">Page 4</a></li>
            <li><a href="links2.php?page=5">Page 5</a></li>
        </ul>


<?php include(SHARED_PATH . '/footer_links.php'); //links to footer to close out body and html tags?>

