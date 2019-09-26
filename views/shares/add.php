<div>
  <div>
    <h3>Share somestuff</h3>
  </div>
  <div>
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
      <div>
        <label>Share title</label>
        <input type="text" name="title" />
      </div>
      <div>
        <label>Share body</label>
        <textarea  name="body"></textarea>
      </div>
      <div>
        <label>Share link</label>
        <input type="text" name="link" />
      </div>
      <input type="submit" name="submit" value="Submit" />
      <a href="<?php echo ROOT_PATH; ?>shares">Cancel</a>
    </form>
  </div>
</div>
