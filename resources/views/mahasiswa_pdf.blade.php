<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Mahasiswa</title>
    <style>
    table {
      border-collapse: collapse;
      border-spacing: 0;
      width: 100%;
      border: 1px solid #ddd;
    }

    thead {
      background-color: #f2f2f2;
    }

    th, td {
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even){background-color: #f2f2f2}

    .tambah{
      padding: 8px 16px ;
      text-decoration: none;
    }

    </style>
</head>

<body>
    <div style="overflow-x:auto;">
        <br>
        <center><h2>Data Mahasiswa</h2></center>
        <br>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nbi</th>
                    <th>Nama Mahasiswa</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; ?>
                @foreach ($mahasiswa as $mhs)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$mhs->nbi}}</td>
                    <td>{{$mhs->nama_mhs}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
