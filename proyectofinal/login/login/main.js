$(document).ready(function () {
  // Lógica para el comportamiento de los input y textarea
  $('.form').find('input, textarea').on('keyup blur focus', function (e) {
      var $this = $(this),
          label = $this.prev('label');

      if (e.type === 'keyup') {
          if ($this.val() === '') {
              label.removeClass('active highlight');
          } else {
              label.addClass('active highlight');
          }
      } else if (e.type === 'blur') {
          if ($this.val() === '') {
              label.removeClass('active highlight');
          } else {
              label.removeClass('highlight');
          }
      } else if (e.type === 'focus') {
          if ($this.val() === '') {
              label.removeClass('highlight');
          } else if ($this.val() !== '') {
              label.addClass('highlight');
          }
      }
  });

  // Lógica para el manejo de pestañas
  $('.tab a').on('click', function (e) {
      e.preventDefault();
      $(this).parent().addClass('active');
      $(this).parent().siblings().removeClass('active');

      var target = $(this).attr('href');
      $('.tab-content > div').not(target).hide();
      $(target).fadeIn(600);
  });
});
