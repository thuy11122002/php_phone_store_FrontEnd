<table class="table caption-top">
    <caption>List of Products</caption>
    <thead class="table-dark">
        <tr>
            <th scope="col">Product ID</th>
            <th scope="col">Product Name</th>
            <th scope="col">Price</th>
            <th scope="col">Brand Name</th>
            <th scope="col">Stock</th>
            <th scope="col">Img</th>
            <th scope="col">Description</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php 
          require_once("./includes/scripts/api/APIs.php");
          $url1='http://localhost:8080/product';
          $url2='http://localhost:8080/brand';

          $resp = getList($url1);
          $brands = getList($url2);
          
          foreach($resp as $rs){
            echo '<tr>';
            echo '<th scope="row">'.$rs->productID.'</th>';
            echo '<td>'.$rs->productName.'</td>';
            echo '<td>'.$rs->price.'</td>';
            foreach($brands as $br){
                if($rs->brandID==$br->brandID){
                    echo '<td>'.$br->brandName.'</td>';
                }
            }
            echo '<td>'.$rs->stock.'</td>';
            echo '<td>'.$rs->imgURL.'</td>';
            echo '<td>'.$rs->description.'</td>';
            
            
            
            echo  '<td>';
            //require("./includes/componement/buttons/table-button-group.php");
            echo '<form method="post">';
            echo '<input type="hidden" name="rowID" value="' . strval($rs->productID) . '">';
            require("./includes/componement/buttons/table-button-group.php");
            echo '</form>';
            echo '</td>';
            echo '</tr>';
          }
        ?>
    </tbody>

</table>