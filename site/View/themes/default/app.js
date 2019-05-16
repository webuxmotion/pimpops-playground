const app = {
  
  scrollTo: function(value, event) {
    if (event) {
      event.preventDefault();
    }
    const elementToScroll = document.querySelector('[data-scrollto=' + value + ']');
    let offsetTop = elementToScroll.offsetTop;
    window.scrollTo({
      top: offsetTop,
      behavior: 'smooth'
    });
  }
}
//=require components/canvas/canvas.js 
//=require components/modal/modal.js 
//=require components/demo-canvas/demo-canvas.js 
//=require components/tree-item/tree-item.js 
//=require components/file-service/file-service.js 
