<?php
/** @var $hn array */
/** @var $un array */
/** @var $pw array */
/** @var $db array */
/** @var $id array */
/** @var $id array */
/** @var $rid array */
/** @var $review array */
/*EDIT USER*/
require_once '../connection/conn.php';
$conn = mysqli_connect($hn, $un, $pw, $db);
$rid = $_GET['rid'];
$stmt = $conn->prepare('UPDATE review r
    set
    r.review = ?
    where id = '.$rid.' ');
var_dump($id);

$stmt->bind_param('s',$_POST['review']);
$stmt->execute();
header("Location: index.php");

exit;