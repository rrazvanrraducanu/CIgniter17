<?php
echo 'Welcome '.$this->session->userdata('username').'!';
echo '<br>';
echo anchor('LoginController/logout','Logout');
?>
