# Tasks: Aries Page Template

## Relevant Files

- `aries.php` - Main page template file with hero section and form card markup
- `js/aries.js` - Frontend JavaScript for character counter, AJAX, multi-step form, GA tracking
- `inc/aries-settings.php` - Admin settings page for AI prompt context configuration
- `inc/aries-rest-api.php` - REST API endpoint registration and ChatGPT integration logic
- `functions.php` - Include new files and enqueue aries.js conditionally
- `style.css` - Additional CSS for Aries-specific styling (character counter colors, loading states)
- `/Users/mattbookpro/Desktop/webdev2024/allmyhr-docker/docker-compose.yml` - Add OPENAI_API_KEY environment variable
- `/Users/mattbookpro/Desktop/webdev2024/allmyhr-docker/.env` - Create with OPENAI_API_KEY value

### Notes
- Gravity Form ID 12 must be configured manually in WordPress admin (hidden fields cannot be created via code)
- The `.env` file should NOT be committed to version control
- Test at `http://localhost:8000/` after Docker restart

## Instructions for Completing Tasks

IMPORTANT: As you complete each task, you must check it off in this markdown file by changing `- [ ]` to `- [x]`.

## Tasks

- [x] 0.0 Create feature branch
  - [x] 0.1 Ensure you are on `chat-demo` branch
  - [x] 0.2 Create and checkout new branch `feature/aries`

- [x] 1.0 Create Aries page template (aries.php)
  - [x] 1.1 Create `aries.php` with WordPress template header (`Template Name: Aries`)
  - [x] 1.2 Add `get_header()` and `get_footer()` calls
  - [x] 1.3 Build hero section with `the_title()` and `the_content()`
  - [x] 1.4 Create form card container with `.card` class styling
  - [x] 1.5 Add header row with Font Awesome user icon, label, and state dropdown (51 options)
  - [x] 1.6 Add input row with text input (`maxlength="256"`) and orange submit button
  - [x] 1.7 Add footer row with character counter placeholder and HIPAA disclaimer text
  - [x] 1.8 Add hidden container for AI response display (initially hidden)
  - [x] 1.9 Add hidden Gravity Form embed for step 2 (name/email fields)
  - [x] 1.10 Add responsive CSS rules for mobile layout

- [x] 2.0 Build frontend JavaScript (aries.js)
  - [x] 2.1 Create `js/aries.js` file
  - [x] 2.2 Implement live character counter that updates on input
  - [x] 2.3 Add color change logic (orange at 200+, red at 250+ characters)
  - [x] 2.4 Add form validation (state required, question not empty)
  - [x] 2.5 Implement AJAX call to `/wp-json/allmyhr/v1/aries-chat` with nonce
  - [x] 2.6 Add loading spinner/state during API request
  - [x] 2.7 Handle successful response: display AI message, show name/email fields
  - [x] 2.8 Handle error response: display user-friendly error message
  - [x] 2.9 Disable/hide original question and state dropdown after step 1
  - [x] 2.10 Populate Gravity Form hidden fields with question, state, AI response
  - [x] 2.11 Add Google Analytics event tracking (`gtag()` calls for all 4 events)
  - [x] 2.12 Enqueue script only on Aries template pages (conditional in functions.php)

- [x] 3.0 Create WordPress REST API endpoint for ChatGPT
  - [x] 3.1 Create `inc/aries-rest-api.php` file
  - [x] 3.2 Register REST route `/wp-json/allmyhr/v1/aries-chat` (POST method)
  - [x] 3.3 Add permission callback with nonce verification
  - [x] 3.4 Implement rate limiting check (5 requests/IP/hour using transients)
  - [x] 3.5 Retrieve API key from environment variable `getenv('OPENAI_API_KEY')`
  - [x] 3.6 Retrieve prompt context from `get_option('aries_chatgpt_context')`
  - [x] 3.7 Build OpenAI API request with user question, state, and context
  - [x] 3.8 Send request to OpenAI API using `wp_remote_post()`
  - [x] 3.9 Parse and return AI response as JSON
  - [x] 3.10 Implement error handling with fallback message
  - [x] 3.11 Include file in `functions.php`

- [x] 4.0 Create admin settings page (Settings > Aries Settings)
  - [x] 4.1 Create `inc/aries-settings.php` file
  - [x] 4.2 Register settings page under Settings menu using `add_options_page()`
  - [x] 4.3 Register settings fields: `aries_chatgpt_context`, `aries_openai_model`
  - [x] 4.4 Create textarea for prompt context with default value from PRD
  - [x] 4.5 Create dropdown for model selection (gpt-3.5-turbo, gpt-4)
  - [x] 4.6 Add save/update functionality with sanitization
  - [x] 4.7 Include file in `functions.php`

- [ ] 5.0 Configure Gravity Form and environment
  - [x] 5.1 Update `docker-compose.yml` to pass `OPENAI_API_KEY` environment variable
  - [ ] 5.2 Create `.env` file with placeholder for `OPENAI_API_KEY` ⚠️ MANUAL: Create `/allmyhr-docker/.env` with `OPENAI_API_KEY=sk-your-key`
  - [ ] 5.3 Restart Docker containers to load new environment variable ⚠️ MANUAL: Run `docker-compose down && docker-compose up -d`
  - [ ] 5.4 Configure Gravity Form ID 12: add hidden field for "Question" ⚠️ MANUAL: WordPress Admin
  - [ ] 5.5 Configure Gravity Form ID 12: add hidden field for "State" ⚠️ MANUAL: WordPress Admin
  - [ ] 5.6 Configure Gravity Form ID 12: add hidden field for "AI Response" ⚠️ MANUAL: WordPress Admin
  - [ ] 5.7 Ensure Name and Email fields are required with validation ⚠️ MANUAL: WordPress Admin
  - [ ] 5.8 Set form confirmation to redirect to `/thank-you` ⚠️ MANUAL: WordPress Admin
  - [ ] 5.9 Create test page in WordPress using Aries template ⚠️ MANUAL: WordPress Admin
  - [ ] 5.10 End-to-end test: submit question → receive AI response → submit lead → redirect ⚠️ MANUAL: Browser test
