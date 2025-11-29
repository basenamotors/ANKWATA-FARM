/**
 * front_end_functions/js/modules/tablePagination.js
 *
 * Dynamic table pagination with spinner support and search/filter integration.
 * @param {string} tableSelector - CSS selector for the table.
 * @param {string} footerSelector - CSS selector for the card footer containing pagination controls.
 * @param {object} config - Optional config {
 *   spinner: true,
 *   spinnerTarget: HTMLElement,
 *   submitting: string,
 *   debugDelay: number,
 *   pageSize: number
 * }
 */

import { attachSpinner, removeSpinner } from './spinner.js';

export function setupTablePagination(tableSelector, footerSelector, config = {}) {
  const table = document.querySelector(tableSelector);
  const footer = document.querySelector(footerSelector);

  if (!table || !footer) return;

  const tbody = table.querySelector("tbody");
  const pageSizeSelect = footer.querySelector("select");
  const infoText = footer.querySelector("small");
  const prevBtn = footer.querySelector("button[aria-label='Previous']");
  const nextBtn = footer.querySelector("button[aria-label='Next']");
  const btnGroup = footer.querySelector(".btn-group");

  let currentPage = 1;
  let pageSize = config.pageSize || parseInt(pageSizeSelect?.value) || 10;

  /**
   * Build numbered page buttons dynamically
   */
  function buildPageButtons(totalPages) {
    btnGroup.querySelectorAll("button:not([aria-label])").forEach(btn => btn.remove());

    for (let i = 1; i <= totalPages; i++) {
      const btn = document.createElement("button");
      btn.className = "btn btn-outline-secondary";
      btn.textContent = i;
      if (i === currentPage) btn.classList.add("active");

      btn.addEventListener("click", () => {
        currentPage = i;
        renderPage();
      });

      btnGroup.insertBefore(btn, nextBtn);
    }
  }

  /**
   * Render current page based on visible rows
   */
  function renderPage() {
    if (config.spinner) {
      attachSpinner(config.spinnerTarget, config.submitting, { inline: true, size: "md" });
    }

    const delay = config.debugDelay || 0;

    setTimeout(() => {
      const visibleRows = Array.from(tbody.querySelectorAll("tr")).filter(r => r.style.display !== "none");
      const totalRows = visibleRows.length;

      // Remove any previous "no records" row
      tbody.querySelector(".no-records-row")?.remove();

      if (totalRows === 0) {
        infoText.textContent = "No records available to show.";

        const colCount = table.querySelectorAll("thead th").length;
        const tr = document.createElement("tr");
        tr.className = "no-records-row";
        const td = document.createElement("td");
        td.colSpan = colCount;
        td.className = "text-center fw-bold text-danger";
        td.textContent = "No records available to show.";
        tr.appendChild(td);
        tbody.appendChild(tr);

        btnGroup.querySelectorAll("button:not([aria-label])").forEach(btn => btn.remove());
        prevBtn.disabled = true;
        nextBtn.disabled = true;

        if (config.spinner) removeSpinner(config.spinnerTarget);
        return;
      }

      const totalPages = pageSize === totalRows ? 1 : Math.ceil(totalRows / pageSize);
      if (currentPage > totalPages) currentPage = totalPages;

      const start = (currentPage - 1) * pageSize;
      const end = start + pageSize;

      visibleRows.forEach((row, index) => {
        row.style.display = (index >= start && index < end) ? "" : "none";
      });

      const showingCount = Math.min(pageSize, totalRows - start);
      infoText.textContent = `Showing ${showingCount} of ${totalRows} records`;

      buildPageButtons(totalPages);
      prevBtn.disabled = currentPage === 1;
      nextBtn.disabled = currentPage === totalPages;

      if (config.spinner) removeSpinner(config.spinnerTarget);
    }, delay);
  }

  /**
   * Event bindings
   */
  pageSizeSelect?.addEventListener("change", () => {
    const visibleRows = Array.from(tbody.querySelectorAll("tr")).filter(r => r.style.display !== "none");
    pageSize = pageSizeSelect.value === "all" ? visibleRows.length : parseInt(pageSizeSelect.value);
    currentPage = 1;
    renderPage();
  });

  prevBtn?.addEventListener("click", () => {
    if (currentPage > 1) {
      currentPage--;
      renderPage();
    }
  });

  nextBtn?.addEventListener("click", () => {
    const visibleRows = Array.from(tbody.querySelectorAll("tr")).filter(r => r.style.display !== "none");
    const totalPages = Math.ceil(visibleRows.length / pageSize);
    if (currentPage < totalPages) {
      currentPage++;
      renderPage();
    }
  });

  // Initial render
  renderPage();

  // ✅ Expose pagination API so search & filter modules can auto-refresh
  table.__paginationInstance = {
    refreshPagination: () => {
        currentPage = 1;
        renderPage();
    }
};

return table.__paginationInstance;
}

