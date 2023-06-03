<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

</head>
<body>
    <section class="header">
        <a href="homepage.php" class="logo">PICK & GO TOURISM</a>
 


    <nav class="navbar">
        <a href="homepage.php">Home</a>
        <a href="about.php">about</a>
        <a href="package.php">package</a>
        <a href="book.php">book</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>



    </section>



<div class="heading" style="background:url(header.jpg) no-repeat">
    <h1>book now</h1>
</div>


<section class="booking">

    <h1 class="heading-title">book your trip!</h1>
    <form action="book_form.php" method="post" class="book-form">

        <div class="flex">
            <div class="inputBox">
                <span>name :</span>
                <input type="text" placeholder="Enter your name" name="name">
            </div>
            <div class="inputBox">
                <span>name :</span>
                <input type="email" placeholder="Enter your email" name="email">

            </div>
            <div class="inputBox">
                <span>phone :</span>
                <input type="number" placeholder="Enter your number" name="phone">
            </div>
            <div class="inputBox">
                <span>address :</span>
                <input type="text" placeholder="Enter your address" name="address">
            </div>
            <div class="inputBox">
                <span>where to :</span>
                <input type="text" placeholder="place you want to visit" name="location">
            </div>
            <div class="inputBox">
                <span>how many persons:</span>
                <input type="number" placeholder="number of guests" name="guests">
            </div>
            <div class="inputBox">
                <span>arrivals:</span>
                <input type="date" name="arrivals">
            </div>
            <div class="inputBox">
                <span>leaving:</span>
                <input type="date" name="leaving">
            </div>
        </div>
        <input type="submit" value="submit" class="btn" name="send">
</form>
</section>


















    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h4>Quick links</h4>
                <a href="homepage.php"> <i class="fas fa-angle-right"></i>Home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i>about</a>
                <a href="package.php"><i class="fas fa-angle-right"></i>package</a>
                <a href="book.php"><i class="fas fa-angle-right"></i>book</a>
            </div>


            <div class="box">
                <h4>extra links</h4>
                <a href="#"> <i class="fas fa-angle-right"></i>ask questions</a>
                <a href="#"> <i class="fas fa-angle-right"></i>about us</a>
                <a href="#"> <i class="fas fa-angle-right"></i>privacy policy</a>
                <a href="#"> <i class="fas fa-angle-right"></i>terms of use</a>
            </div>
            <div class="box">
                <h4>Contact Info</h4>
                <a href="#"> <i class="fas fa-phone"></i>+8801725746565</a>
                <a href="#"> <i class="fas fa-envelope"></i>arruhin6565@gmail.com</a>
                <a href="#"> <i class="fas fa-map"></i>Dhaka, Bangladesh</a>

               
            </div>
            <div class="box">
                <h4>Follow us</h4>
                <a href="#"> <i class="fas fa-facebook-f"></i>facebook</a>
                <a href="#"> <i class="fas fa-instagram"></i>instagram</a>
                <a href="#"> <i class="fas fa-linkedin"></i>linkedin</a>
                <a href="#"> <i class="fas fa-twitter"></i>twitter</a>
                

               
            </div>
        </div>
        <div class="creator">created by <span>abdur rahman</span></div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<script src="script.js"></script>



</body>
</html>