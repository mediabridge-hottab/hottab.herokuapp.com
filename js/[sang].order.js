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
		if (event.target == chose_table_modal) {
			chose_table_modal.style.display = "none";
		}
	}

// Change currency unit, quick-service, delivery, take away, dine in
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
    $("#dine-in").click(function(){
    	$("#top-title").replaceWith("<div id='top-title'>Dine in</div>");
    	$("#dine-in-icon").replaceWith("<i id='dine-in-icon' class='mdi mdi-food'></i>");
    });
    $("#take-away").click(function(){
    	$("#top-title").replaceWith("<div id='top-title'>Take away</div>");
    	$("#dine-in-icon").replaceWith("<i id='dine-in-icon' class='mdi mdi-food-off'></i>");
    });
    $("#delivery").click(function(){
    	$("#top-title").replaceWith("<div id='top-title'>Delivery</div>");
    	$("#dine-in-icon").replaceWith("<i id='dine-in-icon' class='mdi mdi-gift'></i>");
    });
    $("#quick-service").click(function(){
    	$("#top-title").replaceWith("<div id='top-title'>Quick service</div>");
    	$("#dine-in-icon").replaceWith("<i id='dine-in-icon' class='mdi mdi-clock-fast'></i>");
    });
});