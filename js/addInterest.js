function getSelectedChbox() {
	var selchbox = [];
	var events = [];
	var finalist = [];
	var k = 0;
	//input from interest page.
	var inpfields = document.getElementsByTagName('input');
	var nr_inpfields = inpfields.length;
	for (var i = 0; i < nr_inpfields; i++) {
		if (inpfields[i].type == 'checkbox' && inpfields[i].checked == true)
			selchbox.push(inpfields[i].value);
	}

	//assigning all the tags with event numbers.

	var forchem = [0, 1, 2, 3];
	var manfin = [7, 13, 14, 15, 16, 41];
	var losci = [4, 5, 6, 7, 40];
	var depho = [8, 27, 36];
	var cons = [9, 10, 11, 12];
	var code = [33, 34, 35, 36];
	var predeb = [17, 18, 19, 20];
	var robo = [21, 22, 23, 24, 37, 38];
	var qgame = [28, 29, 30, 31, 32, 39];
	var bluebook = [0, 1, 2, 3];
	var fundaaz = [4, 5, 6, 7, 8];
	var Konstuktion = [9, 10, 11, 12];
	var Magefficie = [13, 14, 15, 16];
	var Presaentatio = [17, 18, 19, 20];
	var Robogyan = [21, 22, 23, 24];
	var online = [25, 26, 27];
	var xzone = [28, 29, 30, 31, 32];
	var yudhamme = [33, 34, 35, 36];
	var sevents = [37, 38, 39, 40, 41];
	var arrlen = selchbox.length;

	//storing final list of events selected.
	for (var j = 0; j < arrlen; j++) {
		if (selchbox[j] == "LnS") {
			var len = losci.length;
			for (var i = 0; i < len; i++) {
				finalist[k] = losci[i];
				k++;
			}
		}

		if (selchbox[j] == "FnC") {
			var len1 = forchem.length;
			for (var i = 0; i < len1; i++) {
				finalist[k] = forchem[i];
				k++;
			}
		}

		if (selchbox[j] == "CnD") {
			var len1 = code.length;
			for (var i = 0; i < len1; i++) {
				finalist[k] = code[i];
				k++;
			}
		}

		if (selchbox[j] == "PnD") {
			var len1 = predeb.length;
			for (var i = 0; i < len1; i++) {
				finalist[k] = predeb[i];
				k++;
			}
		}

		if (selchbox[j] == "DnP") {
			var len1 = depho.length;
			for (var i = 0; i < len1; i++) {
				finalist[k] = depho[i];
				k++;
			}
		}

		if (selchbox[j] == "QnG") {
			var len1 = qgame.length;
			for (var i = 0; i < len1; i++) {
				finalist[k] = qgame[i];
				k++;
			}
		}

		if (selchbox[j] == "MnF") {
			var len1 = manfin.length;
			for (var i = 0; i < len1; i++) {
				finalist[k] = manfin[i];
				k++;
			}
		}

		if (selchbox[j] == "Cons") {
			var len1 = cons.length;
			for (var i = 0; i < len1; i++) {
				finalist[k] = cons[i];
				k++;
			}
		}

		if (selchbox[j] == "Robo") {
			var len1 = robo.length;
			for (var i = 0; i < len1; i++) {
				finalist[k] = robo[i];
				k++;
			}
		}

		if (selchbox[j] == "Online") {
			var len1 = online.length;
			for (var i = 0; i < len1; i++) {
				finalist[k] = online[i];
				k++;
			}
		}

		if (selchbox[j] == "Blue") {
			var len1 = bluebook.length;
			for (var i = 0; i < len1; i++) {
				finalist[k] = bluebook[i];
				k++;
			}
		}

		if (selchbox[j] == "Fund") {
			var len1 = fundaaz.length;
			for (var i = 0; i < len1; i++) {
				finalist[k] = fundaaz[i];
				k++;
			}
		}

		if (selchbox[j] == "Kons") {
			var len1 = Konstuktion.length;
			for (var i = 0; i < len1; i++) {
				finalist[k] = Konstuktion[i];
				k++;
			}
		}

		if (selchbox[j] == "Mage") {
			var len1 = Magefficie.length;
			for (var i = 0; i < len1; i++) {
				finalist[k] = Magefficie[i];
				k++;
			}
		}

		if (selchbox[j] == "Prae") {
			var len1 = Presaentatio.length;
			for (var i = 0; i < len1; i++) {
				finalist[k] = Presaentatio[i];
				k++;
			}
		}

		if (selchbox[j] == "Xzone") {
			var len1 = xzone.length;
			for (var i = 0; i < len1; i++) {
				finalist[k] = xzone[i];
				k++;
			}
		}

		if (selchbox[j] == "Yudd") {
			var len1 = yudhamme.length;
			for (var i = 0; i < len1; i++) {
				finalist[k] = yudhamme[i];
				k++;
			}
		}

		if (selchbox[j] == "RoboG") {
			var len1 = Robogyan.length;
			for (var i = 0; i < len1; i++) {
				finalist[k] = Robogyan[i];
				k++;
			}
		}

		if (selchbox[j] == "SplEve") {
			var len1 = sevents.length;
			for (var i = 0; i < len1; i++) {
				finalist[k] = sevents[i];
				k++;
			}
		}
	}

	//sorting of final list.

	finalist = finalist.sort(function(a, b) {
		return a - b
	});
	finalist.push("*");
	for (var i = 0; i < finalist.length; i++) {
		if (finalist[i] == "*")
			break;
		else if (finalist.indexOf(finalist[i], 1) >= 0) {
			var num = (finalist.lastIndexOf(finalist[i]) - finalist.indexOf(finalist[i], i + 1)) + 1;
			if (finalist.indexOf(finalist[i], i + 1) < 0)
				continue;
			finalist.splice(i, num);
		}
	}
	finalist.pop();
	var str = finalist.toString();
	console.log("str: " + str);
	var xmlhttp;
	if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	} else {
		// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			console.log("TO UPDATE ");
			window.location.assign("http://itdatacenter.x10.mx/index.php")
		}
	}
	url = "doUpdate.php?str=" + str;
	xmlhttp.open("GET", url, true);
	xmlhttp.send();
}