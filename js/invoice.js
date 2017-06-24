// Submit form with id function.
function showInvoice() {


    var inputs = document.getElementsByTagName("input");

    for (var i = 0; i < inputs.length; i++) {
        var title = inputs[i].getAttribute('placeholder');
        var inputId = inputs[i].getAttribute('id');
        var outputId = "invoice-" + inputs[i].getAttribute('id');
        document.getElementById(outputId).innerHTML = "<label>" + title + "</label>" + document.getElementById(inputId).value;

        console.log(inputId);
    }


}

$(document).ready(function() {

    $(".button-step").click(function() {
        $(".site-content-invoice-step").toggle();
        $('html, body').animate({
        scrollTop: $("#site-content-about").offset().bottom
    }, 2000);
    });

    $("input.taskUnitPrice").keyup(function() {

    	var x = $("input.taskUnitPrice").val();
    	var z = $("input.taskUnit").val();

    	var sum = x * z;

    	$("input.taskAmount").val(sum);
    	console.log(sum);
    });

});