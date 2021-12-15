<div class="modal fade" id="edit_elements<?php echo $row['id']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"style="color:black">Edit Elements</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="elements/edit_elements.php?id=<?php echo $row['id']; ?>" method="post">
        <div class="modal-body">


            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['name']; ?>" >
              <label for="floatingInput">Name</label>
            </div>


            <div class="form-floating mb-3">
              <select class="form-select" id="group_id" name="group_id" aria-label="Floating label select example" value="<?php echo $row['class']; ?>">
                <option <?php if ($row['group_id'] == "None") {echo "selected";} ?>>None</option>
                <option value='metallic' <?php if ($row['group_id'] == "metallic") {echo "selected";} ?>>metalic</option>
                <option value='non-metallic' <?php if ($row['group_id'] == "non-metallic") {echo "selected";} ?>>non-metallic</option>
                <option value='metalloids' <?php if ($row['group_id'] == "metalloids") {echo "selected";} ?>>metalloids</option>
              </select>
              <label for="floatingSelect">Group Id</label>


            </div>
            <div class="form-floating mb-3">
              <input type="number" class="form-control" id="color" name="atomic_no" value="<?php echo $row['tomic_no']; ?>">
              <label for="floatingInput">Atomic number</label>
            </div>

            <div class="form-floating mb-3">
              <input type="number" class="form-control" id="atomic_weight" name="atomic_weight" value="<?php echo $row['atomic_weight']; ?>">
              <label for="floatingInput">Atomic weight</label>
            </div>

            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="description" name="description" value="<?php echo $row['description']; ?>">
              <label for="floatingInput">Description</label>
            </div>

            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" name="edit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>