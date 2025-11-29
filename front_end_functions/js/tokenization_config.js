  $(document).ready(function () {
    // Init Select2
    $('#language').select2({
      tags: true,
      placeholder: "Select or add languages",
      width: '100%'
    });

    // Add custom language
    $('#addLanguageBtn').click(function () {
      const newLang = $('#customLanguage').val().trim();
      if (newLang !== "") {
        // Check if option already exists
        if ($("#language option[value='" + newLang + "']").length === 0) {
          const newOption = new Option(newLang, newLang, true, true);
          $('#language').append(newOption).trigger('change');
        } else {
          $('#language').val(newLang).trigger('change');
        }
        $('#customLanguage').val(''); // Clear input
      }
    });

    // Progress Updates
function updateProgress(percent, message) {
  const progressBar = document.getElementById('tokenizerProgress');
  const progressText = document.getElementById('progressText');
  
  progressBar.style.width = `${percent}%`;
  progressBar.setAttribute('aria-valuenow', percent);
  progressText.textContent = `${percent}% - ${message}`;
  
  if (percent >= 100) {
    progressBar.classList.remove('progress-bar-animated');
    progressBar.classList.remove('progress-bar-striped');
  }
}

// Statistics Updates
function updateStats(vocabSize, oovRate) {
  document.getElementById('vocabSizeStat').textContent = vocabSize.toLocaleString();
  document.getElementById('oovRateStat').textContent = `${oovRate.toFixed(2)}%`;
}

// Initialize Charts
function initCharts() {
  // Vocabulary Growth Chart
  const vocabChart = new Chart(document.getElementById('vocabGrowthChart'), {
    type: 'line',
    data: {
      labels: [],
      datasets: [{
        label: 'Vocabulary Size',
        data: [],
        borderColor: 'rgb(75, 192, 192)',
        tension: 0.1
      }]
    },
    options: {
      responsive: true,
      plugins: {
        legend: { display: false }
      }
    }
  });

  // Merge History Chart
  const mergeChart = new Chart(document.getElementById('mergeHistoryChart'), {
    type: 'bar',
    data: {
      labels: [],
      datasets: [{
        label: 'Merge Frequency',
        data: [],
        backgroundColor: 'rgba(54, 162, 235, 0.5)'
      }]
    },
    options: {
      responsive: true,
      plugins: {
        legend: { display: false }
      }
    }
  });

  return { vocabChart, mergeChart };
}

// WebSocket for real-time updates
const socket = new WebSocket(`ws://${window.location.host}/tokenizer_updates`);
const charts = initCharts();

socket.onmessage = (event) => {
  const data = JSON.parse(event.data);
  
  if (data.type === 'log') {
    document.getElementById('logPanel').textContent += data.message + '\n';
  } 
  else if (data.type === 'progress') {
    updateProgress(data.percent, data.message);
  }
  else if (data.type === 'stats') {
    updateStats(data.vocabSize, data.oovRate);
    
    // Update charts
    charts.vocabChart.data.labels.push(new Date().toLocaleTimeString());
    charts.vocabChart.data.datasets[0].data.push(data.vocabSize);
    charts.vocabChart.update();
    
    if (data.mergeHistory) {
      charts.mergeChart.data.labels = Object.keys(data.mergeHistory);
      charts.mergeChart.data.datasets[0].data = Object.values(data.mergeHistory);
      charts.mergeChart.update();
    }
  }
};

// Form Submission
document.getElementById('tokenizerConfigForm').addEventListener('submit', async (e) => {
  e.preventDefault();
  
  const submitBtn = document.getElementById('startTokenizerBtn');
  submitBtn.disabled = true;
  document.getElementById('loadingSpinner').classList.remove('d-none');
  document.getElementById('submitText').textContent = 'Processing...';
  
  try {
    const formData = new FormData(e.target);
    const response = await fetch('/start_tokenizer', {
      method: 'POST',
      body: formData
    });
    
    if (!response.ok) throw new Error('Tokenization failed');
    
  } catch (error) {
    console.error('Error:', error);
  } finally {
    submitBtn.disabled = false;
    document.getElementById('loadingSpinner').classList.add('d-none');
    document.getElementById('submitText').textContent = '🚀 Start Tokenizer';
  }
});

// Clear Logs Button
document.getElementById('clearLogsBtn').addEventListener('click', () => {
  document.getElementById('logPanel').textContent = '';
});

// Export Config Button
document.getElementById('exportConfigBtn').addEventListener('click', () => {
  const config = {
    // Collect all configuration values
  };
  
  const blob = new Blob([JSON.stringify(config, null, 2)], { type: 'application/json' });
  const url = URL.createObjectURL(blob);
  const a = document.createElement('a');
  a.href = url;
  a.download = 'tokenizer_config.json';
  a.click();
  URL.revokeObjectURL(url);
});
  });
