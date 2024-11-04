@extends('layouts.main')

@section('meta_title', 'Home | FINOVO Overseas - Study Abroad and Visa consultancy Services')

@section('meta_description', 'Study Abroad and Visa consultancy Services')

@section('content')
<div class="inner-hero study-hero" data-aos="fade-in" data-duration="0">
    <div class="container">
        <div class="inner-hero-wrap d-flex flex-column flex-md-row align-items-center">
            <div class="inner-hero-left text-center text-md-start">
                <h1 class="hero-title-txt hero-title-txt-2">
                    <span class="highlighter">USA:</span> The ultimate destination for top-tier education and limitless potential
                </h1>
                <div class="hdr-search-form-wrap">
                    <div class="hero-btns study-hero-btn">
                        <a id="openPopup" class="button text-white open-popup" style="cursor:pointer;">Free Expert Consultation</a>
                        <a class="button" href="/" target="_blank" style="cursor:pointer;">View & Download Brochure</a>  
                    </div>
                </div>
            </div>

            <div class="inner-hero-right text-center">
                <img src="https://www.edwiseinternational.com/img/study-abrd-usa.webp" alt="Study in UK" class="img-fluid">
            </div>
        </div>
    </div>
</div>
<section class="ftco-counter" id="section-counter">
    	<div class="container">
		<div class="row">
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="4000">0</strong>
              </div>
              <div class="text">
              	<span>Universities</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="60000">$0</strong>
              </div>
              <div class="text">
              	<span>Annual tuition fees</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="9000">0</strong>
              </div>
              <div class="text">
              	<span>International Students</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="3">0</strong>
              </div>
              <div class="text">
              	<span>Graduate Immigration Visa</span>
              </div>
            </div>
          </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb">
    	<div class="container">
    		<div class="row d-flex no-gutters">
    			<div class="col-md-5 d-flex mt-5">
    				<div class="contact-form mt-5">
                    @include('compoents.study')
    				</div>
    			</div>
    			<div class="col-md-7 pl-md-5 py-md-5">
    				<div class="heading-section pt-md-5">
	            <h2 class="mb-4">Why Study in the USA?</h2>
    				</div>
    				<div class="row">
	    				<div class="col-md-6 services-2 w-100 d-flex">
	    					<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-stethoscope"></span></div>
	    					<div class="text pl-3">
	    						<h4>GLOBAL EDGE</h4>
	    						<p>The United States has a plethora of institutions of higher education and research, much more than any other country. Despite the number of universities in USA, it is the qualitative standards of education that matters which is respected worldwide.</p>
	    				</div>
                        </div>
	    				<div class="col-md-6 services-2 w-100 d-flex">
	    					<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-customer-service"></span></div>
	    					<div class="text pl-3">
	    						<h4> CHOICE</h4>
	    						<p>More than 4000 accredited institutions offer undergraduate, postgraduate, and doctorate degrees. Overall, the universities in USA have a variety of academic programs that offer you leading edge careers</p>
	    					</div>
	    				</div>
	    				
	    				<div class="col-md-6 services-2 w-100 d-flex">
	    					<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-veterinarian"></span></div>
	    					<div class="text pl-3">
	    						<h4>TWENTY-FIVE OF THE WORLD'S TOP 100 UNIVERSITIES</h4>
	    						<p>The USA is home to twenty-five universities that rank amongst the top 100 universities in the world according to the QS World Ranking. The universities in the USA offer a diverse range of programs and cutting-edge research opportunities that attract students from around the globe.</p>
	    					</div>
	    				</div>
                        <div class="col-md-6 services-2 w-100 d-flex">
	    					<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-stethoscope"></span></div>
	    					<div class="text pl-3">
	    						<h4>FINANCIAL ASSISTANCE</h4>
	    						<p>The decision to study in USA is a wise investment for the future. With various options on tuition fees, accommodation choices, and financial support like scholarships and fee waivers, it is affordable and convenient.</p>
	    					</div>
	    				</div>
	    				<div class="col-md-6 services-2 w-100 d-flex">
	    					<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-customer-service"></span></div>
	    					<div class="text pl-3">
	    						<h4>FLEXIBILITY</h4>
	    						<p>The US education system excels for its flexibility in course selection and institution transfer. This unique feature allows students to switch courses, colleges or universities seamlessly, setting it apart from other countries</p>
	    					</div>
	    				</div>
                        <div class="col-md-6 services-2 w-100 d-flex">
	    					<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-emergency-call"></span></div>
	    					<div class="text pl-3">
	    						<h4>AFFORDABLE</h4>
	    						<p>Education in the USA becomes more feasible with financial aid, scholarships, and assistantships. Students can work up to 20 hours a week during their courses (on campus only), easing the financial burden.</p>
	    					</div>
	    				</div>
	    			</div>
	        </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section testimony-section" style="background-image: url('https://plus.unsplash.com/premium_photo-1675118548262-60f7e4e77483?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8dXNhJTIwZmxhZ3xlbnwwfHwwfHx8MA%3D%3D');">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4 text-white">Happy Clients &amp; Feedbacks</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="comm-section" data-aos="fade-in" data-duration="0">
    <div class="container">
        <h3 class="sec-title text-center"><span class="highlighter">Popular Courses </span> in the USA</h3>
        <br>
        <div class="comm-para sec-dtl">
            <p class="center">Studying in the USA provides international students with excellent career opportunities.Here are the top courses in USA for international students:</p>
        </div>

        <div class="courses-box-wrapper">
            <div class=" row f-row f-3 f-1024-2 f-768-1">
                <div class="f-col">
                    <a href="../blogs/reasons-to-study-international-business-management-in-the-uk.html" class="course-box">
                        <div class="course-img"><img src="https://www.edwiseinternational.com/img/univ-courses-imgs/hospitality-img.webp" alt="Study Business Administration Courses Abroad"></div>
                        <div class="course-dtl">
                            <h3 class="course-name">Business Management</h3>
                        </div>
                    </a>
                </div>
                <div class="f-col">
                    <a href="../blogs/Study-engineering-abroad-in-UK-with-edwise.html" class="course-box">
                        <div class="course-img"><img src="https://www.edwiseinternational.com/img/univ-courses-imgs/hospitality-img.webp" alt="Study Engineering Courses Abroad"></div>
                        <div class="course-dtl">
                            <h3 class="course-name">Engineering</h3>
                        </div>
                    </a>
                </div>
                <div class="f-col">
                    <a href="../blogs/reasons-to-study-cybersecurity-and-data-science-in-the-uk.html" class="course-box">
                        <div class="course-img"><img src="https://www.edwiseinternational.com/img/univ-courses-imgs/hospitality-img.webp" alt="Study IT & Computer Science Courses Abroad"></div>
                        <div class="course-dtl">
                            <h3 class="course-name">Computer Science</h3>
                        </div>
                    </a>
                </div>
                <div class="f-col">
                    <a href="../blogs/reasons-to-study-law-in-the-uk.html" class="course-box">
                        <div class="course-img"><img src="https://www.edwiseinternational.com/img/univ-courses-imgs/hospitality-img.webp" alt="Study Law Courses Abroad"></div>
                        <div class="course-dtl">
                            <h3 class="course-name">Law</h3>
                        </div>
                    </a>
                </div>
                <div class="f-col">
                    <a href="../blogs/All-About-Pursuing-MBA-in-Finance-in-the-UK.html" class="course-box">
                        <div class="course-img"><img src="https://www.edwiseinternational.com/img/univ-courses-imgs/hospitality-img.webp" alt="Study Finance Courses Abroad"></div>
                        <div class="course-dtl">
                            <h3 class="course-name">Finance</h3>
                        </div>
                    </a>
                </div>
                <div class="f-col">
                    <a href="../blogs/study-the-world-of-architecture-in-the-uk.html" class="course-box">
                        <div class="course-img"><img src="https://www.edwiseinternational.com/img/univ-courses-imgs/hospitality-img.webp" alt="Study Architecture Courses Abroad"></div>
                        <div class="course-dtl">
                            <h3 class="course-name">Architecture</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Scholarship Section -->
<div class="comm-section py-5" data-aos="fade-in" data-aos-duration="0">
    <div class="container">
        <div class="row align-items-center scholar-sec-wrap">
            <div class="col-md-5 sholar-left" data-aos="fade-right" data-aos-duration="200">
                <h3 class="sec-title"><span class="highlighter">Scholarships</span> in the USA</h3>
                <div class="comm-para">
                    <p>US scholarships for Indian students are awarded on the criteria of merit & family needs. Candidates with strong academics, good performance on standardized exams and extra-curricular achievements are eligible for scholarships to study in USA.
                        <br><br>
                        There are several different types of scholarships for Indian students to study in USA – Fellowships, Assistantships, Sports, Need Based , etc.
                    </p>
                </div>
            </div>
            <div class="col-md-6 text-center sholar-img" data-aos="fade-left" data-aos-duration="200">
                <img src="https://www.edwiseinternational.com/img/scholar-img.webp" alt="Scholarships to Study Abroad" class="img-fluid rounded w-100 h-100">
            </div>
        </div>
    </div>
</div>


<!-- Career Prospect Section -->
<div class="comm-section py-5" data-aos="fade-in" data-aos-duration="0">
    <div class="container">
        <h3 class="sec-title text-center"><span class="highlighter">Career Prospect</span> in the USA</h3>
        <br>
        <div class="comm-para sec-dtl text-center">
            <p>The USA has a wide range of job opportunities across various sectors.
            Here are the key sectors where students can build their careers:</p>
        </div>

        <div class="courses-box-wrapper">
           
            <!-- Additional Rows of Courses -->
            <div class="row row-cols-1 row-cols-md-3 row-cols-lg-3 g-4 mt-4 hide" id="view1">
                <!-- Business Analyst -->
                <div class="col">
                    <a class="course-box text-decoration-none">
                        <div class="course-img">
                            <img src="https://www.edwiseinternational.com/img/univ-courses-imgs/healthcare-img.webp" alt="Study Business Analytics Abroad" class="img-fluid rounded">
                        </div>
                        <div class="course-dtl text-center mt-3">
                            <h3 class="course-name">Business Analyst</h3>
                        </div>
                    </a>
                </div>

                <!-- HR Manager -->
                <div class="col">
                    <a class="course-box text-decoration-none">
                        <div class="course-img">
                            <img src="https://www.edwiseinternational.com/img/univ-courses-imgs/healthcare-img.webp" alt="Study HR Courses Abroad" class="img-fluid rounded">
                        </div>
                        <div class="course-dtl text-center mt-3">
                            <h3 class="course-name">HR Manager</h3>
                        </div>
                    </a>
                </div>

                <!-- Engineering -->
                <div class="col">
                    <a class="course-box text-decoration-none">
                        <div class="course-img">
                            <img src="https://www.edwiseinternational.com/img/univ-courses-imgs/healthcare-img.webp" alt="Study Engineering Courses Abroad" class="img-fluid rounded">
                        </div>
                        <div class="course-dtl text-center mt-3">
                            <h3 class="course-name">Engineering</h3>
                        </div>
                    </a>
                </div>
            </div>

            <!-- View More Button (Uncomment if needed) -->
            <!--
            <div class="center-btn text-center mt-4">
                <button class="btn btn-outline-primary" id="view_More1">View more</button>
            </div>
            -->
        </div>
    </div>
</div>
<!-- More About UK Section -->
<div class="comm-section py-5" data-aos="fade-in" data-aos-duration="0">
    <div class="container">
        <h3 class="sec-title text-center">More about <span class="highlighter">USA</span></h3>
        
        <div class="moreabout-sec-wrap row mt-4">
            <!-- Navigation Links -->
            <div class="col-md-3 moreabout-links d-flex flex-column mb-4 mb-md-0">
                <a href="#section1" class="section-name d-flex align-items-center mb-3 text-decoration-none">
                <i class="fas fa-file-alt fw-5 me-2 p-2 rounded-circle"><span class="text-danger"> Documents</spen></i> 
               
                   
                </a>
                <a href="#section2" class="section-name d-flex align-items-center mb-3 text-decoration-none">
                <i class="fas fa-passport fw-5 me-2 me-2 p-2 rounded-circle"> <span class="text-danger">Visa</span></i>
                   
                </a>
            </div>
            
            <!-- Content Sections -->
            <div class="col-md-9 moreabout-cont-wrap">
                
                <!-- Section 1: Documents -->
                <section id="section1" class="moreabout-sections rounded-3 card mb-5">
                    <h4 class="moreabout-dtl-title p-3">Documents required to study in the USA</h4>
                    <div class="comm-para">
                        <p class="p-3">When applying for a course in the USA as an international student, you typically need several documents to complete the application process. These documents may vary depending on the institution and the specific program, but some common ones include</p>
                    </div>
                    <div class="moreabout-dtl-points p-3">
                        <ul>
                            <li>Application Form</li>
                            <li>Application Fees.</li>
                            <li>Statement of Purpose / Essays</li>
                            <li>Resume</li>
                            <li>Recommendation Letters</li>
                            <li>Academic Transcripts.</li>
                            <li>Marksheets & Certificates.</li>
                            <li>Bank Certificate.</li>
                            <li>Declaration Certificate of Finance..</li>
                            <li>Test Score Report.</li>
                        </ul>
                    </div>
                    <a class="button line open-popup text-center text-white mb-3 ml-3">Free Expert Consultation</a>
                </section>

                <!-- Section 2: Visa -->
                <section id="section2" class="moreabout-sections card mb-5">
                    <h4 class="moreabout-dtl-title p-3">USA Study Visa Process</h4>
                    <div class="comm-para p-3">
                        <p>All the efforts to study abroad become futile if you do not present your case effectively and assertively during visa interviews. We provide comprehensive VISA guidance, which includes verifying the bank financial statement, latest update on VISA TECHNOLOGY & RESEARCH, mock interviews, etc. Mentioned below are the general steps for the procurement of a study visa in the USA:</p>
                    </div>
                    <div class="moreabout-dtl-points p-3">
                        <ul>
                            <li>Obtain I-20 from University / College.</li>
                            <li>Pay the SEVIS fee & Complete DS-160 form</li>
                            <li>Pay Visa Application Fees</li>
                            <li>Schedule interview date</li>
                            <li>Attend scheduled appointment with all the necessary documents </li>
                           
                        </ul>
                    </div>
                    <a class="button line mb-3 ml-3 text-center text-white open-popup">Free Expert Consultation</a>
                </section>
                
            </div>
        </div>
    </div>
</div>
<style>
    /* General Styles */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    line-height: 1.6;
    background-color: #f9f9f9; /* Background color for contrast */
}

/* Common Section Styling */
.comm-section {
    padding: 50px 20px; /* Padding for all sides */
    background-color: #f9f9f9;
}

/* Title Styling */
.sec-title {
    font-size: 2rem;
    font-weight: 700;
    color: #333;
    text-align: center;
    margin-bottom: 1rem;
}

.highlighter {
    color: #007bff;
    font-weight: bold;
}

/* Button Styling */
.button,
.button.line {
    display: inline-block;
    padding: 10px 20px;
    border-radius: 5px;
    font-weight: 500;
    text-decoration: none;
    transition: all 0.3s;
}

.button {
    border: none;
    color: #fff;
    background-color: #28a745;
}

.button.line {
    border: 1px solid #007bff;
    color: #007bff;
}

.button:hover,
.button.line:hover {
    background-color: #007bff;
    color: #fff;
}

/* More About UK Section */
.moreabout-links {
    padding: 10px;
    border-right: 3px solid #ddd;
}

.section-name {
    font-size: 1rem;
    font-weight: 500;
    color: #555;
    padding: 8px 0;
    transition: color 0.3s ease;
}

.section-name:hover {
    color: #007bff;
}

.moreabout-cont-wrap {
    padding-left: 15px;
}

.moreabout-dtl-title {
    font-size: 1.5rem;
    font-weight: 600;
    color: #333;
    margin-bottom: 1rem;
}

.moreabout-dtl-points ul {
    list-style-type: disc;
    padding-left: 20px;
}

.moreabout-dtl-points ul li {
    font-size: 1rem;
    line-height: 1.6;
    color: #555;
}

/* Course Section */
.courses-box-wrapper,
.scholar-sec-wrap {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: space-between;
}

.f-col {
    flex: 1 1 calc(33.333% - 20px);
    margin: 10px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    overflow: hidden;
    text-align: center;
}

.course-box {
    text-decoration: none;
    color: inherit;
    transition: transform 0.2s;
}

.course-box:hover {
    transform: scale(1.05);
}

.course-img img,
.sholar-img img {
    width: 100%;
    height: auto;
    border-radius: 10px;
}

.course-name,
.moreabout-dtl-title {
    font-size: 1.5rem;
    margin: 10px 0;
}

.comm-para {
    margin-bottom: 30px;
}

.comm-para p {
    color: #555;
    line-height: 1.6;
    font-size: 1rem;
}

/* Responsive Styles */
@media (max-width: 1024px) {
    .f-col {
        flex: 1 1 calc(50% - 20px);
    }
}

@media (max-width: 768px) {
    .f-col,
    .moreabout-links,
    .moreabout-cont-wrap {
        flex: 1 1 100%;
        text-align: center;
    }

    .inner-hero h1 {
        font-size: 2rem;
    }

    .inner-hero-right {
        margin-top: 20px;
    }
}

    </style>
@endsection
