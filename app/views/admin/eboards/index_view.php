<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Eboards - NUSASE Admin</title>
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
    <h3>Manage Eboards</h3>
    <p>Click on name to view more information about eboard member, and to access actions like Edit and Delete.</p>
    <i class="fa fa-fw fa-plus-square"></i><a href="<?=base_url()?>admin/eboards/create">add new eboard member</a>
    <?php if ($query->num_rows() == 0): ?>
      <div class="eboard-placeholder">no eboards in database</div>
    <?php else: ?>
      <table>
        <thead>
          <tr>
            <?php foreach ($query->list_fields() as $column): ?>
              <?php if($column != 'id'): ?>
                <th><?=$column?></th>
              <?php endif; ?>
            <?php endforeach; ?>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($query->result() as $member): ?>
            <tr>
              <td>
                <a href="<?=base_url()?>admin/eboards/show/<?=$member->id?>">
                  <?php if (strlen($member->name) > 30): ?>
                    <?=substr($member->name,0,30).' ...'?>
                  <?php else: ?>
                    <?=$member->name?>
                  <?php endif; ?>
                </a>
              </td>
              <td>
                <?php if (strlen($member->position) > 30): ?>
                  <?=substr($member->position,0,30).' ...'?>
                <?php else: ?>
                  <?=$member->position?>
                <?php endif; ?>
              </td>
              <td>
                <?php if (strlen($member->major) > 50): ?>
                  <?=substr($member->major,0,50).' ...'?>
                <?php else: ?>
                  <?=$member->major?>
                <?php endif; ?>
              </td>
              <td><?=$member->grad_year?></td>
              <td>
                <?php if (strlen($member->bio) > 50): ?>
                  <?=substr($member->bio,0,50).' ...'?>
                <?php else: ?>
                  <?=$member->bio?>
                <?php endif; ?>
              </td>
              <td><?=$member->semester?></td>
              <td><?=$member->year?></td>
              <td><?=date('n/j/y g:ia',strtotime($member->created))?></td>
              <td><?=date('n/j/y g:ia',strtotime($member->updated))?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <p>Total <?=$query->num_rows()?> entries</p>
    <?php endif; ?>
  </div>
</div>

<script src="<?=base_url()?>public/js/jquery.min.js"></script>
<script src="<?=base_url()?>public/js/foundation.min.js"></script>
<script src="<?=base_url()?>public/js/foundation5.js"></script>

</body>
</html>
