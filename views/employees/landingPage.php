<div class="card">
    <h1>Landing Page: Employees</h1>
    <h3 class="lead">¡Please, Welcome to this Section!</h3>
</div>

<div class="card mt-3">
    <div class="card-header">
        <a type="button" href="?controler=employees&action=crear" class="btn btn-sm btn-success" role="button">Add Employees</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
    
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Action BTNs</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($employees as $employee) { ?> 

                <tr>
                    <td><?php echo $employee->id; ?></td>
                    <td><?php echo $employee->name; ?></td>
                    <td><?php echo $employee->email; ?></td>
                    <td>
                       <div class="btn-group" role="group" aria-label="">
                         <a href="?controler=employees&action=editar&id=<?php echo $employee->id; ?>" type="button" class="btn btn-sm btn-secondary">Edit</a>
                         <a href="?controler=employees&action=borrar&id=<?php echo $employee->id; ?>" type="button" class="btn btn-sm btn-danger">Remove</a>
                       </div>
                    </td>
                </tr> 
            
            <?php } ?>  
        </tbody>
    </table>
</div>
</div>
</div>

