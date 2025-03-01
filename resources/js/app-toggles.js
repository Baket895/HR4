document.addEventListener('DOMContentLoaded', function() {
  // sidebar toggle
const sidebar = document.getElementById('sidebar');
const mainContent = document.getElementById('main-content');
const toggleSidebarButton = document.getElementById('toggleSidebar');

if (sidebar && mainContent && toggleSidebarButton) {
  toggleSidebarButton.addEventListener('click', () => {
    // Toggles the sidebar off-screen
    sidebar.classList.toggle('-ml-60');
    // Adjusts the main content margin based on sidebar visibility
    mainContent.classList.toggle('ml-60');
  });
}

});


// notification Menus

document.addEventListener('DOMContentLoaded', function() {
    const notificationToggle = document.getElementById('notificationToggle');
    const notificationMenu = document.getElementById('notificationMenu');
  
    if (notificationToggle && notificationMenu) {
        notificationToggle.addEventListener('click', function(event) {
            notificationMenu.classList.toggle('hidden');
            event.stopPropagation();
        });
    }
    // Close dropdowns when clicking outside
    window.addEventListener('click', function(event) {
  
        if (notificationToggle && notificationMenu && !notificationToggle.contains(event.target) && !notificationMenu.contains(event.target)) {
            notificationMenu.classList.add('hidden');
        }
    });
  });
  

  // dropdown menu

  document.addEventListener('DOMContentLoaded', function() {

    const dropdownOptions = document.querySelectorAll('.dropdownOption');
    const dropdownActions = document.querySelectorAll('.dropdownAction');
    
    dropdownOptions.forEach(function(option, index) {
        option.addEventListener('click', function(event) {
            // Hide all other dropdowns first
            dropdownActions.forEach((action, idx) => {
                if (idx !== index) {
                    action.classList.add('hidden');
                }
            });

            // Toggle the current dropdown
            dropdownActions[index].classList.toggle('hidden');
            event.stopPropagation();
        });
    });

    // Close dropdowns when clicking outside
    window.addEventListener('click', function(event) {
        dropdownActions.forEach(function(action) {
            if (!action.contains(event.target)) {
                action.classList.add('hidden');
            }
        });
    });
});

  
  // Login Page Show Password
  
  document.addEventListener('DOMContentLoaded', function () {
    const togglePassword = document.getElementById('togglePassword');
    const password = document.getElementById('password');
    const eyeIcon = document.getElementById('eyeIcon');
    
    if (togglePassword && password && eyeIcon) {
        togglePassword.addEventListener('click', function () {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
  
            if (type === 'password') {
                eyeIcon.classList.remove('fa-eye');
                eyeIcon.classList.add('fa-eye-slash');
            } else {
                eyeIcon.classList.remove('fa-eye-slash');
                eyeIcon.classList.add('fa-eye');
            }
        });
    }
  
      const toggleNav = document.getElementById('toggleNav');
      const navMenu = document.getElementById('navMenu');
      const overlay = document.getElementById('overlay');
      const closeNav = document.getElementById('closeNav');
  
      // Function to open the navigation menu
      function openNav() {
          navMenu.classList.remove('hidden'); // Show the nav menu
          overlay.classList.remove('hidden'); // Show the overlay
      }
  
      // Function to close the navigation menu
      function closeNavMenu() {
          navMenu.classList.add('hidden'); // Hide the nav menu
          overlay.classList.add('hidden'); // Hide the overlay
      }
  
      // Event listeners
      toggleNav.addEventListener('click', openNav);
      closeNav.addEventListener('click', closeNavMenu);
      overlay.addEventListener('click', closeNavMenu);
  });

  
  
// SIDEBAR DROPDOWN BUTTON

document.addEventListener('DOMContentLoaded', function () {
    // Toggle for Payroll Submenu
    const togglePayrollSubmenu = document.getElementById('togglePayrollSubmenu');
    const payrollSubmenu = document.getElementById('payrollSubmenu');
    if (togglePayrollSubmenu) {
        togglePayrollSubmenu.addEventListener('click', function () {
            payrollSubmenu.classList.toggle('hidden');
        });
    }

    // Toggle for Attendance Submenu
    const toggleAttendanceSubmenu = document.getElementById('toggleAttendanceSubmenu');
    const attendanceSubmenu = document.getElementById('attendanceSubmenu');
    if (toggleAttendanceSubmenu) {
        toggleAttendanceSubmenu.addEventListener('click', function () {
            attendanceSubmenu.classList.toggle('hidden');
        });
    }

    // Toggle for Reimbursement Submenu
    const toggleReimbursementSubmenu = document.getElementById('toggleReimbursementSubmenu');
    const reimbursementSubmenu = document.getElementById('reimbursementSubmenu');
    if (toggleReimbursementSubmenu) {
        toggleReimbursementSubmenu.addEventListener('click', function () {
            reimbursementSubmenu.classList.toggle('hidden');
        });
    }

});
// Toggle for Leave Submenu
const toggleLeaveSubmenu = document.getElementById('toggleExample');
const leaveSubmenu = document.getElementById('ExampleSubmenu');
if (toggleLeaveSubmenu) {
    toggleLeaveSubmenu.addEventListener('click', function () {
        leaveSubmenu.classList.toggle('hidden');
    });
}
