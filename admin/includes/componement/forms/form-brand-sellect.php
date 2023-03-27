<label for="select-brand" class="form-label">Brand</label>
<select class="form-select form-select mb-3" name="brandID" aria-label="Select brand" id="select-brand">
    <option selected>Select Brand</option>
    <?php 
        require_once("./includes/scripts/api/APIs.php");
        $url = 'http://localhost:8080/brand';
        $resp = getList($url);
        foreach($resp as $rs){
            echo '<option value="'.$rs->brandID.'">'.$rs->brandName.'</option>';
        }
    ?>
</select>