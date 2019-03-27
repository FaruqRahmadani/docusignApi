$(document).on("click", ".modalPelamar", function(){
  axios({
    method:"patch",
    url: $(this).attr('data-url'),
  }).then((response)=>{
    $("#nama").text(response.data.nama)
    $("#jenis_kelamin").text(response.data.jenis_kelamin == 1?'Laki - Laki' : 'Perempuan')
    $("#email").text(response.data.email)
    $("#no_telepon").text(response.data.no_telepon)
  })
})
