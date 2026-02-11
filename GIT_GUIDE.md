# Git Guide for HMWebs Website

## ✅ Your Code is Now Saved!

Your website has been committed to Git with the message:
**"Initial commit: HMWebs website with SEO enhancements, portfolio page, and clean design"**

**Files committed**: 16 files, 4,945 lines of code

---

## 📝 Basic Git Commands

### **Checking Status**
```bash
git status
```
Shows what files have changed since last commit.

### **Adding Files**
```bash
# Add all changed files
git add .

# Add specific file
git add index.html

# Add specific folder
git add css/
```

### **Committing Changes**
```bash
# Commit with message
git commit -m "Your commit message here"

# Example messages:
git commit -m "Fixed contact page footer icons"
git commit -m "Added SEO enhancements to all pages"
git commit -m "Updated pricing page - changed Simple to Essential"
```

### **Viewing History**
```bash
# See commit history
git log

# See last 5 commits
git log -5

# See compact history
git log --oneline
```

---

## 🔄 Common Workflow

### **After Making Changes:**

1. **Check what changed:**
   ```bash
   git status
   ```

2. **Add files to staging:**
   ```bash
   git add .
   ```

3. **Commit with descriptive message:**
   ```bash
   git commit -m "Describe what you changed"
   ```

### **Example Session:**
```bash
# Made changes to pricing.html and style.css
git status                                    # See what changed
git add .                                     # Stage all changes
git commit -m "Updated pricing page design"  # Commit with message
```

---

## 🌐 Pushing to GitHub/Remote Repository

### **First Time Setup:**

1. **Create repository on GitHub:**
   - Go to https://github.com
   - Click "New Repository"
   - Name it "hmwebs-website"
   - Don't initialize with README (you already have code)

2. **Connect your local repo to GitHub:**
   ```bash
   git remote add origin https://github.com/YOUR-USERNAME/hmwebs-website.git
   git branch -M main
   git push -u origin main
   ```

### **After First Setup:**
```bash
# Push your commits to GitHub
git push
```

---

## 🔀 Branching (For Experimenting)

### **Create a New Branch:**
```bash
# Create and switch to new branch
git checkout -b feature/new-design

# Make changes, then commit
git add .
git commit -m "Experimental new design"

# Switch back to main
git checkout main

# Merge the branch if you like the changes
git merge feature/new-design
```

---

## ⏮️ Undoing Changes

### **Undo Changes Before Commit:**
```bash
# Discard changes to a file
git checkout -- index.html

# Discard all changes
git checkout -- .
```

### **Undo Last Commit (Keep Changes):**
```bash
git reset --soft HEAD~1
```

### **Undo Last Commit (Discard Changes):**
```bash
git reset --hard HEAD~1
```

### **View a Previous Version:**
```bash
# See commit history
git log --oneline

# View specific commit
git show COMMIT_HASH
```

---

## 📦 .gitignore File

Create a `.gitignore` file to exclude files from Git:

```
# .gitignore
node_modules/
.DS_Store
*.log
.env
.vscode/
dist/
build/
```

---

## 🚀 Quick Reference

| Command | What It Does |
|---------|-------------|
| `git status` | Show changed files |
| `git add .` | Stage all changes |
| `git commit -m "message"` | Save changes with message |
| `git log` | View commit history |
| `git push` | Upload to GitHub |
| `git pull` | Download from GitHub |
| `git clone URL` | Copy repository |
| `git branch` | List branches |
| `git checkout -b name` | Create new branch |

---

## 💡 Best Practices

### **Commit Messages:**
✅ **Good:**
- "Add portfolio page with 6 project cards"
- "Fix footer icons on contact page"
- "Implement comprehensive SEO enhancements"

❌ **Bad:**
- "Update"
- "Fix stuff"
- "Changes"

### **Commit Frequency:**
- Commit after completing a feature
- Commit before trying something risky
- Commit at the end of each work session

### **What to Commit:**
✅ **Include:**
- HTML, CSS, JavaScript files
- Images, fonts
- Documentation (.md files)
- Configuration files

❌ **Exclude:**
- node_modules/
- Large binary files
- Sensitive data (passwords, API keys)
- Build/dist folders

---

## 🆘 Help & Resources

### **If Something Goes Wrong:**
```bash
# See what happened
git reflog

# Go back to a safe state
git reset --hard HEAD
```

### **Learning Resources:**
- GitHub Guides: https://guides.github.com/
- Git Documentation: https://git-scm.com/doc
- Interactive Tutorial: https://learngitbranching.js.org/

---

## 📊 Your Current Repository Status

**Branch:** main  
**Commits:** 1  
**Files:** 16  
**Lines of Code:** 4,945  

**Files in Repository:**
- ✅ All HTML pages (index, about, services, portfolio, pricing, hosting, seo, contact, terms)
- ✅ CSS styles (style.css)
- ✅ JavaScript (main.js)
- ✅ Server configs (.htaccess, nginx-config-example.conf, server.js)
- ✅ Documentation (SEO_ENHANCEMENTS.md, CACHE_FIX_INSTRUCTIONS.html)

---

## 🎯 Next Steps

1. **Create GitHub account** (if you don't have one)
2. **Create repository** on GitHub
3. **Push your code** to GitHub
4. **Make changes** and commit regularly
5. **Deploy** to web hosting when ready

---

**Last Updated:** February 11, 2026  
**Repository:** c:\GIT\AI_WebApp1  
**Status:** ✅ All changes committed
