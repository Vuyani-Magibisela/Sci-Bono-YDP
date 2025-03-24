@extends('layouts.app')

@section('title', 'UI/UX Design Systems')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/CoursePageStyles.css') }}">
@endsection

@section('content')

    <main>
        <section class="course-header">
            <div class="container">
                <div class="course-title">
                    <h1>UI/UX Design Systems</h1>
                    <p>Master user experience design principles and create compelling digital experiences</p>
                </div>
                <div class="course-actions">
                    @if(Auth::check())
                        <a href="{{ route('courses.uiux-coursepage') }}" class="btn btn-primary">Enroll Now</a>
                    @else
                        <a href="{{ route('login') }}?redirect={{ urlencode(route('courses.uiux-coursepage')) }}" class="btn btn-primary">Enroll Now</a>
                    @endif
                    <button class="btn btn-outline download-btn">
                        <i class="fas fa-download"></i> Download PDF
                    </button>
                </div>
            </div>
        </section>

        <section class="course-description">
            <div class="container">
                <div class="description-content">
                    <div class="description-text">
                        <h2>Course Overview</h2>
                        <p>This two-week intensive course is designed to introduce beginners to the world of UX Design and Design Systems. Through a combination of theoretical concepts and hands-on exercises, you'll learn the fundamentals of creating user-centric digital experiences.</p>
                        <p>Week 1 focuses on UX Design principles, research methods, and prototyping. Week 2 builds on these foundations to explore design systems, component libraries, and how to integrate UX with visual design.</p>
                        <p>By the end of this course, you'll have the skills to create wireframes, conduct user research, build prototypes, and understand how design systems create cohesive product experiences.</p>
                    </div>
                    <div class="description-image">
                    <img src="{{ asset('img/ux-illustration.svg') }}" alt="UI/UX Design Illustration">
                    </div>
                </div>
            </div>
        </section>

        <section class="course-modules">
            <div class="container">
                <h2>Course Modules</h2>
                
                <div class="modules-grid">
                    <div class="module-card">
                        <h3>Day 1: UX Design Foundations</h3>
                        <p>Learn about the history of UX design, key concepts, and fundamental principles of design thinking.</p>
                        <a href="{{ route('courses.module', 'module1') }}" class="module-link">Explore Module</a>
                    </div>

                    <div class="module-card">
                        <h3>Day 2: User Research & Data Collection</h3>
                        <p>Discover user research methods and how to collect meaningful data for informed design decisions.</p>
                        <a href="modules/day2.html" class="module-link">Explore Module</a>
                    </div>

                    <div class="module-card">
                        <h3>Day 3: Analyzing Research Data</h3>
                        <p>Explore how to analyze user research data and create meaningful personas and journey maps.</p>
                        <a href="modules/day3.html" class="module-link">Explore Module</a>
                    </div>

                    <div class="module-card">
                        <h3>Day 4: Wireframing & Prototyping</h3>
                        <p>Understand the principles of wireframing and learn to create effective interactive prototypes.</p>
                        <a href="modules/day4.html" class="module-link">Explore Module</a>
                    </div>

                    <div class="module-card">
                        <h3>Day 5: Week 1 Project</h3>
                        <p>Apply your UX knowledge to complete a comprehensive design project with real-world applications.</p>
                        <a href="modules/day5.html" class="module-link">Explore Module</a>
                    </div>

                    <div class="module-card">
                        <h3>Day 6: Design Systems Overview</h3>
                        <p>Learn about design systems and how they ensure consistency and efficiency in digital products.</p>
                        <a href="modules/day6.html" class="module-link">Explore Module</a>
                    </div>

                    <div class="module-card">
                        <h3>Day 7: Visual Design Fundamentals</h3>
                        <p>Explore core visual design principles including typography, color theory, and layout.</p>
                        <a href="modules/day7.html" class="module-link">Explore Module</a>
                    </div>

                    <div class="module-card">
                        <h3>Day 8: Component Libraries</h3>
                        <p>Discover how to build and maintain component libraries that support design systems.</p>
                        <a href="modules/day8.html" class="module-link">Explore Module</a>
                    </div>

                    <div class="module-card">
                        <h3>Day 9: Integrating UX with Design Systems</h3>
                        <p>Learn how to merge user research insights with structured design systems for better products.</p>
                        <a href="modules/day9.html" class="module-link">Explore Module</a>
                    </div>

                    <div class="module-card">
                        <h3>Day 10: Final Project</h3>
                        <p>Complete a comprehensive final project that combines UX research, prototyping, and design systems.</p>
                        <a href="modules/day10.html" class="module-link">Explore Module</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="course-info">
            <div class="container">
                <div class="info-cards">
                    <div class="info-card">
                        <div class="info-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3>Who This Course Is For</h3>
                        <ul>
                            <li>Beginners with no prior experience in UX/UI</li>
                            <li>Individuals transitioning to web/app development</li>
                            <li>Students interested in user-centered design</li>
                            <li>Anyone looking to understand design systems</li>
                        </ul>
                    </div>

                    <div class="info-card">
                        <div class="info-icon">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <h3>What You'll Learn</h3>
                        <ul>
                            <li>UX design principles and methodologies</li>
                            <li>User research and testing techniques</li>
                            <li>Wireframing and prototyping skills</li>
                            <li>Design system components and documentation</li>
                            <li>Visual design fundamentals</li>
                        </ul>
                    </div>

                    <div class="info-card">
                        <div class="info-icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <h3>Course Requirements</h3>
                        <ul>
                            <li>A laptop or desktop computer</li>
                            <li>Basic computer literacy</li>
                            <li>Figma account (free)</li>
                            <li>No prior design experience required</li>
                            <li>Interest in design and problem-solving</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="course-cta">
            <div class="container">
                <h2>Ready to Start Your UX Design Journey?</h2>
                <p>Join this comprehensive course and take your first step toward becoming a UX designer.</p>
                @if(Auth::check())
                    <a href="{{ route('courses.uiux-coursepage') }}" class="btn btn-primary">Enroll Now - It's Free</a>
                @else
                    <a href="{{ route('login') }}?redirect={{ urlencode(route('courses.uiux-coursepage')) }}" class="btn btn-primary">Enroll Now - It's Free</a>
                @endif
            </div>
        </section>
    </main>

    @endsection

@section('scripts')
    <script src="{{ asset('js/UIUXScripts.js') }}"></script>
@endsection