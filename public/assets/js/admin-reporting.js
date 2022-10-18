$(document).ready(() => {
    $('#reportingtype_id').val(null).trigger('change');
    $('#submissiontype_id').val(null).trigger('change');
    $('#explanationtype_id').val(null).trigger('change');
    setupProvince()

})

function setupProvince() {
    $.ajax({
        url: 'https://dev.farizdotid.com/api/daerahindonesia/provinsi',
        method: "GET",
        success: (res) => {
            $('#select2-provinsi').removeAttr('disabled')

            $("#select2-provinsi").select2({
                dropdownAutoWidth: true,
                width: '100%',
                data: res.provinsi.map((data, index) => {
                    return {'id': data.id, 'text' : data.nama}
                })
            });
            $('#select2-provinsi').val(null).trigger('change');
            $('#select2-provinsi').change(() => {
                const selected = $('#select2-provinsi').find(':selected')
                $("#value-province").val(selected.text())
                setupCity(selected.val())
            });
        },
        error: () => {
            setupProvince();
        }
    });
}

function setupCity(id) {
    const select = '#select2-city'
    $(select).attr('disabled', true)
    $(select).empty();
    if (!id) {
        return;
    }
    $.ajax({
        url: `https://dev.farizdotid.com/api/daerahindonesia/kota?id_provinsi=${id}`,
        method: "GET",
        success: (res) => {
            $(select).removeAttr('disabled')
            $(select).select2({
                dropdownAutoWidth: true,
                width: '100%',
                data: res.kota_kabupaten.map((data, index) => {
                    return {'id': data.id, 'text' : data.nama}
                })
            });
            $(select).val(null).trigger('change');
            $(select).change(() => {
                const selected = $(select).find(':selected')
                $("#value-city").val(selected.text())
                setupDistricts(selected.val())
            });
        },
    });
}

function setupDistricts(id) {
    const select = '#select2-districts'
    $(select).attr('disabled', true)
    $(select).empty();
    if (!id) {
        return;
    }
    $.ajax({
        url: `https://dev.farizdotid.com/api/daerahindonesia/kecamatan?id_kota=${id}`,
        method: "GET",
        success: (res) => {
            $(select).removeAttr('disabled')
            $(select).select2({
                dropdownAutoWidth: true,
                width: '100%',
                data: res.kecamatan.map((data, index) => {
                    return {'id': data.id, 'text' : data.nama}
                })
            });
            $(select).val(null).trigger('change');
            $(select).change(() => {
                const selected = $(select).find(':selected')
                $("#value-districts").val(selected.text())
                setupSubDistricts(selected.val())
            });
        },
    });
}
function setupSubDistricts(id) {
    const select = '#select2-sub_districts'
    $(select).attr('disabled', true)
    $(select).empty();
    if (!id) {
        return;
    }
    $.ajax({
        url: `https://dev.farizdotid.com/api/daerahindonesia/kelurahan?id_kecamatan=${id}`,
        method: "GET",
        success: (res) => {
            $(select).removeAttr('disabled')
            $(select).select2({
                dropdownAutoWidth: true,
                width: '100%',
                data: res.kelurahan.map((data, index) => {
                    return {'id': data.id, 'text' : data.nama}
                })
            });
            $(select).val(null).trigger('change');
            $(select).change(() => {
                const selected = $(select).find(':selected')
                $("#value-sub_districts").val(selected.text())
            });
        },
    });
}
