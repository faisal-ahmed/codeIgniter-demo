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
<?php echo form_open_multipart('codeigniter_user/password_cng'); ?>

<table class="button">
<tr><td class="pnt_msg"> <?php if (isset($msg)) echo $msg; ?></td></tr>

<tr><td>Current Password:</td></tr>
<tr><td><br/> <input type="password" name="current_password" class="mail1" size="30"/><br/></td></tr>

<tr><td>New Password:</td></tr>
<tr><td><br/> <input type="password" name="new_password" class="mail1" size="30"/><br/></td></tr>

<tr><td><input class="button" type="submit" value="Submit" /></td></tr>
</table>