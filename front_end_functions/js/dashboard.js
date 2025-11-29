// front_end_functions/js/dashboard.js
import { initializeRevenueChart } from './revenueTrends.js';
import { initializeHerdGrowthChart, destroyHerdGrowthChart } from './herdGrowth.js';
import { setupTableSearch } from './modules/tableSearch.js';
import { setupTableFilter } from './modules/tableFilter.js';

document.addEventListener("DOMContentLoaded", () => {
  const tabTrigger = document.getElementById("dashboard-tab");
  let tabLoaded = false;

  if (!tabTrigger) {
    console.error("❌ Dashboard: Missing tab trigger element (#dashboard-tab)");
    return;
  }

  /**
   * Load dashboard charts + table utilities when tab becomes visible
   */
  tabTrigger.addEventListener("shown.bs.tab", () => {
    if (tabLoaded) return;
    tabLoaded = true;

    // Delay ensures DOM is fully ready
    setTimeout(initializeCharts, 300);

    try {
      // Setup search
      setupTableSearch(
        ".topPerformingPartners input[type='text']",
        ".topPerformingPartners table",
        [6], // exclude Actions column
        { 
          spinner: true, 
          spinnerTarget: document.querySelector(".topPerformingPartners .spinner"), 
          submitting: "Searching..."
        }
      );

      // Setup filter
      setupTableFilter(
        ".topPerformingPartners .btn-outline-primary", // funnel button
        ".topPerformingPartners table",               // table
        [
          { colIndex: 5, type: "text", value: "Active" },   // Status column
          { colIndex: 1, type: "number", min: 10000 }       // Investment column
        ],
        { 
          spinner: true, 
          spinnerTarget: document.querySelector(".topPerformingPartners .spinner"), 
          submitting: "Filtering...", 
          debugDelay: 1000 // keep spinner visible for 1s
        }
      );
    } catch (error) {
      console.error("❌ Dashboard: Error initializing table search/filter:", error);
    }
  });

  /**
   * Reset flag when tab is hidden
   */
  tabTrigger.addEventListener("hidden.bs.tab", () => {
    tabLoaded = false;
  });
});

/**
 * Initialize dashboard charts (Revenue + Herd Growth)
 */
async function initializeCharts() {
  try {
    await initializeRevenueChart();
    await initializeHerdGrowthChart();
  } catch (error) {
    console.error("❌ Dashboard: Error initializing charts:", error);
  }
}

/**
 * Cleanup charts on page unload
 */
function cleanupCharts() {
  try {
    destroyHerdGrowthChart();
  } catch (error) {
    console.error("❌ Dashboard: Error cleaning up charts:", error);
  }
}

window.addEventListener("beforeunload", cleanupCharts);
window.addEventListener("pagehide", cleanupCharts);

// Export for potential manual control
export { initializeCharts, cleanupCharts };
