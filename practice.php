<!DOCTYPE html>
<html lang="en">
<head>
  <title>Practice</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> <!--column toirir jnne obosshoi dite hbe-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> <!--Ay 3ta script pic slider (carousel) er kaj krse-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <style>

body{
  background-image: url(image/love.jpg);
  background-size: cover;
  background-position: center center;
  background-attachment: fixed;
  
}
  
.features {
  padding-bottom: 40px;
}

.features .nav-tabs {
  border: 0;
}

.features .nav-link {
  border: 0;
  padding: 20px;
  transition: 0.3s;
  color: #364146;
  transition: 0.3s ease-in-out;
  border-radius: 0;
  border-left: 4px solid #fafbfb;
}

.features .nav-link h4 {
  font-size: 18px;
  font-weight: 600;
  transition: 0.3s ease-in-out;
  color: #576971;
}

.features .nav-link p {
  font-size: 14px;
  margin-bottom: 0;
}

.features .nav-link:hover {
  background: #fafbfb;
}

.features .nav-link:hover h4 {
  color: #364146;
}

.features .nav-link.active {
  border-radius: 0;
  border: 0;
  border-left: 4px solid #009cea;
  background: #fafbfb;
}

.features .nav-link.active h4 {
  color: #009cea;
}

.features .tab-pane.active {
  -webkit-animation: slide-down 0.5s ease-out;
  animation: slide-down 0.5s ease-out;
}

.features .tab-content {
  text-align: right;
}

@-webkit-keyframes slide-down {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

@keyframes slide-down {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}
  </style>
</head>

<body>
  <br> <br> <br> <br>
  <section id="features" class="features">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 mt-2 mb-tg-0 order-2 order-lg-1">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item" data-aos="fade-up">
                <a class="nav-link active show" data-toggle="tab" href="#tab-1">
                  <h4>Modi sit est</h4>
                  <p>Quis excepturi porro totam sint earum quo nulla perspiciatis eius.</p>
                </a>
              </li>
              <li class="nav-item mt-2" data-aos="fade-up" data-aos-delay="100">
                <a class="nav-link" data-toggle="tab" href="#tab-2">
                  <h4>Unde praesentium sed</h4>
                  <p>Voluptas vel esse repudiandae quo excepturi.</p>
                </a>
              </li>
              <li class="nav-item mt-2" data-aos="fade-up" data-aos-delay="200">
                <a class="nav-link" data-toggle="tab" href="#tab-3">
                  <h4>Pariatur explicabo vel</h4>
                  <p>Velit veniam ipsa sit nihil blanditiis mollitia natus.</p>
                </a>
              </li>
              <li class="nav-item mt-2" data-aos="fade-up" data-aos-delay="300">
                <a class="nav-link" data-toggle="tab" href="#tab-4">
                  <h4>Nostrum qui quasi</h4>
                  <p>Ratione hic sapiente nostrum doloremque illum nulla praesentium id</p>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <figure>
                  <img src="assets/img/features-1.png" alt="" class="img-fluid">
                </figure>
              </div>
              <div class="tab-pane" id="tab-2">
                <figure>
                  <img src="assets/img/features-2.png" alt="" class="img-fluid">
                </figure>
              </div>
              <div class="tab-pane" id="tab-3">
                <figure>
                  <img src="assets/img/features-3.png" alt="" class="img-fluid">
                </figure>
              </div>
              <div class="tab-pane" id="tab-4">
                <figure>
                  <img src="assets/img/features-4.png" alt="" class="img-fluid">
                </figure>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
</body>

</html>