<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center" style="height:30vh">

<div class="container">
  <div class="row">
    <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
      <h1>เข้าสู่ระบบ</h1>
    </div>
  </div>
</div>

</section><!-- End Hero -->

<main  id="main">
    <form class="col-md-3 mx-auto my-5" method="post" action="<?php echo base_url();?>front/login_process"> 
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" required autofocus>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input">
            <label class="form-check-label" for="exampleCheck1">Remember me</label>
        </div>
        <input type="submit" name="submit" class="btn btn-primary" value="เข้าสู่ระบบ">
    </form>
</main>