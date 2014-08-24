<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Authentications | NUSASE Admin</title>
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <link rel="stylesheet" href="<?=base_url()?>public/css/foundation5.css" />
  <link rel="stylesheet" href="<?=base_url()?>public/css/font-awesome.css" />
  <script src="<?=base_url()?>public/js/modernizr.js"></script>
</head>
<body>

<div class="row">
  <div class="small-12 columns">
    <h1><a href="<?=base_url()?>admin">Admin Dashboard</a></h1>
    <hr />
    <h3>Manage Users</h3>
    <p>Click the link in Status to activate or deactivate user. Click the Edit action to edit profile.</p>
    <?php if (!empty($message)): ?>
      <div data-alert class="alert-box info radius">
        <?=$message?>
        <a href="#" class="close">&times;</a>
      </div>
    <?php endif; ?>
    <table>
      <thead>
        <tr>
          <th>Username</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th>Groups</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <?php foreach ($users as $user): ?>
        <tr>
          <td><?=$user->username?></td>
          <td><?=$user->first_name?></td>
          <td><?=$user->last_name?></td>
          <td><?=$user->email?></td>
          <td>
            <?php foreach ($user->groups as $group): ?>
              <?=$group->name?><br />
            <?php endforeach; ?>
          </td>
          <td>
            <?php if ($user->active): ?>
              <?=anchor('admin/auth/deactivate/'.$user->id,'Active')?>
            <?php else: ?>
              <?=anchor('admin/auth/activate/'.$user->id,'Inactive')?>
            <?php endif; ?>
          </td>
          <td>
            <?=anchor('admin/auth/edit_user/'.$user->id,'Edit')?><br />
            <?php if ($this->ion_auth->is_admin()): ?>
              <?=anchor('admin/auth/destroy_user/'.$user->id,'Delete','onClick="return deleteConfirm();"')?>
            <?php endif; ?>
          </td>
        </tr>
      <?php endforeach; ?>
    </table>
    <p>Total <?=count($users)?> entries</p>
    <h3>Manage Groups</h3>
    <table>
      <thead>
        <tr>
          <th>Group Name</th>
          <th>Description</th>
          <th>Action</th>
        </tr>
      </thead>
      <?php foreach ($groups as $group): ?>
        <tr>
          <td><?=$group->name?></td>
          <td><?=$group->description?></td>
          <td>
            <?=anchor('admin/auth/edit_group/'.$group->id,'Edit')?><br />
            <?php if ($this->ion_auth->is_admin()): ?>
              <?=anchor('admin/auth/destroy_group/'.$group->id,'Delete','onClick="return deleteConfirm();"')?>
            <?php endif; ?>
          </td>
        </tr>
      <?php endforeach; ?>
    </table>
    <p>Total <?=count($groups)?> entries</p>
    <hr />
    <div class="row">
      <div class="small-12 columns">
        <?=anchor('admin/auth/create_user','Create a New User','class="button radius"')?>
        <?=anchor('admin/auth/create_group','Create a New Group','class="button radius"')?>
      </div>
    </div>
  </div>
</div>

<script src="<?=base_url()?>public/js/jquery.min.js"></script>
<script src="<?=base_url()?>public/js/foundation.min.js"></script>
<script src="<?=base_url()?>public/js/foundation5.js"></script>
<script>
  function deleteConfirm() {
    return confirm('Are you sure you to delete?\n\nData will be lost!');
  }
</script>

</body>
</html>
