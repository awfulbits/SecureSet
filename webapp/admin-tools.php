<?php
    session_start();
    require_once 'connect.php';
    if (!isset($_SESSION['user'])) {
        header("Location: index.php");
        exit;
    }
    $query = "SELECT * FROM people WHERE userid=?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$_SESSION['user']]);
    $userRow = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($userRow['role'] != "administrator") {
        header("Location: fourohfour.php");
        exit;
    }
?>

<?php include('header.php'); ?>
<div id="home-view" class="container text-center">
    <?php include('navbar.php'); ?>
    <h1>Welcome to the protected administrator page, <?php echo $userRow['username']; ?></h1>
<?php include('footer.php'); ?>
