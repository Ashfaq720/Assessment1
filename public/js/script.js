
document.addEventListener('DOMContentLoaded', () => {
    // Mobile menu toggle
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    
    // Mobile dropdown toggles
    const mobileDropdownToggles = document.querySelectorAll('.mobile-dropdown-toggle');
    const mobileDropdownSubToggles = document.querySelectorAll('.mobile-dropdown-sub-toggle');
    
    // Toggle mobile menu
    mobileMenuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
    
    // Toggle mobile dropdown menus
    mobileDropdownToggles.forEach(toggle => {
        toggle.addEventListener('click', function(e) {
            e.stopPropagation();
            const menu = this.nextElementSibling;
            menu.classList.toggle('hidden');
            
            // Close all other dropdowns at this level
            document.querySelectorAll('.mobile-dropdown-menu').forEach(otherMenu => {
                if (otherMenu !== menu) {
                    otherMenu.classList.add('hidden');
                }
            });
        });
    });
    
    // Toggle mobile sub-dropdown menus
    mobileDropdownSubToggles.forEach(toggle => {
        toggle.addEventListener('click', function(e) {
            e.stopPropagation();
            const submenu = this.nextElementSibling;
            submenu.classList.toggle('hidden');
            
            // Close all other sub-dropdowns at this level
            const parentMenu = this.closest('.mobile-dropdown-menu');
            if (parentMenu) {
                parentMenu.querySelectorAll('.mobile-dropdown-submenu').forEach(otherSubmenu => {
                    if (otherSubmenu !== submenu) {
                        otherSubmenu.classList.add('hidden');
                    }
                });
            }
        });
    });
    
    // Close all menus when clicking outside
    document.addEventListener('click', (e) => {
        if (!mobileMenuButton.contains(e.target) && !mobileMenu.contains(e.target)) {
            mobileMenu.classList.add('hidden');
            document.querySelectorAll('.mobile-dropdown-menu, .mobile-dropdown-submenu').forEach(menu => {
                menu.classList.add('hidden');
            });
        }
    });


     // User menu toggle
        document.getElementById('userMenuButton').addEventListener('click', function() {
            const menu = document.getElementById('userMenu');
            menu.classList.toggle('hidden');
        });

        // Close menu when clicking outside
        document.addEventListener('click', function(event) {
            const menu = document.getElementById('userMenu');
            const button = document.getElementById('userMenuButton');
            
            if (!button.contains(event.target) && !menu.contains(event.target)) {
                menu.classList.add('hidden');
            }
        });

        // Avatar upload preview
        document.querySelector('.avatar-upload input[type="file"]').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(event) {
                    document.querySelector('.avatar-upload img').src = event.target.result;
                };
                reader.readAsDataURL(file);
            }
        });

        // Tab switching functionality
        const tabs = document.querySelectorAll('nav a');
        tabs.forEach(tab => {
            tab.addEventListener('click', function(e) {
                e.preventDefault();
                tabs.forEach(t => t.classList.remove('tab-active', 'text-blue-600', 'font-medium'));
                this.classList.add('tab-active', 'text-blue-600', 'font-medium');
                
                // In a real implementation, you would load the appropriate content here
                console.log('Switching to tab:', this.textContent.trim());
            });
        });
});
