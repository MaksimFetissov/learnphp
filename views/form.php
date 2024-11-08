<?php include  __DIR__ . '/partials/header.php' ?>

<?php if($name): ?>
    <h1>Hello <?=$name?>!</h1>
<?php endif; ?>

<form>
    <input type="text" name="name">
    <input type="submit" value="Send">
</form>

<?php include  __DIR__ . '/partials/pagefoot.php' ?>