<a class="btn btn-danger" data-toggle="modal" data-target="#createModal2" href=""><i class="fas fa-plus-square"></i></a>

  <div class="modal fade" id="createModal2"  tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">

    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="staticBackdropLabel">Asignar convenios con empresas</h4>    
            </div>
            <div class="modal-body">
                <form action="{{ url('convenios') }}" method="post" entype="multipart/form-data">
                    @csrf
                    @include('convenio.form2', ['modo2' => 'Guardar'])
                </form>
        </div>
       </div>
    </div>
</div>

