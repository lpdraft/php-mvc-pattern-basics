<div class="card">
    <div class="card-header">
        <h3>Add New Hobbies</h3>
    </div>
    <div class="card-body">
        <form action="" method="POST">

        <div class="mb-3">
            <label for="name" class="form-label">Hobbie Name</label>
            <input required type="text"
            class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="Reading, Go Surfing...">    
        </div>

        <div class="mb-3">
          <label for="type" class="form-label">Hobbie Type</label>
          <input required type="text" class="form-control" name="type" id="type" aria-describedby="helpId" placeholder="Indoor, Outdoor..">   
        </div>
        <input name="submit" id="submit" class="btn btn-sm btn-success" type="submit" value="Add">
        <a href="?controler=hobbies&action=inicio" class="btn btn-sm btn-warning">Cancel</a>
        </form>
    </div>
  
</div>