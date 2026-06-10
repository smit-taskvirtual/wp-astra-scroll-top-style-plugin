# Astra Scroll-to-Top Exact CSS

A simple WordPress plugin to apply custom styling to the scroll-to-top button in the [Astra](https://wpastra.com/) theme. This plugin injects your exact CSS, so you can standardize the scroll-to-top button across multiple sites without editing theme files.

## Features

- Overrides Astra theme's scroll-to-top button colors and size.
- Includes hover animations and arrow styling.
- Works immediately after activation — no configuration needed.
- Keeps your CSS exactly as written.

## Installation

1. Download or clone this repository.
2. Upload the `astra-scroll-top-plugin` folder to your WordPress site under `wp-content/plugins/`.
3. Go to WordPress Admin → Plugins.
4. Activate **Astra Scroll-to-Top Exact CSS**.
5. Your scroll-to-top button will now use the custom styles.

## Usage

- The plugin automatically applies the following CSS, which you can customize as per your website's color theme:

```css
/* Scroll-to-top button styling */
#ast-scroll-top {
    background-color: #DB2B33 !important;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    line-height: 1 !important;
    padding: 0 !important;
    transition: all 0.3s ease !important;
    box-shadow: 0 4px 8px rgba(0,0,0,0.15);
    outline: none !important;
    border: none !important;
}

/* Arrow */
#ast-scroll-top::before {
    font-size: 24px !important;
    line-height: 1 !important;
    color: #ffffff !important;
    transition: color 0.3s ease !important;
}

/* Hover animation */
#ast-scroll-top:hover {
    background-color: #00000 !important;
    transform: scale(1.15);
    box-shadow: 0 6px 14px rgba(0,0,0,0.25);
}

/* Arrow hover */
#ast-scroll-top:hover::before {
    color: #fff !important;
}
