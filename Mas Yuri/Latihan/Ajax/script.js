if (window.jQuery) {
	console.log("JQuery Ditemukan");
} else {
	console.log("JQuery Tidak Ditemukan");
}

$("#formPegawai").submit(function(e) {
	var formPegawai = $(this).serialize();
	// var statusFormValue = $("#statusForm").val();
	// $("#timeline").append("<div>" +statusFormValue +"</div>");

	$.ajax({
		method: "POST",
		url: "proses.php",
		data: formPegawai
	})
	// .done(function(msg) {
	// 	console.log(msg);
	// })
	e.preventDefault();
})