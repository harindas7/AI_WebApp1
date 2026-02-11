# VS Code Git Extension Guide

## 🎯 Recommended Extensions

### 1. **GitLens** ⭐ BEST
**Install:** Press `Ctrl + Shift + X`, search "GitLens", click Install

**What it does:**
- Shows who changed each line
- Displays commit messages inline
- Visual file history
- Compare changes easily

**How to use:**
- Hover over any line to see who changed it
- Click "GitLens" in the sidebar for full history
- Right-click file → "Open File History"

---

### 2. **Git Graph** ⭐ VISUAL
**Install:** Search "Git Graph" in Extensions

**What it does:**
- Beautiful visual commit tree
- See all branches graphically
- Easy branch switching

**How to use:**
- Click "Git Graph" button in status bar (bottom)
- Or Command Palette → "Git Graph: View Git Graph"

---

### 3. **Git History**
**Install:** Search "Git History" in Extensions

**What it does:**
- View file/line history
- Compare versions
- Search commits

**How to use:**
- Right-click file → "Git: View File History"
- Right-click line → "Git: View Line History"

---

## 🔧 Built-in VS Code Git (No Extension Needed!)

### **Opening Source Control:**
- Click the branch icon (3rd icon on left)
- Or press: `Ctrl + Shift + G`

### **Making a Commit:**

**Step 1: See Changes**
```
Source Control panel shows:
├─ Changes (3)
│  ├─ M index.html
│  ├─ M pricing.html
│  └─ M style.css
```

**Step 2: Stage Files**
- Click **+** next to each file
- Or click **+** next to "Changes" to stage all

**Step 3: Write Message**
```
Message box at top:
┌─────────────────────────────────┐
│ Updated pricing page design     │
└─────────────────────────────────┘
```

**Step 4: Commit**
- Click **✓ Commit** button
- Or press `Ctrl + Enter`

**Step 5: Push (if using GitHub)**
- Click **...** menu → Push
- Or click "Sync Changes" button

---

## 🎨 Visual Diff (Compare Changes)

**To see what changed:**
1. Click on a modified file in Source Control
2. VS Code shows side-by-side comparison:
   - Left: Old version
   - Right: New version
   - Highlights: What changed

---

## ⚡ Keyboard Shortcuts

| Action | Shortcut |
|--------|----------|
| Open Source Control | `Ctrl + Shift + G` |
| Commit | `Ctrl + Enter` |
| Open Command Palette | `Ctrl + Shift + P` |
| Stage File | Click `+` icon |
| Unstage File | Click `-` icon |

---

## 🌐 Connecting to GitHub

### **First Time Setup:**

**1. Install GitHub Extension:**
- Press `Ctrl + Shift + X`
- Search "GitHub Pull Requests and Issues"
- Install it

**2. Sign in to GitHub:**
- Click Accounts icon (bottom left)
- Sign in with GitHub

**3. Publish Repository:**
- Open Source Control
- Click "Publish to GitHub"
- Choose public or private
- Done! ✅

### **After Setup:**
- Click "Sync Changes" to push/pull
- Or use "..." menu → Push/Pull

---

## 🎯 Recommended Extension Combo

**For Beginners:**
1. ✅ Built-in Git (already have it!)
2. ✅ GitLens (for seeing history)
3. ✅ Git Graph (for visual tree)

**Install Command:**
```
Press Ctrl + Shift + X
Search and install:
1. "GitLens"
2. "Git Graph"
```

---

## 📊 Status Bar Features

**Bottom of VS Code shows:**
```
main ↓0 ↑1    [Branch name] [Pull] [Push]
```

- **main** = Current branch
- **↓0** = 0 commits to pull
- **↑1** = 1 commit to push
- Click to see options

---

## 🆘 Common Tasks

### **Undo Last Commit:**
1. Open Source Control
2. Click **...** menu
3. Commit → Undo Last Commit

### **Discard Changes:**
1. Right-click file in Source Control
2. Select "Discard Changes"

### **View History:**
1. Right-click file in Explorer
2. Select "Open Timeline" (bottom)

### **Create Branch:**
1. Click branch name in status bar
2. Select "Create new branch"
3. Enter name

---

## 💡 Pro Tips

### **Tip 1: Timeline View**
- Click clock icon in Explorer
- See all commits for current file

### **Tip 2: Inline Diff**
- Modified lines show colored bar on left
- Click bar to see what changed

### **Tip 3: Commit Message Templates**
```
feat: Add new feature
fix: Fix bug
docs: Update documentation
style: Format code
refactor: Refactor code
```

### **Tip 4: Stage Partial Changes**
- Click file in Source Control
- Select specific lines
- Right-click → "Stage Selected Ranges"

---

## 🎬 Quick Start Workflow

**Daily Workflow:**
1. Make changes to files
2. Press `Ctrl + Shift + G` (Source Control)
3. Review changes (click files to see diff)
4. Click **+** to stage all
5. Type commit message
6. Press `Ctrl + Enter` to commit
7. Click "Sync Changes" to push

**That's it!** 🎉

---

## 📚 Learning Resources

**GitLens Documentation:**
https://gitlens.amod.io/

**VS Code Git Guide:**
https://code.visualstudio.com/docs/sourcecontrol/overview

**GitHub in VS Code:**
https://code.visualstudio.com/docs/sourcecontrol/github

---

**Last Updated:** February 11, 2026  
**Status:** ✅ Ready to use Git visually in VS Code!
