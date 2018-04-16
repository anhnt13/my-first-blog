<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Anh</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('about_assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
  <link href="{{ asset('about_assets/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('about_assets/vendor/devicons/css/devicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('about_assets/vendor/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{ asset('about_assets/css/resume.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">
      <span class="d-block d-lg-none">Start Bootstrap</span>
      <span class="d-none d-lg-block">
        <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="{{ asset('about_assets/img/29792086_2016113745316572_4138834638447760692_n.jpg') }}" alt="">
      </span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#experience">Experience</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#education">Education</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#skills">Skills</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#interests">Interests</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#awards">Awards</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="{{ route('blog.home') }}">My Blog</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container-fluid p-0">

    <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
      <div class="my-auto">
        <h1 class="mb-0">Anh,
          <span class="text-primary">Nguyen Trung</span>
        </h1>
        <div class="subheading mb-5">Number 7/1, Ngo Cau, Dong Khe Road, Dan Phuong, Hanoi - (+84) 24 33 635 562 - 
          <a href="mailto:name@email.com">anhngtrung@gmail.com</a>
        </div>
        <p class="mb-5">Write something</p>
        <ul class="list-inline list-social-icons mb-0">
          <li class="list-inline-item">
            <a href="#">
              <span class="fa-stack fa-lg">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
              </span>
            </a>
          </li>
          <li class="list-inline-item">
            <a href="#">
              <span class="fa-stack fa-lg">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
              </span>
            </a>
          </li>
          <li class="list-inline-item">
            <a href="#">
              <span class="fa-stack fa-lg">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
              </span>
            </a>
          </li>
          <li class="list-inline-item">
            <a href="#">
              <span class="fa-stack fa-lg">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-github fa-stack-1x fa-inverse"></i>
              </span>
            </a>
          </li>
        </ul>
      </div>
    </section>

    <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="experience">
      <div class="my-auto">
        <h2 class="mb-5">Experience</h2>

        <div class="resume-item d-flex flex-column flex-md-row mb-5">
          <div class="resume-content mr-auto">
            <h3 class="mb-0">Web Developer</h3>
            <div class="subheading mb-3">Intelitec Solutions</div>
            <p>Write something</p>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary">March 2013 - Present</span>
          </div>
        </div>


      </div>

    </section>

    <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="education">
      <div class="my-auto">
        <h2 class="mb-5">Education</h2>

        <div class="resume-item d-flex flex-column flex-md-row mb-5">
          <div class="resume-content mr-auto">
            <h3 class="mb-0">Hanoi University of Science and Technology</h3>
            <div class="subheading mb-3">School of Information and Communication Technology</div>
            <div>Information System</div>
            <p>GPA: 3.xx</p>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary">August 2015 - May 2020</span>
          </div>
        </div>

        <div class="resume-item d-flex flex-column flex-md-row">
          <div class="resume-content mr-auto">
            <h3 class="mb-0">Dan Phuong High School</h3>
            <div class="subheading mb-3"></div>
            <p>GPA: 8.xx</p>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary">August 2012 - May 2015</span>
          </div>
        </div>

      </div>
    </section>

    <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="skills">
      <div class="my-auto">
        <h2 class="mb-5">Skills</h2>

        <div class="subheading mb-3">Programming Languages &amp; Tools</div>
        <ul class="list-inline list-icons">
          <li class="list-inline-item">
            <i class="devicons devicons-html5"></i>
          </li>
          <li class="list-inline-item">
            <i class="devicons devicons-css3"></i>
          </li>
          <li class="list-inline-item">
            <i class="devicons devicons-javascript"></i>
          </li>
          <li class="list-inline-item">
            <i class="devicons devicons-jquery"></i>
          </li>
          </li>
          <li class="list-inline-item">
            <i class="devicons devicons-bootstrap"></i>
          </li>
          <li class="list-inline-item">
            <i class="devicons devicons-wordpress"></i>
          </li>
        </ul>

        <div class="subheading mb-3">Workflow</div>
        <ul class="fa-ul mb-0">
          <li>
            <i class="fa-li fa fa-check"></i>
          Mobile-First, Responsive Design</li>
          <li>
            <i class="fa-li fa fa-check"></i>
          Cross Browser Testing &amp; Debugging</li>
          <li>
            <i class="fa-li fa fa-check"></i>
          Cross Functional Teams</li>
          <li>
            <i class="fa-li fa fa-check"></i>
          Agile Development &amp; Scrum</li>
        </ul>
      </div>
    </section>

    <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="interests">
      <div class="my-auto">
        <h2 class="mb-5">Interests</h2>
        <p>write something</p>
        <p class="mb-0">write something</p>
      </div>
    </section>

    <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="awards">
      <div class="my-auto">
        <h2 class="mb-5">Awards &amp; Certifications</h2>
        <ul class="fa-ul mb-0">
          <li>
            <i class="fa-li fa fa-trophy text-warning"></i>
          write something</li>
          <li>
          </ul>
        </div>
      </section>

    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('about_assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('about_assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{ asset('about_assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{ asset('about_assets/js/resume.min.js') }}"></script>

  </body>

  </html>
