/**
 * Aries Template JavaScript
 * 
 * Handles character counter, form validation, AJAX submission to ChatGPT,
 * multi-step form flow, and Google Analytics tracking.
 * 
 * @package allmyhr-mmxxv
 */

(function($) {
    'use strict';

    // DOM Elements
    const questionInput = document.getElementById('aries-question');
    const stateSelect = document.getElementById('aries-state');
    const submitBtn = document.getElementById('aries-submit');
    const charCounter = document.getElementById('aries-char-counter');
    const responseContainer = document.getElementById('aries-response-container');
    const responseText = document.getElementById('aries-response-text');
    const errorMessage = document.getElementById('aries-error-message');
    const loadingSpinner = document.getElementById('aries-loading');
    const step2Form = document.getElementById('aries-step2-form');
    const headerRow = document.querySelector('.aries-header-row');
    const inputRow = document.querySelector('.aries-input-row');

    // State
    let currentStep = 1;
    let storedQuestion = '';
    let storedState = '';
    let storedResponse = '';

    /**
     * Update character counter display
     */
    function updateCharCounter() {
        if (!questionInput || !charCounter) return;
        
        const currentLength = questionInput.value.length;
        const maxLength = 256;
        
        charCounter.textContent = `${currentLength}/${maxLength} characters`;
        
        // Update color based on character count
        charCounter.classList.remove('warning', 'danger');
        if (currentLength >= 250) {
            charCounter.classList.add('danger');
        } else if (currentLength >= 200) {
            charCounter.classList.add('warning');
        }
    }

    // Initialize character counter
    if (questionInput) {
        questionInput.addEventListener('input', updateCharCounter);
        // Set initial count
        updateCharCounter();
    }

    /**
     * Validate form inputs
     * @returns {boolean} Whether the form is valid
     */
    function validateForm() {
        let isValid = true;
        
        // Clear previous errors
        hideError();
        
        // Check state selection
        if (!stateSelect || !stateSelect.value) {
            showError('Please select your state.');
            stateSelect.focus();
            isValid = false;
            return isValid;
        }
        
        // Check question input
        if (!questionInput || !questionInput.value.trim()) {
            showError('Please enter your HR question.');
            questionInput.focus();
            isValid = false;
            return isValid;
        }
        
        return isValid;
    }

    /**
     * Show error message
     * @param {string} message - Error message to display
     */
    function showError(message) {
        if (errorMessage) {
            errorMessage.textContent = message;
            errorMessage.style.display = 'block';
        }
        if (responseContainer) {
            responseContainer.style.display = 'block';
        }
    }

    /**
     * Hide error message
     */
    function hideError() {
        if (errorMessage) {
            errorMessage.style.display = 'none';
            errorMessage.textContent = '';
        }
    }

    /**
     * Show loading state
     */
    function showLoading() {
        if (loadingSpinner) {
            loadingSpinner.style.display = 'flex';
        }
        if (submitBtn) {
            submitBtn.disabled = true;
            submitBtn.textContent = 'Processing...';
        }
        if (responseContainer) {
            responseContainer.style.display = 'none';
        }
    }

    /**
     * Hide loading state
     */
    function hideLoading() {
        if (loadingSpinner) {
            loadingSpinner.style.display = 'none';
        }
        if (submitBtn) {
            submitBtn.disabled = false;
            submitBtn.textContent = 'Submit Question';
        }
    }

    /**
     * Submit question to ChatGPT API
     */
    async function submitQuestion() {
        if (!validateForm()) {
            return;
        }

        // Store values
        storedQuestion = questionInput.value.trim();
        storedState = stateSelect.value;

        // Show loading, hide other elements
        showLoading();

        // Track GA event
        trackEvent('aries_form_start', 'Aries', 'Question Submitted');

        try {
            const response = await fetch(ariesData.restUrl, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-WP-Nonce': ariesData.nonce
                },
                body: JSON.stringify({
                    question: storedQuestion,
                    state: storedState
                })
            });

            const data = await response.json();

            if (response.ok && data.success) {
                storedResponse = data.response;
                handleSuccess(data.response);
            } else {
                handleError(data.message || 'An error occurred. Please try again.');
            }
        } catch (error) {
            console.error('Aries API Error:', error);
            handleError('Unable to connect to the server. Please try again later.');
        }
    }

    /**
     * Handle successful API response
     * @param {string} response - AI response text
     */
    function handleSuccess(response) {
        hideLoading();
        
        // Display the AI response
        if (responseText) {
            responseText.innerHTML = response.replace(/\n/g, '<br>');
        }
        if (responseContainer) {
            responseContainer.style.display = 'block';
        }
        
        // Track GA event
        trackEvent('aries_ai_response', 'Aries', 'AI Response Received');
        
        // Transition to step 2 (handled in task 2.9)
        transitionToStep2();
    }

    /**
     * Transition to step 2 - show name/email form
     */
    function transitionToStep2() {
        currentStep = 2;
        
        // Hide the input row (question input and submit button)
        if (inputRow) {
            inputRow.style.display = 'none';
        }
        
        // Disable state dropdown but keep it visible for reference
        if (stateSelect) {
            stateSelect.disabled = true;
        }
        
        // Hide character counter
        if (charCounter) {
            charCounter.style.display = 'none';
        }
        
        // Show step 2 form
        if (step2Form) {
            step2Form.style.display = 'block';
        }
        
        // Populate Gravity Form hidden fields
        populateHiddenFields();
    }

    /**
     * Populate Gravity Form hidden fields with collected data
     * Note: Field IDs should match the Gravity Form configuration
     * Typical hidden field naming: input_[form_id]_[field_id]
     */
    function populateHiddenFields() {
        // Try to find hidden fields by common patterns
        // The exact field IDs will depend on Gravity Form configuration
        const form = document.querySelector('#aries-step2-form form');
        if (!form) return;

        // Look for hidden inputs and set values
        const hiddenInputs = form.querySelectorAll('input[type="hidden"]');
        hiddenInputs.forEach(input => {
            const name = input.name.toLowerCase();
            const id = input.id.toLowerCase();
            
            // Match by field name or label patterns
            if (name.includes('question') || id.includes('question')) {
                input.value = storedQuestion;
            } else if (name.includes('state') || id.includes('state')) {
                input.value = storedState;
            } else if (name.includes('response') || name.includes('ai') || id.includes('response') || id.includes('ai')) {
                input.value = storedResponse;
            }
        });

        // Also try setting by data attributes if configured
        const questionField = form.querySelector('[data-field="question"]');
        const stateField = form.querySelector('[data-field="state"]');
        const responseField = form.querySelector('[data-field="ai_response"]');

        if (questionField) questionField.value = storedQuestion;
        if (stateField) stateField.value = storedState;
        if (responseField) responseField.value = storedResponse;
    }

    /**
     * Track Google Analytics event
     * @param {string} action - Event action
     * @param {string} category - Event category
     * @param {string} label - Event label
     */
    function trackEvent(action, category, label) {
        // Check if gtag is available (Google Analytics 4)
        if (typeof gtag === 'function') {
            gtag('event', action, {
                'event_category': category,
                'event_label': label
            });
        }
        // Fallback to dataLayer for Google Tag Manager
        else if (typeof dataLayer !== 'undefined') {
            dataLayer.push({
                'event': action,
                'eventCategory': category,
                'eventLabel': label
            });
        }
        // Console log for debugging in development
        else {
            console.log('GA Event:', action, category, label);
        }
    }

    // Track form submission for step 2 (Gravity Form)
    // Listen for Gravity Forms submission
    if (typeof jQuery !== 'undefined') {
        jQuery(document).on('gform_confirmation_loaded', function(event, formId) {
            if (formId === 12) { // Aries form ID
                trackEvent('aries_lead_submit', 'Aries', 'Lead Captured');
                trackEvent('aries_redirect', 'Aries', 'Thank You Redirect');
            }
        });
    }

    /**
     * Handle error response
     * @param {string} message - Error message to display
     */
    function handleError(message) {
        hideLoading();
        
        // Display error message
        showError(message);
        
        // Re-enable the form for retry
        if (submitBtn) {
            submitBtn.disabled = false;
            submitBtn.textContent = 'Try Again';
        }
    }

    // Attach submit handler
    if (submitBtn) {
        submitBtn.addEventListener('click', submitQuestion);
    }

    // Allow Enter key to submit (but not in textarea)
    if (questionInput) {
        questionInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                submitQuestion();
            }
        });
    }

})(jQuery);
