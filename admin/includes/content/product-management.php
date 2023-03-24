<div class="col" >
    <h3>Product Management</h3>
    <div class="container">
        <form method="post">
            <div class="row">
                <div class="col">
                    <div class="input-group">
                        <input type="search" name="search-bar" class="form-control" placeholder="Search user"
                            aria-label="Search Product" aria-describedby="button-addon1">
                        <button class="btn btn-outline-secondary" name="button1" type="submit-button" id="button1">Search</button>
                    </div>
                </div>
                <div class="col">
                    <button class="btn btn-primary" name="button2" type="submit-button" id="button2">Add product</button>
                </div>
            </div>
        </form>
        <?php
         require("./includes/scripts/handlers/product-management-form-handler.php");
         require("./includes/componement/tables/table-product-list.php");
        ?>
    </div>
</div>

</div>
