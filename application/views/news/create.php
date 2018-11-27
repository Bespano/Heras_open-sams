<link href="<?php echo base_url('assets/css/bootstrap.css');?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">



<div class="container">
<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>
<?php echo form_open("news/create",'class="form-inline"'); ?>
</br>
<legend>Enter the data </legend>
</br>

<div style="margin-left:30%;margin-top:20px;" >
<div class="form-group">
<label for="title" class="control-label">Title :</label> 
<input type="input" name="title" class="form-control" />
</div>
</br>
<div class="form-group">
<label for="text" class="control-label">Text :</label>
<textarea name="text" class="form-control" /> </textarea><br />
</div>
</br>
</br>
<input type="submit" name="submit" value="Create news item" class="btn btn-primary"/>
</form>
</div>
</div>
