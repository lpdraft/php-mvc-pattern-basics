<div class="card">
    <div class="card-header">
        <h3>Update Employee</h3>
    </div>
    <div class="card-body">
        <form action="" method="POST">

        <div class="mb-3">
          <label for="id" class="form-label">ID</label>
          <input readonly type="text"
            class="form-control" value="<?php echo $employee->id; ?>" name="id" id="id" aria-describedby="helpId" placeholder="ID employee" >    
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input required type="text"
            class="form-control" value="<?php echo $employee->name; ?>" name="name" id="name" aria-describedby="helpId" placeholder="Name Employee">    
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input required type="email" value="<?php echo $employee->email; ?>" class="form-control" name="email" id="email" aria-describedby="emailHelpId" placeholder="abc@mail.com">   
        </div>

        <input name="submit" id="submit" class="btn btn-success" type="submit" value="Save Changes">
        <a href="?controler=employees&action=inicio" class="btn btn-sm btn-warning"> Cancel</a>
        </form>
    </div>
  
</div>