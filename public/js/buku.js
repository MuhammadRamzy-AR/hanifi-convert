$(document).ready(() => {
	let method  = 'add'
	let table = $('#table').DataTable({
		ajax: read_url,
		columns: [
			{ data: null },
			{ data: 'id_buku' },
			{ data: 'kode' },
			{ data: 'judul' },
			{ data: 'kategori' },
			{ data: 'jumlah' },
			{ data: 'dipinjam' },
		],
		columnDefs: [
			{
				searcable: false,
				orderable: false,
				targets: 0
			}
		],
		order: [[1, 'asc']]
	})
	table.on('order.dt search.dt', () => {
		table.column(0, {search:'applied',order:'applied'}).nodes().each((cell, i) => {
			cell.innerHTML = i+1
		})
	})
	let validator = $('#form').validate({
		errorElement: 'span',
		errorClass: 'form-error',
		errorPlacement: (err, el) => {
			err.addClass('invalid-feedback')
			el.closest('.form-group').append(err)
		},
		submitHandler: () => method == 'add' ? add() : edit()
	})
	function reload() {
		table.ajax.reload()
	}
	function add() {
		$.ajax({
			url: add_url,
			type: 'post',
			dataType: 'json',
			data: $('#form').serialize(),
			success: res => {
				reload()
				$('.action').addClass('d-none')
				Swal.fire('Sukses', 'Sukses Menambahkan Data', 'success')
				$('.modal').modal('hide')
			},
			error: err => console.log(err)
		})
	}
	function edit() {
		let id = table.row('.selected').data().id_buku

		console.log(table.row('.selected').data());

		$.ajax({
			url: `${edit_url}/${id}`,
			type: 'post',
			dataType: 'json',
			data: $('#form').serialize(),
			success: res => {
				console.log($('#form').serialize());
				reload()
				$('.action').addClass('d-none')
				Swal.fire('Sukses', 'Sukses Update Data', 'success')
				$('.modal').modal('hide')
			},
			error: err => console.log(err)
		})
	}
	$('tbody').on('click', 'tr', function(){
		let total = table.data().count()
		if ($(this).hasClass('selected') | total === 0) {
			$('.action').addClass('d-none')
			$(this).removeClass('selected')
		} else {
			$('.action').removeClass('d-none')
			table.$('tr.selected').removeClass('selected')
			$(this).addClass('selected')
		}
	})
	$('#tambah').on('click', () => {
		method = 'add'
		$('.modal-title').html('Tambah')
		$('[type=submit]').html('Tambah')
		$('.modal').modal('show')
	})
	function selectElement(id, valueToSelect)
	{
		let element = document.getElementById(id);
    	element.value = valueToSelect;

		$('#kategoriSelect').val(valueToSelect);
	}
	$('#edit').on('click', () => {
		method = 'edit'
		let data = table.row('.selected').data()
		$('.modal-title').html('Edit')
		$('[name=kode]').val(data.kode)
		$('[name=nama]').val(data.judul)
		selectElement(data.id_kategori , data.id_kategori)
		$('[name=kategori]').val(data.id_kategori)
		$('[name=jumlah]').val(data.jumlah)
		$('[type=submit]').html('Edit')
		$('.modal').modal('show')
	})
	$('#hapus').on('click', () => {
		Swal.fire({
			title: 'Hapus',
			text: 'Hapus Data Ini',
			type: 'warning',
			showCancelButton: true
		}).then(res => {
			if (res.value) {
				let row = table.row('.selected')
				let id = row.data().id
				$.ajax({
					url: `${delete_url}/${id}`,
					type: 'get',
					dataType: 'json',
					success: () => {
						row.remove().draw()
						$('.action').addClass('d-none')
						Swal.fire('Sukses', 'Sukses Menghapus Data', 'success')
					},
					error: err => console.log(err)
				})
			}
		})
	})
	// $('[name=kategori]').select2({
	// 	placeholder: 'Kategori',
	// 	ajax: {
	// 		url: get_kategori_url,
	// 		type: 'get',
	// 		dataType: 'json',
	// 		data: params => ({
	// 			kategori: params.term
	// 		}),
	// 		processResults: data => ({
	// 			results: data
	// 		}),
	// 		cache: true
	// 	}
	// })
	$('.modal').on('hidden.bs.modal', () => {
		$('#form')[0].reset()
		validator.resetForm()
	})
})