# Question 11: DOM Properties

## 1. innerHTML
The `innerHTML` property sets or returns the HTML content (inner HTML) of an element. It can parse HTML tags.

**Example:**
```javascript
document.getElementById("demo").innerHTML = "<strong>Hello World</strong>";
// Result: The text "Hello World" will be bold.
```

## 2. outerHTML
The `outerHTML` property sets or returns the HTML content of the element itself, including the element's own tag and attributes, along with its content.

**Example:**
```javascript
let content = document.getElementById("demo").outerHTML;
// Returns: <div id="demo">...content...</div>
```

## 3. textContent
The `textContent` property sets or returns the text content of the specified node and all its descendants. It returns the text as it is in the source code (including spacing/hidden text) but does not parse HTML tags.

**Example:**
```javascript
document.getElementById("demo").textContent = "<strong>Hello</strong>";
// Result: The text will literally be "<strong>Hello</strong>", tags are not rendered.
```

## 4. innerText
The `innerText` property sets or returns the text content of the specified node and its descendants. Unlike `textContent`, it is aware of CSS styling (it won't return hidden text) and triggers a reflow.

**Example:**
```javascript
let text = document.getElementById("demo").innerText;
// Returns the visible text inside the element.
```
