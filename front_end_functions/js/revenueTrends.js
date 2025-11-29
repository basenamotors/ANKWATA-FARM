let DATA = null;
let revenueChartInstance = {};

export async function initializeRevenueChart(canvasId = "revenueChart") {
    // Prevent duplicate initialization
    if (revenueChartInstance[canvasId]) {
        return revenueChartInstance[canvasId];
    }

    DATA = JSON.parse(JSON.stringify(await fetchRevenueData()));
    if (!DATA) {
        console.error("Failed to load revenue data.");
        return null;
    }

    const ctx = document.getElementById(canvasId);
    if (!ctx) {
        console.warn(`Canvas '${canvasId}' not found.`);
        return null;
    }

    const revenueTrendsCard = ctx.closest(".revenueTrendsCard");
    if (!revenueTrendsCard) {
        console.warn("Chart must be inside a .revenueTrendsCard container.");
        return null;
    }

    const periodButtons = revenueTrendsCard.querySelectorAll(".btn-group .btn");
    const rangeSlider = document.getElementById("revenueRange");
    const expandBtn = revenueTrendsCard.querySelector(".btn-outline-secondary");
    const timeRangeText = revenueTrendsCard.querySelector(".text-muted");

    let currentPeriod = "monthly";
    let isExpanded = false;
    let modalChart = null;

    // Create chart
    const revenueChart = new Chart(ctx, {
        type: "line",
        data: makeChartData(currentPeriod),
        options: makeChartOptions()
    });

    // Register chart instance
    revenueChartInstance[canvasId] = revenueChart;

    // ✅ FIX: Initialize slider AFTER chart is created and registered
    initializeSlider();

    function initializeSlider() {
        if (!rangeSlider) {
            console.error("Range slider not found!");
            return;
        }
        
        const total = DATA[currentPeriod].labels.length;
        console.log(`Initializing slider for ${currentPeriod} with ${total} items`);
        
        rangeSlider.min = 1;
        rangeSlider.max = total;
        rangeSlider.value = total;
        
        // ✅ Apply the filter immediately
        applyVisiblePoints(total);
        updateRangeText(currentPeriod, total);
    }

    function makeChartData(period) {
        const d = DATA[period];
        return {
            labels: d.labels,
            datasets: [
                buildDataset("Revenue", d.revenue, "#28a745"),
                buildDataset("Expenses", d.expenses, "#dc3545"),
                buildDataset("Profit", d.profit, "#007bff")
            ]
        };
    }

    function buildDataset(label, data, color) {
        return {
            label,
            data,
            borderColor: color,
            backgroundColor: color + "20",
            tension: 0.4,
            fill: true,
            borderWidth: 3,
            pointBackgroundColor: color,
            pointBorderColor: "#ffffff",
            pointBorderWidth: 2,
            pointRadius: 4,
            pointHoverRadius: 6
        };
    }

    function makeChartOptions() {
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
                    },
                    onClick(_, item, legend) {
                        toggleDatasetVisibility(item.datasetIndex, legend.chart);
                    }
                },
                tooltip: {
                    mode: "index",
                    backgroundColor: "rgba(0,0,0,0.85)",
                    callbacks: {
                        title: items => `Period: ${items[0].label}`,
                        label: ctx => `${ctx.dataset.label}: ₵${ctx.parsed.y.toLocaleString()}`
                    }
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        callback: v => "₵" + v.toLocaleString()
                    }
                }
            }
        };
    }

    function toggleDatasetVisibility(i, chart) {
        const meta = chart.getDatasetMeta(i);
        const hidden = meta.hidden === null ? !chart.data.datasets[i].hidden : null;
        meta.hidden = hidden;
        chart.data.datasets[i].hidden = hidden;
        chart.update();
    }

    periodButtons.forEach(btn => {
        btn.addEventListener("click", () => {
            periodButtons.forEach(b => b.classList.remove("active"));
            btn.classList.add("active");

            currentPeriod = btn.textContent.trim().toLowerCase();
            applyPeriodChange(currentPeriod);
        });
    });

    function applyPeriodChange(period) {
        updateChart(period);
        updateSlider(period);
    }

    function updateChart(period) {
        const d = DATA[period];
        revenueChart.data.labels = d.labels;
        revenueChart.data.datasets[0].data = d.revenue;
        revenueChart.data.datasets[1].data = d.expenses;
        revenueChart.data.datasets[2].data = d.profit;
        revenueChart.update("none");
    }

    function updateSlider(period) {
        if (!rangeSlider) return;
        
        const total = DATA[period].labels.length;
        rangeSlider.min = 1;
        rangeSlider.max = total;
        rangeSlider.value = total;
        
        applyVisiblePoints(total);
        updateRangeText(period, total);
    }

    rangeSlider.addEventListener("input", () => {
        const count = Number(rangeSlider.value);
        applyVisiblePoints(count);
        updateRangeText(currentPeriod, count);
    });

    function applyVisiblePoints(count) {
        const p = DATA[currentPeriod];
        const total = p.labels.length;
        const start = Math.max(0, total - count);

        revenueChart.data.labels = p.labels.slice(start);
        revenueChart.data.datasets[0].data = p.revenue.slice(start);
        revenueChart.data.datasets[1].data = p.expenses.slice(start);
        revenueChart.data.datasets[2].data = p.profit.slice(start);

        revenueChart.update("none");
    }

    function updateRangeText(period, count) {
        if (!timeRangeText) return;
        
        const unit = {
            monthly: "Month",
            quarterly: "Quarter",
            yearly: "Year"
        }[period];

        const plural = count > 1 ? unit + "s" : unit;
        timeRangeText.textContent = `Last ${count} ${plural}`;
    }

    if (expandBtn) {
        expandBtn.addEventListener("click", () => {
            isExpanded ? closeExpand() : openExpand();
        });
    }

    function openExpand() {
        isExpanded = true;
        updateExpandBtn(true);
        document.body.insertAdjacentHTML("beforeend", modalMarkup());

        const modalEl = document.getElementById("chartModal");
        const modalCtx = document.getElementById("revenueChartModal");

        modalChart = new Chart(modalCtx, {
            type: revenueChart.config.type,
            data: JSON.parse(JSON.stringify(revenueChart.data)),
            options: JSON.parse(JSON.stringify(revenueChart.options))
        });

        const modal = new bootstrap.Modal(modalEl);
        modal.show();

        modalEl.addEventListener("hidden.bs.modal", () => {
            modalChart.destroy();
            modalEl.remove();
            isExpanded = false;
            updateExpandBtn(false);
        }, { once: true });
    }

    function closeExpand() {
        const modal = document.getElementById("chartModal");
        if (modal) bootstrap.Modal.getInstance(modal)?.hide();
    }

    function updateExpandBtn(state) {
        const icon = expandBtn.querySelector("i");
        expandBtn.classList.toggle("btn-primary", state);
        expandBtn.classList.toggle("btn-outline-secondary", !state);
        icon.className = state ? "bi bi-arrows-angle-contract" : "bi bi-arrows-angle-expand";
    }

    function modalMarkup() {
        const title = getPeriodLabel(currentPeriod) + " - Full View";
        return `
            <div class="modal fade" id="chartModal" tabindex="-1">
                <div class="modal-dialog modal-fullscreen">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title"><i class="bi bi-graph-up me-2"></i>${title}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <div style="height: 80vh; width: 100%;">
                                <canvas id="revenueChartModal"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>`;
    }

    function getPeriodLabel(period) {
        return {
            monthly: "Monthly Revenue Trends",
            quarterly: "Quarterly Revenue Trends",
            yearly: "Yearly Revenue Trends"
        }[period];
    }

    // Animation
    setTimeout(() => {
        ctx.animate(
            [{ opacity: 0, transform: "translateY(18px)" }, 
             { opacity: 1, transform: "translateY(0)" }],
            { duration: 700, easing: "ease-out" }
        );
    }, 100);

    return revenueChart;
}

async function fetchRevenueData() {
    try {
        return {
            monthly: {
                labels: ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],
                revenue:  [28500,31200,34500,37800,41200,44800,48500,52300,56200,60200,64300,68500],
                expenses: [12500,13200,14800,14200,15600,16800,15800,17200,18500,17800,19200,20500],
                profit:   [16000,18000,19700,23600,25600,28000,32700,35100,37700,42400,45100,48000]
            },
            quarterly: {
                labels: ["Q1 2024","Q2 2024","Q3 2024","Q4 2024"],
                revenue:  [94200, 123800, 157000, 193000],
                expenses: [40500, 46600, 51500, 57500],
                profit:   [53700, 77200, 105500, 135500]
            },
            yearly: {
                labels: ["2020","2021","2022","2023","2024"],
                revenue:  [285000, 385000, 485000, 620000, 785000],
                expenses: [165000, 195000, 225000, 265000, 315000],
                profit:   [120000, 190000, 260000, 355000, 470000]
            }
        };
    } catch (err) {
        console.error("Error fetching revenue data:", err);
        return null;
    }
}