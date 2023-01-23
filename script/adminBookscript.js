//select all navigations
let dashboard_btn = document.getElementById('active');
let addStudent_btn = document.getElementById('add_student');
let studentDetails_btn = document.getElementById('student_details');
let feedback_btn = document.getElementById('complaints');

//Select all pages
let dashboard_page = document.getElementById('stat-container');
let addStudent_page = document.getElementById('add_student_area');
let studentdetails_page = document.getElementById('student_details_area');
let feedback_page = document.getElementById('feedback_area');

dashboard_btn.onclick = () => {
    alert('Dashboard');
    console.log('Dashboard');
    dashboard_page.style.display = 'flex';
    addStudent_page.style.display = 'none';
    studentdetails_page.style.display = 'none';
    feedback_page.style.display = 'none';
}
addStudent_btn.onclick = () => {
    alert('Add student!');
    addStudent_page.style.display = 'flex';
    dashboard_page.style.display = 'none';
    studentdetails_page.style.display = 'none';
    feedback_page.style.display = 'none';
}
studentDetails_btn.onclick = () => {
    // console.log('Student Details';)
    studentdetails_page.style.display = 'block';
    addStudent_page.style.display = 'none';
    dashboard_page.style.display = 'none';
    feedback_page.style.display = 'none';
}
feedback_btn.onclick = () => {
    feedback_page.style.display = 'block';
    dashboard_page.style.display = 'none';
    addStudent_page.style.display = 'none';
    studentdetails_page.style.display = 'none';
}


 function adminAlert() {
     var myText = "You have succesfully Booked for a Student😊";
     alert (myText);
 }
//
// var row =1;

// var login = document.getElementById("entry");
// login.addEventListener("click",displayDetails);



// function displayDetails(){
// var userName = document.getElementById("userName").value;
// var email = document.getElementById("userEmail").value;
// var phone = document.getElementById("userPhone").value;
// var date = document.getElementById("date").value;
// var hostel = document.getElementById("hostel").value;
// var roomNo = document.getElementById("roomNumber").value;
// var roomPreference = document.getElementById("room-selection").valuvarvar
//     if(!userName || !email || !phone || !date || !hostel || !roomNo || !roomPreference ){
//         alert("Please all the boxes");
//         return;
//     }
//     let display = document.getElementById("display");
//     let newRow = display.insertRow(row);

//     var cell1 = newRow.insertcell(0);
//     var cell2 = newRow.insertcell(1);
//     var cell3 = newRow.insertcell(2);
//     var cell4 = newRow.insertcell(3);
//     var cell5 = newRow.insertcell(4);
//     var cell6 = newRow.insertcell(5);
//     var cell7 = newRow.insertcell(6);

//     cell1.innerHTML = userName;
//     cell2.innerHTML = userEmail;
//     cell3.innerHTML = userPhone;
//     cell4.innerHTML = date;
//     cell5.innerHTML = hostel;
//     cell6.innerHTML = roomNumber;
//     cell7.innerHTML = room-selection;

