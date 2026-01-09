#!/usr/bin/env bash
set -euo pipefail

mkdir -p .ai tasks .vscode scripts

# Create placeholder files only if missing
touch tasks/.gitkeep
touch @fix_plan.md

if [ ! -f ".ai/AGENT.md" ]; then
cat > .ai/AGENT.md <<'EOF'
# Agent Execution Context

## Project Type
TBD

## Primary Language(s)
TBD

## Frameworks / Platforms
TBD

## Package / Dependency Manager
TBD

## How to Run the Project
TBD

## How to Run Tests
TBD

## Linting / Formatting (if applicable)
TBD

## Build / Compile (if applicable)
TBD

## Environment Notes
- Required env var names (no values): TBD

## Branching Rules
feature/[feature-name]

## Constraints
TBD
EOF
fi

chmod +x scripts/install-ai-workflow.sh

echo "Installed AI workflow scaffolding."
echo "Next: add the .ai/*.prompt.md files and README.md from the starter repo."

