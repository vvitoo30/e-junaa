<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Copy of Golden Lone Hornet</title>
    <meta property="og:title" content="Copy of Golden Lone Hornet" />
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
    
    <link
      rel="stylesheet"
      href="https://unpkg.com/animate.css@4.1.1/animate.css"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=STIX+Two+Text:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://unpkg.com/@teleporthq/teleport-custom-scripts/dist/style.css"
    />
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
        <div id="data-container">
          <h2>Rekap Sebelumnya:</h2>
          <link rel="stylesheet" href="history.css">
          <style>
            table {
              border-collapse: collapse;
              border: 0.01px solid #000000;
    
              margin: 0;
              padding: 0;
              box-sizing: border-box;
              border: 0.01px solid black;
              border-bottom: 0.01px solid black;
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
      <div class="home-container">
        <span class="home-text" contenteditable="true">
          <span>BENDAHARA PENGELUARAN MABES TNI&nbsp;</span>
          <span>KU TNI WILAYAH NUSRA NA. 1.01.12</span>
        </span>
        <div class="home-container01" contenteditable="true">
          <h3>Rekap SPBy PAMTAS MEI TA. 2024</h3>
        </div>
        <br />
        <table id="data-table" contenteditable="true">
          <tr>
            <th>NO</th>
            <th>NO SPPA</th>
            <th style="width: 30%;">URAIAN</th>
            <th>NO SPBy</th>
            <th>Jumlah (Rp)</th>
          </tr>
        </table>
        <br />
        <span class="home-text05" contenteditable="true">CATATAN :</span>
        <div class="home-container02">
          <span class="home-text06" contenteditable="true">Jumlah SPPA 263 :</span>
          <div class="home-container03">
            <span class="home-text07" contenteditable="true">Rp.</span>
          </div>
        </div>
        <div class="home-container04">
          <span class="home-text08" contenteditable="true">Jumlah s.d SPBy yg lalu</span>
          <div class="home-container05">
            <span class="home-text09" contenteditable="true">Rp.&nbsp;</span>
          </div>
        </div>
        <div class="home-container06">
          <span class="home-text10" contenteditable="true">Jumlah SPBy ini</span>
          <div class="home-container07">
            <span class="home-text11" contenteditable="true" style="text-decoration: underline;" >Rp.</span>
          </div>
        </div>
        <div class="home-container08">
          <div class="home-container09">
            <span class="home-text12">
              <span contenteditable="true" style="text-decoration: underline;" >Rp</span>
              <br />
              <span contenteditable="true" style="text-decoration: underline;" >Rp.</span>
              <br />
            </span>
          </div>
        </div>
        <span class="home-text17" contenteditable="true">Sisa SPPA 263</span>
        <div class="home-container10">
          <div class="home-container11">
            <span class="home-text18">
              <span contenteditable="true">Pgs. PUM TNI Wilayah Nusra</span>
              <br />
              <span contenteditable="true">NA. 1.01.12</span>
              <br />
            </span>
          </div>
        </div>
        <div class="home-container12">
          <div class="home-container13">
            
          <img id="signatureImage2" src="" alt="Tanda Tangan" style="max-width:200px;" class="home-image">
            </label>
            <input type="file" id="image-input2" accept="image/*" style="display: none;">

          </div>
        </div>
        <div class="home-container14">
          <div class="home-container15">
            <span class="home-text23">
              <span contenteditable="true">I Made Swastika</span>
              <br />
              <span contenteditable="true">Mayor Chk NRP 2194032610573</span>
              <br />
            </span>
          </div>
        </div>
      </div>
    </div>
  </body>


  </html>
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
  const konten = document.querySelector('.home-container'); // Target the konten container

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


  </script>
  <script>
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
