
document.addEventListener('DOMContentLoaded', function() {
    const toggleButton = document.getElementById('toggleMobileMenu');
    const mobileMenu = document.getElementById('mobileMenu');
    const boxIcon = document.querySelector('.bx.bx-menu');
    const faIcon = document.querySelector('.fas.fa-bars');
    const toggleText = document.querySelector('.toggle-text');
    
    // Check if Boxicons is loaded correctly
    if (boxIcon && !isIconVisible(boxIcon)) {
        boxIcon.style.display = 'none';
        
        // Try Font Awesome icon
        if (faIcon) {
            faIcon.style.display = 'inline-block';
        } else {
            // Fallback to text
            toggleText.style.display = 'inline-block';
        }
    }
    
    // Toggle mobile menu when the button is clicked
    toggleButton.addEventListener('click', function() {
        mobileMenu.classList.toggle('show');
    });
    
    // Close mobile menu when clicking outside
    document.addEventListener('click', function(event) {
        if (!mobileMenu.contains(event.target) && !toggleButton.contains(event.target)) {
            mobileMenu.classList.remove('show');
        }
    });
    
    // Function to check if an icon is visible/rendered
    function isIconVisible(element) {
        const styles = window.getComputedStyle(element);
        const width = parseFloat(styles.width);
        const height = parseFloat(styles.height);
        const visibility = styles.visibility;
        
        return width > 0 && height > 0 && visibility !== 'hidden';
    }
});