<?php
/**
 * Created by IntelliJ IDEA.
 * User: ACER
 * Date: 8/20/2019
 * Time: 10:22 PM
 */
?>
<?php
include 'DB-Connection.php';
if (!$connection){
    echo mysqli_connect_error();
}else {
    $resultset = mysqli_query($connection, "SELECT * FROM item");


include 'DB-Connection.php';
if (!$connection){
    echo mysqli_connect_error();
}else {
    $result = mysqli_query($connection, "SELECT * FROM customer");


include 'DB-Connection.php';
if (!$connection){
    echo mysqli_connect_error();
}else{
    $order=mysqli_query($connection,"select * from orders");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>dashboard</title>
    <link rel="stylesheet" type="text/css" href="css/semantic.min.css">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"
            integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
            crossorigin="anonymous"></script>
    <script src="js/semantic.js"></script>
    <link rel="stylesheet"href="css/bootstrap.css">
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet"href="css/mystyle.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
<div class="row">
    <div class="col-md-12 bg-dark text">
        <div class="row">
            <div class="col-md-2">
                <a class="ui image text-white ">
                    <img src="image/63_-_Call_Center-512.png" height="50" width="50"/></a>
                <h2 style="color: white;left: 80px;position: absolute;top: 10px">POS SYSTEM</h2>
            </div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-9">

                            </div>
                            <div class="col-md-3" style="top: 10px;left: 50px">
                                <button class="ui circular facebook icon button">
                                    <i class="fab fa-facebook"></i>
                                </button>
                                <button class="ui circular twitter icon button">
                                    <i class="fab fa-twitter"></i>
                                </button>
                                <button class="ui circular linkedin icon button">
                                    <i class="fab fa-linkedin-in"></i>
                                </button>
                                <button class="ui circular google plus icon button">
                                    <i class="fab fa-google-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
<div id="submanu">

</div>
<div class="row">
    <div class="col-md-2">
        <div class="row">
            <div class="col-md-12">
                <div class="ui vertical inverted menu bg-dark text-white border-0 col-md-12" style="width: 93%;position: absolute;padding-top: 15%">
                    <a class="item text-white"href="dashboard.html">
                        <img src="image/Combo Chart_48px.png" height="35" width="35" style="right: 0px;position: absolute;top: 5px"/>
                        Dashboard
                    </a>
                    <a class="item  text-white"href="customer.html">
                        <img src="image/icons8_User_48px.png" height="35" width="35" style="right: 0px;position: absolute;top: 5px"/>
                        Customer Management</a>

                    <a class="item text-white"href="item.html">
                        <img src="image/Ingredients_48px.png" height="35" width="35" style="right: 0px;position: absolute;top: 0px"/>
                        Item Management
                    </a>
                    <a class="item text-white"href="invoice.php">
                        <img src="image/Shopping Cart_48px.png" height="35" width="35" style="right: 0px;position: absolute;top: 5px"/>
                        Order
                    </a>
                    <a class="item text-white"href="orderview.php">
                        <img src="image/Purchase Order_48px.png" height="35" width="35" style="right: 0px;position: absolute;top: 5px"/>
                        View Order
                    </a>

                </div>
            </div>
        </div>
    </div>
    <div class="col-md-10">
        <div class="col-md-12" style="top: 35px">
            <form action="" id="formOrder" method="post" enctype="application/x-www-form-urlencoded">
            <div id="content"style="background-color: #24344D">
                <table>
                    <tr>
                        <h2 class="ui dividing header" style="color: deeppink">Item Information</h2>
                        <td>
                            <label style="color: yellow">Select ItemID</label>
                            <!--                                <input type="text" class="form-control col-md-12" name="txtItemID" id="txtItemID">-->
                            <select class="form-control" name="txtItemID" id="txtItemID">
                                <?php
                                    while ($rowData = mysqli_fetch_row($resultset)) {
                                        echo "<option value=\"$rowData[0]\">$rowData[0]</option>";
                                    }

                                    mysqli_free_result($resultset);

                                    mysqli_close($connection);
                                    }
                                    ?>
                            </select>
                        </td>
                        <td>
                            <label style="color: yellow">Item Name</label>
                            <input type="text" class="form-control col-md-12" name="txtItemName" id="txtItemName">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label style="color: yellow">UPrice</label>
                            <input type="text" class="form-control col-md-12" name="txtUprice" id="txtUprice">
                        </td>
                        <td>
                            <label style="color: yellow">Qty</label>
                            <input type="text" class="form-control col-md-12" name="txtQty" id="txtQty">
                        </td>
                    </tr>
                </table>

            </div>
            <div class="col-md-4"style="right: 0px;position: absolute;top: 0px">
                <table>
                    <tr >
                        <h2 class="ui dividing header" style="color: deeppink">Customer Information</h2>
                        <td>
                            <label style="color: yellow">Order ID</label>
                            <input type="text" class="form-control col-12" name="txtOrderID">
                        </td>
                        <td>
                            <label style="color: yellow">Customer ID</label>
                            <select class="form-control" name="txtCustomerID">
                                <?php
                                while ($rowData = mysqli_fetch_row($result)) {
                                    echo "<option value=\"$rowData[0]\">$rowData[0]</option>";
                                }

                                mysqli_free_result($resultset);

                                mysqli_close($connection);
                                }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label style="color: yellow">date</label>
                            <input type="text" class="form-control col-12" name="txtDate">
                        </td>
                        <td>
                            <label style="color: yellow">price</label>
                            <input type="text" class="form-control col-12" name="txtprice">
                        </td>
                    </tr>
                </table>
            </div>
            </form>
        </div>

    </div>
</div>
<div class="col-md-12" style="top: 280px;position: absolute;left: 120px">
    <div class="container" style="left: 10%;top: 25%">
        <table class="ui unstackable table">
            <thead>
            <tr>
                <th scope="col">Order ID</th>
                <th scope="col">Item ID</th>
                <th scope="col">Date</th>
            </tr>
            </thead>
            <tbody>
            <?php
            while ($rowData=mysqli_fetch_row($order)){
                echo "<tr>
                              <td>$rowData[0]</td>
                              <td>$rowData[1]</td>
                              <td>$rowData[2]</td>
                              </tr>";
            }
            ?>
            </tbody>
        </table>
        <div style="bottom: 0px;left: 50%;font-size: 30px"><label style="color: white">Sub Total:<sup>Rs</sup>00000.00</label></div>
        <div style="right: 450px;position: absolute;top: 230px">
            <!--<div style="top: -25%"><label>Sub Total:<sup>Rs</sup>00000.00</label></div>-->
            <label style="color: white">Discount</label>
            <input type="text" class="form-control col-md-12">
            <label style="color: white">Payment</label>
            <input type="text" class="form-control col-md-12">
            <label style="color: white">Balance</label>
            <input type="text" class="form-control col-md-12">

            <button class=" btn btn-danger col-md-6"style="right: -150px;position: absolute;top: 170px" id="btnProceed">Proceed</button>

            <button class="btn btn-primary col-md-6"style="right: -270px;position: absolute;top: 170px">clear</button>
        </div>

    </div>
</div>

<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/orderJS.js"></script>
<script>
    $(document).read()function () {
        $('#txtItemID').change(function{
            $.post('txtItemName',{txtItemID:$(this.val())},function(resultset)){
                $("#txtItemName").val(resultset);
            }
        })
    }
</script>

<script>
    // $('#btnProceed').click(function () {
    //     var orderData = $('#formOrder').serialize();
    //
    //     $.ajax({
    //         url: "../api/service/OrderService.php",
    //         method: "POST",
    //         async: true,
    //         data: orderData
    //     }).done(function (res) {
    //         if (res) {
    //             alert("Order Added");
    //         }else{
    //             alert("Error")
    //         }
    //     })
    // });
    //

</script>

</body>
</html>
