# Question 7: JavaScript Data Types

JavaScript variables can hold different data types: numbers, strings, objects and more.

## Primitive Data Types
Primitive data types are the lowest level of implementation of a programming language. They are immutable (cannot be changed) and hold a single value.

**Examples:**
1.  **String**: Represents a sequence of characters. e.g., `"Hello World"`
2.  **Number**: Represents numeric values (integers and floating-point). e.g., `42`, `3.14`
3.  **Boolean**: Represents logical values. e.g., `true`, `false`
4.  **Undefined**: Represents a variable that has been declared but not assigned a value. e.g., `let x;`
5.  **Null**: Represents an intentional absence of any object value. e.g., `let y = null;`
6.  **Symbol**: Represents a unique identifier.
7.  **BigInt**: Represents integers with arbitrary precision.

## Non-Primitive (Reference) Data Types
Non-primitive data types are objects. They are mutable and store references to the data rather than the data itself. They can hold collections of values and more complex entities.

**Examples:**
1.  **Object**: A collection of key-value pairs.
    ```javascript
    let person = {firstName: "John", lastName: "Doe"};
    ```
2.  **Array**: An ordered list of values (which is technically a type of object).
    ```javascript
    let cars = ["Saab", "Volvo", "BMW"];
    ```
3.  **Function**: A block of code designed to perform a particular task (also a type of object).

## Difference
| Feature | Primitive | Non-Primitive |
| :--- | :--- | :--- |
| **Value** | Stores the actual value. | Stores a reference (address) to the value. |
| **Mutability** | Immutable (value cannot be changed). | Mutable (content can be changed). |
| **Comparison** | Compared by value. | Compared by reference. |
