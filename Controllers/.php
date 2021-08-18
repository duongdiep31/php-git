<?php
session_start();//tao 1 session
    unset($_SESSION['cart']);
    class ProductDB{
        function loadProduct()
        {
            $db = new mysqli('localhost','root','','DB');
    $result=$db->query('SELECT * FROM Product');
            return $result;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LoadData</title>
</head>

<body>
    <h2>Load data </h2>
    <table border="1">
        <tr>
            <td>Code</td>
            <td>Name</td>
            <td>price</td>
            <td>Add Cart</td>
        </tr>
        <?php
            $prd = new ProductDB();
            $result = $prd->loadProduct();
            while($row=$result->fetch_assoc())
            {
                echo    '<tr>';
                echo    '<td>'.$row["code"].'</td>';
                echo    '<td>'.$row["name"].'</td>';
                echo    '<td>'.$row["price"].'</td>';
                echo    '<form action="" method="post">';
                echo    '<td><button type="submit" name="btnAddCart" value="'.$row['code'].'">Add Cart</button></td>';
                echo    '</form>';
                echo    '</tr>';
            }

            if(isset($_POST['btnAddCart']))
            {
                $code = $_POST['btnAddCart'];//lay ve code product
                if(!isset($_SESSION['cart']))//neu khong ton tai gio hang
                {
                    $_SESSION['cart']=array();//tao gio hang
                }
                if(!isset($_SESSION['cart'][$code]))//neu khong ton tai ma hang
                {
                    $_SESSION['cart'][$code]['sl']=1;//gan so luong =1
                }
                else//neu ton tai ma hang, cong so luong them 1
                {
                    $_SESSION['cart'][$code]['sl'] +=1;
                }
                //in ra gio hang
                //print_r($_SESSION['cart']);
                foreach($_SESSION['cart'] as $key=>$value)
                {
                    echo "Ma hang dat mua: ".$key."--------";
                    echo "So luong: ".$value['sl']."<br>";
                   
                }
                
            }
        ?>
    </table>



    <div class="mini-cart-item clearfix">
                                <div class="mini-cart-item-image">
                                    <a href="/mvc/Chi-Tiet"><img src="Publics/images/shop/mini-cart/img-1.jpg"
                                            alt></a>
                                </div>
                                <div class="mini-cart-item-des">
                                    <a href="/mvc/Chi-Tiet">Elegant skirt</a>
                                    <span class="mini-cart-item-quantity">Qty: 1</span>
                                    <span class="mini-cart-item-price">$20.15</span>
                                </div>
                            </div>


    
</body>
</html>