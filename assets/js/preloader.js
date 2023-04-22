
function prelaod() {
  $(() => {
    setInterval(() => {
      let preload = $('.preloader');

      preload.css('opacity', 0);

      setInterval(() => {
        preload.remove(),
          parseInt(preload.css('--duration')) * 1000
      });
    }, 1000)
  })
}

prelaod()