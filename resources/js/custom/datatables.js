$(document).ready(function() {
  function getColumn(){
    arr = []
    $("#datatablePelamar").find('td[data-for]').each(function(){
      arr.push(
        {data: $(this).attr('data-for'), name: $(this).attr('data-for'), orderable: $(this).attr('orderable')||true, searchable: $(this).attr('searchable')||true, className: $(this).attr('class')}
      )
    })
    $("td[data-for]").remove()
    return arr
  }

  datatable = $("#datatablePelamar").DataTable({
    ordering: true,
    info: true,
    processing: true,
    serverSide: true,
    ajax: {
      url: $("#datatablePelamar").attr('data'),
      type: 'get'
    },
    columns: [
      {data: "nama", name: "nama"},
      {data: "file_pdf", name: "file_pdf"},
      {data: "status", name: "status"},
      {data: "aksi", name: "aksi"},
    ],
    responsive: true,
  })
})
