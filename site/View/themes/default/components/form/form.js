const form = {

  sendContactMessage: function(e, ctx) {
    e.preventDefault();

    ctx.classList.add('form_sending');

    let formData = new FormData(ctx);

    axios({
      method: 'post',
      url: '/api/send_contact_message',
      data: formData,
      config: { headers: {'Content-Type': 'multipart/form-data' }}
    })
    .then(function (response) {
      if(response.data !== 0) {
        setTimeout(() => {
          ctx.classList.remove('form_sending');
          ctx.classList.add('form_success');

          ctx.querySelector('[name="email"]').value = '';
          ctx.querySelector('[name="message"]').value = '';

          setTimeout(() => {
            ctx.classList.remove('form_success');
          }, 3000);
        }, 1000);
      };
    })
    .catch(function (response) {
        console.log(response);
    });

     
  }
}
