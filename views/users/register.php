<div class="container" style="width: 50%">
  <div>
    <h3 class="h3 mb-3 font-weight-normal text-center">Register</h3>
    <img class="mx-auto d-block" src="https://www.trzcacak.rs/myfile/detail/264-2642533_samurai-png-transparent-image-samurai-png.png" width="150px" height="150px" alt="Samurai">
  </div>
  <div>
    <form class="form-group" method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
      <div>
        <label class="sr-only">Name</label>
        <input class="form-control" type="text" name="name" placeholder="Name" />
      </div>
      <div>
        <label class="sr-only">Email</label>
        <input class="form-control" type="text" name="email" placeholder="Email" />
      </div>
      <div>
        <label class="sr-only">Password</label>
        <input class="form-control" type="password" name="password" placeholder="Password" />
      </div>
      <input class="btn btn-lg btn-primary" type="submit" name="submit" value="Submit" />
    </form>
  </div>
</div>
