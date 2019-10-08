<div class="jumbotron mx-auto">
  <h1>Welcome</h1>
  <p>You are on Share App, you are more than Welocome to register and start enjoying our Share app.</p>
  <br />
  <?php if(!isset($_SESSION['is_logged_in'])) : ?>
  <p>Can`t see content?? Register to see all GOOD Stuff here!!</p>
  <button class="btn btn-primary">
    <span class="spinner-border spinner-border-sm">Loading..</span>
    
  </button>
  <?php endif ?>
</div>