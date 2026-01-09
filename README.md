# AI Dev Workflow Starter

This repository defines a structured, AI-assisted development workflow designed to be used inside Cursor (or a similar AI-enabled editor).

It is not a codebase by itself.
It is a process for turning vague ideas into:
1) clear requirements
2) executable task plans
3) deterministic, step-by-step implementation

This workflow is designed to reduce ambiguity, prevent scope creep, and make AI-assisted development predictable and reviewable.

---

## What This Repo Is (and Is Not)

### This repo is:
- a set of prompt contracts and rules
- a repeatable workflow for features or full applications
- a control system for AI behavior across planning and execution

### This repo is not:
- a framework
- a CLI tool
- something you "run"
- a place where AI automatically reads files without instruction

You will copy and paste prompts from this repo into Cursor Chat or Agent mode.

---

## Prerequisites

- You are using Cursor
- You can use Cursor Chat or Agent mode
- You are comfortable copying/pasting prompts
- You understand basic Git workflows

---

## Workflow (Start Here)

Do not skip steps.

Phase 0   → Generate PRD (what & why)  
Phase 0.5 → Generate AGENT.md (how this repo runs)  
Phase 1   → Generate Tasks (what needs to be done)  
Phase 2   → Execute Tasks (one step at a time)

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

   Initial prompt: <describe the feature or project>

5. Send the message
6. Answer the clarifying questions (use the letter/number options)
7. When the AI outputs a PRD:
   - copy it
   - save it as `/tasks/prd-[feature-name].md`

Do not start coding yet.

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

   Initial prompt: This repo is <brief description>

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

   Use the following requirements: /tasks/prd-[feature-name].md

5. The AI will generate high-level parent tasks only
6. Review them
7. Reply with:

   Go

8. The AI will generate:
   - a full task list with sub-tasks
   - a list of relevant files
9. Save:
   - `/tasks/tasks-[feature-name].md`
   - `@fix_plan.md` (created by copying ONLY the `## Tasks` section)

Do not implement anything yet.

---

## Phase 2 — Execute Tasks (One Step at a Time)

### Purpose
Implement the feature deterministically, without redesign or scope creep.

### How to do it
1. Open `.ai/execution-loop.prompt.md`
2. Copy the entire file
3. Paste it into Cursor Chat

From this point forward, the AI must:
- read the PRD
- read the task list
- execute one sub-task at a time
- check off tasks as they are completed
- mirror progress in `@fix_plan.md`

If ambiguity is encountered, the AI must stop and ask.

---

## Important Rules

- never skip phases
- never regenerate tasks during execution
- always check off tasks as they are completed
- never redesign scope during execution
- if a decision is required, stop and clarify

---

## Mental Model

- PRD = intent (what & why)
- Tasks = plan (what to do)
- Execution loop = obedience (how it's done)

Each phase narrows ambiguity instead of increasing it.

---

## Cursor Snippets

This repo includes Cursor/VS Code snippets at:
`.vscode/ai-dev-workflow.code-snippets`

Type these in the editor to insert run instructions:
- `ai:prd`
- `ai:agent`
- `ai:tasks`
- `ai:exec`

---

## Repo Structure

.ai/
  create-prd.prompt.md
  generate-agent.prompt.md
  generate-tasks.prompt.md
  execution-loop.prompt.md
  AGENT.md

tasks/
  prd-[feature-name].md
  tasks-[feature-name].md

@fix_plan.md

---

# _s (Underscores Theme)

[![Build Status](https://travis-ci.org/Automattic/_s.svg?branch=master)](https://travis-ci.org/Automattic/_s)

Hi. I'm a starter theme called `_s`, or `underscores`, if you like. I'm a theme meant for hacking so don't use me as a Parent Theme. Instead try turning me into the next, most awesome, WordPress theme out there. That's what I'm here for.

My ultra-minimal CSS might make me look like theme tartare but that means less stuff to get in your way when you're designing your awesome theme. Here are some of the other more interesting things you'll find here:

* A modern workflow with a pre-made command-line interface to turn your project into a more pleasant experience.
* A just right amount of lean, well-commented, modern, HTML5 templates.
* A custom header implementation in `inc/custom-header.php`. Just add the code snippet found in the comments of `inc/custom-header.php` to your `header.php` template.
* Custom template tags in `inc/template-tags.php` that keep your templates clean and neat and prevent code duplication.
* Some small tweaks in `inc/template-functions.php` that can improve your theming experience.
* A script at `js/navigation.js` that makes your menu a toggled dropdown on small screens (like your phone), ready for CSS artistry. It's enqueued in `functions.php`.
* 2 sample layouts in `sass/layouts/` made using CSS Grid for a sidebar on either side of your content. Just uncomment the layout of your choice in `sass/style.scss`.
Note: `.no-sidebar` styles are automatically loaded.
* Smartly organized starter CSS in `style.css` that will help you to quickly get your design off the ground.
* Full support for `WooCommerce plugin` integration with hooks in `inc/woocommerce.php`, styling override woocommerce.css with product gallery features (zoom, swipe, lightbox) enabled.
* Licensed under GPLv2 or later. :) Use it to make something cool.

Installation
---------------

### Requirements

`_s` requires the following dependencies:

- [Node.js](https://nodejs.org/)
- [Composer](https://getcomposer.org/)

### Quick Start

Clone or download this repository, change its name to something else (like, say, `megatherium-is-awesome`), and then you'll need to do a six-step find and replace on the name in all the templates.

1. Search for `'_s'` (inside single quotations) to capture the text domain and replace with: `'megatherium-is-awesome'`.
2. Search for `_s_` to capture all the functions names and replace with: `megatherium_is_awesome_`.
3. Search for `Text Domain: _s` in `style.css` and replace with: `Text Domain: megatherium-is-awesome`.
4. Search for <code>&nbsp;_s</code> (with a space before it) to capture DocBlocks and replace with: <code>&nbsp;Megatherium_is_Awesome</code>.
5. Search for `_s-` to capture prefixed handles and replace with: `megatherium-is-awesome-`.
6. Search for `_S_` (in uppercase) to capture constants and replace with: `MEGATHERIUM_IS_AWESOME_`.

Then, update the stylesheet header in `style.css`, the links in `footer.php` with your own information and rename `_s.pot` from `languages` folder to use the theme's slug. Next, update or delete this readme.

### Setup

To start using all the tools that come with `_s`  you need to install the necessary Node.js and Composer dependencies :

```sh
$ composer install
$ npm install
```

### Available CLI commands

`_s` comes packed with CLI commands tailored for WordPress theme development :

- `composer lint:wpcs` : checks all PHP files against [PHP Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/php/).
- `composer lint:php` : checks all PHP files for syntax errors.
- `composer make-pot` : generates a .pot file in the `languages/` directory.
- `npm run compile:css` : compiles SASS files to css.
- `npm run compile:rtl` : generates an RTL stylesheet.
- `npm run watch` : watches all SASS files and recompiles them to css when they change.
- `npm run lint:scss` : checks all SASS files against [CSS Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/css/).
- `npm run lint:js` : checks all JavaScript files against [JavaScript Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/javascript/).
- `npm run bundle` : generates a .zip archive for distribution, excluding development and system files.

Now you're ready to go! The next step is easy to say, but harder to do: make an awesome WordPress theme. :)

Good luck!
