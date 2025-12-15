let student = {
    name: "Alice",
    age: 20,
    grade: "A"
};

student.department = "Computer Science";

console.log("Student Details:");
for (let key in student) {
    console.log(key + ": " + student[key]);
}
