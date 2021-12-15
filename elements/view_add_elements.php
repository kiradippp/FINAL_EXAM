<div class="modal fade" id="add_elements" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" style="color:black">Add New Element</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="elements/add_elements.php" method="post">
        <div class="modal-body" style="color:black">
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="name" name="name" placeholder="Name">
              <label for="floatingInput">Name</label>
            </div>

            <div class="form-floating mb-3">
              <select class="form-select" id="group_id" name="group_id" aria-label="Floating label select example">
                <option selected>None</option>
                <option value="metalic">metalic</option>
                <option value="non-metalic">non-metalic</option>
                <option value="metalloids">metalloids</option>
              </select>
              <label for="floatingSelect">Group Id</label>
            </div>

            <div class="form-floating mb-3">
              <input type="number" class="form-control" id="atomic_no" name="atomic_no" placeholder="Name">
              <label for="floatingInput">Atomic Number</label>
            </div>

            <div class="form-floating mb-3">
              <input type="number" class="form-control" id="atomic_weight" name="atomic_weight" placeholder="Name">
              <label for="floatingInput">Atomic_weight</label>
            </div>

            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="description" name="description" placeholder="Name">
              <label for="floatingInput">description</label>
            </div>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" name="add" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>