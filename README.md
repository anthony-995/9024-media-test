# 9024 Media — Custom WordPress Theme (Harrison Carloss Technical Test)

A bespoke, production-ready WordPress theme built for the **9024 Media** homepage redesign. Designed to meet elite agency standards, prioritizing layout flexibility, performance, and clean code architecture.

---

## 🛠️ Technology Stack & Optimization

*   **WordPress Custom Theme Core**: Fully modular theme following modern, block-first WordPress standards.
*   **Vite**: Integrated for lightning-fast Hot Module Replacement (HMR) and compiling.
*   **Tailwind CSS (v3)**: Installed using a custom `postcss` setup with `preflight` disabled to prevent conflicts with Gutenberg editor defaults.
*   **Secure Custom Fields (SCF)**: Leveraged for component-driven Gutenberg blocks.
*   **GSAP (ScrollTrigger)**: Integrated to handle smooth parallax effects and scroll animations.

---

## 🏗️ Architectural Highlights (For Reviewers)

### 1. Dynamic Gutenberg Block Compiler
Rather than bundling all styles into a single monolith stylesheet, the asset pipeline is decoupled. 
In [vite.config.js](vite.config.js), we use dynamic glob patterns to automatically scan the `functionality/custom-blocks/` directory:
*   Any custom block `.scss` or `.js` file is compiled to its own independent file in `assets/dist/`.
*   This ensures we can register and load block assets **conditionally** via WordPress only when the block is rendered on-screen, maximizing page performance.

### 2. Zero-Config Local HMR Checker
In [functions.php](functions.php), the theme utilizes a background checker to determine if the local Vite server is active:
*   **Dev Mode:** If port `5173` is active, it enqueues CSS and JS directly from the local dev server using script modules for instant hot-reload feedback.
*   **Production Mode:** If the port is closed (or on production/staging environments), it automatically falls back to enqueuing the compiled assets from `assets/dist/`.

### 3. Isolated Block Editor Styling
To ensure a true *What-You-See-Is-What-You-Get* admin experience, the theme enqueues [editor-style.scss](assets/css/src/editor-style.scss) directly into the Gutenberg admin wrapper, importing only the Tailwind `components` and `utilities` layers to prevent polluting administrative screens.

---

## 📂 File Architecture Map

```text
9024-media/
├── README.md                      # Reviewer documentation
├── style.css                      # WordPress theme metadata headers
├── functions.php                  # Vite enqueues, block registrations, & helpers
├── header.php                     # Header template with logo grid & CTA ring
├── footer.php                     # Footer template with copyright & links
├── front-page.php                 # Core entry point for block rendering
├── tailwind.config.js             # Styling tokens (Oswald/Open Sans fonts & colors)
├── vite.config.js                 # Rollup dynamic globs for custom block compilation
├── postcss.config.js              # PostCSS runner with Autoprefixer
├── theme.json                     # Syncs theme color palette with block editor
├── assets/
│   ├── css/
│   │   └── src/
│   │       ├── index.scss         # Frontend stylesheet enqueuing Tailwind
│   │       └── editor-style.scss  # Admin block editor stylesheet
│   ├── js/
│   │   └── src/
│   │       ├── index.js           # Main JS entry point (imports index.scss)
│   │       └── block-editor.js    # Editor adjustments
│   └── dist/                      # Production compiled assets (unhashed)
└── functionality/
    ├── setup.php                  # Core theme settings
    └── custom-blocks/             # SCF Blocks (Hero, About, Services, Case Studies)
```

---

## 🚀 Installation & Local Development

### 1. Requirements
*   Node.js (v18+)
*   NPM
*   Local WordPress instance (e.g. LocalWP)

### 2. Setup
1. Clone this repository into your WordPress installation directory:
   ```bash
   cd wp-content/themes/
   git clone https://github.com/anthony-995/9024-media-test.git 9024-media
   ```
2. Navigate to the theme directory and install dependencies:
   ```bash
   cd 9024-media
   npm install
   ```
3. Activate the theme via the WordPress Admin Dashboard.

### 3. Run Dev Server (HMR Enabled)
To start styling with Tailwind and see changes reload instantly:
```bash
npm run dev
```

### 4. Build for Production
To bundle and compress unhashed assets for production release:
```bash
npm run build
```
