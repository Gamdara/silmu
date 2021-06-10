<?php 
    include "dashboard.php";
    include "php/koneksi.php";
    top();
    $no = 1;
    $response = get_request("https://sinarilmu-api.herokuapp.com/get/genres");
	$res = json_decode($response,true);
?>
    <h2>User</h2>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
        <thead>
            <tr>
            <th>No</th>
            <th>Name</th>
            <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($res as $genre) { ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $genre["name"] ?></td>
                <td>
                    <button type="button" class="btn btn-success">Edit</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </td>
            </tr>
            <?php } ?>
        </tbody>
        </table>
    </div>

<?php
    bottom();
?>