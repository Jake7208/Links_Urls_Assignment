<?php require_once('../private/initialize.php'); ?>

<?php $page_title = 'Links';//links to the header so that i can call the includes?>
<?php include(SHARED_PATH . '/header_links.php'); ?>

        <ul style="list-style: none;">
            <li><a href="links2.php?page=1">Welcome</a></li>
            <li><a href="links2.php?page=2">hobbies</a></li>
            <li><a href="links2.php?page=3">About</a></li>
            <li><a href="links2.php?page=4">Vacation</a></li>
            <li><a href="links2.php?page=5">Favorite</a></li>
        </ul>


<?php include(SHARED_PATH . '/footer_links.php'); //links to footer to close out body and html tags?>

