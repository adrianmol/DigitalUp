<?php

   include("dbconnect.php");
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = mysqli_real_escape_string($db,$_POST['name']);
      $password = mysqli_real_escape_string($db,$_POST['password']);

      
      $sql = "SELECT id FROM users WHERE username = '$name' AND password = '$password'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
		
      if($count == 1) {
         //session_register("name");
         $_SESSION['name'] = $name;
         //$_SESSION['id'] = $row;
         header("location: dashboard.php");
      }else {
        echo 
        '<script type="text/JavaScript">  
        alert("Λάθος username ή password "); 
        </script>' ;
        

      }
   }

?>

<?php include ('head.php') ?>

<?php include ('header.php') ?>

<body>



    <div class="container">
        <p class="my-text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae neque, qui eveniet, repudiandae magni modi
            ducimus saepe vel animi amet incidunt soluta quos unde aut.
        </p>

        <form method="post" style="max-width:300px;margin:auto">


            <h1 class="form-title">
                LOGIN
            </h1>
            <div class="input-container">
                <i class="fa fa-user icon"></i>
                <input class="input" type="text" id="name" placeholder="Username" name="name" required>
            </div>

            <div class="input-container">
                <i class="fa fa-key icon"></i>
                <input class="input" type="password" placeholder="Password" id="password" name="password" required>
            </div>

            <button type="submit" name="login_usr" id="login_usr" class="btn">LOGIN</button>

        </form>

        <div class="in-line">
            <a href="/index.php">
                <i class="fa fa-user iconnew">
                    <p>Νέος Λογαριασμός</p>
                </i>
            </a>
            <a href="#">
                <p>Forgot Password?</p>
            </a>
        </div>
    </div>

    <footer>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"> </script>

        <script type="text/javascript" src="js/script.js"></script>
    </footer>
</body>