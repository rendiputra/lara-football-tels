@extends('../layouts/app')

@section('title', 'Add Foto')

@section('content')

<section id="addfoto">
    
    <div class="container">
        
        <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card">

                <div class="card-header">Masukan Data Foto</div>



                <div class="card-body">

                    <form method="POST" class="form-prevent" action="{{ route('add_foto_act') }}" enctype="multipart/form-data">
                        
                        @csrf
                        
                        <div class="form-group">

                            <label for="caption">Caption</label>

                            <input class="form-control" id="caption" type="text" name="caption" required="">

                        </div>
                        
                            <div id="alert" class="alert alert-danger" style="display:none;">
                                <p>Caption Harus Diisi</p>
                            </div>
                        
                        
                        <div class="form-group">

                            <label for="foto">Foto</label>

                            <div class="custom-file control-group">

                                <input type="file" id="foto" class="custom-file-input" name="foto[]" required>

                                <label class="custom-file-label" for="foto">Choose file</label>

                            </div>
                            <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
                            
                            <div class="clone hide">
                                <div class="custom-file control-group">
    
                                    <input type="file" id="foto" class="custom-file-input" name="foto[]" required>
    
                                    <label class="custom-file-label" for="foto">Choose file</label>
    
                                </div>
                                
                                <div class="input-group-btn"> 
                                  <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                                </div>
                                    
                            </div>
                        </div>
                        
                            <div id="alert" class="alert alert-danger" style="display:none;">
                                <p>foto Harus Diisi</p>
                            </div>
                        
                        <div >
                            
                            <button id="button" type="submit" class="btn btn-primary btn-block button-prevent">Simpan</button>
                            
                        </div>
                    </form>



                </div>

            </div>

        </div>

    </div>
        
    </div>
    
</section>


@endsection

@section('js')

<script type="text/javascript">


    $(document).ready(function() {

      $(".btn-success").click(function(){ 
          var html = $(".clone").html();
          $(".increment").after(html);
      });

      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".control-group").remove();
      });

    });

</script>
@endsection