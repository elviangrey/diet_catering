<?php include 'connect.php'; ?>

<html>

<head>
    <title>Create Order Detail</title>
</head>

<body>

<h1>CATERING ORDER DETAILS</h1>

<form action="" method="POST">

    <input type="number" name="orderid" placeholder="Order ID" required>
    <br><br>

    <input type="text" name="menuitem" placeholder="Menu Package" required>
    <br><br>

    <input type="number" name="quantity" placeholder="Quantity" min="1" required>
    <br><br>

    <input type="text" name="request" placeholder="Requests (Optional)">
    <br><br>

    <input type="submit" name="save_btn" value="Save Order Detail">
    <br><br>

    <button type="button">
        <a href="view_order_details.php">View All Details</a>
    </button>

</form>

</div>

<?php

if(isset($_POST['save_btn']))
{
    // 1. Catching the catering data from the form fields
    $orderid = $_POST['orderid'];
    $menuitem = $_POST['menuitem'];
    $quantity = $_POST['quantity'];
    $specialrequest = $_POST['specialrequest'];

    // 2. Preparing the SQL Instruction for your catering database
    $query = "INSERT INTO order_details 
              (order_id, menu_item, quantity, special_request) 
              VALUES 
              ('$orderid', '$menuitem', '$quantity', '$specialrequest')";

    // 3. Executing the query using your database connection ($con)
    $data = mysqli_query($con, $query);

    if($data)
    {
        ?>
        <script type="text/javascript">
            alert("Order Detail Successfully Saved");
            window.open("view_order_details.php", "_self");
        </script>
        <?php
    }
    else
    {
        ?>
        <script type="text/javascript">
            alert("Please Try Again");
        </script>
        <?php
    }
}

?>

</body>
</html>
