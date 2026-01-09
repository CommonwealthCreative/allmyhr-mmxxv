# Product Requirements Document: Aries Page Template

## 1. Introduction/Overview

The **Aries** template is a new WordPress page template for the `allmyhr-mmxxv` theme that provides a multi-step AI-assisted form experience. Users enter a question or concern (up to 256 characters), select their state, and receive a personalized ChatGPT-generated response. The response prompts them to provide their name and email before being redirected to a thank-you page.

This template combines the existing theme's visual design language (flexbox layouts, neutral card styling, orange accent buttons) with Gravity Forms for form handling and a custom AJAX endpoint for OpenAI API integration.

---

## 2. Goals

1. **Provide an interactive AI-powered intake experience** that feels personalized and helpful
2. **Capture qualified leads** by requiring name and email before completion
3. **Maintain HIPAA compliance messaging** with a visible disclaimer
4. **Leverage existing theme CSS** to ensure visual consistency
5. **Use Gravity Forms** for form submission handling and data storage

---

## 3. User Stories

| # | As a... | I want to... | So that... |
|---|---------|--------------|------------|
| 1 | Visitor | Enter my HR question and select my state | I can receive relevant guidance |
| 2 | Visitor | See a live character count as I type | I know how much space I have remaining |
| 3 | Visitor | See a HIPAA compliance disclaimer | I understand my data is handled responsibly |
| 4 | Visitor | Receive an AI-generated response to my question | I get immediate value before committing my contact info |
| 5 | Visitor | Enter my name and email after seeing the AI response | I can proceed to the next step |
| 6 | Admin | Configure the AI prompt context via WordPress | I can customize the response without editing code |
| 7 | Admin | View submitted leads in Gravity Forms | I can follow up with potential customers |

---

## 4. Functional Requirements

### 4.1 Page Template Structure

1. **Template File**: Create `aries.php` in the theme root with WordPress template header:
   ```php
   <?php
   /**
    * Template Name: Aries
    * Template Post Type: page
    */
   ```

2. **Hero Section**: Display the page title and content from the WordPress editor using standard `the_title()` and `the_content()` functions.

3. **Form Card**: A white, bordered card (using existing `.card` class styling) containing:
   - **Header Row**: User icon (Font Awesome `\f007`), a label (e.g., "Ask Your HR Question"), and a state dropdown
   - **Input Row**: Text input (max 256 characters) and an orange submit button
   - **Footer Row**: Live character counter (e.g., "0/256 characters") and static HIPAA disclaimer text

### 4.2 State Dropdown

4. The state dropdown must include all **50 US states plus District of Columbia** (51 total options).

5. The dropdown should have a default placeholder option: "Select your state..."

6. The dropdown value should be passed to the ChatGPT API for context.

### 4.3 Text Input with Character Counter

7. The text input field must have a `maxlength="256"` attribute.

8. A live character counter must update in real-time as the user types, displaying format: `X/256 characters`.

9. The counter should visually indicate when approaching the limit (e.g., turn orange at 200+ characters, red at 250+).

### 4.4 HIPAA Compliance Disclaimer

10. Display a static disclaimer in the card footer:
    > "This service is provided for informational purposes only and does not constitute legal, medical, or professional HR advice. Your inquiry is processed securely and is not stored or shared beyond what is necessary to provide this response. AllMyHR maintains administrative, technical, and physical safeguards consistent with HIPAA requirements for the protection of your information."

### 4.5 First Submission: ChatGPT Integration

11. On first form submission, send an AJAX request to a custom WordPress REST API endpoint.

12. The endpoint must:
    - Accept the user's question text and selected state
    - Retrieve the **AI prompt context** from a WordPress option (`aries_chatgpt_context`)
    - Send the combined prompt to the OpenAI ChatGPT API
    - Return the AI-generated response

13. The AI prompt context (stored in WordPress options) should be editable via **Settings > Aries Settings**. The default prompt context is:

    > "You are an experienced HR professional helping small business owners and HR managers understand employment law and workplace compliance. The user is located in [STATE]. Provide helpful, practical guidance based on their question. Keep responses concise (2-3 paragraphs). Always recommend consulting with a certified HR professional or attorney for specific legal matters. End your response by encouraging them to provide their name and email to receive personalized follow-up from the AllMyHR team."

14. After receiving the ChatGPT response, display it in the card area along with two new required fields:
    - **Name** (text input, required)
    - **Email** (email input, required)

15. The original question input and state dropdown should be disabled/hidden after the first submission.

### 4.6 Second Submission: Lead Capture & Redirect

16. On second submission (with name and email filled):
    - Submit all data to Gravity Forms for storage
    - Redirect the user to `/thank-you`

17. Gravity Forms should capture:
    - User's original question
    - Selected state
    - ChatGPT response (for reference)
    - Name
    - Email
    - Timestamp

### 4.7 Gravity Forms Integration

18. Use **existing Gravity Form ID: 12**. Configure with hidden fields for:
    - Question (hidden, populated via JavaScript)
    - State (hidden, populated via JavaScript)
    - AI Response (hidden, populated via JavaScript)
    
19. Visible fields should be:
    - Name (required)
    - Email (required, with email validation)

20. Form confirmation should be set to redirect to `/thank-you`.

### 4.8 Error Handling

21. Display user-friendly error messages if:
    - The state is not selected
    - The question is empty
    - The ChatGPT API fails (with fallback message)
    - Name or email validation fails

22. Errors should appear inline near the relevant field.

---

## 5. Non-Goals (Out of Scope)

- **User authentication**: This template is for anonymous visitors; no login required
- **Conversation history**: Each page load is a fresh session; no chat history persistence
- **Multiple AI exchanges**: Only one AI response per session (not a back-and-forth chat)
- **Payment processing**: No checkout or payment on this template
- **Email notifications**: Lead notifications are handled by Gravity Forms settings, not this PRD
- **Mobile app**: This is a web-only template

---

## 6. Design Considerations

### Visual Design

- **Card styling**: Use existing `.card` class with white background and border
- **Button styling**: Use existing `.btn` class for the orange gradient button
- **Typography**: Follow theme's Nunito font family
- **Icons**: Use Font Awesome icons already loaded in the theme (`fa-solid-900.woff2`)
- **Layout**: Use flexbox with existing Webflow utility classes (`.w-layout-hflex`, `.w-layout-cell`)

### Reference CSS Classes (from existing theme)

```css
/* Card container */
.card { /* white background, border-radius: 8px, padding */ }

/* Button */
.btn { /* orange gradient, border-radius: 8px, font-weight: 700 */ }

/* Form inputs */
input[type="text"], select { /* border: 1px solid #ccc, border-radius: 3px */ }

/* Layout */
.container { /* max-width: 1280px, margin: auto */ }
.w-layout-hflex { /* display: flex, flex-direction: row */ }
```

### Responsive Behavior

- Card should be full-width on mobile (< 768px)
- Input and button should stack vertically on mobile
- State dropdown should be full-width on mobile

---

## 7. Technical Considerations

### File Structure

```
/allmyhr-mmxxv/
├── aries.php                    # New template file
├── inc/
│   └── aries-settings.php       # Optional: Settings page for AI context
├── js/
│   └── aries.js                 # New: Frontend JavaScript for AJAX/character counter
└── functions.php                # Add: REST endpoint, enqueue scripts
```

### WordPress REST API Endpoint

Register a custom endpoint at `/wp-json/allmyhr/v1/aries-chat` that:
1. Validates the request (nonce, required fields)
2. Retrieves the prompt context from `get_option('aries_chatgpt_context')`
3. Calls the OpenAI API (ChatGPT-4 or GPT-3.5-turbo)
4. Returns the response as JSON

### OpenAI API Integration

- **API Key Storage**: Environment variable `OPENAI_API_KEY`
- **Model**: Use `gpt-3.5-turbo` or `gpt-4` (configurable via settings)
- **Token Limit**: Set reasonable max_tokens (e.g., 500) to control costs
- **Error Handling**: Graceful fallback if API fails

### Docker Environment Configuration

**Local Development URL**: `http://localhost:8000/`

Add to `docker-compose.yml` under the `wordpress` service environment:

```yaml
environment:
  WORDPRESS_DB_HOST: db
  WORDPRESS_DB_USER: root
  WORDPRESS_DB_PASSWORD: root
  WORDPRESS_DB_NAME: allmyhr_db_local
  OPENAI_API_KEY: ${OPENAI_API_KEY}
```

Create a `.env` file in `/Users/mattbookpro/Desktop/webdev2024/allmyhr-docker/`:

```
OPENAI_API_KEY=sk-your-api-key-here
```

Access in PHP via:
```php
$api_key = getenv('OPENAI_API_KEY');
```

### Rate Limiting

- **Limit**: 5 requests per IP per hour
- **Storage**: WordPress transients with IP-based keys
- **Exceeded Message**: "You've reached the maximum number of requests. Please try again later."
- **Reset**: Automatic after 1 hour

### Security Considerations

- Sanitize all user inputs before sending to API
- Use WordPress nonces for AJAX requests
- Enforce rate limiting (5 requests/IP/hour)
- Do not expose API key to frontend

### Performance

- Load `aries.js` only on pages using this template
- Consider caching common AI responses
- Use async/await for smooth UX during API call
- Show loading spinner during API request

### Google Analytics Event Tracking

Track the following events:

| Event Action | Event Category | Event Label | Trigger |
|--------------|----------------|-------------|---------|
| `aries_form_start` | Aries | Question Submitted | First form submission |
| `aries_ai_response` | Aries | AI Response Received | ChatGPT response displayed |
| `aries_lead_submit` | Aries | Lead Captured | Name/email submitted |
| `aries_redirect` | Aries | Thank You Redirect | Redirect to /thank-you |

Implementation via `gtag()` or `dataLayer.push()` depending on existing GA setup.

---

## 8. Success Metrics

| Metric | Target | How to Measure |
|--------|--------|----------------|
| Form completion rate | > 60% | Gravity Forms entries vs. page views |
| AI response time | < 5 seconds | Frontend timing logs |
| Error rate | < 2% | Error logs / API failure tracking |
| Lead quality | Valid email format 100% | Gravity Forms validation |

---

## 9. Resolved Questions

| Question | Resolution |
|----------|------------|
| OpenAI API Key Storage | Environment variable (`OPENAI_API_KEY` in Docker) |
| AI Context Content | HR Questions - employment law, compliance, workplace issues (see Section 4.5) |
| Rate Limiting | Yes - 5 requests per IP per hour (see Section 7) |
| Gravity Form ID | Use existing Form **ID: 12** |
| Analytics | Yes - Google Analytics event tracking (see Section 7) |
| HIPAA Disclaimer | Final text provided (see Section 4.4) |

---

## Appendix: US States List

The state dropdown should include:

```
Alabama, Alaska, Arizona, Arkansas, California, Colorado, Connecticut, 
Delaware, District of Columbia, Florida, Georgia, Hawaii, Idaho, Illinois, 
Indiana, Iowa, Kansas, Kentucky, Louisiana, Maine, Maryland, Massachusetts, 
Michigan, Minnesota, Mississippi, Missouri, Montana, Nebraska, Nevada, 
New Hampshire, New Jersey, New Mexico, New York, North Carolina, North Dakota, 
Ohio, Oklahoma, Oregon, Pennsylvania, Rhode Island, South Carolina, South Dakota, 
Tennessee, Texas, Utah, Vermont, Virginia, Washington, West Virginia, 
Wisconsin, Wyoming
```

---

*Document Version: 1.1*  
*Created: January 9, 2026*  
*Updated: January 9, 2026*  
*Status: Approved - Ready for Implementation*
