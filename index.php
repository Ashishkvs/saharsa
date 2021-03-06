<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="js/script.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Online Saharsa</title>

    <style>
        #myTable thead{background-color:dodgerblue;}
    </style>
</head>

<body>
   <script >
    $(document).ready(function () {
        $('#myTable').DataTable();
    });

    //form submit
</script>
    <div class="container-fluid">


                <div class="row">
                    <div class="col-md-7 col">
                        <h1 class="bg-warning p-1">Items</h1>
                        <table id="myTable" class="table table-sm table-hover">
                            <thead>
                                <tr>
                                    <th>Item</th>
                                    <th>Quantity</th>
                                    <th>Unit</th>
                                    <th>Order</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Potato / Aloo</td>
                                    <td><input type="text"></td>
                                    <td>Kg</td>
                                    <td><button onclick="addToCart(this)" class="btn btn-outline-success">Add To Cart</button></td>
                                </tr>
                                <tr>
                                    <td>Tomato</td>
                                    <td><input type="text"></td>
                                    <td>Kg</td>
                                    <td><button onclick="addToCart(this)" class="btn btn-outline-success">Add To Cart</button></td>
                                </tr>
                                <tr>
                                    <td>Onion</td>
                                    <td><input type="text"></td>
                                    <td>Kg</td>
                                    <td><button onclick="addToCart(this)" class="btn btn-outline-success">Add To Cart</button></td>
                                </tr>
                                <tr>
                                    <td>Daal (Toor)</td>
                                    <td><input type="text"></td>
                                    <td>Kg</td>
                                    <td><button onclick="addToCart(this)" class="btn btn-outline-success">Add To Cart</button></td>
                                </tr>
                                <tr>
                                    <td>Daal (Arhar)</td>
                                    <td><input type="text"></td>
                                    <td>Kg</td>
                                    <td><button onclick="addToCart(this)" class="btn btn-outline-success">Add To Cart</button></td>
                                </tr>
                                <tr>
                                    <td>Rice / Chawal</td>
                                    <td><input type="text"></td>
                                    <td>Kg</td>
                                    <td><button onclick="addToCart(this)" class="btn btn-outline-success">Add To Cart</button></td>
                                </tr>
                                <tr>
                                    <td>Salt / Namak</td>
                                    <td><input type="text"></td>
                                    <td>Kg</td>
                                    <td><button onclick="addToCart(this)" class="btn btn-outline-success">Add To Cart</button></td>
                                </tr>
                                <tr>
                                    <td>Sugar / Chini</td>
                                    <td><input type="text"></td>
                                    <td>Kg</td>
                                    <td><button onclick="addToCart(this)" class="btn btn-outline-success">Add To Cart</button></td>
                                </tr>
                                <tr>
                                    <td>Atta / Flour</td>
                                    <td><input type="text"></td>
                                    <td>Kg</td>
                                    <td><button onclick="addToCart(this)" class="btn btn-outline-success">Add To Cart</button></td>
                                </tr>
                                <tr>
                                    <td>Milk</td>
                                    <td><input type="text"></td>
                                    <td>Lt</td>
                                    <td><button onclick="addToCart(this)" class="btn btn-outline-success">Add To Cart</button></td>
                                </tr>
                                <tr>
                                    <td>Water</td>
                                    <td><input type="text"></td>
                                    <td>Can</td>
                                    <td><button onclick="addToCart(this)" class="btn btn-outline-success">Add To Cart</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                <div class="col-md-4 offset-md-1 p-1 col">
                <h1 class="bg-warning pl-2">Your order</h1>
                <div class="table-bordered table-responsive">
                    <table id="orderTable" class="table table-sm table-borderless">
                        <thead>
                            <tr>
                                <th>Item</th>
                                <th>Quantity</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td class="text-center"><img src="images/empty-cart.png" width="200" alt="Empty Lists"></td></tr>
                        </tbody>
                    </table>
                </div>
            <p class="small text-muted"><b>Note: </b>Your order and further process will be whatsapp to your given number</p>
            <p id="message" class="text-center bg-danger"></p>
            <form action="order.php" id="orderForm" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputName">Name</label>
                            <input type="name" class="form-control"  name="inputName" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="mobile">Mobile</label>
                            <input type="text" class="form-control" id="mobile" placeholder="10 digit mobile number" name="mobile" onchange="validateField();" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Address</label>
                        <input type="text" class="form-control"  name="inputAddress" required placeholder="Xyz street near by Temple or School">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-2">
                            <label for="inputZip">WardNo</label>
                            <input type="text" class="form-control"   name="inputWard" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputCity">City</label>
                            <input type="text" class="form-control" name="inputCity" value="SAHARSA" disabled>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputState">State</label>
                            <select name="inputState" class="form-control">
                                <option selected>BIHAR</option>
                            </select>
                        </div>

                    </div>
                    <input type="text" hidden name="orders" id="orders">
                    <button type="submit" name="submit" class="btn btn-primary">Place order</button>
                </form>
            </div>
    </div>

<script>
 $("#orderForm").submit(function( event ) {
        let tempOrder =JSON.stringify(orderList);
        $("#orders").val(tempOrder);
        if(orderList.length > 0){
            console.log(orderList);
            return;
        }
        $( "#message" ).text( "Empty order cannot be placed" ).show().fadeOut( 5000 );
        event.preventDefault();

        });

   </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>

</html>
