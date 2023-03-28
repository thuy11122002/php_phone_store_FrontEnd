

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Add user form</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="post">
                    <div class="mb-3">
                        <label for="userName" class="form-label">User name</label>
                        <input type="text" required class="form-control" name="userName" id="userName"
                            aria-describedby="userName">

                    </div>
                    <div class="mb-3">
                        <label for="fullName" class="form-label">Full Name</label>
                        <input type="text" required class="form-control" name="name" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" required class="form-control" name="email" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="text" required class="form-control"name="password" id="password" aria-describedby="password">
                    </div>
                    <div class="mb-3">
                        <label for="Address" class="form-label">Address</label>
                        <input class="form-control" name="address" id="address"></input>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" required class="form-control"name="phone" id="phone" aria-describedby="phone">
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