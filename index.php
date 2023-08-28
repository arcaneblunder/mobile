<!doctype html>
<html lang="en">
    <?php require ('components/head.php'); ?>
    <body>
        <?php require ('components/header.php'); ?>
        <main>
            <div class="hero">
                <div class="shader py-5">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6 my-2 text-center">
                                <button type="button" class="btn redbutton" href="#">Begin Order</button>
                            </div>
                            <div class="col-sm-6 my-2 text-center">
                                <button type="button" class="btn redbutton" href="#">Reservations</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include ('components/specials.php'); ?>
            <section id="menu" class="pt-5 pb-3">
                <div class="container">
                    <h2 class="text-center">Our Menus</h2>
                    <p class="text-center">Download Our Mobile Menus</p>
                    <div class="row mt-4">
                        <div class="col-sm-6 my-2 text-center">
                            <div class="btn">
                                <button type="button" class="btn blackbutton" href="#">Pizza and Pasta</a>
                            </div>
                        </div>
                        <div class="col-sm-6 my-2 text-center">
                            <div class="btn">
                                <button type="button" class="btn blackbutton" href="#">Wine and Drinks</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="directions" class="py-5">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h2 class="text-center">Directions</h2>
                            <div>
                                <img src="https://placehold.co/600x400?text=Map+to+Location" alt="Placeholder Map" class="img-fluid">
                            </div>
                            <span class="d-block mt-3"><ons-button class="redbutton">Google Maps</ons-button></span>
                            <span class="d-block mt-3"><ons-button class="redbutton">Text Directions</ons-button></span>
                        </div>
                    </div>
                </div>
            </section>
            <section id="about" class="py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="text-center">About Us</h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis in sapien eget odio eleifend bibendum. Fusce ut malesuada mauris, at iaculis erat. Phasellus vitae sagittis tellus.
                            </p>
                            <span class="d-block mt-3"><ons-button class="redbutton">Read More</button></span>
                        </div>
                        <div class="col-md-6">
                            <img src="https://placehold.co/600x400?text=Image+of+Location" alt="Placeholder" class="img-fluid my-3">
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <?php require ('components/footer.php'); ?>
    </body>
</html>