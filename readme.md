# YDP Training LMS

## Overview
The YDP (Youth Development Program) Training LMS is a custom Learning Management System developed for Sci-Bono Discovery Centre in Johannesburg. This system supports a two-week interactive course aimed at beginners transitioning into web and app development, focusing on UX design and design systems.

## Project Purpose
The platform serves as a comprehensive learning environment for the Sci-Bono Youth Development Program, which provides internationally recognized qualifications to unemployed youth aged 18-25. The LMS is designed to be user-friendly, engaging, and interactive, supporting both self-paced learning and instructor-led activities.

## Technology Stack
- **Backend Framework**: PHP Laravel
- **Database**: MySQL/PostgreSQL
- **Frontend**: HTML5, CSS3, JavaScript
- **CSS Framework**: Custom CSS with variables for theming
- **Icons**: Font Awesome
- **Fonts**: Montserrat, Poppins (Google Fonts)

## File Structure
```
/ 
├── app/                      # Laravel application code
│   ├── Http/Controllers/     # Controllers (AuthController, CourseController, etc.)
│   ├── Models/               # Database models (Course, Lesson, Module, User)
│   └── Providers/            # Service providers
├── config/                   # Laravel configuration files
├── database/                 # Database migrations, seeders, and factories
├── public/                   # Publicly accessible files
│   ├── css/                  # Stylesheets
│   ├── img/                  # Images and icons
│   ├── js/                   # JavaScript files
├── resources/                # Laravel resources
│   ├── views/                # Blade templates
│       ├── layouts/          # Layout templates
│       └── pages/            # Page templates
│           └── UIUXCourse/   # UI/UX course-specific pages
├── routes/                   # Route definitions
```

## Key Features

### User Management
- User registration and authentication
- Role-based access (students, instructors, administrators)
- User profile management

### Course & Content Management
- Module-based layout (Week 1: UX Design, Week 2: Design Systems)
- Content delivery for various media types
- Progress tracking

### Interactive Elements
- Discussion forums
- Live quizzes and assessment tools
- Assignment submission portal

### Progress Tracking
- Personal dashboards for students
- Progress visualization (progress bars, completion indicators)
- Achievement tracking

### Analytics & Reporting
- Instructor and admin dashboards
- Course completion tracking
- Quiz results and assignment feedback analytics

## Course Structure
The main course offered is a two-week UI/UX Design Systems course:

### Week 1: Foundations in UX Design
- Day 1: Introduction to UX Design & Design Thinking
- Day 2: Understanding Users -- Research and Empathy
- Day 3: Analyzing User Research & Creating User Personas
- Day 4: Information Architecture & Navigation Design
- Day 5: Interaction Design & Prototyping

### Week 2: Introduction to Design Systems
- Day 6: Overview of Design Systems
- Day 7: Visual Design Fundamentals
- Day 8: Building Component Libraries
- Day 9: Integrating UX Design with Design Systems
- Day 10: Final Project Presentations & Course Wrap-Up

## Installation

### Prerequisites
- PHP >= 8.0
- Composer
- Node.js and npm
- MySQL or PostgreSQL
- Laravel requirements (see [Laravel Documentation](https://laravel.com/docs/))

### Setup Steps
1. Clone the repository:
   ```
   git clone https://github.com/your-repository/ydp-lms.git
   cd ydp-lms
   ```

2. Install PHP dependencies:
   ```
   composer install
   ```

3. Create a copy of the environment file:
   ```
   cp .env.example .env
   ```

4. Generate an application key:
   ```
   php artisan key:generate
   ```

5. Configure your database in the `.env` file:
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=ydp_lms
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

6. Run migrations:
   ```
   php artisan migrate
   ```

7. Seed the database (optional):
   ```
   php artisan db:seed
   ```

8. Start the local development server:
   ```
   php artisan serve
   ```

## Development Guidelines

### CSS Architecture
- We use a custom CSS architecture with variables for consistent theming
- Global variables are defined in the root scope for colors, spacing, fonts, etc.
- Follow the existing naming conventions and component structure

### JavaScript Components
- JavaScript files are organized by functionality:
  - `indexScripts.js`: Homepage functionality
  - `UIUXScripts.js`: Course page functionality
  - `UIUXLesson.js`: Lesson page interactions

### Adding New Lessons
1. Create a new Blade template in the appropriate module directory
2. Update the module navigation to include the new lesson
3. Register the route in `routes/web.php`
4. Update the course controller if necessary

### Blade Templates
- Use `@extends('layouts.app')` for consistent layout
- Section structure should follow the existing pattern:
  ```blade
  @section('title', 'Page Title')
  
  @section('content')
      <!-- Content here -->
  @endsection
  ```

## Major Components

### Home Page
The landing page with course offerings, program benefits, and call-to-action sections.

### Course Pages
Detailed pages for each course showing modules, requirements, and enrollment options.

### Module Pages
Overview pages for each module within a course, showing the lessons and resources.

### Lesson Pages
Individual lesson content pages with learning materials, activities, and assessments.

## Future Enhancements
- Integration with online assessment tools
- Virtual classroom functionality
- Gamification elements (badges, achievements, leaderboards)
- Mobile application for offline access to course materials
- Analytics dashboard for tracking student performance

## Contact Information
For questions regarding this project:
- **Organization**: vuksInc
- **Phone**: +27 63 839 3157
- **Email**: info@vuyanimagibisela.co.za / vuyani.magibisela@live.com