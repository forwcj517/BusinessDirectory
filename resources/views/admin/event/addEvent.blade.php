
@extends('admin.main')
@section('content')
<div id="content" class="flex ">
    <div class="page-container-1" id="page-container">
        <div class="page-title padding pb-0 ">
            <h2 class="text-md mb-0">Add Event
            <a href="{{ url('admin/eventLists') }}" class="btn btn-raised btn-wave w-xs blue" style="float: right;color: white;">Back</a>
            </h2>
        </div>        
    <div class="padding">

    <div class="tab-content mb-4">
        <div class="tab-pane fade show active" id="home2" role="tabpanel" aria-labelledby="home-tab">
            <form method="post" action="{{ url('admin/addEvent') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <input type="text" name="name" class="col-md-6 form-control" placeholder="Name" style="line-height: 2;" required="required">
                </div>

                <div class="form-group">
                    <textarea type="text" name="desc" class="col-md-6 form-control" placeholder="Desc" style="line-height: 2;" required="required"></textarea>
                </div>                  

                <div class="form-group">
                    <input type="date" name="event_date" class="col-md-6 form-control" placeholder="Event Date" style="line-height: 2;" required="required">
                </div>                            
                <div class="form-group">
                    <textarea type="text" name="venue_details" class="col-md-6 form-control" placeholder="Venue details" style="line-height: 2;" required="required"></textarea>
                </div>       
                <div class="form-group">
                    <input type="text" name="website" class="col-md-6 form-control" placeholder="Website " style="line-height: 2;" >
                </div>           
                <div class="form-group">
                    <input type="text" name="ticket_cost" class="col-md-6 form-control" placeholder="Ticket Cost" style="line-height: 2;" >
                </div>                  
                <div class="form-group">
                    <input type="file" name="image" class="col-md-6 form-control" placeholder="Image" style="line-height: 2;" required="required">
                </div>                  
              
                <div class="form-group">                                                  
                    <select id="book_id" name="book_id" class="col-md-6 form-control">
                        @foreach($books as $book)
                            <option value="{{$book->id}}"> {{$book->title}} </option>                                        
                        @endforeach
                    </select>
                </div>
                

                <div class="col-md-6 form-group" style="padding: 0px;">                    
                    <button class="btn btn-raised btn-wave mb-2 w-xs blue" style="float: right;">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop



