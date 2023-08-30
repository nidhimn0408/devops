<?php 
session_start(); // Start the session

$con = new mysqli('localhost', 'root', '', 'mybank');
define('bankname', 'MCB Bank'); // Remove the third argument

$userData = [];
if (isset($_SESSION['userId'])) {
    $userId = $_SESSION['userId'];
    $ar = $con->query("SELECT * FROM userAccounts, branch WHERE id = '$_SESSION[userId]' AND userAccounts.branch = branch.branchId");
    $userData = $ar->fetch_assoc();
}
?>
<script type="text/javascript">
	$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
