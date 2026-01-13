/**
 * ASK ARIES - AI-powered HR Q&A Chatbox
 * 
 * @package allmyhr-mmxxv
 */

(function($) {
    'use strict';

    // DOM elements
    const $questionInput = $('#ask-aries-question');
    const $counter = $('#ask-aries-counter');
    const $submitBtn = $('#ask-aries-submit');
    const $jurisdictionSelect = $('#ask-aries-jurisdiction');
    const $responseArea = $('.ask-aries-response-area');
    const $formArea = $('.ask-aries-form-area');
    const $loadingSpinner = $('.ask-aries-loading');

    const MAX_CHARS = 256;
    let isSubmitting = false;

    /**
     * Update character counter
     */
    function updateCharCounter() {
        const currentLength = $questionInput.val().length;
        $counter.text(currentLength + '/' + MAX_CHARS);
    }

    /**
     * Show loading spinner
     */
    function showLoading() {
        isSubmitting = true;
        $submitBtn.prop('disabled', true).text('Loading...');
        $loadingSpinner.show();
        $responseArea.hide();
        $formArea.hide();
    }

    /**
     * Hide loading spinner
     */
    function hideLoading() {
        isSubmitting = false;
        $submitBtn.prop('disabled', false).text('Ask');
        $loadingSpinner.hide();
    }

    /**
     * Display AI response with disclaimer
     */
    function displayResponse(response, jurisdiction, question) {
        const disclaimer = 'This information is provided for general educational purposes only and does not constitute legal advice. For specific guidance regarding your situation, please consult with a qualified HR professional or attorney licensed in your jurisdiction.';

        // Build response HTML
        const responseHtml = `
            <div class="ask-aries-response-header">
                <span class="fa ask-aries-bot-icon" aria-hidden="true">&#xf544;</span>
                <strong>AllMyHR Response:</strong>
            </div>
            <div class="ask-aries-response-content">
                ${escapeHtml(response).replace(/\n/g, '<br>')}
            </div>
            <div class="ask-aries-disclaimer">
                <span class="fa" aria-hidden="true">&#xf071;</span>
                <em>${disclaimer}</em>
            </div>
        `;

        // Show response area
        $responseArea.html(responseHtml).show();

        // Store values for Gravity Form population
        window.askAriesLastResponse = {
            question: question,
            jurisdiction: jurisdiction,
            response: response
        };

        // Populate Gravity Form hidden fields
        populateGravityFormFields(question, jurisdiction, response);

        // Show form area
        $formArea.show();

        // Scroll to response
        $('html, body').animate({
            scrollTop: $responseArea.offset().top - 100
        }, 500);
    }

    /**
     * Display error message
     */
    function displayError(message) {
        const errorHtml = `
            <div class="ask-aries-error">
                <span class="fa" aria-hidden="true">&#xf06a;</span>
                ${escapeHtml(message)}
            </div>
        `;
        $responseArea.html(errorHtml).show();
    }

    /**
     * Display rate limit message and show form
     */
    function displayRateLimitMessage(message) {
        const rateLimitHtml = `
            <div class="ask-aries-rate-limit">
                <span class="fa" aria-hidden="true">&#xf017;</span>
                ${escapeHtml(message)}
            </div>
        `;
        $responseArea.html(rateLimitHtml).show();
        
        // Show the form area so user can provide their info
        $formArea.show();
        
        // Scroll to form
        $('html, body').animate({
            scrollTop: $formArea.offset().top - 100
        }, 500);
    }

    /**
     * Escape HTML to prevent XSS
     */
    function escapeHtml(text) {
        const div = document.createElement('div');
        div.textContent = text;
        return div.innerHTML;
    }

    /**
     * Populate Gravity Form hidden fields
     * Field 3 = Question, Field 4 = State/Jurisdiction, Field 5 = AI Response
     */
    function populateGravityFormFields(question, jurisdiction, response) {
        // Wait a moment for Gravity Forms to render (if using AJAX)
        setTimeout(function() {
            // Field 3: Question (hidden)
            const $questionField = $formArea.find('input[name="input_3"]');
            if ($questionField.length) {
                $questionField.val(question);
            }

            // Field 4: State/Jurisdiction (hidden)
            const $stateField = $formArea.find('input[name="input_4"]');
            if ($stateField.length) {
                $stateField.val(jurisdiction);
            }

            // Field 5: AI Response (hidden)
            const $responseField = $formArea.find('input[name="input_5"], textarea[name="input_5"]');
            if ($responseField.length) {
                $responseField.val(response);
            }
        }, 100);
    }

    /**
     * Validate form inputs
     * @returns {boolean} Whether the form is valid
     */
    function validateForm() {
        const jurisdiction = $jurisdictionSelect.val();
        const question = $questionInput.val().trim();

        // Check jurisdiction is selected
        if (!jurisdiction) {
            alert('Please select a jurisdiction.');
            $jurisdictionSelect.focus();
            return false;
        }

        // Check question is entered
        if (!question) {
            alert('Please enter your question.');
            $questionInput.focus();
            return false;
        }

        return true;
    }

    /**
     * Handle form submission
     */
    function handleSubmit() {
        // Prevent double submission
        if (isSubmitting) {
            return;
        }

        if (!validateForm()) {
            return;
        }

        // Show loading state
        showLoading();

        // Store values for later use
        const jurisdiction = $jurisdictionSelect.val();
        const question = $questionInput.val().trim();

        // Make AJAX request
        $.ajax({
            url: askAriesData.ajaxUrl,
            type: 'POST',
            data: {
                action: 'ask_aries_query',
                nonce: askAriesData.nonce,
                jurisdiction: jurisdiction,
                question: question
            },
            success: function(response) {
                hideLoading();
                
                if (response.success) {
                    displayResponse(response.data.response, jurisdiction, question);
                } else {
                    // Check if rate limited
                    if (response.data && response.data.rate_limited) {
                        displayRateLimitMessage(response.data.message);
                    } else {
                        displayError(response.data.message || 'Something went wrong. Please try again.');
                    }
                }
            },
            error: function() {
                hideLoading();
                displayError('Something went wrong. Please try again.');
            }
        });
    }

    /**
     * Initialize event listeners
     */
    function init() {
        // Character counter update on input
        $questionInput.on('input', updateCharCounter);

        // Form submission
        $submitBtn.on('click', handleSubmit);

        // Allow Enter key to submit (when in input field)
        $questionInput.on('keypress', function(e) {
            if (e.which === 13) {
                e.preventDefault();
                handleSubmit();
            }
        });

        // Initial counter update
        updateCharCounter();
    }

    // Initialize when DOM is ready
    $(document).ready(init);

})(jQuery);
