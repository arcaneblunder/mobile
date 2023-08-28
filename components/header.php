<?php echo <<<'EOL'
<header class="main-header">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img href="#" src="https://placehold.co/170x60/red/white?text=Logo+Here" class="brand"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="directions.php">Directions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <span class="navbar-text d-block mt-2 pt-3 border-top border-light">
                        Subtotal: $Placeholder
                        <span class="d-block">
                            <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i> - Checkout</a>
                        </span>
                    </span>
                </ul>
            </div>
        </div>
    </nav>
</header>
EOL
?>