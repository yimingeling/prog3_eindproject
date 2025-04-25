<?php
require_once "includes/actions.php";

if (!isset($_GET['id'])) {
    $data = getGames();
} else {
    $data = getGameDetails($_GET['id']);
}
header("Content-Type: application/json");
echo json_encode($data);
exit;
?>