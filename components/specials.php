<?php
echo <<<'EOL'
<section id="specials" class="pt-5">
    <div class="container">
        <h2 class="text-center red">Specials</h2>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <p class="text-center mb-5">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut blandit ante, eget ultricies erat.
                </p>
            </div>
        </div>
    </div>
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://placehold.co/300x200" class="d-block w-100" alt="Placeholder">
                </div>
                <div class="carousel-item">
                    <img src="https://placehold.co/300x200" class="d-block w-100" alt="Placeholder">
                </div>
                <div class="carousel-item">
                    <img src="https://placehold.co/300x200" class="d-block w-100" alt="Placeholder">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>
EOL
?>