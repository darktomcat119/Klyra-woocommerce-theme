# Klyra Theme - Image Requirements

This document lists all images needed for the example patterns and templates, including dimensions, aspect ratios, types, and usage.

---

## Pattern Images

### 1. Hero Centered Pattern
**File:** `patterns/hero-centered.php`

**Required Images:**
- **hero-centered-bg.jpg** (or .png, .webp)
  - **Type:** Background image
  - **Usage:** Full-width cover block background
  - **Dimensions:** 1920px × 1080px (16:9 ratio) minimum
  - **Recommended:** 2560px × 1440px for retina displays
  - **Aspect Ratio:** 16:9 (landscape)
  - **Style:** Hero/banner image, should work with 50% dark overlay
  - **Content:** Neutral, professional, suitable for any industry
  - **Notes:** Image will be cropped/centered, ensure important content is in center

---

### 2. Hero Split Pattern
**File:** `patterns/hero-split.php`

**Required Images:**
- **hero-split-image.jpg** (or .png, .webp)
  - **Type:** Content image
  - **Usage:** Right column image (50% width)
  - **Dimensions:** 1200px × 1200px (1:1 ratio) recommended
  - **Alternative:** 1200px × 1600px (3:4 portrait) or 1200px × 800px (3:2 landscape)
  - **Aspect Ratio:** 1:1 (square) preferred, or 3:4 (portrait)
  - **Style:** Product showcase, lifestyle, or brand image
  - **Content:** Should complement the left column text content
  - **Notes:** Will be displayed at 50% width, responsive scaling

---

### 3. Product Grid Pattern
**File:** `patterns/product-grid.php`

**Required Images:**
- **None (WooCommerce Products)**
  - **Type:** Product images
  - **Usage:** WooCommerce product grid block (4 columns × 2 rows = 8 products)
  - **Source:** Actual WooCommerce products
  - **Dimensions:** WooCommerce product image sizes
    - Thumbnail: 300px × 300px (1:1)
    - Single: 600px × 600px (1:1)
    - Gallery: 1024px × 1024px (1:1)
  - **Aspect Ratio:** 1:1 (square) for products
  - **Notes:** Users will add their own product images via WooCommerce

---

### 4. Category Grid Pattern
**File:** `patterns/category-grid.php`

**Required Images:**
- **category-1-bg.jpg**
  - **Type:** Background image (cover block)
  - **Usage:** First category cover block
  - **Dimensions:** 800px × 600px (4:3 ratio) minimum
  - **Recommended:** 1200px × 900px for retina
  - **Aspect Ratio:** 4:3 (landscape)
  - **Style:** Category representative image
  - **Content:** Should represent a product category
  - **Notes:** Will have 50% dark overlay, ensure text readability

- **category-2-bg.jpg**
  - **Type:** Background image (cover block)
  - **Usage:** Second category cover block
  - **Dimensions:** 800px × 600px (4:3 ratio) minimum
  - **Recommended:** 1200px × 900px for retina
  - **Aspect Ratio:** 4:3 (landscape)
  - **Style:** Category representative image
  - **Content:** Should represent a different product category
  - **Notes:** Will have 50% dark overlay, ensure text readability

- **category-3-bg.jpg**
  - **Type:** Background image (cover block)
  - **Usage:** Third category cover block
  - **Dimensions:** 800px × 600px (4:3 ratio) minimum
  - **Recommended:** 1200px × 900px for retina
  - **Aspect Ratio:** 4:3 (landscape)
  - **Style:** Category representative image
  - **Content:** Should represent a different product category
  - **Notes:** Will have 50% dark overlay, ensure text readability

---

### 5. Testimonials Pattern
**File:** `patterns/testimonials.php`

**Required Images:**
- **None (currently)**
  - **Optional Enhancement:** Customer avatars
  - **If adding avatars:**
    - **testimonial-avatar-1.jpg** - 120px × 120px (1:1, circle)
    - **testimonial-avatar-2.jpg** - 120px × 120px (1:1, circle)
    - **testimonial-avatar-3.jpg** - 120px × 120px (1:1, circle)
  - **Type:** Portrait/avatar images
  - **Aspect Ratio:** 1:1 (square, will be displayed as circle)
  - **Style:** Professional headshots or customer photos

---

### 6. FAQ Pattern
**File:** `patterns/faq.php`

**Required Images:**
- **None** - Text-only pattern

---

### 7. Call to Action Pattern
**File:** `patterns/call-to-action.php`

**Required Images:**
- **None** - Uses colored background, no images

---

## Template Images

### 8. Single Product Template
**File:** `block-templates/single-product.html`

**Required Images:**
- **None (WooCommerce Products)**
  - **Type:** Product images
  - **Usage:** WooCommerce product image gallery
  - **Source:** Actual WooCommerce product images
  - **Dimensions:** WooCommerce product image sizes
    - Single: 600px × 600px (1:1)
    - Gallery: 1024px × 1024px (1:1)
    - Full: 2048px × 2048px (1:1) for zoom
  - **Aspect Ratio:** 1:1 (square) for products
  - **Notes:** Users will add their own product images via WooCommerce

---

### 9. Archive Product Template
**File:** `block-templates/archive-product.html`

**Required Images:**
- **None (WooCommerce Products)**
  - **Type:** Product images
  - **Usage:** WooCommerce product catalog grid
  - **Source:** Actual WooCommerce products
  - **Dimensions:** WooCommerce product image sizes
    - Thumbnail: 300px × 300px (1:1)
  - **Aspect Ratio:** 1:1 (square) for products
  - **Notes:** Users will add their own product images via WooCommerce

---

## Summary Table

| Image File | Type | Dimensions | Aspect Ratio | Usage | Required |
|------------|------|------------|--------------|-------|----------|
| `hero-centered-bg.jpg` | Background | 1920×1080 (min) | 16:9 | Hero Centered pattern | ✅ Yes |
| `hero-split-image.jpg` | Content | 1200×1200 | 1:1 | Hero Split pattern | ✅ Yes |
| `category-1-bg.jpg` | Background | 800×600 (min) | 4:3 | Category Grid pattern | ✅ Yes |
| `category-2-bg.jpg` | Background | 800×600 (min) | 4:3 | Category Grid pattern | ✅ Yes |
| `category-3-bg.jpg` | Background | 800×600 (min) | 4:3 | Category Grid pattern | ✅ Yes |
| `testimonial-avatar-1.jpg` | Avatar | 120×120 | 1:1 | Testimonials (optional) | ⚠️ Optional |
| `testimonial-avatar-2.jpg` | Avatar | 120×120 | 1:1 | Testimonials (optional) | ⚠️ Optional |
| `testimonial-avatar-3.jpg` | Avatar | 120×120 | 1:1 | Testimonials (optional) | ⚠️ Optional |

---

## Image Guidelines

### General Requirements

1. **File Formats:**
   - **Recommended:** WebP (best compression)
   - **Fallback:** JPG (universal support)
   - **Alternative:** PNG (for transparency needs)

2. **File Naming:**
   - Use lowercase letters
   - Use hyphens for word separation
   - Be descriptive (e.g., `hero-centered-bg.jpg`)

3. **Optimization:**
   - Compress images before use
   - Target file size: < 200KB for web images
   - Use tools like TinyPNG, ImageOptim, or Squoosh

4. **Accessibility:**
   - Always provide meaningful alt text
   - Ensure sufficient contrast for text overlays
   - Test with dark overlays (50% opacity)

### Industry-Neutral Guidelines

Since Klyra is multi-industry, images should be:

- **Neutral:** Not locked to a specific industry
- **Professional:** High-quality, modern aesthetic
- **Versatile:** Work across different style variations
- **Clean:** Minimal distractions, focus on content

### Recommended Image Sources

- **Unsplash** (unsplash.com) - Free, high-quality stock photos
- **Pexels** (pexels.com) - Free stock photos and videos
- **Pixabay** (pixabay.com) - Free images and vectors
- **Freepik** (freepik.com) - Free and premium graphics
- **Adobe Stock** (stock.adobe.com) - Premium stock photos

### Image Placement

**Recommended directory structure:**
```
klyra/
└── assets/
    └── images/
        ├── hero-centered-bg.jpg
        ├── hero-split-image.jpg
        ├── category-1-bg.jpg
        ├── category-2-bg.jpg
        ├── category-3-bg.jpg
        └── (optional avatars)
```

---

## Pattern-Specific Notes

### Hero Centered
- Image should have space in center for text overlay
- Avoid busy backgrounds that compete with text
- Test with 50% dark overlay to ensure readability

### Hero Split
- Image should complement the text content
- Consider the split layout - image on right, text on left
- Ensure image works well at 50% width

### Category Grid
- Each category image should be distinct
- Images should represent different product categories
- Ensure text is readable with 50% dark overlay
- Consider using different color tones for variety

### Testimonials (if adding avatars)
- Use professional, friendly headshots
- Ensure consistent style across all avatars
- Images will be displayed as circles (120px × 120px)

---

## WooCommerce Product Images

While product images are managed through WooCommerce, here are the recommended specifications:

- **Thumbnail:** 300px × 300px (1:1)
- **Single Product:** 600px × 600px (1:1)
- **Gallery:** 1024px × 1024px (1:1)
- **Zoom:** 2048px × 2048px (1:1)

**Best Practices:**
- Use square images (1:1 aspect ratio)
- White or transparent backgrounds work best
- Consistent lighting and style across products
- High resolution for zoom functionality

---

## Next Steps

1. **Download/Prepare Images:**
   - Source images from recommended sites
   - Optimize for web (compress, resize)
   - Ensure correct aspect ratios

2. **Add to Theme:**
   - Place images in `assets/images/` directory
   - Update pattern files to reference images
   - Test across different style variations

3. **Test:**
   - Verify images load correctly
   - Check responsive behavior
   - Test with different style variations
   - Ensure accessibility (alt text, contrast)

---

**Document Version:** 1.0  
**Last Updated:** 2025-12-16

