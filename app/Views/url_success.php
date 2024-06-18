<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>URL Shortener</title>
</head>
<body>
    <h2>URL Shortener</h2>
    <p>Original URL: <?php echo $original_url; ?></p>
    <p>Shortened URL: <a href="<?php echo $shortened_url; ?>"><?php echo $shortened_url; ?></a></p>
    <?php echo form_open('/shorten'); ?>
        <input type="text" name="url" placeholder="Enter a URL">
        <input type="submit" value="Shorten">
    <?php echo form_close(); ?>
</body>
</html>
