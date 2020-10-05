<?php require 'partials/header.php'; ?>

<div class="login__container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h4>Add new student</h4>
        </div>
        <div class="panel-body">
            <form action="?act=students@add" method="post">
                <div class="form-group">
                    <label for="code">Student code</label>
                    <input type="text" class="form-control" name="code" value="<?php echo old('code') ?>" id="code" placeholder="Username">
                    <p class="error"><?php echo getError('code') ?></p>
                </div>
                <div class="form-group">
                    <label for="full_name">Fullname</label>
                    <input type="text" class="form-control" id="full_name" value="<?php echo old('full_name') ?>" name="full_name" placeholder="Full Name">
                    <p class="error"><?php echo getError('full_name') ?></p>
                </div>
                <div class="form-group">
                    <label for="year_of_birth">Year of Birth</label>
                    <input type="number" class="form-control" id="year_of_birth" value="<?php echo old('year_of_birth') ?>" name="year_of_birth">
                    <p class="error"><?php echo getError('year_of_birth') ?></p>
                </div>
                <div class="form-group">
                    <label for="phone_number">Phone number</label>
                    <input type="number" class="form-control" id="phone_number" value="<?php echo old('phone_number') ?>" name="phone_number">
                    <p class="error"><?php echo getError('phone_number') ?></p>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" value="<?php echo old('address') ?>" name="address">
                    <p class="error"><?php echo getError('address') ?></p>
                </div>
                <div class="center">
                    <button type="submit" class="btn btn-primary">Add New</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="list">
    <div class="container">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>#</th>
                <th>Code</th>
                <th>Year of birth</th>
                <th>Age</th>
                <th>Phone number</th>
                <th>Address</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($students as $index => $student): ?>
                <tr>
                    <th scope="row"><?php echo $index + 1 ?></th>
                    <td><?php echo $student['code'] ?></td>
                    <td><?php echo $student['year_of_birth'] ?></td>
                    <td><?php echo (int)date('Y') - $student['year_of_birth'] ?></td>
                    <td><?php echo $student['phone_number'] ?></td>
                    <td><?php echo $student['address'] ?></td>
                    <td>
                        <a onclick="confirmDelete(event)" href="?act=students@delete&code=<?php echo $student['code'] ?>">Delete</a> |
                        <a href="?act=students@edit&code=<?php echo $student['code'] ?>">Edit</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?php require 'partials/footer.php'; ?>
