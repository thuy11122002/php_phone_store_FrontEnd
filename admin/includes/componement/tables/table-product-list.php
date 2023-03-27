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
          require_once("./includes/scripts/api/getProduct.php");
          require_once("./includes/scripts/api/getBrand.php");

          $resp = getProductList();
          $brands = getBrandList();
          
          foreach($resp as $rs){
            echo '<tr>';
            echo '<th scope="row">'.$rs->productID.'</th>';
            echo '<td>'.$rs->productName.'</td>';
            echo '<td>'.$rs->price.'</td>';
            foreach($brands as $br){
                if($rs->brandID=$br->brandID){
                    echo '<td>'.$br->brandName.'</td>';
                }
            }
            echo '<td>'.$rs->stock.'</td>';
            echo '<td>'.$rs->imgURL.'</td>';
            echo '<td>'.$rs->description.'</td>';
            
            
            
            echo  '<td>';
            require("./includes/componement/buttons/table-button-group.php");
            echo '</td>';
            echo '</tr>';
          }
        ?>
    </tbody>

</table>