# Rule: Generating AGENT.md (Repository Execution Context)

## Goal
To guide an AI assistant in generating a repository-specific `.ai/AGENT.md` file that describes how to run, test, lint, build, and work in this codebase—without guessing.

## Process
1. Receive Initial Prompt: The user provides a brief description of the repo.
2. Ask Clarifying Questions: Ask only the most essential 3–5 questions needed to write an accurate `.ai/AGENT.md`. Provide options (A, B, C, D…) so the user can reply with selections like "1B, 2A, 3D".
3. Generate AGENT.md: Based on the user's answers, generate `.ai/AGENT.md` using the structure below.
4. Save: Save as `.ai/AGENT.md`.

## Formatting Requirements (Questions)
- Number all questions (1, 2, 3…)
- Provide options for each question (A, B, C…)
- Make it easy to respond with selections

## Clarifying Focus Areas
- Project type and stack
- Package manager
- Run/test/lint/build commands
- Environment variable names (names only, no values)
- Branch naming rules

## Output (AGENT.md Structure)

# Agent Execution Context

## Project Type
## Primary Language(s)
## Frameworks / Platforms
## Package / Dependency Manager

## How to Run the Project
- ...

## How to Run Tests
- Run all:
- Run single:

## Linting / Formatting (if applicable)
- Lint:
- Format:

## Build / Compile (if applicable)
- ...

## Environment Notes
- Required env var names (no values)

## Branching Rules
- ...

## Constraints
- Files or areas that must not be modified

