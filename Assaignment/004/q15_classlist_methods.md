# Question 15: classList Methods

The `classList` property returns the class name(s) of an element, as a DOMTokenList object.

## 1. add()
Adds one or more class names to an element. If the class already exists, it does not add it again.

**Example:**
```javascript
document.getElementById("myDiv").classList.add("active", "highlight");
```

## 2. remove()
Removes one or more class names from an element. (Note: The question has a typo "remode(0", assuming "remove()").

**Example:**
```javascript
document.getElementById("myDiv").classList.remove("active");
```

## 3. toggle()
Toggles a class name for an element. If the class is present, it removes it. If it is not present, it adds it.

**Example:**
```javascript
document.getElementById("myDiv").classList.toggle("dark-mode");
```
