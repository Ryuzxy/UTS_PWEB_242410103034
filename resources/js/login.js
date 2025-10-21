const passwors = document.getElementById('password');
const emails = document.getElementById('email');
const usernames = document.getElementById('username');

function validateEmail() {
    const emailValue = emails.value;
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailPattern.test(emailValue);
}
