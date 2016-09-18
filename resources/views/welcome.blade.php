@extends('layouts.app')

@section('content')
<div class="content">
  <div class="container">
    <div class="col-md-6 col-xs-12 col-md-offset-6 p-x-2 p-y-3 p-t-0 bg-l-grey sml-border-radius shadow">
      <h1 class="brand-pink">Win a free giftbox!</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
      <p class="brand-pink">Please enter your full name and email address below to enter the competition.</p>
      {!! Form::open(
      array(
      'route' => 'welcome.store', 
      'class' => 'form p-y-2')
      ) !!}

      @if (count($errors) > 0)
      <div class="alert alert-danger">
        There was a problem with your submission<br />
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
      @endif
      
      @if(session('message_success'))
        <div class="alert alert-success">
          <p>{{ session('message_success') }}</p>
        </div>
      @endif      
      
      <div class="form-group row">
        <div class="col-md-4 col-xs-12">
          {!! Form::label('Full Name') !!}
        </div>
        <div class="col-md-8 col-xs-12">
          {!! Form::text('name', null, 
          array(
          'class'=>'form-control', 
          'placeholder'=>'John Smith'
          )) !!}
        </div>
      </div>

      <div class="form-group row">
        <div class="col-md-4">
          {!! Form::label('Email') !!}
        </div>
        <div class="col-md-8">
          {!! Form::text('email', null, 
          array(
          'class'=>'form-control', 
          'placeholder'=>'john@smith.com'
          )) !!}
        </div>
      </div>
      

      <div class="form-group row">
        <div class="col-md-1 col-md-offset-4 text-right">
          {!! Form::checkbox('terms', null, 
          array(
          'class'=>'form-control', 
          'placeholder'=>'john@smith.com'
          )) !!}
        </div>
        <div class="col-md-7">
          {!! Form::label('I Agree with the terms of entry') !!}
        </div>        
      </div>      

      <div class="form-group row">
        <div class="col-md-12 text-right">
          {!! Form::submit('Enter competition!', 
          array('class'=>'btn btn-primary'
          )) !!}
        </div>
      </div>
      {!! Form::close() !!}
    </div>  
  </div>
</div>
</div>
@endsection

