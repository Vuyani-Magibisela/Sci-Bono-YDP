document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu toggle
    const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
    const mainNav = document.getElementById('main-nav');
    
    if (mobileMenuBtn && mainNav) {
        mobileMenuBtn.addEventListener('click', function() {
            mainNav.classList.toggle('active');
            const icon = this.querySelector('i');
            if (icon.classList.contains('fa-bars')) {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
            } else {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });
    }
    
    // Close navigation when clicking outside
    document.addEventListener('click', function(event) {
        if (mainNav?.classList.contains('active') && 
            !mainNav.contains(event.target) && 
            !mobileMenuBtn.contains(event.target)) {
            
            mainNav.classList.remove('active');
            const icon = mobileMenuBtn.querySelector('i');
            icon.classList.remove('fa-times');
            icon.classList.add('fa-bars');
        }
    });
    
    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const targetId = this.getAttribute('href');
            
            // Skip if it's just "#" or if it's a tab
            if (targetId === '#' || this.closest('.tab-navigation')) return;
            
            e.preventDefault();
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                const headerOffset = 80; // Adjust based on header height
                const elementPosition = targetElement.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;
                
                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // Download PDF functionality
    const downloadButtons = document.querySelectorAll('.download-btn');
    
    downloadButtons.forEach(button => {
        button.addEventListener('click', function() {
            // In a real implementation, this would trigger a PDF download
            // For this demo, we'll just show an alert
            alert('PDF download would begin in a real implementation');
        });
    });
    
    // Enrollment button functionality
    const enrollButtons = document.querySelectorAll('.btn-primary');
    
    enrollButtons.forEach(button => {
        if (button.textContent.includes('Enroll')) {
            button.addEventListener('click', function() {
                // Check if user is logged in (in a real implementation)
                const isLoggedIn = localStorage.getItem('isLoggedIn');
                
                if (isLoggedIn) {
                    // In a real implementation, this would enroll the user
                    // For this demo, we'll just show an alert
                    alert('You have been enrolled in the course!');
                    
                    // Change button text
                    this.textContent = 'Go to Course';
                    
                    // Update localStorage to reflect enrollment
                    localStorage.setItem('enrolledCourses', JSON.stringify(['uxdesign']));
                } else {
                    // Redirect to login page
                    window.location.href = 'login.html?redirect=course-uxdesign.html';
                }
            });
        }
    });
    
    // Mark completed lessons (if on course page)
    const moduleCards = document.querySelectorAll('.module-card');
    
    if (moduleCards.length > 0) {
        const completed = JSON.parse(localStorage.getItem('completedLessons') || '[]');
        
        if (completed.length > 0) {
            moduleCards.forEach(card => {
                const link = card.querySelector('a');
                const href = link?.getAttribute('href');
                
                // Extract the module name from the href
                if (href) {
                    const moduleName = href.split('/').pop().split('.')[0];
                    
                    // Check if any lessons in this module are completed
                    const hasCompletedLessons = completed.some(path => path.includes(moduleName));
                    
                    if (hasCompletedLessons) {
                        // Add a completion indicator
                        const indicator = document.createElement('div');
                        indicator.className = 'completion-indicator';
                        indicator.innerHTML = '<i class="fas fa-check-circle"></i> Started';
                        card.appendChild(indicator);
                    }
                }
            });
        }
    }
    
    // Chapter card completion indicators (if on module page)
    const chapterCards = document.querySelectorAll('.chapter-card');
    
    if (chapterCards.length > 0) {
        const completed = JSON.parse(localStorage.getItem('completedLessons') || '[]');
        
        if (completed.length > 0) {
            chapterCards.forEach(card => {
                const link = card.querySelector('a');
                const href = link?.getAttribute('href');
                
                if (href) {
                    // Check if this lesson is completed
                    const isCompleted = completed.some(path => path.includes(href));
                    
                    if (isCompleted) {
                        // Add a completion indicator
                        const indicator = document.createElement('div');
                        indicator.className = 'completion-indicator';
                        indicator.innerHTML = '<i class="fas fa-check-circle"></i> Completed';
                        card.appendChild(indicator);
                        
                        // Update link text
                        link.textContent = 'Review Chapter';
                    }
                }
            });
        }
    }
    
    // FAQ toggles (if on course page)
    const faqItems = document.querySelectorAll('.faq-item');
    
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        const answer = item.querySelector('.faq-answer');
        
        if (question && answer) {
            question.addEventListener('click', function() {
                // Toggle active class
                this.classList.toggle('active');
                answer.classList.toggle('active');
                
                // Change icon
                const icon = this.querySelector('i');
                if (icon.classList.contains('fa-plus')) {
                    icon.classList.remove('fa-plus');
                    icon.classList.add('fa-minus');
                } else {
                    icon.classList.remove('fa-minus');
                    icon.classList.add('fa-plus');
                }
            });
        }
    });
    
    // Update styles for quiz options based on correct/incorrect answers
    const styleElement = document.createElement('style');
    styleElement.textContent = `
        .quiz-option.correct {
            background-color: rgba(75, 251, 157, 0.2);
        }
        
        .quiz-option.correct:before {
            content: '✓';
            color: #4BFB9D;
            margin-left: -20px;
            margin-right: 10px;
        }
        
        .quiz-option.incorrect {
            background-color: rgba(251, 75, 75, 0.2);
        }
        
        .quiz-option.incorrect:before {
            content: '✖';
            color: #FB4B4B;
            margin-left: -20px;
            margin-right: 10px;
        }
        
        .completion-indicator {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: rgba(75, 251, 157, 0.2);
            color: #4BFB9D;
            padding: 0.3rem 0.8rem;
            border-radius: 20px;
            font-size: 0.8rem;
            display: flex;
            align-items: center;
            gap: 0.3rem;
        }
    `;
    document.head.appendChild(styleElement);
});