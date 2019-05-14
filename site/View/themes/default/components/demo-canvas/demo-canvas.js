const demoCanvas = {

  show: function(mode) {
    const modeControl = document.querySelector('.demo-canvas__mode-controls [data-mode=' + mode + ']');
    const modeScreen = document.querySelector('.demo-canvas__screen-items-group [data-mode=' + mode + ']');

    this.reset();

    modeControl.classList.add('is-active');
    modeScreen.classList.add('is-active');
  },

  reset: function() {
    const modeControls = document.querySelectorAll('.demo-canvas__mode-controls [data-mode]');
    const modeScreens = document.querySelectorAll('.demo-canvas__screen-items-group [data-mode]');

    modeControls.forEach(function(el, i) {
      el.classList.remove('is-active');
      modeScreens[i].classList.remove('is-active');
    });
  } 
};
