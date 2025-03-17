// DOM Elements
const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
const mainNav = document.getElementById('main-nav');
const header = document.querySelector('header');

// Mobile Menu Toggle
if (mobileMenuBtn) {
    mobileMenuBtn.addEventListener('click', () => {
        mainNav.classList.toggle('active');
        mobileMenuBtn.querySelector('i').classList.toggle('fa-bars');
        mobileMenuBtn.querySelector('i').classList.toggle('fa-times');
    });
}

// Smooth Scrolling for Navigation Links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        
        const targetId = this.getAttribute('href');
        if (targetId === '#') return;
        
        const targetElement = document.querySelector(targetId);
        if (targetElement) {
            window.scrollTo({
                top: targetElement.offsetTop - 80,
                behavior: 'smooth'
            });
            
            // Close mobile menu if open
            if (mainNav.classList.contains('active')) {
                mainNav.classList.remove('active');
                mobileMenuBtn.querySelector('i').classList.add('fa-bars');
                mobileMenuBtn.querySelector('i').classList.remove('fa-times');
            }
        }
    });
});

// Header Scroll Effect
window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }
});

// Add fade-in animation to elements as they appear in viewport
const fadeElements = document.querySelectorAll('.toc-unit, .key-concept, .stat-item');

// Intersection Observer for fade-in animations
if ('IntersectionObserver' in window) {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('fade-in');
                observer.unobserve(entry.target);
            }
        });
    }, {
        root: null,
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    });

    fadeElements.forEach(element => {
        observer.observe(element);
    });
} else {
    // Fallback for browsers that don't support Intersection Observer
    fadeElements.forEach(element => {
        element.classList.add('fade-in');
    });
}

// Add animation classes to hero elements on page load
document.addEventListener('DOMContentLoaded', () => {
    document.querySelector('.hero h1').classList.add('fade-in');
    document.querySelector('.hero h2').classList.add('fade-in');
    document.querySelector('.hero p').classList.add('fade-in');
    document.querySelector('.hero .cta-buttons').classList.add('fade-in');
});