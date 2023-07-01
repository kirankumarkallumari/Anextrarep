var form = document.getElementById("healthReportForm");
form.addEventListener("submit", function(event) {
  var reportFile = document.getElementById("report").files[0];
  if (reportFile && reportFile.type !== "application/pdf") {
    alert("Please upload a PDF file for the health report.");
    event.preventDefault();
  }
});