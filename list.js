const courseList = document.getElementById("courseList");
const checkboxes = courseList.querySelectorAll("input[type='checkbox']");
const submitBtn = document.getElementById("submitBtn");
const creditCount = document.getElementById("creditCount");

let totalCredits = 0;

checkboxes.forEach(function(checkbox) {
	checkbox.addEventListener('change', function() {
		if (this.checked) {
			totalCredits += parseInt(this.parentNode.getAttribute("data-credits"));
		} else {
			totalCredits -= parseInt(this.parentNode.getAttribute("data-credits"));
		}
		creditCount.textContent = `Total Credits Selected: ${totalCredits}`;
	});
});

submitBtn.addEventListener('click', function() {
	if (totalCredits === 8) {
		alert("Courses submitted successfully!");
	} else {
		alert(`You have selected ${totalCredits} credits. Please select courses that add up to 8 credits.`);
		
	}
});
