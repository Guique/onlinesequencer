<form action="" method="<?php echo $method; ?>"<?php echo $fileupload ? ' enctype="multipart/form-data"' : ''; ?>>

<?php
echo $form_id_input;
    foreach($params as $k=>$v)
    {
        echo '<input type="hidden" name="'.$k.'" value="'.$v.'"/>';
    }
?>
<table>
<tr>
