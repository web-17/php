<?php

require_once "includes/db.php";

/*svar_dump($_POST);
echo "lali"












 ?>*/

 $author = $_POST['author'];
 $title = $_POST['title'];
 $publisher = $_POST['publisher'];
 $page_no = $_POST['page_no'];

if(!empty($author) && !empty($title) && !empty($publisher) && !empty($page_no)){

  $conn->prepare("INSERT INTO books ('author, title, publisher, page_no') VALUES ? ? ? ?");
  $sql->bind_param('ssss',$author, $title, $publisher, $page_no );

  $sql->close();
  $conn->close();
};








?>
