<!DOCTYPE html>
<html lang="en">

<head>
  <title>Surat</title>
  <meta property="og:title" content="Surat" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta charset="utf-8" />
  <meta property="twitter:card" content="summary_large_image" />

  <style data-tag="reset-style-sheet">
    html {
      line-height: 1.15;
    }

    body {
      margin: 0;
    }

    * {
      box-sizing: border-box;
      border-width: 0;
      border-style: solid;
    }

    p,
    li,
    ul,
    pre,
    div,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    figure,
    blockquote,
    figcaption {
      margin: 0;
      padding: 0;
    }

    button {
      background-color: transparent;
    }

    button,
    input,
    optgroup,
    select,
    textarea {
      font-family: inherit;
      font-size: 100%;
      line-height: 1.15;
      margin: 0;
    }

    button,
    select {
      text-transform: none;
    }

    button,
    [type="button"],
    [type="reset"],
    [type="submit"] {
      -webkit-appearance: button;
    }

    button::-moz-focus-inner,
    [type="button"]::-moz-focus-inner,
    [type="reset"]::-moz-focus-inner,
    [type="submit"]::-moz-focus-inner {
      border-style: none;
      padding: 0;
    }

    button:-moz-focus,
    [type="button"]:-moz-focus,
    [type="reset"]:-moz-focus,
    [type="submit"]:-moz-focus {
      outline: 1px dotted ButtonText;
    }

    a {
      color: inherit;
      text-decoration: inherit;
    }

    input {
      padding: 2px 4px;
    }

    img {
      display: block;
    }

    html {
      scroll-behavior: smooth
    }
  </style>
  <style>
    .export-container {
      height: 296mm;
      /* A4 height */
      overflow: hidden;
      page-break-before: always;
      border: none !important;
      /* Hide border when exporting */
    }
  </style>
  <style data-tag="default-style-sheet">
    html {
      font-family: Noto Sans;
      font-size: 16px;
    }

    body {
      font-weight: 400;
      font-style: normal;
      text-decoration: none;
      text-transform: none;
      letter-spacing: normal;
      line-height: 1.15;
      color: var(--dl-color-theme-neutral-dark);
      background-color: var(--dl-color-theme-neutral-light);

      fill: var(--dl-color-theme-neutral-dark);
    }
  </style>
  <link rel="stylesheet" href="https://unpkg.com/animate.css@4.1.1/animate.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" data-tag="font" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=STIX+Two+Text:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&amp;display=swap" data-tag="font" />
  <link rel="stylesheet" href="https://unpkg.com/@teleporthq/teleport-custom-scripts/dist/style.css" />
</head>

<body>
  <link rel="stylesheet" href="./index.css" />
  <div>
    <link href="./index.css" rel="stylesheet" />

   

    <div class="button-container">
    <div class="mb-3">
            <button><a href="index.php" class="btn btn-primary">Back to Menu</a></button>
        </div>
      <select id="font-select" onchange="changeFont(this.value)">
        <option value="">Default</option>
        <option value="Times New Roman">Times New Roman</option>
        <option value="Calibri">Calibri</option>
        <option value="Arial">Arial</option>
        <option value="Noto Sans">Noto Sans</option>
        <option value="Sans Serif">Sans Serif</option>
        <option value="Poppins">Poppins</option>
      </select>
      <button onclick="clearAllEditable()">Hapus Isi Surat</button>
    </div>
    <div class="button-container2" style="margin-bottom: 20px;">
      <button onclick="generatePDFKonten()">Jadikan PDF (Rekap Saja)</button>
      

    </div>
    <div class="button-container3" style="margin-bottom: 20px;">
      <button onclick="selectImage2()">Masukkan TTD Digital (Rekap)</button>
      <button onclick="saveTableData()">Save Data</button>
      <button onclick="readTableData()">Tampilkan Data</button>
      <button onclick="resetDB()">Hapus DB</button>

    </div>


    <!-- Data container to display the table -->
    <div id="data-container">
      <h2>Rekap Sebelumnya:</h2>
      <link rel="stylesheet" href="receipt.css">
      <style>
        table {
          border-collapse: collapse;
          border: 0.1px solid #000000;

          margin: 0;
          padding: 0;
          box-sizing: border-box;
          border: 0.1px solid black;
          border-bottom: 0.1px solid black;
          margin-left: 2.54CM;
          margin-right: 2.54CM;
        }

        th,
        td {
          padding: 2px;
          border: 0.1px solid #000000;
          border-bottom: 0.1px solid #000000;
        }

        th {
          background-color: #00000000;
          text-align: center;
        }

        td {
          text-align: left;
        }
      </style>
      <div class="konten">
        <span class="textbawah" contenteditable="true">
          <span>BENDAHARA PENGELUARAN MABES TNI&nbsp;</span>
          <span>KU TNI WILAYAH NUSRA NA. 1.01.12</span>
        </span>
        <div class="konten01" style="padding-bottom: 10px;" contenteditable="true">
          <h3>Rekap SPBy PAMTAS MEI TA. 2024</h3>
        </div>

        <table id="data-table" contenteditable="true">
          <tr>
            <th>NO</th>
            <th>NO SPPA</th>
            <th style="width: 30%;">URAIAN</th>
            <th>NO SPBy</th>
            <th>Jumlah (Rp)</th>
          </tr>
        </table>
        
        <span class="textbawah05" style="padding-top: 20px;">CATATAN :</span>

        <div class="konten02" >
          <span class="textbawah06" >Jumlah SPPA 263 :</span>
          <div class="konten03">
            <span class="textbawah07"><span contenteditable="true">Rp.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span>
          </div>
        </div>
        <div class="konten06">
          <span class="textbawah08">Jumlah s.d SPBy yg
            lalu&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span contenteditable="true"> Rp.&nbsp; </span></span>

        </div>
        <div class="konten06">
          <span class="textbawah10">Jumlah SPBy ini
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <Rp.&nbsp; contenteditable="true">
            <span style="text-decoration: underline;" contenteditable="true">Rp.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
          </span></span>
        </div>

        <div class="konten02">
          <span class="textbawah12">Sisa SPPA 263</span>
          <div class="konten03">
            <span class="textbawah13">
              
              
              <span style="text-decoration: underline; padding-right: 1.8CM;" contenteditable="true">Rp.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>

              <br />
              <span style="text-decoration: underline;" contenteditable="true">Rp.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
              <br />
            </span>
          </div>
        </div>
        <div class="konten10">
          <div class="konten11">
            <span class="textbawah18" contenteditable="true">
              <span>Pgs. PUM TNI Wilayah Nusra</span>
              <br />
              <span>NA. 1.01.12</span>
              <br />
            </span>
          </div>
        </div>


        <div class="konten12">
          <div class="konten13">

            <img id="signatureImage2" src="" alt="Tanda Tangan" style="max-width:200px;" class="home-image">
            </label>
            <input type="file" id="image-input2" accept="image/*" style="display: none;">
          </div>
        </div>

        <div class="konten14">
          <div class="konten15">
            <span class="textbawah23" contenteditable="true">
              <span>I Made Swastika</span>
              <br />
              <span>Mayor Chk NRP 2194032610573</span>
              <br />
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    let rowNumber = 1; // Initialize row number

    function displayData() {
      // Extract data from elements
      const judul = document.getElementById('judul').textContent.trim();
      const sppa = document.getElementById('SPPA').textContent.trim();
      const biaya = document.getElementById('biaya').textContent.trim();
      const uraian = document.getElementById('uraian').textContent.trim();
      const spby = document.getElementById('nomor').textContent.trim();

      // Get the data table
      const dataTable = document.getElementById('data-table');

      // Create a new row and cells
      const newRow = dataTable.insertRow();
      const cellNo = newRow.insertCell(0);
      const cellSPPA = newRow.insertCell(1);
      const cellUraian = newRow.insertCell(2);
      const cellSPBy = newRow.insertCell(3);
      const cellJumlah = newRow.insertCell(4);

      // Populate the cells with data
      cellNo.textContent = rowNumber++;
      cellSPPA.textContent = sppa;
      cellUraian.textContent = uraian;
      cellSPBy.textContent = spby;
      cellJumlah.textContent = biaya;

    }
  </script>

  </div>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
  <script>
    function generatePDFKonten() {
  const konten = document.querySelector('.konten'); // Target the konten container

  const combinedContent = document.createElement('div');
  combinedContent.appendChild(konten.cloneNode(true)); // Clone and append the konten container

  const options = {
    margin: 0,
    filename: 'document.pdf',
    image: {
      type: 'jpeg',
      quality: 0.98
    },
    html2canvas: {
      scale: 2,
      logging: true,
      dpi: 192,
      letterRendering: true
    },
    jsPDF: {
      unit: 'mm',
      format: 'a4',
      orientation: 'portrait'
    },
    pagebreak: {
      mode: 'avoid-all'
    } // Prevent page breaks
  };

  const dialog = document.createElement('div');
  dialog.innerHTML = `
      <p>Choose an option:</p>
      <label for="filename">File Name:</label>
      <input type="text" id="filename" placeholder="Enter file name">
      <button id="savePDF">Save PDF</button>
      <button id="sendEmail">Send via Email</button>
      <button id="cancel">Cancel</button>
    `;
  dialog.style.position = 'fixed';
  dialog.style.top = '50%';
  dialog.style.left = '50%';
  dialog.style.transform = 'translate(-50%, -50%)';
  dialog.style.background = '#fff';
  dialog.style.padding = '20px';
  dialog.style.border = '2px solid #ccc';
  dialog.style.borderRadius = '5px';
  dialog.style.boxShadow = '0 0 10px rgba(0, 0, 0, 0.2)';
  dialog.style.zIndex = '9999';

  document.body.appendChild(dialog);

  // Function to remove the dialog
  const removeDialog = () => {
    document.body.removeChild(dialog);
  };

  // Event listeners for buttons
  document.getElementById('savePDF').addEventListener('click', () => {
    const fileName = document.getElementById('filename').value.trim() || 'document';
    options.filename = `${fileName}.pdf`;
    html2pdf().from(combinedContent).set(options).save();
    removeDialog();
  });

  document.getElementById('sendEmail').addEventListener('click', () => {
    const fileName = document.getElementById('filename').value.trim() || 'document';
    options.filename = `${fileName}.pdf`;
    html2pdf().from(combinedContent).set(options).output('blob').then((pdfBlob) => {
      const pdfUrl = URL.createObjectURL(pdfBlob);
      window.open(`mailto:?subject=Document&body=Please find the attached document.&attachment=${pdfUrl}`, '_blank');
    });
    removeDialog();
  });

  document.getElementById('cancel').addEventListener('click', () => {
    removeDialog();
  });
}


    function generatePDF() {
      const homeContainer = document.querySelector('.home-container'); // Target the first container
      const konten = document.querySelector('.konten'); // Target the second container

      const combinedContent = document.createElement('div');
      combinedContent.appendChild(homeContainer.cloneNode(true)); // Clone and append the first container
      combinedContent.appendChild(konten.cloneNode(true)); // Clone and append the second container

      const options = {
        margin: 0,
        filename: 'document.pdf',
        image: {
          type: 'jpeg',
          quality: 0.98
        },
        html2canvas: {
          scale: 2,
          logging: true,
          dpi: 192,
          letterRendering: true
        },
        jsPDF: {
          unit: 'mm',
          format: 'a4',
          orientation: 'portrait'
        },
        pagebreak: {
          mode: 'avoid-all'
        } // Prevent page breaks
      };

      const dialog = document.createElement('div');
      dialog.innerHTML = `
          <p>Choose an option:</p>
          <label for="filename">File Name:</label>
          <input type="text" id="filename" placeholder="Enter file name">
          <button id="savePDF">Save PDF</button>
          <button id="sendEmail">Send via Email</button>
          <button id="cancel">Cancel</button>
        `;
      dialog.style.position = 'fixed';
      dialog.style.top = '50%';
      dialog.style.left = '50%';
      dialog.style.transform = 'translate(-50%, -50%)';
      dialog.style.background = '#fff';
      dialog.style.padding = '20px';
      dialog.style.border = '2px solid #ccc';
      dialog.style.borderRadius = '5px';
      dialog.style.boxShadow = '0 0 10px rgba(0, 0, 0, 0.2)';
      dialog.style.zIndex = '9999';

      document.body.appendChild(dialog);

      // Function to remove the dialog
      const removeDialog = () => {
        document.body.removeChild(dialog);
      };

      // Event listeners for buttons
      document.getElementById('savePDF').addEventListener('click', () => {
        const fileName = document.getElementById('filename').value.trim() || 'document';
        options.filename = `${fileName}.pdf`;
        html2pdf().from(combinedContent).set(options).save();
        removeDialog();
      });

      document.getElementById('sendEmail').addEventListener('click', () => {
        const fileName = document.getElementById('filename').value.trim() || 'document';
        options.filename = `${fileName}.pdf`;
        html2pdf().from(combinedContent).set(options).output('blob').then((pdfBlob) => {
          const pdfUrl = URL.createObjectURL(pdfBlob);
          window.open(`mailto:?subject=Document&body=Please find the attached document.&attachment=${pdfUrl}`, '_blank');
        });
        removeDialog();
      });

      document.getElementById('cancel').addEventListener('click', () => {
        removeDialog();
      });
    }


    function generatePDFSurat() {
  const homeContainer = document.querySelector('.home-container'); // Target the home container

  const combinedContent = document.createElement('div');
  combinedContent.appendChild(homeContainer.cloneNode(true)); // Clone and append the home container

  const options = {
    margin: 0,
    filename: 'document.pdf',
    image: {
      type: 'jpeg',
      quality: 0.98
    },
    html2canvas: {
      scale: 2,
      logging: true,
      dpi: 192,
      letterRendering: true
    },
    jsPDF: {
      unit: 'mm',
      format: 'a4',
      orientation: 'portrait'
    },
    pagebreak: {
      mode: 'avoid-all'
    } // Prevent page breaks
  };

  const dialog = document.createElement('div');
  dialog.innerHTML = `
      <p>Choose an option:</p>
      <label for="filename">File Name:</label>
      <input type="text" id="filename" placeholder="Enter file name">
      <button id="savePDF">Save PDF</button>
      <button id="sendEmail">Send via Email</button>
      <button id="cancel">Cancel</button>
    `;
  dialog.style.position = 'fixed';
  dialog.style.top = '50%';
  dialog.style.left = '50%';
  dialog.style.transform = 'translate(-50%, -50%)';
  dialog.style.background = '#fff';
  dialog.style.padding = '20px';
  dialog.style.border = '2px solid #ccc';
  dialog.style.borderRadius = '5px';
  dialog.style.boxShadow = '0 0 10px rgba(0, 0, 0, 0.2)';
  dialog.style.zIndex = '9999';

  document.body.appendChild(dialog);

  // Function to remove the dialog
  const removeDialog = () => {
    document.body.removeChild(dialog);
  };

  // Event listeners for buttons
  document.getElementById('savePDF').addEventListener('click', () => {
    const fileName = document.getElementById('filename').value.trim() || 'document';
    options.filename = `${fileName}.pdf`;
    html2pdf().from(combinedContent).set(options).save();
    removeDialog();
  });

  document.getElementById('sendEmail').addEventListener('click', () => {
    const fileName = document.getElementById('filename').value.trim() || 'document';
    options.filename = `${fileName}.pdf`;
    html2pdf().from(combinedContent).set(options).output('blob').then((pdfBlob) => {
      const pdfUrl = URL.createObjectURL(pdfBlob);
      window.open(`mailto:?subject=Document&body=Please find the attached document.&attachment=${pdfUrl}`, '_blank');
    });
    removeDialog();
  });

  document.getElementById('cancel').addEventListener('click', () => {
    removeDialog();
  });
}




    function changeFont(fontFamily) {
      // Set the font family for the body element
      document.body.style.fontFamily = fontFamily;

      // Remove the 'selected' class from all font buttons
      const fontButtons = document.querySelectorAll('.button-container button');
      fontButtons.forEach(button => button.classList.remove('selected'));

      // Add the 'selected' class to the clicked button
      const selectedButton = document.querySelector(`button[data-font="${fontFamily}"]`);
      selectedButton.classList.add('selected');
    }
  </script>
  <script>
    function selectImage() {
      const imageInput = document.getElementById('image-input');
      imageInput.click(); // Trigger click on hidden file input
    }

    // Function to handle image selection
    document.getElementById('image-input').addEventListener('change', function() {
      const signatureImage = document.getElementById('signatureImage');
      const file = this.files[0]; // Get the selected file
      if (file) {
        const reader = new FileReader(); // Create a FileReader object
        reader.onload = function(e) {
          signatureImage.src = e.target.result; // Set the image source to the selected file
          signatureImage.style.display = 'block'; // Display the image
          localStorage.setItem('image', e.target.result); // Save the image to local storage
        };
        reader.readAsDataURL(file); // Read the selected file as a data URL
      }
    });


    // Fungsi untuk memicu klik pada input gambar lembar kedua
    function selectImage2() {
      const imageInput2 = document.getElementById('image-input2');
      imageInput2.click();
    }

    // Event listener untuk menangani pemilihan gambar pada lembar kedua
    document.getElementById('image-input2').addEventListener('change', function() {
      const signatureImage2 = document.getElementById('signatureImage2');
      const file = this.files[0];
      if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
          signatureImage2.src = e.target.result;
          signatureImage2.style.display = 'block';
        };
        reader.readAsDataURL(file);
      }
    });
  </script>

  <script>
    function changeFont(fontFamily) {
      // Set the font family for the body element
      if (fontFamily === "") {
        document.body.style.fontFamily = "inherit";
      } else {
        document.body.style.fontFamily = fontFamily;
      }

      // Remove the 'selected' class from all font buttons
      const fontButtons = document.querySelectorAll('.button-container button');
      fontButtons.forEach(button => button.classList.remove('selected'));

      // Add the 'selected' class to the clicked button
      const selectedButton = document.querySelector(`button[data-font="${fontFamily}"]`);
      selectedButton.classList.add('selected');
    }
  </script>

  <script>
    function clearAllEditable() {
      const editableElements = document.querySelectorAll('[contenteditable="false"]');
      editableElements.forEach(element => {
        switch (element.className) {
          case 'home-text':
            element.innerHTML = `
                <span class="placeholder">Masukkan Judul</span>`;
            break;
          case 'home-text03':
            element.innerHTML = '<span class="placeholder">Tempat, Tanggal</span>';
            break;
          case 'home-text22':
            element.innerHTML = `
                <span class="placeholder">Nomor</span> 
                <br />
                <span class="placeholder">Klasifikasi</span>                  <br />
                <span class="placeholder">Lampiran</span> 
                <br />
                <span class="placeholder">Perihal</span> 
                <br />
              `;
            break;
          case 'home-text37':
            element.innerHTML = `
                <span class="placeholder">1. </span>
                <br />
                <span class="placeholder">2. </span>
                <br />
                <span class="placeholder">3. </span>
                <br />
              `;
            break;
          case 'home-text52':
            element.innerHTML = `<span class="placeholder">a.</span>`;
            break;
          case 'home-text53':
            element.innerHTML = `<span class="placeholder">b.</span>`;
            break;
          case 'home-text54':
            element.innerHTML = `<span class="placeholder">2.</span>`;
            break;
          case 'home-text55':
            element.innerHTML = `<span class="placeholder">3.</span>`;
            break;
          case 'home-text56':
            element.innerHTML = `
                <span class="placeholder">Penandatangan</span>
              `;
            break;

          case 'home-text61':
            element.innerHTML = `
                <span class="placeholder">Nama Penanda Tangan</span>
              `;
            break;

          default:
            break;
        }
      });
    }
  </script> 

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!--  SIMPAN DATA KE DATABASE -->
  <script>
    function saveTableData() {
      const dataTable = document.getElementById('data-table');
      const rows = dataTable.rows;

      const tableData = [];

      // Iterate through the rows (skipping the header row)
      for (let i = 1; i < rows.length; i++) {
        const row = rows[i];
        const cells = row.cells;

        const rowData = {
          sppa: cells[1].textContent.trim(),
          uraian: cells[2].textContent.trim(),
          spby: cells[3].textContent.trim(),
          jumlah: cells[4].textContent.trim()
        };

        tableData.push(rowData);
      }

      // Konfirmasi sebelum menyimpan data
      Swal.fire({
        title: 'Konfirmasi',
        text: 'Apakah Anda yakin ingin menyimpan data?',
        icon: 'question',
        showCancelButton: true,
        confirmButtonText: 'Ya',
        cancelButtonText: 'Tidak',
        reverseButtons: true
      }).then((result) => {
        if (result.isConfirmed) {
          const xhr = new XMLHttpRequest();
          xhr.open('POST', 'save_table_data.php', true);
          xhr.setRequestHeader('Content-Type', 'application/json');
          xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
              if (xhr.status === 200) {
                const response = JSON.parse(xhr.responseText);
                if (response.success) {
                  console.log('Table data saved successfully');
                  Swal.fire('Berhasil', 'Data berhasil disimpan.', 'success');
                } else {
                  console.error('Error saving table data');
                  Swal.fire('Error', 'Terjadi kesalahan saat menyimpan data. Silakan coba lagi.', 'error');
                }
              } else if (xhr.status === 500) {
                console.error('Database connection error');
                Swal.fire('Error', 'Koneksi ke database gagal. Silakan periksa koneksi Anda.', 'error');
              } else {
                console.error('Error saving table data');
                Swal.fire('Error', 'Terjadi kesalahan saat menyimpan data. Silakan coba lagi.', 'error');
              }
            }
          };
          xhr.send(JSON.stringify(tableData));
        } else {
          Swal.fire('Dibatalkan', 'Penyimpanan data dibatalkan.', 'info');
        }
      });
    }

    //  READ/TAMPILKAN DATA DARI TABEL DATABASE 
    function readTableData() {
      Swal.fire({
        title: 'Konfirmasi',
        text: 'Apakah ingin menampilkan data dari tabel?',
        icon: 'question',
        showCancelButton: true,
        confirmButtonText: 'Ya',
        cancelButtonText: 'Tidak',
        reverseButtons: true
      }).then((result) => {
        if (result.isConfirmed) {
          const xhr = new XMLHttpRequest();
          xhr.open('GET', 'read_table_data.php', true);
          xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
              if (xhr.status === 200) {
                const response = JSON.parse(xhr.responseText);
                if (response.success) {
                  const tableData = response.data;
                  if (tableData.length === 0) {
                    Swal.fire('Error', 'Tabel Kosong, Tidak ada data yang bisa ditampilkan.', 'error');
                  } else {
                    updateTable(tableData);
                    Swal.fire('Berhasil', 'Data berhasil dimuat dari basis data.', 'success');
                  }
                } else {
                  console.error('Error reading table data');
                  Swal.fire('Error', 'Terjadi kesalahan saat memuat data dari basis data.', 'error');
                }
              } else if (xhr.status === 500) {
                console.error('Database connection error');
                Swal.fire('Error', 'Koneksi ke database gagal. Silakan periksa koneksi Anda.', 'error');
              } else {
                console.error('Error reading table data');
                Swal.fire('Error', 'Terjadi kesalahan saat memuat data dari basis data.', 'error');
              }
            }
          };
          xhr.send();
        }
      });
    }

    // TAMPILKAN DATA SESUIA BARIS KE DUA 
    function updateTable(tableData) {
      const dataTable = document.getElementById('data-table');
      const tbody = dataTable.querySelector('tbody');

      // Clear existing table rows except the header row
      while (tbody.childNodes.length > 1) {
        tbody.removeChild(tbody.lastChild);
      }

      tableData.forEach((rowData, index) => {
        const row = document.createElement('tr');

        const cellNo = document.createElement('td');
        const cellSPPA = document.createElement('td');
        const cellUraian = document.createElement('td');
        const cellSPBy = document.createElement('td');
        const cellJumlah = document.createElement('td');

        cellNo.textContent = index + 1;
        cellSPPA.textContent = rowData.sppa;
        cellUraian.textContent = rowData.uraian;
        cellSPBy.textContent = rowData.spby;
        cellJumlah.textContent = rowData.jumlah;

        row.appendChild(cellNo);
        row.appendChild(cellSPPA);
        row.appendChild(cellUraian);
        row.appendChild(cellSPBy);
        row.appendChild(cellJumlah);

        tbody.appendChild(row);
      });
    }

    // RESET/HAPUS DB
    function resetDB() {
      Swal.fire({
        title: 'Konfirmasi',
        text: 'Apakah Anda yakin ingin mereset database?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Ya, reset',
        cancelButtonText: 'Batal',
        reverseButtons: true
      }).then((result) => {
        if (result.isConfirmed) {
          const xhr = new XMLHttpRequest();
          xhr.open('POST', 'reset_db.php', true);
          xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
              if (xhr.status === 200) {
                const response = JSON.parse(xhr.responseText);
                if (response.success) {
                  Swal.fire('Berhasil', 'Database berhasil direset.', 'success');
                } else {
                  console.error('Error resetting database');
                  Swal.fire('Error', 'Terjadi kesalahan saat mereset database.', 'error');
                }
              } else if (xhr.status === 500) {
                console.error('Database connection error');
                Swal.fire('Error', 'Koneksi ke database gagal. Silakan periksa koneksi Anda.', 'error');
              } else {
                console.error('Error resetting database');
                Swal.fire('Error', 'Terjadi kesalahan saat mereset database.', 'error');
              }
            }
          };
          xhr.send();
        }
      });
    }
  </script>


</body>

</html>