<div class="card">
    <div class="card-header">
        <h3>Update Hobbie</h3>
    </div>
    <div class="card-body">
        <form action="" method="POST">

        <div class="mb-3">
          <label for="id" class="form-label">ID</label>
          <input readonly type="text"
            class="form-control" value="<?php echo $hobbie->id; ?>" name="id" id="id" aria-describedby="helpId" >    
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Chosen Name</label>
            <input required type="text"
            class="form-control" value="<?php echo $hobbie->name; ?>" name="name" id="name" aria-describedby="helpId" placeholder="Write new hobbie name">    
        </div>

        <div class="mb-3">
          <label for="type" class="form-label">Hobbie Type</label>
          <input required type="text" value="<?php echo $hobbie->type; ?>" class="form-control" name="type" id="type" aria-describedby="helpId" placeholder="Indoor, Outdoor...">   
        </div>

        <input name="submit" id="submit" class="btn btn-success" type="submit" value="Guardar Cambios">
        <a href="?controler=hobbies&action=inicio" class="btn btn-sm btn-warning">Cancel</a>
        </form>
    </div>
  
</div>