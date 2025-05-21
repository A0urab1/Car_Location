@if(Session::get('success'))
       <div class="alert alert-success">
            {{Session::get('success')}}
       </div> 
@endif
@if(Session::get('info'))
       <div class="alert alert-info">
            {{Session::get('info')}}
       </div> 
@endif
@if(Session::get('error'))
       <div class="alert alert-danger">
            {{Session::get('eroor')}}
       </div> 
@endif

@if($errors->all()> 0)
       @foreach ($errors->all() as $error )
           <div class="alert alert-danger">
            {{$error}}
       </div> 
       @endforeach
@endif