<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>SNEAQERS - Website for Sneakers</title>
</head>

<body>
    <!--Header Section-->
    <section>
        <div class="header container-fluid " style="height:670px;">
            <?php include "../includes/navbar.html" ?>
            <!--Slogan section-->
            <div class="container-fluid justify-content-center align-items-center px-5 "
                style="width: 700px; margin-top: 100px;">
                <h1 class="fs-1 text-light text-center justify-content-center align-items-center fw-1 mb-3 "
                    style="margin-left: 40px">Discover Sneakers That Define Your Everyday Look</h1>
                <p class="fs-6 text-light text-center  align-items-center fw-light  "
                    style="margin-left: 50px; margin-top: 40px;">From iconic drops to timeless classics, discover
                    authentic sneakers designed for comfort, style and everyday confidence.</p>
            </div>

            <!--Shop Now-->
            <div id="shopbtn" class="align-items-center justify-content-center w-25 pt-5 container-sm">
                <button class="btn btn-sm btn-light text-dark rounded-pill fs-5 mt-3 " type="button"
                    style="width: 190px; height: 45px; margin-left: 25%;">Shop Now</button>
            </div>

            <div id="navbtn" class="d-flex flex-row-reverse gap-2" style="margin-left:auto; margin-top:150px;">
                <button class="rightbtn rounded-circle btn btn-dark" type="button"><svg
                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-chevron-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
                    </svg></button>
                <button class="leftbtn rounded-circle btn btn-dark" type="button"><svg
                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-chevron-left " viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0" />
                    </svg></button>

            </div>
        </div>

    </section>

    <!--Offer Section-->
    <section>
        <div class="container-fluid align-items-center justify-content-center d-flex gap-3 px-5 py-2 my-5"
            style="height: 400px;">
            <!--card 1-->
            <div class="card border border-0 rounder"
                style="width: 20rem; background-image:url('../assets/images/placeholder.png'); height:400px; ">
                <div class="card-body px-3">

                    <h6 class="card-subtitle my-3 text-body-secondary">Sneakers That Move With You, Comfortable,
                        Durable, And Always In Style.</h6>
                    <button class="btn btn-sm btn-dark rounded-pill fs-6" style="height:2rem; width:7.5rem;">Find your
                        Fit</button>

                </div>
            </div>

            <!--card 2-->
            <div class="card border border-0 rounder"
                style="width: 20rem; background-image:url('../assets/images/placeholder.png'); height:400px;">
                <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-body-secondary" style="margin-top: 17rem;">Fresh Drops. Iconic
                        Silhouettes. Sneakers That Speak Before You Do.</h6>
                    <button class="btn btn-sm btn-light rounded-pill fs-6" style="height:2rem; width:7.5rem;">Get Your
                        Pair</button>
                </div>
            </div>

            <!--card 3-->
            <div class="card border border-0 rounder box-shadow shadow-lg p-3 " style="width: 20rem; height:400px;">
                <div class="card-body " style="margin-top: 10px;">
                    <h3 class="card-title text-dark my-4 text-center">FOOTENSTOCK</h3>
                    <h6 class="card-subtitle mb-2 text-body-dark my-4 text-center">BUY 2 GET 40% OFF THE LOWEST PRICED
                        PAIR</h6>
                    <button class="btn btn-sm btn-dark rounded-pill fs-6 my-4"
                        style="height:2rem; width:8.5rem; margin-left: 60px;">Shop Sneakers</button>
                    <p class="card-text text-secondary lh-base my-4 text-center">*Discount Applies To Lower Item*
                        Available In-Store And Online On Sneaqer.Com No Returns Or Exchanges</p>


                </div>
            </div>
        </div>
    </section>

    <!--Slider Section-->
    <section>
        <div class="container-fluid text-center my-5 py-3">
            <h2 class="fs-1 fw-bold mt-4 mb-3">Just Dropped Collections</h2>
            <p class="text-secondary fs-5">
                These sneakers are crafted using high-quality materials for long-lasting comfort and everyday wear
            </p>

            <div class=" slider d-flex flex-nowrap overflow-auto gap-3 p-3 my-4">

                <div class="item flex-shrink-0">
                    <img src="../assets/images/placeholder.png" class="rounded"
                        style="width:400px;height:400px;object-fit:cover;">
                    <div class="slider-text mt-3" style="width: 400px;">
                        <div class="d-flex">
                            <h6 class="text-dark fs-6">Nike Air Max Sneakers</h6>
                            <h6 class="text-dark ms-auto fs-6">$200.00</h6>
                        </div>
                        <h6 class="text-secondary fs-6 text-start">Unisex Sneakers</h6>

                    </div>
                </div>

                <div class="item flex-shrink-0">
                    <img src="../assets/images/placeholder.png" class="rounded"
                        style="width:400px;height:400px;object-fit:cover;">
                    <div class="slider-text mt-3" style="width: 400px;">
                        <div class="d-flex">
                            <h6 class="text-dark fs-6">Suede Converse Sneakers</h6>
                            <h6 class="text-dark ms-auto fs-6">$180.00</h6>
                        </div>
                        <h6 class="text-secondary fs-6 text-start">Women's Sneakers</h6>

                    </div>
                </div>

                <div class="item flex-shrink-0">
                    <img src="../assets/images/placeholder.png" class="rounded"
                        style="width:400px;height:400px;object-fit:cover;">
                    <div class="slider-text mt-3" style="width: 400px;">
                        <div class="d-flex">
                            <h6 class="text-dark fs-6">Nike Flywire Sneakers</h6>
                            <h6 class="text-dark ms-auto fs-6">$250.00</h6>
                        </div>
                        <h6 class="text-secondary fs-6 text-start">Men's Sneakers</h6>

                    </div>
                </div>

                <div class="item flex-shrink-0">
                    <img src="../assets/images/placeholder.png" class="rounded"
                        style="width:400px;height:400px;object-fit:cover;">
                    <div class="slider-text mt-3" style="width: 400px;">
                        <div class="d-flex">
                            <h6 class="text-dark fs-6">Superstar Sneakers</h6>
                            <h6 class="text-dark ms-auto fs-6">$200.00</h6>
                        </div>
                        <h6 class="text-secondary fs-6 text-start">Men's Sneakers</h6>

                    </div>
                </div>

                <div class="item flex-shrink-0">
                    <img src="../assets/images/placeholder.png" class="rounded"
                        style="width:400px;height:400px;object-fit:cover;">
                    <div class="slider-text mt-3" style="width: 400px;">
                        <div class="d-flex">
                            <h6 class="text-dark fs-6">Suede Converse Sneakers</h6>
                            <h6 class="text-dark ms-auto fs-6">$200.00</h6>
                        </div>
                        <h6 class="text-secondary fs-6 text-start">Women's Sneakers</h6>

                    </div>
                </div>

            </div>
        </div>
        <div class="container align-items-center justify-content-center ">
            <button class="btn btn-outline-dark btn-light text-dark rounded-pill my-5  "
                style=" margin-left: 550px;">See More Collection</button>
        </div>
    </section>
    <!--Recommended-->
    <section>
       <div class="d-flex align-items-center justify-content-center my-5">
            <div class="my-3 mx-5 p-4 align-items-center justify-content-center">
                <h2 class="text-dark text-center fs-1 ">Most Recommended Collection For You</h2>
                <p class="text-secondary text-center" >Find expertly curated sneakers crafted for style and everyday wear,  <br>Elevate you footwear with comfort-driven, timless design</p>
            </div>
       </div>
       <!--Card Section A-->
        <div class="d-flex flex-row align-content-center justify-content-center gap-4">
            <div class="div1 align-items-center justify-content-center rounded" style="background-image: url('../assets/images/placeholder.png'); width:700px; height:723px; background-repeat:no-repeat; background-size:cover;">
                <div class="div1text d-flex flex-column align-items-centre justify-content-center ms-5">
                    <h3 class="text-light mb-3" style="margin-top:590px; ">Sneakers</h3>
                    <button class="btn btn-lg btn-light text-dark rounded-pill fs-5 p-2 text-center" style="width:200px; height:50px;">View all sneakers</button>
                </div>
            </div>
            <div class="d-flex flex-column gap-4">
                <div class="div2 align-items-center justify-content-center rounded" style="background-image: url('../assets/images/placeholder.png'); width:700px; height:350px; background-repeat:no-repeat; background-size:cover;"></div>
                <div class="div2 align-items-center justify-content-center rounded" style="background-image: url('../assets/images/placeholder.png'); width:700px; height:350px; background-repeat:no-repeat; background-size:cover;"></div>
        </div>
        </div>
            </div>
            
    </section>
   <section>
  <div class="m-5">

    <div
      class="d-flex flex-column justify-content-center align-items-center text-center rounded p-5"
      style="background-image: url('../assets/images/placeholder.png');
             background-repeat: no-repeat;
             background-size: cover;
             height: 550px;"
    >

      <h1 class=" text-light mb-3 text-justify " style="max-width: 1000px; margin-top:-20px; font-size: 60px;">
        Build Your Style With Confident Steps By Wearing Our Sneakers
      </h1>

      <h5 class="text-light mt-4" style="max-width: 700px;">
        From iconic drops to timeless classics, discover authentic sneakers designed for comfort, style, and everyday confidence.
      </h5>
        <button class="btn text-dark btn-light rounded-pill mt-5">Shop Now</button>
    </div>

  </div>
</section>
    <!--Footer Section-->
    <section>
        <?php include "../includes/footer.html" ?>
    </section>
</body>

</html>