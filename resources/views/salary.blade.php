@extends('layouts.hr3-admin')

@section('title')
    Compensation & Benefits
@endsection

@section('header')
    <h1 class="text-3xl font-bold">Compensation & Benefits</h1>
    <h5 class="text-blue-500">Manage employee compensation, benefits, and payroll</h5>
@endsection

@section('content')
<div class="bg-background text-foreground min-h-screen p-8">
    <div class="max-w-7xl mx-auto">
        <!-- Quick Actions -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-8">
           
            <!-- Review Compliance Button -->
            <button id="reviewComplianceBtn" class="p-4 bg-purple-500 text-white rounded-lg hover:bg-purple-600 transition">
                Review Compliance
            </button>
            <!-- Market Analysis Button -->
            <button id="marketAnalysisBtn" class="p-4 bg-orange-500 text-white rounded-lg hover:bg-orange-600 transition">
                 Market Analysis
            </button>
        </div>

        <!-- Compensation Overview -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
            <!-- Salary Structure -->
            <div class="bg-white rounded-lg shadow-md p-6 mb-4">
                <h2 class="text-xl font-bold mb-4">Salary Structure</h2>
                <div class="space-y-4">
                    <div class="flex justify-between items-center">
                        <span>Entry Level</span>
                        <span>₱25,000 - ₱35,000</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span>Mid Level</span>
                        <span>₱35,000 - ₱65,000</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span>Senior Level</span>
                        <span>₱65,000 - ₱120,000</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span>Management</span>
                        <span>₱120,000+</span>
                    </div>
                </div>
            </div>

            <!-- Benefits Overview -->
            <div class="bg-white rounded-lg shadow-md p-6 mb-4">
                <h2 class="text-xl font-bold mb-4">Benefits Overview</h2>
                <div class="space-y-4">
                    <div class="flex items-center">
                        <div class="w-4 h-4 bg-green-500 rounded-full mr-2"></div>
                        <span>Health Insurance - HMO Coverage</span>
                    </div>
                    <div class="flex items-center">
                        <div class="w-4 h-4 bg-blue-500 rounded-full mr-2"></div>
                        <span>Retirement Plan - 6% Company Match</span>
                    </div>
                    <div class="flex items-center">
                        <div class="w-4 h-4 bg-purple-500 rounded-full mr-2"></div>
                        <span>Life Insurance - 2x Annual Salary</span>
                    </div>
                    <div class="flex items-center">
                        <div class="w-4 h-4 bg-yellow-500 rounded-full mr-2"></div>
                        <span>Annual Leave - 15 Days</span>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>


<!-- Pop-up Card for Employee Payroll Processing -->
<div id="popupCard" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center">
    <div class="bg-white rounded-lg shadow-lg p-6 w-1/3 relative">
        <button id="closePopup" class="absolute top-2 right-2 text-white bg-red-500 rounded-full w-8 h-8 flex items-center justify-center hover:bg-red-600">
            &times; <!-- X character -->
        </button>
        <h2 class="text-xl font-bold mb-4">Process Employee Payroll</h2>
        <form id="payrollForm">
            <div class="mb-4">
                <label for="employeeName" class="block text-sm font-medium">Employee Name</label>
                <input type="text" id="employeeName" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
            </div>
            <div class="mb-4">
                <label for="employeeId" class="block text-sm font-medium">Employee ID</label>
                <input type="text" id="employeeId" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
            </div>
            <div class="mb-4">
                <label for="salaryAmount" class="block text-sm font-medium">Salary Amount</label>
                <input type="number" id="salaryAmount" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
            </div>
            <div class="mb-4">
                <label for="payPeriod" class="block text-sm font-medium">Pay Period</label>
                <select id="payPeriod" class="mt-1 block w-full border border-gray-300 rounded-md p-2">
                    <option value="Bi-Weekly">Bi-Weekly</option>
                    <option value="Monthly">Monthly</option>
                </select>
            </div>
            <button type="submit" class="w-full bg-green-500 text-white rounded-lg p-2 hover:bg-green-600 mb-2">Submit Payroll</button>
        </form>
    </div>
</div>
<!-- Pop-up Card for Adding New Benefits -->
<div id="addBenefitsPopup" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center">
    <div class="bg-white rounded-lg shadow-lg p-6 w-1/3 relative">
        <button id="closeAddBenefitsPopup" class="absolute top-2 right-2 text-white bg-red-500 rounded-full w-8 h-8 flex items-center justify-center hover:bg-red-600">
            &times; <!-- X character -->
        </button>
        <h2 class="text-xl font-bold mb-4">Add New Benefits</h2>
        <form id="addBenefitsForm">
            <div class="mb-4">
                <label for="benefitName" class="block text-sm font-medium">Benefit Name</label>
                <input type="text" id="benefitName" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
            </div>
            <div class="mb-4">
                <label for="benefitDescription" class="block text-sm font-medium">Description</label>
                <textarea id="benefitDescription" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required></textarea>
            </div>
            <button type="submit" class="w-full bg-green-500 text-white rounded-lg p-2 hover:bg-green-600 mb-2">Add Benefit</button>
        </form>
    </div>
</div>
<!-- Pop-up Card for Review Compliance -->
<div id="reviewCompliancePopup" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center">
    <div class="bg-white rounded-lg shadow-lg p-6 w-1/3 relative">
        <button id="closeReviewCompliancePopup" class="absolute top-2 right-2 text-white bg-red-500 rounded-full w-8 h-8 flex items-center justify-center hover:bg-red-600">
            &times; <!-- X character -->
        </button>
        <h2 class="text-xl font-bold mb-4">Review Compliance</h2>
        <p class="mb-4">Please review the compliance requirements for employee benefits and payroll processing.</p>
        <ul class="list-disc list-inside mb-4">
            <li>Ensure all benefits are compliant with local regulations.</li>
            <li>Review payroll processing timelines and requirements.</li>
            <li>Check for any updates in labor laws.</li>
        </ul>
        <button id="confirmReviewCompliance" class="w-full bg-green-500 text-white rounded-lg p-2 hover:bg-green-600 mb-2">Confirm Review</button>
    </div>
</div>
<!-- Pop-up Card for Market Analysis -->
<div id="marketAnalysisPopup" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center">
    <div class="bg-white rounded-lg shadow-lg p-6 w-1/3 relative">
        <button id="closeMarketAnalysisPopup" class="absolute top-2 right-2 text-white bg-red-500 rounded-full w-8 h-8 flex items-center justify-center hover:bg-red-600">
            &times; <!-- X character -->
        </button>
        <h2 class="text-xl font-bold mb-4">Market Analysis</h2>
        <p class="mb-4">Analyze the current market rates and trends for employee compensation.</p>
        <ul class="list-disc list-inside mb-4">
            <li>Average Salary: ₱50,000 - ₱70,000</li>
            <li>Market Rate: ₱60,000 - ₱80,000</li>
            <li>Internal Equity: ₱55,000 - ₱75,000</li>
        </ul>
        <button id="confirmMarketAnalysis" class="w-full bg-green-500 text-white rounded-lg p-2 hover:bg-green-600 mb-2">Acknowledge Analysis</button>
    </div>
</div>
</div>
</div>


<script>
    // JavaScript to handle the pop-up card
    document.getElementById('processPayrollBtn').addEventListener('click', function() {
        document.getElementById('popupCard').classList.remove('hidden');
    });

    document.getElementById('closePopup').addEventListener('click', function() {
        document.getElementById('popupCard').classList.add('hidden');
    });

    // Handle form submission
    document.getElementById('payrollForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the default form submission

        // Get form values
        const employeeName = document.getElementById('employeeName').value;
        const employeeId = document.getElementById('employeeId').value;
        const salaryAmount = document.getElementById('salaryAmount').value;
        const payPeriod = document.getElementById('payPeriod').value;

        // Here you can add your logic to process the payroll
        console.log(`Processing payroll for ${employeeName} (ID: ${employeeId}) with salary: ₱${salaryAmount} for the pay period: ${payPeriod}`);

        // Show success message (you can customize this)
        alert(`Payroll processed for ${employeeName} successfully!`);

        // Close the popup
        document.getElementById('popupCard').classList.add('hidden');

        // Reset the form
        document.getElementById('payrollForm').reset();
    });

    // JavaScript to handle the Add New Benefits pop-up card
    document.getElementById('addBenefitsBtn').addEventListener('click', function() {
        document.getElementById('addBenefitsPopup').classList.remove('hidden');
    });

    document.getElementById('closeAddBenefitsPopup').addEventListener('click', function() {
        document.getElementById('addBenefitsPopup').classList.add('hidden');
    });

    // Handle form submission for adding benefits
    document.getElementById('addBenefitsForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the default form submission

        // Get form values
        const benefitName = document.getElementById('benefitName').value;
        const benefitDescription = document.getElementById('benefitDescription').value;

        // Here you can add your logic to save the new benefit
        console.log(`Adding new benefit: ${benefitName} - ${benefitDescription}`);

        // Show success message (you can customize this)
        alert(`Benefit "${benefitName}" added successfully!`);

        // Close the popup
        document.getElementById('addBenefitsPopup').classList.add('hidden');

        // Reset the form
        document.getElementById('addBenefitsForm').reset();
    });
    // JavaScript to handle the Review Compliance pop-up card
document.getElementById('reviewComplianceBtn').addEventListener('click', function() {
    document.getElementById('reviewCompliancePopup').classList.remove('hidden');
});

document.getElementById('closeReviewCompliancePopup').addEventListener('click', function() {
    document.getElementById('reviewCompliancePopup').classList.add('hidden');
});

// JavaScript to handle the Market Analysis pop-up card
document.getElementById('marketAnalysisBtn').addEventListener('click', function() {
    document.getElementById('marketAnalysisPopup').classList.remove('hidden');
});

document.getElementById('closeMarketAnalysisPopup').addEventListener('click', function() {
    document.getElementById('marketAnalysisPopup').classList.add('hidden');
});

// Optional: Handle confirmation buttons
document.getElementById('confirmReviewCompliance').addEventListener('click', function() {
    alert('Compliance review confirmed!');
    document.getElementById('reviewCompliancePopup').classList.add('hidden');
});

document.getElementById('confirmMarketAnalysis').addEventListener('click', function() {
    alert('Market analysis acknowledged!');
    document.getElementById('marketAnalysisPopup').classList.add('hidden');
});
</script>
@endsection