// Select all navigation elements
let book_btn = document.getElementById('book-btn');
let profile_btn = document.getElementById('profile-btn');
let complaints_btn = document.getElementById('complaints-btn');

// Pages
let book_page = document.getElementById('book-page');
let profile_page = document.getElementById('profile-page');
let complaints_page = document.getElementById('complaints-page');

book_btn.onclick = () => {
    book_page.style.display = "block";
    profile_page.style.display = "none";
    complaints_page.style.display = "none";
}

profile_btn.onclick = () => {
    book_page.style.display = "none";
    profile_page.style.display = "block";
    complaints_page.style.display = "none";
}

complaints_btn.onclick = () => {
    book_page.style.display = "none";
    profile_page.style.display = "none";
    complaints_page.style.display = "block";
}
// function showAlert