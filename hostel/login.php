<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Theme One</title>
  <link href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet" type="text/css">
</head>
<body>
  <div class="wrapper">
    <div class="container">
      <div class="logo-menu-container d-flex justify-content-between align-items-center">
        <div class="logo">HOSTEL GERENTE</div>
        <div class="menu">
          <ul class="nav">
            <li class="nav-item"><a href="login.php" class="nav-link active">HOME</a></li>
            <li class="nav-item"><a href="stud_register.php" class="nav-link">REGISTER</a></li>
            <li class="nav-item"><a href="#" class="nav-link">ABOUT</a></li>
            <li class="nav-item"><a href="#" class="nav-link">NEWS</a></li>
            <li class="nav-item"><a href="#" class="nav-link">CONTACT</a></li>
          </ul>
        </div>
      </div>
      <div class="clear"></div>
      <div class="page">
        <div class="main-banner"><img src="images/banner.jpg" alt="banner" class="img-fluid"></div>
        <div class="clear"></div>
        <div class="row">
          <div class="col-md-8">
            <div class="dark-panel mb-4">
              <div class="dark-panel-center p-4">
                <h3 class="text-center" style="color: #ccc">LOGIN HERE</h3>
                <form method="POST" action="login_process.php">
                  <div class="form-group">
                    <input name="uname" type="text" class="form-control mb-2" style="color: #47241C" placeholder="Username">
                  </div>
                  <div class="form-group">
                    <input name="pswd" type="password" class="form-control mb-2" style="color:#47241C" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <input type="radio" name="role" value="student" id="student"><label for="student">STUDENT</label>
                    <input type="radio" name="role" value="admin" id="admin"><label for="admin">ADMIN</label>
                  </div>
                  <div class="form-group">
                    <input type="submit" id="login" name="login" value="LOGIN" class="btn btn-primary btn-block" style="font: bold 14px Tahoma">
                  </div>
                </form>
              </div>
            </div>
            <div class="light-panel mb-4">
              <div class="light-panel-center p-4">
                <h1 style="color: red">OUR SPECIALTIES</h1>
                <ul class="list-unstyled">
                  <li><a href="#">+ Luxury Rooms</a></li>
                  <li><a href="#">+ Supreme Quality Food</a></li>
                  <li><a href="#">+ Indoor Basketball Stadium</a></li>
                  <li><a href="#">+ 24X7 CCTV Monitoring</a></li>
                  <li><a href="#">+ Attached ATM</a></li>
                  <li><a href="#">+ Attached Store</a></li>
                  <li class="no-border"><a href="#">+ Serene Atmosphere</a></li>
                </ul>
              </div>
            </div>
            <div class="dark-panel">
              <div class="dark-panel-center p-4">
                <h1>UPCOMING EVENTS</h1>
                <ul class="list-unstyled">
                  <li class="mb-2"><span class="date">14-12-2018</span> - Celebration of Odiyan release at Marian Football Stadium</li>
                  <li class="mb-2"><span class="date">21-12-2018</span> - Grand Christmas Celebration</li>
                  <li class="news-no-border"><span class="date">31-12-2018</span> - New Year Celebration</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="right-column-content mb-4">
              <div class="right-column-content-heading">
                <h1>MARIAN BOY'S HOSTEL</h1>
                <p>&nbsp;</p>
                <h2>Located amidst the serene mountains, surrounded by tea estates, washed in the fragrance of cardamom and lying in the arms of Mother Nature...It's my Marian…</h2>
              </div>
              <div class="right-column-content-heading">
                <img src="images/marian2.png" style="max-width: 90%" class="img-fluid">
              </div>
            </div>
            <div class="right-column-content mb-4">
              <div class="right-column-content-heading">
                <h1>Join your hands....Let's prosper together....</h1>
                <p>&nbsp;</p>
                <p>Our hand will be there to reach out for you..</p>
                <h2>Join us and be a part of "The Marian Mission".</h2>
              </div>
              <div class="right-column-content-content">
                <p>We built houses for 55 families who were affected by the massive floods. We distributed essential daily items to many relief camps throughout Idukki district.</p>
              </div>
              <div class="right-column-content-img-right">
                <img src="images/marian3.jpg" style="max-width: 90%" class="img-fluid">
              </div>
              <div class="clear right-cloumn-content-border"></div>
              <div class="right-column-content-content">
                <p>Etiam posuere, magna volutpat auctor ultricies, est quam convallis nunc, a vehicula felis turpis vitae tellus. Donec eros arcu, sollicitudin non ultricies ut, ultrices ut lorem. Duis est turpis, porta nec porta eget, sit amet ligula.</p>
              </div>
              <div class="right-column-content-img-right right-column-content-img-right-margin-bottom-none">
                <img src="images/marian4.jpg" style="max-width: 90%" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-wrapper">
      <div class="footer-top"></div>
      <div class="footer-center">
        <div class="row">
          <div class="col-md-6">
            <div class="footer-content-left p-4">
              <h1>MARIAN COLLEGE , KUTTIKKANAM</h1>
              <h2>Making Complete....</h2>
              <p>Marian College is an educational institution in Kuttikkanam (Idukki), Kerala, India. It offers graduate and postgraduate courses. The Catholic Diocese of Kanjirapally established Marian College Kuttikkanam in 1995 to provide the student community with education in information technology, commerce, social work, and management.</p>
              <p>Marian College Kuttikkanam is accredited with 'A' Grade by NAAC. The college is declared as the College with Potential for Excellence (CPE) by UGC. Marian college is affiliated to MG University Kottayam.</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="footer-content-right p-4">
              <h1>MARIAN BOY'S HOSTEL</h1>
              <h2>Kuttikkanam P.O</h2>
              <p>Peermade, Idukki District</p>
              <p>Kerala, India</p>
              <h3>Email: marianhostel@mcka.org</h3>
              <h3>Phone: 04869-232203, 232654</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom"></div>
    </div>
    <div class="clear"></div>
    <div class="copyrights">Copyright &copy; MochaTV.com
      <div class="copyrights-bottom"></div>
    </div>
  </div>
</body>
</html>
