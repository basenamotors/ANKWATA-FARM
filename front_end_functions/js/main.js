import { setupTabPersistence } from './modules.js';
import { initializeRevenueChart } from './revenueTrends.js';
import { initializeHerdGrowthChart, destroyHerdGrowthChart } from './herdGrowth.js';
import { setTheme, initTheme, toggleTheme, updateThemeUI } from './modules/theme.js';
import { setupTableSearch } from './modules/tableSearch.js';
import { setupTableFilter } from './modules/tableFilter.js';
import { setupTablePagination } from './modules/tablePagination.js';

/**
 * Mobile menu manager for responsive navigation
 */
class MobileMenuManager {
  constructor() {
    this.sideMenu = document.getElementById('sideMenu');
    this.sideMenuToggle = document.getElementById('sideMenuToggle');
    this.sideMenuOverlay = document.getElementById('sideMenuOverlay');

    if (this.sideMenu && this.sideMenuToggle && this.sideMenuOverlay) {
      this.init();
    } else {
      console.warn('MobileMenuManager: Missing one or more required elements.');
    }
  }

  init() {
    this.bindEvents();
    this.handleResize();
  }

  bindEvents() {
    this.sideMenuToggle?.addEventListener('click', () => this.toggleSideMenu());
    this.sideMenuOverlay?.addEventListener('click', () => this.toggleSideMenu());

    document.querySelectorAll('.side-menu .nav-link').forEach(link => {
      link.addEventListener('click', () => {
        if (window.innerWidth < 768) this.closeSideMenu();
      });
    });

    let resizeTimeout;
    window.addEventListener('resize', () => {
      clearTimeout(resizeTimeout);
      resizeTimeout = setTimeout(() => this.handleResize(), 150);
    });
  }

  toggleSideMenu() {
    const isOpen = this.sideMenu.classList.toggle('show');
    this.sideMenuOverlay.classList.toggle('show');
    this.sideMenuToggle?.setAttribute('aria-expanded', isOpen);
  }

  closeSideMenu() {
    this.sideMenu.classList.remove('show');
    this.sideMenuOverlay.classList.remove('show');
    this.sideMenuToggle?.setAttribute('aria-expanded', 'false');
  }

  handleResize() {
    if (window.innerWidth >= 768) this.closeSideMenu();
  }
}

/**
 * Chart initialization with error handling
 */
async function initializeCharts() {
  try {
    await initializeRevenueChart();
    await initializeHerdGrowthChart();
  } catch (error) {
    console.error('❌ Error initializing charts:', error);
  }
}

/**
 * Chart cleanup on page unload
 */
function cleanupCharts() {
  try {
    destroyHerdGrowthChart();
  } catch (error) {
    console.error('Error cleaning up charts:', error);
  }
}

document.addEventListener('DOMContentLoaded', () => {
  // Theme + tab persistence
  initTheme();
  setupTabPersistence();

  // Mobile menu
  window.mobileMenuManager = new MobileMenuManager();

  // Charts
  setTimeout(initializeCharts, 300);

  // Theme toggle
  const themeButton = document.querySelector('#themeToggle a');
  if (themeButton) {
    const icon = themeButton.querySelector('i');
    const label = themeButton.querySelector('span');
    const currentTheme = localStorage.getItem('theme') || 'system';
    updateThemeUI(currentTheme, icon, label);

    themeButton.addEventListener('click', e => {
      e.preventDefault();
      const newTheme = toggleTheme();
      updateThemeUI(newTheme, icon, label);
    });

    const systemThemeQuery = window.matchMedia('(prefers-color-scheme: dark)');
    systemThemeQuery.addEventListener('change', () => {
      if (localStorage.getItem('theme') === 'system') {
        setTheme('system');
        updateThemeUI('system', icon, label);
      }
    });
  } else {
    console.error('Theme toggle button not found');
  }

  // Table logic: search, filter, pagination
  const pagination = setupTablePagination(
    ".topPerformingPartners table",
    ".topPerformingPartners .card-footer",
    {
      spinner: true,
      spinnerTarget: document.querySelector(".topPerformingPartners .spinner"),
      submitting: "",
      debugDelay: 800,
      pageSize: 10
    }
  );

  setupTableSearch(
    ".topPerformingPartners input[type='text']",
    ".topPerformingPartners table",
    [6],
    {
      spinner: true,
      spinnerTarget: document.querySelector(".topPerformingPartners .spinner"),
      submitting: ""
    },
    () => pagination.refreshPagination()
  );

  setupTableFilter(
    ".topPerformingPartners .btn-outline-primary",
    ".topPerformingPartners table",
    [
      { colIndex: 5, type: "text", value: "Active" },
      { colIndex: 1, type: "number", min: 10000 }
    ],
    {
      spinner: true,
      spinnerTarget: document.querySelector(".topPerformingPartners .spinner"),
      submitting: "",
      debugDelay: 1000
    },
    () => pagination.refreshPagination()
  );
});

// Reinitialize charts when tab becomes visible
document.addEventListener('visibilitychange', () => {
  if (!document.hidden) setTimeout(initializeCharts, 100);
});

// Cleanup on unload
window.addEventListener('beforeunload', cleanupCharts);
window.addEventListener('pagehide', cleanupCharts);

export { initializeCharts, cleanupCharts };
