<?php
$con = new mysqli('localhost', 'root', '', 'crm');
$data = $con->query('select * from admin where admin.`parent`=' . $_POST["id"]);
?>
<div class="form-group">
    <label for="exampleInputEmail1">Select Marketing Manager </label>
    <select name="" id="mark" class="form-control">
        <option value="">Select One</option>
        <?php while ($d = $data->fetch_assoc()) {  ?>
            <option value="<?php echo $d['id'] ?>"><?php echo $d['name'] ?></option>
        <?php  }   ?>
    </select>
</div>