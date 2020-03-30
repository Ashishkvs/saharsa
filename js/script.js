
function tableDataAsJson() {
    // var trow = document.getElementById("emailTable").getElementsByTagName('tr')[0];
    //    var rows  = document.querySelectorAll("table tr");
    var fDt = {};
    let orderItems = [];
    $("#myTable tr").each(function () {
        fDt["item"] = $(this).find("td:eq(0)").text();
        fDt["quantity"] = $(this).find("td:eq(1) input[type='text']").val()

        //    console.log(fDt);
        orderItems.push(fDt);
        fDt = {};
    })
    console.log(orderItems);
    //remove first element from array
    // listToEmailParty.shift();
    // return listToEmailParty;
}

var orderList = [];
function addToCart(product) {
    data = {};
    selectedRow = product.parentElement.parentElement;
    data["item"] = selectedRow.cells[0].innerHTML;
    data["quantity"] = $(selectedRow).find("td:eq(1) input[type='text']").val();
    data["unit"] = selectedRow.cells[2].innerHTML;

    let isProductExist = orderList.find(element => element.item === data.item) === undefined ? null : data;
    console.log("Product Exist ::" + JSON.stringify(isProductExist));



    if (isProductExist == null) {
        orderList.push(data);
    } else {
        //update
        // orderList.pop(orderList.find(element => element.item === data.item));
      
        orderList = orderList.filter((e) => e.item !== data.item);
          orderList.push(data);
        // alert('Already added');
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
    // tempObj = row;
    var table = document.getElementById("orderTable").getElementsByTagName('tbody')[0];
    var newRow = table.insertRow(table.length);
    cell1 = newRow.insertCell(0);
    cell1.innerHTML = row.item;

    cell2 = newRow.insertCell(1);
    cell2.innerHTML = row.quantity + ' ' + row.unit;

    // cell3 = newRow.insertCell(2);
    // cell3.innerHTML = row.unit;

    cell3 = newRow.insertCell(2);
    cell3.innerHTML = `<button class="btn btn-danger btn-sm" onclick="onDelete('${row.item}')">X</button>`;
    console.log(row);

}
function onDelete(_deleteItem) {
    // row = td.parentElement.parentElement;
    // document.getElementById("orderTable").deleteRow(row.rowIndex);
    // let data = JSON.stringify(_deleteItem)
    console.log(_deleteItem);
    // orderList.pop(item);
    orderList = orderList.filter((e) => e.item !== _deleteItem);
    populateOrderList(orderList);
}


// https://stackoverflow.com/questions/3396088/how-do-i-remove-an-object-from-an-array-with-javascript