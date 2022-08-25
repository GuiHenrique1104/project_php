<h1>Edit User!</h1>

<?php
    $sql = "SELECT * FROM crud_php WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

<form action="?page=save" method="POST">
    <input type="hidden" name="action" value="edit">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" value="<?php print $row->name; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Street</label>
        <input type="text" name="street" value="<?php print $row->street; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>House number</label>
        <input type="number" name="number_street" value="<?php print $row->number_street; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>District</label>
        <input type="text" name="district" value="<?php print $row->district; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>City</label>
        <input type="text" name="city" value="<?php print $row->city; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>State</label>
        <input type="text" name="state" value="<?php print $row->state; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
