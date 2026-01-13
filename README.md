# AllMyHR MMXXV Theme

A custom WordPress + WooCommerce theme for [AllMyHR](https://allmyhr.com), an HR compliance and management platform for small and mid-sized employers.

## Overview

This theme is built on the [Underscores (_s)](https://underscores.me/) starter theme with extensive customization for:
- WooCommerce subscription products
- Webflow-exported design system
- Performance-optimized animations and scripts
- Conversion-focused product displays

## Tech Stack

- **WordPress** 6.7+
- **WooCommerce** with Subscriptions
- **Webflow** CSS/JS (exported and adapted)
- **Lottie** animations (hero background)
- **Gravity Forms** (lead capture)

---

## Project Structure

```
allmyhr-mmxxv/
├── css/                      # Webflow-exported stylesheets
│   ├── all-my-hr.webflow.css # Main Webflow styles
│   ├── normalize.css
│   └── webflow.css
├── documents/                # Lottie animation files
├── fonts/                    # Font Awesome woff2 files
├── images/                   # Theme images and icons
├── inc/                      # Theme includes
│   ├── custom-header.php
│   ├── customizer.php
│   ├── template-functions.php
│   └── template-tags.php
├── js/
│   └── webflow.js            # Webflow interactions/animations
├── tasks/                    # PRDs and task documentation
├── template-parts/           # Reusable template components
│   ├── content-benefits-*.php
│   ├── content-testimonials.php
│   ├── content-faqs.php
│   ├── content-quoteform.php
│   ├── exit.php              # Exit-intent popup
│   └── ...
├── woocommerce/              # WooCommerce template overrides
│   ├── archive-product.php   # Shop/services page
│   ├── single-product.php    # Individual product page
│   ├── product-cards.php     # Product card component
│   └── ...
├── functions.php             # Theme functions and hooks
├── header.php                # Site header
├── footer.php                # Site footer
├── index.php                 # Homepage template
├── style.css                 # Theme metadata + custom styles
└── CHANGELOG.md              # Version history
```

---

## Key Files & Functionality

### `index.php` - Homepage
- Hero section with Lottie background animation
- FAQ toggles with CSS chevron animations
- **On-Demand Products section** - displays WooCommerce products
- Uses transient caching (`allmyhr_homepage_products`) for performance

### `woocommerce/product-cards.php` - Product Display
- Shared template for product cards on homepage and archive
- **Homepage**: "Buy Now" → adds to cart → redirects to checkout
- **Archive pages**: "Learn More" → links to product page
- Handles both simple and variable products

### `template-parts/exit.php` - Exit Intent Popup
- Displays promotional offer when user moves mouse toward browser top
- **Excluded from**: cart, checkout pages (uses `is_cart()`, `is_checkout()`)
- Stores dismissal in localStorage to prevent repeat shows

### `functions.php` - Key Functions
| Function | Purpose |
|----------|---------|
| `allmyhr_mmxxv_scripts()` | Enqueues CSS/JS in correct order |
| `mmxxv_product_tab_card()` | Renders product card by ID (shortcode-like) |
| `mmxxv_cart_item_count()` | Cart icon with count in header |
| `mmxxv_force_checkout_redirect_for_add_to_cart_url()` | Redirects `?add-to-cart=` URLs to checkout |
| `mmxxv_redirect_to_checkout_after_add_to_cart()` | Redirects form-based add-to-cart to checkout |
| `allmyhr_clear_homepage_product_cache()` | Clears product transient on product save |
| `allmyhr_deferred_analytics_scripts()` | Loads FullStory/GTM/gtag in footer |

---

## WooCommerce Integration

### Add-to-Cart Behavior
All add-to-cart actions redirect to checkout (no cart page stop):
1. **URL-based** (`?add-to-cart=123`) - handled by `template_redirect` hook
2. **Form-based** (product page button) - handled by `woocommerce_add_to_cart_redirect` filter

### Product Display Categories
Products show on homepage if:
- Status = `publish`
- NOT in `uncategorized` category

To hide a product from homepage: assign it ONLY to "Uncategorized"

### Subscription Products
Theme supports WooCommerce Subscriptions with:
- Custom "Setup Fee" label (renamed from "Sign-up fee")
- "Monthly"/"Annually" label replacements in checkout

---

## Performance Optimizations

### Implemented (v1.1.0)
- [x] Google Fonts via CSS preload (not JavaScript)
- [x] Analytics scripts deferred to footer
- [x] YouTube iframe lazy-loaded (facade pattern)
- [x] FAQ arrows use CSS instead of Lottie
- [x] Product query transient caching (1 hour)
- [x] Resource hints (preconnect/dns-prefetch)

### Transient Cache Keys
| Key | Purpose | Expiration |
|-----|---------|------------|
| `allmyhr_homepage_products` | Homepage product IDs | 1 hour |

---

## AI Assistant Context

> **For AI assistants working on this codebase:**

### Important Conventions
1. **Webflow classes** - Many CSS classes come from Webflow export (e.g., `w-layout-layout`, `w-nav-link`). Don't rename these.
2. **`data-w-id` attributes** - Required for Webflow.js interactions/animations. Preserve these.
3. **Font Awesome** - Icons use Unicode content in `::before` pseudo-elements (e.g., `\f078` for chevron)
4. **Template parts** - Prefer `get_template_part()` over inline HTML for reusable components

### Common Tasks
- **Add new product section**: Copy pattern from `index.php` On-Demand section
- **Modify product cards**: Edit `woocommerce/product-cards.php` (check `$is_homepage` conditional)
- **Change checkout redirect**: Modify filters in `functions.php`
- **Update exit popup**: Edit `template-parts/exit.php`

### Files to Check Before Editing
| If editing... | Also check... |
|---------------|---------------|
| Product display | `product-cards.php`, `index.php`, `archive-product.php` |
| Checkout flow | `functions.php` (search "checkout" or "add-to-cart") |
| Header/scripts | `header.php`, `functions.php` (`allmyhr_mmxxv_scripts`) |
| Animations | `css/all-my-hr.webflow.css`, `js/webflow.js` |

### Versioning
- Update `Version:` in `style.css` header
- Update `_S_VERSION` constant in `functions.php`
- Document changes in `CHANGELOG.md`

---

## Development

### Requirements
- Node.js
- Composer

### Setup
```bash
composer install
npm install
```

### CLI Commands
```bash
composer lint:wpcs    # PHP coding standards
composer lint:php     # PHP syntax check
npm run compile:css   # Compile SASS
npm run watch         # Watch SASS files
npm run bundle        # Create distribution zip
```

---

## Documentation

- `CHANGELOG.md` - Version history
- `tasks/prd-*.md` - Product requirement documents
- `tasks/tasks-*.md` - Implementation task lists
- `.ai/` - AI workflow prompts (PRD generation, task generation)

---

## License

GNU General Public License v2 or later

Based on [Underscores](https://underscores.me/) by Automattic

---

# AI Dev Workflow

This repository includes a structured, AI-assisted development workflow designed to be used inside Cursor (or a similar AI-enabled editor).

It is a process for turning vague ideas into:
1. Clear requirements (PRD)
2. Executable task plans
3. Deterministic, step-by-step implementation

This workflow reduces ambiguity, prevents scope creep, and makes AI-assisted development predictable and reviewable.

---

## Workflow Overview

**Do not skip steps.**

| Phase | Purpose | Output |
|-------|---------|--------|
| Phase 0 | Generate PRD (what & why) | `/tasks/prd-[feature-name].md` |
| Phase 0.5 | Generate AGENT.md (how this repo runs) | `.ai/AGENT.md` |
| Phase 1 | Generate Tasks (what needs to be done) | `/tasks/tasks-[feature-name].md` |
| Phase 2 | Execute Tasks (one step at a time) | Implemented code |

Each phase produces a file artifact that becomes the input to the next phase.

---

## Phase 0 — Generate a PRD (What & Why)

### Purpose
Clarify the feature or project before planning or coding.

### How to do it
1. Open `.ai/create-prd.prompt.md`
2. Copy the entire file
3. Paste it into Cursor Chat
4. Append one line at the bottom:
   ```
   Initial prompt: <describe the feature or project>
   ```
5. Send the message
6. Answer the clarifying questions (use the letter/number options)
7. When the AI outputs a PRD:
   - Copy it
   - Save it as `/tasks/prd-[feature-name].md`

**Do not start coding yet.**

---

## Phase 0.5 — Generate AGENT.md (How This Repo Works)

### Purpose
Define how to run, test, lint, build, and work in this specific repository.
This prevents the execution loop from guessing commands.

### How to do it
1. Open `.ai/generate-agent.prompt.md`
2. Copy the entire file
3. Paste it into Cursor Chat
4. Append:
   ```
   Initial prompt: This repo is <brief description>
   ```
5. Answer the clarifying questions
6. Save the output as `.ai/AGENT.md`

This file is required before execution begins.

---

## Phase 1 — Generate Tasks (What Needs to Be Done)

### Purpose
Create a clear, ordered, executable task list.

### How to do it
1. Open `.ai/generate-tasks.prompt.md`
2. Copy the entire file
3. Paste it into Cursor Chat
4. Append:
   ```
   Use the following requirements: /tasks/prd-[feature-name].md
   ```
5. The AI will generate high-level parent tasks only
6. Review them
7. Reply with: `Go`
8. The AI will generate:
   - A full task list with sub-tasks
   - A list of relevant files
9. Save:
   - `/tasks/tasks-[feature-name].md`
   - `@fix_plan.md` (created by copying ONLY the `## Tasks` section)

**Do not implement anything yet.**

---

## Phase 2 — Execute Tasks (One Step at a Time)

### Purpose
Implement the feature deterministically, without redesign or scope creep.

### How to do it
1. Open `.ai/execution-loop.prompt.md`
2. Copy the entire file
3. Paste it into Cursor Chat

From this point forward, the AI must:
- Read the PRD
- Read the task list
- Execute one sub-task at a time
- Check off tasks as they are completed
- Mirror progress in `@fix_plan.md`

If ambiguity is encountered, the AI must stop and ask.

---

## Important Rules

- Never skip phases
- Never regenerate tasks during execution
- Always check off tasks as they are completed
- Never redesign scope during execution
- If a decision is required, stop and clarify

---

## Mental Model

| Artifact | Role |
|----------|------|
| PRD | Intent (what & why) |
| Tasks | Plan (what to do) |
| Execution loop | Obedience (how it's done) |

Each phase narrows ambiguity instead of increasing it.

---

## AI Workflow File Structure

```
.ai/
  create-prd.prompt.md        # Phase 0: PRD generation
  generate-agent.prompt.md    # Phase 0.5: Agent config
  generate-tasks.prompt.md    # Phase 1: Task generation
  execution-loop.prompt.md    # Phase 2: Execution
  AGENT.md                    # Repo-specific commands/config

tasks/
  prd-[feature-name].md       # Requirements document
  tasks-[feature-name].md     # Task breakdown

@fix_plan.md                  # Active task checklist
```
