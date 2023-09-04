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
                                                        <th class="no-sort"></th>
                                                        <th class="no-sort"></th>
                                                        <th class="no-sort"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <tr class="menu-item">
                                                        <td>
                                                            <!--<ons-button onclick="showProductDialogue()">+</ons-button>-->
                                                            <H5>Fettuccini</h5>
                                                        </td>
                                                        <td>
                                                            <img src="https://placehold.co/600x400" alt="Placeholder Image" class="d-block img-fluid ms-auto" style="max-width: 150px;">
                                                        </td>
                                                        <td>
                                                            $12.99
                                                        </td>
                                                    </tr>                                          
                                                    <tr class="menu-item">
                                                        <td>
                                                            <!--<ons-button onclick="showProductDialogue()">+</ons-button>-->
                                                            <H5>Spaghetti</h5>
                                                        </td>
                                                        <td>
                                                            <img src="https://placehold.co/600x400" alt="Placeholder Image" class="d-block img-fluid ms-auto" style="max-width: 150px;">
                                                        </td>
                                                        <td>
                                                            $11.99
                                                        </td>
                                                    </tr>                                          
                                                    <tr class="menu-item">
                                                        <td>
                                                            <!--<ons-button onclick="showProductDialogue()">+</ons-button>-->
                                                            <H5>Lasagna</h5>
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
											<ons-button onclick="showOrderModal()" class="button redbutton">Order<button hidden=""></button></ons-button>
                                        </div>
                                    </ons-page>
                                    <template id="dialog.html">
                                        <ons-dialog id="my-dialog">
                                            <div class="pt-3 text-center">
                                                <p>
                                                    <ons-input class="quantity" value="1" name="quantity" disabled></ons-input>
                                                    <ons-button onclick="increaseItem()" class="btn-inc">+</ons-button>
                                                    <ons-button onclick="decreaseItem()" class="btn-dec">-</ons-button>
                                                </p>
                                                <p>
                                                    <ons-button onclick="hideDialog('my-dialog')" class="me-3">Cancel</ons-button>
                                                    <ons-button onclick="addToOrder()">Add</ons-button>
                                                </p>
                                            </div>
                                        </ons-dialog>
                                    </template>
                                </div>
                            </div>
                        </ons-modal>
                        <ons-modal direction="up" id="order-model" class="modal" style="display: none; z-index: 10001;" data-device-back-button-handler-id="0">
                            <div class="modal__content">
                                <div class="pt-3 text-center">
                                    <ons-page class="page">
                                        <div class="page__background"></div>
                                        <div class="page__content">
											<h2>Your Order</h2>
											<div id="my-order"></div>
											<div class="text-end totals">
												<div>Subtotal: <span class="subtotal"></span></div>
												<div>Tax: <span class="tax"></span></div>
												<div>Total: <span class="total"></span></div>
											</div>
											</p>
                                            <ons-button onclick="hideOrderModal()" class="button redbutton">Cancel<button hidden=""></button></ons-button>
											<ons-button onclick="hideOrderModal()" class="button redbutton">Check Out<button hidden=""></button></ons-button>
                                        </div>
                                    </ons-page>
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
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

        <script>
        let row = '';
        const TAXRATE = .08;
		let itemArray = [
			["Fettuccini", 12.99, 0],
			["Spaghetti", 11.99, 0],
			["Lasagna", 19.99, 0]
		];
		
        function showModal() {
            var modal = document.querySelector('#mymodal');
            modal.show();
           /* setTimeout(function () {
                modal.hide();
            }, 2000);*/
        };
		
		function showOrderModal() {
			var modal = document.querySelector('#order-model');
			
            var subtotals = itemArray.map(i => [...i]);
            let subtotal = 0
			var strTable = "";
			for(var i = 0; i < itemArray.length; i++) {

				if (subtotals[i][2] > 0) {
					// create sub total to iterate and fix last two decimal
					strTable += '<div class="ordered-item">';
					subtotals[i].push(subtotals[i][2] * subtotals[i][1]);
					for(var j = 0; j < subtotals[i].length; j++) {
						strTable += "<div>";
						strTable += subtotals[i][j];
						strTable += "</div>";
						

						
					}
					strTable += "</div>";
                    // running subtotal added here
					subtotal += parseFloat(subtotals[i][3]);
				}


                

			}
			
			let tax = TAXRATE * subtotal;
			
			tax = parseFloat(tax);
			subtotal = parseFloat(subtotal);
			
			tax = tax.toFixed(2);
			
			let total = parseFloat(tax) + parseFloat(subtotal);
			
			total = total.toFixed(2);
			
			$('#my-order').empty().append(strTable);
			$('.subtotal').empty().append(subtotal);
			$('.tax').empty().append(tax);
			$('.total').empty().append(total);
				
			modal.show();
			
		}
		
		
        function hideModal() {
            //var modal = document.querySelector('ons-modal');
            itemArray = [
                ["Fettuccini", 12.99, 0],
                ["Spaghetti", 11.99, 0],
                ["Lasagna", 19.99, 0]
            ];

            $("#mymodal").hide();
            
        };
        function hideOrderModal() {
            //var modal = document.querySelector('ons-modal');
            $("#order-model").hide();
            $('.redbutton').show();
        };

        function increaseItem () {
            if ($.isNumeric($('.quantity').val())) {
                $('.quantity').val( function(i, oldval) {
                    return ++oldval;
                });
            }
        };

        function decreaseItem () {
            $('.quantity').val( function(i, oldval) {
                --oldval;
                if (oldval < 0 ) {
                    oldval = 0;
					alert('Quantity cannot be below 0. Number set to 0.');
                } 
                return oldval;
            });
            
        };


        
        $(".menu-item").on("click", function(event) {
            row = $(this).closest("tr").index();
            showProductDialogue();
            $('.redbutton').hide();
        });
        
		let orderArray = [];
		let quantity = [];

        function addToOrder() {
			hideDialog('my-dialog');

			if ($(".quantity").val() >= 0) {
                
                
				
				itemArray[row][2] = $(".quantity").val();

                //let timer;
                //clearTimeout(timer);
                // https://jsfiddle.net/loktar/3nMEB/1/
                //timer = setTimeout(function(){$(".quantity").val(1)},500);
				//location.href = 'order.php';
			}

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
                $('.redbutton').show();
        };


        // costs





    </script>
    <script>
        $(document).ready(function() {

            $('#menutable').DataTable( { 
                "ordering": false,
                columnDefs: [
                    { 
                        orderable: false, targets:  "no-sort"
                    }
                ] 
            });
        } );
    </script>
    </body>
</html>