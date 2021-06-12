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