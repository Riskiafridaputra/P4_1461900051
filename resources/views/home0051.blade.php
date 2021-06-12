<head>
    <meta name="viewport" content="width+device-width,
    initial-scale=1">
    <title>Data Buku</title>
    <style>
        table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 1px solid #ddd;
        }
        thead {
        background-color: #FF0000;
        }
        th, td {
        text-align: left;
        padding: 8px;
        }
        tr:nh-child(even){background-color: #FF0000}
        .tambah{
        padding: 8px 16px ;
        text-decoration: none;
        }
    </style>
</head>

<body>
    <div style="overflow-x: auto">
          <table>
              <thead>
                  <tr>
                      <th>Id Jenis</th>
                      <th>Id Buku</th>
                      <th>Judul</th>
                      <th>Jenis</th>
                      <th>Tahun Terbit</th>
                      


                      
                  </tr>
              </thead>
              <tbody>
                
                @foreach ($home as $Home)
                  <tr>
                      <td>{{ $Home->id_jenis }}</td>
                      <td>{{ $Home->id_buku }}</td>
                      <td>{{ $Home->judul }}</td>
                      <td>{{ $Home->jenis }}</td>
                      <td>{{ $Home->tahun_terbit }}</td>
                      
                  </tr>
                @endforeach
              </tbody>
          </table>

    </div>
</body>

<br><a href="{{url('/export0051')}}">Export EXCEL</a>
<br/>