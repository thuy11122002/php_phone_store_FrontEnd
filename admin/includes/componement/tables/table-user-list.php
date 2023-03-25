<table class="table caption-top">
    <caption>List of users</caption>
    <thead class="table-dark">
        <tr>
            <th scope="col">User ID</th>
            <th scope="col">Username</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Address</th>
            <th scope="col">Phone</th>
            <th scope="col">Access Level</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php 
          require("./includes/scripts/api/getUser.php");
          $resp = getUserList();
         
          foreach($resp as $rs){
            echo '<tr>';
            echo '<th scope="row">'.$rs->userID. '</th>';
            echo '<td>'.$rs->userName.'</td>';
            echo '<td>'.$rs->name.'</td>';
            echo '<td>'.$rs->email.'</td>';
            echo '<td>'.$rs->address.'</td>';
            echo '<td>'.$rs->phone.'</td>';
            if($rs->accessLevel==true){
                echo '<td>'.'Employee'.'</td>';
            }
            else echo '<td>'.'Customer'.'</td>';
            echo  '<td>';
            require("./includes/componement/buttons/table-button-group.php");
            echo '</td>';
            echo '</tr>';
           
          }
        ?>
    </tbody>

</table>