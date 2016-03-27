@extends('member.master')
@section('content')
<!-- Top Navigation -->
<div class="banner">
    <div class="container">
    <script src="js/responsiveslides.min.js"></script>
 <script>
    $(function () {
      $("#slider").responsiveSlides({
        auto: true,
        nav: true,
        speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
<div class="slider">
           <div class="callbacks_container">
              <ul class="rslides" id="slider">
                 <li>       
                    <h3>Dapat Berkomunikasi melalui SKYPE</h3>      
                     <p>Anak-anak dapat belajar berinteraksi melalui media aplikasi skype, untuk dapat belajar berkomunikasi dengan bahasa Inggris.</p>                 
                    <div class="readmore">
                    <a href="about.html">Baca Selengkapnya...<i class="glyphicon glyphicon-menu-right"> </i></a>
                    </div>
                 </li>
                 <li>   
                    <h3>Metode pembelajaran yang efektif</h3>            
                     <p>Proses pembelajaran melalu Writing, Listening, Speaking membuat para pelajar dapat memahami penuh materi yang diberikan kepada mereka</p>                
                 <div class="readmore">
                 <a href="about.html">Baca Selengkapnya...<i class="glyphicon glyphicon-menu-right"> </i></a>
                 </div>
                 </li>
                 <li>   
                    <h3>Mengabdi Untuk Negeri</h3>            
                     <p>Web pembelajaran ini ditujukan agar seluruh anak Indonesia dapat belajar dengan mudah berbahasa Inggris dan tidak dipungut biaya sedikitpun.</p>                 
                <div class="readmore">
                 <a href="about.html">Baca Selengkapnya...<i class="glyphicon glyphicon-menu-right"> </i></a>
                 </div>
                 </li>
              </ul>
          </div>
      </div>
</div>          
    </div>
<!--header-->
<!--weelcome-->
<div class="welcome">
    <div class="container">
        <h2>Selamat Datang di Elementary English Education</h2>
        <p>Pendidikan bahasa Inggris cukuplah penting bagi kita sebagai warga Indonesia dalam berbangsa dan bernegara</p>
    </div>
</div>
<!--/welcome-->
<div class="welcome-grids">
    <div class="container">
        <div class="welcome-gridsinfo">
        <div class="col-md-3 welcome-grid">
            <i class="glyphicon glyphicon-pencil"> </i>
            <h3>Writing</h3>
            <p>Belajar berbahasa inggris dengan menulis sebuah kata yang fasih</p>
        </div>
        <div class="col-md-3 welcome-grid">
            <i class="glyphicon glyphicon-font"> </i>
            <h3>Reading</h3>
            <p>Dapat memahami arti dari setiap kata, kalimat dan paragraf.</p>
        </div>
        <div class="col-md-3 welcome-grid">
            <i class="glyphicon glyphicon-blackboard"> </i>
            <h3>Listening</h3>
            <p>Bisa memahami kalimat yang dilontarkan dalam bahasa inggris</p>
        </div>
        <div class="col-md-3 welcome-grid">
            <i class="glyphicon glyphicon-education"> </i>
            <h3>Speaking</h3>
            <p>Bisa berbicara dengan fasih berbahasa Inggrismelalui media Skype.</p>
        </div>
        <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!--effect-grid-->
<div class="effect-grid">
    <div class="container">
        <ul class="grid cs-style-5">
                <li>
                    <figure>
                        <img src="images/a1.jpg" alt="img03">
                        <figcaption>
                            <h3>Technology</h3>
                            <span>Jacob Cummings</span>
                            <a href="about.html">Read More</a>
                        </figcaption>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img src="images/a2.jpg" alt="img04">
                        <figcaption>
                            <h3>Preparing</h3>
                            <span>Jacob Cummings</span>
                            <a href="about.html">Read More</a>
                        </figcaption>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img src="images/a3.jpg" alt="img01">
                        <figcaption>
                            <h3>Pencils</h3>
                            <span>Jacob Cummings</span>
                            <a href="about.html">Read More</a>
                        </figcaption>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img src="images/a4.jpg" alt="img02">
                        <figcaption>
                            <h3>Home Work</h3>
                            <span>Jacob Cummings</span>
                            <a href="about.html">Read More</a>
                        </figcaption>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img src="images/a5.jpg" alt="img06">
                        <figcaption>
                            <h3>Waiting</h3>
                            <span>Jacob Cummings</span>
                            <a href="about.html">Read More</a>
                        </figcaption>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img src="images/a6.jpg" alt="img05">
                        <figcaption>
                            <h3>Mistake</h3>
                            <span>Jacob Cummings</span>
                            <a href="about.html">Read More</a>
                        </figcaption>
                    </figure>
                </li>
            </ul>
    </div>
</div>
<!--\effect-grid-->
<!--testmonials-->
<div class="testimonials">
    <div class="container">
            <div class="testimonial-nfo">
                <h3>Testimonials</h3>
                <h5>Cras porttitor imperdiet volutpat nulla malesuada lectus eros <span>ut convallis felis consectetur ut </span></h5>
            </div>
            <div class="testimonial-grids">
                <div class="testimonial-grid">
                    <p><span>"</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fermentum iaculis diam quis sodales. Vestibulum eu dui tellus. In viverra porttitor auctor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas<span> "</span></p>
                </div>
            </div>
    </div>
</div>
<!--\testmonials-->
<!--specfication-->
<div class="news">
        <div class="container">
            <div class="news-text">
                <h3>Latest News</h3>
                <p>Cras porttitor imperdiet volutpat nulla malesuada lectus eros<br /><span>ut convallis felis consectetur ut </span></p>
            </div>
            <div class="news-grids">
                <div class="col-md-3 news-grid">
                    <a href="#"><h4>Integer vitae ligula sed lectus</h4></a>
                    <span>8.00 - 10.00 | JUN 09,2015</span>
                    <a href="#" class="mask"><img src="images/img1.jpg" alt="image" class="img-responsive zoom-img"></a>
                    <div class="news-info">
                        <p>Pellentesque ut urna eu mauris scele risque auctor volutpat et massa pers piciis iste natus scele risque auctor volutpat et massa.</p>
                    </div>
                </div>
                <div class="col-md-3 news-grid">
                    <a href="#"><h4>Integer vitae ligula sed lectus</h4></a>
                    <span>10.00 - 12.00 | sep 24,2015</span>
                    <a href="#" class="mask"><img src="images/img2.jpg" alt="image" class="img-responsive zoom-img"></a>
                    <div class="news-info">
                        <p>Pellentesque ut urna eu mauris scele risque auctor volutpat et massa pers piciis iste natus scele risque auctor volutpat et massa.</p>
                    </div>
                </div>
                <div class="col-md-3 news-grid">
                    <a href="#"><h4>Integer vitae ligula sed lectus</h4></a>
                    <span>9.00 - 10.00 | FEB 15,2015</span>
                    <a href="#" class="mask"><img src="images/img3.jpg" alt="image" class="img-responsive zoom-img"></a>
                    <div class="news-info">
                        <p>Pellentesque ut urna eu mauris scele risque auctor volutpat et massa pers piciis iste natus scele risque auctor volutpat et massa.</p>
                    </div>
                </div>
                <div class="col-md-3 news-grid">
                    <a href="#"><h4>Integer vitae ligula sed lectus</h4></a>
                    <span>11.00 - 10.00 | JUN 10,2015</span>
                    <a href="#" class="mask"><img src="images/img4.jpg" alt="image" class="img-responsive zoom-img"></a>
                    <div class="news-info">
                        <p>Pellentesque ut urna eu mauris scele risque auctor volutpat et massa pers piciis iste natus scele risque auctor volutpat et massa.</p>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
<!--/specfication-->
@stop