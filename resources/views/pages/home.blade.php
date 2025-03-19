@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <section class="landing">
        <div class="container">
            <div class="hero">
                <h1>Welcome to <span class="highlight">Sci-Bono</span> Youth Development Program</h1>
                <h2>Building the next generation of tech innovators</h2>
                <p>Join our 8-12 month program offering internationally recognized qualifications in programming and design for unemployed youth aged 18-25.</p>
                <div class="cta-buttons">
                    <a href="#courses" class="btn" id="startCourse">Explore Courses</a>
                    <a href="#about" class="btn" id="viewContents">Learn More</a>
                </div>
            </div>
        </div>
        <div class="hero-graphics">
            <img src="{{ asset('img/code-icon.svg') }}" alt="Code Icon" class="graphic-element" id="data">
            <img src="{{ asset('img/web-icon.svg') }}" alt="Web Development" class="graphic-element" id="brain">
            <img src="{{ asset('img/tech-icon.svg') }}" alt="Technology" class="graphic-element" id="robot">
        </div>
    </section>

    <section id="about" class="toc">
        <div class="container">
            <h2>About ICT Academy</h2>
            <div class="about-content">
                <div class="about-text">
                    <p>Sci-Bono Youth Development Program is an 8-12-month full-time program that provides 180 unemployed youth aged 18-25 years an opportunity to gain internationally recognised qualifications.</p>
                    <p>The ICT Academy offers training in various technological fields, responding to the evolving demands of digital transformation and technological disruption.</p>
                    <p>The program is supplemented with essential life skills, entrepreneurship, and job readiness skills to ensure holistic development for all participants.</p>
                    <div class="about-stats">
                        <div class="stat-item">
                            <i class="fas fa-users"></i>
                            <div>
                                <h4>180+</h4>
                                <p>Youth Enrolled Annually</p>
                            </div>
                        </div>
                        <div class="stat-item">
                            <i class="fas fa-clock"></i>
                            <div>
                                <h4>8-12 Months</h4>
                                <p>Intensive Training</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about-image">
                    <img src="img/students.svg" alt="Students learning at Sci-Bono ICT Academy">
                </div>
            </div>
        </div>
    </section>

    <!-- Other sections from index.html -->
    <section id="courses" class="toc">
        <div class="container">
            <h2>What I teach</h2>
            <p class="section-subtitle">Comprehensive training programs in programming and design</p>
            <div class="toc-container">
                <!-- Active UI/UX Design Systems Course -->
                <div class="toc-unit active-course">
                    <div class="course-badge">Now Available</div>
                    <h3>UI/UX Design Systems</h3>
                    <p>Master user experience design principles, design thinking, wireframing, prototyping, and building component libraries for digital products.</p>
                    <ul class="course-features">
                        <li><i class="far fa-clock"></i> 2 weeks</li>
                        <li><i class="fas fa-signal"></i> Beginner Friendly</li>
                        <li><i class="fas fa-pencil-ruler"></i> Hands-on projects</li>
                    </ul>
                    <a href="{{ route('courses.uiux-coursepage') }}" class="toc-link">Start Learning</a>
                </div>
                
                <!-- Disabled Courses -->
                <div class="toc-unit disabled-course">
                    <!-- <div class="course-badge coming-soon">Coming Soon</div> -->
                    <h3>Web Development</h3>
                    <p>Learn modern web development with HTML5, CSS3, JavaScript, and responsive design principles. Build interactive websites and web applications.</p>
                    <ul class="course-features">
                        <li><i class="far fa-clock"></i> 12 weeks</li>
                        <li><i class="fas fa-signal"></i> Beginner to Intermediate</li>
                        <li><i class="fas fa-users"></i> Hands-on projects</li>
                    </ul>
                    <span class="toc-link disabled">Coming Soon</span>
                </div>

                <div class="toc-unit disabled-course">
                    <!-- <div class="course-badge coming-soon">Coming Soon</div> -->
                    <h3>Programming</h3>
                    <p>Master programming fundamentals with C, C++, and Python. Learn algorithms, data structures, and problem-solving techniques.</p>
                    <ul class="course-features">
                        <li><i class="far fa-clock"></i> 16 weeks</li>
                        <li><i class="fas fa-signal"></i> Beginner to Advanced</li>
                        <li><i class="fas fa-laptop-code"></i> Practical coding exercises</li>
                    </ul>
                    <span class="toc-link disabled">Coming Soon</span>
                </div>

                <div class="toc-unit disabled-course">
                    <!-- <div class="course-badge coming-soon">Coming Soon</div> -->
                    <h3>Internet of Things</h3>
                    <p>Explore IoT technologies, hardware platforms, sensors, and networking. Build smart systems and connected applications.</p>
                    <ul class="course-features">
                        <li><i class="far fa-clock"></i> 10 weeks</li>
                        <li><i class="fas fa-signal"></i> Intermediate</li>
                        <li><i class="fas fa-microchip"></i> Hardware + software</li>
                    </ul>
                    <span class="toc-link disabled">Coming Soon</span>
                </div>

                <div class="toc-unit disabled-course">
                    <!-- <div class="course-badge coming-soon">Coming Soon</div> -->
                    <h3>Linux Essentials</h3>
                    <p>Learn Linux fundamentals, command line, system administration, and server management. Essential skills for developers and IT professionals.</p>
                    <ul class="course-features">
                        <li><i class="far fa-clock"></i> 8 weeks</li>
                        <li><i class="fas fa-signal"></i> Beginner to Intermediate</li>
                        <li><i class="fas fa-terminal"></i> Command line mastery</li>
                    </ul>
                    <span class="toc-link disabled">Coming Soon</span>
                </div>
            </div>
        </div>
    </section>

    <section id="benefits" class="benefits-section">
        <div class="container">
            <h2>Program Benefits</h2>
            <p class="section-subtitle">What you'll gain from our Youth Development Program</p>
            <div class="benefits-container">
                <div class="key-concept">
                    <div class="benefit-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h3>Internationally Recognized Qualifications</h3>
                    <p>Earn certifications that are recognized globally and valued by employers.</p>
                </div>

                <div class="key-concept">
                    <div class="benefit-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3>Practical Skills Development</h3>
                    <p>Gain hands-on experience with real-world projects and industry-standard tools.</p>
                </div>

                <div class="key-concept">
                    <div class="benefit-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Entrepreneurship Training</h3>
                    <p>Learn essential business skills to start your own tech venture or freelance career.</p>
                </div>

                <div class="key-concept">
                    <div class="benefit-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <h3>Job Readiness Preparation</h3>
                    <p>Develop professional skills, build your portfolio, and prepare for job interviews.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container">
            <h2>Ready to Start Your Tech Career?</h2>
            <p>Join our Youth Development Program and gain the skills you need to succeed in the digital economy.</p>
            <div class="cta-buttons">
                <a href="register.html" class="btn" id="startCourse">Register Now</a>
                <a href="#courses" class="btn" id="viewContents">View Courses</a>
            </div>
        </div>
    </section>

@endsection