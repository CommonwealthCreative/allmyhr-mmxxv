# Rule: Generating a Task List from User Requirements

## Goal
To guide an AI assistant in creating a detailed, step-by-step task list in Markdown format based on user requirements, feature requests, or existing documentation. The task list should guide a developer through implementation.

## Output
- Format: Markdown (.md)
- Location: /tasks/
- Filename: tasks-[feature-name].md (e.g., tasks-user-profile-editing.md)

## Process

1. Receive Requirements  
   The user provides a feature request, task description, or points to existing documentation (e.g., a PRD).

2. Analyze Requirements  
   Analyze the functional requirements, user needs, and implementation scope from the provided information.

3. Phase 1: Generate Parent Tasks  
   - Create the file and generate the main, high-level tasks required to implement the feature.
   - IMPORTANT: Always include task **0.0 Create feature branch** as the first task, unless the user explicitly requests not to create a branch.
   - Use judgement to generate ~5 high-level tasks.
   - Do NOT include sub-tasks yet.
   - Present the tasks and then say:

     "I have generated the high-level tasks based on your requirements.  
     Ready to generate the sub-tasks? Respond with 'Go' to proceed."

4. Wait for Confirmation  
   Pause execution until the user responds with **"Go"**.

5. Phase 2: Generate Sub-Tasks  
   - Break down each parent task into smaller, actionable sub-tasks.
   - Ensure sub-tasks logically follow from the parent task and fully cover the implied implementation work.

6. Identify Relevant Files  
   - Identify files likely to be created or modified.
   - Include corresponding test files where applicable.

7. Generate Final Output  
   Combine:
   - Relevant Files
   - Notes
   - Instructions
   - Full task list (parent + sub-tasks)

8. Save Task List  
   - Save the document in `/tasks/` as `tasks-[feature-name].md`.
   - ALSO generate `@fix_plan.md` by copying ONLY the `## Tasks` section exactly (checkboxes + numbering) from `/tasks/tasks-[feature-name].md`.
   - `@fix_plan.md` must contain only the tasks list.

## Output Format (REQUIRED)

```markdown
## Relevant Files

- `path/to/potential/file1.ts` - Brief description of why this file is relevant.
- `path/to/file1.test.ts` - Unit tests for `file1.ts`.

### Notes
- Unit tests should typically be placed alongside the code files they are testing.

## Instructions for Completing Tasks

IMPORTANT: As you complete each task, you must check it off in this markdown file by changing `- [ ]` to `- [x]`.

## Tasks

- [ ] 0.0 Create feature branch
  - [ ] 0.1 Create and checkout a new branch
- [ ] 1.0 Parent Task Title
  - [ ] 1.1 Sub-task
```
