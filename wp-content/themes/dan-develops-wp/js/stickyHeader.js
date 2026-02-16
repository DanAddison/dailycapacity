document.addEventListener('DOMContentLoaded', () => {
  const header = document.getElementById('masthead');
  const sentinel = document.getElementById('header-sentinel');

  const observer = new IntersectionObserver(
    ([entry]) => {
      header.classList.toggle('is-scrolled', !entry.isIntersecting);
    },
    {
      root: null,
      threshold: 0,
    }
  );

  observer.observe(sentinel);
});

