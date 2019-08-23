<?php
/**
 * Created by IntelliJ IDEA.
 * User: ACER
 * Date: 6/26/2019
 * Time: 3:59 PM
 */
?>
<?php
include 'DB-Connection.php';
if (!$connection){
    echo mysqli_connect_error();
}else{
    $resultset = mysqli_query($connection, "SELECT * FROM orderdetail");
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
        <div class="row">
            <div class="col-md-10">
                <table class="ui unstackable table" style="top: 50px;position: absolute;left: 80px">
                    <thead>
                    <tr>
                        <th scope="col">Order ID</th>
                        <th scope="col">Item ID</th>
                        <th scope="col">Qty</th>
                        <th scope="col">Price</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    while ($rowData=mysqli_fetch_row($resultset)){
                        echo "<tr>
                              <td>$rowData[0]</td>
                              <td>$rowData[1]</td>
                              <td>$rowData[2]</td>
                              <td>$rowData[3]</td>
                              </tr>";
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</body>
</html>
</html>
