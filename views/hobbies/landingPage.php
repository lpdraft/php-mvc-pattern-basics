<div class="card">
    <h1>Landing Page: Hobbies</h1>
    <h3 class="lead">¡Please, Welcome to this Section!</h3>
</div>


<div class="card mt-3">
    <div class="card-header">
        <a type="button" href="?controler=hobbies&action=crear" class="btn btn-sm btn-success" role="button">Add Hobbies</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
    
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Hobbie</th>
                <th scope="col">Type</th>
                <th scope="col">Action BTNs</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($hobbies as $hobbie) { ?> 

                <tr>
                    <td><?php echo $hobbie->id; ?></td>
                    <td><?php echo $hobbie->name; ?></td>
                    <td><?php echo $hobbie->type; ?></td>
                    <td>
                       <div class="btn-group" role="group" aria-label="">
                         <a href="?controler=hobbies&action=editar&id=<?php echo $hobbie->id; ?>" type="button" class="btn btn-sm btn-secondary">Update</a>
                         <a href="?controler=hobbies&action=borrar&id=<?php echo $hobbie->id; ?>" type="button" class="btn btn-sm btn-danger">Remove</a>
                       </div>
                    </td>
                </tr> 
            
            <?php } ?>  
        </tbody>
    </table>
</div>
</div>
</div>