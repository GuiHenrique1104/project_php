<h1>New User!</h1>
<form action="?page=save" method="POST">
    <input type="hidden" name="action" value="register">
    <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="mb-3">
        <label>Street</label>
        <input type="text" name="street" class="form-control">
    </div>
    <div class="mb-3">
        <label>House number</label>
        <input type="number" name="number_street" class="form-control">
    </div>
    <div class="mb-3">
        <label>District</label>
        <input type="text" name="district" class="form-control">
    </div>
    <div class="mb-3">
        <label>City</label>
        <input type="text" name="city" class="form-control">
    </div>
    <div class="mb-3">
        <label>State</label>
        <input type="text" name="state" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>