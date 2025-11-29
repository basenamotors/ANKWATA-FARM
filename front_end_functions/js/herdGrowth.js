/* =======================================================================  
   HERD GROWTH CHART (MULTI-DATASET FOR ALL BREEDS)
   ======================================================================= */

let HERD_DATA = null;
let herdChartInstance = {};

export async function initializeHerdGrowthChart(canvasId = "herdGrowthChart") {
    // Prevent duplicate initialization
    if (herdChartInstance[canvasId]) {
        return herdChartInstance[canvasId];
    }

    HERD_DATA = await fetchHerdGrowthData();
    if (!HERD_DATA) {
        console.error("Failed to load herd growth data.");
        return null;
    }

    const ctx = document.getElementById(canvasId);
    if (!ctx) {
        console.warn(`Canvas '${canvasId}' not found.`);
        return null;
    }

    const herdGrowthCard = ctx.closest(".herdGrowthCard");
    if (!herdGrowthCard) {
        console.warn("Chart must be inside a .herdGrowthCard container.");
        return null;
    }

    const periodButtons = herdGrowthCard.querySelectorAll(".btn-group .btn");
    const timeRangeSelect = herdGrowthCard.querySelector(".form-select:first-child");
    const breedSelect = herdGrowthCard.querySelector('[data-type="breed"]');
    const expandBtn = herdGrowthCard.querySelector(".btn-outline-secondary");

    let currentView = "births";
    let currentTimeRange = "last6Months";
    let currentBreed = "all";
    let isExpanded = false;
    let modalChart = null;

    // Create chart with initial data
    const herdChart = new Chart(ctx, {
        type: "bar",
        data: makeHerdChartData(currentView, currentTimeRange, currentBreed),
        options: makeHerdChartOptions(currentView)
    });

    // Register chart instance
    herdChartInstance[canvasId] = herdChart;

    // Initialize controls
    initializeControls();

    function initializeControls() {
        // Set initial selections
        if (timeRangeSelect) timeRangeSelect.value = "Last 6 Months";
        if (breedSelect) breedSelect.value = "All Breeds";
        
        // Add event listeners
        setupEventListeners();
    }

    function setupEventListeners() {
        // Period buttons (Births/Sales/Health)
        periodButtons.forEach(btn => {
            btn.addEventListener("click", () => {
                periodButtons.forEach(b => b.classList.remove("active"));
                btn.classList.add("active");

                currentView = btn.textContent.trim().toLowerCase();
                updateChart();
            });
        });

        // Time range select
        if (timeRangeSelect) {
            timeRangeSelect.addEventListener("change", (e) => {
                const value = e.target.value;
                currentTimeRange = mapTimeRangeToKey(value);
                updateChart();
            });
        }

        // Breed select
        if (breedSelect) {
            breedSelect.addEventListener("change", (e) => {
                const value = e.target.value;
                currentBreed = mapBreedToKey(value);
                updateChart();
            });
        }

        // Expand button
        if (expandBtn) {
            expandBtn.addEventListener("click", () => {
                isExpanded ? closeHerdExpand() : openHerdExpand();
            });
        }
    }

    function makeHerdChartData(view, timeRange, breed) {
        if (!HERD_DATA[view] || !HERD_DATA[view][timeRange]) {
            console.error(`Missing data for: ${view}, ${timeRange}`);
            return { labels: [], datasets: [] };
        }
        
        const timeRangeData = HERD_DATA[view][timeRange];
        
        // Get labels from any breed (they should be the same)
        const labels = timeRangeData.all?.labels || timeRangeData.boer?.labels || timeRangeData.local?.labels || [];
        
        let datasets = [];

        if (breed === "all") {
            // ✅ Show both breeds as separate datasets
            datasets = [
                buildHerdDataset("Boer Goats", timeRangeData.boer?.data || [], "#007bff", view),
                buildHerdDataset("Local Breeds", timeRangeData.local?.data || [], "#28a745", view)
            ];
        } else {
            // ✅ Show only the selected breed
            const breedData = timeRangeData[breed]?.data || [];
            const breedLabel = breed === "boer" ? "Boer Goats" : "Local Breeds";
            const breedColor = breed === "boer" ? "#007bff" : "#28a745";
            
            datasets = [
                buildHerdDataset(breedLabel, breedData, breedColor, view)
            ];
        }

        return {
            labels: labels,
            datasets: datasets
        };
    }

    function buildHerdDataset(label, data, color, view) {
        const config = {
            label: label,
            data: data,
            backgroundColor: color + "80",
            borderColor: color,
            borderWidth: 2,
            borderRadius: 4,
            borderSkipped: false,
        };

        // Different styling based on view type
        switch(view) {
            case "births":
                config.borderWidth = 3;
                config.backgroundColor = color + "40";
                break;
            case "sales":
                config.borderWidth = 2;
                config.backgroundColor = color + "60";
                break;
            case "health":
                config.borderWidth = 2;
                config.backgroundColor = color + "50";
                break;
        }

        return config;
    }

    function makeHerdChartOptions(view) {
        const isHealthView = view === "health";
        
        return {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: "top",
                    labels: { 
                        usePointStyle: true, 
                        padding: 20, 
                        font: { size: 12 }
                    }
                },
                tooltip: {
                    backgroundColor: "rgba(0,0,0,0.85)",
                    callbacks: {
                        title: items => `${items[0].label}`,
                        label: ctx => {
                            const suffix = isHealthView ? " cases" : " animals";
                            return `${ctx.dataset.label}: ${ctx.parsed.y}${suffix}`;
                        }
                    }
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        callback: function(value) {
                            return isHealthView ? value + ' cases' : value + ' animals';
                        }
                    },
                    title: {
                        display: true,
                        text: isHealthView ? 'Health Cases' : 'Number of Animals'
                    }
                },
                x: {
                    title: {
                        display: true,
                        text: 'Time Period'
                    }
                }
            }
        };
    }

    function updateChart() {
        const newData = makeHerdChartData(currentView, currentTimeRange, currentBreed);
        
        // Clear existing datasets and add new ones
        herdChart.data.labels = newData.labels;
        herdChart.data.datasets = newData.datasets;
        herdChart.options = makeHerdChartOptions(currentView);
        
        herdChart.update();
    }

    function mapTimeRangeToKey(displayValue) {
        const mapping = {
            "Last 6 Months": "last6Months",
            "Last Year": "lastYear", 
            "All Time": "allTime"
        };
        return mapping[displayValue] || "last6Months";
    }

    function mapBreedToKey(displayValue) {
        const mapping = {
            "All Breeds": "all",
            "Boer Goats": "boer",
            "Local Breeds": "local"
        };
        return mapping[displayValue] || "all";
    }

    function openHerdExpand() {
        isExpanded = true;
        updateHerdExpandBtn(true);
        document.body.insertAdjacentHTML("beforeend", herdModalMarkup());

        const modalEl = document.getElementById("herdChartModal");
        const modalCtx = document.getElementById("herdGrowthChartModal");

        modalChart = new Chart(modalCtx, {
            type: herdChart.config.type,
            data: JSON.parse(JSON.stringify(herdChart.data)),
            options: JSON.parse(JSON.stringify(herdChart.options))
        });

        const modal = new bootstrap.Modal(modalEl);
        modal.show();

        modalEl.addEventListener("hidden.bs.modal", () => {
            modalChart.destroy();
            modalEl.remove();
            isExpanded = false;
            updateHerdExpandBtn(false);
        }, { once: true });
    }

    function closeHerdExpand() {
        const modal = document.getElementById("herdChartModal");
        if (modal) bootstrap.Modal.getInstance(modal)?.hide();
    }

    function updateHerdExpandBtn(state) {
        const icon = expandBtn.querySelector("i");
        expandBtn.classList.toggle("btn-primary", state);
        expandBtn.classList.toggle("btn-outline-secondary", !state);
        icon.className = state ? "bi bi-arrows-angle-contract" : "bi bi-arrows-angle-expand";
    }

    function herdModalMarkup() {
        const title = getHerdModalTitle();
        return `
            <div class="modal fade" id="herdChartModal" tabindex="-1">
                <div class="modal-dialog modal-fullscreen">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title"><i class="bi bi-diagram-3 me-2"></i>${title}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <div style="height: 80vh; width: 100%;">
                                <canvas id="herdGrowthChartModal"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>`;
    }

    function getHerdModalTitle() {
        const viewTitles = {
            births: "Herd Births Analytics",
            sales: "Herd Sales Analytics", 
            health: "Herd Health Analytics"
        };
        return viewTitles[currentView] || "Herd Growth Analytics";
    }

    // Animation
    setTimeout(() => {
        ctx.animate(
            [{ opacity: 0, transform: "translateY(18px)" }, 
             { opacity: 1, transform: "translateY(0)" }],
            { duration: 700, easing: "ease-out" }
        );
    }, 100);

    return herdChart;
}

/* =======================================================================  
   HERD GROWTH DATA (UPDATED FOR BETTER COMPARISON)
   ======================================================================= */

async function fetchHerdGrowthData() {
    try {
        return {
            births: {
                last6Months: {
                    all: {
                        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
                        data: [45, 52, 38, 61, 55, 48] // Total of both breeds
                    },
                    boer: {
                        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
                        data: [25, 30, 22, 35, 32, 28] // Boer only
                    },
                    local: {
                        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
                        data: [20, 22, 16, 26, 23, 20] // Local only
                    }
                },
                lastYear: {
                    all: {
                        labels: ["Q1", "Q2", "Q3", "Q4"],
                        data: [135, 164, 142, 158]
                    },
                    boer: {
                        labels: ["Q1", "Q2", "Q3", "Q4"],
                        data: [77, 97, 85, 95]
                    },
                    local: {
                        labels: ["Q1", "Q2", "Q3", "Q4"],
                        data: [58, 67, 57, 63]
                    }
                },
                allTime: {
                    all: {
                        labels: ["2020", "2021", "2022", "2023", "2024"],
                        data: [480, 520, 610, 680, 750]
                    },
                    boer: {
                        labels: ["2020", "2021", "2022", "2023", "2024"],
                        data: [280, 310, 360, 400, 450]
                    },
                    local: {
                        labels: ["2020", "2021", "2022", "2023", "2024"],
                        data: [200, 210, 250, 280, 300]
                    }
                }
            },
            sales: {
                last6Months: {
                    all: {
                        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
                        data: [28, 35, 42, 38, 45, 50]
                    },
                    boer: {
                        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
                        data: [18, 22, 28, 25, 30, 35]
                    },
                    local: {
                        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
                        data: [10, 13, 14, 13, 15, 15]
                    }
                },
                lastYear: {
                    all: {
                        labels: ["Q1", "Q2", "Q3", "Q4"],
                        data: [105, 125, 135, 150]
                    },
                    boer: {
                        labels: ["Q1", "Q2", "Q3", "Q4"],
                        data: [68, 82, 90, 100]
                    },
                    local: {
                        labels: ["Q1", "Q2", "Q3", "Q4"],
                        data: [37, 43, 45, 50]
                    }
                },
                allTime: {
                    all: {
                        labels: ["2020", "2021", "2022", "2023", "2024"],
                        data: [320, 380, 450, 520, 600]
                    },
                    boer: {
                        labels: ["2020", "2021", "2022", "2023", "2024"],
                        data: [210, 250, 300, 350, 420]
                    },
                    local: {
                        labels: ["2020", "2021", "2022", "2023", "2024"],
                        data: [110, 130, 150, 170, 180]
                    }
                }
            },
            health: {
                last6Months: {
                    all: {
                        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
                        data: [8, 12, 6, 15, 10, 7]
                    },
                    boer: {
                        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
                        data: [3, 5, 2, 6, 4, 3]
                    },
                    local: {
                        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
                        data: [5, 7, 4, 9, 6, 4]
                    }
                },
                lastYear: {
                    all: {
                        labels: ["Q1", "Q2", "Q3", "Q4"],
                        data: [26, 32, 28, 22]
                    },
                    boer: {
                        labels: ["Q1", "Q2", "Q3", "Q4"],
                        data: [10, 12, 11, 8]
                    },
                    local: {
                        labels: ["Q1", "Q2", "Q3", "Q4"],
                        data: [16, 20, 17, 14]
                    }
                },
                allTime: {
                    all: {
                        labels: ["2020", "2021", "2022", "2023", "2024"],
                        data: [85, 65, 55, 45, 35]
                    },
                    boer: {
                        labels: ["2020", "2021", "2022", "2023", "2024"],
                        data: [30, 25, 20, 18, 15]
                    },
                    local: {
                        labels: ["2020", "2021", "2022", "2023", "2024"],
                        data: [55, 40, 35, 27, 20]
                    }
                }
            }
        };
    } catch (err) {
        console.error("Error fetching herd growth data:", err);
        return null;
    }
}

/* =======================================================================  
   CLEANUP FUNCTIONS
   ======================================================================= */

export function destroyHerdGrowthChart(canvasId = "herdGrowthChart") {
    if (herdChartInstance[canvasId]) {
        herdChartInstance[canvasId].destroy();
        delete herdChartInstance[canvasId];
        console.log(`Herd chart '${canvasId}' destroyed`);
    }
}

export function destroyAllHerdGrowthCharts() {
    Object.keys(herdChartInstance).forEach(destroyHerdGrowthChart);
}