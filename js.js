// Function to open the "Update" modal
function openUpdateModal(menuName, menuDescription) {
    // Populate the modal with the menu item's details
    document.getElementById('updateMenuName').value = menuName;
    document.getElementById('updateMenuDescription').value = menuDescription;
  
    // Show the modal
    $('#updateModal').modal('show');
  }
  
  // Function to confirm deletion
  function confirmDelete(menuId) {
    if (confirm('Are you sure you want to delete this menu item?')) {
      // Handle the deletion here (e.g., using an AJAX request or form submission)
    }
  }
  