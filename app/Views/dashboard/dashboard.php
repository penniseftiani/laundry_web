<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body {
    min-height: 100vh;
    background-size: cover;
    background: #59D5E0;
    background-repeat: no-repeat;
  }

  .container {
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
  }
</style>

<div class="container">
  <div class="row justify-content-center my-2">
    <div class="col-lg-5 mx-5 border border-success rounded bg-info text-white p-5">
      <h1 class="text-center"><b>Permata Laundry</b></h1></br>
      <h2>
        <center>
          <font size="5">Sign in</font>
        </center>
      </h2></br>
      <a href="<?= base_url('logout'); ?>">Logout</a>



    </div>
  </div>
</div>