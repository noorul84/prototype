@extends('layouts.app')

@section('content')


{{ Form::open(array('role'=>'form')) }}
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Project: <strong>{{ session()->get('project') }}</strong> | Step 1</div>

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
                            <td rowspan="4"><div align="center">Content</div></td>
                            <td>The e-government portal provides the precise information to the user.</td>
                            <td>
                                <div align="center">
                                    {{ Form::radio('a1', 1) }}                  
                                </div>
                            </td>
                            <td>
                                <div align="center">
                                    {{ Form::radio('a1', 2) }}                  
                                </div>
                            </td>
                            <td>
                                <div align="center">
                                    {{ Form::radio('a1', 3) }}                  
                                </div>
                            </td>
                            <td>
                                <div align="center">
                                    {{ Form::radio('a1', 4) }}                  
                                </div>
                            </td>
                            <td>
                                <div align="center">
                                    {{ Form::radio('a1', 5) }}                                  
                                </div>
                            </td>
                        </tr>




                        <tr>
                            <td>The e-government  portal content meets user needs.</td>
                            <td>
                                <div align="center">
                                    {{ Form::radio('a2', 1) }}
                                </div>
                            </td>
                            <td>
                                <div align="center">
                                    {{ Form::radio('a2', 2) }}
                                </div>
                            </td>
                            <td>
                                <div align="center">
                                    {{ Form::radio('a2', 3) }}
                                </div>
                            </td>
                            <td>
                                <div align="center">
                                    {{ Form::radio('a2', 4) }}
                                </div>
                            </td>
                            <td>
                                <div align="center">
                                    {{ Form::radio('a2', 5) }}
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>The e-government portal provides report that  seems to be exactly what they need.</td>
                            <td>
                                <div align="center">
                                    {{ Form::radio('a3', 1) }}
                                </div>
                            </td>
                            <td>
                                <div align="center">
                                    {{ Form::radio('a3', 2) }}
                                </div>
                            </td>
                            <td>
                                <div align="center">
                                    {{ Form::radio('a3', 3) }}
                                </div>
                            </td>
                            <td>
                                <div align="center">
                                    {{ Form::radio('a3', 4) }}
                                </div>
                            </td>
                            <td>
                                <div align="center">
                                    {{ Form::radio('a3', 5) }}
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>The e-government  portal provides sufficient information.</td>
                            <td>
                                <div align="center">
                                    {{ Form::radio('a4', 1) }}
                                </div>
                            </td>
                            <td>
                                <div align="center">
                                    {{ Form::radio('a4', 2) }}
                                </div>
                            </td>
                            <td>
                                <div align="center">
                                    {{ Form::radio('a4', 3) }}
                                </div>
                            </td>
                            <td>
                                <div align="center">
                                    {{ Form::radio('a4', 4) }}
                                </div>
                            </td>
                            <td>
                                <div align="center">
                                    {{ Form::radio('a4', 5) }}
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td rowspan="2"><div align="center">Accuracy</div></td>
                            <td>The e-government portal is accurate.</td>
                            <td>
                                <div align="center">
                                    {{ Form::radio('a5', 1) }}
                                </div>
                            </td>
                            <td>
                                <div align="center">
                                    {{ Form::radio('a5', 2) }}
                                </div>
                            </td>
                            <td>
                                <div align="center">
                                    {{ Form::radio('a5', 3) }}
                                </div>
                            </td>
                            <td>
                                <div align="center">
                                    {{ Form::radio('a5', 4) }}
                                </div>
                            </td>
                            <td>
                                <div align="center">
                                    {{ Form::radio('a5', 5) }}
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td> User satisfied with the accuracy of e-government  portal.</td>
                            <td>
                                <div align="center">
                                    {{ Form::radio('a6', 1) }}
                                </div>
                            </td>
                            <td>
                                <div align="center">
                                    {{ Form::radio('a6', 2) }}
                                </div>
                            </td>
                            <td>
                                <div align="center">
                                    {{ Form::radio('a6', 3) }}
                                </div>
                            </td>
                            <td>
                                <div align="center">
                                    {{ Form::radio('a6', 4) }}
                                </div>
                            </td>
                            <td>
                                <div align="center">
                                    {{ Form::radio('a6', 5) }}
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td rowspan="2"><div align="center">Format</div></td>
                            <td>The e-government portal output is presented  in a useful format.</td>
                            <td>
                                <div align="center">
                                    {{ Form::radio('a7', 1) }}
                                </div>
                            </td>
                            <td>
                                <div align="center">
                                    {{ Form::radio('a7', 2) }}
                                </div>
                            </td>
                            <td>
                                <div align="center">
                                    {{ Form::radio('a7', 3) }}
                                </div>
                            </td>
                            <td>
                                <div align="center">
                                    {{ Form::radio('a7', 4) }}
                                </div>
                            </td>
                            <td>
                                <div align="center">
                                    {{ Form::radio('a7', 5) }}
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>The e-government portal information is clear.</td>
                            <td>
                                <div align="center">
                                    {{ Form::radio('a8', 1) }}
                                </div>
                            </td>
                            <td>
                                <div align="center">
                                    {{ Form::radio('a8', 2) }}
                                </div>
                            </td>
                            <td>
                                <div align="center">
                                    {{ Form::radio('a8', 3) }}
                                </div>
                            </td>
                            <td>
                                <div align="center">
                                    {{ Form::radio('a8', 4) }}
                                </div>
                            </td>
                            <td>
                                <div align="center">
                                    {{ Form::radio('a8', 5) }}
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td rowspan="5"><div align="center">Ease of Use</div></td>
                            <td>The e-government portal is user-friendly.</td>
                            <td>
                                <div align="center">
                                    {{ Form::radio('a9', 1) }}
                                </div>
                            </td>
                            <td>
                                <div align="center">
                                    {{ Form::radio('a9', 2) }}
                                </div>
                            </td>
                            <td>
                                <div align="center">
                                    {{ Form::radio('a9', 3) }}
                                </div>
                            </td>
                            <td>
                                <div align="center">
                                    {{ Form::radio('a9', 4) }}
                                </div>
                            </td>
                            <td>
                                <div align="center">
                                    {{ Form::radio('a9', 5) }}
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>The e-government portal is easy to use.</td>
                            <td>
                                <div align="center">
                                    {{ Form::radio('a10', 1) }}
                                </div>
                            </td>
                            <td>
                                <div align="center">
                                    {{ Form::radio('a10', 2) }}
                                </div>
                            </td>
                            <td>
                                <div align="center">
                                    {{ Form::radio('a10', 3) }}
                                </div>
                            </td>
                            <td>
                                <div align="center">
                                    {{ Form::radio('a10', 4) }}
                                </div>
                            </td>
                            <td>
                                <div align="center">
                                    {{ Form::radio('a10', 5) }}
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>It would easy for user to become skillful  when using e-government portal.</td>
                            <td>
                                <div align="center">
                                    {{ Form::radio('a11', 1) }}
                                </div>
                            </td>
                            <td>
                                <div align="center">
                                    {{ Form::radio('a11', 2) }}
                                </div>
                            </td>
                            <td>
                                <div align="center">
                                    {{ Form::radio('a11', 3) }}
                                </div>
                            </td>
                            <td>
                                <div align="center">
                                    {{ Form::radio('a11', 4) }}
                                </div>
                            </td>
                            <td>
                                <div align="center">
                                    {{ Form::radio('a11', 5) }}
                                </div>
                            </td>  </tr>
                            <tr>
                                <td>User interaction with e-government portal  is clear and understandable.</td>
                                <td>
                                    <div align="center">
                                    {{ Form::radio('a12', 1) }}
                                    </div>
                                </td>
                                <td>
                                    <div align="center">
                                    {{ Form::radio('a12', 2) }}
                                    </div>
                                </td>
                                <td>
                                    <div align="center">
                                    {{ Form::radio('a12', 3) }}
                                    </div>
                                </td>
                                <td>
                                    <div align="center">
                                    {{ Form::radio('a12', 4) }}
                                    </div>
                                </td>
                                <td>
                                    <div align="center">
                                        {{ Form::radio('a12', 5) }}
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Learning use the e-government portal is easy.</td>
                                <td>
                                    <div align="center">
                                        {{ Form::radio('a13', 1) }}
                                    </div>
                                </td>
                                <td>
                                    <div align="center">
                                        {{ Form::radio('a13', 2) }}
                                    </div>
                                </td>
                                <td>
                                    <div align="center">
                                        {{ Form::radio('a13', 3) }}
                                    </div>
                                </td>
                                <td>
                                    <div align="center">
                                        {{ Form::radio('a13', 4) }}
                                    </div>
                                </td>
                                <td>
                                    <div align="center">
                                        {{ Form::radio('a13', 5) }}
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td rowspan="2"><div align="center">Timeliness</div></td>
                                <td>Using the e-government portal, user can get  the information they need.</td>
                                <td>
                                    <div align="center">
                                        {{ Form::radio('a14', 1) }}
                                    </div>
                                </td>
                                <td>
                                    <div align="center">
                                        {{ Form::radio('a14', 2) }}
                                    </div>
                                </td>
                                <td>
                                    <div align="center">
                                        {{ Form::radio('a14', 3) }}
                                    </div>
                                </td>
                                <td>
                                    <div align="center">
                                        {{ Form::radio('a14', 4) }}
                                    </div>
                                </td>
                                <td>
                                    <div align="center">
                                        {{ Form::radio('a14', 5) }}
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>The e-government portal provides up-to-date  information</td>
                                <td>
                                    <div align="center">
                                        {{ Form::radio('a15', 1) }}
                                    </div>
                                </td>
                                <td>
                                    <div align="center">
                                        {{ Form::radio('a15', 2) }}
                                    </div>
                                </td>
                                <td>
                                    <div align="center">
                                        {{ Form::radio('a15', 3) }}
                                    </div>
                                </td>
                                <td>
                                    <div align="center">
                                        {{ Form::radio('a15', 4) }}
                                    </div>
                                </td>
                                <td>
                                    <div align="center">
                                        {{ Form::radio('a15', 5) }}
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
