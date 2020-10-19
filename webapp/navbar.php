<div class="row align-items-center">
    <div class="col">
        <p><a href="profile.php">Profile</a></p>
    </div>
    <div class="col">
        <?php
        if ($userRow['role'] == "administrator") {
            echo "<p><a href='admin-tools.php'>Admin Tools</a></p>";
        }
        ?>
    </div>
    <div class="col">
        <p><a href="logout.php">Logout Here</a></p>
    </div>
</div>
