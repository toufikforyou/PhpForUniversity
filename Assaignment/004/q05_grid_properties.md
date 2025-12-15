# Question 5: CSS Grid Properties

## 1. grid-column
The `grid-column` property specifies a grid item's size and location in a grid layout. It is a shorthand property for `grid-column-start` and `grid-column-end`.

**Example:**
```css
.item {
  grid-column: 1 / 3; /* Starts at column line 1 and ends at column line 3 (spans 2 columns) */
}
```

## 2. grid-row
The `grid-row` property specifies a grid item's size and location in a grid layout. It is a shorthand property for `grid-row-start` and `grid-row-end`.

**Example:**
```css
.item {
  grid-row: 1 / span 2; /* Starts at row line 1 and spans 2 rows */
}
```

## 3. grid-template-columns
The `grid-template-columns` property specifies the number (and the widths) of columns in a grid layout.

**Example:**
```css
.container {
  display: grid;
  grid-template-columns: 100px auto 100px; /* Creates 3 columns: 100px, auto-width, 100px */
}
```

## 4. grid-template-rows
The `grid-template-rows` property specifies the number (and the heights) of the rows in a grid layout.

**Example:**
```css
.container {
  display: grid;
  grid-template-rows: 50px 1fr; /* Creates 2 rows: 50px height, and the rest of the available space */
}
```
