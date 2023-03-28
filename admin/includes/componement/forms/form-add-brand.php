

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Add brand form</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="post">
                    <div class="mb-3">
                        <label for="brandName" class="form-label">Brand name</label>
                        <input type="text" required class="form-control" name="brandName" id="brandName"
                            aria-describedby="brandName">

                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" required class="form-control" name="description" id="description">
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