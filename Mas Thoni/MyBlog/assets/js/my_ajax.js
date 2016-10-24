if (window.jQuery) {
	console.log("JQuery Ditemukan");
} else {
	console.log("JQuery Tidak Ditemukan");
}

function tampil_artikel() {
	var search = $("#search-artikel").val();

	$.ajax({
		method: "POST",
		url: "../Admin/process/list_artikel.php",
		data: "search=" + search
	})
	.done(function(data) {
		$("#list-artikel").html(data);
	})
}

function tampil_kategori() {
	var search = $("#search-kategori").val();

	$.ajax({
		method: "POST",
		url: "../Admin/process/list_kategori.php",
		data: "search=" + search
	})
	.done(function(data) {
		$("#list-kategori").html(data);
	})
}

$(document).on("click", ".hapus-artikel", function() {
	var id = $(this).attr("data-id");
	
	$.ajax({
		method: "POST",
		url: "../Admin/process/hapus_artikel.php",
		data: "id=" +id
	})
	.done(function() {
		tampil_artikel();
	})
})

$(document).on("click", ".hapus-kategori", function() {
	var id = $(this).attr("data-id");
	
	$.ajax({
		method: "POST",
		url: "../Admin/process/hapus_kategori.php",
		data: "id=" +id
	})
	.done(function() {
		tampil_kategori();
	})
})

$("#search-artikel").keyup(function() {
	tampil_artikel();
})

$("#search-kategori").keyup(function() {
	tampil_kategori();
})

window.onload = function() {
	tampil_artikel();
	tampil_kategori();
}