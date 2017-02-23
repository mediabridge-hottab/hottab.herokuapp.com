// Checkout modal
	// Get the modal
	var checkout_div = document.getElementById('checkout-div');
	// Get the button that opens the modal
	var checkout_btn = document.getElementById("checkout-btn");
	// Get the <span> element that closes the modal
	var checkout_close = document.getElementById("checkout-close");
	// When the user clicks the button, open the modal 
	checkout_btn.onclick = function() {
	    checkout_div.style.display = "block";
	}
	// When the user clicks on <span> (x), close the modal
	checkout_close.onclick = function() {
	    checkout_div.style.display = "none";
	}
	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
	    if (event.target == checkout_div) {
	        checkout_div.style.display = "none";
	    }
	    if (event.target == printer_div) {
	    	printer_div.style.display = "none";
	    }
	    if (event.target == remark_modal) {
			remark_modal.style.display = "none";
		}
		if (event.target == search_customer_div) {
			search_customer_div.style.display = "none";
		}
		if (event.target == on_keyboard_modal) {
			on_keyboard_modal.style.display = "none";
		}
	}

// Search customer
	// Get the modal
	var search_customer_div = document.getElementById("search-customer-modal");
	// Get the button that opens the modal
	var search_customer_call = document.getElementById("search-customer-call");
	// When the user clicks the input, open the modal
	search_customer_call.onclick = function(){
		search_customer_div.style.display = "block";
	}

// Printer modal
	// Get the modal
	var printer_div = document.getElementById('printer-modal');
	// Get the button that opens the modal
	var printer_btn = document.getElementById("printer-call");
	// Get the <span> element that closes the modal
	var printer_close = document.getElementById("printer-close");
	// When the user clicks the button, open the modal 
	printer_btn.onclick = function() {
	    printer_div.style.display = "block";
	}
	// When the user clicks on <span> (x), close the modal
	printer_close.onclick = function() {
	    printer_div.style.display = "none";
	}

// Remark modal
	// Get the modal
	var remark_modal = document.getElementById("remark-modal");
	// Get the button that opens the modal
	var remark_btn = document.getElementById("remark-call");
	// Get the element that closes the modal
	var remark_close = document.getElementById("remark-close");
	// When the user clicks on the button, open the modal
	remark_btn.onclick = function(){
		remark_modal.style.display = "block";
	}
	// When the user clicks on "OK", close the modal
	remark_close.onclick = function(){
		remark_modal.style.display = "none";
	}

// Search food modal
	// Get the modal
	var search_food_modal = document.getElementById("search-food-modal");
	// Get the button that opens the modal
	var search_food_call = document.getElementById("search-food-call");
	// Get the element that closes the modal
	var search_food_close = document.getElementById("search-food-close");
	// When the user clicks on the button, open the modal
	search_food_call.onclick = function(){
		search_food_modal.style.display = "block";
	}
	// When the user clicks on "back", close the modal
	search_food_close.onclick = function(){
		search_food_modal.style.display = "none";
	}

// On-keyboard modal
	// Get the modal
	var on_keyboard_modal = document.getElementById("on-keyboard-modal");
	// Get the button that opens the modal
	var on_keyboard_call = document.getElementById("on-keyboard-call");
	// Get the element that closes the modal
	var on_keyboard_close = document.getElementById("btn-done");
	// When the user clicks on the button, open the modal
	on_keyboard_call.onclick = function(){
		on_keyboard_modal.style.display = "block";
	}
	// When the user clicks on "DONE", close the modal
	on_keyboard_close.onclick = function(){
		on_keyboard_modal.style.display = "none";
	}

// Function of on-keyboard
	var quantity = document.getElementById("quantity");
	var barcode = document.getElementById("barcode");
	if (true) {}

// Change currency unit
$(document).ready(function(){
    $("#vnd").click(function(){
        $("#currency-unit").html("  VND  ");
    });
    $("#usd").click(function(){
        $("#currency-unit").html("  USD  ");
    });
    $("#jpy").click(function(){
        $("#currency-unit").html("  JPY  ");
    });
});

// "Add food, open item, sale-off, tax,..." modal