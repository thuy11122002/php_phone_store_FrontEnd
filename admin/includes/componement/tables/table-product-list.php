<table class="table">
    <thead>
        <tr>
            <th scope="col">Product ID</th>
            <th scope="col">Product Name</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Brand ID</th>
            <th scope="col">Stock</th>
            <th scope="col">Img</th>
            <th scope="col">Description</th>
        </tr>
    </thead>
    <tbody>
        <?php 
          require("./includes/scripts/api/getProduct.php");
          $resp = getProductList();
          var_dump($resp);
          foreach($resp as $rs){
            echo '<tr>';
            echo '<th scope="row">'.$rs->product. '</th>';
            echo '<td>'.$rs->userName.'</td>';
            echo '<td>'.$rs->name.'</td>';
            echo '<td>'.$rs->email.'</td>';
            echo '<td>'.$rs->address.'</td>';
            echo '<td>'.$rs->phone.'</td>';
            if($rs->accessLevel==true){
                echo '<td>'.'1'.'</td>';
            }
            else echo '<td>'.'0'.'</td>';
            
            echo '</tr>';
          }
        ?>
    </tbody>

</table>