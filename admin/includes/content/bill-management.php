<div class="col">
    <h3>Bill Management</h3>
    <div class="container">
        <form method="post">
            <div class="row">
                <div class="col">
                    <div class="input-group">
                        <input type="search" name="search-bar" class="form-control" placeholder="Search Product"
                            aria-label="Search Product" aria-describedby="button-addon1">
                        <button class="btn btn-outline-secondary" name="button1" type="submit"
                            id="button1">Search</button>
                    </div>
                </div>
                <div class="col">
                    <button class="btn btn-primary" name="button2" type="button" id="button2" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop2">Add bill</button>
                </div>
            </div>
        </form>
        <?php
        require_once("./includes/scripts/handlers/bill-management-form-handler.php");
        require_once("./includes/componement/tables/table-bill-list.php");
        //require_once("./includes/componement/forms/form-add-product.php");
        ?>
    </div>
</div>

</div>