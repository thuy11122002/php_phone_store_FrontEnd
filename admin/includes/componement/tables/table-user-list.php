<table class="table">
    <thead>
        <tr>
            <th scope="col">User ID</th>
            <th scope="col">User Name</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Address</th>
            <th scope="col">Phone</th>
            <th scope="col">Access Level</th>
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
                echo '<td>'.'1'.'</td>';
            }
            else echo '<td>'.'0'.'</td>';
            
            echo '</tr>';
          }
        ?>
    </tbody>

</table>