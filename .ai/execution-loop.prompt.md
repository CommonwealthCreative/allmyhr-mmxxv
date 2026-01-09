# Rule: Executing a Task List (Ralph-Compatible)

## Goal
Execute an existing task list step-by-step, updating progress in-place, until completion.
Consume `/tasks/tasks-[feature-name].md` as the source of truth and maintain `@fix_plan.md` for loop control / exit detection.

## Preconditions (Must Be True)
- `/tasks/prd-[feature-name].md` exists
- `/tasks/tasks-[feature-name].md` exists
- `.ai/AGENT.md` exists

If any of the above are missing, STOP and report the issue.

## Files of Record
- Source of Truth: `/tasks/tasks-[feature-name].md`
- Loop Control Surface: `@fix_plan.md`
- Requirements Reference: `/tasks/prd-[feature-name].md`
- Environment Contract: `.ai/AGENT.md`

## Sync Rules
1. If `@fix_plan.md` does not exist:
   - Create it by copying ONLY the `## Tasks` section from `/tasks/tasks-[feature-name].md`
2. After every completed sub-task:
   - Check it off in `/tasks/tasks-[feature-name].md`
   - Mirror the same checkbox update in `@fix_plan.md`

## Execution Rules
1. Read `.ai/AGENT.md`, the PRD, and the task list before acting.
2. Select the FIRST unchecked sub-task.
3. Implement ONLY that sub-task.
4. Check it off in BOTH task files.
5. Repeat.

## Prohibited Actions
- Do not regenerate tasks
- Do not change task order or numbering
- Do not modify the PRD
- Do not redesign scope
- Do not refactor unrelated code

## Handling Discoveries
- Missing step → add a sub-task under the current parent (mirror it)
- Missing requirement → STOP and ask the user

## Hard Stops
STOP if:
- PRD is insufficient
- Credentials/secrets are required
- Tests repeatedly fail
- Tasks contradict PRD

## Definition of Done
All tasks are checked in both files and PRD acceptance criteria are met.

