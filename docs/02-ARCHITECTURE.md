# Klyra Theme - Architecture Documentation

## Overview

This document details the technical architecture of the Klyra theme, including file structure, naming conventions, and implementation patterns.

---

## 1. Directory Structure

### 1.1 Core Files

```
klyra/
├── style.css              # Theme header (required)
├── theme.json             # Design system configuration
├── functions.php          # Main entry point
├── index.php              # Security file (silence is golden)
└── README.md              # User documentation
```

### 1.2 Block Templates

**Location:** `block-templates/`

WordPress 6.4+ uses `block-templates` instead of `templates` for better organization.

**Files:**
- `index.html` - Blog/archive template
- `home.html` - Homepage template
- `page.html` - Page template
- `single.html` - Single post template
- `archive-product.html` - Shop/product archive
- `single-product.html` - Single product page
- `cart.html` - Shopping cart
- `checkout.html` - Checkout page

### 1.3 Template Parts

**Location:** `block-template-parts/`

WordPress 6.4+ uses `block-template-parts` instead of `parts`.

**Files:**
- `header.html` - Site header
- `footer.html` - Site footer

### 1.4 Patterns

**Location:** `patterns/`

Block patterns are auto-discovered by WordPress. Each pattern is a PHP file with pattern metadata.

**Files:**
- `hero-centered.php`
- `hero-split.php`
- `product-grid.php`
- `category-grid.php`
- `testimonials.php`
- `faq.php`
- `call-to-action.php`

### 1.5 Style Variations

**Location:** `styles/`

Style variations are JSON files that override/extend `theme.json` styles.

**Files:**
- `soft-minimal.json` (default)
- `editorial-luxury.json`
- `bold-brand.json`
- `tech-modern.json`
- `glass-light.json`
- `dark-elegant.json`

### 1.6 PHP Includes

**Location:** `inc/`

Modular PHP files for theme functionality.

**Files:**
- `setup.php` - Theme setup and configuration
- `woocommerce.php` - WooCommerce integration
- `admin.php` - Admin UI and customizations
- `license.php` - License management system

---

## 2. File Naming Conventions

### 2.1 Templates

- Use kebab-case: `single-product.html`
- Descriptive names: `archive-product.html`
- Follow WordPress conventions

### 2.2 Template Parts

- Simple names: `header.html`, `footer.html`
- Match WordPress core naming

### 2.3 Patterns

- Descriptive kebab-case: `hero-centered.php`
- Category prefix optional: `klyra-hero-centered.php`

### 2.4 Style Variations

- Kebab-case: `soft-minimal.json`
- Descriptive names matching style characteristics

### 2.5 PHP Files

- Kebab-case: `license-manager.php`
- Descriptive function prefixes: `klyra_*`

---

## 3. Code Organization

### 3.1 functions.php Structure

```php
<?php
// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Load theme components
require_once get_template_directory() . '/inc/setup.php';
require_once get_template_directory() . '/inc/woocommerce.php';
require_once get_template_directory() . '/inc/admin.php';
require_once get_template_directory() . '/inc/license.php';
```

### 3.2 Modular PHP Files

Each `inc/` file should:
- Have a clear purpose
- Be self-contained
- Use proper namespacing (function prefixes)
- Include security checks
- Follow WordPress standards

### 3.3 Function Naming

**Prefix:** `klyra_`

**Examples:**
- `klyra_setup()` - Theme setup
- `klyra_woocommerce_support()` - WooCommerce support
- `klyra_license_manager()` - License management

---

## 4. Template Structure

### 4.1 Template Hierarchy

WordPress block themes use this hierarchy:

1. Custom templates (database)
2. Theme templates (`block-templates/`)
3. Core templates (fallback)

### 4.2 Template Structure Pattern

```html
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","layout":{"inherit":true}} -->
<main class="wp-block-group">
	<!-- Template content -->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
```

### 4.3 Template Part Structure

```html
<!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull">
	<!-- Part content -->
</div>
<!-- /wp:group -->
```

---

## 5. Pattern Structure

### 5.1 Pattern File Format

```php
<?php
/**
 * Title: Pattern Name
 * Slug: klyra/pattern-slug
 * Categories: klyra-general
 * Description: Pattern description
 * Keywords: keyword1, keyword2
 *
 * @package Klyra
 * @since 1.0.0
 */

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<!-- wp:block-content -->
<!-- Pattern HTML -->
<!-- /wp:block-content -->
```

### 5.2 Pattern Categories

- `klyra-general` - General patterns
- `klyra-hero` - Hero sections
- `klyra-products` - Product-related
- `klyra-content` - Content sections
- `klyra-cta` - Call-to-action

---

## 6. Style Variation Structure

### 6.1 Variation File Format

```json
{
	"version": 2,
	"title": "Variation Name",
	"styles": {
		"color": {
			"background": "#ffffff",
			"text": "#000000"
		},
		"typography": {
			"fontFamily": "var(--wp--preset--font-family--system-font)"
		}
	}
}
```

### 6.2 Variation Override Rules

- Only include properties that change
- Reference design tokens when possible
- Maintain consistency with base theme.json

---

## 7. Design Token System

### 7.1 Token Hierarchy

1. **Presets** - Defined in `theme.json` settings
2. **Custom Properties** - Defined in `theme.json` custom
3. **CSS Variables** - Generated from presets

### 7.2 Token Usage

**In theme.json:**
```json
{
	"settings": {
		"custom": {
			"spacing": {
				"small": "1rem",
				"medium": "2rem"
			}
		}
	}
}
```

**In CSS/HTML:**
```css
padding: var(--wp--custom--spacing--medium);
```

---

## 8. WooCommerce Integration

### 8.1 Template Structure

WooCommerce templates use WooCommerce blocks:

```html
<!-- wp:woocommerce/product-archive -->
<!-- wp:woocommerce/product-catalog /-->
<!-- /wp:woocommerce/product-archive -->
```

### 8.2 Block Usage

- Use WooCommerce blocks exclusively
- No legacy shortcodes
- Ensure block compatibility

---

## 9. License System Architecture

### 9.1 Class Structure

```php
class Klyra_License_Manager {
	private $api_url;
	private $license_key;
	private $license_status;
	
	public function __construct() {}
	public function activate_license( $key ) {}
	public function deactivate_license() {}
	public function validate_license() {}
	public function is_licensed() {}
}
```

### 9.2 Data Storage

- License key: `klyra_license_key` option
- License status: `klyra_license_status` option
- Domain binding: `klyra_license_domain` option

---

## 10. Security Considerations

### 10.1 File Access

All PHP files should start with:
```php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
```

### 10.2 Data Sanitization

- Sanitize all user inputs
- Escape all outputs
- Use nonces for forms
- Validate license keys

### 10.3 Capability Checks

```php
if ( ! current_user_can( 'manage_options' ) ) {
	return;
}
```

---

## 11. Performance Optimization

### 11.1 Asset Loading

- Minimal JavaScript
- Defer non-critical CSS
- Lazy load images
- Optimize fonts

### 11.2 PHP Optimization

- Minimal PHP logic
- Efficient queries
- Caching where appropriate
- No unnecessary includes

---

## 12. Internationalization

### 12.1 Text Domain

**Domain:** `klyra`

### 12.2 Translation Functions

```php
__( 'Text', 'klyra' );
esc_html__( 'Text', 'klyra' );
esc_attr__( 'Text', 'klyra' );
```

### 12.3 Translation Files

**Location:** `languages/`

- `klyra.pot` - Template
- `klyra-en_US.po` - English
- `klyra-en_US.mo` - Compiled

---

## 13. Version Control

### 13.1 Git Structure

```
.gitignore
README.md
CHANGELOG.md
```

### 13.2 Versioning

- Semantic versioning: `MAJOR.MINOR.PATCH`
- Current: `1.0.0`

---

## 14. Testing Strategy

### 14.1 Browser Testing

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)

### 14.2 Device Testing

- Desktop (1920px+)
- Tablet (768px - 1024px)
- Mobile (320px - 767px)

### 14.3 WordPress Testing

- WordPress 6.1+
- WooCommerce latest
- PHP 7.4+

---

**Document Version:** 1.0  
**Last Updated:** 2025-01-16

