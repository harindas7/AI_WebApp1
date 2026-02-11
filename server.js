// Simple Express server for serving HTML files without extensions
// Install: npm install express
// Run: node server.js

const express = require('express');
const path = require('path');
const app = express();
const PORT = process.env.PORT || 3000;

// Serve static files
app.use(express.static(__dirname, {
    extensions: ['html']
}));

// Redirect .html URLs to clean URLs
app.use((req, res, next) => {
    if (req.path.endsWith('.html')) {
        const newPath = req.path.slice(0, -5);
        return res.redirect(301, newPath);
    }
    next();
});

// Handle 404
app.use((req, res) => {
    res.status(404).sendFile(path.join(__dirname, '404.html'));
});

app.listen(PORT, () => {
    console.log(`Server running at http://localhost:${PORT}`);
    console.log('Clean URLs enabled - access pages without .html extension');
});
