<?php require_once('../private/initialize.php'); ?>

<?php 
$id = pid();
?>
<?php $page_title = 'Links2';//links to the header so that i can call the includes?>
<?php include(SHARED_PATH . '/header_links.php'); ?>

<?php 
echo "Page id:" . $id;

?>
<?php include(SHARED_PATH . '/footer_links.php'); //links to footer to close out body and html tags?>
