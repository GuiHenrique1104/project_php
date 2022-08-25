<h1>List Users!</h1>
<?php
    $sql = "SELECT * FROM crud_php";

    $res = $conn->query($sql);

    $qtt = $res->num_rows;

    if($qtt > 0) {
        print "<table class='table table-hover table-bordered'>";
            print "<tr>";
            print "<th>#</th>";
            print "<th>name</th>";
            print "<th>street</th>";
            print "<th>house_number</th>";
            print "<th>district</th>";
            print "<th>city</th>";
            print "<th>state</th>";
            print "<th>Actions</th>";
            print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id."</td>";
            print "<td>".$row->name."</td>";
            print "<td>".$row->street."</td>";
            print "<td>".$row->number_street."</td>";
            print "<td>".$row->district."</td>";
            print "<td>".$row->city."</td>";
            print "<td>".$row->state."</td>";
            print "<td>
                        <button onclick=\"location.href='?page=edit&id=".$row->id."';\" class='btn btn-success'>Edit</button>
                        <button onclick=\"if(confirm('Are you sure you want to delete?')){location.href='?page=save&action=delete&id=".$row->id."';}else{false;}\" class='btn btn-danger'>Delete</button>
                    </td>" ;
            print "</tr>";
        }
        print "</table>";
    } else {
        print "<p class='alert alert-danger'>No results</p>";
    }

?>