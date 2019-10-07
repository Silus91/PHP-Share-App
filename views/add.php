<div class="container" style="width: 50%">
  <div>
    <h3 class="h3 mb-3 font-weight-normal text-center">Todo App!</h3>
    <h4 class="h4 mb-3 font-weight-normal text-center">Get stuff done!</h4>

  </div>
  <div>
    <form class="form-group" method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
      <div>
        <label class="sr-only">Topic title</label>
        <input class="form-control" placeholder="Title" type="text" name="title" />
      </div>
      <div>
        <label class="sr-only">What you need to do?</label>
        <textarea class="form-control" placeholder="Text" name="body"></textarea>
      </div>
      <input class="btn btn-primary" type="submit" name="submit" value="Submit" />
      <a class="btn btn btn-danger" href="<?php echo ROOT_PATH; ?>todos">Cancel</a>
    </form>
  </div>
</div>
