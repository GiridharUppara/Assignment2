function validateForm() {
    const name = document.getElementById("name").value;
    const usn = document.getElementById("usn").value;
    const email = document.getElementById("email").value;
    const phone = document.getElementById("phone").value;
    const semester = document.getElementById("semester").value;
    const subjects = document.getElementById("subjects").value;
    const password = document.getElementById("password").value;

    // Basic Validation for required fields
    if (!name || !usn || !email || !phone || !semester || !subjects || !password) {
        alert("All fields are required!");
        return false;
    }

    // Validate phone number (should be 10 digits)
    const phoneRegex = /^[0-9]{10}$/;
    if (!phoneRegex.test(phone)) {
        alert("Please enter a valid 10-digit phone number.");
        return false;
    }

    // Subjects should be a comma-separated list
    const subjectsArray = subjects.split(',');
    if (subjectsArray.length < 1) {
        alert("Please enter at least one subject.");
        return false;
    }

    return true;
}
