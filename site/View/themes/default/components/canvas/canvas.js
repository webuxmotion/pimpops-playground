const canvas = {

  showFile: function(fileName) {
    const filePlaceholderEl = document.querySelector('.file-placeholder');
    const fileEl = document.querySelector('.file');
    const tabNameEl = document.querySelector('.file__tab-name');
    const fileContentEl = document.querySelector('.file__content');
    const tabName = pgFiles[fileName].name;
    const fileDataEl = document.querySelectorAll('[data-file=' + fileName + ']');
    const fileData = fileDataEl[0].innerHTML;

    tabNameEl.innerHTML = tabName;
    fileContentEl.innerHTML = fileData;

    filePlaceholderEl.classList.add('is-hide');
    fileEl.classList.remove('is-hide');
  }, 

  closeFile: function() {
    const filePlaceholderEl = document.querySelector('.file-placeholder');
    const fileEl = document.querySelector('.file');

    filePlaceholderEl.classList.remove('is-hide');
    fileEl.classList.add('is-hide');
  } 
}
