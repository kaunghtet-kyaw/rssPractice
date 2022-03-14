
        <div class="row">
            <table class="table table-bordered table-responsive">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Age</th>
                        <th scope="col">Address</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($result as $row) {?>
                    <tr>
                        <th scope="row"><?php echo $row->id; ?></th>
                        <td><?php echo $row->name; ?></td>
                        <td><?php echo $row->age; ?></td>
                        <td><?php echo $row->address; ?></td>
                        <td> <a href="<?php echo site_url('students/create');?>">Create</a></td>  
                        <td> <a href="<?php echo site_url('students/update');?>/<?php echo $row->id;?>">Edit</a></td>  
                        <td><a href="<?php echo site_url('students/delete');?>/<?php echo $row->id;?>">Delete</a></td>
                    </tr>
                    <?php } ?>
                </tbody>
                        
            </table>
        </div>  
    