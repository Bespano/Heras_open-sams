<link href="<?php echo base_url('assets/css/bootstrap.css');?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">



<div class="container">
<h2><?php echo $title; ?></h2>



</br>
<legend>Enter the data </legend>
</br>

<div style="margin-left:30%;margin-top:20px;" >





<div class="form-group">
<label for="employeeno" class="control-label">Employee No :</label> <input type="text" name="name" class="form-control" />
<?php foreach ($news as $news_item): ?>

        <h3><?php echo $news_item['title']; ?></h3>
        <div class="main">
                <?php echo $news_item['text']; ?>
        </div>
        <p><a href="<?php echo site_url('news/'.$news_item['slug']); ?>">View article</a></p>

<?php endforeach; ?>
</div>


</br>

</br>
<div class="form-group">
<label for="age" class="control-label">Age :</label> <input type="text" name="age" class="form-control" />
</div>
</br>
</br>
<input type="submit" name="name" class="btn btn-primary"/>

</div>


</div>






