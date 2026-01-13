# Tasks: ASK ARIES - AI-Powered HR Q&A Chatbox

## Relevant Files

- `ask-aries.php` - New WordPress page template (CREATE)
- `template-parts/content-ask-aries.php` - Chat interface HTML markup (CREATE)
- `js/ask-aries.js` - Frontend JavaScript for AJAX, validation, character counter (CREATE)
- `functions.php` - Add AJAX handlers, script enqueue, session management (MODIFY)
- `style.css` - Add ASK ARIES-specific styles (MODIFY)
- `wp-config.php` - Add `ALLMYHR_OPENAI_API_KEY` constant (MODIFY - manual step)

### Notes
- No automated tests exist in this project per AGENT.md
- Do NOT modify Webflow-exported CSS files (`css/all-my-hr.webflow.css`, `css/webflow.css`)
- Update version in `style.css` and `_S_VERSION` in `functions.php` when complete
- Document changes in `CHANGELOG.md`

## Instructions for Completing Tasks

IMPORTANT: As you complete each task, you must check it off in this markdown file by changing `- [ ]` to `- [x]`.

## Tasks

- [x] 0.0 Create feature branch
  - [x] 0.1 Create and checkout branch `feature/ask-aries`

- [x] 1.0 Create page template and base HTML structure
  - [x] 1.1 Create `ask-aries.php` with Template Name header comment
  - [x] 1.2 Add basic page structure following `landing.php` pattern (get_header, main, get_footer)
  - [x] 1.3 Create `template-parts/content-ask-aries.php` with card container markup
  - [x] 1.4 Include template part in `ask-aries.php` using `get_template_part()`
  - [x] 1.5 Add placeholder sections for: input area, response area, form area

- [x] 2.0 Build chat input interface (frontend)
  - [x] 2.1 Add jurisdiction `<select>` dropdown with Federal + 50 states alphabetically
  - [x] 2.2 Add user icon (Font Awesome) and "To ask a question:" label
  - [x] 2.3 Add question `<input type="text">` with placeholder "Ask ARIES..." and maxlength="256"
  - [x] 2.4 Add "Ask" button with `.btn` class styling
  - [x] 2.5 Add character counter element (0/256)
  - [x] 2.6 Add HIPAA warning text below input
  - [x] 2.7 Create `js/ask-aries.js` with character counter live update
  - [x] 2.8 Add form validation (require jurisdiction + question before submit)
  - [x] 2.9 Enqueue `ask-aries.js` in `functions.php` (only on ask-aries template)

- [x] 3.0 Implement OpenAI API integration (backend)
  - [x] 3.1 Add `ALLMYHR_OPENAI_API_KEY` constant check in `functions.php`
  - [x] 3.2 Create `handle_ask_aries_query()` AJAX handler function
  - [x] 3.3 Register AJAX actions for both logged-in and guest users
  - [x] 3.4 Implement nonce verification in AJAX handler
  - [x] 3.5 Sanitize and validate incoming question and jurisdiction
  - [x] 3.6 Build OpenAI API request with system prompt (ARIES persona, jurisdiction context, 500 word limit)
  - [x] 3.7 Make server-side cURL/wp_remote_post request to OpenAI API
  - [x] 3.8 Parse API response and return JSON to frontend
  - [x] 3.9 Handle API errors and return appropriate error message
  - [x] 3.10 Add loading spinner display in JavaScript during API call
  - [x] 3.11 Display AI response in response card with disclaimer appended
  - [x] 3.12 Localize script with AJAX URL and nonce using `wp_localize_script()`

- [x] 4.0 Add session-based rate limiting
  - [x] 4.1 Initialize PHP session in `functions.php` (on init hook, before headers)
  - [x] 4.2 Create session variable to track question count per session
  - [x] 4.3 Increment counter on each successful AJAX query
  - [x] 4.4 Check counter before processing query (limit: 3)
  - [x] 4.5 Return rate limit error response when limit exceeded
  - [x] 4.6 Display rate limit message in frontend UI

- [x] 5.0 Integrate Gravity Form with hidden field population
  - [x] 5.1 Add Gravity Form shortcode to response area (initially hidden)
  - [x] 5.2 Show form container after AI response is displayed
  - [x] 5.3 Add JavaScript to populate hidden field `input_3` (Question)
  - [x] 5.4 Add JavaScript to populate hidden field `input_4` (State/Jurisdiction)
  - [x] 5.5 Add JavaScript to populate hidden field `input_5` (AI Response)
  - [x] 5.6 Configure Gravity Form confirmation to redirect to `/confirmation-page`

- [x] 6.0 Add responsive styles and final polish
  - [x] 6.1 Add ASK ARIES styles to `style.css` (card, input row, response card, disclaimer)
  - [x] 6.2 Style response card with distinct background (light gray/blue tint)
  - [x] 6.3 Style disclaimer text (smaller, italicized, bordered)
  - [x] 6.4 Add loading spinner styles
  - [x] 6.5 Add mobile responsive styles (stack elements at < 768px)
  - [x] 6.6 Ensure touch-friendly tap targets on mobile
  - [x] 6.7 Test complete flow end-to-end (requires Docker + API key)
  - [x] 6.8 Update version in `style.css` and `_S_VERSION` in `functions.php`
  - [x] 6.9 Document changes in `CHANGELOG.md`
