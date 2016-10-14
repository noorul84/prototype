@extends('layouts.app')

@section('content')


{{ Form::open(array('role'=>'form')) }}
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Step 1</div>

                <div class="panel-body">
                    

                    <table class="table">
                        <tr>
                            <th scope="col">&nbsp;</th>
                            <th scope="col">&nbsp;</th>
                            <th colspan="5" scope="col">Strongly Dissatisfy........................... Stongly Satisfy</th>
                        </tr>
                        <tr>
                            <th>Attributes</th>
                            <th>Indicator</th>
                            <th><p>1</p><p>SD</p></th>
                            <th><p>2</p><p>D</p></th>
                            <th><p>3</p><p>N</p></th>
                            <th><p>4</p><p>S</p></th>
                            <th><p>5</p><p>SS</p></th>
                        </tr>




      <tr>
         <td rowspan="7"><div align="center">TRUST </div></td>
         <td><p>User fell their information in the  e-government portal is safe.<br />
            .</p></td>
            <td>
               <div align="center">
                  {{ Form::radio('c1', 1) }}             
               </div>
            </td>
            <td>
               <div align="center">
                  {{ Form::radio('c1', 2) }}             
               </div>
            </td>
            <td>
               <div align="center">
                  {{ Form::radio('c1', 3) }}             
               </div>
            </td>
            <td>
               <div align="center">
                  {{ Form::radio('c1', 4) }}             
               </div>
            </td>
            <td>
               <div align="center">
                  {{ Form::radio('c1', 5) }}             
               </div>
            </td>
         </tr>
         <tr>
            <td><p>User trusts the e-government portal to  keep their personal information safe.<br />
            </p></td>
            <td>
               <div align="center">
                  {{ Form::radio('c2', 1) }}             
               </div>
            </td>
            <td>
               <div align="center">
                  {{ Form::radio('c2', 2) }}             
               </div>
            </td>
            <td>
               <div align="center">
                  {{ Form::radio('c2', 3) }}             
               </div>
            </td>
            <td>
               <div align="center">
                  {{ Form::radio('c2', 4) }}             
               </div>
            </td>
            <td>
               <div align="center">
                  {{ Form::radio('c2', 5) }}             
               </div>
            </td>

         </tr>
         <tr>
            <td><p>User trust e-government administrator not  misuses their personal detail.<br />
            </p>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('c3', 1) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('c3', 2) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('c3', 3) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('c3', 4) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('c3', 5) }}             
            </div>
         </td>
      </tr>
      <tr>
         <td>User trust e-government portal fulfils the  commitments it assume<br />      <br />
         </td>
         <td>
            <div align="center">
               {{ Form::radio('c4', 1) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('c4', 2) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('c4', 3) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('c4', 4) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('c4', 5) }}             
            </div>
         </td>
      </tr>
      <tr>
         <td>User trust that the information in the  e-government portal to be sincere and honest.</td>
         <td>
            <div align="center">
               {{ Form::radio('c5', 1) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('c5', 2) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('c5', 3) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('c5', 4) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('c5', 5) }}             
            </div>
         </td>
      </tr>
      <tr>
         <td><p>User can have confidence in e-government  portal.</p>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('c6', 1) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('c6', 2) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('c6', 3) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('c6', 4) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('c6', 5) }}             
            </div>
         </td>
      </tr>
      <tr>
         <td>The e-government  portal does not make false statement.</td>
         <td>
            <div align="center">
               {{ Form::radio('c7', 1) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('c7', 2) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('c7', 3) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('c7', 4) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('c7', 5) }}             
            </div>
         </td>
      </tr>
      <tr>
         <td rowspan="2"><div align="center">SECURITY</div></td>
         <td><p>The e-government portal ensures user  security.</p></td>
         <td>
            <div align="center">
               {{ Form::radio('c8', 1) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('c8', 2) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('c8', 3) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('c8', 4) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('c8', 5) }}             
            </div>
         </td>
      </tr>
      <tr>
         <td>User confident with the security of the  e-government portal.</td>
         <td>
            <div align="center">
               {{ Form::radio('c9', 1) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('c9', 2) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('c9', 3) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('c9', 4) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('c9', 5) }}             
            </div>
         </td>
      </tr>
      <tr>
         <td rowspan="2"><div align="center">PRIVACY</div></td>
         <td><p>The e-government portal protects the  confidentiality of user information.</p></td>
         <td>
            <div align="center">
               {{ Form::radio('c10', 1) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('c10', 2) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('c10', 3) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('c10', 4) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('c10', 5) }}             
            </div>
         </td>
      </tr>
      <tr>
         <td>The e-government portal has adequate security  features.</td>
         <td>
            <div align="center">
               {{ Form::radio('c11', 1) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('c11', 2) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('c11', 3) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('c11', 4) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('c11', 5) }}             
            </div>
         </td>  </tr>





                    </table>


                </div>


               <div class="panel-footer" align="center">
                  {{ Form::button('Next&nbsp;<i class="icon-arrow-right"></i>',['type' => 'submit', 'class' => 'btn btn-primary'])  }}
               </div>            




            </div>            
        </div>
    </div>
</div>


{{ Form::close() }}


@endsection
