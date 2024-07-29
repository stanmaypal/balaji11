
<?php
include  "include/header.php";
include "admin/include/config.php";

function printNotice($conn)
{
    $allNotice="select * from Notices where stutus='1'";
    $notices=[];
    $result=mysqli_query($conn,$allNotice);
    while($ntc=mysqli_fetch_assoc($result))
    {
        $notices[]=$ntc;
    }
    return $notices;
}
$notices=printNotice($conn);
//print_r($notice);

?>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">
            
          </button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" style="width: 100%; height: 500px;">
            <img src="Slider Mam Image.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Our Balaji All  Mam</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item"style="width: 100%; height: 500px;">
            <img src="slider image.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item"style="width: 100%; height: 500px;">
            <img src="slider student.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Balji Ji Acadmemy Student</h5>
              <p>Sport Day Image December 2023 .</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

    

    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-lg-8 col-sm-12 col-md-8">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            
                            <a href="sem.html" style="text-decoration: none;">
                                <p class= "card text-center h3 text-light " style="background-color: rgb(198, 81, 108); text-decoration: none; "> Seminar Registration</p>
                                
                            </a>
                        </div>
                        <div class="col-6">
                            <a href="enquery.html" style="text-decoration: none;">
                                <p class= "card text-center h3 text-light" style="background-color: rgb(198, 81, 108);">Admission Enquery</p>
                               
                            </a>
                  
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-4">
                            <div class="card text-center">
                                <img src="medical-checkup_2471676.png" class="d-block w-100" width="50%" alt="">
                                <div class="card-title h5">
                                    PARAMEDICAL COURSE
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card text-center">
                                <img src="city-hall.png" class="d-block w-100" width="50%" alt="">
                                <div class="card-title h5">
                                    PROGRAMME INFORMATION
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card text-center">
                                <img src="program.png" class="d-block w-100" width="50%" alt="">
                                <div class="card-title h5">
                                    PROGRAMMING LANGUAGE
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <p class="data m-3">
                    At Balaji Academy, we have built a niche for exploring new ideas and providing a platform for students to showcase their hidden talents. Our innovative approach emphasizes hands-on experience, fostering creativity, and encouraging critical thinking. We are committed to nurturing the potential of our students by offering a dynamic curriculum that integrates theoretical knowledge with practical applications. Through collaborations with industry leaders and continuous curriculum updates, we ensure our students are well-equipped to meet the evolving demands of the workforce.
                    Our dedicated faculty members are not only educators but also mentors who guide students towards achieving their professional and personal goals. The state-of-the-art infrastructure and resources at Balaji Academy support an environment conducive to learning and development. We believe in a holistic approach to education, where academic excellence goes hand in hand with the development of essential life skills.
                    
                    </p>

            </div>

            <div class="col-lg-4 col-sm-12 col-md-4">
            <div class="card">
                <p class="card text-light text-center h3" style="background-color: #323747;
                ">Notice</p>
                <marquee behavior="" direction="up" scrollamount="8" onmouseover="this.stop()" onmouseout="this.start()">
                    <ul type="none">

                    <?php foreach ($notices as $notice){?>
                        <li>
                           <b> <?php echo $notice['title']?>
                         </b><br>
                         <b><?php echo $notice['create_date']?> </b>
                         <?php echo $notice['notice_masg']?> 
                        </li>
                    </ul>
                        
                        <?php
                        }?>
                       
                </marquee>
            </div>
            </div>
        </div>
    </div>
    <section class="banner-bottom py-5" id="services">
        <div class="container py-sm-4">
            <div class="heading-grid text-center">
                <h3 class="tittle text-center heading mb-5">Features</h3>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-lg-0 mb-5">
                    <div class="row inner-info">
                        <div class="col-2">
                            <span class="fa fa-crosshairs"></span>
                        </div>
                        <div class="col-10">
                            <h4 class="mt-md-0 my-2">A clear and shared focus</h4>
                            <p class="">The focus must always be in learning.

                                The fundamental tool for that is collaboration. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="row inner-info">
                        <div class="col-2">
                            <span class="fa fa-users"></span>
                        </div>
                        <div class="col-10">
                            <h4 class="mt-md-0 my-2">Highly Qualified Teachers</h4>
                            <p class="">Over 30 year of experienced teachers to provide quality education.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-lg-0 mb-5">
                    <div class="row inner-info">
                        <div class="col-2">
                            <span class="fa fa-cog"></span>
                        </div>
                        <div class="col-10">
                            <h4 class="mt-md-0 my-2">A variety of assessment tools</h4>
                            <p class="">Project-based learning provides opportunities for students to drive their own learning.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="row inner-info">
                        <div class="col-2">
                            <span class="fa fa-envira"></span>
                        </div>
                        <div class="col-10">
                            <h4 class="mt-md-0 my-2">Safe and Secure Environment</h4>
                            <p class="">DBS gives you the freedom to carry out your day-to-day activities without fear of political motives or stubborn activism.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-lg-0 mb-5">
                    <div class="row inner-info">
                        <div class="col-2">
                            <span class="fa fa-futbol-o"></span>
                        </div>
                        <div class="col-10">
                            <h4 class="mt-md-0 my-2">Sports & Extracurricular Activities</h4>
                            <p class="">Since sports help to build character and teach the importance of discipline in life, the school offers extensive sports programs.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="row inner-info">
                        <div class="col-2">
                            <span class="fa fa-laptop"></span>
                        </div>
                        <div class="col-10">
                            <h4 class="mt-md-0 my-2">Well Furnished Computer Lab</h4>
                            <p class="">DBS has set up advanced and highly technological laboratories for practical classes on Science and Computer.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="row">
        <div class="col-md-3 col-sm-12 col-12 text-center course_icon mt-2"data-aos="fade-down">
        <div class="card p-2 wow animate__fadeInDownBig" data-wow-duration="2s" data-wow-offset="10" style="height: 340px; visibility: visible; animation-duration: 2s; animation-name: fadeInDownBig;">
            <center><img ; src="https://png.pngtree.com/png-clipart/20220515/original/pngtree-admission-open-tag-abstract-shape-png-png-image_7717570.png" height="75px"width="100px"></center>
            <span style="font-size: 18px;font-weight: bold;color: #252438;">Admission Procedure</span>
            <br>
            
            <p style="text-align: justify-all;font-size: 15px;">ADMISSION PROCEDURE Applications for admission to Paramedical Science Programmes are invited through the Gazetted admission notification in different leading national news papers and reputed publications of the different states of India.</p>

        </div>
    </div>
        <div class="col-md-3 col-sm-12 col-12 text-center course_icon mt-2"data-aos="fade-right"data-aos="fade-up-right">
        <div class="card p-2 wow animate__fadeInDownBig" data-wow-duration="2s" data-wow-offset="10" style="height: 340px; visibility: visible; animation-duration: 2s; animation-name: fadeInDownBig;">
            <center><img ; src="https://cdn-icons-png.flaticon.com/512/10748/10748458.png" height="75px"width="100px"></center>
            <span style="font-size: 18px;font-weight: bold;color: #252438;">Examination & Academic</span>
            <br>
            
            <p style="text-align: justify-all;font-size: 15px;">Examination & Academic Programmes Flexible Curriculum (Syllabus & Study Material) Programme Structure Route 1. Communication Skills The syllabus is divided into lecture, tutorial & practical books. The personal approach to teaching.
        </div>
    </div>
        <div class="col-md-3 col-sm-12 col-12 text-center course_icon mt-2"data-aos="fade-up-right">
        <div class="card p-2 wow animate__fadeInDownBig" data-wow-duration="2s" data-wow-offset="10" style="height: 340px; visibility: visible; animation-duration: 2s; animation-name: fadeInDownBig;">
            <center><img ; src="lecture.png" height="75px"width="100px"></center>
            <span style="font-size: 18px;font-weight: bold;color: #252438;">Infrastructure Lecture</span>
            <br>
            
            <p style="text-align: justify-all;font-size: 15px;">INFRASTRUCTURE Lecture Hall The Lecture Halls of the Institute are spacious, well furnished and fully equipped with P.A. System, Overhead Projector and all necessary facilities for effective earning Practical.
        </div>
    </div>
        <div class="col-md-3 col-sm-12 col-12 text-center course_icon mt-2"data-aos="fade-down-right">
        <div class="card p-2 wow animate__fadeInDownBig" data-wow-duration="2s" data-wow-offset="10" style="height: 340px; visibility: visible; animation-duration: 2s; animation-name: fadeInDownBig;">
            <center><img ; src="vision.png" height="75px"width="100px"></center>
            <span style="font-size: 18px;font-weight: bold;color: #252438;">Vision & Mission</span>
            <br>
            
            <p style="text-align: justify-all;font-size: 15px;">VISION & MISSION • To provide Career-oriented quality education & subsequent training various streams of professional disciplines in a stimulating environment of independent thinking and innovation. • To create multi-skilled professionals with careers in technical professions.
        </div>
    </div>


    

    <!-- //features end -->
<?php
include "include/footer.php";
?>
    