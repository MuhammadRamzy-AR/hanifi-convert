$(document).ready(() => {
	let validator = $('#form').validate({
		errorElement: 'span',
		errorClass: 'form-error',
		errorPlacement: (err, el) => {
			err.addClass('invalid-feedback')
			el.closest('.form-group').append(err)
		},
		submitHandler: () => {
			$.ajax({
				url: simpan_url,
				type: 'post',
				dataType: 'json',
				data: $('#form').serialize(),
				success: res => {
					console.log($('#form').serialize());
					Swal.fire('Sukses', 'Sukses Update Data', 'success')
				},
				error: err => console.log(err)
			})
		}
	})
})