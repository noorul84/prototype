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
         <td rowspan="2"><div align="center">Entertainment</div></td>
         <td>User feel happy when use the e-government  portal.</td>
         <td>
            <div align="center">
               {{ Form::radio('d1', 1) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('d1', 2) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('d1', 3) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('d1', 4) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('d1', 5) }}             
            </div>
         </td>
      </tr>
      <tr>
         <td>User cheerful when use the e-government portal.</td>
         <td>
            <div align="center">
               {{ Form::radio('d2', 1) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('d2', 2) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('d2', 3) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('d2', 4) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('d2', 5) }}             
            </div>
         </td>

      </tr>
      <tr>
         <td rowspan="3"><div align="center">Consistance Image</div></td>
         <td>The e-government portal image is  consistent with the government image.</td>
         <td>
            <div align="center">
               {{ Form::radio('d3', 1) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('d3', 2) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('d3', 3) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('d3', 4) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('d3', 5) }}             
            </div>
         </td>
      </tr>
      <tr>
         <td>The e-government portal fits with Malaysia  image.</td>
         <td>
            <div align="center">
               {{ Form::radio('d4', 1) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('d4', 2) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('d4', 3) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('d4', 4) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('d4', 5) }}             
            </div>
         </td>
      </tr>
      <tr>
         <td>The e-government portal images matches of the  government.</td>
         <td>
            <div align="center">
               {{ Form::radio('d5', 1) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('d5', 2) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('d5', 3) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('d5', 4) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('d5', 5) }}             
            </div>
         </td>
      </tr>
      <tr>
         <td rowspan="3"><div align="center">Relative Advantage</div></td>
         <td>It is easier to use the e-government portal  to complete user administrative task with the e-government portal than it is to  telephone, fax or email administrative staff.
         </td>
         <td>
            <div align="center">
               {{ Form::radio('d6', 1) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('d6', 2) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('d6', 3) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('d6', 4) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('d6', 5) }}             
            </div>
         </td>
      </tr>
      <tr>
         <td>The e-government portal is easier to use  than calling the portal administrative staff on the phone.</td>
         <td>
            <div align="center">
               {{ Form::radio('d7', 1) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('d7', 2) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('d7', 3) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('d7', 4) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('d7', 5) }}             
            </div>
         </td>
      </tr>
      <tr>
         <td>The e-government portal is an alternative to  calling administrative staff.</td>
         <td>
            <div align="center">
               {{ Form::radio('d8', 1) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('d8', 2) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('d8', 3) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('d8', 4) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('d8', 5) }}             
            </div>
         </td>
      </tr>
      <tr>
         <td rowspan="2"><div align="center">Website structure</div></td>
         <td>The e-government portal is clearly  structure.</td>
         <td>
            <div align="center">
               {{ Form::radio('d9', 1) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('d9', 2) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('d9', 3) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('d9', 4) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('d9', 5) }}             
            </div>
         </td>
      </tr>
      <tr>
         <td>The structure of the e-government portal is  convenient.</td>
         <td>
            <div align="center">
               {{ Form::radio('d10', 1) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('d10', 2) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('d10', 3) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('d10', 4) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('d10', 5) }}             
            </div>
         </td>
      </tr>
      <tr>
         <td rowspan="2"><div align="center">Entry Guidance</div></td>
         <td>The e-government portal start page leads  user easily to the information they need.</td>
         <td>
            <div align="center">
               {{ Form::radio('d11', 1) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('d11', 2) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('d11', 3) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('d11', 4) }}             
            </div>
         </td>
         <td>
            <div align="center">
               {{ Form::radio('d11', 5) }}             
            </div>
         </td>  </tr>
         <tr>
            <td>The e-government portal start page tells user  immediately where user can find the information they looking for.</td>
            <td>
               <div align="center">
                  {{ Form::radio('d12', 1) }}             
               </div>
            </td>
            <td>
               <div align="center">
                  {{ Form::radio('d12', 2) }}             
               </div>
            </td>
            <td>
               <div align="center">
                  {{ Form::radio('d12', 3) }}             
               </div>
            </td>
            <td>
               <div align="center">
                  {{ Form::radio('d12', 4) }}             
               </div>
            </td>
            <td>
               <div align="center">
                  {{ Form::radio('d12', 5) }}             
               </div>
            </td>
         </tr>
         <tr>
            <td rowspan="3"><div align="center">Aesthetic Design</div></td>
            <td>The e-government portal is  colorful</td>
            <td>
               <div align="center">
                  {{ Form::radio('d13', 1) }}             
               </div>
            </td>
            <td>
               <div align="center">
                  {{ Form::radio('d13', 2) }}             
               </div>
            </td>
            <td>
               <div align="center">
                  {{ Form::radio('d13', 3) }}             
               </div>
            </td>
            <td>
               <div align="center">
                  {{ Form::radio('d13', 4) }}             
               </div>
            </td>
            <td>
               <div align="center">
                  {{ Form::radio('d13', 5) }}             
               </div>
            </td>
         </tr>
         <tr>
            <td>The e-government portal is  creative.</td>
            <td>
               <div align="center">
                  {{ Form::radio('d14', 1) }}             
               </div>
            </td>
            <td>
               <div align="center">
                  {{ Form::radio('d14', 2) }}             
               </div>
            </td>
            <td>
               <div align="center">
                  {{ Form::radio('d14', 3) }}             
               </div>
            </td>
            <td>
               <div align="center">
                  {{ Form::radio('d14', 4) }}             
               </div>
            </td>
            <td>
               <div align="center">
                  {{ Form::radio('d14', 5) }}             
               </div>
            </td>
         </tr>
         <tr>
            <td>The e-government portal  shows good picture of services available for user.</td>
            <td>
               <div align="center">
                  {{ Form::radio('d15', 1) }}             
               </div>
            </td>
            <td>
               <div align="center">
                  {{ Form::radio('d15', 2) }}             
               </div>
            </td>
            <td>
               <div align="center">
                  {{ Form::radio('d15', 3) }}             
               </div>
            </td>
            <td>
               <div align="center">
                  {{ Form::radio('d15', 4) }}             
               </div>
            </td>
            <td>
               <div align="center">
                  {{ Form::radio('d15', 5) }}             
               </div>
            </td>
         </tr>
         <tr>
            <td rowspan="2"><div align="center">Visual Appeal</div></td>
            <td>The e-government portal is visually pleasing.</td>
            <td>
               <div align="center">
                  {{ Form::radio('d16', 1) }}             
               </div>
            </td>
            <td>
               <div align="center">
                  {{ Form::radio('d16', 2) }}             
               </div>
            </td>
            <td>
               <div align="center">
                  {{ Form::radio('d16', 3) }}             
               </div>
            </td>
            <td>
               <div align="center">
                  {{ Form::radio('d16', 4) }}             
               </div>
            </td>
            <td>
               <div align="center">
                  {{ Form::radio('d16', 5) }}             
               </div>
            </td>
         </tr>
         <tr>
            <td>The e-government portal displays visually pleasing  design.</td>
            <td>
               <div align="center">
                  {{ Form::radio('d17', 1) }}             
               </div>
            </td>
            <td>
               <div align="center">
                  {{ Form::radio('d17', 2) }}
               </div>
            </td>
            <td>
               <div align="center">
                  {{ Form::radio('d17', 3) }}             
               </div>
            </td>
            <td>
               <div align="center">
                  {{ Form::radio('d17', 4) }}             
               </div>
            </td>
            <td>
               <div align="center">
                  {{ Form::radio('d17', 5) }}             
               </div>
            </td>
         </tr>
         <tr>
            <td rowspan="2"><div align="center">Innovativeness</div></td>
            <td>The e-government portal is innovativeness./td>
               <td>
                  <div align="center">
                     {{ Form::radio('d18', 1) }}             
                  </div>
               </td>
               <td>
                  <div align="center">
                     {{ Form::radio('d18', 2) }}             
                  </div>
               </td>
               <td>
                  <div align="center">
                     {{ Form::radio('d18', 3) }}             
                  </div>
               </td>
               <td>
                  <div align="center">
                     {{ Form::radio('d18', 4) }}             
                  </div>
               </td>
               <td>
                  <div align="center">
                     {{ Form::radio('d18', 5) }}             
                  </div>
               </td>
            </tr>
            <tr>
               <td>The e-government  portal design is innovativeness.</td>
               <td>
                  <div align="center">
                     {{ Form::radio('d19', 1) }}             
                  </div>
               </td>
               <td>
                  <div align="center">
                     {{ Form::radio('d19', 2) }}             
                  </div>
               </td>
               <td>
                  <div align="center">
                     {{ Form::radio('d19', 3) }}             
                  </div>
               </td>
               <td>
                  <div align="center">
                     {{ Form::radio('d19', 4) }}             
                  </div>
               </td>
               <td>
                  <div align="center">
                     {{ Form::radio('d19', 5) }}             
                  </div>
               </td>
            </tr>
            <tr>
               <td rowspan="2"><div align="center">Convinience Access</div></td>

               <td>The e-government portal helps user to  avoid long queues at the administrative building.</td>
               <td>
                  <div align="center">
                     {{ Form::radio('d20', 1) }}             
                  </div>
               </td>
               <td>
                  <div align="center">
                     {{ Form::radio('d20', 2) }}             
                  </div>
               </td>
               <td>
                  <div align="center">
                     {{ Form::radio('d20', 3) }}             
                  </div>
               </td>
               <td>
                  <div align="center">
                     {{ Form::radio('d20', 4) }}             
                  </div>
               </td>
               <td>
                  <div align="center">
                     {{ Form::radio('d20', 5) }}             
                  </div>
               </td>
            </tr>
            <tr>
               <td>User can find information they need easily on the  e-government portal.</td>
               <td>
                  <div align="center">
                     {{ Form::radio('d21', 1) }}             
                  </div>
               </td>
               <td>
                  <div align="center">
                     {{ Form::radio('d21', 2) }}             
                  </div>
               </td>
               <td>
                  <div align="center">
                     {{ Form::radio('d21', 3) }}             
                  </div>
               </td>
               <td>
                  <div align="center">
                     {{ Form::radio('d21', 4) }}             
                  </div>
               </td>
               <td>
                  <div align="center">
                     {{ Form::radio('d21', 5) }}             
                  </div>
               </td>
            </tr>



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
