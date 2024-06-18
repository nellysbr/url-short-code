<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>URL Shortener</title>
</head>
<body>
    <h2>URL Shortener</h2>
    <?php if (isset($error)): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>
    <?php echo form_open('/shorten'); ?>
        <input type="text" name="url" placeholder="Enter a URL">
        <input type="submit" value="Shorten">
    <?php echo form_close(); ?>
</body>
</html>
