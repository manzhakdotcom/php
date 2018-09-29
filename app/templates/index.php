<?php include_once __DIR__ . '/header.php'; ?>
<ul>
<?php foreach ($users as $user): ?>
    <li><?php echo $user->first_name . ' - ' . $user->age; ?></li>
<?php endforeach;?>
</ul>
    <form action="" method="post">
        <input type="text" name="data">
        <input type="submit" value="Send">
    </form>
<p><?php echo $data ?></p>
<?php include_once __DIR__ . '/footer.php'; ?>