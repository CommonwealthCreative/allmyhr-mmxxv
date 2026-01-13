# PRD: ASK ARIES - AI-Powered HR Q&A Chatbox

## 1. Introduction/Overview

ASK ARIES is a new WordPress page template for the AllMyHR website that provides visitors with an AI-powered HR question-and-answer interface. Users can select a jurisdiction (Federal or any US State), ask an HR-related question, and receive an instant AI-generated response powered by OpenAI's ChatGPT.

The feature serves as both a value-add tool for visitors and a lead generation mechanism. After receiving their AI response, users must provide their name and email via Gravity Form to continue, capturing qualified leads who are actively seeking HR guidance.

## 2. Goals

- **Provide immediate value** to website visitors by answering basic HR compliance questions
- **Capture qualified leads** through a gated form that collects user information after delivering value
- **Reduce support burden** by addressing common HR questions automatically
- **Demonstrate expertise** in HR compliance across all 50 states and federal regulations
- **Increase engagement** and time-on-site with an interactive tool

## 3. User Stories

| ID | As a... | I want to... | So that... |
|----|---------|--------------|------------|
| US-1 | Website visitor | Select my state/federal jurisdiction | I get answers relevant to my location |
| US-2 | Website visitor | Type my HR question and get an instant answer | I can quickly resolve my HR concern |
| US-3 | Website visitor | See a clear disclaimer with the AI response | I understand this is not legal advice |
| US-4 | Website visitor | Provide my contact info after getting value | I can access the full response and potentially get more help |
| US-5 | Site admin | View submitted questions and user info | I can follow up with qualified leads |
| US-6 | Site admin | Securely store the API key | The system is protected from unauthorized access |

## 4. Functional Requirements

### 4.1 Page Template & Layout

- **FR-1**: Create a new WordPress page template `ask-aries.php` selectable from the Page Attributes panel
- **FR-2**: Create template part `template-parts/content-ask-aries.php` containing the chat interface
- **FR-3**: The chat interface must be contained in a card-style container with rounded corners and subtle shadow
- **FR-4**: Use existing theme styling (Nunito font, Webflow CSS classes, existing color palette)

### 4.2 Chat Input Interface

- **FR-5**: Display a jurisdiction dropdown with:
  - Default placeholder: "Select a Federal or State Jurisdiction"
  - "Federal" as the first selectable option
  - All 50 US states listed alphabetically
- **FR-6**: Display a text input field with:
  - Placeholder text: "Ask ARIES..."
  - Maximum character limit of 256 characters
  - Live character counter displaying "X/256"
- **FR-7**: Display an "Ask" button with orange/peach accent styling (existing `.btn` class)
- **FR-8**: Display static helper text: "Please exclude personal and HIPAA data from your questions."
- **FR-9**: Display a user icon (Font Awesome) next to the "To ask a question:" label
- **FR-10**: Validate that both jurisdiction is selected AND question is entered before allowing submission

### 4.3 AI Response & Integration

- **FR-11**: On form submission, display a loading spinner while awaiting API response
- **FR-12**: Send the user's question and selected jurisdiction to OpenAI's ChatGPT API via WordPress AJAX
- **FR-13**: Limit AI response to a maximum of 500 words
- **FR-14**: Display the AI response in a distinct response card/bubble below the input area
- **FR-15**: Append the following disclaimer to every AI response:
  > "This information is provided for general educational purposes only and does not constitute legal advice. For specific guidance regarding your situation, please consult with a qualified HR professional or attorney licensed in your jurisdiction."
- **FR-16**: If the API call fails, display: "Something went wrong. Please try again."

### 4.4 Rate Limiting

- **FR-17**: Implement session-based rate limiting of 3 questions per user session
- **FR-18**: After reaching the limit, display a message: "You've reached the maximum number of questions for this session. Please provide your information below to continue."
- **FR-19**: Track question count using PHP sessions or browser sessionStorage

### 4.5 Gravity Form Integration

- **FR-20**: After displaying the AI response, render Gravity Form ID 12 below the response
- **FR-21**: Before form display, populate the following hidden fields via JavaScript:
  - Field 3 (Question): User's original question text
  - Field 4 (State): Selected jurisdiction value
  - Field 5 (AI Response): The complete AI-generated response
- **FR-22**: Use Gravity Form shortcode: `[gravityform id="12" title="false" description="false" ajax="true"]`
- **FR-23**: On successful Gravity Form submission, redirect user to `/confirmation-page`

### 4.6 Security & API Key Management

- **FR-24**: Store the OpenAI API key as a constant in `wp-config.php`: `define('ALLMYHR_OPENAI_API_KEY', 'sk-...');`
- **FR-25**: Never expose the API key in frontend JavaScript or HTML source
- **FR-26**: All AJAX requests must include WordPress nonce verification
- **FR-27**: Sanitize and escape all user inputs before processing
- **FR-28**: API calls must be made server-side only (via PHP)

### 4.7 Responsive Design

- **FR-29**: On mobile devices (< 768px), stack form elements vertically
- **FR-30**: Ensure touch-friendly input sizes and button tap targets

## 5. Non-Goals (Out of Scope)

- **NG-1**: Multi-turn conversation/chat history (this is single question-answer only)
- **NG-2**: User account creation or login requirement
- **NG-3**: Saving chat history to a database for user retrieval
- **NG-4**: Integration with other AI providers (OpenAI only)
- **NG-5**: Admin dashboard for viewing/managing questions (use Gravity Forms entries)
- **NG-6**: Custom AI training or fine-tuning
- **NG-7**: Multi-language support

## 6. Design Considerations

### Visual Layout

```
┌──────────────────────────────────────────────────────────────────┐
│  👤 To ask a question:   [Select a Federal or State Jurisdiction ▼] │
│                                                                      │
│  ┌────────────────────────────────────────────────────┐  ┌───────┐  │
│  │ Ask ARIES...                                       │  │  Ask  │  │
│  └────────────────────────────────────────────────────┘  └───────┘  │
│                                                                      │
│  0/256    Please exclude personal and HIPAA data from your questions.│
└──────────────────────────────────────────────────────────────────────┘

[After submission - Response Area]
┌──────────────────────────────────────────────────────────────────┐
│  🤖 ARIES Response:                                               │
│                                                                    │
│  [AI-generated response text here...]                              │
│                                                                    │
│  ─────────────────────────────────────────────────────────────    │
│  ⚠️ Disclaimer: This information is provided for general          │
│  educational purposes only and does not constitute legal advice...│
└──────────────────────────────────────────────────────────────────┘

[Gravity Form appears here]
┌──────────────────────────────────────────────────────────────────┐
│  To continue, please provide your information:                    │
│                                                                    │
│  Name: [________________]                                          │
│  Email: [________________]                                         │
│                                                                    │
│  [Submit]                                                          │
└──────────────────────────────────────────────────────────────────┘
```

### Color & Styling

- Use existing theme orange/peach for primary action buttons
- Response card should have a subtle background differentiation (light gray or light blue tint)
- Disclaimer should be visually distinct (smaller text, italicized, bordered)

## 7. Technical Considerations

### Files to Create/Modify

| File | Action | Purpose |
|------|--------|---------|
| `ask-aries.php` | CREATE | WordPress page template |
| `template-parts/content-ask-aries.php` | CREATE | Chat interface HTML markup |
| `js/ask-aries.js` | CREATE | Frontend JavaScript (AJAX, validation, character counter) |
| `functions.php` | MODIFY | Add AJAX handlers, script enqueue |
| `style.css` | MODIFY | Add ASK ARIES-specific styles |
| `wp-config.php` | MODIFY | Add `ALLMYHR_OPENAI_API_KEY` constant |

### OpenAI API Integration

- Use GPT-4 or GPT-3.5-turbo model
- System prompt should include:
  - Context: "You are ARIES, an HR compliance assistant for AllMyHR"
  - Jurisdiction context from user selection
  - Instruction to keep responses under 500 words
  - Professional, helpful tone
  - Reminder to include that specific situations may vary

### WordPress AJAX Handler

```php
// Action hooks needed:
add_action('wp_ajax_ask_aries_query', 'handle_ask_aries_query');
add_action('wp_ajax_nopriv_ask_aries_query', 'handle_ask_aries_query');
```

### Session Rate Limiting

- Use `$_SESSION` with `session_start()` to track question count
- Alternatively, use `sessionStorage` on frontend with server-side validation

## 8. Success Metrics

| Metric | Target | Measurement Method |
|--------|--------|-------------------|
| Form Completion Rate | > 60% of users who receive AI response | Gravity Forms analytics |
| Questions Asked | Track volume | Custom counter or Gravity Forms entries |
| Page Engagement | Avg. time on page > 2 minutes | Google Analytics |
| Lead Quality | Follow-up conversion rate | CRM tracking |
| Error Rate | < 5% of API calls fail | Error logging |

## 9. Open Questions

- [ ] What specific OpenAI model should be used? (GPT-4, GPT-3.5-turbo, GPT-4-turbo)
- [ ] Should there be any content filtering beyond OpenAI's built-in moderation?
- [ ] What is the URL structure for the ASK ARIES page? (e.g., `/ask-aries`, `/hr-assistant`)
- [ ] Should questions/responses be logged to a custom database table for analytics beyond Gravity Forms?
- [ ] Is there a fallback if OpenAI API is down for extended period?

---

*Document Version: 1.0*  
*Created: January 13, 2026*  
*Feature Name: ask-aries*
