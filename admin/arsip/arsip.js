// <!-- JAVASCIRPT BUAT CARI DATA -->

function searchTable() {
    var input1, input2, input3, input4, input5, input6, input7, input8, input9, input10, input11, input12, input13, filter1, filter2, filter3, filter4, filter5, filter6, filter7, filter8, filter9, filter10, filter11, filter12, filter13, table, tr, td1, td2, td3, td4, td5, td6, td7, td8, td9, td10, td11, td12, td13, i, txtValue1, txtValue2, txtValue3, txtValue4, txtValue5, txtValue6, txtValue7, txtValue8, txtValue9, txtValue10, txtValue11, txtValue12, txtValue13;
    input1 = document.getElementById("searchInput1");
    input2 = document.getElementById("searchInput2");
    input3 = document.getElementById("searchInput3");
    input4 = document.getElementById("searchInput4");
    input5 = document.getElementById("searchInput5");
    input6 = document.getElementById("searchInput6");
    input7 = document.getElementById("searchInput7");
    input8 = document.getElementById("searchInput8");
    input9 = document.getElementById("searchInput9");
    input10 = document.getElementById("searchInput10");
    input11 = document.getElementById("searchInput11");
    input12 = document.getElementById("searchInput12");
    input13 = document.getElementById("searchInput13");

    filter1 = input1.value.toUpperCase();
    filter2 = input2.value.toUpperCase();
    filter3 = input3.value.toUpperCase();
    filter4 = input4.value.toUpperCase();
    filter5 = input5.value.toUpperCase();
    filter6 = input6.value.toUpperCase();
    filter7 = input7.value.toUpperCase();
    filter8 = input8.value.toUpperCase();
    filter9 = input9.value.toUpperCase();
    filter10 = input10.value.toUpperCase();
    filter11 = input11.value.toUpperCase();
    filter12 = input12.value.toUpperCase();
    filter13 = input13.value.toUpperCase();

    table = document.getElementById("dataTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td1 = tr[i].getElementsByTagName("td")[1]; // index kolom kedua, yaitu kolom nama
        td2 = tr[i].getElementsByTagName("td")[2]; // index kolom ketiga, yaitu kolom masalah
        td3 = tr[i].getElementsByTagName("td")[3]; // index kolom keempat, yaitu kolom peminjam
        td4 = tr[i].getElementsByTagName("td")[4]; // index kolom keempat, yaitu kolom peminjam
        td5 = tr[i].getElementsByTagName("td")[5]; // index kolom keempat, yaitu kolom peminjam
        td6 = tr[i].getElementsByTagName("td")[6]; // index kolom keempat, yaitu kolom peminjam
        td7 = tr[i].getElementsByTagName("td")[7]; // index kolom keempat, yaitu kolom peminjam
        td8 = tr[i].getElementsByTagName("td")[8]; // index kolom keempat, yaitu kolom peminjam
        td9 = tr[i].getElementsByTagName("td")[9]; // index kolom keempat, yaitu kolom peminjam
        td10 = tr[i].getElementsByTagName("td")[10]; // index kolom keempat, yaitu kolom peminjam
        td11 = tr[i].getElementsByTagName("td")[11]; // index kolom keempat, yaitu kolom peminjam
        td12 = tr[i].getElementsByTagName("td")[12]; // index kolom keempat, yaitu kolom peminjam
        td13 = tr[i].getElementsByTagName("td")[13]; // index kolom keempat, yaitu kolom peminjam
        
        if (td1 || td2 || td3 || td4 || td5 || td6 || td7 || td8 || td9 || td10 || td11 || td12 || td13) {
            txtValue1 = td1.textContent || td1.innerText;
            txtValue2 = td2.textContent || td2.innerText;
            txtValue3 = td3.textContent || td3.innerText;
            txtValue4 = td4.textContent || td4.innerText;
            txtValue5 = td5.textContent || td5.innerText;
            txtValue6 = td6.textContent || td6.innerText;
            txtValue7 = td7.textContent || td7.innerText;
            txtValue8 = td8.textContent || td8.innerText;
            txtValue9 = td9.textContent || td9.innerText;
            txtValue10 = td10.textContent || td10.innerText;
            txtValue11 = td11.textContent || td11.innerText;
            txtValue12 = td12.textContent || td12.innerText;
            txtValue13 = td13.textContent || td13.innerText;


            if (txtValue1.toUpperCase().indexOf(filter1) > -1 &&
                txtValue2.toUpperCase().indexOf(filter2) > -1 &&
                txtValue3.toUpperCase().indexOf(filter3) > -1 &&
                txtValue4.toUpperCase().indexOf(filter4) > -1 &&
                txtValue5.toUpperCase().indexOf(filter5) > -1 &&
                txtValue6.toUpperCase().indexOf(filter6) > -1 &&
                txtValue7.toUpperCase().indexOf(filter7) > -1 &&
                txtValue8.toUpperCase().indexOf(filter8) > -1 &&
                txtValue9.toUpperCase().indexOf(filter9) > -1 &&
                txtValue10.toUpperCase().indexOf(filter10) > -1 &&
                txtValue11.toUpperCase().indexOf(filter11) > -1 &&
                txtValue12.toUpperCase().indexOf(filter12) > -1 &&
                txtValue13.toUpperCase().indexOf(filter13) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}

                // <!-- END JAVASCRIPT -->