const treeItem = {

  toggle: function(ctx) {
    let _this = ctx;
    let classes = ctx.className; 

    let classExist = classes.indexOf('is-active');

    if (classExist == -1) {
      ctx.classList.add('is-active'); 
      ctx.nextElementSibling.classList.add('is-active');
    } else {
      ctx.classList.remove('is-active');
      ctx.nextElementSibling.classList.remove('is-active');
    } 
  }
}
