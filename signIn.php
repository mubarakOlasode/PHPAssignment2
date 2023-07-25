<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
      <link rel="stylesheet" href="styles.css"/>
    <title>Sign in</title>
</head>
<body>
    <header>
        <?php
            include ('./global_header.php')

        ?>
    </header>
    <!-- <main>
        <div class="signIn_div">
            <form method="get">
                <div class="mb-3">
                    <label for="InputEmail" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="InputEmail" name="InputEmail" aria-describedby="emailHelp" required>
                    <p id="emailHelp" class="form-text">We'll never share your email with anyone else.</p>
                    <label for="Password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="Password" name="password" required>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
    </div>
    </main> -->
    <?php
        require_once ('./connection.php');
        $res = $database->read();
        echo "<script>console.log('$res')</script>";

        // try {
        //     require_once ('connection.php');
        //     $sql = 'SELECT * FROM Student';
        //     $res = mysqli_query($database->$connection, $sql);
        //     echo "<script>console.log('$res')</script>";

        // if (isset($_POST) && !empty($_POST)) {
        //     $email = trim($_POST['InputEmail']);
        //     $password = hash('sha512', $_POST['password']);
        //     // echo "<script>console.log('login password'+'$password')</script>";
        //     $res = $database->read($email, $password);
        //     echo "<script>console.log('$res')</script>";

        //     $data_entry = $res->$mysqli_affected_rows;
        //     if ($data_entry == 1) {
        //         session_start();
        //         foreach ($res as $data) {
        //             $_SESSION['email'] = $data['email'];
        //             header('Location:./view.php');
        //         }
        //     }
        // } else {
        //     echo 'Email or Password is not correct';
        // }
        // } catch (Exception $e) {
        //     echo $e->getMessage();
        // }

    ?>
</body>
</html>