# Remove docs/ Directory from GitHub Repository

## Current Status
✅ The `docs/` directory is already in `.gitignore` (line 16)
✅ The directory is not currently tracked by git locally

## If docs/ exists in the remote repository:

### Step 1: Remove from Git tracking (if it was previously committed)
```bash
git rm -r --cached wp-content/themes/klyra/docs/
```

### Step 2: Commit the removal
```bash
git add .gitignore
git commit -m "Remove docs/ directory from repository"
```

### Step 3: Push to GitHub
```bash
git push origin master
```

## Verify .gitignore is correct
The `.gitignore` file should contain:
```
docs/
```

This is already present on line 16.

## Note
The `docs/` directory will remain on your local filesystem but will not be tracked by git or pushed to GitHub.

