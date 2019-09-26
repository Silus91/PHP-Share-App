<div>
    <?php if(isset($_SESSION['is_logged_in'])) : ?>
<a href="<?php echo ROOT_PATH?>shares/add"> Share</a>
<?php endif; ?>
<?php foreach($viewmodel as $item) : ?>
    <div class="well">
        <h3><?php echo $item['title']; ?></h3>
        <p><?php echo $item['body']; ?></p>
        <a class="btn btn default" href="<?php echo $item['link']; ?>" target="_blank">Dawaj wiecej</a>
    </div>


<?php endforeach; ?>
</div>