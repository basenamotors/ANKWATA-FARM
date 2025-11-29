/**
 * front_end_functions/js/modules/tableSearch.js
 * Auto-pagination refresh version
 */

import { attachSpinner, removeSpinner } from './spinner.js';

export function setupTableSearch(inputSelector, tableSelector, excludeCols = [], config = {}) {
    const input = document.querySelector(inputSelector);
    const table = document.querySelector(tableSelector);

    if (!input || !table) return;

    const tbody = table.querySelector("tbody");

    // 🔍 Auto-detect pagination instance (if exists)
    function getPaginationApi() {
        return table.__paginationInstance || null;
    }

    input.addEventListener("input", function () {
        const filter = this.value.toLowerCase();
        const rows = Array.from(tbody.querySelectorAll("tr"));

        if (config.spinner) {
            attachSpinner(config.spinnerTarget, config.submitting, { inline: true, size: "md" });
        }

        setTimeout(() => {
            let matchCount = 0;

            rows.forEach(row => {
                let textMatch = false;

                row.querySelectorAll("td").forEach((cell, index) => {
                    if (!excludeCols.includes(index)) {
                        if (cell.innerText.toLowerCase().includes(filter)) {
                            textMatch = true;
                        }
                    }
                });

                row.style.display = textMatch ? "" : "none";
                if (textMatch) matchCount++;
            });

            // remove past "no results"
            tbody.querySelector(".no-results-row")?.remove();

            // add "no results" message
            if (filter && matchCount === 0) {
                const colCount = table.querySelectorAll("thead th").length;

                const tr = document.createElement("tr");
                tr.classList.add("no-results-row");

                const td = document.createElement("td");
                td.colSpan = colCount;
                td.className = "text-center fw-bold text-danger";
                td.textContent = `No results found for "${this.value}"`;

                tr.appendChild(td);
                tbody.appendChild(tr);
            }

            if (config.spinner) removeSpinner(config.spinnerTarget);

            // 🔥 Auto-refresh pagination if available
            const pagination = getPaginationApi();
            if (pagination) pagination.refreshPagination();

        }, config.debugDelay || 500);
    });
}
