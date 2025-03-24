@extends('layouts.app')

@section('title', 'Module 1: UX Design Foundations')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/CoursePageStyles.css') }}">
@endsection

@section('content')

    <main>
        <section class="module-header">
            <div class="container">
                <h1>Module 1: UX Design Foundations</h1>
                <p>Explore the history and fundamental concepts of UX design</p>
            </div>
        </section>

        <section class="module-intro">
            <div class="container">
                <div class="intro-container">
                    <div class="intro-text">
                        <p>Welcome to Day 1 of the UI/UX Design Systems course! In this module, you'll learn about the history of UX design, key concepts, and fundamental principles of design thinking.</p>
                        <p>From its early beginnings to modern developments, you'll gain a comprehensive understanding of what UX is and how it has evolved over the decades.</p>
                        <p>Choose a chapter below to begin your learning journey.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="chapters-container">
            <div class="chapters-grid">
                <div class="chapter-card">
                    <div class="chapter-icon">
                        <i class="fas fa-question-circle"></i>
                    </div>
                    <div class="chapter-content">
                        <div class="chapter-number">1.0</div>
                        <h3 class="chapter-title">What is UX Design?</h3>
                        <p class="chapter-description">Understanding the definition, scope and importance of User Experience Design.</p>
                        <a href="{{ route('courses.lesson', 'module01Lesson01') }}" class="chapter-link">Start Lesson</a>
                    </div>
                </div>

                <div class="chapter-card">
                    <div class="chapter-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <div class="chapter-content">
                        <div class="chapter-number">1.1</div>
                        <h3 class="chapter-title">Introduction to Design Thinking</h3>
                        <p class="chapter-description">Explore the human-centered problem-solving approach used in UX design.</p>
                        <a href="{{ route('courses.lesson', 'module01Lesson02') }}" class="chapter-link">Start Lesson</a>
                    </div>
                </div>

                <div class="chapter-card">
                    <div class="chapter-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <div class="chapter-content">
                        <div class="chapter-number">1.2</div>
                        <h3 class="chapter-title">Empathizing with Users</h3>
                        <p class="chapter-description">Learn how to understand user needs and pain points through empathy.</p>
                        <a href="../lessons/day1-empathizing-users.html" class="chapter-link">Begin Chapter</a>
                    </div>
                </div>

                <div class="chapter-card">
                    <div class="chapter-icon">
                        <i class="fas fa-edit"></i>
                    </div>
                    <div class="chapter-content">
                        <div class="chapter-number">1.3</div>
                        <h3 class="chapter-title">Defining the Problem</h3>
                        <p class="chapter-description">Learn how to frame a UX problem properly by creating clear problem statements.</p>
                        <a href="../lessons/day1-defining-problem.html" class="chapter-link">Begin Chapter</a>
                    </div>
                </div>

                <div class="chapter-card">
                    <div class="chapter-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="chapter-content">
                        <div class="chapter-number">1.4</div>
                        <h3 class="chapter-title">Activity: Persona Development</h3>
                        <p class="chapter-description">Create user personas based on research to guide your design decisions.</p>
                        <a href="../worksheets/day1-persona-worksheet.html" class="chapter-link">Begin Activity</a>
                    </div>
                </div>

                <div class="chapter-card">
                    <div class="chapter-icon">
                        <i class="fas fa-clipboard-list"></i>
                    </div>
                    <div class="chapter-content">
                        <div class="chapter-number">1.5</div>
                        <h3 class="chapter-title">Activity: Problem Statement Workshop</h3>
                        <p class="chapter-description">Learn to craft effective problem statements from user pain points.</p>
                        <a href="../worksheets/day1-problem-statement.html" class="chapter-link">Begin Activity</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="module-resources">
            <div class="container">
                <h2>Additional Resources</h2>
                <div class="resources-grid">
                    <div class="resource-card">
                        <div class="resource-icon">
                            <i class="fas fa-book"></i>
                        </div>
                        <div class="resource-content">
                            <h3>Recommended Reading</h3>
                            <ul>
                                <li><a href="#" target="_blank">The Design of Everyday Things by Don Norman</a></li>
                                <li><a href="#" target="_blank">Don't Make Me Think by Steve Krug</a></li>
                                <li><a href="#" target="_blank">UX Design Principles - Nielsen Norman Group</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="resource-card">
                        <div class="resource-icon">
                            <i class="fas fa-video"></i>
                        </div>
                        <div class="resource-content">
                            <h3>Video Resources</h3>
                            <ul>
                                <li><a href="#" target="_blank">Introduction to UX Design - YouTube</a></li>
                                <li><a href="#" target="_blank">Design Thinking Workshop - IDEO</a></li>
                                <li><a href="#" target="_blank">Creating User Personas - UX Mastery</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="resource-card">
                        <div class="resource-icon">
                            <i class="fas fa-tools"></i>
                        </div>
                        <div class="resource-content">
                            <h3>Tools & Templates</h3>
                            <ul>
                                <li><a href="#" target="_blank">Persona Template (PDF)</a></li>
                                <li><a href="#" target="_blank">Empathy Map Canvas</a></li>
                                <li><a href="#" target="_blank">Problem Statement Framework</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="module-navigation">
            <div class="container">
                <div class="nav-buttons">
                    <a href="../course-uxdesign.html" class="nav-button">
                        <i class="fas fa-arrow-left"></i> Back to Course
                    </a>
                    <a href="../modules/day2.html" class="nav-button next">
                        Next Module: User Research & Data Collection <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('scripts')
    <script src="{{ asset('js/UIUXScripts.js.js') }}"></script>
@endsection