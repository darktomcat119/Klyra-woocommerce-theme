# Klyra Theme - Design System Documentation

## Overview

The Klyra design system is built on design tokens defined in `theme.json`. This ensures consistency, scalability, and easy customization across all style variations.

---

## 1. Color System

### 1.1 Base Color Palette

**Location:** `theme.json` → `settings.color.palette`

```json
{
	"color": {
		"palette": [
			{
				"slug": "base",
				"color": "#0073aa",
				"name": "Base"
			},
			{
				"slug": "surface",
				"color": "#f8f9fa",
				"name": "Surface"
			},
			{
				"slug": "text",
				"color": "#1e1e1e",
				"name": "Text"
			},
			{
				"slug": "muted",
				"color": "#6c757d",
				"name": "Muted"
			},
			{
				"slug": "accent",
				"color": "#00a0d2",
				"name": "Accent"
			}
		]
	}
}
```

### 1.2 Semantic Colors

**Primary Colors:**
- `primary` - Main brand color
- `secondary` - Secondary brand color
- `accent` - Call-to-action, highlights

**Neutral Colors:**
- `foreground` - Primary text
- `background` - Primary background
- `tertiary` - Subtle backgrounds, borders

### 1.3 Color Usage Guidelines

- **Base:** Primary brand color, buttons, links
- **Surface:** Cards, sections, elevated surfaces
- **Text:** Primary content text
- **Muted:** Secondary text, borders, icons
- **Accent:** CTAs, highlights, important elements

---

## 2. Typography System

### 2.1 Font Families

**Default (System Font):**
```json
{
	"fontFamily": "-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen-Sans, Ubuntu, Cantarell, 'Helvetica Neue', sans-serif",
	"slug": "system-font",
	"name": "System Font"
}
```

**Optional Serif (for Editorial Luxury):**
```json
{
	"fontFamily": "'Playfair Display', Georgia, serif",
	"slug": "serif",
	"name": "Serif"
}
```

### 2.2 Font Size Scale

| Name | Size | Slug | Use Case |
|------|------|------|----------|
| Extra Small | 0.75rem | x-small | Captions, labels |
| Small | 0.875rem | small | Secondary text |
| Medium | 1rem | medium | Body text (base) |
| Large | 1.25rem | large | Subheadings |
| Extra Large | 1.5rem | x-large | Headings (h3) |
| Huge | 2rem | huge | Headings (h2) |
| Gigantic | 3rem | gigantic | Hero headings (h1) |

### 2.3 Typography Tokens

**In theme.json:**
```json
{
	"typography": {
		"fontFamilies": [...],
		"fontSizes": [...],
		"fontWeights": [400, 500, 600, 700]
	}
}
```

**Usage:**
```css
font-family: var(--wp--preset--font-family--system-font);
font-size: var(--wp--preset--font-size--medium);
```

---

## 3. Spacing System

### 3.1 Spacing Scale

| Name | Size | Value | Use Case |
|------|------|-------|----------|
| XS | 0.5rem | 8px | Tight spacing |
| Small | 1rem | 16px | Default spacing |
| Medium | 1.5rem | 24px | Section spacing |
| Large | 2rem | 32px | Large sections |
| XL | 3rem | 48px | Hero sections |
| XXL | 4rem | 64px | Major sections |

### 3.2 Spacing Units

**Available Units:**
- `px` - Pixels
- `em` - Relative to font size
- `rem` - Relative to root font size
- `vh` - Viewport height
- `vw` - Viewport width
- `%` - Percentage

### 3.3 Spacing Tokens

**In theme.json:**
```json
{
	"settings": {
		"custom": {
			"spacing": {
				"xs": "0.5rem",
				"small": "1rem",
				"medium": "1.5rem",
				"large": "2rem",
				"xl": "3rem",
				"xxl": "4rem"
			}
		}
	}
}
```

**Usage:**
```css
padding: var(--wp--custom--spacing--medium);
margin: var(--wp--custom--spacing--large);
```

---

## 4. Border Radius System

### 4.1 Radius Presets

| Name | Size | Value | Use Case |
|------|------|-------|----------|
| None | 0 | 0 | Sharp corners |
| Small | 0.25rem | 4px | Subtle rounding |
| Medium | 0.5rem | 8px | Default rounding |
| Large | 1rem | 16px | Prominent rounding |
| Full | 9999px | Circle | Buttons, avatars |

### 4.2 Radius Tokens

**In theme.json:**
```json
{
	"settings": {
		"custom": {
			"borderRadius": {
				"none": "0",
				"small": "0.25rem",
				"medium": "0.5rem",
				"large": "1rem",
				"full": "9999px"
			}
		}
	}
}
```

---

## 5. Shadow System

### 5.1 Shadow Presets

| Name | Value | Use Case |
|------|-------|----------|
| None | none | No shadow |
| Small | 0 1px 3px rgba(0,0,0,0.1) | Subtle elevation |
| Medium | 0 4px 6px rgba(0,0,0,0.1) | Card elevation |
| Large | 0 10px 20px rgba(0,0,0,0.15) | Modal elevation |

### 5.2 Shadow Tokens

**In theme.json:**
```json
{
	"settings": {
		"custom": {
			"shadow": {
				"none": "none",
				"small": "0 1px 3px rgba(0,0,0,0.1)",
				"medium": "0 4px 6px rgba(0,0,0,0.1)",
				"large": "0 10px 20px rgba(0,0,0,0.15)"
			}
		}
	}
}
```

---

## 6. Layout System

### 6.1 Content Widths

| Name | Size | Use Case |
|------|------|----------|
| Content | 1200px | Standard content width |
| Wide | 1400px | Wide content width |
| Full | 100% | Full width |

### 6.2 Layout Tokens

**In theme.json:**
```json
{
	"settings": {
		"layout": {
			"contentSize": "1200px",
			"wideSize": "1400px"
		}
	}
}
```

---

## 7. Design Token Usage

### 7.1 In theme.json

Tokens are defined in `settings.custom` and referenced in styles:

```json
{
	"settings": {
		"custom": {
			"spacing": {
				"medium": "1.5rem"
			}
		}
	},
	"styles": {
		"spacing": {
			"padding": {
				"top": "var(--wp--custom--spacing--medium)"
			}
		}
	}
}
```

### 7.2 In Block Patterns

Patterns use design tokens via CSS classes:

```html
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40"}}}} -->
```

### 7.3 In Style Variations

Variations override tokens:

```json
{
	"styles": {
		"color": {
			"background": "#1a1a1a",
			"text": "#ffffff"
		}
	}
}
```

---

## 8. Responsive Design

### 8.1 Breakpoints

- **Mobile:** < 768px
- **Tablet:** 768px - 1024px
- **Desktop:** > 1024px

### 8.2 Mobile-First Approach

- Base styles for mobile
- Progressive enhancement for larger screens
- Use `min-width` media queries

---

## 9. Accessibility

### 9.1 Color Contrast

- Text on background: WCAG AA (4.5:1)
- Large text: WCAG AA (3:1)
- Interactive elements: High contrast

### 9.2 Focus Indicators

- Visible focus outlines
- High contrast focus colors
- Keyboard navigation support

---

## 10. Best Practices

### 10.1 Token Usage

- Always use design tokens
- Avoid hardcoded values
- Reference presets when possible

### 10.2 Consistency

- Use consistent spacing
- Maintain typography hierarchy
- Follow color guidelines

### 10.3 Performance

- Minimize custom CSS
- Use theme.json styles
- Leverage CSS variables

---

**Document Version:** 1.0  
**Last Updated:** 2025-01-16

