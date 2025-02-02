<table class="table caption-top">
    <caption>List of Brands</caption>
    <thead class="table-dark">
        <tr>
            <th scope="col">Bill ID</th>
            <th scope="col">User Name</th>
            <th scope="col">Total</th>
            <th scope="col">Date</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        require_once("./includes/scripts/api/APIs.php");
        $url = 'http://localhost:8080/bill';

        $resp = getList($url);


        foreach ($resp as $rs) {
            echo '<tr>';
            echo '<th scope="row">' . $rs->billID . '</th>';
            echo '<td>';
            $url2 = 'http://localhost:8080/user/' . '' . $rs->userID;
            $resp2 = getSingleItem($url2);
            echo $resp2->userName;
            echo '</td>';
            echo '<td>' . $rs->total . '</td>';
            echo '<td>' . $rs->date . '</td>';
            if ($rs->status = "false") {
                echo '<td>' . 'Processing' . '</td>';
            } else
                echo '<td>' . 'Completed' . '</td>';

            echo '<td>';
            echo '<form method="post">';
            echo '<input type="hidden" name="rowID" value="' . strval($rs->billID) . '">';
            require("./includes/componement/buttons/table-button-group.php");
            echo '</form>';
            echo '</td>';
            echo '</tr>';

        }
        ?>
    </tbody>

</table>