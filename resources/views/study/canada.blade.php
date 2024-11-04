@extends('layouts.main')

@section('meta_title', 'Home | FINOVO Overseas - Study Abroad and Visa consultancy Services')

@section('meta_description', 'Study Abroad and Visa consultancy Services')

@section('content')
<div class="inner-hero study-hero" data-aos="fade-in" data-duration="0">
    <div class="container">
        <div class="inner-hero-wrap d-flex flex-column flex-md-row align-items-center">
            <div class="inner-hero-left text-center text-md-start">
                <h1 class="hero-title-txt hero-title-txt-2">
                    <span class="highlighter">Canada:</span> Study at renowned institutions in a safe, multicultural environment
                </h1>
                <div class="hdr-search-form-wrap">
                    <div class="hero-btns study-hero-btn">
                        <a id="openPopup" class="button text-white open-popup" style="cursor:pointer;">Free Expert Consultation</a>
                        <a class="button" href="/" target="_blank" style="cursor:pointer;">View & Download Brochure</a>  
                    </div>
                </div>
            </div>

            <div class="inner-hero-right text-center">
                <img src="https://www.edwiseinternational.com/img/study-abrd-canada.webp" alt="Study in UK" class="img-fluid">
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
                <strong class="number" data-number="200">0</strong>
              </div>
              <div class="text">
              	<span>Universities</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="28000">$0</strong>
              </div>
              <div class="text">
              	<span>Annual tuition fees</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="10000000">0</strong>
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
	            <h2 class="mb-4">Why Study in Canada? </h2>
    				</div>
    				<div class="row">
	    				<div class="col-md-6 services-2 w-100 d-flex">
	    					<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-stethoscope"></span></div>
	    					<div class="text pl-3">
	    						<h4>Four of the World's Top 100 Universities</h4>
	    						<p>Canada is home to four universities that rank amongst the top 100 universities in the world according to the QS World Ranking. Canadian universities are known for their high-quality education and inclusive environments, fostering both academic excellence and research collaboration.</p>
	    				</div>
                        </div>
	    				<div class="col-md-6 services-2 w-100 d-flex">
	    					<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-customer-service"></span></div>
	    					<div class="text pl-3">
	    						<h4>Globally Recognized Degrees</h4>
	    						<p>The universities in Canada offer world-class education, providing exceptional academic programs and research opportunities, that open the doors to international career opportunities and prestigious academic recognition.</p>
	    					</div>
	    				</div>
	    				
	    				<div class="col-md-6 services-2 w-100 d-flex">
	    					<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-veterinarian"></span></div>
	    					<div class="text pl-3">
	    						<h4>Post Study Work Up To 3 years</h4>
	    						<p>Canada offers post-study work permits of up to three years, allowing international students to gain valuable work experience after completing their studies..</p>
	    					</div>
	    				</div>
                        <div class="col-md-6 services-2 w-100 d-flex">
	    					<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-stethoscope"></span></div>
	    					<div class="text pl-3">
	    						<h4>Working hours</h4>
	    						<p>When you study in Canada, you get the opportunity to work for 24 hours per week during your ongoing course, and 40 hours per week during vacations, providing valuable work experience and potential income to support your studies</p>
	    					</div>
	    				</div>
	    				<div class="col-md-6 services-2 w-100 d-flex">
	    					<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-customer-service"></span></div>
	    					<div class="text pl-3">
	    						<h4>Permanent Residency & Canadian Immigration</h4>
	    						<p>A student opting to study in Canada is eligible to apply for post study work and then subsequently for permanent Residency. There are several different immigration programs, including the Express Entry system, making it an attractive study destination</p>
	    					</div>
	    				</div>
                        <div class="col-md-6 services-2 w-100 d-flex">
	    					<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-emergency-call"></span></div>
	    					<div class="text pl-3">
	    						<h4>Safe Place to Study</h4>
	    						<p>Being a land of immigrants, Canada is known for being a safe and inclusive country, making it an ideal place for international students to study and live.</p>
	    					</div>
	    				</div>
	    			</div>
	        </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section testimony-section" style="background-image: url('https://plus.unsplash.com/premium_photo-1694475393287-88027e0fbde4?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8Y2FuYWRhfGVufDB8fDB8fHww');">
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
        <h3 class="sec-title text-center"><span class="highlighter">Popular Courses </span> in the Canada</h3>
        <br>
        <div class="comm-para sec-dtl">
            <p class="center">Canada is known for offering a wide range of popular courses across various fields of study.
            Here are the top courses in Canada for international students:</p>
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

<div class="comm-section lBlue-bg-2" data-aos="fade-in" data-duration="0">
    <div class="container">
        <div class="costofstudy-dtl-wrap row">
            <div class="costofstudy-dtl-left col-lg-6">
                <h3 class="sec-title"><span class="highlighter">Cost of studying </span>in Canada</h3>
                <div class="comm-para">
                    <p>The cost of studying in Canada for international students depends on several factors, including the institution, program of study, location, and available funding opportunities. Additionally, living expenses such as rent, utilities, and recreational activities play a significant role in the overall cost..</p>
                </div>
            </div>
            <div class="costofstudy-dtl-right col-lg-6">
                <div class="cost-wrap">
                    <h4 class="fee-title">Tuition Fees (Average per annum)</h4>
                    <div class="fee-desc-wrap card ">
                        <h5 class="mb-0 px-4">Foundation program : <spen class="text-danger">£10,000 - £20,000</spen></h5>
                      
                    </div>
                    <div class="fee-desc-wrap card">
                        <h5 class="mb-0 px-4">Bachelor's :<spen class="text-danger">£15,000 - £35,000</spen></h5>
                       
                    </div>
                    <div class="fee-desc-wrap card">
                    <h5 class="mb-0 px-4">Master's :<spen class="text-danger">£15,000 - £40,000</spen></h5>
                    </div>
                </div>
                <div class="cost-wrap">
                    <h4 class="fee-title">Living Expenses (Average per month)</h4>
                    <div class="fee-desc-wrap card">
                    <h5 class="mb-0 px-4">Outer London : <spen class="text-danger">£1,136</spen></h5>
                    </div>
                    <div class="fee-desc-wrap card">
                    <h5 class="mb-0 px-4">Inner London : <spen class="text-danger">£1,483</spen></h5>
                    </div>
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
                <h3 class="sec-title"><span class="highlighter">Scholarships</span> in Canada</h3>
                <div class="comm-para">
                    <p>Scholarships to study in Canada are available to international students who excel in their studies. Canadian scholarships for international students may not cover all expenses, however they may provide significant support towards education and living costs.<br><br>
                    Securing scholarships in Canada is very competitive, requiring separate applications to each university. While community colleges, career colleges typically offer bare minimum scholarships, exploring available opportunities is key to finding financial assistance.
                        
                    </p>
                </div>
            </div>
            <div class="col-md-6 text-center sholar-img" data-aos="fade-left" data-aos-duration="200">
                <img src="https://www.edwiseinternational.com/img/scholar-img.webp" alt="Scholarships to Study Abroad" class="img-fluid rounded w-100 h-100">
            </div>
        </div>
    </div>
</div>

<div class="comm-section" data-aos="fade-in" data-duration="0">
    <div class="container">
        <div class="visa-ass-dtl row">
            <div class="visa-asst-img col-lg-6 col-md-6 col-sm-12" data-aos="fade-right" data-duration="200">
                <img src="https://www.edwiseinternational.com/img/co-operative-work-term.webp" alt="Best Abroad Education Consultants in India" class="img-fluid">
            </div>
            <div class="visa-asst-cont col-lg-6 col-md-6 col-sm-12" data-aos="fade-left" data-duration="200">
                <h3 class="sec-title"><span class="highlighter">Co-operative </span>Work term</h3>
                <p>Co-op is a work term that is a part of the course. It gives students a chance to get real-world experience in their field. They can work and study simultaneously. Co-op jobs are full-time and last 12 to 17 weeks. Co-op programs mix different subjects with relevant work, helping students start their careers. This helps international students connect with the Canadian job market and build a network with Canadian companies.</p>
            </div>
        </div>
    </div>
</div>

<!-- Career Prospect Section -->
<div class="comm-section py-5" data-aos="fade-in" data-aos-duration="0">
    <div class="container">
        <h3 class="sec-title text-center"><span class="highlighter">Career Prospect</span> in Canada</h3>
        <br>
        <div class="comm-para sec-dtl text-center">
            <p>he employment landscape in Canada is diverse, offering opportunities across various sectors. Here are some key sectors and industries that offer employment opportunities:</p>
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
        <h3 class="sec-title text-center">More about <span class="highlighter">Canada</span></h3>
        
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
                    <h4 class="moreabout-dtl-title px-3"><strong>Documents required to study in Canada</strong></h4>
                    <div class="comm-para">
                        <p class="px-3">The most common list of documents required when applying to study in Canada includes:</p>
                    </div>
                    <div class="moreabout-dtl-points px-3">
                        <ul>
                            <li>English proficiency scores (IELTS or PTE)</li>
                            <li>Copies of marksheets for Grade 10th, 12th, and all semester marksheets of the Bachelor's Degree.</li>
                            <li>Backlog certificate</li>
                            <li>Work experience document & salary statements of last 4-6 months (if applicable)</li>
                            <li>Updated Resume</li>
                           
                        </ul>
                    </div>
                    <a class="button line open-popup text-center text-white mb-3 ml-3">Free Expert Consultation</a>
                </section>

                <!-- Section 2: Visa -->
                <section id="section2" class="moreabout-sections card mb-5">
                    <h4 class="moreabout-dtl-title px-3">Canada Study Visa Process</h4>
                    <div class="comm-para px-3">
                        <p>To study in Canada you need to apply for visa ideally 3 months prior to the intake. Below are the documents required </p>
                    </div>
                    <div class="moreabout-dtl-points px-3">
                        <ul>
                            <li>A valid Passport.</li>
                            <li>Letter of acceptance (offer letter from the university)</li>
                            <li>English Proficiency Test</li>
                            <li>Tuition Fee receipt</li>
                            <li>GIC (Guaranteed Investment Certificate) account-fixed deposit</li>
                            <li>Medical Certificate as per the requirement.</li>
                            <li>Statement of Purpose (SOP) and Resume</li>
                            <li>Visa Application form and Family Information Form</li>
                            <li>Provincial Attestation Letter (PAL) if required as per the program</li>
                            
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
/* Main section styling */
.comm-section {
    background-color: #f9f9f9; /* Light grey background */
    padding: 50px 0; /* Padding top and bottom */
}

/* Title styling */
.sec-title {
    font-size: 2rem; /* Title font size */
    font-weight: 700; /* Bold font weight */
    color: #333; /* Dark grey color */
    margin-bottom: 1rem; /* Bottom margin */
}

/* Highlight styling */
.highlighter {
    color: #007bff; /* Bootstrap primary color */
}

/* Paragraph styling */
.comm-para p {
    color: #555; /* Medium grey color */
    line-height: 1.6; /* Line height for readability */
    font-size: 1rem; /* Font size */
}

/* Cost section styling */
.cost-wrap {
    margin-top: 20px; /* Space above each cost section */
}

/* Fee title styling */
.fee-title {
    font-size: 1.5rem; /* Font size for titles */
    color: #007bff; /* Bootstrap primary color */
    margin-bottom: 10px; /* Bottom margin */
}

/* Description wrapping */
.fee-desc-wrap {
    display: flex; /* Flex display for alignment */
    justify-content: space-between; /* Space between title and value */
    padding: 10px 0; /* Padding on top and bottom */
    border-bottom: 1px solid #ddd; /* Light border for separation */
}

/* Responsive Design */
@media (max-width: 768px) {
    .costofstudy-dtl-wrap {
        flex-direction: column; /* Stack columns vertically on small screens */
    }
}

/* Main section styling */
.comm-section {
    background-color: #f9f9f9; /* Light grey background */
    padding: 50px 0; /* Padding top and bottom */
}

/* Title styling */
.sec-title {
    font-size: 2rem; /* Title font size */
    font-weight: 700; /* Bold font weight */
    color: #333; /* Dark grey color */
    margin-bottom: 1rem; /* Bottom margin */
}

/* Highlight styling */
.highlighter {
    color: #007bff; /* Highlight color */
}

/* Paragraph styling */
.visa-asst-cont p {
    color: #555; /* Medium grey color */
    line-height: 1.6; /* Line height for readability */
    font-size: 1rem; /* Font size */
}

/* Image styling */
.visa-asst-img img {
    max-width: 100%; /* Responsive image */
    height: auto; /* Maintain aspect ratio */
}

/* Responsive Design */
@media (max-width: 768px) {
    .visa-ass-dtl {
        flex-direction: column; /* Stack image and text vertically on small screens */
    }
}

    </style>
@endsection
