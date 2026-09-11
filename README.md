<<<<<<< HEAD
# Master Katsu — Responsive Product Landing Page

A responsive landing page built for **Master Katsu**, a home-style chicken katsu food business serving Brgy. San Roque and Brgy. Nanhaya, Victoria, Laguna. This project was developed as part of **ITST 302 – Client-Server Technologies, Week 5 Laboratory Activity (Mini Project 04)**, using **Laravel**, **Blade Components**, and **Tailwind CSS**.

🔗 **Live Repository:** https://github.com/AmadorJuliusEcer/week05-product-landing-page

---

## 1. Introduction

A **product landing page** is a single, focused web page designed to introduce a product or service, communicate its value clearly, and guide visitors toward a specific action — in this case, ordering food. Unlike a full multi-page website, a landing page keeps everything a customer needs to decide and act in one scrollable experience: what the brand offers, why it's worth trying, how much it costs, and how to reach out.

For small and local businesses like Master Katsu, a landing page is often the first digital impression a potential customer gets. A well-designed page can:

- Build trust through a professional, consistent visual identity
- Clearly present the menu, pricing, and location
- Make it easy for customers to place an order or get in touch
- Compete visually with larger, more established food brands

The purpose of this project was to take a real, existing small business — Master Katsu — and translate its actual offerings (chicken katsu variants, pricing, contact details, and locations) into a clean, modern, and fully responsive landing page using Laravel's component-based architecture.

---

## 2. Objectives

Through this project, the following learning objectives were accomplished:

- Developed a fully responsive web interface using **Tailwind CSS** utility classes.
- Built **reusable Laravel Blade Components** to eliminate duplicated markup across sections.
- Applied responsive design principles that adapt the layout across desktop, tablet, and mobile screen sizes.
- Organized the frontend following Laravel best practices, separating **layouts**, **components**, and **pages**.
- Implemented a consistent visual system across typography, spacing, color, and interactive states (hover, focus).
- Documented the frontend architecture, component design decisions, and UI evolution in this README.
- Prepared the project for publishing as a public GitHub repository and professional portfolio piece.

---

## 3. Responsive Web Design

This project follows a **mobile-first** approach — base styles are written for small screens first, then adjusted upward using Tailwind's responsive breakpoint prefixes (`sm:`, `md:`, `lg:`).

Key responsive techniques used:

| Technique | Where it's used |
|---|---|
| **Flexbox** (`flex`, `items-center`, `justify-between`) | Navbar layout, footer social icons, card content alignment |
| **CSS Grid** (`grid`, `grid-cols-*`, `gap-*`) | Features grid, menu/product grid, pricing cards, testimonials |
| **Responsive breakpoints** | Navigation collapses into a mobile hamburger menu below `md:`; grids scale from 1–2 columns on mobile up to 3–4 columns on desktop |
| **Fluid images** | `object-cover` and `aspect-*` utilities keep food photography properly cropped at any screen size |

**Why responsive design matters:** most customers discover local food businesses through their phones. If a page doesn't adapt cleanly to a small screen, potential customers bounce before they even see the menu. Testing across desktop, tablet, and mobile viewports (via browser DevTools) ensured the navbar, hero section, and card grids all remain usable and legible at every size.

---

## 4. Tailwind CSS

Tailwind CSS was used throughout the project as a **utility-first** framework — instead of writing custom CSS classes and stylesheets, styling is composed directly in the markup using small, single-purpose utility classes.

**Advantages experienced in this project:**
- **Speed** — layouts and components were styled directly in Blade files without switching to separate `.css` files.
- **Consistency** — reusing the same spacing (`p-6`, `gap-6`), color (`#E8A33D`, `#0B0908`), and rounding (`rounded-2xl`) utilities across components kept the design visually unified.
- **Responsive utilities** — prefixes like `sm:`, `md:`, and `lg:` made it simple to adjust grid columns, spacing, and visibility per breakpoint without media query boilerplate.
- **Built-in states** — hover and focus effects (`hover:border-[#E8A33D]/40`, `hover:-translate-y-1`, `focus-visible:ring-2`) were added inline, keeping interactive polish close to the markup it affects.

**Example from the project** (feature card hover and spacing):
```html
<div class="bg-[#151210] border border-white/10 rounded-2xl p-6
            hover:border-[#E8A33D]/40 hover:-translate-y-1
            transition-all duration-300">
```

---

## 5. Blade Components

**Blade Components** are reusable pieces of UI in Laravel — self-contained `.blade.php` files that accept data through props and render consistent markup wherever they're called (e.g. `<x-feature-card />`).

Reusable components built for this project:

```
resources/views/components/
├── navbar.blade.php
├── hero.blade.php
├── feature-card.blade.php
├── menu-card.blade.php
├── pricing-card.blade.php
├── testimonial-card.blade.php
├── button.blade.php
└── footer.blade.php
```

**Why components matter here:** the pricing section alone needed three near-identical cards (Solo Katsu, Family Bundle, Catering Tray) that only differ in plan name, price, and feature list. Writing that markup three times would have been repetitive and error-prone. Instead, one `pricing-card.blade.php` component accepts props and is called three times:

```blade
<x-pricing-card
    plan="Family Bundle"
    price="₱550"
    :features="['Four katsu plates, mixed sauces', 'Shared rice and one side dish']"
    :featured="true" />
```

This same pattern is used for `feature-card`, `menu-card`, and `testimonial-card` — each accepts props (`title`, `description`, `image`, `name`, `review`, etc.) and is reused multiple times across the page with different content, keeping the codebase DRY (Don't Repeat Yourself) and easy to maintain.

The `button.blade.php` component centralizes all button styling (`primary` and `secondary` variants) so that changing the brand's accent color only requires editing one file instead of every button instance across the page.

---

## 6. User Interface Design

**Color Palette**
| Color | Hex | Use |
|---|---|---|
| Near-black | `#0B0908` | Page background, footer |
| Dark charcoal | `#151210` / `#111010` | Card backgrounds |
| Warm gold | `#E8A33D` | Accent color — logo, prices, tags, buttons, hover states |
| White (various opacity) | `white/10` – `white/70` | Text hierarchy, borders |

A limited, warm, high-contrast dark palette was chosen to evoke a cozy, appetite-appealing atmosphere (common in modern food branding) while keeping strong contrast for accessibility against the dark background.

**Typography** — A serif italic font (`font-serif italic`) is used for the brand name and headings to give a slightly premium, restaurant-menu feel, paired with a clean sans-serif for body text and UI labels for readability.

**Iconography** — Simple stroke-based SVG icons (checkmarks, arrows, hamburger menu, social icons) are used consistently at a small scale, matching the minimal, modern aesthetic.

**Button Styles** — Two consistent variants: a solid **gold pill button** (`primary`) for main calls-to-action like "Order Now," and an **outlined button** (`secondary`) for lower-emphasis actions — keeping visual hierarchy clear across the page.

**Card Design** — All cards (features, menu items, pricing, testimonials) share the same visual language: rounded corners (`rounded-2xl`), a dark card background, a subtle border, and a gold-tinted border/lift effect on hover — reinforcing that they belong to the same design system.

**Layout Consistency** — Every major section shares the same `max-w-5xl mx-auto px-6` container and consistent vertical rhythm (`py-16`), so content lines up predictably as the user scrolls.

---

## 7. Folder Structure

```
week05-product-landing-page/
│
├── app/                        # Laravel application logic
├── resources/
│   ├── views/
│   │   ├── layouts/
│   │   │   └── app.blade.php   # Main layout all pages extend
│   │   ├── components/         # Reusable Blade components (navbar, hero, cards, etc.)
│   │   └── pages/
│   │       └── landing.blade.php  # The landing page itself
│   └── css/                    # Tailwind entry stylesheet
│
├── public/
│   └── images/                 # Food photography, logo, and other static assets
│
├── screenshots/                # Desktop / tablet / mobile / before-after screenshots
├── documentation/              # Before-and-after comparison images
└── README.md                   # This file
```

- **`layouts/`** holds the single master layout (`app.blade.php`) that defines the shared `<head>`, Tailwind CSS import, and content section — every page extends this instead of repeating boilerplate HTML.
- **`components/`** holds every reusable UI piece described above.
- **`pages/`** holds the actual route-facing views, currently just `landing.blade.php`, which assembles all components into the full page.
- **`public/`** serves static assets like images referenced via `asset('images/...')`.
- **`screenshots/`** and **`documentation/`** store visual evidence of the responsive design and the project's before-and-after evolution, per the lab requirements.

---

## 8. Screenshots

> Screenshots below document the final responsive interface across devices and key sections. *(Add images to the `screenshots/` folder and update the paths below.)*

| Section | Screenshot |
|---|---|
| Desktop View | `screenshots/desktop-view.png` |
| Tablet View | `screenshots/tablet-view.png` |
| Mobile View | `screenshots/mobile-view.png` |
| Navigation Bar | `screenshots/navbar.png` |
| Hero Section | `screenshots/hero.png` |
| Features Section | `screenshots/features.png` |
| Pricing Section | `screenshots/pricing.png` |
| Testimonials | `screenshots/testimonials.png` |
| Footer | `screenshots/footer.png` |
| Blade Components Folder | `screenshots/components-folder.png` |
| GitHub Repository | `screenshots/github-repo.png` |

---

## 9. Before-and-After Comparison

> *(Add before/after screenshots to the `documentation/` folder.)*

**Before** — Initial wireframe / early prototype with basic unstyled layout and placeholder content.
`documentation/before.png`

**After** — Final polished, responsive interface with the dark/gold Master Katsu brand identity, boxed cards, hover interactions, and consistent spacing across all sections.
`documentation/after.png`

---

## 10. Tech Stack

- **Laravel** — backend framework and Blade templating
- **Blade Components** — reusable, prop-driven UI pieces
- **Tailwind CSS** — utility-first responsive styling
- **Vite** — asset bundling for CSS/JS

---

## Author

**Amador Julius Ecer**
ITST 302 – Client-Server Technologies
Week 5 – Mini Project 04
=======

>>>>>>> 7cbe29efd4d3822ce5df2a307026e2b84d7d88f7
