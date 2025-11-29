<?php 

/* Create a PHP Function for Tables */
function renderTable($tableId, $columns) {
    echo '<div style="overflow-x:auto; width: 100%;">';
    echo '<table class="table" id="' . htmlspecialchars($tableId) . '">';
    echo '<thead><tr>';
    foreach ($columns as $column) {
        echo '<th>' . htmlspecialchars($column) . '</th>';
    }
    echo '</tr></thead></table>';
    echo '</div>';
}


include "includes/header.php"; // Include the header file with navbar and sidebar

include "modules/dashboard.php"; // Include the dashboard page
include "modules/livestock.php"; // Include the livestock page
include "modules/partner_management.php"; // Include the partner_management page
include "modules/sales_finance.php"; // Include the sales_finance page
include "modules/farm_operations.php"; // Include the farm_operations page
include "modules/public_portal.php"; // Include the public_portal page
include "modules/mobile_experience.php"; // Include the mobile_experience page
include "modules/ai_iot_integration.php"; // Include the ai_iot_integration page
include "modules/expenses_budget.php"; // Include the expenses_budget page
include "modules/investor_payouts.php"; // Include the investor_payouts page
include "modules/health_medical.php"; // Include the health_medical page
//include "modules/breeding_kidding.php"; // Include the breeding_kidding page
include "modules/farm_reports.php"; // Include the farm_reports page
include "modules/admin_panel.php"; // Include the admin_panel page
//include "modules/health_main.php"; // Include the health_main page
include "modules/breeding_main.php"; // Include the breeding_main page

include "includes/footer.php"; // Include the footer file
?>
