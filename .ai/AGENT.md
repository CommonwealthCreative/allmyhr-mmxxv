# Agent Execution Context

## Project Type
WordPress theme (WooCommerce-enabled)

## Primary Language(s)
- PHP
- JavaScript
- CSS/SASS

## Frameworks / Platforms
- WordPress 6.7+
- WooCommerce with Subscriptions
- Webflow CSS/JS (exported and adapted)
- Gravity Forms
- Lottie animations

## Package / Dependency Manager
- Composer (PHP)
- npm (Node.js)

## How to Run the Project
- This theme runs inside Docker via the `allmyhr-docker` setup
- The theme directory is mounted at: `wordpress/wp-content/themes/allmyhr-mmxxv`
- Start Docker containers to run the local WordPress environment
- Access the site at the Docker-configured local URL

## How to Run Tests
- No automated tests currently

## Linting / Formatting (if applicable)
- Lint PHP (WPCS): `composer lint:wpcs`
- Check PHP syntax: `composer lint:php`

## Build / Compile (if applicable)
- Compile SASS: `npm run compile:css`
- Watch SASS: `npm run watch`
- Create distribution zip: `npm run bundle`

## Environment Notes
- Required env var names (no values): None (all config in `wp-config.php` or database)
- For ASK ARIES feature: Add `ALLMYHR_OPENAI_API_KEY` constant to `wp-config.php`

## Branching Rules
- `feature/[feature-name]` for new features

## Constraints
- **DO NOT MODIFY** Webflow-exported CSS files:
  - `css/all-my-hr.webflow.css`
  - `css/webflow.css`
  - `css/normalize.css`
- Preserve all `data-w-id` attributes (required for Webflow.js interactions)
- Preserve Webflow class names (e.g., `w-layout-*`, `w-nav-*`)

## Additional Context
- Font Awesome icons use Unicode in `::before` pseudo-elements (e.g., `\f078`)
- Prefer `get_template_part()` for reusable components
- Update version in both `style.css` header AND `_S_VERSION` in `functions.php`
- Document all changes in `CHANGELOG.md`