// Toggle Stock
var tab = document.getElementById('table');
var row = tab.rows;

function toggleStock(){
    // Change button text
    var myText = document.getElementById('stock');
    if (myText.innerHTML === "Cacher Stock") {
        myText.innerHTML = "Afficher Stock";
    } else {
        myText.innerHTML = "Cacher Stock";
    }

    // Show/Hide columns
    for (var i = 0; i<row.length; i++) {
        row[i].cells[4].classList.toggle('hidden');
    }
};

// checkCommand


// Count to order

function count(x) {
    var j = x.closest('tr').rowIndex; // row j
    var temp = row[j].cells[4].querySelector('p');
    var stockcount = parseInt(temp.innerHTML,10); // Maximum quantity
    var norder = parseInt(row[j].cells[5].querySelector('p').innerHTML,10); // Quantity of orders
    var val = x.value; // Value of button
    if (norder < stockcount && val === "up") {
        norder++;
        row[j].cells[5].querySelector('#less').disabled = false;
        row[j].cells[5].querySelector('#less').style.pointerEvents = "auto";
	} else if (norder > 0 && val === "down") {
        norder--;
        row[j].cells[5].querySelector('#plus').disabled = false;
        row[j].cells[5].querySelector('#plus').style.pointerEvents = "auto";
	}

    row[j].cells[5].querySelector('p').innerHTML = norder.toString(); // Print new quantity to order

    if (norder == stockcount || norder == 0) {
        x.disabled = true;
        x.style.pointerEvents = "none";
	} else {
        x.disabled = false;
        x.style.pointerEvents = "null";
	}
}

// Stock style
var colorStock;
for (var k = 1; k<row.length; k++) {
    colorStock = row[k].cells[4].querySelector('p');
    productQty = parseInt(colorStock.innerHTML,10);
    switch (true) {
        case productQty == 0 :
            colorStock.style.color = "red";
            break;
        case productQty <= 5 && productQty > 0:
            colorStock.style.color = "orange";
            break;
        default:
            colorStock.style.color = "green";
            break;
	}
}

// Sort function

function sort(x) {
    var tab = [[0.0,0]];
    
    for (var i = 1; i<row.length; i++) {
        if (x.value === "Prix") {
            tab.push([parseFloat(row[i].cells[3].innerHTML.replace(',','.').replace('€',''),10),i]);
        } else if (x.value === "Stock") {
            var elmt = row[i].cells[4].querySelector('p');
            tab.push([parseInt(elmt.innerHTML),i]);  
		} else {
            tab.push([parseInt(row[i].cells[1].innerHTML.slice(1),10),i]);
		}
	}

    for (var j = 1; j<tab.length; j++ ) { // Insertion Sort
        var temp = tab[j][0];
        var tpTab = tab[j];
        var tp = row[j].innerHTML;
        p = j - 1
        while ((p>-1) && (temp < tab[p][0])) {
            tab[p+1] = tab[p];
            row[p+1].innerHTML = row[p].innerHTML;
            p--;
        }
        tab[p+1] = tpTab;
        row[p+1].innerHTML = tp;
    }
}
