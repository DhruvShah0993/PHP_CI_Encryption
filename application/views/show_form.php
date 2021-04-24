<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/codeigniter_encryption/css/style.css" type="text/css">
    <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' type="text/css">
    <title>Encryption In CodeIgniter</title>
</head>
<body>
    <div id="main">
        <div id="show_form">
        <h2>Encryption In CodeIgniter</h2>
        <hr/>
        <?php
        echo form_open('encryption_tutorial/key_encoder');
        echo "<div class='error_msg'>";
        echo validation_errors();
        echo "</div>";
        echo form_label('Enter Your Message ');
        echo "<br/>";
        echo "<br/>";
        $data = array
        (
            'name' => 'key',
            'placeholder' => 'Please Enter a Message'
        );
        echo form_input($data);
        echo "<br/>";
        echo "<br/>";
        echo form_submit('submit', 'Encode');
        echo form_close();
        if(isset($decrypt_value) && $decrypt_value != NULL)
        {
            echo form_fieldset('Decrypted Message', "class='result_decode'");
            echo "<b>" . $decrypt_value . "</b>";
            echo form_fieldset_close();
        }
        ?>
        </div>
    </div>
    <?php
    if(isset($encrypt_value) && $encrypt_value != NULL)
    {
        echo form_fieldset('Encrypted Message', "class='result_encode'");
        echo "<b>" . $encrypt_value . "</b>";
        echo form_fieldset_close();
        echo "<div class='decode_form'>";
        echo form_open('encryption_tutorial/key_decoder');
        echo form_label('Decode Encrypted Message ');
        $data = array
        (
            'name' => 'encrypt_key',
            'value' => $encrypt_value
        );
        echo form_input($data);
        echo "<br/>";
        echo "<br/>";
        echo form_submit('submit', 'Decode');
        echo form_close();
        echo "</div>";
    }
    ?>
</body>
</html>