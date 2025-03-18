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
    
    // Quiz functionality
    const checkAnswersBtn = document.querySelector('.check-answers-btn');
    
    if (checkAnswersBtn) {
        const correctAnswers = {
            'q1': 'b',
            'q2': 'c',
            'q3': 'c'
        };
        
        checkAnswersBtn.addEventListener('click', function() {
            let score = 0;
            let total = Object.keys(correctAnswers).length;
            
            // Check each question
            for (let question in correctAnswers) {
                const selectedOption = document.querySelector(`input[name="${question}"]:checked`);
                
                if (selectedOption) {
                    const options = document.querySelectorAll(`input[name="${question}"]`);
                    
                    // Reset previously marked options
                    options.forEach(option => {
                        option.parentElement.classList.remove('correct', 'incorrect');
                    });
                    
                    if (selectedOption.value === correctAnswers[question]) {
                        // Mark as correct
                        selectedOption.parentElement.classList.add('correct');
                        score++;
                    } else {
                        // Mark as incorrect
                        selectedOption.parentElement.classList.add('incorrect');
                        
                        // Find and highlight the correct answer
                        options.forEach(option => {
                            if (option.value === correctAnswers[question]) {
                                option.parentElement.classList.add('correct');
                            }
                        });
                    }
                }
            }
            
            // Show result
            if (!document.querySelector('.quiz-result')) {
                const resultDiv = document.createElement('div');
                resultDiv.className = 'quiz-result';
                resultDiv.innerHTML = `<p>You scored <strong>${score}/${total}</strong></p>`;
                
                this.insertAdjacentElement('afterend', resultDiv);
            } else {
                document.querySelector('.quiz-result p').innerHTML = `<p>You scored <strong>${score}/${total}</strong></p>`;
            }
        });
    }
    
    // Mark lesson as complete
    const markCompleteBtn = document.querySelector('.mark-complete-btn');
    
    if (markCompleteBtn) {
        // Check if already completed
        const currentPath = window.location.pathname;
        const completed = JSON.parse(localStorage.getItem('completedLessons') || '[]');
        
        if (completed.includes(currentPath)) {
            markCompleteBtn.textContent = 'Completed ✓';
            markCompleteBtn.disabled = true;
            markCompleteBtn.classList.add('completed');
        }
        
        markCompleteBtn.addEventListener('click', function() {
            const currentPath = window.location.pathname;
            let completed = JSON.parse(localStorage.getItem('completedLessons') || '[]');
            
            if (!completed.includes(currentPath)) {
                completed.push(currentPath);
                localStorage.setItem('completedLessons', JSON.stringify(completed));
                
                this.textContent = 'Completed ✓';
                this.disabled = true;
                this.classList.add('completed');
                
                // Show success message
                showNotification('Lesson marked as complete!', 'success');
                
                // You could also update the progress bar here
                // This is a simplified version; in a real LMS you would use an API call
            }
        });
    }
    
    // Discussion button
    const discussionBtn = document.querySelector('.discussion-btn');
    
    if (discussionBtn) {
        discussionBtn.addEventListener('click', function() {
            // In a real implementation, this would open a discussion forum
            // For this demo, we'll show a notification
            showNotification('Discussion forum would open in a real implementation', 'info');
        });
    }
    
    // Show notification
    function showNotification(message, type = 'info', duration = 3000) {
        // Check if notification container exists, if not create it
        let notificationContainer = document.querySelector('.notification-container');
        
        if (!notificationContainer) {
            notificationContainer = document.createElement('div');
            notificationContainer.className = 'notification-container';
            document.body.appendChild(notificationContainer);
            
            // Add styles dynamically if not already in CSS
            if (!document.getElementById('notification-styles')) {
                const styleEl = document.createElement('style');
                styleEl.id = 'notification-styles';
                styleEl.textContent = `
                    .notification-container {
                        position: fixed;
                        bottom: 20px;
                        right: 20px;
                        z-index: 9999;
                    }
                    
                    .notification {
                        background-color: white;
                        color: #333;
                        border-radius: 5px;
                        padding: 15px 20px;
                        margin-bottom: 10px;
                        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2);
                        display: flex;
                        align-items: center;
                        animation: slideIn 0.3s ease-out;
                    }
                    
                    .notification.success {
                        border-left: 4px solid #4CAF50;
                    }
                    
                    .notification.error {
                        border-left: 4px solid #F44336;
                    }
                    
                    .notification.info {
                        border-left: 4px solid #2196F3;
                    }
                    
                    .notification.warning {
                        border-left: 4px solid #FF9800;
                    }
                    
                    .notification i {
                        margin-right: 10px;
                        font-size: 20px;
                    }
                    
                    .notification.success i {
                        color: #4CAF50;
                    }
                    
                    .notification.error i {
                        color: #F44336;
                    }
                    
                    .notification.info i {
                        color: #2196F3;
                    }
                    
                    .notification.warning i {
                        color: #FF9800;
                    }
                    
                    @keyframes slideIn {
                        from {
                            transform: translateX(100%);
                            opacity: 0;
                        }
                        to {
                            transform: translateX(0);
                            opacity: 1;
                        }
                    }
                    
                    @keyframes fadeOut {
                        from {
                            opacity: 1;
                        }
                        to {
                            opacity: 0;
                        }
                    }
                `;
                document.head.appendChild(styleEl);
            }
        }
        
        // Create notification
        const notification = document.createElement('div');
        notification.className = `notification ${type}`;
        
        // Choose icon based on type
        let icon;
        switch (type) {
            case 'success':
                icon = 'check-circle';
                break;
            case 'error':
                icon = 'times-circle';
                break;
            case 'warning':
                icon = 'exclamation-triangle';
                break;
            default:
                icon = 'info-circle';
        }
        
        notification.innerHTML = `
            <i class="fas fa-${icon}"></i>
            <div>${message}</div>
        `;
        
        // Add to container
        notificationContainer.appendChild(notification);
        
        // Remove after duration
        setTimeout(() => {
            notification.style.animation = 'fadeOut 0.3s ease-out';
            setTimeout(() => {
                notification.remove();
            }, 300);
        }, duration);
    }
});