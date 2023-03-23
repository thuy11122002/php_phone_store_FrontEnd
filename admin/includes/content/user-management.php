<div class="col">
    <h3>User management</h3>
    <div class="container">
        <form method="post">
            <div class="row">
                <div class="col">
                    <div class="input-group">
                        <input type="search" name="search-bar" class="form-control" placeholder="Search user"
                            aria-label="Recipient's username" aria-describedby="button-addon1">
                        <button class="btn btn-outline-secondary" name="button1" type="submit-button" id="button1">Search</button>
                    </div>
                </div>
                <div class="col">
                    <button class="btn btn-primary" name="button2" type="submit-button" id="button2">Add user</button>
                </div>
            </div>
        </form>
        <?php
         require("./includes/scripts/user-management-form-handler.php");
         require("./includes/componement/tables/table-user-list.php");
        ?>
    </div>
</div>

</div>