<div class="menu container">
    <a href="/index.php">Αρχική</a>
    <a href="#">Υπηρεσίες</a>
    <a href="#">Προφίλ</a>
    <a href="#">Προιόντα</a>
    <a href="#">Επικοινωνία</a>
    <?php
    if(strpos($_SERVER['REQUEST_URI'], 'dashboard.php') == true){
        echo '<a href="log-out.php">Log out</a>';
     }
    ?>
</div>