<?php include '../connect.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Registration</title>
</head>
<body>
  <div class="Customer-registration">
    <div class="title">
        <h2>Diet Esok Catering Services</h2> <!----aku nak letak logo sini nnti---->
        <h3> Customer Registration</h3>
    </div>

     <div class="Form">
        <form action="" method="POST"> 
            <input type="text"   name="customer_name"        placeholder="Full Name">        <br><br>
            <input type="number" name="customer_phonenumber" placeholder="Phonenumber"> <br><br>
            <input type="text"   name="customer_email"       placeholder="Email">       <br><br>
            <input type="text"   name="customer_address"    placeholder="Address">     <br><br>
            <input type="submit" name="save_btn" value="Register Customer"> <br><br>
        </form>
     </div>
    </div>


    <?php
    if (isset($_POST['save_btn'])) {
        $customer_name = $_POST['customer_name'];
        $customer_phonenumber = $_POST['customer_phonenumber'];
        $customer_email = $_POST['customer_email'];
        $customer_address = $_POST['customer_address'];

        $query = "INSERT INTO customer (customer_name,customer_phonenumber,customer_email,customer_address) VALUES
        ('$customer_name','$customer_phonenumber','$customer_email','$customer_address')";
        $data = mysqli_query($connect, $query);
    
        if ($data) {
            ?>
            <script type ="text/javascript">
               alert ("data succesfully inserted.");
            </script>
            <?php
        }
        else{
            ?>
            <script type="text/javascript">
                alert("please try again");
            </script>
            <?php
        }

    }
      


    ?>
    
</body>
</html>
