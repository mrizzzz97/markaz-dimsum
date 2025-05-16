// Script untuk menyembunyikan/memunculkan navbar saat scroll
(function() {
  let lastScrollTop = 0;
  const navbar = document.querySelector('.navbar');
  window.addEventListener('scroll', function() {
    const st = window.pageYOffset || document.documentElement.scrollTop;
    if (st > lastScrollTop && st > 60) {
      // Scroll ke bawah, sembunyikan navbar
      navbar.style.transform = 'translateY(-100%)';
      navbar.style.transition = 'transform 0.3s';
    } else {
      // Scroll ke atas, tampilkan navbar
      navbar.style.transform = 'translateY(0)';
      navbar.style.transition = 'transform 0.3s';
    }
    lastScrollTop = st <= 0 ? 0 : st;
  }, false);
})();