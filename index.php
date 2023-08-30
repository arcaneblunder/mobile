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
                    <div class="row mt-4">
                        <ons-button id="menubutton" onclick="showModal()" class="button">Menu<button hidden=""></button></ons-button>
                        <ons-modal direction="up" id="mymodal" class="modal" style="display: none; z-index: 10001;" data-device-back-button-handler-id="0">
                            <div class="modal__content">
                                <div style="text-align: center">
                                    <ons-page class="page">
                                        <div class="page__background"></div>
                                        <div class="page__content">
                                            <table id="menutable" class="table">
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th class="no-sort"></th>
                                                        <th class="no-sort"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <H5>Lasagna</h5>
                                                            <ons-button onclick="showProductDialogue()">Add to Cart</ons-button>
                                                        </td>
                                                        <td>
                                                            <img src="https://placehold.co/600x400" alt="Placeholder Image" class="d-block img-fluid ms-auto" style="max-width: 150px;">
                                                        </td>
                                                        <td>
                                                            $19.99
                                                        </td>
                                                    </tr>                                          
                                                </tbody>
                                            </table>
                                            <ons-button onclick="hideModal()" class="button redbutton">Cancel<button hidden=""></button></ons-button>
                                            <ons-button onclick="hideModal()" class="button redbutton">Order<button hidden=""></button></ons-button>
                                        </div>
                                    </ons-page>
                                    <template id="dialog.html">
                                        <ons-dialog id="my-dialog">
                                            <div style="text-align: center; padding: 10px;">
                                                <p>
                                                    This is a simple dialog!
                                                </p>
                                                <p>
                                                    <ons-input class="quantity" placeholder="1" name="quantity"></ons-input> <ons-button onclick="addCartItem('quantity')">Add to Cart</ons-button>
                                                </p>
                                                <p>
                                                    <ons-button onclick="hideDialog('my-dialog')">Close</ons-button>
                                                </p>
                                            </div>
                                        </ons-dialog>
                                    </template>
                                </div>
                            </div>
                        </ons-modal>
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
        <script>
        function showModal() {
            var modal = document.querySelector('ons-modal');
            modal.show();
           /* setTimeout(function () {
                modal.hide();
            }, 2000);*/
        };
        function hideModal() {
            //var modal = document.querySelector('ons-modal');
            $("#mymodal").hide();
            $("#menubutton").show();
        };
        function addCartItem () {
            alert('testing');
        };
        var showProductDialogue = function() {
            var dialog = document.getElementById('my-dialog');

            if (dialog) {
                dialog.show();
            } else {
                ons.createElement('dialog.html', { append: true })
                .then(function(dialog) {
                    dialog.show();
                });
            }
        };

        var hideDialog = function(id) {
            document
                .getElementById(id)
                .hide();
        };
    </script>
    <script>
        $(document).ready(function() {
    $('#menutable').DataTable( {
        
            "ordering": true,
            columnDefs: [
    { 
     orderable: false, targets:  "no-sort"}
    ]
        
    });
} );
    </script>
    </body>
</html>