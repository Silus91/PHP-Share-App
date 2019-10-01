<div class="container" style="width: 50%">
  <div>
    <h3 class="h3 mb-3 font-weight-normal text-center">Share somestuff</h3>
  </div>
  <div>
    <form class="form-group" method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
      <div>
        <label class="sr-only">Share title!</label>
        <input class="form-control" placeholder="Title" type="text" name="title" />
      </div>
      <div>
        <label class="sr-only">Share Info!</label>
        <textarea class="form-control" placeholder="Text" name="body"></textarea>
      </div>
      <div>
        <label class="sr-only">Share link!</label>
        <input class="form-control" placeholder="Link" class="form-control" type="text" name="link" />
      </div>
      <input class="btn btn-primary" type="submit" name="submit" value="Submit" />
      <a class="btn btn btn-danger" href="<?php echo ROOT_PATH; ?>shares">Cancel</a>
    </form>
  </div>
</div>
