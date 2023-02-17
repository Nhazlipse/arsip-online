<script>
function searchTable() {
  // Deklarasikan variabel yang dibutuhkan
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("searchInput"); // Ambil elemen input
  filter = input.value.toUpperCase(); // Konversi nilai input ke huruf besar
  table = document.getElementById("dataTable"); // Ambil tabel
  tr = table.getElementsByTagName("tr"); // Ambil setiap baris pada tabel

  // Loop melalui setiap baris, dan kolom pada baris tersebut
  for (i = 0; i < tr.length; i++) {
    // Kolom pertama pada setiap baris adalah nomor urut, jadi mulai dari kolom kedua
    for (j = 1; j < tr[i].cells.length; j++) {
      td = tr[i].getElementsByTagName("td")[j]; // Ambil kolom pada baris tersebut
      if (td) {
        txtValue = td.textContent || td.innerText; // Ambil nilai teks dari kolom
        if (txtValue.toUpperCase().indexOf(filter) > -1) { // Cek apakah nilai teks tersebut cocok dengan input
          tr[i].style.display = ""; // Tampilkan baris tersebut
          break; // Berhenti loop pada kolom jika nilai teks cocok
        } else {
          tr[i].style.display = "none"; // Sembunyikan baris tersebut
        }
      }
    }
  }
}
</script>
