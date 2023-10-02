window.addEventListener('load', function() {
  active_link();
});

function active_link()
{
var btnContainer = document.getElementById("nav-list");
var btns = btnContainer.getElementsByClassName("nav-item");

const pathname = window.location.pathname;
const pathParts = pathname.split('/');
const lastPart = pathParts[pathParts.length - 1];
        


for (var i = 0; i < btns.length; i++) {
  var name = btns[i].href.split('/');
  var part = name[name.length - 1];
     
  if (part === lastPart) {
    btns[i].classList.add('active');
  }
}
} 

function AfterAjax()
{
// -----use the FileReader object to preview an image:----
// Get a reference to the file input element on the page

      fileInput = document.getElementById('fileInput');
   
      fileInput.addEventListener('change', function ()
      {
         var file = this.files[0];
         var reader = new FileReader();
   
        reader.addEventListener('load', function ()
        {
           var img = document.getElementById('previewImg');
           img.src = this.result;
        });
   
        reader.readAsDataURL(file);
    });
  
}
 AfterAjax();



 function openModal() {
  // Get the modal element
  var modal = document.getElementById("myModal");

  // Show the modal
  modal.style.display = "block";

  // Add the "modal-open" class to the body to blur the background
  document.body.classList.add("modal-open");
}

function closeModal() {
  // Get the modal element
  var modal = document.getElementById("myModal");

  // Hide the modal
  modal.style.display = "none";

  // Remove the "modal-open" class from the body to un-blur
  // Remove the "modal-open" class from the body to un-blur the background
  document.body.classList.remove("modal-open");
}




