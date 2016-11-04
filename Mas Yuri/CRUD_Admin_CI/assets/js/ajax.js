function tampilPegawai() {
	// var search = $("#searchPegawai").val();

	$.ajax({
		method: "POST",
		url: "Pegawai/tampil"
		// data: "search=" + search
	})
	.done(function(data) {
		$("#dataPegawai").html(data);
	})
}

$(document).on("click", ".hapus-dataPegawai", function() {
	var id = $(this).attr("data-id");
	
	$.ajax({
		method: "POST",
		url: "Pegawai/delete",
		data: "id=" +id
	})
	.done(function() {
		tampilPegawai();
	})
})