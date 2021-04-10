<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from https://bootdey.com  -->
    <!--  All snippets are MIT license https://bootdey.com/license -->
   
    <title>Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Almarai&display=swap" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
    /* @import url('https://fonts.googleapis.com/css2?family=Almarai&display=swap'); */

      body{margin-top:20px; font-family: 'Almarai'}
      .myTxt{
        padding: 10px;
      }
.candidates-profile-bg {
  padding: 180px 0px 80px 0px;
  background-image: url("https://www.bootdey.com/img/Content/bg1.jpg");
  background-size: cover;
  position: relative;
  background-position: center center;
}

.candidates-profile-details img {
  max-width: 130px;
  background: transparent;
}

.candidates-profile-details .candidates-profile-name {
  font-weight: 300;
}

.candidates-profile-icons .list-inline-item {
  margin: 0 1px !important;
}

.candidates-profile-social-icons li a {
  height: 32px;
  width: 32px;
  color: rgba(255, 255, 255, 0.7);
  text-align: center;
  font-size: 15px;
  display: inline-block;
  line-height: 30px;
  border-radius: 50%;
  border: 1px solid rgba(255, 255, 255, 0.7);
  -webkit-transition: all 0.5s;
  transition: all 0.5s;
}

.candidates-profile-social-icons li a:hover {
  background-color: #ff4f6c;
  color: #ffffff;
  -webkit-transition: all 0.5s;
  transition: all 0.5s;
  border-color: #ff4f6c;
}

.profile-education-icon {
  border: 1px solid #ececec;
  position: absolute;
  width: 90px;
  height: 90px;
  line-height: 90px;
  font-size: 42px;
  border-radius: 50px;
  top: 0;
  left: 0;
  right: 0;
  margin: 0 auto;
  background-color: #ffffff;
  color: #ff4f6c;
  -webkit-transition: all 0.5s;
  transition: all 0.5s;
}

.candidates-profile-education {
  padding: 64px 24px 24px;
}

.candidates-profile-education:hover .profile-education-icon {
  background-color: #ff4f6c;
  border: 1px solid #ff4f6c;
  color: #ffffff;
  -webkit-transition: all 0.5s;
  transition: all 0.5s;
}

.job-details {
  padding: 210px 0px 60px 0px;
  background-image: url("../images/job-details-bg.jpg");
  background-size: cover;
  position: relative;
  background-position: center center;
}

.job-detail {
  border: 1px solid #ececec;
  border-radius: 6px;
}

.job-details-desc-item p {
  overflow: hidden;
}

.job-detail-icons li {
  margin: 2px !important;
}

.job-detail-icons li a {
  height: 32px;
  width: 32px;
  color: #ff4f6c;
  text-align: center;
  font-size: 15px;
  display: inline-block;
  line-height: 30px;
  border-radius: 50%;
  border: 1px solid #ff4f6c;
  -webkit-transition: all 0.5s;
  transition: all 0.5s;
}

.job-detail-icons li a:hover {
  background-color: #ff4f6c;
  color: #ffffff;
  -webkit-transition: all 0.5s;
  transition: all 0.5s;
}

.job-detail-time li {
  padding: 10px 4px;
  border-top: 1px solid #ececec;
}

.job-detail-time li:first-child {
  border-top: none;
}
.section {
    padding-bottom: 80px;
    padding-top: 80px;
    position: relative;
}

</style>
     
</head>
<body>
<link href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/4.9.95/css/materialdesignicons.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js" integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />

<section class="candidates-profile-bg">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="candidates-profile-details text-center">
                        <img src="logo.jpg" class="img-fluid d-block mx-auto rounded-circle img-thumbnail mb-4">
                        <h4 class="text-white candidates-profile-name mb-2">قدّم تهنئتك بالعيد بإسم الكلية التقنية بنجران </h4>
                        <!-- <p class="text-white-50 mb-2"><i class="mdi mdi-bank mr-2"></i>Web Themes.pvt.Ltd</p> -->
                        <input type="text" id="txtName" class="form-control myTxt" placeholder="أكتب اسمك هنا" style="text-align: right;" required>
                        <ul class="candidates-profile-icons list-inline mb-3"><br>
                        <button class="btn btn-danger form-control" onclick="setImage();">تحميل المعايدة</button>
                            
                        <a class="btn btn-success" id="download" download="myImage.jpg" href="" >تحميل الصورة</a>
                            <br>
                            <!-- <li class="list-inline-item text-white-50 pr-2 f-16">PHP Developer</li> -->
                            <li class="list-inline-item"><a href="#" class="text-warning"><i class="mdi mdi-star"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="text-warning"><i class="mdi mdi-star"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="text-warning"><i class="mdi mdi-star"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="text-warning"><i class="mdi mdi-star"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="text-warning"><i class="mdi mdi-star"></i></a></li>
                        </ul>

                        <ul class="candidates-profile-social-icons list-inline mb-0">
                            <!-- <li class="list-inline-item"><a href="#" class=""><i class="mdi mdi-facebook"></i></a></li> -->
                            <li class="list-inline-item"><a href="https://twitter.com/PrograminLovers" class=""><i class="mdi mdi-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="https://t.me/Programingloverss" class=""><i class="mdi mdi-telegram"></i></a></li>
                            <!-- <li class="list-inline-item"><a href="#" class=""><i class="mdi mdi-google-plus"></i></a></li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</section>

<canvas id="canvas"></canvas>
  <p><img id="preview" src="bg1.png" class="image"></p>
  <script src="canvas.js"></script>


  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
	
</script>
</body>
</html>