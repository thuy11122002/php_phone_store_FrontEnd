<!-- Modal -->
<div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Product form</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post">
                    <div class="mb-3">
                        <label for="productName" class="form-label">Product name</label>
                        <input type="text" required class="form-control" name="productName" id="productName"
                            aria-describedby="productName">

                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" required class="form-control" name="price" id="price">
                    </div>
                    <div class="mb-3">
                        <label for="stock" class="form-label">Stock</label>
                        <input type="number" required class="form-control" name="stock" id="stock">
                    </div>
                    <div class="mb-3">
                        <?php  require("form-brand-sellect.php")?>
                    </div>
                    <div class="mb-3">
                        <label for="img-url" class="form-label">Img URL</label>
                        <input type="text" required class="form-control"name="imgURL" id="imgURL" aria-describedby="imgURL">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Product's description</label>
                        <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                    </div>

                    <div class="d-flex justify-content-evenly">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" name="button3" id="button3" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>