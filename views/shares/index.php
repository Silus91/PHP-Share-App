<div>
  <?php if(isset($_SESSION['is_logged_in'])) : ?>
    <a  style="margin-top:5px" class="btn btn-lg btn-primary mx-auto btn-block" href="<?php echo ROOT_PATH?>shares/add"> Share</a>
  <?php endif; ?>
  <?php foreach($viewmodel as $item) : ?>
    <div class="container bg-light border border-warning rounded-lg" style="margin:5px">
      <h3 class="h3 mb-3 font-weight-normal text-center"><?php echo $item['title']; ?></h3>
      <p class="text-center"><?php echo $item['body']; ?></p>
      <a class="btn btn-lg btn-primary mx-auto" href="<?php echo $item['link']; ?>" target="_blank">Go to Link</a>
      <a class="btn btn-lg btn-danger mx-auto" href="<?php echo ROOT_PATH?>shares $item['id']; ?>" >Delete Post</a>
    </div>
  <?php endforeach; ?>
</div>