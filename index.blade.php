@extends('layout')

@section('content')
    <h4>Laravel testes</h4>

       <div class="card-body">
        <form action="{{ route('index') }}" method="GET" >
            @csrf
            @method('PUT')

    {{-- select de ensino básico --}} 
                                                
                                                    
    <div class="col-md-4">
        <label for="instructions">FORMAÇÃO BÁSICA</label>
        <select class="form-control" name="instructions" id="instructions" >
            <option disable selected> Selecione</option>
           
            @foreach ($instructions as $instruction)
                <option value="{{ $instruction->name }}">
                    {{ $instruction['name'] }}</option>
                    
            @endforeach
        </select>
    </div> 


   
<div class="form-row col-md-8">
    <label for="school">NOME DA ESCOLA</label>
    <input type="text" class="form-control" id="school"
        name="school" placeholder="NOME DA ESCOLA">
</div>
 <!-- select cursos técnicos -->
{{-- <div class="form-row col-md-4">
    <label for="courses">CURSO TÉCNICO</label>
    <select class="form-control" id="courses" name="courses">
        <option disable selected> Selecione</option>
        @foreach ($courses as $course)
            <option value="{{ $course->name }}">
                {{ $course['name'] }}</option>
        @endforeach
    </select>
</div> --}}
         
<div class="form-row col-md-8">
    <label for="technical school">NOME DA INSTITUIÇÃO</label>
    <input type="text" class="form-control" id="technical school"
        name="technical school" placeholder="NOME DA INSTITUIÇÃO">
</div>
<!-- select de ensino superior-->
{{-- <div class="form-row col-md-4">
    <label for="academics">FORMAÇÃO SUPERIOR</label>
    <select class="form-control" id="academics" name="academics">
        <option disable selected> Selecione</option>
        @foreach ($academics as $academic)
            <option value="{{ $academic->name }}">
                {{ $academic['name'] }}</option>
        @endforeach
    </select>
</div> --}}
            
<div class="form-row col-md-8">
    <label for="university">UNIVERSIDADE / FACULDADE</label>
    <input type="university" class="form-control" id="university"
        name="university" placeholder="NOME DA UNIVERSIDADE/FACULDADE">
</div>


        </form>

       </div>


      
 @endsection


