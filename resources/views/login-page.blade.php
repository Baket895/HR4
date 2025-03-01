@extends('layouts.index')

@section('title')
    Login
@endsection

@section('content')
<div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 flex-1 flex items-center justify-around p-8">
    <div class="flex items-center justify-center hidden md:flex">
        <img class="w-3/4" src="{{ asset('img/background.png') }}" alt="">
    </div>
    <div class="flex items-center justify-center">
        <div class="w-[400px] rounded-lg bg-white p-8 shadow-lg flex flex-col gap-2">
            <div>
                <h1 class="text-3xl font-semibold">Sign In</h1>
                <p>Please log in to access your account.</p>
            </div>
            <form action="" method="POST">
                <div class="py-2">
                    <x-input 
                        right-icon="user" 
                        label="Email" 
                        placeholder="Enter your email" 
                        required 
                        type="email" 
                        wire:model.defer="email" 
                    />
                </div>
                <div class="relative py-2">
                    <x-input 
                        label="Password" 
                        type="password" 
                        placeholder="Enter your password"
                        required
                        wire:model.defer="password"
                    />
                    <!-- Eye icon toggle -->
                    <button type="button" id="togglePassword" class="absolute right-3 top-10 text-gray-600">
                        <i id="eyeIcon" class="fa-solid fa-eye-slash"></i>
                    </button>
                </div>
                    <a href="/forgot-password" class="text-blue-500">Forgot Password?</a>
                <div class="py-2">
                    <x-button 
                        blue 
                        label="Login" 
                        class="w-full"
                        spinner
                        type="submit"
                    />
                </div>
            </form>
            <div class="flex gap-2 flex-row items-center">
                <div class="w-1/2 h-[1px] bg-gray-300"></div>
                <p>or</p>
                <div class="w-1/2 h-[1px] bg-gray-300"></div>
            </div>
            <div>
                <a href="" class="border border-gray-300 text-gray-600 p-2 rounded-lg w-full flex items-center justify-center gap-3">
                    <img class="w-5" src="https://www.vectorlogo.zone/logos/google/google-icon.svg" alt="Google Logo">
                    Continue with Google
                </a>
            </div>
            <div class="py-2 text-center">
                <p class="text-sm">By logging in, you agree to our <a href="#" id="termsLink" class="text-blue-500">Terms and Conditions</a>.</p>
            </div>
            
            <!-- Terms and Conditions Pop-up -->
<div id="termsPopup" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center">
    <div class="bg-white rounded-lg shadow-lg p-6 w-1/2 relative">
        <button id="closeTermsPopup" class="absolute top-2 right-2 text-white bg-red-500 rounded-full w-8 h-8 flex items-center justify-center hover:bg-red-600">
            &times; <!-- X character -->
        </button>
        <h2 class="text-xl font-bold mb-4">Terms and Conditions</h2>
        <div class="overflow-y-auto max-h-96">
            <p>Terms and Conditions for Use of the JVD Event and Travel Management Co. System
                Effective Date: [Insert Date]
                Welcome to the Travel and Tours Management System (the "System") of JVD Event and Travel Management Co. ("Company"). By accessing or using this System, you (the "User") acknowledge that you are an employee of JVD Event and Travel Management Co. and agree to comply with the following terms and conditions. These terms align with ISO standards and the provisions of the Data Privacy Act of the Philippines (RA 10173).
                ________________________________________
                1. User Responsibilities
                1.1 Authorized Access
                •	The System is exclusively for the use of authorized employees of the Company. Sharing login credentials or allowing unauthorized access to the System is strictly prohibited.
                1.2 Proper Use
                •	Users must use the System solely for its intended purpose: managing travel and tour operations. Any misuse, including unauthorized modifications, data manipulation, or engaging in activities outside the scope of your role, is prohibited.
                1.3 Confidentiality
                •	Users must treat all data accessed through the System as confidential, including customer information, company policies, and operational records. Disclosure of such information without proper authorization is a violation of Company policy and applicable laws.
                ________________________________________
                2. Compliance with Data Privacy Act of the Philippines
                2.1 Data Handling
                •	Users are required to handle all personal data of customers, partners, and colleagues in compliance with the Data Privacy Act of 2012 (RA 10173). This includes:
                o	Collecting data only for legitimate purposes.
                o	Ensuring data is accurate and up-to-date.
                o	Protecting data from unauthorized access, loss, or misuse.
                2.2 Breach Notification
                •	Any suspected or actual data breach must be immediately reported to the Company's Data Protection Officer (DPO). Failure to report incidents may result in disciplinary action.
                2.3 Training and Awareness
                •	Users must participate in any data privacy and security training provided by the Company to ensure compliance with ISO and local regulations.
                ________________________________________
                3. Security and System Integrity
                3.1 Login Credentials
                •	Users are responsible for safeguarding their login credentials. Immediate reporting of lost or compromised credentials is mandatory.
                3.2 System Monitoring
                •	The Company reserves the right to monitor System usage to ensure compliance with these terms. Any activity that compromises the integrity, security, or functionality of the System will be investigated and may result in legal or disciplinary action.
                3.3 Prohibited Activities
                •	Users must not:
                o	Attempt to hack or disable the System.
                o	Install unauthorized software or plugins.
                o	Access or modify data outside their authorized role.
                ________________________________________
                4. Intellectual Property
                4.1 The System and its contents, including but not limited to software, documentation, and designs, are the intellectual property of JVD Event and Travel Management Co. Unauthorized reproduction, distribution, or modification is strictly prohibited.
                ________________________________________
                5. Limitation of Liability
                5.1 The Company will not be liable for damages caused by improper use of the System, including unauthorized activities or failure to comply with these terms.
                ________________________________________
                6. Amendments to Terms
                6.1 The Company reserves the right to amend these Terms and Conditions as needed to comply with new regulations or improve operations. Users will be notified of any significant changes. Continued use of the System constitutes acceptance of the updated terms.
                ________________________________________
                7. Termination of Access
                7.1 Violation of these terms may result in the suspension or termination of System access. Severe breaches, particularly those involving data privacy violations, may lead to legal action or termination of employment.
                ________________________________________
                By using the Travel and Tours Management System, you acknowledge that you have read, understood, and agree to comply with these Terms and Conditions. If you have any questions or require clarification, please contact the Data Protection Officer or your supervisor.
               

                
                
            <!-- Add more terms as needed -->
        </div>
        <div class="flex items-center mt-4">
            <input type="checkbox" id="agreeCheckbox" class="mr-2">
            <label for="agreeCheckbox" class="text-sm">I agree to the Terms and Conditions.</label>
        </div>
    </div>
</div>
<div>
    <p>Don't have an account? <a href="/register" class="text-blue-500">Register</a></p>
</div>
            </div>
        </div>
    </div>
</div>


<script>
    // Show the terms and conditions pop-up
    document.getElementById('termsLink').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the default link behavior
        document.getElementById('termsPopup').classList.remove('hidden'); // Show the pop-up
    });

    // Close the terms and conditions pop-up
    document.getElementById('closeTermsPopup').addEventListener('click', function() {
        document.getElementById('termsPopup').classList.add('hidden'); // Hide the pop-up
    });

    // Optional: Close the pop-up when clicking outside of it
    document.getElementById('termsPopup').addEventListener('click', function(event) {
        if (event.target === this) {
            this.classList.add('hidden'); // Hide the pop-up
        }
    });

    // Handle form submission
    document.querySelector('form').addEventListener('submit', function(event) {
        const checkbox = document.getElementById('agreeCheckbox');
        if (!checkbox.checked) {
            event.preventDefault(); // Prevent form submission
            alert('You must agree to the Terms and Conditions before logging in.');
        }
    });
</script>

@endsection
