# Klyra Theme

A modern, highly customizable WordPress block theme built for WooCommerce stores across multiple business verticals.

## Features

- ✅ **Full Site Editing (FSE)** - Complete block-based customization
- ✅ **WooCommerce Ready** - Fully compatible with WooCommerce blocks
- ✅ **6 Style Variations** - Adapt to different industries and aesthetics
- ✅ **7 Block Patterns** - Reusable, industry-neutral patterns
- ✅ **Design System** - Comprehensive design tokens via theme.json
- ✅ **License Management** - Built-in licensing system for commercial distribution
- ✅ **Multi-Industry** - Works for beauty, tech, fashion, shoes, jewelry, and more
- ✅ **Performance Optimized** - Fast, lightweight, and responsive
- ✅ **Accessibility Ready** - WCAG 2.1 AA compliant

## Requirements

- WordPress 6.1 or higher
- PHP 7.4 or higher
- WooCommerce (optional, but recommended)

## Installation

1. Upload the theme folder to `/wp-content/themes/`
2. Activate the theme through the 'Appearance' menu in WordPress
3. Customize via **Appearance → Editor**

## Quick Start

### 1. Choose a Style Variation

Navigate to **Appearance → Editor → Styles** and select one of six style variations:

- **Soft Minimal** (Default) - Clean, neutral, versatile
- **Editorial Luxury** - Sophisticated, elegant (beauty, fashion, jewelry)
- **Bold Brand** - High contrast, dynamic (DTC, lifestyle, shoes)
- **Tech Modern** - Contemporary, tech-forward (electronics, gadgets)
- **Glass Light** - Modern, trendy UI
- **Dark Elegant** - Premium dark mode

### 2. Customize Templates

Edit templates via **Appearance → Editor → Templates**:

- `index.html` - Blog/archive template
- `home.html` - Homepage template
- `page.html` - Page template
- `single.html` - Single post template
- `archive-product.html` - Shop page
- `single-product.html` - Product page
- `cart.html` - Shopping cart
- `checkout.html` - Checkout page

### 3. Use Block Patterns

Insert patterns via the block inserter:

- **Hero Centered** - Full-width centered hero
- **Hero Split** - Split layout hero
- **Product Grid** - WooCommerce product grid
- **Category Grid** - Product category showcase
- **Testimonials** - Customer reviews
- **FAQ** - Frequently asked questions
- **Call to Action** - CTA section

## Style Variations

### Soft Minimal (Default)

Perfect for general-purpose stores. Features:
- Calm, neutral color palette
- Generous whitespace
- Soft shadows and rounded corners
- High readability

### Editorial Luxury

Ideal for beauty, fashion, and jewelry stores. Features:
- Sophisticated color palette
- Elegant serif typography option
- Refined spacing
- Premium feel

### Bold Brand

Great for DTC brands and lifestyle products. Features:
- High contrast colors
- Vibrant accents
- Bold typography
- Strong visual hierarchy

### Tech Modern

Perfect for electronics and technology stores. Features:
- Modern color palette
- Tech-forward aesthetic
- Clean lines
- Contemporary typography

### Glass Light

Trendy, modern UI style. Features:
- Light, airy colors
- Glass morphism effects
- Soft gradients
- Modern trends

### Dark Elegant

Premium dark mode style. Features:
- Dark background
- Light text
- Elegant contrast
- Sophisticated feel

## WooCommerce Support

Klyra is fully compatible with WooCommerce blocks:

- Product grids and catalogs
- Single product pages
- Shopping cart
- Checkout process
- Product search and filters

All WooCommerce templates use block-based architecture for easy customization.

## License Management

Klyra includes a built-in license management system:

1. Navigate to **Appearance → License**
2. Enter your license key
3. Activate to enable updates and premium features

The license system supports:
- Remote validation (API-ready)
- Domain binding
- Graceful fallback (no hard lock)
- Subscription-based updates

## Customization

### Design Tokens

All design elements use tokens defined in `theme.json`:

- **Colors:** Base, surface, text, muted, accent
- **Typography:** System font (default), serif (optional)
- **Spacing:** XS to XXL scale
- **Border Radius:** None to full
- **Shadows:** None, small, medium, large

### Global Styles

Customize via **Appearance → Editor → Styles**:
- Colors
- Typography
- Spacing
- Layout

### Block Patterns

All patterns are fully editable and work across all style variations.

## Theme Structure

```
klyra/
├── block-templates/          # Page templates
├── block-template-parts/     # Header, footer
├── patterns/                 # Block patterns
├── styles/                    # Style variations
├── inc/                       # PHP includes
│   ├── setup.php
│   ├── woocommerce.php
│   ├── admin.php
│   └── license.php
├── functions.php
├── theme.json                 # Design system
└── style.css
```

## Supported Industries

Klyra is designed to work across multiple business verticals:

- **Beauty & Cosmetics** - Editorial Luxury style
- **Technology & Electronics** - Tech Modern style
- **Fashion & Accessories** - Editorial Luxury / Bold Brand styles
- **Shoes** - Bold Brand / Soft Minimal styles
- **Watches & Jewelry** - Editorial Luxury / Dark Elegant styles

## Performance

- Lighthouse Score: ≥ 90
- Mobile-first responsive design
- No render-blocking assets
- Minimal JavaScript
- Optimized for Core Web Vitals

## Accessibility

- WCAG 2.1 AA compliant
- Keyboard navigation support
- Focus indicators
- ARIA labels
- Screen reader friendly
- High contrast support

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)

## Development

### Code Standards

- WordPress Coding Standards
- PSR-12 compatible PHP
- ES6+ JavaScript
- theme.json driven CSS

### Translation

The theme is translation-ready. Text domain: `klyra`

Translation files location: `/languages/`

## Support

For theme support, documentation, and updates, visit the theme repository or contact support.

## License

GPL v2 or later

## Credits

Built with WordPress Full Site Editing and WooCommerce blocks.

---

**Version:** 1.0.0  
**Last Updated:** 2025-12-16
