@include('header')
  <div class="container">
    <h2>Data Jenis Olahraga</h2>
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
          <th>Nama Olahraga</th>
          <th>Jenis Olahraga</th>
          <th>Jumlah Pemain</th>
          <th>EDIT</th>
          <th>DELETE</th>
        </tr>
      </thead>
      <tbody>
            <?php $i = 1;?>
        @foreach($data_jenis as $a)
        <tr>
          <td>{{$a->id}}</td>
          <td>{{$a->nama_olahraga}}</td>
          <td>{{$a->jenis_olahraga}}</td>
          <td>{{$a->jumlah_pemain}}</td>
          <td align="center"><button type="button" class="btn btn-sm bg-warning" data-toggle="modal" data-target="#exampleModalss{{$i}}">EDIT</button></td>
          <td align="center"><button type="button" class="btn btn-sm bg-danger" data-toggle="modal" data-target="#exampleModals{{$i}}">DELETE</button></td>
                    
        </tr>
        <div class="modal fade" id="exampleModals{{$i}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <form method="post" action="{{route('delete_jenis')}}">
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
                      <form method="post" action="{{route('edit_jenis')}}">
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
                              <label class="col-sm-2 col-form-label" style="margin-left: 150px;">Nama Olahraga</label>
                              <div class="col-sm-6">
                                <input type="text" name="nama_olahraga" class="form-control" value="{{$a->nama_olahraga}}" placeholder="" required>
                              </div>
                            </div>  
                            
                            
                            <div class="form-group row" style="margin-left:-120px;">
                              <label class="col-sm-2 col-form-label" style="margin-left: 150px;">Jenis Olahraga</label>
                              <div class="col-sm-6">
                                <input type="text" name="jenis_olahraga" class="form-control" value="{{$a->jenis_olahraga}}" placeholder="" required>
                              </div>
                            </div>  
                            
                            
                            <div class="form-group row" style="margin-left:-120px;">
                              <label class="col-sm-2 col-form-label" style="margin-left: 150px;">Jumlah Pemain</label>
                              <div class="col-sm-6">
                                <input type="number" name="jumlah_pemain" class="form-control" placeholder="" value="{{$a->jumlah_pemain}}" required>
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
  <form method="post" action="{{ route('add_jenis') }}">
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
          <label class="col-sm-2 col-form-label" style="margin-left: 150px;">Nama Olahraga</label>
          <div class="col-sm-6">
            <input type="text" name="nama_olahraga" class="form-control" placeholder="" required>
          </div>
        </div>  
        
        
        <div class="form-group row" style="margin-left:-120px;">
          <label class="col-sm-2 col-form-label" style="margin-left: 150px;">Jenis Olahraga</label>
          <div class="col-sm-6">
            <input type="text" name="jenis_olahraga" class="form-control" placeholder="" required>
          </div>
        </div>  
        
        
        <div class="form-group row" style="margin-left:-120px;">
          <label class="col-sm-2 col-form-label" style="margin-left: 150px;">Jumlah Pemain</label>
          <div class="col-sm-6">
            <input type="number" name="jumlah_pemain" class="form-control" placeholder="" required>
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
