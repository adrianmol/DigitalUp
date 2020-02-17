<?php include ("dbconnect.php"); ?>

<?php include ('head.php') ?>
<?php include ('header.php')?>

<body>
    <div class="container">

        <?php
                $username = $_SESSION['name'];
                $sql = "SELECT * FROM users WHERE username ='$username'";
                $result = $db->query($sql);
                  while($row = $result->fetch_assoc()){
                      echo $row->username;
                       echo'<div class="title">Username:</div> 
                       '.$row[username].'
                       <div class="title">Email:</div> 
                       '.$row[email].'';
                    }
                ?>

    </div>
</body>

</html>