
// if (window.jQuery) {
// 	console.log("JQuery Ditemukan");
// } else {
// 	console.log("JQuery Tidak Ditemukan");
// }

//---------------------
var hasil = "";
$('button').click(function() {
	if ($(this).text() == '=') {
		hasil = eval($("#hasil").val());
		$("#hasil").val(hasil);
	} else if($(this).text() == '<') {
		var jumlah = hasil.length;
		hasil = hasil.substr(0, (jumlah-1));
		$("#hasil").val(hasil);
	} else if($(this).text() == 'c') {
		hasil = "";
		$("#hasil").val(hasil);
	} else {
		hasil = hasil + $(this).text();
		$("#hasil").val(hasil);
	}
});
//----------------------

//Belum bisa 
// $("h1").click(function() {
	// $("h3").addClass('red');
	// $("h3").removeClass('red');
	// $("h3").css('font-size', '50px');
	// console.log($("h3").attr('id'));
	// console.log($("h3").text());
	// console.log($("h3").html());
	// $("h3").append(' Ini dari klik');
// 	$("text").appendTo('h3');
// });

// $("#tambahForm").click(function() {
// 	$("#resultForm").append("<div class='form-control'><input type='text' name='data'><a class='removeForm'>Hapus</a></div><br>");
// });

// $(".removeForm").on({click : function() {
// 	$(this).parent().hide();
// }});

// var total;
// $("#value1").keyup(function() {
// 	if ($("#value2").val() != '' && $("#operator").val() != '') {
// 		if ($("#operator").val() == '+') {
// 			total = $("#value1").val() + $("#value2").val();
// 		} else if ($("#operator").val() == '-') {
// 			total = $("#value1").val() - $("#value2").val();
// 		} else if ($("#operator").val() == '*') {
// 			total = $("#value1").val() * $("#value2").val();
// 		}
// 		$("#hasil").val(total);
// 		console.log(total);
// 	}
// });

// $("#value1").keyup(function() {
// 	if ($("#value2").val() != '' && $("#operator").val() != '') {
// 		if ($("#operator").val() == '+') {
// 			total = $("#value1").val() + $("#value2").val();
// 		} else if ($("#operator").val() == '-') {
// 			total = $("#value1").val() - $("#value2").val();
// 		} else if ($("#operator").val() == '*') {
// 			total = $("#value1").val() * $("#value2").val();
// 		}
// 		$("#hasil").val(total);
// 		console.log(total);
// 	}
// });
// setInterval(
// 	function () {
// 		if ($("#value1").val() != '' && $("#value2").val() != '' && $("#operator").val() != '') {
// 			var nilai1 = parseInt($("#value1").val());
// 			var nilai2 = parseInt($("#value2").val());

// 			if ($("#operator").val() == '+') {
// 				total = nilai1 + nilai2;
// 			} else if ($("#operator").val() == '-') {
// 				total = nilai1 - nilai2;
// 			} else if ($("#operator").val() == '*') {
// 				total = nilai1 * nilai2;
// 			}
// 			$("#hasil").val(total);
// 		}
// 	}, 1000);

//--------------------------------------

// var hasil = "";
// var result = 0;
// var value = [];
// var operator = [];
// $('button').click(function() {
// 	if ($(this).text() == '+' || $(this).text() == 'x' || $(this).text() == '-') {
// 		var jumlah = hasil.length;
// 		var last = hasil.substr((jumlah-1), 1);

// 		console.log(hasil.substr(0, jumlah));
// 		if (last == '+' || last == 'x' || last == '-') {
// 			operator.slice(0, -1); 
// 			operator.push($(this).text());
// 			value.push(hasil.substr(0, jumlah));
// 			hasil = hasil.substr(0, (jumlah-1)) + $(this).text();

// 			$("#hasil").val(hasil);
// 		} else {
// 			var Jumlah_op = operator.length;
// 			operator.push($(this).text());
// 			hasil = hasil + $(this).text();
// 			value.push(hasil.substr((hasil.indexOf(operator[(Jumlah_op-1)]) + 1)));
// 			// value.push(hasil.substr(0, jumlah));
			
// 			console.log(value);
// 			$("#hasil").val(hasil);
// 		}
// 	} else if($(this).text() == '=') {
// 		var jumlah = hasil.length;
// 		var Jumlah_angka = value.length;
// 		var Jumlah_op = operator.length;

// 		var j = 0;
// 		// value.push(hasil.substr(hasil.indexOf(operator[(Jumlah_op-1)]), (hasil.substr(0, -1))));
// 		value.push(hasil.substr((hasil.indexOf(operator[(Jumlah_op-1)]) + 1)));
// 		console.log(value);
// 		console.log(hasil.indexOf(operator[(Jumlah_op-1)]));
// 		for (var i = 0; i < operator.length; i++) {
// 			if (operator[i] == '+') {
// 				result = parseInt(value[j]) + parseInt(value[j+1]);
// 			} else if(operator[i] == 'x') {
// 				result = parseInt(value[j]) * parseInt(value[j+1]);
// 			} else if(operator[i] == '-') {
// 				result = parseInt(value[j]) - parseInt(value[j+1]);
// 			}
// 			j+= 2;
// 		}
// 		$("#hasil").val(result);
// 	} else if($(this).text() == '<') {
// 		var jumlah = hasil.length;
// 		hasil = hasil.substr(0, (jumlah-1));
// 		$("#hasil").val(hasil);
// 	} else if($(this).text() == 'c') {
// 		hasil = "";
// 		value = [];
// 		operator = [];
// 		result = 0;
// 		$("#hasil").val(hasil);
// 	} else {
// 		hasil = hasil + $(this).text();
// 		$("#hasil").val(hasil);
// 	}
// });

//------------------------------------------------------------
// var hasil = "";
// var result = 0;
// var value = [];
// var angka = "";
// var operator = [];

// $('button').click(function() {
// 	if ($(this).text() == '+') {
// 		value.push(angka);
// 		operator.push('+');
// 		angka = "";

// 		hasil = hasil + $(this).text();
// 		$("#hasil").val(hasil);
// 		console.log(value);
// 	} else if($(this).text() == 'x') {
// 		value.push(angka);
// 		operator.push('x');
// 		angka = "";

// 		hasil = hasil + $(this).text();
// 		$("#hasil").val(hasil);
// 	} else if($(this).text() == '-') {
// 		value.push(angka);
// 		operator.push('-');
// 		angka = "";

// 		hasil = hasil + $(this).text();
// 		$("#hasil").val(hasil);
// 	} else if($(this).text() == '=') {
// 		var j = 0;
// 		value.push(angka);
// 		for (var i = 0; i < value.length; i++) {
// 			if (i == 0) {
// 				if (operator[j] == '+') {
// 					result = result + (parseInt(value[i]) + parseInt(value[i+1]));
// 					console.log(result);
// 				} else if(operator[j] == 'x') {
// 					result = result + (parseInt(value[i]) * parseInt(value[i+1]));
// 					console.log(result);
// 				} else if(operator[j] == '-') {
// 					result = result + (parseInt(value[i]) - parseInt(value[i+1]));
// 					console.log(result);
// 				}
// 			} else {
// 				if (operator[j] == '+') {
// 					result = result + parseInt(value[i+1]);
// 					console.log(result);
// 				} else if(operator[j] == 'x') {
// 					result = result + (parseInt(value[i]) * parseInt(value[i+1]));
// 					console.log(result);
// 				} else if(operator[j] == '-') {
// 					result = result + (parseInt(value[i]) - parseInt(value[i+1]));
// 					console.log(result);
// 				}
// 			}
// 			j++;
// 		}
// 		$("#hasil").val(result);
// 	} else if($(this).text() == '<') {
		
// 	} else if($(this).text() == 'c') {
		
// 	} else {
// 		angka = angka + $(this).text();
// 		hasil = hasil + $(this).text();
// 		$("#hasil").val(hasil);
// 	}
// });