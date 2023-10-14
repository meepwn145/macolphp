<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Menu</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@9/dist/sweetalert2.min.css">
</head>
<body>
  <div class="container">
    <h1 class="text-center mt-5">Add Menu</h1>

    <a href="/" class="btn btn-primary mb-3">Home</a>
    <a href="/manage.php" class="btn btn-primary mb-3">Manage</a>

    <form action="addMenu.php" method="post" class="mt-3">
      <div class="mb-3">
        <label for="menuName" class="form-label">Menu Name</label>
        <input type="text" class="form-control" id="menuName" name="menuName" maxlength="100" required>
      </div>
      <div class="mb-3">
        <label for="menuDescription" class="form-label">Menu Description</label>
        <textarea class="form-control" id="menuDescription" name="menuDescription" maxlength="1000" required></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9/dist/sweetalert2.min.js"></script>

  <script>
    // Add menu success alert
    function addMenuSuccess() {
      Swal.fire({
        title: 'Success!',
        text: 'Menu has been added successfully.',
        icon: 'success',
        confirmButtonText: 'Okay',
      });
    }

    // Form validation
    const form = document.querySelector('form');

    form.addEventListener('submit', function(event) {
      event.preventDefault();

      const menuName = document.getElementById('menuName');
      const menuDescription = document.getElementById('menuDescription');

      if (menuName.value.length > 20) {
        Swal.fire({
          title: 'Error!',
          text: 'Menu name cannot exceed 100 characters.',
          icon: 'error',
          confirmButtonText: 'Okay',
        });
        return;
      }

      if (menuDescription.value.length > 1000) {
        Swal.fire({
          title: 'Error!',
          text: 'Menu description cannot exceed 1000 characters.',
          icon: 'error',
          confirmButtonText: 'Okay',
        });
        return;
      }

      // Submit form
      this.submit();
    });
  </script>
</body>
</html>d