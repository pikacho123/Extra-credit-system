// get table rows
const rows = document.querySelectorAll("#studentTable tbody tr");

// add click event listener to each row
rows.forEach((row) => {
    row.addEventListener("click", (event) => {
      console.log("Row clicked!");
    // get student information
    const name = event.currentTarget.querySelector(".studentName").textContent;
    const id = event.currentTarget.querySelector("td:nth-child(2)").textContent;
    const department = event.currentTarget.querySelector("td:nth-child(3)").textContent;
    const academicYear = event.currentTarget.querySelector("td:nth-child(4)").textContent;
    const creditsEarned = event.currentTarget.querySelector("td:nth-child(5)").textContent;
    const creditsRemaining = event.currentTarget.querySelector("td:nth-child(6)").textContent;
    const docsUploaded = event.currentTarget.querySelector("td:nth-child(7)").textContent;

    // set student information in popup
    document.getElementById("selectedName").textContent = `Name: ${name}`;
    document.getElementById("selectedID").textContent = `Student ID: ${id}`;
    document.getElementById("selectedDepartment").textContent = `Department: ${department}`;
    document.getElementById("selectedAcademicYear").textContent = `Academic Year: ${academicYear}`;
    document.getElementById("selectedCreditsEarned").textContent = `Credits Earned: ${creditsEarned}`;
    document.getElementById("selectedCreditsRemaining").textContent = `Credits Remaining: ${creditsRemaining}`;
    document.getElementById("selectedDocsUploaded").textContent = `Documents Uploaded: ${docsUploaded}`;

    // set initial value for credits earned input
    document.getElementById("creditsEarnedInput").value = creditsEarned;

    // show popup
    document.getElementById("popup").style.display = "block";
  });
});

// close popup when close button or outside popup is clicked
document.addEventListener("click", (event) => {
  if (event.target === document.getElementById("popup") || event.target === document.getElementById("closeBtn")) {
    document.getElementById("popup").style.display = "none";
  }
});

// submit credits earned value
document.getElementById("submitBtn").addEventListener("click", (event) => {
  event.preventDefault();
  const creditsEarned = document.getElementById("creditsEarnedInput").value;
  // do something with the submitted value, such as update the table or send it to the server
  console.log(`Credits Earned submitted: ${creditsEarned}`);
  document.getElementById("popup").style.display = "none";
});
