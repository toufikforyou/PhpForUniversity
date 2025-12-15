# Question 14: DOM Methods

## 1. getElementById(id)
Returns the element that has the ID attribute with the specified value. Since IDs are unique, this returns a single element.

**Example:**
```javascript
let header = document.getElementById("main-header");
```

## 2. getElementsByTagName(tagName)
Returns a live HTMLCollection of elements with the given tag name.

**Example:**
```javascript
let paragraphs = document.getElementsByTagName("p");
// paragraphs[0] accesses the first <p> element
```

## 3. querySelector(selector)
Returns the first element that matches a specified CSS selector(s) in the document.

**Example:**
```javascript
let firstButton = document.querySelector(".btn-primary");
```

## 4. querySelectorAll(selector)
Returns a static (not live) NodeList representing a list of the document's elements that match the specified group of selectors.

**Example:**
```javascript
let allButtons = document.querySelectorAll(".btn");
```
