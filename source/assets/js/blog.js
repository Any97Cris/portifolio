/**
 * Blog - filtro por categoria + paginação dos posts
 */
(function() {
  "use strict";

  const blogList = document.querySelector('.blog-list');
  if (!blogList) return;

  const perPage = parseInt(blogList.dataset.perPage, 10) || 4;
  const items = Array.from(blogList.querySelectorAll('.blog-item'));
  const filters = blogList.querySelectorAll('.blog-filters li');
  const pagination = blogList.querySelector('.blog-pagination');
  const postsSection = document.querySelector('#posts');

  let currentFilter = '*';
  let currentPage = 1;

  function render() {
    const visible = items.filter(item => currentFilter === '*' || item.matches(currentFilter));
    const totalPages = Math.max(1, Math.ceil(visible.length / perPage));
    currentPage = Math.min(currentPage, totalPages);

    const start = (currentPage - 1) * perPage;
    const pageItems = visible.slice(start, start + perPage);

    items.forEach(item => item.classList.toggle('d-none', !pageItems.includes(item)));
    renderPagination(totalPages);

    if (typeof AOS !== 'undefined') AOS.refresh();
  }

  function pageButton(label, page, options = {}) {
    const button = document.createElement('button');
    button.type = 'button';
    button.innerHTML = label;
    button.disabled = !!options.disabled;
    if (options.active) button.classList.add('active');
    if (options.ariaLabel) button.setAttribute('aria-label', options.ariaLabel);
    button.addEventListener('click', () => goToPage(page));
    return button;
  }

  function renderPagination(totalPages) {
    pagination.innerHTML = '';
    if (totalPages <= 1) return;

    pagination.appendChild(pageButton('<i class="bi bi-chevron-left"></i>', currentPage - 1, {
      disabled: currentPage === 1,
      ariaLabel: 'Página anterior'
    }));

    for (let page = 1; page <= totalPages; page++) {
      pagination.appendChild(pageButton(page, page, { active: page === currentPage }));
    }

    pagination.appendChild(pageButton('<i class="bi bi-chevron-right"></i>', currentPage + 1, {
      disabled: currentPage === totalPages,
      ariaLabel: 'Próxima página'
    }));
  }

  function goToPage(page) {
    currentPage = page;
    render();
    postsSection.scrollIntoView({ behavior: 'smooth' });
  }

  filters.forEach(filter => {
    filter.addEventListener('click', function() {
      blogList.querySelector('.blog-filters .filter-active').classList.remove('filter-active');
      this.classList.add('filter-active');
      currentFilter = this.getAttribute('data-filter');
      currentPage = 1;
      render();
    });
  });

  render();

})();
