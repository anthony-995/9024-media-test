# 9024 Media WordPress Theme

Custom WordPress theme for the 9024 Media homepage redesign. Built with a focus on performance, layout flexibility, and clean code structure.

## Technical Architecture

### 1. Dynamic Block Compiler
Asset compilation is decoupled to prevent large monolithic stylesheets. 
Vite scans the functionality/custom-blocks directory and compiles SCSS and JS files for each Gutenberg block individually.
These assets are conditionally enqueued in WordPress only when the corresponding block is loaded on a page, improving page speed.

### 2. Local HMR Checker
In functions.php, the theme checks if the local Vite dev server is running (port 5173):
*   **Development:** Loads styles and scripts directly from the dev server using module scripts for HMR support.
*   **Production:** Enqueues statically compiled, minified assets from the assets/dist directory.

### 3. Editor Styles
The editor stylesheet (editor-style.scss) is loaded directly in the Gutenberg editor wrapper. It only imports the Tailwind components and utilities layers to avoid breaking the WordPress admin panel.

## Directory Structure

```text
9024-media/
├── README.md                      # Setup and design documentation
├── style.css                      # WordPress theme metadata
├── functions.php                  # Theme setups, enqueues, and HMR fallback
├── header.php                     # Logo, navigation bar, and main header wrapper
├── footer.php                     # Footer copyright and links
├── front-page.php                 # Core template for block rendering
├── tailwind.config.js             # Styling colors and typography configurations
├── vite.config.js                 # Vite compiler inputs for Gutenberg blocks
├── postcss.config.js              # PostCSS autoprefixer setup
├── theme.json                     # Syncs Tailwind colors with WordPress block settings
├── assets/
│   ├── css/
│   │   └── src/
│   │       ├── index.scss         # Main frontend stylesheet compiling Tailwind
│   │       └── editor-style.scss  # Admin block editor stylesheet
│   ├── js/
│   │   └── src/
│   │       ├── index.js           # Main JS entry point (imports index.scss)
│   │       └── block-editor.js    # Editor customizations
│   └── dist/                      # Production compiled assets
└── functionality/
    ├── setup.php                  # Core theme settings
    └── custom-blocks/             # SCF Blocks (Hero, About, Services, Case Studies)
```

## Setup and Local Development

### Requirements
*   Node.js (v18+)
*   NPM
*   Local WordPress instance (e.g. LocalWP)

### Installation
1. Clone this repository into your WordPress installation:
   ```bash
   cd wp-content/themes/
   git clone https://github.com/anthony-995/9024-media-test.git 9024-media
   ```
2. Install npm dependencies inside the theme folder:
   ```bash
   cd 9024-media
   npm install
   ```
3. Activate the theme from the WordPress Admin Dashboard.

### Build Commands
*   Run local dev server with HMR:
    ```bash
    npm run dev
    ```
*   Build minified assets for production:
    ```bash
    npm run build
    ```
