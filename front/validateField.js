var validateField = function(fieldElem, infoMessage, validateFn) {

	if (fieldElem.is(':last-child')) {
		fieldElem.parent().append("<span></span>");
	}

	var inputValue = fieldElem.val();
	var formStatus = fieldElem.next();
	formStatus.removeClass();

	if (fieldElem.is(':focus')) {
		formStatus.text("ok");
		formStatus.addClass("info");
		return;
	}

	if(!inputValue) {
		formStatus.text("");
	} else if (validateFn(fieldElem.val())) {
		formStatus.text("ok");
		formStatus.addClass("ok");
	} else {
		formStatus.text("error");
		formStatus.addClass("error");
	}
};

$(document).ready(function() {
	var createFormHandler = function(field, text, method) {
	    return function() {
	    	validateField(field, text, method);
	 	}
	 }

	 //methods that validate each specific event
	var studentIDVal = createFormHandler(
	    $('#studentID'), "8 digit ID only",
	    function(input) {
    		IDRegex = /^[0-9]{8}$/i;
		 	return input.match(IDRegex);
	    }
    );

	$('#studentID').focus(studentIDVal);

});