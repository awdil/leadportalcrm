

<!doctype>
<html>
    <head>
        <title>Profile Image</title>
    </head>
    <body>
        <form action="<?php echo base_url('Mod/ProfileImage') ?>" method="post" enctype="multipart/form-data">
            <input type="file" name="file">
            <input type="submit" name="submit">
            
        </form>
    </body>
</html>