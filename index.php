<?php

include "config.php";

$sql = "SELECT title, description, button FROM hero WHERE id=1";
$result = $link->query($sql);
// $tit=$but=$des="";
// $result= $conn->query($sql);
if ($result->num_rows > 0){

    $row= $result-> fetch_assoc();
    $tit=$row["title"];
    $des=$row["description"];
    $but=$row["button"];
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        * {
            margin: 0;
            padding: 0;
        }

        body {
            line-height: 1.6;
        }

        /* nav */
        nav {
            display: flex;
            justify-content: space-between;
            background-color: rgb(147 40 40);
            align-items: center;
            color: white;
            padding: 15px 20px;
            font-weight: bold;
            font-family: "Poppins", serif;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
        }

        nav a:hover {
            color: rgb(212, 212, 230);
            text-decoration: underline;
            text-decoration-color: white;
        }

        /* main */
        main {
            display: flex;
            justify-content: center;
            text-align: center;
            background-image: url(images/college.jpg);
            /* background-color: blueviolet; */
            height: 100vh;
            color: white;
            flex-direction: column;
            align-items: center;
        }

        /* hero section */
        .hero {
            font-family: "Poppins", serif;
        }

        .hero h1 {
            font-size: 3rem;
            margin-bottom: 15px;
    
        }

        .hero p {
            font-size: 1.5rem;
            margin-bottom: 20px;
        }

        .hero a {
            text-decoration: none;
            background-color: white;
            color: rgb(81, 81, 214);
            padding: 10px 15px;
            border-radius: 5px;
            font-size: 1rem;
            font-weight: bold;
        }

        /* section */
        section {
            padding: 50px 20px;
            text-align: center;
            font-family: "Poppins", serif;
        }

        section h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        section p {
            font-size: 1.2rem;
            margin: 0 auto;
        }

        /* courses section */
        .courses {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .courses .course-box {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            width: 250px;
            box-shadow: 0 4px 8px rgb(82, 71, 71);
        }

        .courses .course-box h4 {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }
        /* footer */
        footer{
            display: flex;
            text-align: center;
            justify-content: center;
            color: white;
            background-color: black;
            font-size: 19px;
            padding: 15px 15px;
        }
        

    </style>
    <nav>
        <div class="logo" href="#">Tilottama College</div>
        <div class="links">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#courses">Courses</a>
            <a href="#contact">Contact</a>
        </div>

    </nav>
    <main>
        <div class="hero">
            <h1><?php echo"$tit" ?></h1>
            <p>
            <?php echo"$des" ?>
            </p>
            <a href="#contact"><?php echo"$but" ?></a>
        </div>
    </main>
    <section id="about">
        <h2>About Us</h2>
        <p>
            Lets Shape Your Furture Together. Here we offer various Courses including
            Science and Management for class 12 and BBA, MBA Programs are also available.
            Tilottama Campus was established in 1996 as the first private college in Rupandehi
            by a team of dedicated, experienced and enterprising academicians to cater for the
            growing demands of parents and students in the higher education by providing quality
            education and guaranteeing top class graduates.
        </p>
    </section>


        <!-- Crousel -->
         <div class="">

             <div id="carouselExampleFade" class="carousel slide carousel-fade">
                 <div class="carousel-inner">
                     <div class="carousel-item active">
                         <img src="images/college.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                <img src="images/mba.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                  <img src="images/web.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <section id="courses">
        <h2>Courses</h2>
        <div class="courses">

            <div class="course-box">
                <h4>For 11/12</h4>
                <p>Science, Management & Hotel Management</p>
            </div>
            <div class="course-box">
                <h4>Above</h4>
                <p>MBA, BBA</p>
            </div>
        </div>
    </section>

    <!-- Contact Section -->

    <section id="contact">
        <h2>Contact Me</h2>
        <p>
            Feel free to Contact Us! To Lighten Your Furture
        </p>
        <p><strong>Email:</strong> info@tilottama.edu.np</p>
        <p><strong>Phone:</strong> +977-071-437659</p>
        <p><strong>Locate Us:</strong> Tilottama-2, Yogikuti, Rupandehi, Nepal</p>
    </section>
    <!-- Footer -->
     <footer>
        <p>&copy; 2025 Tilottama Campus | All Right Reserved</p>
     </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>