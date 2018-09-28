<?php include_once __DIR__ . '/header.php'; ?>
<ul>
<?php foreach ($users as $user): ?>
    <li><?php echo $user->first_name . ' - ' . $user->age; ?></li>
<?php endforeach;?>
</ul>
<?php include_once __DIR__ . '/footer.php'; ?>