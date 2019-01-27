<h2><?= $title ?></h2>

    <table class="table">
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>Actions</th>
        </tr>
        
        <?php foreach($users as $user) : ?>
            <tr>
                <td>
                    <?php echo $user['id']; ?>
                </td>
                <td>
                    <?php echo $user['name']; ?>
                </td>
                <td>
                    <?php echo $user['email']; ?>
                </td>
                <td>
                    <a href="<?php echo site_url('posts/'.$user['id']); ?>"  class="badge badge-primary">View</a>
<a href="#" class="badge badge-secondary">Edit</a>
<a href="#" class="badge badge-danger">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
