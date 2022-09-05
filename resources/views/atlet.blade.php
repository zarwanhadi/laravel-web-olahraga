@include('header')
  <div class="container">
    <h2>Data Jenis Atlet </h2>
    <hr>
    <h4>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Tambah Data
       </button>
    </h4>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nama Atlet</th>
          <th>Nama Olahrage</th>
          <th>Jenis Kelamin</th>
          <th>Alamat</th>
          <th>EDIT</th>
          <th>DELETE</th>
        </tr>
      </thead>
      <tbody>
            <?php $i = 1;?>
        @foreach($data_jenis as $a)
        <tr>
          <td>{{$a->id}}</td>
          <td>{{$a->nama}}</td>
          <td>{{$a->nama_olahraga}}</td>
          <td>{{$a->jenis_kelamin}}</td>
          <td>{{$a->alamat}}</td>
          <td align="center"><button type="button" class="btn btn-sm bg-warning" data-toggle="modal" data-target="#exampleModalss{{$i}}">EDIT</button></td>
          <td align="center"><button type="button" class="btn btn-sm bg-danger" data-toggle="modal" data-target="#exampleModals{{$i}}">DELETE</button></td>
                    
        </tr>
        <div class="modal fade" id="exampleModals{{$i}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <form method="post" action="{{route('delete_atlet')}}">
                        @csrf
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                          <div class="modal-body">
                            Apakah anda yakin ingin menghapus data?
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <input type="text" value="{{$a->id}}" name="del"style="display:none">
                            <input  type="submit" class="btn btn-sm bg-danger" value="DELETE">
                          </div>
                        </div>
                        </form>
                      </div>
                    </div>
                    
                    <div class="modal fade" id="exampleModalss{{$i}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                      <form method="post" action="{{route('edit_atlet')}}">
                      @csrf
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">EDIT Data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                        <div class="modal-body">
                          <div class="form-group row" style="margin-left:-120px;">
                            <label class="col-sm-2 col-form-label" style="margin-left: 150px;">Nama Atlet</label>
                            <div class="col-sm-6">
                              <input type="text" name="nama_atlet" class="form-control" placeholder="" value="{{$a->nama}}" required>
                            </div>
                          </div>  
                          
                          
                          <div class="form-group row" style="margin-left:-120px;">
                            <label class="col-sm-2 col-form-label" style="margin-left: 150px;">Jenis Olahraga</label>
                            <div class="col-sm-6">
                              <select name="id_jenis" class="form-control">
                                @foreach($data as $d)
                                <option value="{{$d->id}}">{{$d->nama_olahraga}}</option>
                                @endforeach
                              </select>
                            </div>
                          </div>  
                          
                          
                          <div class="form-group row" style="margin-left:-120px;">
                            <label class="col-sm-2 col-form-label" style="margin-left: 150px;">Jenis Kelamin</label>
                            <div class="col-sm-6">
                              <select name="jenis_kelamin" class="form-control">
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                              </select>
                            </div>
                          </div>  
                          <div class="form-group row" style="margin-left:-120px;">
                            <label class="col-sm-2 col-form-label" style="margin-left: 150px;">Alamat</label>
                            <div class="col-sm-6">
                              <textarea name="alamat" class="form-control">{{$a->alamat}}</textarea>
                            </div>
                          </div>  
                        </div>
        
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <input type="text" value="{{ $a->id }}" name="del"style="display:none">
                          <input  type="submit" class="btn btn-sm bg-warning" value="EDIT">
                        </div>
                      </form>
                      </div>
                    </div>
        {{$i++}}
        @endforeach
      </tbody>
    </table>
  </div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
  <form method="post" action="{{ route('add_atlet') }}">
  @csrf
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">
        <div class="form-group row" style="margin-left:-120px;">
          <label class="col-sm-2 col-form-label" style="margin-left: 150px;">Nama Atlet</label>
          <div class="col-sm-6">
            <input type="text" name="nama_atlet" class="form-control" placeholder="" required>
          </div>
        </div>  
        
        
        <div class="form-group row" style="margin-left:-120px;">
          <label class="col-sm-2 col-form-label" style="margin-left: 150px;">Jenis Olahraga</label>
          <div class="col-sm-6">
            <select name="id_jenis" class="form-control">
              @foreach($data as $d)
              <option value="{{$d->id}}">{{$d->nama_olahraga}}</option>
              @endforeach
            </select>
          </div>
        </div>  
        
        
        <div class="form-group row" style="margin-left:-120px;">
          <label class="col-sm-2 col-form-label" style="margin-left: 150px;">Jenis Kelamin</label>
          <div class="col-sm-6">
            <select name="jenis_kelamis" class="form-control">
              <option value="Laki-Laki">Laki-Laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
          </div>
        </div>  
        <div class="form-group row" style="margin-left:-120px;">
          <label class="col-sm-2 col-form-label" style="margin-left: 150px;">Alamat</label>
          <div class="col-sm-6">
            <textarea name="alamat" class="form-control"></textarea>
          </div>
        </div>  
      </div>
        
        
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input  type="submit" class="btn btn-primary" value="Simpan data">
      </div>
    </div>
     </form>
  </div>
</div>
</body>
</html>
