<label for="select-brand" class="form-label">Brand</label>
<select class="form-select form-select mb-3" name="brand" aria-label="Select brand" id="select-brand">
    <option selected>Select Brand</option>
    <?php 
        require_once("./includes/scripts/api/getBrand.php");
        $resp = getBrandList();
        foreach($resp as $rs){
            echo '<option value="'.$rs->brandID.'">'.$rs->brandName.'</option>';
        }
    ?>
    <!--
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
    -->
</select>