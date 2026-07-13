# 9024 Media — Harrison Carloss Technical Test & Design Research

This document outlines the design assets, branding specifications, typographic tokens, layout structure, and a technical development blueprint for the **9024 Media** homepage test. 

The test is based on a real, Awwwards-honoured project by UK creative agency **Harrison Carloss** for their former client **9024 Media** (a sports social media agency working with elite athletes like Neymar Jr.).

---

## 🎨 Branding & Design Specifications

### 1. Color Palette (Hex Codes)

| Variable Name | Hex Code | Visual Usage |
| :--- | :--- | :--- |
| **White** | `#FFFFFF` | Core backgrounds, body text on dark sections, active states |
| **9024 CTA Black** | `#1D1E1C` | Secondary buttons, text colors, background overlays |
| **9024 CTA Colour** | `#FB3C1E` | Primary brand orange-red, button hovers, link underlines, logo states |
| **Social** | `#175572` | Deep slate-blue section backgrounds and active tabs |
| **Production** | `#EDDFBD` | Warm cream/beige blocks or panels |
| **Commercial** | `#DADADA` | Light grey block dividers and background details |

### 2. Typography & Font Tokens

* **Headings (H1)**: `Oswald Medium` (sans-serif)
  * **Size Options**: `120pt` / `200pt` / `300pt` (very large, responsive hero scales)
  * **Leading**: `-20 leading` (tight line height)
* **Subheadings (H2 / H3)**: `Oswald Bold`
  * **Size**: `36pt`
  * **Leading**: `-20 leading`
* **Body / Paragraphs**: `Open Sans Regular`
  * **Size**: `20pt`
  * **Leading**: `-20 leading`
* **Link / Button Style**: Underlined links that transition or color-shift to `#FB3C1E` on hover.

---

## 📂 Layout & Section Structure Mapping

Based on the parsed PDF design sheets, the homepage comprises the following visual sections:

### Section 1: Hero Cover Section
* **Visual Backdrop**: Full-width imagery of Neymar Jr. in a yellow Puma kit pointing to his ear.
* **Overlaid Playbook Graphics**: White hand-drawn athletic markings (X's, O's, arrows, tactics lines) superimposed over the background.
* **Main Header Text**: Giant bold letters reading `"OUTPLAY THEM ALL!"` centered in white.
* **Top Navigation Bar**:
  * **Logo**: The custom `9024` grid logo (a black square housing `9`, `0`, `2`, `4` sub-boxes) on the left.
  * **Actions**: A circular yellow-ringed button on the right containing `"LET'S CHAT"`, alongside a classic three-line hamburger menu toggle.

### Section 2: We Are 9024 (About)
* **Visuals**: Asymmetrical two-column editorial design:
  * **Left Column**: 
    * Eyebrow title: `"WE TELL YOUR STORY"`
    * Staggered H1 title: `"WE ARE 9024"`
    * Paragraph copy detailing the agency's social-first sporting niche.
    * Underlined CTA: `"LEARN MORE ABOUT US"`.
  * **Right Column**: A floating vertical cascade of three custom Instagram-style mock posts with black borders, top header bars, and like/comment/bookmark interaction tags.
  * **Background Details**: Floating grey and black square "pixels" positioned in a parallax pattern.

### Section 3: Services Showcase Tabs
* **Backdrop**: Deep dark-blue background displaying floating smartphone renders with custom athletic social graphics.
* **Interactive Navigation**:
  * Three horizontal tabs: `"PRODUCTION"`, `"SOCIAL"`, `"COMMERCIAL"`.
  * **Active State**: The selected tab (e.g., `"SOCIAL"`) is filled in solid white, with subtitle `"PLAYERS \| BRANDS \| CLUBS \| AGENCIES"`.
  * **Inactive State**: Outlined, translucent letter styling. Clicking a tab swaps the active styling and loads corresponding media.

### Section 4: Our Work (Case Studies Grid)
* **Title**: Giant `"OUR WORK"` heading.
* **Staggered Card Grid**: Four high-contrast black-and-white image cards:
  1. **OnePlus+**: Photo of a hand holding a phone, overlaid with red text `"ONEPLUS+"`.
  2. **Red Bull**: Translucent black card overlaying a stadium photo, containing case description text and a solid orange-red button reading `"VIEW CASE STUDY"`.
  3. **Wish.com**: Photo of an athlete taking a selfie, overlaid with red text `"WISH.COM"`.
  4. **About You**: Portrait photo, overlaid with red text `"ABOUT YOU"`.
* **Section Footer**: Underlined link: `"SEE ALL CASE STUDIES"`.
* **Client Ticker**: A minimal horizontal row containing client brand logos (`FIFA`, `WOW HYDRATE`, `wish`, `Red Bull`, `NETFLIX`, `ABOUT YOU`).

---

## 🛠️ WordPress + Tailwind CSS + SCF Theme Blueprint

To implement this project using the tech stack required (`WordPress`, `Tailwind CSS`, and `Secure Custom Fields` / SCF) while maintaining professional agency standards:

### 1. File Structure Setup
We will initialize a clean, modern theme structure inside `themes/9024-media`:
```text
9024-media/
├── style.css                      # Theme info sheet
├── functions.php                  # Script enqueues and hot-reload definitions
├── header.php                     # Logo, navigation bar, and cover wrappers
├── footer.php                     # Copyright and footer elements
├── front-page.php                 # Homepage parsing custom Gutenberg blocks
├── tailwind.config.js             # Tailwind configuration with 9024 branding tokens
├── vite.config.js                 # Vite bundler configuration
├── postcss.config.js              # PostCSS plugins (Nesting, Tailwind, Autoprefixer)
├── theme.json                     # WordPress color palette & Gutenberg sync
├── assets/
│   ├── css/
│   │   └── src/
│   │       ├── index.scss         # Main stylesheet compiling Tailwind
│   │       └── editor-style.scss  # Isolated editor style without tailwind/base
│   └── js/
│       └── src/
│           ├── index.js           # Core JS & Parallax initialization (GSAP)
│           └── block-editor.js    # Editor customizations
└── functionality/
    ├── setup.php                  # Theme features setup
    └── custom-blocks/             # SCF Gutenberg Blocks (Hero, About, Services, Grid)
```

### 2. Vite Configuration
The [vite.config.js](file:///C:/Users/Antonio/Local%20Sites/9024-media/app/public/wp-content/themes/9024-media/vite.config.js) will dynamically find custom block assets and compile them without hashing, enabling clean WordPress enqueues:
```javascript
import { defineConfig } from 'vite';
import { glob } from 'glob';
import path from 'path';

export default defineConfig({
  build: {
    outDir: 'assets/dist',
    rollupOptions: {
      input: {
        main: path.resolve(__dirname, 'assets/css/src/index.scss'),
        ...Object.fromEntries(
          glob.sync('functionality/custom-blocks/**/*.scss').map(file => [
            `css/${path.basename(file, '.scss')}`,
            path.resolve(__dirname, file)
          ])
        ),
        ...Object.fromEntries(
          glob.sync('functionality/custom-blocks/**/*.js').map(file => [
            `js/${path.basename(file, '.js')}`,
            path.resolve(__dirname, file)
          ])
        ),
      },
      output: {
        entryFileNames: 'js/[name].js',
        assetFileNames: '[ext]/[name].[ext]',
      }
    }
  }
});
```

### 3. Tailwind Configuration Customization
The [tailwind.config.js](file:///C:/Users/Antonio/Local%20Sites/9024-media/app/public/wp-content/themes/9024-media/tailwind.config.js) will contain:
```javascript
module.exports = {
  corePlugins: {
    preflight: false, // Prevent Tailwind from overriding Gutenberg styles
  },
  content: [
    './*.php',
    './**/*.php',
    './assets/js/src/**/*.js',
    './functionality/custom-blocks/**/*.php',
  ],
  theme: {
    extend: {
      colors: {
        'brand-orange': '#FB3C1E',
        'brand-black': '#1D1E1C',
        'brand-blue': '#175572',
        'brand-cream': '#EDDFBD',
        'brand-grey': '#DADADA',
      },
      fontFamily: {
        heading: ['Oswald', 'sans-serif'],
        body: ['Open Sans', 'sans-serif'],
      },
      lineHeight: {
        'tight-heading': '0.8',
      }
    }
  }
}
```

### 4. Block Development via Secure Custom Fields (SCF)
Using the free Secure Custom Fields plugin, we will register 4 custom blocks:
1. `acf/hero-section` — For the cover title, tactics overlay, and Neymar background.
2. `acf/we-are-section` — For the two-column staggered grid and floating Instagram posts.
3. `acf/services-section` — For tabbed service content and phone renders.
4. `acf/work-grid` — For the staggered black-and-white case studies.

### 5. Interactive & Motion Features
* **Parallax Pixels**: We will use the **GSAP ScrollTrigger** library to animate the small grey/black floating square decoration divs (`.parallax-pixel`) at differing multipliers as the user scrolls.
* **Hover States**: Text links will feature custom animated underlines shifting width and changing colors to `#FB3C1E`.
* **Services Toggle**: Standard tab toggling class shifts (`.active` solid text vs. outlined SVG stroke text) driven by vanilla JS.

---

> [!NOTE]
> **Next Steps:**
> We have completed the research and fully analyzed the design requirements, color tokens, and font styles.
> Per your instructions, we have **not modified any code yet**. When you are ready to proceed with creating the theme skeleton, setting up the Tailwind configurations, or installing Secure Custom Fields, let me know!
