const modal = {

  modalEl: document.querySelector('.modal'),

  show: function() {
    this.modalEl.classList.add('is-show');     
  },

  close: function() {
    this.modalEl.classList.remove('is-show');     
  }
}
