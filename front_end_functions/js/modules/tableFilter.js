/**
 * front_end_functions/js/modules/tableFilter.js
 * Auto-pagination refresh version
 */

import { attachSpinner, removeSpinner } from './spinner.js';

export function setupTableFilter(buttonSelector, tableSelector, filters = [], config = {}) {
    const button = document.querySelector(buttonSelector);
    const table = document.querySelector(tableSelector);

    if (!button || !table) return;

    const tbody = table.querySelector("tbody");

    // Detect pagination API stored on table
    function getPaginationApi() {
        return table.__paginationInstance || null;
    }

    button.addEventListener("click", function () {
        const rows = tbody.querySelectorAll("tr");

        if (config.spinner) {
            attachSpinner(config.spinnerTarget, config.submitting, { inline: true, size: "md" });
        }

        const delay = config.debugDelay || 0;

        setTimeout(() => {
            rows.forEach(row => {
                let showRow = true;

                filters.forEach(filter => {
                    const cells = row.querySelectorAll("td");
                    const cell = cells[filter.colIndex];
                    if (!cell) return;

                    const raw = cell.innerText.trim();

                    if (filter.type === "text") {
                        if (!raw.toLowerCase().includes(filter.value.toLowerCase())) {
                            showRow = false;
                        }
                    }

                    if (filter.type === "number") {
                        const num = parseFloat(raw.replace(/[^0-9.-]/g, ""));
                        if (isNaN(num)) {
                            showRow = false;
                        } else {
                            if (filter.min !== undefined && num < filter.min) showRow = false;
                            if (filter.max !== undefined && num > filter.max) showRow = false;
                        }
                    }
                });

                row.style.display = showRow ? "" : "none";
            });

            if (config.spinner) removeSpinner(config.spinnerTarget);

            // 🔥 Auto-refresh pagination
            const pagination = getPaginationApi();
            if (pagination) pagination.refreshPagination();

        }, delay);
    });
}
