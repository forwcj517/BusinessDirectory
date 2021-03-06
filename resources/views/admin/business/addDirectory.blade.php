@extends('admin.main')
@section('content')
<div id="content" class="flex ">
    <div class="page-container-1" id="page-container">
        <div class="page-title padding pb-0 ">
            <h2 class="text-md mb-0">Add Directory  Level ({{$parent? ($parent->level + 1):'1' }})
            <a href="{{ url('admin/directoryLists',0) }}" class="btn btn-raised btn-wave w-xs blue" style="float: right;color: white;">Back</a>
            </h2>
        </div>        
    <div class="padding">


    <div class="tab-content mb-4">
        <div class="tab-pane fade show active" id="home2" role="tabpanel" aria-labelledby="home-tab">
            <form method="post" action="{{ url('admin/addDirectory', $pid) }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="level" class="col-md-6 form-control" value="{{$parent?$parent->level:'1' }}" style="line-height: 2;" required="required">
                <input type="hidden" name="pid" class="col-md-6 form-control" value="{{$parent?$parent->id:'0' }}" style="line-height: 2;" required="required">

                <div class="form-group">
                    <input type="text" name="title" class="col-md-6 form-control" placeholder="Title" style="line-height: 2;" required="required">
                </div>

                <div class="form-group">
                    <input type="textarea" name="desc" class="col-md-6 form-control" placeholder="Description" style="line-height: 4;" required="required">
                </div>                   

                <div class="form-group">
                    <input type="file" name="img" class="col-md-6 form-control" placeholder="Image" style="line-height: 2;" required="required">
                </div>
                
                <div class="col-md-6 form-group" style="padding: 0px;">                    
                    <button class="btn btn-raised btn-wave mb-2 w-xs blue" style="float: right;">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop



