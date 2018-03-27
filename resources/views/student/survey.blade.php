@extends('home')
@section('survey')

<form method="POST" action="{{route('result')}}" >
    {{ csrf_field() }}
    @if (count ($questions)>0) 
        @foreach($questions as $ques)                                  
            @if($ques->type == "text")
                <label class="control-label"> Cau {{$ques->id}}: {{$ques->question}}</label>              
                @foreach($users as $user)
                @if ($user->nhom == $id_nhom)
                    <div class="form-row">
                    <div class="form-group col-md-8">
                        <label>{{$user->name}}-{{$user->MSSV}}</label>
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" name="diem{{$dem++}}" placeholder="Diem">
                    </div>
                    </div>
                    
                @endif
                @endforeach

            @else
          
                <div class="form-group"> 
                    <label class="control-label" name="question" > Cau {{$ques->id}}: {{$ques->question}}</label>
                    <div class="radio">
                        <label>
                        <input type="radio" name="answer{{$ques->id}}" value="{{$ques->answer1}}"/>
                        {{$ques->answer1}}
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                        <input type="radio"  name="answer{{$ques->id}}" value="{{$ques->answer2}}" checked=checked />
                        {{$ques->answer2}}
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                        <input type="radio"  name="answer{{$ques->id}}" value="{{$ques->answer3}}"/>
                        {{$ques->answer3}}
                        </label>
                    </div>
                </div>        	
           
            @endif       
        @endforeach
        {{$questions->links()}};

    @endif 
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

@endsection



