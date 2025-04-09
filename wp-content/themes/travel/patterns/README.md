# Travel Theme Block Patterns

This directory contains block patterns for the Travel theme.

## Available Patterns

### Luxury Chauffeur Card
- **Slug:** `travel/luxury-chauffeur-card`
- **Description:** A card featuring luxury chauffeur service with image and text overlay.
- **Categories:** call-to-action, banner, services

## How to Use Patterns

### In the Block Editor
1. Click the "+" button to add a new block
2. Go to the "Patterns" tab
3. Search for the pattern by name or browse through categories
4. Click on the pattern to insert it into your page or post

### In Template Files
You can include patterns directly in template files using the pattern block:

```html
<!-- wp:pattern {"slug":"travel/luxury-chauffeur-card"} /-->
```

### Customizing Patterns
After inserting a pattern, you can customize it by:
- Changing text content
- Replacing images
- Adjusting colors and typography
- Adding or removing blocks

## Creating New Patterns
To create a new pattern:
1. Create a PHP file in the patterns directory
2. Add the required header information
3. Include your block markup
4. The pattern will be automatically registered and available in the block editor

Example header:
```php
<?php
/**
 * Title: Your Pattern Title
 * Slug: travel/your-pattern-slug
 * Categories: your-category
 * Description: Brief description of your pattern.
 */
?>
``` 