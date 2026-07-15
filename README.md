# 9024 Media WordPress Theme

Custom WordPress theme for the 9024 Media homepage redesign. Built with a focus on performance, layout flexibility, and clean code structure.

---

## Core Technical Architecture

### 1. Decoupled Block Compiler
Asset compilation is decoupled to prevent large monolithic stylesheets. Vite dynamically scans the `functionality/custom-blocks` directory and compiles SCSS and JS files for each Gutenberg block individually.
These assets are conditionally enqueued in WordPress only when the corresponding block is loaded on a page, improving page speed.

### 2. Local HMR Checker
In [functions.php](file:///C:/Users/Antonio/Local%20Sites/9024-media/app/public/wp-content/themes/9024-media/functions.php), the theme checks if the local Vite dev server is running on port `5173`:
*   **Development:** Loads styles and scripts directly from the dev server using module scripts for HMR support.
*   **Production:** Enqueues statically compiled, minified assets from the `assets/dist` directory.

### 3. Editor Styles
The editor stylesheet (`editor-style.scss`) is loaded directly in the Gutenberg editor wrapper. It only imports the Tailwind components and utilities layers to avoid breaking the WordPress admin panel.

---

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
    └── custom-blocks/             # Custom Blocks (Hero, About, Services, Work, Logos)
```

---

## Custom Gutenberg Blocks Reference

### 1. Hero Block (`acf/hero`)
Establishes the homepage intro.
*   **ACF Fields:** Title Line 1, Title Line 2, Subheading, background type (Image vs Video), video upload field, fallback image, and scrolling indicators.
*   **Key Features:** Fullscreen layout container, grayscale media mask, and smooth viewport scroll indicator lines.
*   **Location:** [functionality/custom-blocks/hero/](file:///C:/Users/Antonio/Local%20Sites/9024-media/app/public/wp-content/themes/9024-media/functionality/custom-blocks/hero)

### 2. About Block (`acf/about`)
Renders the agency bio alongside a parallax Instagram grid feed.
*   **ACF Fields:** Title Line 1, Title Line 2, Subheading, Description paragraph, and uploader repeater for 4 feed posts.
*   **Key Features:** 
    *   **Layout Alignment:** "WE ARE" is shifted left (`lg:-ml-[80px]`) while "9024" has a `lg:pl-[80px]` indent. Stacking layers place the text at `z-10` and the image feed at `z-20` so images scroll above the title. Description width is constrained to `max-w-[420px]` to clear the feed.
    *   **Animations:** Column A scroll parallax, 3D mouse card tilt, double-click heart pop animations, and three floating pixelated visuals that shift based on cursor positions.
*   **Location:** [functionality/custom-blocks/about/](file:///C:/Users/Antonio/Local%20Sites/9024-media/app/public/wp-content/themes/9024-media/functionality/custom-blocks/about)

### 3. Services Block (`acf/services`)
Displays services categories inside a non-wrapping slider row.
*   **ACF Fields:** Subtitles repeater (PLAYERS, BRANDS, CLUBS, Agencies), background media select buttons, and title/description configuration groups.
*   **Key Features:** 
    *   **Inverted Cursor Mask:** A custom tracking mask (`.hover-square`) with `mix-blend-mode: difference` is linked to mouse coordinates. Moving over white titles color-inverts the overlapped letters to orange-red.
    *   **Typography:** Oswald 16px uppercase subtitles separated by ` | ` delimiters.
*   **Location:** [functionality/custom-blocks/services/](file:///C:/Users/Antonio/Local%20Sites/9024-media/app/public/wp-content/themes/9024-media/functionality/custom-blocks/services)

### 4. Our Work Block (`acf/work`)
Presents agency case studies inside an asymmetrical layout.
*   **ACF Fields:** Case study repeater (Max 4) containing titles, descriptions, case study link urls, background media types, images, and videos.
*   **Key Features:** 
    *   **Grid Specs:** Sharp rect edges. Left Top Card (700x700), Right Top Card (600x600), Left Bottom Card (600x600 aligned flush right with `margin-left: auto`), Right Bottom Card (560x700). Gaps are constrained to 26px.
    *   **Visual Overlays:** Initial state features `mix-blend-mode: hue` with 1px gray borders. Hovering displays a dark overlay at 80% opacity (`rgba(0,0,0,0.8)`).
    *   **Interactive Pixels:** Adds three floating pixelated SVGs that translate based on cursor positions.
*   **Location:** [functionality/custom-blocks/work/](file:///C:/Users/Antonio/Local%20Sites/9024-media/app/public/wp-content/themes/9024-media/functionality/custom-blocks/work)

### 5. Logos Block (`acf/logos`)
Renders an infinite scrolling partner logos ticker.
*   **ACF Fields:** Repeater uploader for logos and logo names.
*   **Key Features:** Infinite loop scrolling handled entirely in CSS keyframes (`translateX(0%)` to `translateX(calc(-100% - 104px))`), eliminating JS loading delays. Spacing between logos is fixed at 104px and max-height is restricted to 114px.
*   **Location:** [functionality/custom-blocks/logos/](file:///C:/Users/Antonio/Local%20Sites/9024-media/app/public/wp-content/themes/9024-media/functionality/custom-blocks/logos)

---

## Global Navigation and Footer

### 1. Sticky Header & Hamburger Overlay
*   **Sticky States:** When scrolling down past 50px, the header adds a scrolled class, slides up to `top: 0`, gains a semi-transparent background (`backdrop-filter: blur`), and scales down the branding logo SVG from 86px to 50px for breathing space.
*   **Fullscreen Menu Overlay:** Triggering the hamburger button opens a fullscreen dark overlay menu. Sub-links stagger and slide fade-in using GSAP. Social link networks (Instagram, LinkedIn, TikTok) are rendered in solid white and hover-transition to brand orange.

### 2. Global Footer
*   Includes white branding logo, agency description, a prominent "LET'S TALK" email link with a center-expanding orange underline effect, full horizontal page links, and bottom legal menus. Links are styled in solid white with hover transitions to brand orange.

---

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

---

## Deployment & Migration Guide

When deploying the theme to a shared hosting environment:
1.  Run `npm run build` locally to compile all assets into the `/assets/dist/` directory.
2.  If exporting the site via **All-in-One WP Migration**, use the advanced settings to exclude `node_modules` and `.git` folders to minimize the output file size.
3.  Once imported, the theme will run on the live server instantly. Node.js is not required on the production host, as the local dev socket checker (`_9024_is_dev()`) fails silently and defaults to serving static assets.
