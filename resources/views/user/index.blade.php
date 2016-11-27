@extends('layouts.app')

@section('content')




<div class="container">
   <div class="row">
      <div class="col-md-10 col-md-offset-1">
         <div class="panel panel-default">
            <div class="panel-heading">User Management</div>
            <div class="panel-body">


               <div class="row">
                  <div class="col-md-12">
                     <div class="well">
                        {{ Form::open(array('class' => 'form-horizontal', 'id' => 'form-search')) }}  

                        <div class="row">
                           <div class="col-md-6">
                              @if ($errors->has('project'))  
                              <p class="text-danger">{{ $errors->first('project') }}</p>
                              @endif

                              {{ Form::text('text-search', null, array('class'=>'form-control', 'placeholder' => 'Name/Email')) }} 
                              <br>
                              {{ Form::button('Search', array('class' => 'btn btn-primary', 'type' => 'submit', 'name' => 'btn-search')) }}
                           </div>
                        </div>

                        {{ Form::close() }}
                     </div>
                  </div>            
               </div>




               {{ Form::open(array('class' => 'form-horizontal')) }}
               <div class="row">
                  <div class="col-md-12"> 
                     <div class="well">
                        <table class="table table-striped table-condensed table-responsive table-hover">
                           <thead>
                              <tr class="bg-default">
                                 <th>No</th>
                                 <th>Name</th>
                                 <th>Email</th>
                                 <th>Total Survey</th>
                                 <th class="text-right">Actions</th> 
                              </tr>
                           </thead>
                           @if (count($users) > 0)
                              <?php $no = $users->firstItem() - 1;?>
                              @foreach ($users as $i)
                                 <?php 
                                    $no++;                       
                                 ?>
                                 <tr>
                                    <td>{{ $no }}</td>
                                    <td>{{ $i->name }}</td>
                                    <td>{{ $i->email }}</td>
                                    <td>{{ \App\Survey::where('user_id', $i->id)->count() }}</td>
                                    <td class="text-right">
                                       <a href="{{ route('user.result', array($i->id)) }}" class="btn btn-primary btn-sm" title="View Result"><i class="icon-pie-chart"></i></a>&nbsp;{{ Form::button('<i class="icon-close"></i>',['type' => 'submit', 'class' => 'btn btn-primary btn-sm', 'title' => 'Delete', 'id' => 'btn_id', 'alt' => $i->id]) }}
                                    </td>
                                 </tr>
                              @endforeach
                           @else
                              <tr><td colspan="5">No record</td></tr>
                           @endif
                        </table>

                        <div class="paging text-center">  
                           {{ $users->render() }}      
                           <br>
                           <p>{{ 'Total: '.$users->total() }}</p>
                        </div>

                     </div>
                  </div>
               </div>
               {{ Form::hidden('id', null, array('id' => 'id')) }}               
               {{ Form::close() }}


            </div>
         </div>





      </div>
   </div>
</div>


<script type="text/javascript">
$(document).ready(function(){

   $(document).on('click','#btn_id',function() {
      var answer = confirm('Do you want to delete this record?');
      if (answer == true) {
         $('id').val($(this).attr('alt'));
      }
      else {
         return false;
      } 
   });

});
</script>

@endsection
