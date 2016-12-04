<div style="height:auto; width:1050px;   margin:auto; border:1px solid #EBEBEB; background-color:#ffffff;  ">
    <div style="height:40px; width:1050px; height:auto; border:0px solid #000000; padding-top:50px; background-color:#F1F0F0; border-radius:5px; color:#1C7582;">
        <font style=" font-size:18px;padding-top:20px; padding-bottom:20px;"> &nbsp; Your Cart Details</font>
    </div>
    <table border="0" style="width:1050px; height:30px; background-color:#7CE1D6;">
        <tr height="30">
            <td width="75" align="center"><b>S.No.</b></td>
            <td width="75" align="center"><b>Remove.</b></td>
            <td width="300" align="center"><b>Item</b></td>
            <td width="350" align="center"><b>Item Description</b></td>
            <td width="100" align="center"><b>Quantity</b></td>
            <td width="200" align="center"><b>Price(Rs.)</b></td>
        </tr>
    </table>
    <table border="0">
        <tr style=" background-color:#fffff; ">
<?php
$query = 'select shopping_cart.product_code,product.product_name,product.offer_price,shopping_cart.quantity,product.image from shopping_cart,product where shopping_cart.product_code=product.product_code';
$result = mysqli_query($con, $query);
$i = 1;
$amt = 0;
while ($row = mysqli_fetch_array($result)) {
    $price = $row['offer_price'] * $row['quantity']; ?>
                <td width="75" align="center">
                    <?php echo $i; ?>
                </td>
                <td width="75" align="center">
                    <a href="cartdel.php?code2=<?php echo $row['product_code']; ?>" style="text-decoration:none;"><img src="images/cart-del.png" width="30" height="auto"></a>
                </td>
                <td width="300" align="center"><img src="<?php echo $row['image']?>" height="100" width="auto" style="border:0px solid #000000;"></td>
                <td width="350" align="center">
                    <?php echo $row['product_name']; ?>
                </td>
                <td width="100" align="center">
                    <?php echo $row['quantity']; ?>
                </td>
                <td width="200" align="center">
                    <?php echo'Rs.'.$price; ?>
                </td>
        </tr>

        <?php
$i = $i + 1;
    $amt = $amt + $price;
    $_SESSION['amt'] = $amt;
}
?>
            <tr style="background-color:#7CE1D6; height:30px; ">
                <td width="100" style="background-color:#FFFFFF;"></td>
                <td width="100" style="background-color:#FFFFFF;"></td>
                <td width="300" style="background-color:#FFFFFF;"></td>
                <td width="350" style="background-color:#FFFFFF;"></td>
                <td width="100" align="center"><b>Total</b></td>
                <td width="200" align="center">
                    <?php echo" <font color='#FF0000'> <b>Rs. </b></font>".$amt; ?>
                </td>
            </tr>
    </table>
    <div style="width:1050px; height:50px; margin-bottom:20px; border:0px solid #000000; margin-top:50px; margin-right:20px;" align="right">
        <div style="width:300px; height:50px; border:0px solid #000000; ">
            <a href="index.php"><span>Continue Shopping</span></a>&nbsp;&nbsp;&nbsp;
            <a href="#"><span>Proceed To Pay</span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
    </div>
</div>
