<div class="card">
    <div class="card-header">
        <h3>Add Employee</h3>
    </div>
    <div class="card-body">
        <form action="" method="POST">

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input required type="text"
            class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="Emplyee Name">    
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input required type="email" class="form-control" name="email" id="email" aria-describedby="emailHelpId" placeholder="abc@mail.com">   
        </div>
        <input name="submit" id="submit" class="btn btn-sm btn-success" type="submit" value="Add">
        <a href="?controler=employees&action=inicio" class="btn btn-sm btn-warning">Cancel</a>
        </form>
    </div>
  
</div>