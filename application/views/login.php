<?php
//$this->load->helper('form');
echo isset($error)?$error:'';
echo form_open('LoginController/check');
$data1 = ['name'          => 'username',
        'id'            => 'text1',
        'maxlength'     => '100',
        'size'          => '30',
       ];
$data2 = ['name'          => 'password',
        'id'            => 'text2',
        'maxlength'     => '100',
        'size'          => '30',
       ];
$data3 = array(
    'name' => 'button',
    'id' => 'button',
    'value' => 'true',
    'type' => 'reset',
    'content' => 'Reset'
);
?>
<?php echo form_fieldset('Login'); ?>
<table>
<tr>
<td><?php echo form_label('Username ', 'text1');?></td>
<td><?php echo form_input($data1);?></td>
</tr>
<tr>
<td><?php echo form_label('Password ', 'text2');?></td>
<td><?php echo form_input($data2);?></td>
</tr>
<tr>
<td><?php echo form_submit('submit', 'Login');?></td>
<td><?php echo form_button($data3);?></td>
</tr>
</table>
<?php echo form_fieldset_close();?>
<?php echo form_close();?>
