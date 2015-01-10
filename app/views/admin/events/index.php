<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Events - NUSASE Admin</title>
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
    <h3>Manage Events</h3>
    <p>Click on event title to view more information about event, and to access actions like Edit and Delete.</p>
    <i class="fa fa-fw fa-plus-square"></i><a href="<?=base_url()?>admin/events/create">create new event</a>
    <?php if ($query->num_rows() == 0): ?>
      <div class="event-placeholder">no events in database</div>
    <?php else: ?>
      <table>
        <thead>
          <tr>
            <?php foreach ($query->list_fields() as $col): ?>
              <?php if ($col == 'id' || $col == 'all_day' || $col == 'year'): #do nothing ?>
              <?php elseif ($col == 'created' || $col == 'updated'): #do nothing ?>
              <?php else: ?>
                <th><?=$col?></th>
              <?php endif; ?>
            <?php endforeach; ?>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($query->result() as $entry): ?>
            <tr>
              <td>
                <a href="<?=base_url()?>admin/events/show/<?=$entry->id?>">
                  <?php if (strlen($entry->title) > 15): ?>
                    <?=substr($entry->title,0,15).' ...'?>
                  <?php else: ?>
                    <?=$entry->title?>
                  <?php endif; ?>
                </a>
              </td>
              <td><?=date('n/j/y', strtotime($entry->date))?></td>
              <td>
                <?php if ($entry->all_day): ?>
                  All day
                <?php else: ?>
                  <?=date('g:ia', strtotime($entry->time))?>
                <?php endif; ?>
              </td>
              <td>
                <?php if (strlen($entry->location) > 15): ?>
                  <?=substr($entry->location,0,15).' ...'?>
                <?php else: ?>
                  <?=$entry->location?>
                <?php endif; ?>
              </td>
              <td>
                <?php if (strlen($entry->description) > 20): ?>
                  <?=substr($entry->description,0,20).' ...'?>
                <?php else: ?>
                  <?=$entry->description?>
                <?php endif; ?>
              </td>
              <td><?=$entry->semester.' '.$entry->year?></td>
              <td><?=$entry->type?></td>
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
