// front_end_functions/js/modules/theme.js

export function setTheme(theme) {
  // Apply theme dynamically
  if (theme === 'system') {
    document.documentElement.removeAttribute('data-theme');
  } else {
    document.documentElement.setAttribute('data-theme', theme);
  }

  // Save to local storage
  localStorage.setItem('theme', theme);
}

// Retrieve and apply theme immediately on page load
export function initTheme() {
  const savedTheme = localStorage.getItem('theme') || 'system';
  setTheme(savedTheme);
}

// Toggle function (cycles between themes)
export function toggleTheme() {
  const current = localStorage.getItem('theme') || 'system';
  const next =
    current === 'light' ? 'dark' :
    current === 'dark' ? 'system' : 'light';
  setTheme(next);
  return next;
}

// Update icon and label based on theme
export function updateThemeUI(theme, icon, label) {
  if (icon) {
    icon.className =
      theme === 'dark' ? 'bi bi-moon' :
      theme === 'light' ? 'bi bi-sun' :
      'bi bi-circle-half';
  }

  if (label) {
    label.textContent =
      theme === 'dark' ? 'Dark' :
      theme === 'light' ? 'Light' : 'System';
  }
}