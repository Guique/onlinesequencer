<?php
if(count($errors) > 0)
{
    echo '<div class="warning"><ul>';
    foreach($errors as $e)
    {
        echo '<li>'.$e.'</li>';
    }
    echo '</ul></div>';
}
?>
<form action="" method="<?php echo $method; ?>"<?php echo $fileupload ? ' enctype="multipart/form-data"' : ''; ?>>
<?php
echo $form_id_input;
foreach($params as $k=>$v)
{
    echo '<input type="hidden" name="'.$k.'" value="'.$v.'"/>';
}
?>
<table>
