
/*document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('download').addEventListener('click', function () {
        let filePDF = document.getElementById('main');
        html2pdf().from(filePDF).save();
    });
});*/
       /* function downloadPDF() {
            var element = document.getElementById("pdfContent");
            html2pdf(element);
        }
*/
function downloadPDF() {
    var element = document.getElementById('pdfContent');
    // Adjust the delay based on your content loading time
    setTimeout(() => {
      html2pdf(element);
    }, 1000);
  }
