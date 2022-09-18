<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Your feedback</title>
    <!-- <link rel="stylesheet" href="style.css"> -->

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <?php
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $contact = $_POST["contact"];
        $comments = $_POST["comments"];
        $thai = $_POST["thai"];
        $pwd = $_POST["pwd"];


        echo "<div class='container shadow-lg my-5 bg-body rounded w-60 p-4 border'>";

        if ($pwd === "12345") {
            if (!empty($name)) {
                echo "<h3 class='text-center'>Welcome, $name!</h3>";
            }

            if (!empty($email)) {
                echo "<p class='fs-5'><b>Email:</b> $email</p>";
            }

            if (!empty($phone)) {
                echo "<p class='fs-5'><b>Phone #:</b> $phone</p>";
            }

            if ($contact === "email") {
                echo "<p>We will contact you using your phone number.</p>";
            } elseif ($contact ==="phone") {
                echo "<p>We will contact you using your email address.</p>";
            } else {
                echo "<p>We will contact you using your phone number and email address.</p>";
            }

            if ($thai === "1") {
                echo "<p class='fs-5'>Glad to hear you like Thai too! My personal favorite is Pad Kee Mao.</p>";
                echo "<img src='images\pad-kee-mao.jpg'/>";
            } elseif ($thai ==="2") {
                echo "<p class='fs-5'>I'm afraid you might need to have your tastebuds examined by a doctor if you don't like Thai food.</p>";
            } else {
                echo "<p class='fs-5'>You should try some Thai food! My personal favorite is Pad Kee Mao.</p>";
                echo "<img src='images\pad-kee-mao.jpg'/>";
            }

            if (!empty($comments)) {
                echo "<p class='fs-5 mt-3'>Your comments</p>";
                echo "<textarea class='form-control' disabled readonly>$comments</textarea>";
                
            }
            
        } else {
            echo "<h2 class='text-center'>Incorrect Password</h2>";
            echo "<img class='rounded mx-auto' src='https://media.giphy.com/media/RgnJSrHHGLCtGr3VcA/giphy.gif'/>";
        }
        echo "</div>";
        
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>