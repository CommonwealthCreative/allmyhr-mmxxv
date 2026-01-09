# Agent Execution Context

## Project Type
WordPress Theme

## Primary Language(s)
- PHP
- JavaScript
- CSS

## Frameworks / Platforms
- WordPress 6.7+
- WooCommerce
- Gravity Forms
- Docker (local development)

## Package / Dependency Manager
None actively used (npm/Composer configs exist but not required for development)

## How to Run the Project

1. Navigate to Docker directory:
   ```bash
   cd /Users/mattbookpro/Desktop/webdev2024/allmyhr-docker
   ```

2. Start the Docker environment:
   ```bash
   docker-compose up -d
   ```

3. Access the site at: `http://localhost:8000/`

4. Stop the environment:
   ```bash
   docker-compose down
   ```

## How to Run Tests
- No automated tests currently configured

## Linting / Formatting
- Not actively used
- Legacy configs exist (`phpcs.xml.dist`, `package.json` scripts) but are optional

## Build / Compile
- Not required - CSS/JS are served directly
- Theme uses pre-built Webflow CSS (`/css/all-my-hr.webflow.css`)

## Environment Notes
Required environment variable names (no values):
- `OPENAI_API_KEY` (for Aries template ChatGPT integration)

Docker environment variables (defined in `docker-compose.yml`):
- `WORDPRESS_DB_HOST`
- `WORDPRESS_DB_USER`
- `WORDPRESS_DB_PASSWORD`
- `WORDPRESS_DB_NAME`

## Branching Rules
- Current branch: `chat-demo`
- Feature branches: `feature/[feature-name]`

## Constraints
Files/directories that must NOT be modified:
- `/vendor/` - Composer dependencies (if installed)
- `/node_modules/` - npm dependencies (if installed)
