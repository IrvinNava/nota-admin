$(document).ready(function () {
   console.log("Speakers.js");

   var body = $("body");

   setTimeout( function(){
		let hash = window.location.hash;
		let finalHash = hash.replace('#','');
		if (hash.length) {
			$("#filters .btn").removeClass("active");
			// $container.isotope({ filter: finalHash });
			$("li[data-filter='"+finalHash+"']").addClass("active");
		}
	},500);

});