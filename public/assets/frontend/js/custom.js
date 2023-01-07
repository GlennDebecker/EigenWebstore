
$(document).ready(function(){
    $("#cookiesModal").modal('show');

    $('#logout-button').click(function(){
        $('#logout-form').submit();
    });

    //Language change button js
    $('#language-toggle').click(function(){
        let lang = $("meta[name='lang']").attr("content");
        if(lang == 'en'){
            let url = $('#nl').data('url');
            window.location.replace(url);
        }else{
            let url = $('#en').data('url');
            window.location.replace(url);
        }
        console.log(lang);
    });


});
var isActive = document.getElementById("nav");
var btns = isActive.getElementsByClassName("nav-link")

for (var i = 0; i < btns.length; i++) {
	btns[i].addEventListener("click", function () {
		var current = document.getElementsByClassName("active");
		current[0].className = current[0].className.replace(" active", "");
		this.className += " active";
	});
}
function passwordVisibility() {
	var x = document.getElementById("exampleInputPassword1");
	if (x.type === "password") {
		x.type = "text";
	} else {
		x.type = "password";
	}
	var y = document.getElementById("eyeopened");
	y.classList.toggle("fa-eye-slash");
}
function passwordConfirm() {
	var x = document.getElementById("exampleInputPassword2");
	if (x.type === "password") {
		x.type = "text";
	} else {
		x.type = "password";
	}
	var y = document.getElementById("eyeopened");
	y.classList.toggle("fa-eye-slash");
}

$('.chat-input input').keyup(function (e) {
	if ($(this).val() == '')
		$(this).removeAttr('good');
	else
		$(this).attr('good', '');
});
function stepOne(){
	var a = document.getElementById("orderStep1");
	a.classList.toggle("active");
}
function stepTwo(){
	var b = document.getElementById("orderStep2");
	b.classList.toggle("active");
}
function stepThree(){
	var c = document.getElementById("orderStep3");
	c.classList.toggle("active");
}
function stepFour(){
	var d = document.getElementById("orderStep4");
	d.classList.toggle("active");
}
function stepFive(){
	var e = document.getElementById("orderStep5");
	e.classList.toggle("active");
}
function stepSix(){
	var f = document.getElementById("orderStep6");
	f.classList.toggle("active");
}


// function importData() {
// 	let input = document.createElement('input');
// 	input.type = 'file';
// 	input.onchange = _ => {
// 	  // you can use this method to get file and perform respective operations
// 			  let files =   Array.from(input.files);
// 			  console.log(files);
// 		  };
// 	input.click();

//   }
