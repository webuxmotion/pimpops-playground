const canvas = {

  show: function(mode) {
    const modeControl = document.querySelector('.canvas__mode-controls [data-mode=' + mode + ']');
    const modeScreen = document.querySelector('.canvas__screen-items-group [data-mode=' + mode + ']');

    this.reset();

    modeControl.classList.add('is-active');
    modeScreen.classList.add('is-active');
  },

  reset: function() {
    const modeControls = document.querySelectorAll('.canvas__mode-controls [data-mode]');
    const modeScreens = document.querySelectorAll('.canvas__screen-items-group [data-mode]');

    modeControls.forEach(function(el, i) {
      el.classList.remove('is-active');
      modeScreens[i].classList.remove('is-active');
    });
  },

  showFile: function(fileName) {
    const filePlaceholderEl = document.querySelector('.file-placeholder');
    const fileEl = document.querySelector('.file');
    const tabNameEl = document.querySelector('.file__tab-name');
    const fileContentEl = document.querySelector('.file__content');
    const tabName = dataServiceFiles[fileName].name;
    const fileDataEl = document.querySelectorAll('[data-file=' + fileName + ']');
    const fileData = fileDataEl[0].innerHTML;

    tabNameEl.innerHTML = tabName;
    fileContentEl.innerHTML = fileData;

    filePlaceholderEl.classList.add('is-hide');
    fileEl.classList.remove('is-hide');
  }, 

  showFromDemoCanvas: function() {
    setTimeout(function() {
      modal.close();
      demoCanvas.reset();
    }, 400);
    app.scrollTo('playground');
  },

  closeFile: function() {
    const filePlaceholderEl = document.querySelector('.file-placeholder');
    const fileEl = document.querySelector('.file');

    filePlaceholderEl.classList.remove('is-hide');
    fileEl.classList.add('is-hide');
  } 
}
