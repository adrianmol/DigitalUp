<?php include('dbconnect.php') ?>

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
                Δημιουργείστε έναν Λογαριασμό!
            </h1>
            <div class="input-container">
                <i class="fa fa-user icon"></i>
                <input class="input" type="text" id="name" placeholder="Ονοματεπώνυμο" name="name">
            </div>

            <div class="input-container">
                <i class="fa fa-user icon"></i>
                <input class="input" type="email" id="email" placeholder="Email" name="email">
            </div>

            <div class="input-container">
                <i class="fa fa-key icon"></i>
                <input class="input" type="password" placeholder="Κωδικός Πρόσβασης" id="password" name="password">
            </div>

            <div class="input-container">
                <i class="fa fa-key icon"></i>
                <input class="input" type="password" placeholder="Επανάληψη Κωδικού Πρόσβασης" id="password_2"
                    name="password_2">
            </div>

            <button type="submit" name="reg_user" id="reg_user" class="btn">Sign Up</button>

            <div id="result"> </div>
        </form>


        <a href="/login.php">
            <p>΄Εχετε ήδη λογαριασμό; Επιστροφή στην σελίδα σύνδεσης</p>
        </a>
    </div>
</body>
<?php include "footer.php" ?>