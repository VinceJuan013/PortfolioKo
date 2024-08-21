<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $dbname = "dbprofile";
  $conn = new mysqli($hostname, $username, $password, $dbname);


  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  // Execute the SQL query to fetch data for the specified 'id'
  $sql = "SELECT * FROM profile";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc(); // Fetch the first row (assuming you expect only one row)
  } else {
    // Handle the case where no data is found
    echo "No data found.";
  }
 ?>
    <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
        <!-- Navbar content -->
        <div class="container-fluid">
            <a class="navbar-brand" href="#Home">
                <img src="Logo.png" alt="Superman" width="30" height="24"> <?php echo $row["name"]; ?>

            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#Home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Educational">Educational</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#AboutMe">AboutMe</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="edit.php">Edit</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <!-- ===== Home Section Start ===== -->
    <section class="home section" id="Home">
        <div class="container">
            <div class="row">

                <div class="d-flex flex-row">
                    <div data-aos="fade-down-right">
                        <div class="home-text">
                            <h4 class="greet">Hello 👋 I'm</h4>
                            <h1 class="name"><?php echo $row["name"]; ?></h1>
                            <div class="social-icons">
                                <a href="https://www.facebook.com/vhince014"><i class="facebook"></i>
                                    <img src="facebook.png" width="50   "></a>
                                <a href="https://www.instagram.com/xx.vielzeroone051396.xx"><i class="insta"></i>
                                    <img src="instagram.png" width="60"></a>
                                <a href="https://x.com/VRJuan0917?t=a3epttRAxliz5BI6996pwQ&s=07"><i
                                        class="twitters"></i>
                                    <img src="twitter.png" width="30"></a>
                                <a href="https://github.com/VinceJuan013"><i class="Github"></i>
                                    <img src="github.png" width="30"></a>
                            </div>
                            <span class="Year"> <i>3rd Year BSIT Student</i></span>


                            <h4 class="intro"><br>Welcome to my side of the internet!
                                <br>I'm a passionate and driven BSIT <br>(Bachelor of Science in Information Technology)
                                <br>student on a
                                journey of learning,
                                exploration, and innovation.
                                <br>I'm excited to share my experiences and insights with you, and I hope you'll join me
                                on my journey.
                            </h4>

                            <a href="" class="btn btn-1"></a>
                        </div>
                    </div>
                    <div data-aos="fade-left">
                        <div class="home-image">
                            <div class="img-box">
                                <img src=<?php echo $row["photo"]; ?> alt="Me">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ===== Home Section End ===== -->

    <!-- ===== Educational Section Start ===== -->
    <section class="educational section" id="Educational">
        <div class="containers">
            <div class="rows">
                <div class="d-flex align-items-center">
                    <div data-aos="zoom-in">
                        <div class="educs">
                            <h1 class="Title1">Educational Attainment</h1>
                            <br>
                            <h2 class="college">Tertiary</h2>
                            <br>
                            <p>•Pamantasan Ng Lungsod ng Muntinlupa <br> Muntinlupa City
                                <br>2021-present
                            </p>
                            <p>•Asia Technological School of Science and Arts
                                <br>Golden City, Santa Rosa Laguna
                                <br>2016-2018
                            </p>
                        </div>
                    </div>
                    <div data-aos="flip-right">
                        <div class="works">
                            <h1 class="Title2"> Work Experience</h1>
                            <br>
                            <h2 class="Title3">•Fujitsu Die-Tech Corp.</h2>
                            <p>Laguna Technopark, Biñan Laguna
                                <br>Production Operator <br> May2021-Oct2021
                            </p>
                            <br>
                            <h2 class="Title4">•Monde Nissin</h2>
                            <p>Balibago Rd., Santa Rosa City, Laguna <br>
                                Production Operator <br> July2020-Dec2020</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===== About Me Section Start ===== -->
    <section class="aboutme section" id="AboutMe">
        <div class="containerss">
            <div class="rowss">
                <div class="accordion">
                    <div class="" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                    aria-controls="panelsStayOpen-collapseOne">
                                    All About Me
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                    <strong>Hello! I'm Vince Ruel Juan</strong> Currently 3rd year irregular student.
                                    I'm from San Pedro City of Laguna.
                                    I'm the eldest of 3 siblings and my birthday is May 13, 1996. So, right now I'm 27
                                    years old.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseTwo">
                                    Why Did You Choose IT?
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <strong>Why Did I chose IT?</strong> I chose IT because of my fascination with
                                    technology's transformative power. From a young age, I was captivated by the rapid
                                    advancements in the field, and I wanted to be part of this dynamic industry. IT
                                    offers endless opportunities for innovation, problem-solving, and continuous
                                    learning. The prospect of shaping the digital future and contributing to the
                                    development of cutting-edge solutions was a strong motivator. Additionally, the
                                    versatility of IT allows me to explore various domains like programming,
                                    cybersecurity, data science, and network management, making it a highly adaptable
                                    and rewarding career path. Ultimately, my passion for technology and its
                                    ever-evolving nature led me to choose IT as my field of study.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseThree">
                                    Where do you see yourself 5 years from now?
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <strong>5 Years from now? </strong>Where I can see myself in a more advanced and
                                    specialized role within the field of information technology in five years. My goals
                                    would include gaining expertise in areas such as cybersecurity, software
                                    development, data analysis, or network administration, depending on my specific
                                    interests. I would hope to have completed my degree, gained practical experience
                                    through internships or projects, and possibly even have secured a full-time job in a
                                    technology-related role. Continuous learning and staying up-to-date with emerging
                                    technologies would be a priority, as the IT field is ever-evolving. My vision would
                                    be to contribute to innovation and problem-solving in this dynamic industry.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-left">
                    <div class="home-images">
                        <div class="vincej">
                            <img src=<?php echo $row["photo_2"]; ?> width="600" alt="Me">

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ===== About Me Section End ===== -->







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>