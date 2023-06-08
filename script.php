<script src = "admin/js/jquery-3.2.1.min.js"></script>
<script src = "admin/js/bootstrap.js"></script>
<script src = "admin/js/jquery.dataTables.js"></script>	
<script type = "text/javascript">
	$(document).ready(function() {
		$('#table').DataTable();
	} );
</script>

<!-- SweetAlert CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">

<!-- SweetAlert JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script>
	// Get the form element inside the modal
	var form = document.querySelector('#form_modal form');

	// Add an event listener to the form's submit event
	form.addEventListener('submit', function(event) {
		// Get the values of the input fields
		var username = document.querySelector('#form_modal input[name="stud_no"]').value;
		var email = document.querySelector('#form_modal input[name="firstname"]').value;
		var password = document.querySelector('#form_modal input[name="password"]').value;

		// Define a variable to keep track of whether the form is valid
		var isValid = true;

		// Check if the username is empty
		if (username === '') {
			swal('Error', 'Usuario es requerido', 'error');
			isValid = false;
		}

		// Check if the email is empty or not in a valid format
		if (email === '') {
			swal('Error', 'Email es requerido', 'error');
			isValid = false;
		} else {
			// Define a regular expression to check if the email is in a valid format
			var emailRegex = /^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

			// Check if the email matches the regular expression
			if (!emailRegex.test(email)) {
				swal('Error', 'Email debe tener un formato valido', 'error');
				isValid = false;
			}
		}

		// Check if the password is empty or not long enough
		if (password === '') {
			swal('Error', 'Contraseña es requerida', 'error');
			isValid = false;
		} else if (password.length < 8) {
			swal('Error', 'Contraseña debe tener al menos 8 caracteres', 'error');
			isValid = false;
		} else if (!/[a-z]/.test(password)) {
			swal('Error', 'Contraseña debe tener al menos 1 minuscula', 'error');
			isValid = false;
		} else if (!/[A-Z]/.test(password)) {
			swal('Error', 'Contraseña debe tener al menos 1 mayuscula', 'error');
			isValid = false;
		} else if (!/[0-9]/.test(password)) {
			swal('Error', 'Contraseña debe tener al menos 1 numero', 'error');
			isValid = false;
		} else if (!/[^a-zA-Z0-9]/.test(password)) {
			swal('Error', 'Contraseña debe tener al menos 1 caracter especial', 'error');
			isValid = false;
		}

		// If the form is not valid, prevent it from being submitted
		if (!isValid) {
			event.preventDefault();
		}
	});

</script>
	