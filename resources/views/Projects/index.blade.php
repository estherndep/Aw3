@extends('layouts.app')
@section('content')
 
<side-drawer></side-drawer>
<div class="content" >
<header class="inverse" style="padding: 8rem 6rem 0 6rem; height: 20rem;">
    <h1>PROJECTS</h1>
    <div></div>
</header>
<div class="project-list col-10">
        @for ($i = 0; $i < count($projects); $i+=3)

        <div class="row">
            <a class="project-block large col-12 col-lg-8">

                <div>

                    <img src="{{$projects[$i]->images()->first()}}" alt="">
                    <div class="overlay">
                        <p>{{$projects[$i]->name}}</p>
                    </div>

                </div>
        
            </a>

            <div class="row col-12 col-lg-4">
                @if($projects[$i+1])
                    <a class="project-block small col-12">

                        <div>
                            
                            <img src="{{$projects[$i+2]->images()->first()}}" alt="">
                            <div class="overlay">
                                <p>{{$projects[$i+1]->name}}</p>
                            </div> 

                        </div>
                
                    </a>
                @endif()
        
                @if($projects[$i+2])
                    <a class="project-block small col-12">

                        <div>
                            
                            <img src="{{$projects[$i+2]->images()->first()}}" alt="">
                            <div class="overlay">
                                <p>{{$projects[$i+2]->name}}</p>
                            </div>

                        </div>
                
                    </a>
                @endif()
            </div>
        </div>
        @endfor
</div>
</div>


@endsection

