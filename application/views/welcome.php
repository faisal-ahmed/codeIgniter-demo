<div id="loading">
    <img src="<?php echo base_url(); ?>style/img/loading.gif"/>
</div>
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

<table class="button">
<tr><td id="search_message" class="pnt_msg"></td></tr>

<tr>
    <td>
        <br/> 
        <input id="search_box" type="text" name="search_codeigniter" class="mail1" size="75"/>
        <button class="button" onclick="javascript: get_data('<?php echo base_url(); ?>');" id="search_codeigniter">Search</button>
        <br/>
    </td>
</tr>
</table>
<table class="news" id="news_article">
</table>
<table class="news" id="news_topic">
</table>