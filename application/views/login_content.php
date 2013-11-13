<?php if ($this->session->userdata('msg') != "") { ?>
<table class="pnt_msg">
    <tr>
        <td>
            <?php echo $this->session->userdata('msg'); ?>
        </td>
    </tr>
</table>
<?php $this->session->unset_userdata('msg'); } ?>
<div class="clear"></div>
<?php echo validation_errors(); ?>
<?php echo form_open_multipart('codeigniter_user'); ?>

<table class="login">

<tr><td>Username:</td></tr>
<tr><td><br/> <input type="text" name="username" class="mail1" size="30"/><br/></td></tr>

<tr><td>Password:</td></tr>
<tr><td><br/> <input type="password" name="password" class="mail1" size="30"/><br/></td></tr>

<tr><td><input class="button" type="submit" value="Submit" /></td></tr>
</table>