
function tableDataAsJson() {
    var fDt = {};
    let orderItems = [];
    $("#myTable tr").each(function () {
        fDt["item"] = $(this).find("td:eq(0)").text();
        fDt["quantity"] = $(this).find("td:eq(1) input[type='text']").val()
        orderItems.push(fDt);
        fDt = {};
    })
    // console.log(orderItems);
}

function validateField() {
    let mob = $('#mobile').val();
    let phoneno = /^\d{10}$/;
    if (mob.match(phoneno)) {
        return true;
    }
    else {
        alert("Not a valid Phone Number");
        $('#mobile').val("");
        return false;
    }
}
var orderList = [];
function addToCart(product) {
    data = {};
    selectedRow = product.parentElement.parentElement;
    data["item"] = selectedRow.cells[0].innerHTML;
    data["quantity"] = $(selectedRow).find("td:eq(1) input[type='text']").val();
    data["unit"] = selectedRow.cells[2].innerHTML;

    let isProductExist = orderList.find(element => element.item === data.item) === undefined ? null : data;
    if (isProductExist == null) {
        orderList.push(data);
    } else {
        orderList = orderList.filter((e) => e.item !== data.item);
          orderList.push(data);
    }
    populateOrderList(orderList);

}
function populateOrderList(orderList) {
    $("#orderTable tbody>tr").empty();
    orderList.forEach(element => {
        insertNewRecord(element);
    });

}


function insertNewRecord(row) {
console.log(row);
    let tempObj=JSON.stringify(row);
    var table = document.getElementById("orderTable").getElementsByTagName('tbody')[0];
    var newRow = table.insertRow(table.length);
    cell1 = newRow.insertCell(0);
    cell1.innerHTML = row.item;

    cell2 = newRow.insertCell(1);
    cell2.innerHTML = row.quantity + ' ' + row.unit;

    cell3 = newRow.insertCell(2);
    cell3.innerHTML = `<button class="btn btn-danger btn-sm" onclick="onDelete('${row.item}')">X</button>`;
    console.log(row);

}
function onDelete(_deleteItem) {
    console.log(_deleteItem);
    orderList = orderList.filter((e) => e.item !== _deleteItem);
    populateOrderList(orderList);
}
