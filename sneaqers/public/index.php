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
        <div class="header container-fluid " style="height:770px;  background-image: url('../assets/images/header.jpeg'); background-repeat: no-repeat; background-size: 1550px 900px; background-position: center; background-color: rgba(0, 0, 0, 0.5); background-blend-mode: overlay;">
            <?php include "../includes/navbar.html" ?>
            <!--Slogan section-->
            <div class="container-fluid justify-content-center align-items-center px-5 "
                style="width: 700px; margin-top: 10px;">
                <h1 class="fs-1 text-light text-center justify-content-center align-items-center fw-1 mb-3 "
                    style="margin-left: 40px">Discover Sneakers That Define Your Everyday Look</h1>
                <p class="fs-5 text-light text-center  align-items-center  "
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
            <div class="card border border-0 "
                style="width: 20rem; background-image:url('../assets/images/offer1.jpeg'); height:400px; background-position: center;  background-size: cover; border-radius:20px; ">
                <div class="card-body px-3">

                    <h6 class="card-subtitle my-3 text-body-secondary">Sneakers That Move With You, Comfortable,
                        Durable, And Always In Style.</h6>
                    <button class="btn btn-sm btn-dark rounded-pill fs-6 justify-content-center align-items-center" style="height:2.5rem; width:7.5rem;">Find your
                        Fit</button>

                </div>
                <div class=" d-flex flex-row-reverse me-4 my-4">
                    <img src="../assets/images/pumalogo.png" alt="puma-logo" height="20" width="25">
                </div>
            </div>

            <!--card 2-->
            <div class="card border border-0 " style="border-radius:20px; width: 20rem; background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0) 40%, rgba(0, 0, 0, 0.8) 100%),url('../assets/images/offer2.jpeg'); height:400px; background-position: center;  background-size: cover;">
                <div class="d-flex flex-row-reverse me-3 my-3">
                    <img src="../assets/images/nikelogowhite.png" alt="nike-logo" height="30" width="35">
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-light" style="margin-top: 13rem;">Fresh Drops. Iconic
                        Silhouettes. Sneakers That Speak Before You Do.</h6>
                    <button class="btn btn-sm btn-light rounded-pill fs-6 justify-content-center align-items-center" style="height:2.5rem; width:7.5rem;">Get Your
                        Pair</button>
                </div>
            </div>

            <!--card 3-->
            <div class="card border border-0 box-shadow shadow-lg p-3 " style="width: 20rem; height:400px; border-radius:20px;">
                <div class="card-body " style="margin-top: 10px;">
                    <h3 class="card-title text-dark my-4 text-center">FOOTENSTOCK</h3>
                    <h6 class="card-subtitle mb-2 text-body-dark my-4 text-center">BUY 2 GET 40% OFF THE LOWEST PRICED
                        PAIR</h6>
                    <button class="btn btn-sm btn-dark rounded-pill fs-6 my-4 justify-content-center align-items-center"
                        style="height:2.5rem; width:8.5rem; margin-left: 60px;">Shop Sneakers</button>
                    <p class=" card-text text-secondary lh-1 my-4 text-center" style="font-size: small;">*Discount Applies To Lower Item* <br>
                        Available In-Store And Online On Sneaqer.Com No Returns Or Exchanges</p>


                </div>
            </div>
        </div>
    </section>

    <!--Slider Section-->
    <section>
        <div class="container-fluid text-center mt-5 mb-1 py-3">
            <h2 class="fs-1 fw-bold mt-4 mb-3">Just Dropped Collections</h2>
            <p class="text-secondary fs-6 " style="line-height:1.5;">
                These sneakers are crafted using high-quality materials<br> for long-lasting comfort and everyday wear
            </p>

            <div class=" slider d-flex flex-nowrap overflow-hidden gap-3 my-3 mx-4">

                <div class="item flex-shrink-0">
                    <img src="../assets/images/NAMS.png" class="rounded"
                        style="width:350px; height:350px; object-fit:fill; ">
                    <div class="slider-text mt-3" style="width: 350px;">
                        <div class="d-flex">
                            <h6 class="text-dark fs-6">Nike Air Max Sneakers</h6>
                            <h6 class="text-dark ms-auto fs-6">$200.00</h6>
                        </div>
                        <h6 class="text-secondary fs-6 text-start">Unisex Sneakers</h6>

                    </div>
                </div>

                <div class="item flex-shrink-0">
                    <img src="../assets/images/SCS.png" class="rounded"
                         style="width:350px; height:350px; object-fit:fill; ">
                    <div class="slider-text mt-3" style="width: 350px;">
                        <div class="d-flex">
                            <h6 class="text-dark fs-6">Suede Converse Sneakers</h6>
                            <h6 class="text-dark ms-auto fs-6">$180.00</h6>
                        </div>
                        <h6 class="text-secondary fs-6 text-start">Women's Sneakers</h6>

                    </div>
                </div>

                <div class="item flex-shrink-0">
                    <img src="../assets/images/NFS.png" class="rounded"
                        style="width:350px; height:350px; object-fit:fill; ">
                    <div class="slider-text mt-3" style="width: 350px;">
                        <div class="d-flex">
                            <h6 class="text-dark fs-6">Nike Flywire Sneakers</h6>
                            <h6 class="text-dark ms-auto fs-6">$250.00</h6>
                        </div>
                        <h6 class="text-secondary fs-6 text-start">Men's Sneakers</h6>

                    </div>
                </div>

                <div class="item flex-shrink-0">
                    <img src="../assets/images/SS.png" class="rounded"
                         style="width:350px; height:350px; object-fit:fill; ">
                    <div class="slider-text mt-3" style="width: 350px;">
                        <div class="d-flex">
                            <h6 class="text-dark fs-6">Superstar Sneakers</h6>
                            <h6 class="text-dark ms-auto fs-6">$200.00</h6>
                        </div>
                        <h6 class="text-secondary fs-6 text-start">Men's Sneakers</h6>

                    </div>
                </div>

            </div>
        </div>
        <div class="container align-items-center justify-content-center " style="height:50px;">
            <button class="btn btn-outline-dark btn-light text-dark rounded-pill mb-5 fw-bold  "
                style=" margin-left: 550px; ">See More Collection</button>
        </div>
    </section>
    <!--Recommended-->
    <section>
        <div class="d-flex align-items-center justify-content-center mb-1 mt-3">
            <div class="my-3 mx-5 p-4 align-items-center justify-content-center">
                <h2 class="text-dark text-center fs-1 ">Most Recommended Collection For You</h2>
                <p class="text-secondary text-center mt-3 " style="line-height:1.5;">Find expertly curated sneakers crafted for style and everyday wear, <br>Elevate you footwear with comfort-driven, timless design</p>
            </div>
        </div>
        <!--Card Section A-->
        <div class="d-flex flex-row align-content-center justify-content-center gap-4">
            <div class="div1 align-items-center justify-content-center " style="border-radius:20px; background-image: url('../assets/images/Sneakers.jpeg'); width:700px; height:723px; background-repeat:no-repeat; background-size:cover; background-position:center -250px;">
                <div class="div1text d-flex flex-column align-items-centre justify-content-center ms-5">
                    <h3 class="text-light mb-3" style="margin-top:590px; ">Sneakers</h3>
                    <button class="btn btn-lg btn-light text-dark rounded-pill fs-6 fw-bold p-2 text-center" style="width:200px; height:50px;">View all sneakers<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-arrow-up-right ms-2 " viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
                        </svg></button>
                </div>
            </div>
            <div class="d-flex flex-column gap-4">
                <div class="div2 align-items-center justify-content-center " style="border-radius:20px; background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0) 40%, rgba(0, 0, 0, 0.8) 100%),url('../assets/images/Bags.jpeg'); width:700px; height:350px; background-repeat:no-repeat; background-size:cover; ">
                    <div class="div2textA align-items-center justify-content-center d-flex flex-column " style="margin-left:-400px;">
                        <h3 class="text-light mb-3 text-left" style="margin-top:223px; margin-left:-140px;">Bags</h3>
                        <button class="btn btn-lg btn-light text-dark rounded-pill fs-6 fw-bold p-2 text-center" style="width:200px; height:50px;">View all bags<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-arrow-up-right ms-2" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
                            </svg></button>
                    </div>
                </div>
                <div class="div2 align-items-center justify-content-center " style="border-radius:20px; background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0) 40%, rgba(0, 0, 0, 0.8) 100%),url('../assets/images/Headwear.jpeg'); width:700px; height:350px; background-repeat:no-repeat; background-size:cover;">
                    <div class="div2textB align-items-center justify-content-center d-flex flex-column" style="margin-left:-400px;">
                        <h3 class="text-light mb-3" style="margin-top:223px; margin-left:-80px;">Headwear</h3>
                        <button class="btn btn-lg btn-light text-dark rounded-pill fs-6 fw-bold p-2 text-center" style="width:200px; height:50px;">View all headwear<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-arrow-up-right ms-2" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
                            </svg></button>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!--Card Section B-->
        <div class="my-4 mx-5">
            <div class="div3 d-flex flex-column justify-content-center align-items-center " style="border-radius:20px; background-image:url('../assets/images/Sunglasses.jpeg'); background-repeat: none; background-size: cover; height:430px; background-position: center;">
                <div class="div3text align-items-center justify-content-center d-flex flex-column" style="margin-left:-1100px;">
                    <h3 class="text-light mb-3" style="margin-top:260px; margin-left:-80px;">Sunglasses</h3>
                    <button class="btn btn-lg btn-light text-dark rounded-pill fs-6 fw-bold p-2 text-center" style="width:230px; height:50px;">View all sunglasses<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-arrow-up-right ms-2" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
                        </svg></button>
                </div>
            </div>

        </div>
    </section>
    <!--Grid selection-->
    <section>
        <div class="d-flex flex-row ms-5 my-5">
            <div class="div1 text-start">
                <h1 class="text-dark">New Era Collections</h1>
                <p class="text-secondary lh-1">New era collections featuring fresh drops, bold designs <br> and street-ready comfort</p>
            </div>
            <div class="div2button ms-auto fw-bold btn btn-outline-dark rounded-pill mt-5 me-5" style="height: 40px;">See more collections</div>
        </div>
        <div class="d-flex-flex-column gap-3 align-items-center justify-content-center mx-5 ">
            <!--Upper Row-->
            <div class="upperrow d-flex flex-row gap-2 mb-5">
                <div class="img1 d-flex flex-column gap-4">
                    <div class="rounded" style="background-image: url('../assets/images/hayward.png'); background-size:cover; background-repeat:no-repeat; height:360px; width:350px;"></div>
                    <div class="img1txt text-dark" style="width:350px;">
                        <div class="d-flex">
                            <h6 class="text-dark fs-6">Hayward Futura 2.0 Backpack Bag</h6>
                            <h6 class="text-dark ms-auto fs-6">$200.00</h6>
                        </div>
                        <h6 class="text-secondary fs-6 text-start">Unisex Bag</h6>
                    </div>
                </div>
                <div class="img2 d-flex flex-column gap-4">
                    <div class="rounded" style="background-image: url('../assets/images/baseballcap.png'); background-size:cover; background-repeat:no-repeat; height:360px; width:350px;"></div>
                    <div class="img2txt text-dark"style="width:350px;">
                        <div class="d-flex">
                            <h6 class="text-dark fs-6">Nike Baseball cap</h6>
                            <h6 class="text-dark ms-auto fs-6">$120.00</h6>
                        </div>
                        <h6 class="text-secondary fs-6 text-start">Men's Head Wear</h6>
                    </div>
                </div>
                <div class="img3 d-flex flex-column gap-4">
                    <div class="rounded" style="background-image: url('../assets/images/duffel.png'); background-size:cover; background-repeat:no-repeat; height:360px; width:350px;"></div>
                    <div class="img3txt text-dark"style="width:350px;">
                        <div class="d-flex">
                            <h6 class="text-dark fs-6">Puma Deck Backpack Duffel Bags</h6>
                            <h6 class="text-dark ms-auto fs-6">$150.00</h6>
                        </div>
                        <h6 class="text-secondary fs-6 text-start">Unisex Bag</h6>
                    </div>
                </div>
                <div class="img4 d-flex flex-column gap-4">
                    <div class="rounded" style="background-image: url('../assets/images/skateboardsock.png'); background-size:cover; background-repeat:no-repeat; height:360px; width:350px;"></div>
                    <div class="img4txt text-dark"style="width:350px;">
                        <div class="d-flex">
                            <h6 class="text-dark fs-6">Crew sock Nike Skateboarding</h6>
                            <h6 class="text-dark ms-auto fs-6">$110.00</h6>
                        </div>
                        <h6 class="text-secondary fs-6 text-start">Unisex Sock</h6>
                    </div>
                </div>
            </div>
            <!--Lower Row-->
            <div class="lowerrow d-flex flex-row gap-2">
                <div class="img1 d-flex flex-column gap-4">
                    <div class="rounded" style="background-image: url('../assets/images/anklet.png'); background-size:cover; background-repeat:no-repeat; height:360px; width:350px;"></div>
                    <div class="img1txt text-dark"style="width:350px;">
                        <div class="d-flex">
                            <h6 class="text-dark fs-6">Crew sock Adidas Anklet</h6>
                            <h6 class="text-dark ms-auto fs-6">$115.00</h6>
                        </div>
                        <h6 class="text-secondary fs-6 text-start">Unisex Sock</h6>
                    </div>
                </div>
                <div class="img2 d-flex flex-column gap-4">
                    <div class="rounded" style="background-image: url('../assets/images/nikesunglass.png'); background-size:cover; background-repeat:no-repeat; height:360px; width:350px;"></div>
                    <div class="img2txt text-dark"style="width:350px;">
                        <div class="d-flex">
                            <h6 class="text-dark fs-6">Sunglasses Nike Eyewear</h6>
                            <h6 class="text-dark ms-auto fs-6">$100.00</h6>
                        </div>
                        <h6 class="text-secondary fs-6 text-start">Unisex Glasses</h6>
                    </div>
                </div>
                <div class="img3 d-flex flex-column gap-4">
                    <div class="rounded" style="background-image: url('../assets/images/allstars.png'); background-size:cover; background-repeat:no-repeat; height:360px; width:350px;"></div>
                    <div class="img3txt text-dark"style="width:350px;">
                        <div class="d-flex">
                            <h6 class="text-dark fs-6">All-stars Converse Sneakers</h6>
                            <h6 class="text-dark ms-auto fs-6">$150.00</h6>
                        </div>
                        <h6 class="text-secondary fs-6 text-start">Unisex Sneakers</h6>
                    </div>
                </div>
                <div class="img4 d-flex flex-column gap-4">
                    <div class="rounded" style="background-image: url('../assets/images/lacoste.png'); background-size:cover; background-repeat:no-repeat; height:360px; width:350px;"></div>
                    <div class="img4txt text-dark"style="width:350px;">
                        <div class="d-flex">
                            <h6 class="text-dark fs-6">Sneakers Skate show Black Lacoste</h6>
                            <h6 class="text-dark ms-auto fs-6">$180.00</h6>
                        </div>
                        <h6 class="text-secondary fs-6 text-start">Unisex Sneakers</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="m-5">

            <div
                class="d-flex flex-column justify-content-center align-items-center text-center  p-5"
                style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0) 40%, rgba(0, 0, 0, 0.8) 100%),url('../assets/images/lifestyle.jpeg');
             background-repeat: no-repeat;
             background-size: cover;
             background-position:center;
             background-color: rgba(0, 0, 0, 0.5);
             background-blend-mode: overlay;
             height: 550px;
             border-radius:20px;">

                <h1 class=" text-light mb-3 text-justify lh-1" style="max-width: 1050px; margin-top:-20px; font-size: 60px;">
                    Build Your Style With Confident Steps <br> By Wearing Our Sneakers
                </h1>

                <h5 class="text-light mt-4" style="max-width: 700px;">
                    From iconic drops to timeless classics, discover authentic sneakers designed for comfort, style, and everyday confidence.
                </h5>
                <button class="btn text-dark btn-light rounded-pill mt-5 fs-6 fw-bold"  style="width: 150px; height:50px;">Shop Now</button>
            </div>

        </div>
    </section>

    <!--Footer Section-->
    <section>
        <?php include "../includes/footer.html" ?>
    </section>
</body>

</html>