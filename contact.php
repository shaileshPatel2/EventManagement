<?php



if(isset($_POST['send'])){
   $conn = mysqli_connect('localhost','root','','contact_db');
   $name = $_POST['name'];
   $email = $_POST['email'];
   $number = $_POST['number'];
   $plan = $_POST['plan'];
   $address = $_POST['address'];
   $message = $_POST['message'];

   $insert = "INSERT INTO `contact_form`(`name`, `email`, `number`, `plan`, `address`, `message`) VALUES ('$name','$email','$number','$plan','$address','$message')";

   mysqli_query($conn, $insert);

   header('location:contact.php');

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body style="background-image: url(images/back/back12.jpg);">

    <div class="container">

        <?php @include 'header.php'; ?>

        <section class="contact">

            <h1 class="heading">contact us</h1>

            <form action=".php" method="post">

                <div class="flex">

                    <div class="inputBox">
                        <span>Name</span>
                        <input type="text" placeholder="enter your name" name="name" required>
                    </div>

                    <div class="inputBox">
                        <span>Email</span>
                        <input type="email" placeholder="enter your email" name="email" required>
                    </div>

                    <div class="inputBox">
                        <span>Mob Number</span>
                        <input type="number" placeholder="enter your number" name="number" required>
                    </div>

                    <div class="inputBox">
                        <span>Choose Plan</span>
                        <select name="plan">
                            <option value="basic">Birthday Plan</option>
                            <option value="premium">Wedding Plan</option>
                            <option value="ultimate">Other Plan</option>
                        </select>
                    </div>

                    <div class="inputBox">
                        <span>Address</span>
                        <textarea name="address" placeholder="enter your address" required cols="30"
                            rows="10"></textarea>
                    </div>

                    <div class="inputBox">
                        <span>Message</span>
                        <textarea name="message" placeholder="enter your message" required cols="30"
                            rows="10"></textarea>
                    </div>

                </div>

                <input type="submit" value="send message" name="send" class="btn">

            </form>

        </section>

        <?php @include 'footer.php'; ?>

    </div>















    <!-- swiper js link  -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>