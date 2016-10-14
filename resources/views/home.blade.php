@extends('layouts.app')

@section('content')




<div class="container">
   <div class="row">
      <div class="col-md-10 col-md-offset-1">
         <div class="panel panel-default">
            <div class="panel-heading">Dashboard</div>

            <div class="panel-body">


               <legend>New Survey</legend>
               <div class="row">
                  <div class="col-md-12">
                     <div class="well">
                        {{ Form::open(array('class' => 'form-horizontal', 'id' => 'form-search')) }}  




                        <div class="row">
                           <div class="col-md-6">
                              @if ($errors->has('project'))  
                              <p class="text-danger">{{ $errors->first('project') }}</p>
                              @endif

                              {{ Form::text('project', old('project'), array('class'=>'form-control', 'placeholder' => 'Project Name')) }} 
                              <br>
                              {{ Form::button('Create', array('class' => 'btn btn-primary', 'type' => 'submit', 'name' => 'btn-search')) }}
                           </div>
                        </div>



                        {{ Form::close() }}
                     </div>
                  </div>            
               </div>


               <div class="row">
                  <div class="col-md-12"> 
                     <legend>Previous Survey</legend>
                     <div class="well">
                        <table class="table table-striped table-condensed table-responsive table-hover">
                           <thead>
                              <tr class="bg-default">
                                 <th>No</th>
                                 <th>Project Name</th>
                                 <th>Date Apply</th>
                                 <th class="text-right">Actions</th>                                                      
                              </tr>
                           </thead>
                           <tr>
                              <td>1</td>
                              <td>Survey 1</td>
                              <td>2016-10-11</td>
                              <td class="text-right"><a href="" alt="" class="btn btn-primary btn-sm" title="View"><i class="icon-magnifier"></i></a></td>
                           </tr>
                           <tr>
                              <td colspan="4">No record</td>
                           </tr>
                        </table>
                     </div>    

                  </div>
               </div>


            </div>
         </div>





      </div>
   </div>
</div>
@endsection
