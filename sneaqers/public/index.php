<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
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
            <div class="container-fluid justify-content-center align-items-center px-5 " style="width: 700px; margin-top: 100px;">
                <h1 class="fs-1 text-light text-center justify-content-center align-items-center fw-1 mb-3 " style="margin-left: 40px">Discover Sneakers That Define Your Everyday Look</h1>
                <p class="fs-6 text-light text-center  align-items-center fw-light  " style="margin-left: 50px; margin-top: 40px;">From iconic drops to timeless classics, discover authentic sneakers designed for comfort, style and everyday confidence.</p>
            </div>

            <!--Shop Now-->
            <div id="shopbtn" class="align-items-center justify-content-center w-25 mx-auto py-auto container-sm" style="padding-left: 115px;">
                <button class="btn btn-sm btn-light text-dark rounded-pill fs-5 mt-3 " type="button" style="width: 190px; height: 45px;">Shop Now</button>
            </div>

            <div id="navbtn" class="d-flex flex-row-reverse gap-2" style="margin-left:auto; margin-top:200px;">
                <button class="rightbtn rounded-circle btn btn-dark" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
                    </svg></button>
                <button class="leftbtn rounded-circle btn btn-dark" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left " viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0" />
                    </svg></button>

            </div>
        </div>

    </section>

    <!--Offer Section-->
    <section>
        <div class="container-fluid align-items-center justify-content-center d-flex gap-3 px-5 py-2 my-5" style="height: 400px;">
            <!--card 1-->
            <div class="card border border-0 rounder" style="width: 20rem; background-image:url('../assets/images/placeholder.png'); height:400px; ">
                <div class="card-body px-3">

                    <h6 class="card-subtitle my-3 text-body-secondary">Sneakers That Move With You, Comfortable, Durable, And Always In Style.</h6>
                    <button class="btn btn-sm btn-dark rounded-pill fs-6" style="height:2rem; width:7.5rem;">Find your Fit</button>
                    
                </div>
            </div>

            <!--card 2-->
            <div class="card border border-0 rounder" style="width: 20rem; background-image:url('../assets/images/placeholder.png'); height:400px;">
                <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-body-secondary" style="margin-top: 17rem;">Fresh Drops. Iconic Silhouettes. Sneakers That Speak Before You Do.</h6>
                    <button class="btn btn-sm btn-light rounded-pill fs-6" style="height:2rem; width:7.5rem;">Get Your Pair</button>
                </div>
            </div>

            <!--card 3-->
            <div class="card border border-0 rounder box-shadow shadow-lg p-3 " style="width: 20rem; height:400px;">
                <div class="card-body " style="margin-top: 10px;">
                    <h3 class="card-title text-dark my-4 text-center">FOOTENSTOCK</h3>
                    <h6 class="card-subtitle mb-2 text-body-dark my-4 text-center">BUY 2 GET 40% OFF THE LOWEST PRICED PAIR</h6>
                    <button class="btn btn-sm btn-dark rounded-pill fs-6 my-4" style="height:2rem; width:8.5rem; margin-left: 60px;">Shop Sneakers</button>
                    <p class="card-text text-secondary lh-base my-4 text-center">*Discount Applies To Lower Item* Available In-Store And Online On Sneaqer.Com No Returns Or Exchanges</p>
                    

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

    <div class="d-flex flex-nowrap overflow-auto gap-3 p-3 my-4">

        <div class="item flex-shrink-0">
            <img src=""
                 class="rounded"
                 style="width:250px;height:250px;object-fit:cover;">
        </div>

        <div class="item flex-shrink-0">
            <img src=""
                 class="rounded"
                 style="width:250px;height:250px;object-fit:cover;">
        </div>

        <div class="item flex-shrink-0">
            <img src=""
                 class="rounded"
                 style="width:250px;height:250px;object-fit:cover;">
        </div>

        <div class="item flex-shrink-0">
            <img src=""
                 class="rounded"
                 style="width:250px;height:250px;object-fit:cover;">
        </div>

        <div class="item flex-shrink-0">
            <img src=""
                 class="rounded"
                 style="width:250px;height:250px;object-fit:cover;">
        </div>

    </div>
</div>
    </section>
</body>

</html>